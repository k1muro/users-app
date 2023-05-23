@extends('layout')
@section('content')

<form action="{{route('UserList.store')}}" method="POST">
    @csrf
    <input name="FIO" placeholder="FIO" required/>
    <input name="email" placeholder="email" required/>
    <input name="number" placeholder="number" required/>
    <input name="age" placeholder="age" min="15" required/>
    <input type="submit" value="add" class="btn btn-small btn-primary">
</form>
    
@endsection