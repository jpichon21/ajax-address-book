var contact_id = null;
/*var current_contact_id= null;*/

$(document).ready(function(){
	$('loaderImage').show();
	showContacts();

$(document).on('click', '.close-reveal-modal', function (){
	$('.reveal-modal').foundation('reveal', 'close');
});

$(document).on('change', '.email-input', function (){
	validateEmail();
});

/*toggle du contact*/
$(document).on('click', '.contact-input-label', function(){
	var contact_id = $(this).attr('id');
	var $active = $('.contact-actif');
	var $target = $('#Container'+contact_id);
	/*debug*/
	console.log($target);

	// Si la sélection est celle déjà active, on fait rien
	if ($target.is($active)) return false;

	// Si déjà une autre d'active
	if ($active.length > 0) {
		$active.removeClass('contact-actif');
	}
	$target.addClass('contact-actif');

});


	//Ajouter Contact
	$(document).on('submit', '#addContact', function(){
		//Post données
		$.post('add_contact.php', $(this).serialize())
			.done(function(data){
				console.log(data);
				$('#addModal').foundation('reveal','close');
				showContacts();
			});
			return false;
	});

	//Modifier Contact
	$(document).on('submit', '#editContact', function(){
		//Post données
		$.post('edit_contact.php', $(this).serialize())
			.done(function(data){
				console.log(data);
				$('.editModal').foundation('reveal','close');
				showContacts();
			});
			return false;
	});

	//Supprimer contact
	$(document).on('submit', '#deleteContact', function(){
		//Post données
		$.post("delete_contact.php", $(this).serialize())
		.done(function(data){
			console.log(data);
			showContacts();
		});
		return false
	});

});

function showContacts(){
	console.log('Chargement des contacts...');
	setTimeout("$('#pageContent').load('contacts.php',function(){$('loaderImage').hide();})",300);
}

/**Sélection du contact
function toggleCurrentContactInfo(){
	var $active = $('.contact-actif');
	var $target = $('#Container'+contact_id);
	console.log($target);

	// Si la sélection est celle déjà active, on fait rien
	if ($target.is($active)) return false;

	// Si déjà une autre d'active
	if ($active.length > 0) {
		$active.removeClass('contact-actif');
	}
	$target.addClass('contact-actif');
}*/



function validateEmail(email) {
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test('.email-input'.value))
  {  
  	return (true)
  }
    alert("Cette adresse email n'est pas valide !")
    return (false)
}

