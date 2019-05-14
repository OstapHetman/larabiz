@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-center">Add New Listing</h2>
        @include('inc.messages')
      </div>
      <div class="col-6 mx-auto">
        <form action="/listings" method="POST">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input name="name" id="name" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="website">Website</label>
            <input name="website" id="website" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input name="email" id="email" type="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input name="phone" id="phone" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="adress">Adress</label>
            <input name="adress" id="adress" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="bio">Bio</label>
            <textarea name="bio" id="bio" rows="4" class="form-control"></textarea>
          </div>
          <div class="form-group d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection