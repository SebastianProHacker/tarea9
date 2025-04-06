@extends('layouts.app')

@section('page_title', 'Fotos')
@section('content_header', 'Galería de Imágenes')

@section('main_content')
<div class="card">
    <div class="card-body">
        <div class="row">
            @for($i = 0; $i < 6; $i++)
            <div class="col-md-4 mb-3">
                <img src="https://picsum.photos/300/200?random={{ $i }}" 
                     class="img-fluid rounded shadow-sm" 
                     alt="Imagen {{ $i+1 }}">
            </div>
            @endfor
        </div>
    </div>
</div>
@endsection