<?php
require_once "Bdd.php";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="Chart.js"></script>
</head>
<body>

</body>
</html>
<?php
$bdd = new Bdd('localhost', 'root', 'root');
$bdd->condb('notes');

$requete = $bdd->requete('SELECT idElv,nomElv,prenomElv FROM eleves where idClasse = 1 ');
?><table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Prenom</th>
    </tr>
    <?php
while($resultat = mysql_fetch_object($requete))
{
    echo '<tr><td>'.$resultat->idElv.'</td><td>'.$resultat->nomElv.'</td><td>'.$resultat->prenomElv.'</td></tr>';
}

//tableau notes par eleves

$requete = mysql_query('SELECT note , nbEval FROM notes where idElv = 1 ');

mysql_close();

while($resultat = mysql_fetch_object($requete))
{
    echo '<p>Nombre :'.$resultat->nbEval.' / note '.$resultat->note.'</p>';
}

?>


<script>var myLineChart = new Chart(ctx, {
        type: 'line',
        data: [20, 10],
        options: options
    });</script>

