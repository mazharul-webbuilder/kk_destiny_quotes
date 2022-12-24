@extends('master.admin.master')
@section('title')
    Admin Panel
@endsection
@section('content')
    <h2 class="text-center py-2">
        <a href="{{ route('admin.quotes') }}" class="btn btn-success btn-lg">Manage All Quotes</a>
    </h2>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Edit Quote</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('quote.update', ['id' => $quote->id])}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Select Author</label>
                                    <select class="form-select" name="author_id" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @foreach($authors as $author)
                                            <option value="{{$author->id}}" {{$author->id == $quote->author->id ? 'selected': '' }}>{{$author->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Quote</label>
                                    <textarea class="form-control" id="message-text" name="quote">{{$quote->quote}}</textarea>
                                </div>
                                <input type="submit" class="btn btn-success" value="Update">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
