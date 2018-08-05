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

<ul>
    @foreach($employees as $employee)
        @if($role != $employee->role_id)
            @if($department != $employee->department_id)
                @if($role > $employee->role_id)
</ul>

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
                <li>{{$employee->id . '. ' .$employee->surname .' '.$employee->name . ' - ' . $employee->role_id . ' - ' . (($employee->department_id != 0)? $employee->department->title:'')}}  </li>
            @endif
            @endforeach
        </ul>
    </ul>
    </ul>


    {{--
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
</div>--}}