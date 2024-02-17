@extends('base')

@section('title', 'Se connecter')

@section('content')

    <div class="mt-4 container">
        <h1>@yield('title')</h1>
        <form method="post" action="{{ route('login') }}" class="vstack gap-3">
            @csrf
            @include('share.input', ['type'=> 'email', 'class'=> 'col', 'name'=> 'email', 'label' => 'Email'])
            @include('share.input', ['type' => 'password', 'class' => 'col', 'name' =>'password', 'label' => 'Mot de passe'])
            <div>
                <button class="btn btn-primary">Se connecter</button>
            </div>
        </form>
    </div>

    @endsection
