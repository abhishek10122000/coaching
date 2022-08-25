@extends('base')
@section('data')
<div class="container">
    <div class="row">
        <div class="col-3">
            @include('admin.side')
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="display-2">{{$total_user}}</h2>
                            <h6 class="text-white">total user</h6>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="display-2">{{$total_students}}</h2>
                            <h6 class="text-white">total student</h6>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="display-2">+30</h2>
                            <h6 class="text-white">total student</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection