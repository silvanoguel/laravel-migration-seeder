@extends('layouts.app')
    
@section('content')
  
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Departure City</th>
            <th scope="col">Arrival City</th>
            <th scope="col">Departure Time</th>
            <th scope="col">Arrival Time</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($trains as $train)
               
                <tr>
                    <td>{{$train['departure_city']}}</td>
                    <td>{{$train['arrival_city']}}</td>
                    <td>{{$train['departure_time']}}</td>
                    <td>{{$train['arrival_time']}}</td>
                </tr>
              
            @endforeach
          
        </tbody>
      </table>
@endsection
