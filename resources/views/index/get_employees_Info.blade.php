{{ csrf_field() }}
<input type="hidden" class="url" value="{{ route('employeesSearchAndSort') }}">
<div class="search">
    <div class="search1">
        <form>
            <input name="search1" placeholder="Поиск сотрудника">
            <input type="submit" value="Найти">
        </form>
    </div>
    <div style="clear: both;"></div>
    <div class="search1">
        <label>Поиск Ajax</label>

            <input class="search_ajax" name="search2" placeholder="Поиск сотрудника">
            <input type="button" class="search_but" value="Найти">
    </div>
</div>
<table class="table_employees">

    <tr class="table_head">
        <th>Фамилия
            <span class="sort_simvol"><a href="{{ route('employees', ['sort' =>'surname', 'ASC']) }}"> &#11015;</a> <a href="{{ route('employees', ['sort' =>'surname', 'DESC']) }}">&#11014;</a></span>
        </th>
        <th>Имя
            <span class="sort_simvol"><a href="{{ route('employees', ['sort' =>'name', 'ASC']) }}"> &#11015;</a><a href="{{ route('employees', ['sort' =>'name', 'DESC']) }}"> &#11014;</a></span>
        </th>
        <th>Отчество
            <span class="sort_simvol"><a href="{{ route('employees', ['sort' =>'patronymic', 'ASC']) }}"> &#11015;</a><a href="{{ route('employees', ['sort' =>'patronymic', 'DESC']) }}"> &#11014;</a></span>
        </th>&#11014;   <th>Зарплата
            <span class="sort_simvol"><a href="{{ route('employees', ['sort' =>'salary', 'ASC']) }}"> &#11015;</a><a href="{{ route('employees', ['sort' =>'salary', 'DESC']) }}">  &#11014;</a></span>
        </th>
        <th>Должность
            <span class="sort_simvol"><a href="{{ route('employees', ['sort' =>'roles', 'ASC']) }}"> &#11015;</a><a href="{{ route('employees', ['sort' =>'roles', 'DESC']) }}">  &#11014;</a></span>
        </th>&#11014;   <th>Отдел
            <span class="sort_simvol"><a href="{{ route('employees', ['sort' =>'departments', 'ASC']) }}"> &#11015;</a><a href="{{ route('employees', ['sort' =>'departments', 'DESC']) }}"> &#11014;</a></span>
        </th>
        <th>Дата приема на раюоту
            <span class="sort_simvol"><a href="{{ route('employees', ['sort' =>'date_started_at_work', 'ASC']) }}">&#11015;</a><a href="{{ route('employees', ['sort' =>'date_started_at_work', 'DESC']) }}"> &#11014;</a></span>
        </th>
    </tr>
    <tr class="table_seart">
        <th>Сортировка ajax
            <span class="sort_simvol_a" data-sort='surname' data-type='ASC'> &#11015;</span><span class="sort_simvol_a" data-sort='surname' data-type='DESC'>&#11014;</span>
        </th>
        <th>Сортировка ajax
            <span class="sort_simvol_a" data-sort='name' data-type='ASC'>  &#11015;</span><span class="sort_simvol_a" data-sort='name' data-type='DESC'> &#11014;</span>
        </th>
        <th>Сортировка ajax
            <span class="sort_simvol_a" data-sort='patronymic' data-type='ASC'>  &#11015;</span><span class="sort_simvol_a" data-sort='patronymic' data-type='DESC'> &#11014;</span>
        </th>
        <th>Сортировка ajax
            <span class="sort_simvol_a" data-sort='salary' data-type='ASC'>  &#11015;</span> <span class="sort_simvol_a" data-sort='salary' data-type='DESC'>  &#11014;</span>
        </th>
        <th>Сортировка ajax
            <span class="sort_simvol_a" data-sort='roles' data-type='ASC'> &#11015;</span><span class="sort_simvol_a" data-sort='roles' data-type='DESC'> &#11014;</span>
        </th>
        <th>Сортировка ajax
            <span class="sort_simvol_a" data-sort='departments' data-type='ASC'>  &#11015;</span><span class="sort_simvol_a" data-sort='departments' data-type='DESC'> &#11014;</span>
        </th>
        <th>Сортировка ajax
            <span class="sort_simvol_a" data-sort='date_started_at_work' data-type='ASC'> &#11015;</span><span class="sort_simvol_a" data-sort='date_started_at_work' data-type='ASC'> &#11014;</span>
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