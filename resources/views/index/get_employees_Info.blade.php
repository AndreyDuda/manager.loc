<table class="table_employees">
    <tr class="table_head">
        <th>Фамилия <span class="sort_simvol">&uarr; &darr;</span></th>
        <th>Имя <span class="sort_simvol">&uarr; &darr;</span></th>
        <th>Отчество <span class="sort_simvol">&uarr; &darr;</span></th>
        <th>Зарплата <span class="sort_simvol">&uarr; &darr;</span></th>
        <th>Должность <span class="sort_simvol">&uarr; &darr;</span></th>
        <th>Отдел <span class="sort_simvol">&uarr; &darr;</span></th>
        <th>Дата приема на раюоту <span class="sort_simvol">&uarr; &darr;</span></th>
    </tr>
@foreach($employees as $employee)
    <tr class="table_body">
        <td>{{$employee->surname}}</td>
        <td>{{$employee->name}}</td>
        <td>{{$employee->patronymic}}</td>
        <td>{{$employee->salary . 'uan'}}</td>
        <td>{{$employee->role->title}}</td>
        <td>{{(($employee->department_id != 1)?$employee->department->title : '')}}</td>
        <td>{{$employee->date_started_at_work}}</td>
    </tr>
@endforeach

</table>