@include('header')
		<div class="container">
		<br/>
		<h2 class="text-center">Informations sur la classe</h2>
		<br/>
		<a class="btn btn-secondary" 
		   href="{{route('classes')}}"
		>Retour</a>

		<a class="btn btn-warning" 
		   href="{{route('editClasse',$classe->id)}}"
		>Editer</a>

		@if (!$classe->etudiants->count())
			<a class="btn btn-danger" 
			   href="{{route('deleteClasse',$classe->id)}}"
			>Supprimer</a>
		@endif
		<br/><br/>
		<table class="table table-hover">
			<tr> <th>Nom :</th> <td>{{$classe->nom}}</td> </tr>
			<tr> <th>Description :</th> <td>{{$classe->description}}</td> </tr>
		</table>
		<br/>
		<h2 class="text-center">Liste des etudiants</h2>
		<br/>
			<table class="table table-hover">
				@if ($classe->etudiants->count())
				<tr>
					<th>ID</th>
					<th>Nom</th>
					<th>CIN</th>
					<th>Action</th>
				</tr>
					@foreach($classe->etudiants as $etudiant)
						<tr>
							<td>{{$etudiant->id}}</td>
							<td>{{$etudiant->name}}</td>
							<td>{{$etudiant->cin}}</td>
							<td>
								<a class="btn btn-info" 
								   href="{{route('etudiant',$etudiant->id)}}"
								>Details</a>
							</td>
						</tr>
					@endforeach
				@else 
					<h5 class="text-center">La classe est encore vide</h5>
				@endif
			</table>
		</div>

@include('footer')