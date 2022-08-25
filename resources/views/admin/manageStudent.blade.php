@extends('base')
@section('data')
    <div class="container">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <div class="display-4 fw-bolder">managestudent</div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>father name</th>
                        <th>mother name</th>
                        <th>dob</th>
                        <th>education</th>
                        <th>gender</th>
                        <th>address</th>
                        <th>action</th>

                    </tr>
                    @foreach ($student as $s)
                    <tr>
                        <td>{{$s->id}}</td>
                        <td>{{$s->user->name}}</td>
                        <td>{{$s->father_name}}</td>
                        <td>{{$s->mother_name}}</td>
                        <td>{{$s->dob}}</td>
                        <td>{{$s->education}}</td>
                        <td>{{$s->gender}}</td>
                        <td class="text-truncate">{{$s->address}}</td>
                        <td class="d-flex">
                            <a href="{{route('studentdelete',['id'=>$s->id])}}" class="btn btn-danger mt-3">x</a>
                            <a href="{{route('view',['roll'=>$s->id])}}" class="btn btn-success mx-1 mt-3">view</a>
                        </td>
                    </tr>
                        
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection