@extends('master.admin.master')
@section('title')
    Admin Panel
@endsection
@section('content')
    <section class="">
        <div class="container">
            <h1 class="text-center py-3 text-success">
                Manage Quotes
            </h1>
            @include('admin.quote.create_quote')
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <table class="table table-bordered">
                        <thead class="text-center">
                        <tr>
                            <th>Id</th>
                            <th>Quote</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($quotes as $quote)
                        <tr>
                            <td>{{$quote->id}}</td>
                            <td>{{$quote->quote}}</td>
                            <td>{{$quote->author->name}}</td>
                            <td>
                                <table>
                                    <tr>
                                        <td><a href="{{route('quote.edit', ['id' => $quote->id])}}" class="btn btn-sm btn-success">Edit</a></td>
                                        <td><a href="{{route('quote.destroy', ['id' => $quote->id])}}" class="btn btn-sm btn-danger">Delete</a></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $quotes->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
