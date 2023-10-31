@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <!-- Single apartment -->
        @foreach ($apartments as $apartment)
            <div class="card my-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $apartment->name }}</h5>
                    <a href="{{ route('apartments.show', $apartment->id) }}" class="btn btn-warning">Show</a>
                    <form action="{{ route('apartments.destroy', $apartment->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Sei sicuro di voler eliminare questo appartamento?')">Delete</button>
                    </form>
                </div>
        @endforeach
    </div>
@endsection
