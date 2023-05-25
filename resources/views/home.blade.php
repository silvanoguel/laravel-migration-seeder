@extends('layouts.app')

    
@section('content')
    <h1 class="my-3">Trains leaving today {{date('d-m-Y')}}</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Train Number</th>
            <th scope="col">Departure City</th>
            <th scope="col">Arrival City</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                @if(date('Y-m-d') == $train['date'] && !($train['is_cancelled']))
                    <tr>
                        <td>{{$train['train_id']}}</td>
                        <td>{{$train['departure_station']}}</td>
                        <td>{{$train['arrival_station']}}</td>
                    </tr>
                @endif
            @endforeach
          
        </tbody>
      </table>
@endsection

