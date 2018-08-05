<div class="search">
    <div class="search1">
        <form>
            <input name="search1" placeholder="Поиск сотрудника">
            <input type="submit" value="Найти">
        </form>
    </div>
</div>
<table class="table_employees">
    <tr class="table_head">
        <th>Фамилия
            <span class="sort_simvol"><a href="{{ route('employees', ['sort' =>'surname', 'ASC']) }}"> &uarr;</a> <a href="{{ route('employees', ['sort' =>'surname', 'DESC']) }}">&darr;</a></span>
        </th>
        <th>Имя
            <span class="sort_simvol"><a href="{{ route('employees', ['sort' =>'name', 'ASC']) }}"> &uarr;</a><a href="{{ route('employees', ['sort' =>'name', 'DESC']) }}"> &darr;</a></span>
        </th>
        <th>Отчество
            <span class="sort_simvol"><a href="{{ route('employees', ['sort' =>'patronymic', 'ASC']) }}"> &uarr;</a><a href="{{ route('employees', ['sort' =>'patronymic', 'DESC']) }}"> &darr;</a></span>
        </th>
        <th>Зарплата
            <span class="sort_simvol"><a href="{{ route('employees', ['sort' =>'salary', 'ASC']) }}"> &uarr;</a><a href="{{ route('employees', ['sort' =>'salary', 'DESC']) }}">  &darr;</a></span>
        </th>
        <th>Должность
            <span class="sort_simvol"><a href="{{ route('employees', ['sort' =>'roles', 'ASC']) }}"> &uarr;</a><a href="{{ route('employees', ['sort' =>'roles', 'DESC']) }}">  &darr;</a></span>
        </th>
        <th>Отдел
            <span class="sort_simvol"><a href="{{ route('employees', ['sort' =>'departments', 'ASC']) }}"> &uarr;</a><a href="{{ route('employees', ['sort' =>'departments', 'DESC']) }}"> &darr;</a></span>
        </th>
        <th>Дата приема на раюоту
            <span class="sort_simvol"><a href="{{ route('employees', ['sort' =>'date_started_at_work', 'ASC']) }}">&uarr;</a><a href="{{ route('employees', ['sort' =>'date_started_at_work', 'DESC']) }}"> &darr;</a></span>
        </th>
    </tr>
@foreach($employees as $employee)
    <tr class="table_body">
        <td>{{$employee->surname}}</td>
        <td>{{$employee->name}}</td>
        <td>{{$employee->patronymic}}</td>
        <td>{{$employee->salary . 'uan'}}</td>
        <td>{{$employee->roles}}</td>
        <td>{{(($employee->department_id != 1)?$employee->departments : '')}}</td>
        <td>{{$employee->date_started_at_work}}</td>
    </tr>
@endforeach

</table>