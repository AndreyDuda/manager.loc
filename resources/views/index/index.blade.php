{{--@include('index.components.tree', ['employees' => $employees, 'department' => $department, 'role' => $role])--}}

<ul >
    @foreach($employees as $employee)
        @if($role != $employee->role_id)
            @if($department != $employee->department_id)
                @if($role > $employee->role_id)
                    </ul></ul></ul>
                @else
                    <ul>
                @endif
                <li>{{$employee->department->title}}</li>
                <ul>
            @elseif($role < $employee->role_id)
                <ul>
            @else
                </ul>
            @endif

            <?php $role = $employee->role_id; $department = $employee->department_id?>
        @endif

        @if($role == $employee->role_id)
                <li>{{$employee->surname .' '.$employee->name . ' - ' . $employee->role->title }}  </li>
        @endif
    @endforeach
        </ul>
    </ul>
</ul>
