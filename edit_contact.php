<?php include('core/init.php');?>

<?php
//New PDO
$db = new Database;

//Requete
$db->query("UPDATE `ca3` SET nom = :nom, prenom = :prenom, tel = :tel, email = :email, ville = :ville WHERE contact_id = :id ");


//Lien valeurs
$db->bind(':nom', $_POST['nom']);
$db->bind(':prenom', $_POST['prenom']);
$db->bind(':tel', $_POST['tel']);
$db->bind(':email', $_POST['email']);
$db->bind(':ville', $_POST['ville']);
$db->bind(':id', $_POST['contact_id']);

if($db->execute()){
	echo "Informations mises à jour !";
	}else{
		echo "erreur";
	}
?>