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
        @if (count($humidities) == 0)
            <p>No hay registros</p>            
        @else
        <table border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Humedad</th>
                    <th>Marca de Tiempo</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $counter = 0;
                @endphp
                @foreach ($humidities as $humidity)
                    @php
                        $counter ++;   
                    @endphp
                    <tr>
                        <th>{{ $counter }}</th>
                        <td>{{ $humidity->value }}</td>
                        <td>{{ $humidity->timestamp }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </body>
</html>
