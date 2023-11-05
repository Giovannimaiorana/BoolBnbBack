@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <!-- Single apartment -->
        <h3>Messaggi per l'appartamento"{{ $apartment_name }}"</h3>
        @foreach ($messages as $message)
            <div class="card my-2 w-75">
                <div class="card-body">
                    <h5 class="card-title">{{ $message->name, $message->last_name }}</h5>
                    {{-- <a href="{{ route('apartments.show', $apartment->id) }}" class="btn btn-warning">Show</a>
                    <form action="{{ route('apartments.destroy', $apartment->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Sei sicuro di voler eliminare questo appartamento?')">Delete</button>
                    </form>
                    <a href="{{ route('messages.index', $apartment->id) }}" class="btn btn-warning">Messaggi</a> --}}

                </div>
            </div>
        @endforeach
    </div>
@endsection
