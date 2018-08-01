{{--
<table class="table_employees">
    <tr class="table_head">
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Должность</th>
        <th>Отдел</th>
    </tr>
@foreach($employees as $employee)
    <tr>
        <td>{{$employee->surname}}</td>
        <td>{{$employee->name}}</td>
        <td>{{$employee->patronymic}}</td>
        <td>{{$employee->role->title}}</td>
        <td>{{$employee->department->title OR ''}}</td>
    </tr>
@endforeach

</table>--}}
<ul>
@include('index.components.tree', ['employees' => $employees1])
