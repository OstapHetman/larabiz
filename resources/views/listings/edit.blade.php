@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-center">Edit Listing</h2>
        @include('inc.messages')
      </div>
      <div class="col-6 mx-auto">
        <form action="/listings/{{ $listing->id }}" method="POST">
          @csrf
          @method('PATCH')
          <div class="form-group">
            <label for="name">Name</label>
            <input name="name" id="name" type="text" class="form-control" value="{{ $listing->name }}">
          </div>
          <div class="form-group">
            <label for="website">Website</label>
            <input name="website" id="website" type="text" class="form-control" value="{{ $listing->website }}">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input name="email" id="email" type="email" class="form-control" value="{{ $listing->email }}">
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input name="phone" id="phone" type="text" class="form-control" value="{{ $listing->phone }}">
          </div>
          <div class="form-group">
            <label for="adress">Adress</label>
            <input name="adress" id="adress" type="text" class="form-control" value="{{ $listing->adress }}">
          </div>
          <div class="form-group">
            <label for="bio">Bio</label>
            <textarea name="bio" id="bio" rows="4" class="form-control">{{ $listing->bio }}</textarea>
          </div>
          <div class="form-group d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection