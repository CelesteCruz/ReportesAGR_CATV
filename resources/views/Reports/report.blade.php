@extends('layouts.reports')

@section('titulo')
    Reportes AGR | Visualización de Reporte
@endsection
@section('content')

    <body  class="font-sans antialiased" style="display: flex; flex-direction: column; height: 100%;">
            <!--  Reportes -->
            @if(request('reporte') == 'balanceHidrico')
                <iframe title="Reporte_ZAG_267" src="https://app.powerbi.com/view?r=eyJrIjoiNTNmZjZkMDEtYWIzOC00NGVlLTk4ZGItZjU0MjcwZmFkZjgzIiwidCI6IjllZmYyZWRlLTZmZTEtNDk1Mi1iYWFiLWVkYTVmOWYxMjdkOSJ9" style="margin: 0 5%; width:90%; height:75vh; border: none;"></iframe>
            @endif
            @if(request('reporte') == 'laminaSemanasMeses')
                <iframe title="Reporte_ZAG_267" src="https://app.powerbi.com/view?r=eyJrIjoiYjlhOGZlNzItYjQ4Ni00NDQ4LWFjODctOWEyZDdmYzc4ZDNlIiwidCI6IjllZmYyZWRlLTZmZTEtNDk1Mi1iYWFiLWVkYTVmOWYxMjdkOSJ9" style="margin: 0 5%; width:90%; height:75vh; border: none;"></iframe>
            @endif
            @if(request('reporte') == 'laminaAñoMeses')
                <iframe title="Reporte_ZAG_267" src="https://app.powerbi.com/view?r=eyJrIjoiNDQ0NDk2MzYtNWVkMC00NDQ4LTg2OGEtOTNkOWIwNDI5MjU0IiwidCI6IjllZmYyZWRlLTZmZTEtNDk1Mi1iYWFiLWVkYTVmOWYxMjdkOSJ9" style="margin: 0 5%; width:90%; height:75vh; border: none;"></iframe>
            @endif
            @if(request('reporte') == 'laminaDistritoAño')
                <iframe title="Reporte_ZAG_267" src="https://app.powerbi.com/view?r=eyJrIjoiOTU5YjczZjMtNjM5Ny00NTBlLWEzMjctZmZmMjIxYTE2MTVhIiwidCI6IjllZmYyZWRlLTZmZTEtNDk1Mi1iYWFiLWVkYTVmOWYxMjdkOSJ9" style="margin: 0 5%; width:90%; height:75vh; border: none;"></iframe>
            @endif
            @if(request('reporte') == 'Precipitacion')
                <iframe title="Reporte_ZAG_267" src="https://app.powerbi.com/view?r=eyJrIjoiNGYyY2E4MGMtODVjMy00Y2IxLThhZmQtMTdkM2ViOTI4MDkzIiwidCI6IjllZmYyZWRlLTZmZTEtNDk1Mi1iYWFiLWVkYTVmOWYxMjdkOSJ9" style="margin: 0 5%; width:90%; height:75vh; border: none;"></iframe>
            @endif
        
    </body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <footer>
        © 2024 Compañía Azúcarera Tres Valles-CATV
    </footer>
@endsection