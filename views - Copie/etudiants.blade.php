@include('header')

		<div class="container">
			<br/>
			<h2 class="text-center"> Liste des étudiants</h2>

			
			
			<br/>
				<form method="POST" action="{{route('searchEtudiantPost')}}">
            	@csrf

            		<div class="row">
            			<div class="col-md-4">
            			</div>
            			<div class="col-md-4">
            				    <input type="text" required name="name" class="form-control" 
                            placeholder="Votre recherche">
                       </div>
            		</div>
     
				</form>
			<br/>

			<a href="{{route('addEtudiant')}}" class="btn btn-sm btn-success">Ajouter</a>
			
			<table class="table table-hover">
				<tr>
					<th>ID</th>
					<th>Classe</th>
					<th>Nom</th>
					<th>CIN</th>
					<th>Action</th>
				</tr>
				@foreach($etudiants as $etudiant)
					<tr>
						<td>{{$etudiant->id}}</td>
						<td>@if (isset($etudiant->classe)) 
								{{$etudiant->classe->nom}} 
							@else
								Aucune
							@endif
						</td>
						<td>{{$etudiant->name}}</td>
						<td>{{$etudiant->cin}}</td>
						<td>
							<a href="{{route('etudiant',$etudiant->id)}}" class="btn btn-sm btn-info">Détails</a>
							
							<a class="btn btn-sm btn-warning" 
							   href="{{route('editEtudiant',$etudiant->id)}}"
							>Editer</a>

							<a class="btn btn-sm btn-danger" 
							   href="{{route('deleteEtudiant',$etudiant->id)}}"
							>Supprimer</a>
						</td>
					</tr>
				@endforeach
			</table>
		</div>

@include('footer')