@include('header')

	<div class="container">
	
		@if (isset($etudiant))
		
		<br/>
		<h2 class="text-center"> Détail de l'étudiant "{{$etudiant->name}}"</h2>
		<br/>
		<div class="row">
			<div class="col-md-4">
				<p class="text-center">
					@if (isset($etudiant->photo))
						<img src="{{asset('img/photos/'.$etudiant->photo)}}" width="100%" />
					@else
						<img src="{{asset('img/photos/default.jpg')}}" width="100%" />
					@endif
				</p>	
			</div>

			<div class="col-md-8">
				<a class="btn btn-sm btn-secondary" href="{{route('etudiants')}}">Retour</a>
				<a class="btn btn-sm btn-warning" href="{{route('editEtudiant',$etudiant->id)}}">Editer</a>
				<a class="btn btn-sm btn-danger" href="{{route('deleteEtudiant',$etudiant->id)}}">Supprimer</a>
				<br/>
				<table class="table table-hover">
					<tr><th>ID</th><td>{{$etudiant->id}}</td></tr>
					<tr><th>Classe</th><td>@if ($etudiant->classe) <a href="{{route('classe',$etudiant->classe->id)}}">{{$etudiant->classe->nom}} : {{$etudiant->classe->description}}</a> @endif</td></tr>
					<tr><th>Nom</th><td>{{$etudiant->name}}</td></tr>
					<tr><th>CIN</th><td>{{$etudiant->cin}}</td></tr>
					<tr><th>Bio</th><td>{{$etudiant->bio}}</td></tr>
				</table>
			</div>

		</div>
				
		@else
			<h2 class="text-center text-danger">L'étudiant n'exite pas !</h2>
		@endif
	
	</div>

@include('footer')