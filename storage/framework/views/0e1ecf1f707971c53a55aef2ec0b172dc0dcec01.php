<div class="form-group">
	<?php echo Form::label('nombre','Nombre:'); ?>

	<?php echo Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la pelicula']); ?>

</div>
<div class="form-group">
	<?php echo Form::label('Elenco','Elenco:'); ?>

	<?php echo Form::text('cast',null,['class'=>'form-control', 'placeholder'=>'Ingresa el elenco']); ?>

</div>
<div class="form-group">
	<?php echo Form::label('Direccion','Dirección:'); ?>

	<?php echo Form::text('direction',null,['class'=>'form-control', 'placeholder'=>'Ingresa al director']); ?>

</div>
<div class="form-group">
	<?php echo Form::label('Duracion','Duración:'); ?>

	<?php echo Form::text('duration',null,['class'=>'form-control', 'placeholder'=>'Ingresa la duración']); ?>

</div>
<div class="form-group">
	<?php echo Form::label('Poster','Poster:'); ?>

	<?php echo Form::file('path'); ?>

</div>
