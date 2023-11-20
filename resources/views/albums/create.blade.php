@extends('template')

@section('content')
    
    <form action="{{route(nvalbum)}}" method="POST">
        @csrf
        
    </form>

@endsection