{{--base.blade.php--}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') | GroupeISI</title>
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.bootstrap5.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        @layer reset {
            button{
                all: unset;
            }
        }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Groupe ISI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @php
            $route = request()->route()->getName();
        @endphp
        @auth()
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a @class(['nav-link', 'active' => str_contains($route, 'students.')])  href="{{ route('schooling.students.index') }}">Gerer les etudiants</a>
                </li>

            </ul>
            <div class="ms-auto">

                    <ul class="navbar-nav">
                        <li class="nac-item">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="nav-link">
                                    Se déconnecter
                                </button>
                            </form>
                        </li>
                    </ul>
            </div>
        @else
            <div class="ms-auto">
                <ul class="navbar-nav   ">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </div>
        @endauth

    </div>
</nav>



<div class="container mt-5">
    @include('share.flash')
    @yield('content')
</div>

{{--<script>--}}

{{--    import Swal from "sweetalert2";--}}

{{--    function confirmerSuppression() {--}}
{{--        Swal.fire({--}}
{{--            title: "Êtes-vous sûr?",--}}
{{--            text: "Vous ne pourrez pas revenir en arrière!",--}}
{{--            icon: "warning",--}}
{{--            showCancelButton: true,--}}
{{--            confirmButtonColor: "#3085d6",--}}
{{--            cancelButtonColor: "#d33",--}}
{{--            confirmButtonText: "Oui, supprimez-le!"--}}
{{--        }).then((result) => {--}}
{{--            if (result.isConfirmed) {--}}

{{--            }--}}
{{--        });--}}
{{--    }--}}
{{--</script>--}}

<script>
    new TomSelect('select[multiple]', {plugins: {remove_button: {title: 'Supprimer'}}})
</script>
</body>
</html>
