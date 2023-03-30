@extends('layouts.app')

@section('page-name')
Train Table
@endsection

@section('table-content')

<h1>tabella treni</h1>

<section>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">compagnia</th>
        <th scope="col">numero treno</th>
        <th scope="col">partenza</th>
        <th scope="col">alle ore</th>
        <th scope="col">arrivo</th>
        <th scope="col">alle ore</th>
        <th scope="col">totale vagoni</th>
        <th scope="col">ritardo</th>
        <th scope="col">stato treno</th>
        </tr>
    </thead>
    <tbody >
        @foreach ($trains as $train)
        <tr >
        <td>{{$train->id}}</td>
        <td>{{$train->company}}</td>
        <td>{{$train->train_code}}</td>
        <td>{{$train->departure_station}}</td>
        <td>{{$train->departure_time}}</td>
        <td>{{$train->arrival_station}}</td>
        <td>{{$train->arrival_time}}</td>
        <td>{{$train->car_number}}</td>
        <td>{{$train->in_time}}</td>
        <td>{{$train->cancelled}}</td>
        </tr> 
        @endforeach
    </tbody>
    </table>
</section>
@endsection
