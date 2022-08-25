@extends('base')
@section('data')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header">edit Course</div>
                    <div class="card-body">
                        <form action="{{route('course.update',['course'=>$course])}}" method="post">
                            @method("put")
                            @csrf
                            <div class="mb-3">
                                <label for="">Title</label>
                                <input type="text" name="title" value="{{$course->title}}" class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                    <p class="small text-danger">{{$message}}</p>                                    
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Duration</label>
                                <input type="text" name="duration" value="{{$course->duration}}" class="form-control @error('duration') is-invalid @enderror">
                                @error('duration')
                                    <p class="small text-danger">{{$message}}</p>                                    
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Status</label>
                                <input type="text" name="status" value="{{$course->status}}" class="form-control @error('status') is-invalid @enderror">
                                @error('status')
                                    <p class="small text-danger">{{$message}}</p>                                    
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Category</label>
                                <input type="text" name="category" value="{{$course->category}}" class="form-control @error('category') is-invalid @enderror">
                                @error('category')
                                    <p class="small text-danger">{{$message}}</p>                                    
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Fee</label>
                                <input type="text" name="fee" value="{{$course->fee}}" class="form-control @error('fee') is-invalid @enderror">
                                @error('fee')
                                    <p class="small text-danger">{{$message}}</p>                                    
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Discount Fee</label>
                                <input type="text" name="discount_fee" value="{{$course->discount_fee}}" class="form-control @error('discount_fee') is-invalid @enderror">
                                @error('discount_fee')
                                    <p class="small text-danger">{{$message}}</p>                                    
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" >Description</label>
                                <input type="text" name="description" value="{{$course->description}}" class="form-control @error('description') is-invalid @enderror">
                                @error('description')
                                    <p class="small text-danger">{{$message}}</p>                                    
                                @enderror
                                
                            </div>
                            <div class="mb-2">
                                <input type="submit" value="update course" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection