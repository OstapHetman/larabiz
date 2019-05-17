@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h3>Your Listings</h3>
                    @if (count($userListings))
                        <table class="table table-striped">
                            <tr>
                                <th>Company</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($userListings as $listing)
                                <tr>
                                    <td>{{ $listing->name }}</td>
                                    <td class="text-right" ><a class="btn btn-light " href="/listings/{{ $listing->id }}/edit">Edit</a></td>
                                    <td>
                                        <form action="{{ action('ListingsController@destroy', ['id' => $listing->id]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
