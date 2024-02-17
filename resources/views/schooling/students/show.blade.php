@extends('base')

@section('title', "Détails de l'étudiant")

@section('content')
    <h1 class="text-center">@yield('title')</h1>
    <hr>
    <div class="row">
{{--        // div pour une image en cercle avec la classe rounded-circle--}}
        <div class="col rounded-circle">
            @if($student->image)
{{--                <img src="{{ asset('storage/'.$student->image) }}" alt="{{ $student->firstname }}" class="img-fluid">--}}
                <img style="width: 50%; height: 50%; border-radius: 100%; object-fit: cover" src="{{$student->imageUrl()}}" alt="photo de l'étudiant"  >
            @endif
        </div>

        <div class="col">
            <div class="row">
                <div class="col">
                    <h3>Prénom</h3>
                    <p>{{ $student->firstname }}</p>
                </div>
                <div class="col">
                    <h3>Nom</h3>
                    <p>{{ $student->lastname }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Date de naissance</h3>
                    <p>{{ $student->birthday }}</p>
                </div>
                <div class="col">
                    <h3>Lieu de naissance</h3>
                    <p>{{ $student->birthplace }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Telephone</h3>
                    <p>{{ $student->phone }}</p>
                </div>
                <div class="col">
                    <h3>Email</h3>
                    <p>{{ $student->email }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Classe</h3>
                    <p>{{--{{ $student->schoolClass->className }}--}} Indisponible pour le moment</p>
                </div>
            </div>
        </div>
    </div>
@endsection
