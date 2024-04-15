@extends('layouts.app')

@section('titulo')
    Reportes Agricultura | Home
@endsection
@section('content')
    
    @vite(['resources/css/estilos.css'])

<body style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://productoresdeazucarhonduras.com/wp-content/uploads/2022/08/1920x1100-16.webp'); background-size: cover;  background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="container"> 
        <br>   
        <br>
        <h1 class="title" style="color: white; font-size: 60px">Bienvenido(a)</h1> 
        <div class="text-center" style="height: 50vh; display: flex; align-items: center; justify-content: center; font-size: 20px; color: white">
            <div>   
                <p>{{ \Carbon\Carbon::now()->toDateString() }}</p>        
                <p id="reloj" class="mb-4">{{ \Carbon\Carbon::now()->toTimeString() }}</p>                  
            </div>                      
        </div>
    </div>
    
    @vite(['resources/js/home.js'])
    
@endsection