<?php

namespace App\Http\Controllers\CRUD;


use Illuminate\Http\Request;
use App\Repositories\RoleRepository;
use App\Repositories\EmployeeRepository;
use App\Repositories\DepartmentRepository;

class EmployeeController extends SiteController
{
    //
    public function __construct(EmployeeRepository $employees_rep)
    {
        $this->employees_rep = $employees_rep;
        $this->template = '.index';
    }

    public function index(Request $request)
    {
        $sort = $request->sort;
        $type = $request->type;
        $search = $request->search1;

        $employees = $this->employees_rep->getOrder($sort, $type, $search);

        $data = [
            'employees' => $employees
        ];

        $content = view( 'crud.employee.index')->with($data)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }
    public function delete(Request $request)
    {
        $id=false;
        if($id = $request->id){
            $employees = $this->employees_rep->getOne($id);
            $employees->delete();
        }

        return $id;
    }

    public function show(Request $request)
    {
        $id = $request->id;

        if($employees = $this->employees_rep->getOne($id)){
            $data = [
                'employees' => $employees
            ];

            $content = view( 'crud.employee.show')->with($data)->render();
            $this->vars = array_add($this->vars, 'content', $content);
            return $this->renderOutput();
        }else{
            return redirect()->back();

        }

    }


}
