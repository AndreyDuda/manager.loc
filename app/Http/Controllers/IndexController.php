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
        $employees = $this->employees_rep->get('*', true);
        $data = [
            'employees' => $employees,
            'role'      => 0,
            'department'=> 0
        ];

        $content = view( 'index.index')->with($data)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }

    public function getEmployeesInfo(Request $request, $sort = false)
    {
        $sort = $request->sort;
        $type = $request->type;
        $search = $request->search1;

        $employees = $this->employees_rep->getOrder($sort, $type, $search);

        $data = [
            'employees' => $employees
        ];

        $content = view( 'index.get_employees_Info')->with($data)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }
    public function ajaxSearchAndSort(Request $request)
    {
        $sort = $request->sort;
        $type = $request->type;
        $search = $request->search1;
        $employees = $this->employees_rep->getOrder($sort, $type, $search);


        return json_encode($employees);
    }


}
