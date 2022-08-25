@extends('base')
@section('title','loginpage')
    

@section('data')
    <div class="container mt-2">
        <div class="col-4 mx-auto">
            @if(session("error"))
            <div class="alert alert-danger">
                {{session("error")}}
            </div>
            @endif

            @if(session("msg"))
                <div class="alert alert-success">
                    {{session("msg")}}
                </div>
            @endif

            
            <div class="card">
                <div class="card-header">Admin Login here</div>
                <div class="card-body">
                    <form action="{{route('teacher.login')}}" method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="">Email/username</label>
                            <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                <p class="text-danger small">{{$message}}</p>
                                
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">password</label>
                            <input type="password" name="password"  class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <p class="text-danger small">{{$message}}</p>
                                
                            @enderror
                        </div>
                        <div class="mb-2">
                            <input type="submit" value="Admin login" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection