@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">Modifica Appartamento</h2>

        <form method="POST" action="{{ route('apartments.update', $apartment->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ $apartment->name }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="rooms" class="form-label">Stanze</label>
                <input type="number" class="form-control  @error('rooms') is-invalid @enderror" id="rooms"
                    name="rooms" value="{{ $apartment->rooms }}">
                @error('rooms')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="beds" class="form-label">Letti</label>
                <input type="number" class="form-control  @error('beds') is-invalid @enderror" id="beds"
                    name="beds" value="{{ $apartment->beds }}">
                @error('beds')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="bathrooms" class="form-label">Bagni</label>
                <input type="number" class="form-control @error('rooms') is-invalid @enderror" id="bathrooms"
                    name="bathrooms" value="{{ $apartment->bathrooms }}">

                @error('bathrooms')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="mq" class="form-label">Mq</label>
                <input type="number" class="form-control  @error('mq') is-invalid @enderror" id="mq" name="mq"
                    value="{{ $apartment->mq }}">
                @error('mq')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Indirizzo</label>
                <input type="text" class="form-control  @error('address') is-invalid @enderror" id="address"
                    name="address" value="{{ $apartment->address }}">
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lat" class="form-label">Lat</label>
                <input type="number" class="form-control  @error('lat') is-invalid @enderror" id="lat" name="lat"
                    value="{{ $apartment->lat }}">
                @error('lat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lon" class="form-label">Lon</label>
                <input type="number" class="form-control  @error('lon') is-invalid @enderror" id="lon" name="lon"
                    value="{{ $apartment->lon }}">
                @error('lon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="mb-3 row">
                <label for="visible" class="col-md-4 col-form-label text-md-right">Visible <span
                        class="text-danger">*</span></label>
                <div class="col-md-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input @error('visible') is-invalid @enderror" type="radio" name="visible"
                            id="visible_yes" value="1" checked @checked(old('visible', $apartment->visible) == 1)>
                        <label class="form-check-label" for="visible_yes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline mx-3">
                        <input class="form-check-input @error('visible') is-invalid @enderror" type="radio"
                            name="visible" id="visible_no" value="0" @checked(old('visible', $apartment->visible) == 0)>
                        <label class="form-check-label" for="visible_no">No</label>
                        @error('visible')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <!--manca foto-->

            <button type="submit" class="btn btn-primary">Salva Modifiche</button>
        </form>
    </div>
@endsection
