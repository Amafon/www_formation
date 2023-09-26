<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Formation PHP</title>
</head>
<body>
  <h1>Formation PHP</h1>
  <?php
    $nom = "Amafon";
    $prenom = "Achoumou Freddy-Yvan";
    $dateEmbauche = "01/01/2017";
    $service = "Contrôle et Audit Interne";
  ?>
  <!-- <p>Bonjour Monsieur </p> -->
  <table class="content-table">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénoms</th>
        <th>Date d'Embauche</th>
        <th>Service</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $nom ?></td>
        <td><?php echo $prenom ?></td>
        <td><?php echo $dateEmbauche ?></td>
        <td><?php echo $service ?></td>
      </tr>
      <tr>
        <td>Essan</td>
        <td>Anne-Love</td>
        <td>01/01/2017</td>
        <td>Ressources Humaines</td>
      </tr>
      <tr>
        <td>DOSSOUVI</td>
        <td>Sara</td>
        <td>01/01/2017</td>
        <td>Comptabilité</td>
      </tr>
      <tr>
        <td>DOSSOUVI</td>
        <td>Ablavi Manuela</td>
        <td>01/01/2017</td>
        <td>Moyens Généraux</td>
      </tr>
    </tbody>
  </table>
  <p>Je vous remercie Monsieur <?php echo $nom ?> pour votre disponibilité.</p>
  <?php 
    $premierNombre = 5;
    $deuxiemeNombre = 25;
    echo $premierNombre  . '*' . $deuxiemeNombre .' = ' . $premierNombre * $deuxiemeNombre;

    $personne = array(
      'nom'=> 'Amafon',
      'prenom'=> 'Achoumou Freddy-Yvan',
      'dateEmbauche'=> '01/01/2017',
      'service'=> 'Contrôle et Audit Interne',
      'financement'=>array('Trésor', 'Etat')
    );
    echo $personne['financement'][0];

    $personneA = array(
      'id'      => 15,
      'prenom'  => 'Freddy',
      'nom'     => 'Amafon',
      'age'     => 20
    );

    ?>
    <h2><?php echo 'Bonjour M. ' . $personneA['prenom']?></h2>

    <?php  
      $personne  = array(
        'id'      => 1,
        'prenom'  => 'Jean-Marc',
        'nom'     => 'OGOU',
        'age'     => 38
      );

      $age = 18;

      if($age > 18){
        echo "Vous êtes majeur!";
      } elseif($age<18){
        echo "Vous êtes mineur!";
      } else{
        echo "Je ne sais finalement pas!";
      }
    ?>
    <p>Bonjour Monsieur <?=$personne['prenom']?>  <?=$personne['nom']?>! Dans 50 ans, vous aurez <?= $personne['age'] + 50 ?> ans.</p>

    <p>Vous êtes : <?= $age > 18 ? 'Majeur':'Mineur'?></p>
</body>
</html>

<?php  ?>