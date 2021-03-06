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
    <img src="jarditoulogo.jpg" height="60px" width="150px">
  </div>
 <div class="col-3">
    <p class="h1">Tout le jardin</p>
</div>
</div>

    <div class="row">
      <div class="col-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                <a class="nav-link" href="tableau.html">Tableau</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="formulaire.html">contact</a>
              </li>
            </ul>
        
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Votre promotion" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
          </div>
          </nav>
        </div>  
      </div>
      </div>
 <img src="promotion.jpg" height="100%" width="100%">

           <h6><br>Ces zones sont obligatoires*</h6></br>



          <form action="http://bienvenu.net/script.php" method="POST">


            <fieldset>
                <legend> *Vos Coordonn??es </legend> <br>

                <div class="form-group">
                  <label for="name">Nom*</label>
                  <input type="text" class="form-control" id="nom" name="Nom" placeholder="Veuillez saisir votre nom">
                  <div id="erreurName" class="Erreur"></div><br>
                
          
                  <label for="name">Pr??nom*</label>
                  <input type="text" class="form-control" id="prenom" name="Pr??nom" placeholder="Veuillez saisir votre pr??nom">
                  <div id="erreurPrenom" class="Erreur"></div><br>
              </div>
              
              <label>Sexe*</label>
              <div class="form-group">
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="F??minin">
                  <label class="form-check-label" id="feminin">F??minin</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Masculin">
                  <label class="form-check-label" id="masculin">Masculin</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Neutre">
                  <label class="form-check-label" id="neutre">Neutre</label>
              </div>
                  <div id="erreurSexe" class="Erreur"></div><br>
            
              </div>

              <div class="form-group">      
                  <label for="name">Date de naissance*</label>
                  <input type="date" class="form-control" name="birth" id="date">        
                  <div id="erreurDate" class="Erreur"></div><br>
                
              </div>

              <div class="form-group">
                  <label for="code">Code Postal*</label>
                  <input id="codepostal" type="cp" class="form-control" name="cp" placeholder="Code Postal">
                  <div id="erreurCP" class="Erreur"></div><br>

                  <label for="adresse">Adresse</label>
                  <input type="adresse" class="form-control" name="Adresse" id="adresse" placeholder="Adresse">
                  <div id="erreurAdr" class="Erreur"></div><br>

                  <label for="city">Ville</label>
                  <input id="ville" type="city" class="form-control" name="ville" placeholder="Ville">
                  <div id="erreurVille" class="Erreur"></div><br>

                  <label for="courriel">Email*</label>
                  <input id="mail" type="" class="form-control" name="courriel" placeholder="dave.loper@afpa.fr">
                  <div id="erreurMail" class="Erreur"></div><br>
                  <br>
              </div>


    <select class="form-select" aria-label="Default select example">
    <option selected>Veuillez s??lectionner un sujet</option>
    <option value="1">Mes commandes</option>
    <option value="2">Question sur un produit</option>
    <option value="3">R??clamation</option>
    <option value="4">Autres</option>
  </select><br>
<br>

<fieldset>
  <div class="form-floating">
      <textarea class="form-control" placeholder="Commentaire" floatingTextarea2 style="height: 100px">Votre question*:</textarea>
      <label for="floatingTextarea2"></label>
    </div>
  <br>
  </fieldset>
    <br>
  <br>

  <input type="checkbox" name="condition" value="black" checked> *J'accepte le traitement informatique de ce formulaire <br>
  <br>
  <div class="champ">
    
      <input type="submit" value="Envoyer"class="btn btn-dark"></button> 
      <input type="submit" value="Annuler"class="btn btn-dark"> <br> 
  </br>
  </div>
  
  <nav class="navbar navbar-expand navbar-dark bg-dark">
    

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="acceuil.html">Mention l??gale</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="acceuil.html">Horaires</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="acceuil.html">Plan du site</a>
            </li>
        </button>
          </ul>
        </div>


        

    

    <script src="https://code.jquery.com/jquery-3.4.1slm.min.js" integrity="sha384-J6qa4849b1E2+poT4WnyKhv5vZF55rPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  
</body>
</html>