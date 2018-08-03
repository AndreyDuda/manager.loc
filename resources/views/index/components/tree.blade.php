{{--
@foreach($employees as $k=>$employee)

    @if($department < $employee->department_id)
        @if($employee->role_id > 1 || 1)
            </ul></ul>
        @endif
        <ul>
            <li>{{ ($employee->department_id != 0)? $employee->department->title:'' }}</li>
        </ul>
        <ul>
            <ul>
            @include('index.components.tree', ['employees' => $employees, 'department' => $employee->department_id])
            </ul>
        </ul>
        @break
    @endif

    @if($department == $employee->department_id)
    <li>{{$k . '.' .$employee->name . ' - ' . $employee->role_id . ' - ' . (($employee->department_id != 0)? $employee->department->title:'')}}  </li>
    @endif
@endforeach--}}


{{--
@foreach($employees as $employee)

    @if($role < $employee->role_id)
        @if($department < $employee->department_id && $employee->department_id != 0)
        <ul>
            <li>{{ ($employee->department_id > $department)? $employee->department->title:'' }}</li>
        </ul>
        @endif
        <ul>
            @include('index.components.tree', ['employees' => $employees, 'department' => $employee->department_id, 'role' => $employee->role_id])
        </ul>

        @break
    @endif

    @if($department == $employee->department_id)
        <li>{{$employee->id . '. ' .$employee->surname .' '.$employee->name . ' - ' . $employee->role_id . ' - ' . (($employee->department_id != 0)? $employee->department->title:'')}}  </li>
    @endif

@endforeach
--}}


<ul>
@foreach($employees as $k=>$employee)
    @if($role < $employee->role_id)
        @include('index.components.tree', ['employees' => $employees, 'department' => $employee->department_id, 'role' => $employee->role_id])
        @break
    @endif

    @if($role == $employee->role_id)
        <li>{{$employee->name . ' - ' . $employee->role_id}}  </li>
    @endif
@endforeach
</ul>
