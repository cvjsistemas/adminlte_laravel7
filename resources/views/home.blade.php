@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Sweetalert2',true)

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">hola mundo</h1>
        </div>

        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut mollitia sit, delectus beatae libero veritatis voluptatibus quas odit nisi minima, unde, maxime obcaecati facere excepturi illum. Odio eius tempore saepe?</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
    
    
    //console.log('Hi!'); 
    Swal.fire(
         'Good job!',
         'You clicked the button!',
        'success'
    )
    
    
    </script>
@stop