@extends('layout.app')

@section('main_content')

    <div class="travels">
        @foreach($travels as $travel)
            <div class="travel">
                <h1>{{$travel->destination}}</h1>
                <h4>dal: {{$travel->departure_date}}</h4>
                <h4>al: {{$travel->return_date}}</h4>
                <img src="{{$travel->image}}" alt="">
                <span>{{$travel->price}} $</span>
            </div>
        @endforeach 
    </div>

    <div class="back">
        <a href="{{route('home')}}">
            <h5>Home</h5>
        </a>
        <i class="fas fa-long-arrow-alt-left"></i>
    </div> 
    
@endsection

