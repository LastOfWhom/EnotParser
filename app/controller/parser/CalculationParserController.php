<?php

namespace App\controller\parser;

use App\controller\Controller;
use App\controller\QueryBuyeldier;

class StoreParserController extends Controller
{
    private $db;
    public function __construct(QueryBuyeldier $queryBuyeldier)
    {
        $this->db = $queryBuyeldier;
    }

    public function store()
    {
        var_dump($_POST);
        die;
        $file = file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js?'.date('d/m/Y'));
        $curse = json_decode($file);
        foreach ($curse->Valute as $item) {
            $this->db->insert('curse', ['ID' => $item->ID, 'NumCode' => $item->NumCode, 'CharCode' => $item->CharCode,
                'Nominal' => $item->Nominal, 'Name' => $item->Name, 'Value' => $item->Value, 'Previous' => $item->Previous]);
        }
        echo 'Все загрузилось';

    }
}