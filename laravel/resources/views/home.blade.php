@extends('layout.app')

@section('title', 'Home Page')
    
@section('main_content')
    <div class="bg">
        <img src="{{asset('img/skyline.jpg')}}" alt="">
        <div class="travels">
            <a href="{{route('travels')}}">Viaggi Disponibili</a>
        </div>
    </div>
@endsection