@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <!-- Single apartment -->
        <h3>Visite per l'appartamento"{{ $apartment_name }}"</h3>
        @foreach ($visits as $visit)
            <div class="card my-2 w-75">
                <div class="card-body">
                    <h5 class="card-title">{{ $visit->ip }}</h5>
                    <h6 class="card-title">{{ $visit->date }}</h6>



                </div>
            </div>
        @endforeach
    </div>
@endsection
