<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <p>
                Subir archivo CSV
                <input type="file" name="data" accept=".csv" required> <br>
                <input type="submit" value="Upload">
            </p>
        </form>
        @if (count($measurements) == 0)
            <p>No hay registros</p>            
        @else
        <table border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Humedad del Suelo</th>
                    <th>Humedad Relativa</th>
                    <th>Temperatura °C</th>
                    <th>Temperatura °F</th>
                    <th>Marca de Tiempo</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $counter = 0;
                @endphp
                @foreach ($measurements as $measurement)
                    @php
                        $counter ++;   
                    @endphp
                    <tr>
                        <th>{{ $counter }}</th>
                        <td>{{ $measurement->soil_humidity }}</td>
                        <td>{{ $measurement->relative_humidity }}</td>
                        <td>{{ $measurement->temperature_in_degrees_centigrade }}</td>
                        <td>{{ $measurement->temperature_in_degrees_fahrenheit }}</td>
                        <td>{{ $measurement->timestamp }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </body>
</html>
