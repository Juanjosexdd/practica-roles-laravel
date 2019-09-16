<div class="form-group">
	{{ Form::label('name', 'Nombre del producto') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<hr>
<h3>Lista de roles</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($roles as $role)
			<li>
				<label>
					{{ Form::checkbox('roles[]', $role->id, null)}}
					{{ $role->name }}
					<em>({{ $role->description ?: 'N/A'}})</em>
				</label>
			</li>
		@endforeach
	</ul>

	<div class="custom-control custom-checkbox">
	    <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
	    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
	</div>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>