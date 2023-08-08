<?php

namespace App\controller\parser;

use App\controller\Controller;
use App\controller\QueryBuyeldier;

class StoreParserController extends Controller
{
//    private $db;
////    public function __construct(QueryBuyeldier $queryBuyeldier)
////    {
////        $this->db = $queryBuyeldier;
////    }

    public function store()
    {
        $currency = $this->db->select('Curse');
        $file = file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js?');
        $curse = json_decode($file);


        if(!empty($currency)) {
            foreach ($curse->Valute as $item) {

                $this->db->update('Curse', ['ID' => $item->ID, 'NumCode' => $item->NumCode, 'CharCode' => 'DSDSDSD',
                    'Nominal' => $item->Nominal, 'Name' => $item->Name, 'Value' => $item->Value, 'Previous' => $item->Previous], $item->ID);
            }
        }
        else{

            foreach ($curse->Valute as $item) {
                $this->db->insert('Curse', ['ID' => $item->ID, 'NumCode' => $item->NumCode, 'CharCode' => $item->CharCode,
                    'Nominal' => $item->Nominal, 'Name' => $item->Name, 'Value' => $item->Value, 'Previous' => $item->Previous]);
            }
        }
    }
}