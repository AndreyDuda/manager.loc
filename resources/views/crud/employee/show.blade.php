<div class="container-fluid">
<form method="POST" action="{{ route('crudEmployeeUpdate') }}" enctype="multipart/form-data">
    <input type="hidden" id="url_img" value="{{ asset('') }}img/">
    {{ csrf_field() }}
    <div>
        @if(in_array($employee->photo, $images ))
            <div class="photo_show">
                <div class="button_del" title="Удалить">&#10006;</div>
                <img src="{{ asset('')}}img/employees/{{$employee->photo}}">
            </div>
            <div class="photo_upload hidden_block">
        @else
            <div class="photo_show">
                <div class="button_del hidden" title="Удалить">&#10006;</div>
                <img src="{{ asset('')}}img/system/no_img.png">
            </div>
            <div class="photo_upload block ">
        @endif

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Фото</span>
                </div>
                <div class="custom-file">
                    <input id="file" type="file" name="photo" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Загрузить фото</label>
                </div>
            </div>
        </div>
    </div>
<input type="hidden" name="id" value="{{$employee->id}}">
    <div class="block">
        <div class="input-group mb-3 input_info_employee">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Фамилия</span>
            </div>
            <input type="text" name="surname" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="{{$employee->surname}}">
        </div>

        <div class="input-group mb-3 input_info_employee">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Имя</span>
            </div>
            <input type="text" name="name" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="{{$employee->name}}">
        </div>

        <div class="input-group mb-3 input_info_employee">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Отчество</span>
            </div>
            <input type="text" name="patronymic" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="{{$employee->patronymic}}">
        </div>

    </div>
    <div class="block">
        <div class="input-group mb-3 input_info_employee">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Отдел</span>
            </div>
            <select class="form-control" aria-label="Отдел" name="department_id" aria-describedby="inputGroup-sizing-default">
                <option value="{{ $employee->department_id }}">{{ $employee->department->title }}</option>
                @foreach($departments as $department)
                    @if($employee->department_id != $department->id)
                        <option value="{{ $department->id }}">{{ $department->title }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="input-group mb-3 input_info_employee">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Роль</span>
            </div>
            {{--<input type="text" class="form-control" aria-label="Роль" aria-describedby="inputGroup-sizing-default">--}}
            <select class="form-control" aria-label="Роль" name="role_id" aria-describedby="inputGroup-sizing-default">
                <option value="{{ $employee->role_id }}">{{ $employee->role->title }}</option>
                @foreach($roles as $role)
                    @if($employee->role_id != $role->id)
                        <option value="{{ $role->id }}">{{ $role->title }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="input-group mb-3 input_info_employee">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Зарплата</span>
            </div>
            <input type="text" name="salary" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="{{$employee->salary}}">
        </div>

    </div>
    <div class="block">
        <div class="input-group mb-3 input_info_employee">
            <div class="input-group-prepend">
                <span  class="input-group-text long_lable" id="inputGroup-sizing-default">Дата начало работы</span>
            </div>
            <input type="date" name="date_started_at_work" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="{{$employee->date_started_at_work}}">
        </div>
    </div>
    <div class="block">
        <button type="submit" class="btn btn-success">Сохранить</button>
    </div>
</form>
</div>