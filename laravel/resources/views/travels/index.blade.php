@extends('layout.app')

@section('main_content')

    <div class="travels">
        @foreach($travels as $travel)
            <div class="travel">
                <h1>{{$travel->destination}}</h1>
                <h4>{{$travel->departure_date}}</h4>
                <h4>{{$travel->return_date}}</h4>
                <span>{{$travel->price}}</span>
            </div>
        @endforeach 
    </div>
    
@endsection

