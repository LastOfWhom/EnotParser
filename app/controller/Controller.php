<?php

namespace App\controller;

use League\Plates\Engine;

abstract class Controller
{
    protected $db;
    protected $templates;
    public function __construct()
    {
        $this->db = new QueryBuyeldier();
        $this->templates = new Engine('../app/view');
    }
}