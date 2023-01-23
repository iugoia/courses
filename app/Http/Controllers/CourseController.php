<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpQuery;

class CourseController extends Controller
{
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
        $html = $this->Parse("https://choosecourse.ru/courses");
        $pq = phpQuery::newDocument($html);

        $arrCourses = $pq->find(".page_container > .courses_block > ul > li:not(:first-child)");
        $arrDataCourses = array();

        foreach ($arrCourses as $course) {
            $pq = pq($course);
            $arrDataCourses[] = [
                'name' => $pq->find("h2 > a")->text(),
                'price' => preg_replace("/[^,.0-9]/", '', $pq->find(".container > p:nth-child(5)")->text()),
                'rck' => $pq->find(".container > p:nth-child(3)")->text(),
                'price_credit' => preg_replace("/[^,.0-9]/", '', $pq->find(".container > p:nth-child(6)")->text()),
                'during' => $pq->find(".container > p:nth-child(7)")->text(),
                'school' => $pq->find(".container > p:nth-child(4) > a:first-child")->text(),
                'link' => $pq->find("h2 > a")->attr("href")
            ];
        }
    }

//    public function Skillbox()
//    {
//        $i = 1;
//
//        while ($i <= 36){
//            $skillbox = $this->Parse("https://skillbox.ru/courses/?page=" . $i);
//            $pq = phpQuery::newDocument($skillbox);
//
//            $listLinks = $pq->find(".ui-product-card-main__wrap");
//            $listLinksData = array();
//
//            foreach ($listLinks as $link) {
//                $listLinksData[] = pq($link)->attr("href");
//            }
//            $courseCardsData = array();
//            foreach ($listLinksData as $link){
//                $page = $this->Parse($link);
//                $pq = phpQuery::newDocument($page);
//
//
//                $date = $pq->find(".price-info__data li:first-child > b")->text();
//                if (empty($date)){
//                    $date = $pq->find(".tariffs__info li:first-child > b")->text();
//                }

//                $places = $pq->find(".price-info__data li:last-child > b")->text();
//                if (empty($places)){
//                    $places = $pq->find(".tariffs__info li:last-child > b")->text();
//                }
//
//                $price_credit = $pq->find(".tariffs__list > li:first-child .tariffs__prices > li:first-child")->text();
//                if (empty($price_credit)){
//                    $price_credit = $pq->find(".price-info__list > li:first-child")->text();
//                }
//
//                var_dump($price_credit);
//
//                $courseCardsData[] = [
//                    'name' => $pq->find("h1")->text(),
//                    'oldprice' => 1,
//                    'price' => 1,
//                    'price_credit' => 1,
//                    'school' => "Skillbox",
//                    'places' => $places,
//                    'tiny_desc' => $pq->find(".start-screen-v1__desc")->text(),
//                    'start_date' => $date,
//                    'about' => $pq->find("#market"),
//                    'skills' => $pq->find("#skills"),
//                    'link' => $link,
//                    'comments' => $pq->find("#comments")
//                ];
//            }
//            $i++;
//        }
//    }
}
