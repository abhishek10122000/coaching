@extends('base')
@section('title','loginpage')
    

@section('data')
    <div class="container mt-2">
        <div class="col-4 mx-auto">
            
            <div class="card">
                <div class="card-header">signup here</div>
                <div class="card-body">
                    <form action="{{route('singin')}}" method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="">name</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <p class="text-danger small">{{$message}}</p>
                                
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">contact</label>
                            <input type="text" name="contact" value="{{old('contact')}}" class="form-control @error('contact') is-invalid @enderror">
                            @error('contact')
                                <p class="text-danger small">{{$message}}</p>
                                
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Email/username</label>
                            <input type="email" name="email"value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                <p class="text-danger small">{{$message}}</p>
                                
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">password</label>
                            <input type="password" name="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <p class="text-danger small">{{$message}}</p>
                                
                            @enderror
                        </div>
                        <div class="mb-2">
                            <input type="submit" value="create " class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection