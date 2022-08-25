@extends('base')
@section('title')
    applypage
@endsection
@section('data')
    <div class="container">
        <div class="row">
            <div class="col-6">

            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">apply for addmission</div>
                    <div class="card-body">
                        <form action="{{route('student.store')}}" method="post">
                            @csrf
                            <div class="mb-2">
                                <label for="">your name</label>
                                <input type="text" name="name" value="{{auth()->user()->name}}" class="form-control">
                                
                            </div>
                            <div class="mb-2">
                                <label for="">father name</label>
                                <input type="text" name="father_name" {{old('father_name')}} class="form-control">
                                @error('father_name')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">mother name</label>
                                <input type="text" name="motherName" value="{{old('motherName')}}" class="form-control">
                                @error('motherName')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">address</label>
                                <input type="text" name="address" value="{{old('address')}}" class="form-control">
                                @error('address')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for=""> dob</label>
                                <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
                                @error('dob')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">education</label>
                                <input type="text" name="education" value="{{old('education')}}" class="form-control">
                                @error('education')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">gender</label>
                                <select name="gender" class="form-control" id="">
                                    <option value="m">male</option>
                                    <option value="f">female</option>
                                    <option value="o">other</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <input type="submit" value="apply for cws" class="btn btn-success w-100">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection