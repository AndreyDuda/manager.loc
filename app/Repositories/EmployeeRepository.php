<?php
/**
 * Created by PhpStorm.
 * User: duda
 * Date: 29.07.18
 * Time: 23:54
 */

namespace App\Repositories;
use App\Employees;

class EmployeeRepository extends Repository
{

    public function __construct(Employees $employees)
    {
        $this->model = $employees;
    }
}