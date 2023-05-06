@extends('layouts.app')

@section('page.main')

        <div class="container">
            <h2 class="text-center p-4 text-white">Partenza Treni</h2>
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

        <div class="container">
            <h2 class="text-center p-5 text-white">Partenza Treni Odierni</h2>

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
                    @foreach ($todays as $today)
                        <tr class="text-white">
                        <th scope="row">{{ $today['id']}}</th>
                        <td>{{ $today['train_code']}}</td>
                        <td>{{ $today['num_carriages']}}</td>
                        <td>{{ $today['company']}}</td>
                        <td>{{ ucfirst($today['departure_station']) }}</td>
                        <td>{{ ucfirst($today['arrival_station']) }}</td>
                        <td>{{ $today['departure_time']}}</td>
                        <td>{{ $today['arrival_time']}}</td>
                        <td>{{ $today['in_time'] == 0 ? 'No' : 'Si' }}</td>
                        <td>{{ $today['cancelled'] == 0 ? 'No' : 'Si'  }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            

        </div>

@endsection