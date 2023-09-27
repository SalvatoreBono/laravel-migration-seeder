@extends('layouts.public')
@section('title', 'Home')
@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Data di partenza</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Codice treno</th>
                    <th scope="col">Numero carrozze</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <th scope="row">{{ $train->azienda }}</th>
                        <td>{{ $train->stazione_di_partenza }}</td>
                        <td>{{ $train->stazione_di_arrivo }}</td>
                        <td>{{ $train->data_di_partenza }}</td>
                        <td>{{ $train->orario_di_partenza }}</td>
                        <td>{{ $train->orario_di_arrivo }}</td>
                        <td>{{ $train->codice_treno }}</td>
                        <td>{{ $train->numero_carrozze }}</td>
                        <td>{{ $train->in_orario === 1 ? 'Si' : 'No' }}</td>
                        <td>{{ $train->cancellato === 1 ? 'Si' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
