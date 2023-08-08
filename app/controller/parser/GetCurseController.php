<?php

namespace App\controller\parser;

use App\controller\SessionController;


class GetCurseController extends CalculationParserController
{


    public function getCurse()
    {
        SessionController::check();
        $curses = $this->db->select('curse');
        $rate = $this->calculation($curses);
        $userName = SessionController::get();
        echo $this->templates->render('indexParser', ['curses' => $curses, 'rate' => $rate, 'name' => $userName]);
    }
}