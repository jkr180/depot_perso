<?php
 /* Afin de ne pas trop mélanger le code PHP avec le HTML et améliorer la lisibilité, 
 * on peut mettre la connexion PDO en haut de la page 
 */ 
 try 
   {        
       $db = new PDO('mysql:host=localhost;charset=utf8;dbname=jarditou', 'root', '');
       $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (Exception $e) {
      echo "Erreur : " . $e->getMessage() . "<br>";
      echo "N° : " . $e->getCode();
      die("Fin du script");
}    

/* Ajoutons ici notre bloc d'exécution de la requête,
* Ainsi, elle est englobée dans le reste du code PHP
*/
$requete = "SELECT * FROM produits WHERE pro_id=".$_GET["pro_id"];
$result = $db->query($requete);
$produit = $result->fetch(PDO::FETCH_OBJ);
$result->closeCursor(); 
var_dump($produit);
if ($produit == false){
echo "produit non disponible";
} 
else{
?>
<html>
<head>
   <meta charset="UTF-8">
   <title>testDb.php</title>      
</head>
<body>
<?php echo $produit->pro_id; ?>
 <br>
 <?php echo $produit->pro_cat_id; ?>
 <br>
 <?php echo $produit->pro_ref; ?>
 <br>
 <?php echo $produit->pro_libelle; ?>
 <br>
 <?php echo $produit->pro_description; ?>
 <br>
 <?php echo $produit->pro_prix; ?>
 <br> 
 <?php echo $produit->pro_stock; ?>
 <br>
 <?php echo $produit->pro_couleur; ?>
 <br>
 <?php echo $produit->pro_photo; ?>
 <br> 
 <?php echo $produit->pro_d_ajout; ?>
 <br> 
 <?php echo $produit->pro_d_modif; ?>
 <br> 
 <?php echo $produit->pro_bloque; ?> 
 </body>
</html>
<?Php
}
?> 