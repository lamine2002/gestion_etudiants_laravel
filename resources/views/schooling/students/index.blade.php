{{--index.blade.php--}}
@extends('base')

@section('title', 'Gestion des etudiants')


@section('content')

    <h4 style="text-align: end">
       Bonjour, {{auth()->user()->firstname}} {{auth()->user()->lastname}}
    </h4>
    <hr>
    <br>
    <div class="bg-light p-5 mb-5 text-center">
        <form action="" method="get" class="container d-flex gap-2">
            <input placeholder="Prenom " class="form-control" name="firstname" value="{{ $input['firstname'] ?? '' }}">
            <button class="btn btn-primary btn-sm flex-grow-0">
                Rechercher
            </button>
        </form>
    </div>
    <br>
    <form  action="{{route('import-students')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <label class="form-label" for="import" >Importer un fichier excel</label>
            <input type="file" name="studentsImport" id="import" class="form-control col">
            <br>
            <br>
            <button type="submit"  class="btn btn-primary ">Importer</button>
        </div>
    </form>
    <br>
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <div>
            <a href="{{ route('schooling.students.create') }}" class="btn btn-primary">Ajouter un etudiant</a>
            <a href="{{ route('export-students') }}" class="btn btn-info">Exporter vers excel</a>
        </div>
    </div>
    <br>

    <div class="row">
        @foreach($students as $student)
{{--            {{dd($student->schoolClasses->pluck('className')->last()   )}}--}}
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem; ">
                    <img src="{{$student->imageUrl()}}" class="card-img-top" alt="..." style="height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">{{$student->firstname}} {{ $student->lastname}}</h5>
                        <p class="card-text">
                            <strong>Age:</strong> {{
                            \Carbon\Carbon::parse($student->birthday)->age
                            }} ans<br>

                            <strong>Lieu de naissance:</strong> {{$student->birthplace}}<br>
                            <strong>Telephone:</strong> {{$student->phone}}<br>
                            <strong>Email:</strong> {{$student->email}}<br>
                            <strong>Classe:</strong> {{$student->schoolClasses->pluck('className')->last()}} <br>
                        </p>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                            <a href="{{ route('schooling.students.edit', ['student' => $student]) }}" class="btn btn-primary">Editer</a>
                            <form action="{{ route('schooling.students.destroy', $student) }}" method="post" name="deleteForm" class="deleteForm">
                                @csrf
                                @method('delete')
                                <button onclick="confirmerSuppression()" class="btn btn-danger btn-supprimer">Supprimer</button>
                            </form>
                            <a href="{{ route('schooling.students.show', ['student' => $student]) }}" class="btn btn-info">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $students->links() }}


@endsection

