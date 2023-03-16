@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Create Category</div>

                <div class="card-body">
                    @if(session('success'))
                        <span class="success">{{session('success')}}</span>
                    @endif
                    <form action="{{route('category.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Category Name</label>
                            <input type="text" name="name" class="form-control">
                            <span class="error">@error('name') {{$message}} @enderror</span>
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Create Category Image</div>
                <div class="card-body">
                    @if(session('cat_success'))
                        <span class="success">{{session('cat_success')}}</span>
                    @endif
                    <form action="{{route('category.image.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Category Name</label>
                            <select name="category_id" class="form-control">
                                <option value="">Choose a Category</option>
                                @foreach ($category as $categories)
                                    <option value="{{$categories->id}}">{{$categories->name}}</option>
                                @endforeach
                           </select>
                           <span class="error">@error('category_id') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="name">Image</label>
                            <input type="file" name="image" class="form-control">
                            <span class="error">@error('image') {{$message}} @enderror</span>
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

