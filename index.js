import {
    configurerFormulaire,
    write,
    donneesValides,
    read,
    viderLesChamps
} from '/include/composant/fonction';

function afficherDateDuJour() {
  var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
  var dateDuJour = new Date().toLocaleDateString('fr-FR', options);
  document.getElementById('date-container').textContent = dateDuJour;
}

// Appeler la fonction au chargement de la page
window.onload = afficherDateDuJour;

// page contact

configurerFormulaire(true);
write('nom', 'Dupont Alexandre');
write('email', 'dupont.alexandre@saint-remi.net');
write('message', 'Ce portfolio est vraiment de grande qualité, puise je réutiliser des éléments en citant l\'auteur bien sûr ?');

document.getElementById('btnEnvoyer').onclick = () => {
    if (donneesValides()) {
        envoyer();
    }
};
function envoyer() {
    // envoi des données
    $.ajax({
        url: 'https://submit-form.com/aSOJ9GWa1',
        method: 'POST',
        data: {
            nom: read('nom'),
            email: read('email'),
            message: read('message')
        },
        dataType: 'JSON',
        success: function () {
            write('msg', genererMessage('Votre message a bien été enregistré', 'vert'));
            // effacer le formulaire
            viderLesChamps();
            // décocher la case 'accepter'
            write('accepter', false);
            // redonner le focus au champ 'nom'
            document.getElementById('nom').focus();
        },
        error: reponse => console.error(reponse.responseText)
    });
}

