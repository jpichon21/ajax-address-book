<?php include('core/init.php');?>

<?php
//New PDO
$db = new Database;

//Requete
$db->query(" DELETE FROM `ca3` WHERE contact_id = :contact_id");

//Lien valeurs
$db->bind(':contact_id', $_POST['contact_id']);

if($db->execute()){
	echo "Contact supprimé";
}

?>