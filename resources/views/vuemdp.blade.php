@extends ('sommaire')
@section('contenu1')
 
  <div id = "contenu">
  <h2>Changement de mot de pase</h2>
    <form method = "post" action = "">
        {{ csrf_field() }} <!-- laravel va ajouter un champ caché avec un token -->
        @includeWhen($erreurs != null , 'msgerreurs', ['erreurs' => $erreurs]) 
        <p>
        <label for = "date">date d'embauche*</label>
        <input type = "date" name = "date"  size = "30" maxlength = "45" required >
        </p>
        <p>
        <label for = "mdp">Nouveau mot de passe*</label>
        <input  type = "password"  name = "mdp1" size = "30" maxlength = "45" required>
        </p>
        <p>
        <label for = "mdp">Confirmer mot de passe*</label>
        <input  type = "password"  name = "mdp2" size = "30" maxlength = "45" required>
        </p>
       <input type = "submit" value = "Valider" name = "valider">
       <input type = "reset" value = "Annuler" name = "annuler"> 
        </p>
    </form>
</div>





@endsection