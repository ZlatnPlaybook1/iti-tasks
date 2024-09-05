@extends('layout.app')

@section('title') Edit @endsection

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Edit Your Post</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" value="{{ $post->title }}" type="text" class="form-control" id="title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="3" placeholder="Enter description">{{ $post->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="Current Image" class="img-thumbnail mt-2" width="150">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="postCreator">Post Creator</label>
                            <select name="post_creator" class="form-control" id="postCreator">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $user->id == $post->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
