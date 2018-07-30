<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    //
    protected $table = 'employees';


    public function role()
    {
        return $this->hasOne('App\Role', 'id', 'role_id');
    }

    public function department()
    {
        return $this->hasOne('App\Department', 'id', 'department_id');
    }
}
