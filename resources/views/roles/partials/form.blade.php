<div class="form-group">
    {{ Form::label('name', 'Nombre de la etiqueta') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'URL amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Descripcion') }}
    {{ Form::text('description', null, ['class' => 'form-control', 'id' => 'description']) }}
</div>
<hr>

<h3>Lista de roles</h3>
<div class="form-group">
    <label >{{ Form::checkbox('especial[]', value('all-access')) }} Acceso total</label>
    <label >{{ Form::checkbox('especial[]', value('no-access')) }} Ningun Acceso</label>

    {{--<label> {{ Form::radio('special', 'all-access')}} Acceso total</label>--}}
    {{--<label> {{ Form::radio('special', 'no-access')}} Ningun acceso</label>--}}
</div>
<hr>
<h3>Lista de permisos</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach($permissions as $permission)
            <li>
                <label>
                    {{ Form::checkbox('permissions[]', $permission->id, null) }}
                    {{ $permission->name }}
                    <em>({{ $permission->description ?:'Sin descripcion'}})</em>
                </label>
            </li>
        @endforeach
    </ul>
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>