{{--@include('index.components.tree', ['employees' => $employees, 'department' => $department, 'role' => $role])--}}

<div class="accordion" >
<ul >
    @foreach($employees as $employee)
        @if($role != $employee->role_id)
            @if($department != $employee->department_id)
                @if($role > $employee->role_id)
                </ul>

                @else
                 <ul class="second">

                @endif
                     <li>{{$employee->department->title}}</li>
                     <ul class="second">
            @elseif($role < $employee->role_id)
                 <ul class="second">
            @else
                 </ul>
            @endif

            <?php $role = $employee->role_id; $department = $employee->department_id?>
        @endif

            @if($role == $employee->role_id)
                    <li>{{$employee->id . '. ' .$employee->surname .' '.$employee->name . ' - ' . $employee->role_id . ' - ' . (($employee->department_id != 0)? $employee->department->title:'')}}  </li>
            @endif
    @endforeach
        </ul>
    </ul>
</ul>
</div>