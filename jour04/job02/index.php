<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Formulaire html</title>
</head>
<body>
<form action="#" method="GET">
Votre nom :<input type="text1" name="nom" required>
Votre Prénom :<input type="text" name="prenom" required>
Date :<input type="date" name="date" required>
<p>
<input type=submit value="Envoyer">
</form>
<main>
<table border=1>
   <thead>
       <tr>
           <th>Argument</th>
           <th>Valeur</th>
       </tr>
       
   </thead>
   <tbody>
       <?php 
       foreach ($_GET as $key => $value) 
       {
           echo '
           <tr>
           <td>'.$key.'</td>
           <td>'.$value.'</td>
           </tr>
           ';
       }

       ?>
   </tbody>
</table>