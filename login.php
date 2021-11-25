<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
     <title>login</title>
</head>
<body>

<h1 style = text-align:center>Bienvenue!</h1>
    <?php
if (isset($_POST['submit'])){
   
   $nom= htmlentities(trim($_POST['nom']));
   $prenom=htmlentities(trim($_POST['prenom']));
   $mail=htmlentities(trim($_POST['mail']));
   $contact=htmlentities(trim($_POST['contact']));

   if ($nom&&$prenom&&$mail&&$contact)
   {
    try
    {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=visiteurs', 'root', '',
    $pdo_options);
        
    
         $req=$bdd->prepare('INSERT INTO inscription(nom,prenom,mail,contact) VALUES (:nom,:prenom,:mail,:contact)');
         $req ->execute(array('nom' =>$nom,'prenom' => $prenom,'mail'=>$mail,'contact'=>$contact));
         echo"connexion reussir";
         header('Location: page1.php');
         
    }
    

    catch (Exception $e)
    {
    die('Erreur : ' . $e->getMessage());
    
    }
   } else echo "veuillez saisir tout les champs";
  
 
 }
     
 
  


?>

<div class="contenair">
       <form action="" method="POST">
           <h2>PAGE DE CONNEXION</h2>

           <label for="" class="tp">votre nom:</label>
           <input type="text" name="nom"><br>
           <label for="" class="tp">votre Prenom:</label>
           <input type="text" name="prenom"><br>
           <label for="" class="tp">votre mail:</label>
           <input type="mail" name="mail"><br>
           <label for="" class="tp"> votre Contact:</label>
           <input type="number" name="contact">
           <input type="submit" name="submit" id="submit">

       </form>

    </div>


</body>
</html>