<div class="form-group">
  {{ Form::label('nombre', 'Nombre') }}
  {{ Form::text('nombre', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('apellido', 'Apellido') }}
  {{ Form::text('apellido', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('cedula', 'Cédula') }}
  {{ Form::text('cedula', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('pasaporte', 'Pasaporte') }}
  {{ Form::text('pasaporte', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('f_nacimiento', 'Fecha de nacimiento') }}
  {{ Form::text('f_nacimiento', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('peso', 'Peso (en Kg.)') }}
  {{ Form::text('peso', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('estatura', 'Estatura (en Mtr.)') }}
  {{ Form::text('estatura', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('sexo', 'Sexo') }}
  {{ Form::select('sexo', ['M' => 'Masculino', 'F' => 'Femenino'], old('sexo', $estudiante->sexo), ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('grupo_sangre', 'Grupo sanguíneo') }}
  {{ Form::select('grupo_sangre', ['A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+', 'B-' => 'B-', 'AB+' => 'AB+', 'AB-' => 'AB-', 'O+' => 'O+', 'O-' => 'O-'], old('grupo_sangre', $estudiante->grupo_sangre), ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('direccion', 'Dirección') }}
  {{ Form::text('direccion', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('estado', 'Estado') }}
  {{ Form::text('estado', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('municipio', 'Municipio') }}
  {{ Form::text('municipio', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('ciudad', 'Ciudad') }}
  {{ Form::text('ciudad', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('codigo_postal', 'Código postal') }}
  {{ Form::text('codigo_postal', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('tlf_local', 'Teléfono local') }}
  {{ Form::text('tlf_local', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('tlf_movil', 'Teléfono celular') }}
  {{ Form::text('tlf_movil', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('correo', 'Correo electrónico') }}
  {{ Form::text('correo', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('nombre_emerg', 'Persona contacto en caso emergencia') }}
  {{ Form::text('nombre_emerg', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('tlf1_emerg', 'Teléfono 1 de emergencia') }}
  {{ Form::text('tlf1_emerg', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('tlf2_emerg', 'Teléfono 2 de emergencia') }}
  {{ Form::text('tlf2_emerg', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('tlf3_emerg', 'Teléfono 3 de emergencia') }}
  {{ Form::text('tlf3_emerg', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('tipo_licencia', 'Tipo de licencia') }}
  {{ Form::select('tipo_licencia', ['alumno' => 'Alumno', 'privado' => 'Privado', 'comercial' => 'Comercial'], old('tipo_licencia', $estudiante->tipo_licencia), ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('vence_licencia', 'Fecha vencimiento licencia') }}
  {{ Form::text('vence_licencia', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('vence_certificado', 'Fecha vencimiento certificado') }}
  {{ Form::text('vence_certificado', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
