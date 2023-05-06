<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <h2 class="text-center p-5 text-white">Partenza Treni</h2>
    <table class="table">
        <thead>
            <tr class="table-info">
                <th scope="col">ID Treno</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Carrozze</th>
                <th scope="col">Compagnia</th>
                <th scope="col">Stazione di Partenza</th>
                <th scope="col">Stazione di Arrivo</th>
                <th scope="col">Orario Partenze</th>
                <th scope="col">Orario Arrivo</th>
                <th scope="col">Puntuale</th>
                <th scope="col">Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr class="text-white">
                    <th scope="row">{{ $train['id']}}</th>
                    <td>{{ $train['train_code']}}</td>
                    <td>{{ $train['num_carriages']}}</td>
                    <td>{{ $train['company']}}</td>
                    <td>{{ ucfirst($train['departure_station']) }}</td>
                    <td>{{ ucfirst($train['arrival_station']) }}</td>
                    <td>{{ $train['departure_time']}}</td>
                    <td>{{ $train['arrival_time']}}</td>
                    <td>{{ $train['in_time'] == 0 ? 'No' : 'Si' }}</td>
                    <td>{{ $train['cancelled'] == 0 ? 'No' : 'Si'  }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        </div>

    </body>
</html>
