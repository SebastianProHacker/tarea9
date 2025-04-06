@extends('layouts.app')

@section('page_title', 'Contacto')
@section('content_header', 'Formulario de Contacto')

@section('main_content')
<div class="card">
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="nombre">Nombre completo</label>
                <input type="text" class="form-control" id="nombre">
            </div>
            
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" class="form-control" id="email">
            </div>
            
            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea class="form-control" id="mensaje" rows="3"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>
@endsection