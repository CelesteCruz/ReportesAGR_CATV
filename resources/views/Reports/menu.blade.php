@extends('layouts.reports')

@section('titulo')
    Reportes AGR | Menú |
@endsection
@section('content')

    <body>
        <div class="d-flex align-items-center justify-content-center" style="height: 55vh;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <button class="btn btn-primary text-center"
                            onclick="window.location.href='{{ route('report', ['reporte' => 'balanceHidrico']) }}'"
                            style="background-color: #1e6091; border: none; border-radius: 12px; transition: transform .2s; padding: 20px; font-size: 15px; width: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.3);"
                            onmouseover="this.style.transform='scale(1.1)'"
                            onmouseout="this.style.transform='scale(1)'">Balance Hídrico/ Hídrico Teórico</button>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <button class="btn btn-primary text-center"
                            onclick="window.location.href='{{ route('report', ['reporte' => 'laminaSemanasMeses']) }}'"
                            style="background-color: #1e6091; border: none; border-radius: 12px; transition: transform .2s; padding: 20px; font-size: 15px; width: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.3);"
                            onmouseover="this.style.transform='scale(1.1)'"
                            onmouseout="this.style.transform='scale(1)'">Lámina de Riego Semanas/Meses</button>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <button class="btn btn-primary text-center"
                            onclick="window.location.href='{{ route('report', ['reporte' => 'laminaAñoMeses']) }}'"
                            style="background-color: #1e6091; border: none; border-radius: 12px; transition: transform .2s; padding: 20px; font-size: 15px; width: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.3);"
                            onmouseover="this.style.transform='scale(1.1)'"
                            onmouseout="this.style.transform='scale(1)'">Lámina de Riego Distrito/Año/Meses</button>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <button class="btn btn-primary text-center"
                            onclick="window.location.href='{{ route('report', ['reporte' => 'laminaDistritoAño']) }}'"
                            style="background-color: #1e6091; border: none; border-radius: 12px; transition: transform .2s; padding: 20px; font-size: 15px; width: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.3);"
                            onmouseover="this.style.transform='scale(1.1)'"
                            onmouseout="this.style.transform='scale(1)'">Lámina de Riego Distrito/Año</button>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <button class="btn btn-primary text-center"
                            onclick="window.location.href='{{ route('report', ['reporte' => 'Precipitacion']) }}'"
                            style="background-color: #1e6091; border: none; border-radius: 12px; transition: transform .2s; padding: 20px; font-size: 15px; width: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.3);"
                            onmouseover="this.style.transform='scale(1.1)'"
                            onmouseout="this.style.transform='scale(1)'">Precipitación</button>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        var urlParams = new URLSearchParams(window.location.search);
        var reporte = urlParams.get('reporte');
        document.getElementById('reporte' + reporte).style.display = 'block';
    </script>
    <footer>
        © 2024 Compañía Azúcarera Tres Valles-CATV
    </footer>
@endsection
