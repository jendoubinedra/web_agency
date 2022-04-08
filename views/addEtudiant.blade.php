@include('header')
		<br/> <h2 class="text-center">Ajouter un étudiant</h2>
		<br/>
		<div class="container">
			<form method="POST" action="{{route('addEtudiantPost')}}" enctype="multipart/form-data">
            @csrf
			<div class="row">
               
                <div class="col-md-6">
    				<div class="form-group">
                        <label>Nom</label>
                        <input type="text" required name="name" class="form-control" 
                            placeholder="Entrer le nom">
                    </div>

                    <div class="form-group">
                        <label>CIN</label>
                        <input type="text" required name="cin" class="form-control" 
                            placeholder="Entrer le cin">
                     </div>

                     <div class="form-group">
                        <label>Classe</label>
                        <select name="classe" class="form-control">
                            <option value="">Aucune</option>
                            @foreach ($classes as $classe)
                                <option value="{{$classe->id}}">{{$classe->nom}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Biographie</label>
                        <input type="text" required name="bio" class="form-control" 
                        placeholder="Entrer une brève description">
                    </div>
                    
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file"  name="photo" class="form-control" 
                            placeholder="Choisissez une photo">
                     </div>
                
                    <br/>
                    <p class="text-center">
                        <button type="submit" class="btn btn-success">Ajouter</button>
                        <a href="{{route('etudiants')}}" class="btn btn-secondary">Annuler</a>
                    </p>
                </div>

            </div>

                
                


             </form>
		</div>
@include('footer')