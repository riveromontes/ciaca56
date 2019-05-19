@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Instructor</div>
                <div class="card-body">
                  <p><strong>Nombre(Login)</strong> {{ $user->name }}</p>
                  <p><strong>Correo(Login)</strong> {{ $user->email }}</p>
                  <p><strong>Id</strong> {{ $instructor->id }}</p>
                  <p><strong>Nombre</strong> {{ $instructor->nombre }}</p>
                  <p><strong>Apellido</strong> {{ $instructor->apellido }}</p>
                  <p><strong>Cédula</strong> {{ $instructor->cedula }}</p>
                  <p><strong>Pasaporte</strong> {{ $instructor->pasaporte }}</p>
                  <p><strong>F. Nacimiento</strong> {{ date("d-F-Y", strtotime($instructor->f_nacimiento)) }}</p>
                  <p><strong>Peso</strong> {{ $instructor->peso.'kg.' }}</p>
                  <p><strong>Estatura</strong> {{ $instructor->estatura.'mtr' }}</p>
                  <p><strong>Sexo</strong> {{ $instructor->sexo }}</p>
                  <p><strong>Grupo sanguineo</strong> {{ $instructor->grupo_sangre }}</p>
                  <p><strong>Dirección</strong> {{ $instructor->direccion }}</p>
                  <p><strong>Ciudad</strong> {{ $instructor->ciudad }}</p>
                  <p><strong>Código Postal</strong> {{ $instructor->codigo_postal }}</p>
                  <p><strong>Teléfono Local</strong> {{ $instructor->tlf_local }}</p>
                  <p><strong>Teléfono celular</strong> {{ $instructor->tlf_movil }}</p>
                  <p><strong>Correo electónico</strong> {{ $instructor->correo }}</p>
                  <p><strong>Contacto emergencia</strong> {{ $instructor->nombre_emerg }}</p>
                  <p><strong>Tlf-1 emergencia</strong> {{ $instructor->tlf1_emerg }}</p>
                  <p><strong>Tlf-2 emergencia</strong> {{ $instructor->tlf2_emerg }}</p>
                  <p><strong>Tlf-3 emergencia</strong> {{ $instructor->tlf3_emerg }}</p>
                  <p><strong>Tipo licencia</strong> {{ $instructor->tipo_licencia }}</p>
                  <p><strong>F. vencimiento licencia</strong> {{ date("d-F-Y", strtotime($instructor->vence_licencia)) }}</p>
                  <p><strong>F. vencimiento certificado</strong> {{ date("d-F-Y", strtotime($instructor->vence_certificado)) }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
