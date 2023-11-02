@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Comment</label>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action={{ route('comment/child/create/success', $id) }} method="POST">
                    @csrf
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Comment"
                        name="content" />
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
