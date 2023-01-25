<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use phpQuery;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = DB::table('schools')->get();

        return view('schools', compact('schools'));
    }

    public function show($id)
    {
        $school = DB::table('schools')->where('id', '=', $id)->get();
        $comments = DB::table('comments')->where('school_id', '=', $id)->get();
        return view('school',compact('school', 'comments'));
    }

    public function Parse($url)
    {
        $curl = file_get_contents($url);
        return $curl;
    }

    public function ParseSchool()
    {
        DB::table('schools')->truncate();

        $arrDataCardsArr = array();
        for ($i = 1; $i <= 6; $i++) {
            $html = $this->Parse("https://choosecourse.ru/school/page/" . $i);
            $pq = phpQuery::newDocument($html);

            $arrDataCards = $pq->find(".list_container > .school .buttons > a:first-child");

            foreach ($arrDataCards as $item) {
                $linkAgr = pq($item)->attr("href");
                $html = $this->Parse($linkAgr);
                $pq = phpQuery::newDocument($html);

                $arrDataCardsArr[] = [
                    'name' => $pq->find(".h1")->text(),
                    'description' => $pq->find(".left_part > .info > p:first-child")->text(),
                    'link' => $pq->find(".right_part > .school_card a")->attr("href"),
                    'right' => $pq->find(".school_info"),
                    'image' => $pq->find(".right_part > .school_card img")->attr("src"),
                    'comments' => $pq->find(".revs_list")->html()
                ];
            }
        }
        DB::table('schools')->insert($arrDataCardsArr);
    }
}
