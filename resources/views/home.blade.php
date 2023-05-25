@extends('layouts.app')


@section('content')
    
    @foreach ($trains as $train)

        <tr>
            <td>{{$train->company}}</td>
            <td>{{$train['arrival_city']}}</td>
            <td>{{$train['departure_time']}}</td>
            <td>{{$train['arrival_time']}}</td>
        </tr>
        
    @endforeach
     
@endsection

