<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpQuery;


class CourseController extends Controller
{
    public function index()
    {
        $count = DB::table('courses')->count();
        $min = DB::table('courses')->min('price');
        $max = DB::table('courses')->max('price');
        return view('courses', compact('count', 'min', 'max'));
    }

    public function Parse($url)
    {
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

        $result = curl_exec($curl);
        if ($result == false)
            dd("Ошибка CURL: " . curl_error($curl));
        else return $result;
    }

    public function ParseAgregator()
    {
        DB::table('courses')->truncate();

        $html = $this->Parse("https://choosecourse.ru/courses");
        $pq = phpQuery::newDocument($html);

        $arrCourses = $pq->find(".page_container > .courses_block > ul > li:not(:first-child)");
        $arrDataCourses = array();

        foreach ($arrCourses as $course) {
            $pq = pq($course);
            $price = preg_replace("/[^,.0-9]/", '', $pq->find(".container > p:nth-child(5)")->text());
            if ($price == '')
                $price = 0;
            $price_credit = preg_replace("/[^,.0-9]/", '', $pq->find(".container > p:nth-child(6)")->text());
            if ($price_credit == '')
                $price_credit = 0;
            $rck = str_replace(',', '.', $pq->find(".container > p:nth-child(3)")->text());
            if ($rck == '' || $rck == '?')
                $rck = 0;

            $arrDataCourses[] = [
                'name' => $pq->find("h2 > a")->text(),
                'price' => $price,
                'rck' => $rck,
                'price_credit' => $price_credit,
                'during' => $pq->find(".container > p:nth-child(7)")->text(),
                'school' => $pq->find(".container > p:nth-child(4) > a:first-child")->text(),
                'link' => $pq->find("h2 > a")->attr("href")
            ];
        }
        DB::table('courses')->insert($arrDataCourses);
    }

    public function about()
    {
        $numSchools = DB::table('schools')->count();
        $numCourses = DB::table('courses')->count();

        $schools = DB::table('schools')->inRandomOrder()->limit(6)->get();

        return view('about', compact('numCourses', 'numSchools', 'schools'));
    }
}
