@include('header')
		<br/> <h2 class="text-center">Editer un étudiant</h2>
		<br/>
		<div class="container">
			<form method="POST" action="{{route('editEtudiantPost')}}" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="id" value="{{$etudiant->id}}" />

                <div class="row">
                    <div class="col-md-4">
                        <p> <img src="{{asset('img/photos/'.$etudiant->photo)}}" width="100%" /></p>
                        <div class="form-group">
                        <label>Photo</label>
                        <input type="file"  name="photo" class="form-control" 
                            placeholder="Choisissez une photo">
                        <p>Laissez ce champs vide si vous ne voulez pas changer la photo.</p>
                        </div>
                    </div>
                    <div class="col-md-8">

                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" value="{{$etudiant->name}}" required name="name" class="form-control" 
                                placeholder="Entrer le nom">
                         </div>

                        <div class="form-group">
                            <label>CIN</label>
                            <input type="text" value="{{$etudiant->cin}}" required name="cin" class="form-control" 
                                placeholder="Entrer le cin">
                         </div>
                         
                        <div class="form-group">
                            <label>Biographie</label>
                            <input type="text" value="{{$etudiant->bio}}" required name="bio" class="form-control" 
                            placeholder="Entrer une brève description">
                         </div>
                        
                        <div class="form-group">
                            <label>Classe</label>
                            <select name="classe_id" class="form-control">
                                <option value="">Aucune</option>
                                @foreach ($classes as $classe)
                                    
                                    <option value="{{$classe->id}}" @if ($etudiant->classe_id == $classe->id) selected @endif>
                                        {{$classe->nom}}
                                    </option>

                                @endforeach
                            </select>
                            
                        </div>
                        <br/>
                        <p>
                            <button type="submit" class="btn btn-warning">Editer</button>
                            <a href="{{route('etudiants')}}" class="btn btn-secondary">Annuler</a>
                        </p>
                    </div>
                </div>
				

                
                


                

    		</form>
		</div>
@include('footer')