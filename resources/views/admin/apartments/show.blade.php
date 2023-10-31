@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            Dettagli dell'appartamento
        </h2>

        <div class="card">
            <img src="{{ $apartment->photo }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $apartment->name }}</h5>
                <p><strong>Stanze:</strong> {{ $apartment->rooms }}</p>
                <p><strong>Letti:</strong> {{ $apartment->beds }}</p>
                <p><strong>Bagni:</strong> {{ $apartment->bathrooms }}</p>
                <p><strong>Mq:</strong> {{ $apartment->mq }}</p>
                <p><strong>Indirizzo:</strong> {{ $apartment->address }}</p>
                <!-- Aggiungi altri campi dell'appartamento come necessario -->

                <a href="{{ route('apartments.index') }}" class="btn btn-primary">Torna alla lista</a>
                <a href="{{ route('apartments.edit', ['id' => $apartment->id]) }}" class="btn btn-primary">Modifica</a>


            </div>
        </div>
    </div>
@endsection
