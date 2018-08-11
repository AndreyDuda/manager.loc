<?php

namespace App\Http\Controllers\CRUD;


use Illuminate\Http\Request;
use App\Repositories\RoleRepository;
use App\Repositories\EmployeeRepository;
use App\Repositories\DepartmentRepository;

class EmployeeController extends SiteController
{
    //
    public function __construct(EmployeeRepository $employees_rep, RoleRepository $roles_rep, DepartmentRepository $departments_rep)
    {
        $this->employees_rep   = $employees_rep;
        $this->roles_rep       = $roles_rep;
        $this->departments_rep = $departments_rep;
        $this->template        = '.index';
    }

    public function index(Request $request)
    {
        $sort   = $request->sort;
        $type   = $request->type;
        $search = $request->search1;

        $employees = $this->employees_rep->getOrder($sort, $type, $search);

        $data = [
            'employees' => $employees
        ];

        $content    = view( 'crud.employee.index')->with($data)->render();
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

        if($employee = $this->employees_rep->getOne($id)){
            $roles       = $this->roles_rep->get();
            $departments = $this->departments_rep->get();

            $dir         = 'img/employees';
            $images      = scandir($dir);

            $data = [
                'employee'    => $employee,
                'roles'       => $roles,
                'departments' => $departments,
                'images'      => $images
            ];

            $content    = view( 'crud.employee.show')->with($data)->render();
            $this->vars = array_add($this->vars, 'content', $content);
            return $this->renderOutput();
        }else{
            return redirect()->back();

        }

    }
    public function update(Request $request)
    {
        $input = $request->except('_token');
        $id = $input['id'];
        unset($input['id']);

        if($request->file()){
            $photo = $request->file('photo')->getClientOriginalName();

            $request->file('photo')->move('img/employees', $photo);
            unset($input['photo']);
            $input = array_add($input, 'photo',$photo);
        }
        $employee =  $this->employees_rep->getOne($id);
        $employee->update($input);
        return redirect()->back();

    }

    public function new(Request $request)
    {
        if($request->isMethod('post')) {
            $input = $request->except('_token');


            if($request->file()){
                $photo = $request->file('photo')->getClientOriginalName();

                $request->file('photo')->move('img/employees', $photo);
                unset($input['photo']);
                $input = array_add($input, 'photo',$photo);
            }
            $employee =  $this->employees_rep;
            $id = $employee->new($input);
            return redirect()->route('crudEmployeeShow', ['id' => $id]);
        }
            $roles = $this->roles_rep->get();
            $departments = $this->departments_rep->get();

            $data = [
                'roles' => $roles,
                'departments' => $departments
            ];

            $content = view('crud.employee.new')->with($data)->render();
            $this->vars = array_add($this->vars, 'content', $content);

            return $this->renderOutput();

    }




}
