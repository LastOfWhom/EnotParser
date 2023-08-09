<?php

namespace App\controller\curse;

use App\controller\Controller;
use App\controller\SessionController;

class CurseController extends Controller
{
    public function getCurse()
    {
        SessionController::check();
        $curses = $this->db->select('curse');
        $rate = $this->calculation($curses);
        $userName = SessionController::get();
        echo $this->templates->render('indexParser', ['curses' => $curses, 'rate' => $rate, 'name' => $userName]);
    }
    public function calculation($curses){
        if($_POST){
            $from = 0;
            $to = 0;
            foreach ($curses as $curse){
                if($curse['CharCode'] == $_POST['from']){
                    $from = $curse['Previous'];
                }
                if($curse['CharCode'] == $_POST['to']){
                    $to = $curse['Previous'];
                }
            }
            $resultCurse = $from / $to * (float) ($_POST['amount']);
            return $resultCurse;
        }
    }
}