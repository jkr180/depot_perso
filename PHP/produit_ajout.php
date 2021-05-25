<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Jarditou</title> 
</head>
<body>

  <div class="container-fluid"> 
  <div class="row">
  <div class="col-9">
  <img src="jarditoulogo.jpg" height="80px" width="150px">
  </div>

  <div class="col-3">
  <p class="h1">Tout le jardin</p>
</div>
</div>

      <img src="promotion.jpg" width="100%" height="100%">


      <div class="row">
       <div class="col-12">
     <nav class="navbar navbar-expand navbar-dark bg-dark">
     <a class="navbar-brand" href="#">Jarditou.com</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
            

              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="acceuil.html">Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="tableau.html">Mon compte</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="formulaire.html">contact</a>
                </li>
              </ul>
              </nav>  
            </div>
            </div>
        </div>
    </div>
    </div>  
    
 
          
         
                                              <form action="script.php"method="POST" >

                                            <h6><br>Ces zones sont obligatoires*</h6></br>

<div class="form-group">
<label for="name">ID:</label>
<input type="" class="form-control" id="id" name="id" placeholder="">
<div id="erreurid" class="Erreur"></div><br>                                 
                            
<div class="form-group">
<label for="ref">Référence:</label>
<input type="" class="form-control" id="reference" name="reference" placeholder="">
<div id="erreurref" class="Erreur"></div><br>      

<div class="form-group">
<label for="cat">Catégorie:</label>
<input type="" class="form-control" id="categorie" name="categorie" placeholder="">
<div id="erreurcat" class="Erreur"></div><br>                                 
     
<div class="form-group">
<label for="libelle">Libellé:</label>
<input type="" class="form-control" id="libelle" name="libelle" placeholder="">
<div id="erreurlib" class="Erreur"></div><br>                                 
     
<div class="form-group">
<label for="descrip">Description:</label>
<input type="" class="form-control" id="description" name="description" placeholder="" floatingTextarea2 style="height: 100px">
<div id="erreurdescrip" class="Erreur"></div><br>                                 
     
<div class="form-group">
<label for="prix">Prix:</label>
<input type="" class="form-control" id="prix" name="prix" placeholder="">
<div id="erreurprix" class="Erreur"></div><br>                                 
     
<div class="form-group">
<label for="stock">Stock:</label>
<input type="" class="form-control" id="stock" name="stock" placeholder="">
<div id="erreurstock" class="Erreur"></div><br>                                 
     
<div class="form-group">
<label for="couleur">Couleur:</label>
<input type="" class="form-control" id="couleur" name="couleur" placeholder="">
<div id="erreurcouleur" class="Erreur"></div><br>                                 
     


<label>Produit bloqué:</label><br><br>
              <div class="form-group">
<div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Féminin">
                  <label class="form-check-label" id="feminin">Oui</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Féminin">
                  <label class="form-check-label" id="feminin">Non</label>
              </div>
              </div><br>
              <div class="form-group">      
                  <label for="name">Date d'ajout:</label>
                  <input type="date" class="form-control" id="start" name="ddn"><br>
                  </div>   
            
              <div class="form-group">      
                  <label for="name">Date de modification:</label>
                  <input type="date" class="form-control" id="start" name="ddn">
                  </div> <br>
                 

                 <input type="checkbox" name="condition" value="black" checked> *J'accepte le traitement informatique de ce formulaire <br>


  <br>
  <div class="champ">
  <input type="submit" value="Envoyer"class="btn btn-dark"></button>
  </div><br>

<a href="">Liste des produits</a><br>
<br><a href="">Modifier</a><br><br>

  
          <nav class="navbar navbar-expand navbar-dark bg-dark">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="acceuil.php">Mention légale</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="acceuil.php">Horaires</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="acceuil.php">Plan du site</a>
          </li>
          </button>
          </ul>
        </div>
   </div>
</nav>
</body>
</html> 
