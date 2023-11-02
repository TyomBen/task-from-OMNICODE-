@extends('layouts.app')

@section('content')
    <form action="{{ route('create/comment') }}" method="POST">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="container-fluid">
            <textarea class="form-control comment-textarea" name="content" placeholder="Create Comment"></textarea>
        </div>

        <div class = 'comment-submit'>
            <button class="btn btn-outline-info m-3" type="submit">Leave Comment</button>
        </div>
    </form>
    <div class="p-3">
        <h4 class="s">Comments</h4>
    </div>
    @foreach ($comments as $comment)
        <form action={{ route('create/child', $comment->id) }} method = 'GET'>
            <div class="comment-content">
                <p> {{ $comment->content }} </p>
            </div>
            <div class="comment-meta">
                @if ($comment->number_of_child_comments == 0)
                    <p class="mt-4"> {{ $comment->number_of_child_comments }} comment </p>
                @else
                    <p class="mt-4"> {{ $comment->number_of_child_comments }} comments </p>
                @endif
                <button class="btn btn-primary mb-5 m-3" type="submit">Leave Comment</button>
            </div>
        </form>
    @endforeach
    <div class="mt-4">
        {{ $comments->links('pagination::bootstrap-4') }}
    </div>
@endsection
