@extends('layout')
@section('content')

@if (isset($temp))
    <p>{{$temp->FIO}}</p>
    <p>{{$temp->number}}</p>
    <p>{{$temp->email}}</p>
    <p>{{$temp->age}}</p>
@endif
    
@endsection