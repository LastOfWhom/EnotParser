<?php

namespace App\controller\parser;

class ParserController
{
    private $url;
//    public function __construct($url)
//    {
//        $this->url = $url;
//    }
    public function getValueWithPage()
    {
        $file = file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js?'.date('d/m/Y'));
        $curse = json_decode($file);
        foreach ($curse->Valute as $item) {
            echo $item->Name. ' '. $item->Value. '<br>';
        }
    }
}