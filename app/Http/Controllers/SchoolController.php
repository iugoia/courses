<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpQuery;
class SchoolController extends Controller
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

    public function ParseSchool()
    {
        $html = $this->Parse("https://choosecourse.ru/school");
        $pq = phpQuery::newDocument($html);

        $n = $pq->find("ul.page-numbers > li:last-child")->text();
        echo $n;
    }
}
