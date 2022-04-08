@include('header')
		<br/> <h2 class="text-center">Supprimer une classe</h2>
		<br/>
		<div class="container">
			

			<form method="POST" action="{{route('deleteClassePost')}}">
				@csrf
				<input type="hidden" name="id" value="{{$classe->id}}" />
				
				<h2 class="text-center text-danger">Etes vous sur de vouloir supprimer la classe "{{$classe->nom}}"  ?</h2>

                <button type="submit" class="btn btn-danger">Supprimer</button>
                <a href="{{route('classes')}}" class="btn btn-secondary">Annuler</a>
			</form>
			
			
		</div>
@include('footer')