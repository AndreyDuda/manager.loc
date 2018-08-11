<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    //
    protected $table = 'employees';
    protected $fillable = ['surname', 'name', 'photo','patronymic', 'salary', 'date_started_at_work', 'role_id', 'department_id', 'created_at', 'updated_at'];


    public function role()
    {
        return $this->hasOne('App\Role', 'id', 'role_id');
    }

    public function department()
    {
        return $this->hasOne('App\Department', 'id', 'department_id');
    }
}
