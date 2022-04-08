@include('header')
		<br/> <h2 class="text-center">Ajouter une classe</h2>
		<br/>
		<div class="container">
			<form method="POST" action="{{route('addClassePost')}}">
				@csrf
				<div class="form-group">
                    <label>Nom</label>
                    <input type="text" required name="nom" class="form-control" 
                    	placeholder="Entrer le nom">
                 </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" required name="description" class="form-control" 
                    placeholder="Entrer la description">
                 </div>
                <button type="submit" class="btn btn-success">Ajouter</button>
                <a href="{{route('classes')}}" class="btn btn-secondary">Annuler</a>
			</form>
		</div>
@include('footer')