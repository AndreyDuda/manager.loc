<?php
/**
 * Created by PhpStorm.
 * User: duda
 * Date: 29.07.18
 * Time: 23:50
 */

namespace App\Repositories;


abstract class Repository
{
    protected  $model = false;

    public function get($select = '*', $order=false)
    {
        $builder = $this->model->select($select);

        if($order){
            $builder->orderBy($order);
        }
        return $builder->get();
    }

    public function getOne($id)
    {
        $result = $this->model->where('id', $id)->first();
        return $result;
    }



}