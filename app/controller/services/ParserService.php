<?php

namespace App\controller\services;

use App\controller\Controller;

class ParserService extends Controller
{
    public function store()
    {
        $currency = $this->db->select('curse');
        $file = file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js?');
        $curse = json_decode($file);

        if(!empty($currency)) {
            foreach ($curse->Valute as $item) {
                $this->db->update('Curse', ['ID' => $item->ID, 'NumCode' => $item->NumCode, 'CharCode' => $item->CharCode,
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