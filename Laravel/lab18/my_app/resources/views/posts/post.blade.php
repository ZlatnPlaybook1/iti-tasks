@extends('layout.app')

@section('title') Store Page - Posts @endsection

@section('content')
    <div class="text-center mb-4">
        <a href="{{ route('posts.create') }}" type="button" class="btn btn-success">Create Post</a>
    </div>

    <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->user ? $post->user->name : "not found" }}</td>
                <td>{{ $post->created_at->format('Y-m-d') }}</td>
                <td>{{ $post->description }}</td>
                <td>
                    @if ($post->image)
                        <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="img-thumbnail" style="width: 100px; height: auto;">
                    @else
                        No Image
                    @endif
                </td>
                <td class="text-center">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form onsubmit="return confirmDelete()" action="{{ route('post.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script>
        function confirmDelete(){
            return confirm("Are you sure you want to delete this post?");
        }
    </script>
@endsection
