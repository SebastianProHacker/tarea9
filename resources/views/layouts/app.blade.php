@extends('adminlte::page')

@section('title', 'Task9 - @yield("page_title")')

@section('content_header')
    <h1>@yield('content_header')</h1>
@stop

@section('content')
    <div class="container-fluid">
        @yield('main_content')
    </div>
@stop

@yield('footer')