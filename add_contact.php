<?php include('core/init.php');?>

<?php
//New PDO
$db = new Database;

//Requete
$db->query("INSERT INTO `ca3` (nom, prenom, tel, email, ville ) VALUES (:nom, :prenom, :tel, :email, :ville)");

//Lien valeurs
$db->bind(':nom', $_POST['nom']);
$db->bind(':prenom', $_POST['prenom']);
$db->bind(':tel', $_POST['tel']);
$db->bind(':email', $_POST['email']);
$db->bind(':ville', $_POST['ville']);


if($db->execute()){
	echo "Nouveau contact ajouté !";
}

?>