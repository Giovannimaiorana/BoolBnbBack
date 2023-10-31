@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card text-white bg-dark">
                    <div class="card-body text-center">
                        <h1 class="card-title">Ciao</h1>
                        <p class="card-text">sembra che l'appartamento che stai cercando non sia tuo o non essiste</p>
                        <a href="{{ route('dashboard') }}" class="btn btn-primary">Torna al tuo profilo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
