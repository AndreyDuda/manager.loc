<?php

namespace App\Http\Controllers\CRUD;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    protected $roles_rep;
    protected $employees_rep;
    protected $departments_rep;

    protected $vars = array();
    protected $template;

    public function __construct()
    {
    }

    public function renderOutput()
    {
        return view($this->template)->with($this->vars);
    }
}
