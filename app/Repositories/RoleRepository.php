<?php
/**
 * Created by PhpStorm.
 * User: duda
 * Date: 29.07.18
 * Time: 23:56
 */

namespace App\Repositories;
use App\Role;

class RoleRepository extends Repository
{

    public function __construct(Role $role)
    {
        $this->model = $role;
    }
}