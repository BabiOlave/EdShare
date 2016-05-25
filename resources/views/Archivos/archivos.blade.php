<div class="form-group">
	{!!Form::label('nombre','Nombre:')!!}
	{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre del Archivo'])!!}
</div>
<div class="form-group">
	{!!Form::label('Autor','Autor:')!!}
	{!!Form::text('cast',null,['class'=>'form-control', 'placeholder'=>'Ingresa el nombre del autor'])!!}
</div>

<div class="form-group">
	{!!Form::label('Asignatura','Asignatura:')!!}
	{!!Form::text('duration',null,['class'=>'form-control', 'placeholder'=>'Ingresa la asignatura'])!!}
</div>
<div class="form-group">
	{!!Form::label('Poster','Poster:')!!}
	{!!Form::file('path')!!}
</div>
<div class="form-group">
	{!!Form::label('Genero','Genero:')!!}
	{!!Form::select('genre_id',$genres)!!}
</div>