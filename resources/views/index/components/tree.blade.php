<ul>
<?php echo count($employees) ?>


@foreach($employees as $k=>$employee)
    <?php next($employees) ?>
    @if($role < $employee->role_id)
        <?php $role = $employee->role_id; next($employees)?>
        <li>{{ ($employee->department_id != 0)? $employee->department->title:'' }}</li>
       @include('index.components.tree', ['employees' => $employees])
    @endif
    <li>{{$k . '.' .$employee->name . ' - ' . $employee->role_id}}  </li>

@endforeach
</ul>
