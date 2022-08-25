@extends('base')
@section('title')
    profilepage
@endsection
@section('data')
    <div class="container">
        @if($checkStudent)
            
        
        <div class="row mt-3">
            <div class="col-3">
                <div class="card">
                    <img src="https://picsum.photos/150/150?ramdom=3" class="rounded-circle p-3" alt="">
                    <div class="card-body">
                        <h4>{{auth()->user()->name}}</h4>
                        <p class="small text-muted"><i class="bi bi-phone"></i>+91{{auth()->user()->contact}}</p>
                    </div>
                </div>
                <div class="col-12 mx-auto mt-3">
                    <a href="" class="btn btn-info w-100 text-center">Edit Profile</a>
                </div>
                <div class="list-group mt-3">
                    <a href="" class="list-group-item list-group-item-action">Payment</a>
                    <a href="" class="list-group-item list-group-item-action">Courses</a>
                    <a href="" class="list-group-item list-group-item-action">Examination</a>
                    <a href="" class="list-group-item list-group-item-action ">logout</a>
                </div>
            </div>
            <div class="col-9">
                <div class="card card-body">
                    <div class="container">
                        <h1 class="display-3">welcom {{auth()->user()->name}}</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta harum ipsam totam corporis nemo veritatis porro dignissimos debitis sit, ut qui maiores quas nihil nisi quia voluptatem cumque placeat consequatur?</p>
                        <a href="" class="btn btn-success">more</a>

                    </div>
                </div>
            </div>
        </div>
        
        @else
            <div class="alert alert-danger">
                <h2 class="alert-title">notice</h2>
                <p class="lead">please apply for addmission first</p>
                <a href="{{route('student.create')}}" class="btn btn-success">apply fo cws</a>
            </div>
        @endif
    </div>
@endsection