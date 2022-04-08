<html>
	<head>
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
		<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" >
	</head>
	<body  class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">

            <!-- Logo -->
            <h1 style="display: none"><a href="index.html" id="logo">Arcana <em>by HTML5 UP</em></a></h1>
            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li  @if ($currentpage=="home")  class="current" @endif   >
                        <a href="{{route('home')}}">Accueil</a>
                    </li>
                    <li @if ($currentpage=="etudiant")  class="current" @endif >
                        <a  href="{{route('etudiants')}}">Etudiants</a>
                    </li>
                    <li @if ($currentpage=="classe")  class="current" @endif >
                        <a  href="{{route('classes')}}">Classes</a>
                    </li>

                </ul>
            </nav>

        </div>

		<br/>

		      @if(Session::has('SuccessMessage'))

                <div class="row">
                   <div class="alert alert-success text-center" role="alert">
                        <strong></strong> {{Session::get('SuccessMessage')}}
                   </div>
                </div>

            @endif

            @if(Session::has('ErrorMessage'))

                <div class="row">
                    <div class="alert alert-danger text-center">
                        <strong></strong> {{Session::get('ErrorMessage')}}
                    </div>
                </div>

            @endif

