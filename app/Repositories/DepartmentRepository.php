<?php
/**
 * Created by PhpStorm.
 * User: duda
 * Date: 29.07.18
 * Time: 23:52
 */

namespace App\Repositories;

use App\Department;

class DepartmentRepository extends Repository
{
    public function __construct(Department $department)
    {
        $this->model = $department;
    }

}