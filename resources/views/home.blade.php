@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Create Post -->
    <h1 class="text-center">Hello, <span class="fw-bold">{{ Auth::user()->name }}</span></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body px-5">
                    <form action="{{ route('createpost') }}" method="POST">
                        @csrf
                        <input name="content" class="form-control" type="text" required placeholder="What's on your mind?">
                        <button class="btn btn-dark mt-2 float-end">Create Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Posts -->
    @foreach($posts as $post)

    <div class="mt-5 row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body p-4">
                    <span class="fw-bold">{{ $post->user->name }} 
                        @if($post->user->id == Auth::user()->id)
                        <a href="{{ route('deletepost', $post->id) }}" class="float-end btn btn-secondary btn-sm" href="#">Delete</a>
                        @endif
                    </span>
                    <br>
                    <small>{{ $post->created_at->diffForHumans() }}</small>
                    <br>
                    <p class="mt-3">{{ $post->content }}</p>
                    <div class="card mb-3">
                        <div class="card-body">
                            <form action="{{ route('createcomment') }}" method="POST">
                                @csrf
                                <input name="content" class="form-control" type="text" required placeholder="Write a comment...">
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <button class="btn btn-sm btn-dark mt-2 float-end">Submit</button>
                            </form>
                        </div>
                    </div>
                    @foreach($post->comments->reverse() as $comment)
                        <div class="card px-3 py-1 mt-2" style="font-size: 12px;">
                            <div class="card-body">
                                <span class="fw-bold mt-2">{{ $comment->user->name }}</span>
                                <small>{{ $comment->created_at->diffForHumans() }}</small>
                                <br>
                                <p>{{ $comment->content }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    @endforeach
</div>
@endsection
