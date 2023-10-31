@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <a class="btn btn-primary mb-2" href="{{ route('apartments.create') }}">Add Appartment</a>

        <a class="btn btn-primary mb-2" href="{{ route('apartments.index') }}">Appartment List</a>

    </div>
@endsection
