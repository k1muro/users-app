@extends('layout')
@section('content')
<a href="{{route('UserList.create')}}" class="btn btn-small btn-primary">Add UserList</a>
    @if (count($users) !== 0)



        <table class="table table">
            <tr>
                <th>id</th>
                <th>FIO</th>
                <th>email</th>
                <th>number</th>
                <th>age</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>show</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($users as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->FIO}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->number}}</td>
                    <td>{{$item->age}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td><a href="{{URL::to('UserList/'.$item->id)}}" class="btn btn-small btn-success">SHOW</a></td>
                    <td><a href="{{URL::to('UserList/'.$item->id.'/edit')}}" class="btn btn-small btn-primary">EDIT</a></td>
                    <td>
                        <form action="{{route('UserList.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="DELETE" class="btn btn-small btn-danger"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$users->links()}}
    @endif
@endsection