@extends('base')
@section('data')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header">insert Course</div>
                    <div class="card-body">
                        <form action="{{route('course.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Title</label>
                                <input type="text" name="title" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                    <p class="small text-danger">{{$message}}</p>                                    
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Duration</label>
                                <input type="text" name="duration" value="{{old('duration')}}" class="form-control @error('duration') is-invalid @enderror">
                                @error('duration')
                                    <p class="small text-danger">{{$message}}</p>                                    
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Status</label>
                                <input type="text" name="status" value="{{old('status')}}" class="form-control @error('status') is-invalid @enderror">
                                @error('status')
                                    <p class="small text-danger">{{$message}}</p>                                    
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Category</label>
                                <input type="text" name="category" value="{{old('category')}}" class="form-control @error('category') is-invalid @enderror">
                                @error('category')
                                    <p class="small text-danger">{{$message}}</p>                                    
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Fee</label>
                                <input type="text" name="fee" value="{{old('fee')}}" class="form-control @error('fee') is-invalid @enderror">
                                @error('fee')
                                    <p class="small text-danger">{{$message}}</p>                                    
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Discount Fee</label>
                                <input type="text" name="discount_fee" value="{{old('discount_fee')}}" class="form-control @error('discount_fee') is-invalid @enderror">
                                @error('discount_fee')
                                    <p class="small text-danger">{{$message}}</p>                                    
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" >Description</label>
                                <textarea type="text" name="description" value="{{old('description')}}"cols="30" rows="3" class="form-control @error('description') is-invalid @enderror"></textarea>
                                @error('description')
                                    <p class="small text-danger">{{$message}}</p>                                    
                                @enderror
                                
                            </div>
                            <div class="mb-2">
                                <input type="submit" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection