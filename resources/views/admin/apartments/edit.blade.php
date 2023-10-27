@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">Modifica Appartamento</h2>

        <form method="POST" action="{{ route('apartments.update', $apartment->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $apartment->name }}">
            </div>
            <div class="mb-3">
                <label for="rooms" class="form-label">Stanze</label>
                <input type="number" class="form-control" id="rooms" name="rooms" value="{{ $apartment->rooms }}">
            </div>
            <div class="mb-3">
                <label for="beds" class="form-label">Letti</label>
                <input type="number" class="form-control" id="beds" name="beds" value="{{ $apartment->beds }}">
            </div>
            <div class="mb-3">
                <label for="bathrooms" class="form-label">Bagni</label>
                <input type="number" class="form-control" id="bathrooms" name="bathrooms"
                    value="{{ $apartment->bathrooms }}">
            </div>
            <div class="mb-3">
                <label for="mq" class="form-label">Mq</label>
                <input type="number" class="form-control" id="mq" name="mq" value="{{ $apartment->mq }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Indirizzo</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $apartment->address }}">
            </div>
            <div class="mb-3">
                <label for="lat" class="form-label">Lat</label>
                <input type="number" class="form-control" id="lat" name="lat" value="{{ $apartment->lat }}">
            </div>
            <div class="mb-3">
                <label for="lon" class="form-label">Lon</label>
                <input type="number" class="form-control" id="lon" name="lon" value="{{ $apartment->lon }}">
            </div>

            <!--manca foto-->

            <button type="submit" class="btn btn-primary">Salva Modifiche</button>
        </form>
    </div>
@endsection
