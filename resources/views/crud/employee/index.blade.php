{{ csrf_field() }}
<input type="hidden" class="url" value="{{ route('deleteEmployee') }}">
<div class="search">
    <div class="search1">
        <input class="search_ajax" name="search2" placeholder="Поиск сотрудника">
        <input type="button" class="search_but" value="Найти">
    </div>
</div>
<table class="table_employees">

    <tr class="table_head">
        <th>фото
        </th>
        <th>Фамилия
            <span class="sort_simvol_a" data-control="1" data-sort='surname' data-type='ASC'> &#11015;</span><span class="sort_simvol_a" data-control="1" data-sort='surname' data-type='DESC'>&#11014;</span>
        </th>
        <th>Имя
            <span class="sort_simvol_a" data-control="1" data-sort='name' data-type='ASC'> &#11015;</span><span class="sort_simvol_a" data-control="1" data-sort='name' data-type='DESC'> &#11014;</span>
        </th>
        <th>Отчество
            <span class="sort_simvol_a" data-control="1" data-sort='patronymic' data-type='ASC'>&#11015;</span><span class="sort_simvol_a" data-control="1" data-sort='patronymic' data-type='DESC'> &#11014;</span>
        </th>
        <th>Зарплата
            <span class="sort_simvol_a" data-control="1" data-sort='salary' data-type='ASC'> &#11015;</span> <span class="sort_simvol_a" data-control="1" data-sort='salary' data-type='DESC'>  &#11014;</span>
        </th>
        <th>Должность
            <span class="sort_simvol_a" data-control="1" data-sort='roles' data-type='ASC'>&#11015;</span><span class="sort_simvol_a" data-control="1" data-sort='roles' data-type='DESC'> &#11014;</span>
        </th>
        <th>Отдел
            <span class="sort_simvol_a" data-control="1" data-sort='departments' data-type='ASC'>&#11015;</span><span class="sort_simvol_a" data-control="1" data-sort='departments' data-type='DESC'> &#11014;</span>
        </th>
        <th>Дата приема на раюоту
            <span class="sort_simvol_a" data-control="1" data-sort='date_started_at_work' data-type='ASC'>&#11015;</span><span class="sort_simvol_a" data-control="1" data-sort='date_started_at_work' data-type='ASC'> &#11014;</span>
        </th>
        <th>
            Управление
        </th>
    </tr>

    @foreach($employees as $employee)
        <tr class="table_body">
            <td>
            @if(in_array($employee->photo, $images ))
                <img class="mini_photo" src="{{ asset('')}}img/employees/{{$employee->photo}}">
            @else
                <img class="mini_photo" src="{{ asset('')}}img/system/no_img.png">
            @endif
            </td>
            <td>{{$employee->surname}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->patronymic}}</td>
            <td>{{$employee->salary . 'uan'}}</td>
            <td>{{$employee->roles}}</td>
            <td>{{(($employee->department_id != 1)?$employee->departments : '')}}</td>
            <td>{{$employee->date_started_at_work}}</td>
            <td><a href="{{ route('crudEmployeeShow', ['id' => $employee->id]) }}"> <span data-id="{{ $employee->id }}" title="Редактировать" class="edit_simvol">&#9998 </span></a> <span data-id="{{ $employee->id }}" title="Удалить" class="del_simvol">&#10006; </span> </td>
        </tr>
    @endforeach

</table>