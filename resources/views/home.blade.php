@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Listado de Participantes') }}</div>

        </div>
    </div>

    {{-- {{ $usuarios }} --}}

    <br><br><br><br>

    <a href="{{ route('exportar') }}">Exportar usuarios a Excel</a>

    <br><br>


    <table id="miTabla" class="table table-striped">
        <thead>
            <tr>
                <th># ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Pais</th>
                <th>Ciudad</th>
                <th>Rol</th>
                <th>Empresa</th>
                <th>Instagram</th>
                <th>Sorteo</th>

                <!-- Agregar más columnas según sea necesario -->
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $dato)
                <tr>
                    <td>{{ $dato->id }}</td>
                    <td>{{ $dato->name }}</td>
                    <td>{{ $dato->last_name }}</td>
                    <td>{{ $dato->email }}</td>
                    <td>{{ $dato->phone }}</td>
                    <td>{{ $dato->country }}</td>
                    <td>{{ $dato->city }}</td>
                    <td>{{ $dato->rol }}</td>
                    <td>{{ $dato->company }}</td>
                    <td>{{ $dato->instagram }}</td>
                    <td>{{ $dato->sort}}</td>
                    <!-- Agregar más celdas según sea necesario -->
                </tr>
            @endforeach
        </tbody>
        
    </table> 




</div>
{{ $usuarios->links() }}



<script>
    
    </script>
@endsection
