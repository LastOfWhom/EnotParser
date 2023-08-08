<?php

namespace App\controller\parser;

use App\controller\Controller;
use App\controller\QueryBuyeldier;

class CalculationParserController extends Controller
{
    public function calculation($curses){
        if($_POST){
            $from = 0;
            $to = 0;
//            $curses = $this->db->select('curse');
            foreach ($curses as $curse){
                if($curse['CharCode'] == $_POST['from']){
                    $from = $curse['Value'];
                }
                if($curse['CharCode'] == $_POST['to']){
                    $to = $curse['Value'];
                }
            }

            $resultCurse = $from / $to * (float)($_POST['amount']);
            return $resultCurse;
        }


    }
}