<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RoleRepository;
use App\Repositories\EmployeeRepository;
use App\Repositories\DepartmentRepository;

class IndexController extends SiteController
{
    //
    public function __construct(EmployeeRepository $employees_rep)
    {
        $this->employees_rep = $employees_rep;
        $this->template = '.index';

    }

    public function index()
    {
        $employees = $this->employees_rep->get();
        $content = view( 'index.index')->with('employees', $employees)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();

    }
}
