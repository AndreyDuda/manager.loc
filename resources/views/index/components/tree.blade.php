<ul>
    <?php $role = 0 ?>
@foreach($employees as $employee)
    @if($role == 0)
        <li>{{ ($employee->department_id ==0)? $employee->role->title:$employee->department->title }}</li>
    @endif
    <li>{{$employee->surname . ' ' . $employee->name}}  </li>

    @if($role!=0)
    @endif
@endforeach
</ul>