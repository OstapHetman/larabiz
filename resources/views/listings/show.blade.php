@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-center">{{ $listing->name }} <a href="/" class="btn btn-info text-white btn-sm ml-auto">Go Back</a></h2>
        @include('inc.messages')
      </div>
      <div class="col-6 mx-auto">
        <ul class="list-group">
          <li class="list-group-item">Address: {{ $listing->adress }}</li>
          <li class="list-group-item">Website: <a href="{{ $listing->website }}">{{ $listing->website }}</a></li>
          <li class="list-group-item">Email: {{ $listing->email }}</li>
          <li class="list-group-item">Phone: {{ $listing->phone }}</li>
        </ul>
        <hr>
        <div class="well">
          {{ $listing->bio }}
        </div>
      </div>
    </div>
  </div>
@endsection