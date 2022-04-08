@include('header')
		<br/> <h2 class="text-center">Editer une classe</h2>
		<br/>
		<div class="container">
			<form method="POST" action="{{route('editClassePost')}}">
				@csrf
				<input type="hidden" name="id" value="{{$classe->id}}" />
				<div class="form-group">
                    <label>Nom</label>
                    <input type="text" value="{{$classe->nom}}" required name="nom" class="form-control" 
                    	placeholder="Entrer le nom">
                 </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" value="{{$classe->description}}" required name="description" class="form-control" 
                    placeholder="Entrer la description">
                 </div>
                <button type="submit" class="btn btn-warning">Editer</button>
                <a href="{{route('classes')}}" class="btn btn-secondary">Annuler</a>
			</form>
		</div>
@include('footer')