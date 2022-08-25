@extends('base')
@section('data')
    <div class="container">
        <div class="row">
            <div class="col-5 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th class="colspan-2" >name</th>
                                <th class="colspan-2" ></th>
                            </tr>
                            <tr>
                                <th class="colspan-2" >contact</th>
                                <th class="colspan-2" >{{$stu->father_name}}</th>
                            </tr>
                            <tr>
                                <th class="colspan-2" >name</th>
                                <th class="colspan-2" >{{$stu->mother_name}}</th>
                            </tr>
                            <tr>
                                <th class="colspan-2" >name</th>
                                <th class="colspan-2" >{{$stu->contact}}</th>
                            </tr>
                            <tr>
                                <th class="colspan-2" >name</th>
                                <th class="colspan-2" >{{$stu->dob}}</th>
                            </tr>
                            <tr>
                                <th class="colspan-2" >name</th>
                                <th class="colspan-2" >{{$stu->address}}</th>
                            </tr>
                            <tr>
                                <th class="colspan-2" >name</th>
                                <th class="colspan-2" >{{$stu->gender}}</th>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection