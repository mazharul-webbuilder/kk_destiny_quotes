@extends('master.front.master')

@section('title')
    KK Destiny Quotes
@endsection

@section('content')
    <section class="py-3">
        <div class="container">
            <div class="row">
                @foreach($quotes as $quote)
                <div class="col-md-10 mx-auto">
                    <div class="border rounded p-3 mb-3">
                        <p class="quote-body">{{ $quote->quote }}</p>
                        <i class="text-success">By {{$quote->author->name}} </i>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{route('home')}}" class="btn btn-success btn-sm text-center">Refresh</a>
            </div>
        </div>
    </section>
@endsection


