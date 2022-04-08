@include('header')

		<div class="container">

			<br/>
				<h2 class="text-center">Liste des classes</h2>
			<br/>
			<a href="{{route('addClasse')}}" class="btn btn-sm btn-success">Ajouter</a>
			<table class="table table-hover">
				<tr>
					<th>ID</th>
					<th>Nom</th>
					<th>Description</th>
					<th>Nbre etudiants</th>
					<th>Action</th>
				</tr>
				@foreach($classes as $classe)
					<tr>
						<td>{{$classe->id}}</td>
						<td>{{$classe->nom}}</td>
						<td>{{$classe->description}}</td>
						<td>{{$classe->etudiants->count()}}</td>
						<td>
							<a class="btn btn-info" 
							   href="{{route('classe',$classe->id)}}"
							>Details</a>

							<a class="btn btn-warning" 
							   href="{{route('editClasse',$classe->id)}}"
							>Editer</a>

							@if (!$classe->etudiants->count())
							<a class="btn btn-danger" 
							   href="{{route('deleteClasse',$classe->id)}}"
							>Supprimer</a>
							@endif
						</td>
					</tr>
				@endforeach
			</table>
		</div>

@include('footer')