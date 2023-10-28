@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Apartment') }}</div>

                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('apartments.store') }}">
                            @csrf
                            {{-- NAME --}}
                            <div class="mb-4 row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" autocomplete="name" autofocus maxlength="40">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- ROOMS --}}
                            <div class="mb-4 row">
                                <label for="rooms"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Rooms') }}</label>

                                <div class="col-md-6">
                                    <input id="rooms" type="number"
                                        class="form-control @error('rooms') is-invalid @enderror" name="rooms"
                                        value="{{ old('rooms') }}" autocomplete="rooms">

                                    @error('rooms')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- BEDS --}}
                            <div class="mb-4 row">
                                <label for="beds"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Beds') }}</label>

                                <div class="col-md-6">
                                    <input id="beds" type="number"
                                        class="form-control @error('beds') is-invalid @enderror" name="beds"
                                        value="{{ old('beds') }}" autocomplete="beds">

                                    @error('beds')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- BATHROOMS --}}
                            <div class="mb-4 row">
                                <label for="bathrooms"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Bathrooms') }}</label>

                                <div class="col-md-6">
                                    <input id="bathrooms" type="number"
                                        class="form-control @error('rooms') is-invalid @enderror" name="bathrooms"
                                        value="{{ old('bathrooms') }}" autocomplete="bathrooms">

                                    @error('bathrooms')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- MQ --}}
                            <div class="mb-4 row">
                                <label for="mq"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Mq') }}</label>

                                <div class="col-md-6">
                                    <input id="mq" type="number"
                                        class="form-control @error('mq') is-invalid @enderror" name="mq"
                                        value="{{ old('mq') }}" autocomplete="mq">

                                    @error('mq')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- ADDRESS --}}
                            <div class="mb-4 row">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ old('address') }}" autocomplete="address" autofocus maxlength="100">

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- LAT --}}
                            <div class="mb-4 row">
                                <label for="lat"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Lat') }}</label>

                                <div class="col-md-6">
                                    <input id="lat" type="number"
                                        class="form-control @error('lat') is-invalid @enderror" name="lat"
                                        value="{{ old('lat') }}" autocomplete="lat">

                                    @error('lat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- LON --}}
                            <div class="mb-4 row">
                                <label for="lon"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Lon') }}</label>

                                <div class="col-md-6">
                                    <input id="lon" type="number"
                                        class="form-control @error('lon') is-invalid @enderror" name="lon"
                                        value="{{ old('lon') }}" autocomplete="lon">

                                    @error('lon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- PHOTO --}}
                            <div class="mb-4 row">
                                <label for="photo"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Photo') }}</label>

                                <div class="col-md-6">
                                    <input id="photo" type="file"
                                        class="form-control @error('photo') is-invalid @enderror" name="photo"
                                        value="{{ old('photo') }}" autocomplete="photo">

                                    @error('photo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- VISIBILITY --}}
                            <div class="mb-4 row">
                                <label for="visible" class="col-md-4 col-form-label text-md-right">Visible <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('visible') is-invalid @enderror"
                                            type="radio" name="visible" id="visible_yes" value="1" checked
                                            {{ old('visible') == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="visible_yes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline mx-3">
                                        <input class="form-check-input @error('visible') is-invalid @enderror"
                                            type="radio" name="visible" id="visible_no" value="0"
                                            {{ old('visible') == '0' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="visible_no">No</label>
                                        @error('visible')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>





                            <div class="mb-4 row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
