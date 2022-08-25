@extends('base')
@section('data')
<div class="container">
    <div class="row">
        <div class="col-3">
            @include('admin.side')
        </div>
        <div class="col-9">
            <div class="display-5">Coursemanage</div>
            <a href="{{route('course.create')}}" class="btn btn-success float-end">insert course</a>
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>duration</th>
                    <th>status</th>
                    <th>image</th>
                    <th>category</th>
                    <th>fee</th>
                    <th>discount_fee</th>
                    <th>descriptio</th>
                    <th>
                        Action
                    </th>
                </tr>
                @foreach ($course as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->title}}</td>
                    <td>{{$c->duration}}</td>
                    <td>{{$c->status}}</td>
                    <td>{{$c->image}}</td>
                    <td>{{$c->category}}</td>
                    <td>{{$c->fee}}</td>
                    <td>{{$c->discount_fee}}</td>
                    <td>{{$c->description}}</td>
                    <td class="d-flex">
                        <form action="{{route('course.destroy',['course'=>$c])}}" method="post">
                        @method('delete')
                        @csrf
                        <input type="submit" value="x" class="btn btn-danger">
                        </form>
                        <a href="{{route('course.edit',['course'=>$c->id])}}" class="btn btn-success">edit</a>
                        
                    </td>
                </tr>
                    
                @endforeach
            </table>
        </div>
    </div>
</div>
    
@endsection