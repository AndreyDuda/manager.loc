{{--<ul>
@foreach($employees as $k=>$employee)
    @if($role < $employee->role_id)
        @include('index.components.tree', ['employees' => $employees, 'department' => $employee->department_id, 'role' => $employee->role_id])
        @break
    @endif

    @if($role == $employee->role_id)
        <li>{{$employee->name . ' - ' . $employee->role_id}}  </li>
    @endif
@endforeach
</ul>--}}

