@extends('base')
@section('data')
<div class="container">
    <div class="row">
        <div class="col-3">
            @include('admin.side')
        </div>
        <div class="col-9">
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>contact</th>
                    <th>email</th>
                    <th>created</th>
                    <th>action</th>
                </tr>
                @foreach ($user as $user)
                    
                
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->contact}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                        <a href="{{route('userdelete',['id'=>$user->id])}}" class="btn btn-danger">x</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
    
@endsection