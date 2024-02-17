@extends('base')

@section('title', $student->exists ? "Editer un etudiant" : "Ajouter un nouvel etudiant")

@section('content')

    <h1>@yield('title')</h1>

    <form class="vstack gap-3" action="{{ route($student->exists?'schooling.students.update':'schooling.students.store', $student) }}"
          method="post" enctype="multipart/form-data">

        @csrf
        @method($student->exists ? 'patch' : 'post')

        <div class="row">

                @include('share.input', ['class' =>'col','label' => 'Prenom', 'name' => 'firstname', 'value' => $student->firstname])
                @include('share.input', ['class' =>'col','label' => 'Nom', 'name' => 'lastname', 'value' => $student->lastname])
        </div>
        <div class="row">
            @include('share.input', ['class' =>'col','type' =>'date', 'label' => 'Date de naissance', 'name' => 'birthday', 'value' => $student->birthday])
            @include('share.input', ['class' =>'col','label' => 'Lieu de naissance', 'name' => 'birthplace', 'value' => $student->birthplace])
        </div>
        <div class="row">
            @include('share.input', ['class' =>'col','type' =>'tel', 'label' => 'Telephone', 'name' => 'phone', 'value' => $student->phone])
            @include('share.input', ['class' =>'col','type' =>'email','label' => 'Email', 'name' => 'email', 'value' => $student->email])
        </div>
{{--        @dd($classes)--}}
        <div class="row">
            <div class="group-form col">
                <label for="classes">Selectionner une classe</label>
                <select name="classes" class="form-select" aria-label="Default select example">
                    <option selected>Selectionner une classe</option>
                    @foreach($classes as $k => $v)
                        <option {{ $student->schoolClasses->contains($k) ? 'selected' : '' }} value="{{$k}}">{{$v}}</option>
                    @endforeach
                </select>
            </div>
            @include('share.input', ['class' =>'col','type' =>'text', 'label' => 'Annee Academique', 'name' => 'schoolingYear', 'value' => $student->exists ? $student->schoolClasses()->first()->pivot->schoolingYear : ''])
            {{--        @dd($student->schoolClasses()->first()->pivot->schoolingYear)--}}
        </div>


        @include('share.input', ['class' =>'col', 'type' =>'file', 'label' => 'Image', 'name' => 'image'])
    <br>

        <div>
            <button class="btn btn-primary">
                @if($student->exists)
                    Modifier
                @else
                    Ajouter
                @endif
            </button>
        </div>

{{--        {{dd($classes)}}--}}

    </form>


@endsection
