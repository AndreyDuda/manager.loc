<?php
/**
 * Created by PhpStorm.
 * User: duda
 * Date: 29.07.18
 * Time: 23:54
 */

namespace App\Repositories;
use App\Employees;
use Illuminate\Support\Facades\DB;

class EmployeeRepository extends Repository
{

    public function __construct(Employees $employees)
    {
        $this->model = $employees;
    }

    public function get($select = '*', $order=false)
    {
        $builder = $this->model->select($select);

        if($order){
            $builder->orderBy('department_id','ASC')->orderBy('role_id','ASC');
        }
        return $builder->get();
    }

    public function getOrder($sort, $type)
    {
        $builder = DB::table('employees')->join('departments', 'employees.department_id', '=', 'departments.id')->join('roles', 'employees.role_id', '=', 'roles.id')->select('employees.*','departments.title as departments', 'roles.title as roles' );


        if($sort && $type){
            $builder =$builder->orderBy($sort, $type);
        }

        return $builder->get();
    }

}