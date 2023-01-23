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

    public function Skillbox()
    {
        $i = 1;

        while ($i <= 36){
            $skillbox = $this->Parse("https://skillbox.ru/courses/?page=" . $i);
            $pq = phpQuery::newDocument($skillbox);

            $listLinks = $pq->find(".ui-product-card-main__wrap");
            $listLinksData = array();

            foreach ($listLinks as $link) {
                $listLinksData[] = pq($link)->attr("href");
            }
            $courseCardsData = array();
            foreach ($listLinksData as $link){
                $page = $this->Parse($link);
                $pq = phpQuery::newDocument($page);


//                $date = $pq->find(".price-info__data li:first-child > b")->text();
//                if (empty($date)){
//                    $date = $pq->find(".tariffs__info li:first-child > b")->text();
//                }

                $places = $pq->find(".price-info__data li:last-child > b")->text();
                if (empty($places)){
                    $places = $pq->find(".tariffs__info li:last-child > b")->text();
                }

                echo $places . " ";


//                $courseCardsData[] = [
//                    'name' => $pq->find("h1")->text(),
//                    'oldprice' => 1,
//                    'price' => 1,
//                    'price_credit' => 1,
//                    'school' => "Skillbox",
//                    'places' => 1,
//                    'tiny_desc' => $pq->find(".start-screen-v1__desc")->text(),
//                    'start_date' => $date,
//                    'about' => $pq->find("#market"),
//                    'skills' => $pq->find("#skills"),
//                    'link' => $link,
//                    'comments' => $pq->find("#comments")
//                ];
            }
            $i++;
        }
    }
}
