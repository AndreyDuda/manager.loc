
@foreach($employees as $k=>$employee)
    @if($department < $employee->department_id)
        <?php $department = $employee->department_id;?>
        @if($employee->role_id > 1)</ul></ul>@endif
        <ul>
            <li>{{ ($employee->department_id != 0)? $employee->department->title:'' }}</li>
        </ul>
        <ul>
            <ul>
            @include('index.components.tree', ['employees' => $employees, 'department' => $department])
        </ul>
        @break
    @endif

    @if($department == $employee->department_id)
    <li>{{$k . '.' .$employee->name . ' - ' . $employee->role_id . ' - ' . (($employee->department_id != 0)? $employee->department->title:'')}}  </li>
    @endif
@endforeach

