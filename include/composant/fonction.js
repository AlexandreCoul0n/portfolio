// ------------------------------------------------------------
// fonctions de contrôle sur les données saisies
// ------------------------------------------------------------

/**
 * Création d'un style 'messageErreur' et Ajout après chaque balise input d'une balise div utilisant ce style
 * Cette balise div sera utilisée pour afficher le message d'erreur
 * @param {boolean} onInput false par défaut, si true le message d'erreur est affiché après chaque caractère saisi
 */
export function configurerFormulaire(onInput = false) {
    // ajout d'un style dans la section head du document
    const style = document.createElement('style');
    style.innerHTML = '.messageErreur { color: red; margin-bottom: 15px; font-size: 0.75rem; font-style: italic; padding: 0; margin: 0; }';
    document.head.appendChild(style);
    // ajout d'ue balise div après chaque balise input ou textarea
    for (const input of document.querySelectorAll('input, textarea, select')) {
        const div = document.createElement('div');
        div.classList.add('messageErreur');
        input.insertAdjacentElement('afterend', div);
        input.addEventListener('input', () => {
            input.nextElementSibling.innerText = '';
        });
        // Ajout d'un écouteur d'événement sur l'événement input pour signaler l'erreur après chaque caractère saisi
        if (onInput) {
            input.addEventListener('input', () => {
                input.nextElementSibling.innerText = input.validationMessage;
            });
        }
    }
}

/**
 * Ecrit la valeur dans la balise identifiée par id
 * @param {string} inputId attribut id de la balise input
 * @param {string| boolean| number} valeur valeur à écrire dans la balise
 * @param {string | null} format - Le format de la valeur (facultatif) '€' ou '%'.
 */
export function write(inputId, valeur, format = null) {
    const input = document.getElementById(inputId);
    if (input) {
        // s'agit-il d'une balise input ?
        if (input instanceof HTMLInputElement) {
            const type = input.type.toLowerCase();
            if (type === 'checkbox' || type === 'radio') {
                input.checked = valeur;
            } else {
                if (format) {
                    if (format === '€') {
                        input.value = valeur.toLocaleString('fr-FR', {
                            style: 'currency',
                            currency: 'EUR'
                        }).replace(',', '.');
                    } else if (format === '%') {
                        input.value = valeur.toLocaleString('fr-FR', {style: 'percent'});
                    } else {
                        input.value = valeur;
                    }
                } else {
                    input.value = valeur;
                }
            }
        } else if (input instanceof HTMLTextAreaElement) {
            input.value = valeur;
        } else if (input instanceof HTMLSelectElement) {
            input.value = valeur;
        } else if (input.tagName === 'DIV') {
            const p = document.createElement('p');
            p.innerHTML = valeur;
            input.appendChild(p);
        } else if (input.tagName === 'SPAN') {
            input.innerHTML = valeur;
        } else if (input.tagName === 'IMG') {
            input.src = valeur;
        } else {
            input.innerText = valeur;
        }
    } else {
        console.error(`L'élément ${inputId} n'existe pas`);
    }
}

/**
 * Contrôle tous les champs input et textarea et select
 * chaque champ xxx doit être suivi d'une balise <div class='messageErreur'></div> pour afficher le message d'erreur : méthode configurerFormulaire
 * @returns {boolean} true si tous les champs respectent les contraintes définies dans leurs attributs pattern, minlength, maxlength, required, min, max ...
 */
export function donneesValides(zone = document) {
    let valide = true;

    // Sélectionner tous les éléments input, select et textarea qui ne sont pas désactivés
    const lesInputs = zone.querySelectorAll('input:not([disabled]), select:not([disabled]), textarea:not([disabled])');

    // Parcourir et traiter les éléments sélectionnés
    lesInputs.forEach(x => {
        afficherErreurSaisie(x.id);
        if (!x.checkValidity()) {
            valide = false;
        }
    });
    return valide;
}

// ------------------------------------------------------------
// fonctions sur les champs de saisie
// ------------------------------------------------------------

/**
 * Retourne la valeur d'un champ de saisie
 * @param {string} inputId attribut id de la balise input
 * @returns {string | boolean | number | null} valeur saisie
 */
export function read(inputId) {
    let valeur = '';
    const input = document.getElementById(inputId);

    if (input) {
        if (input instanceof HTMLInputElement) {
            const type = input.type.toLowerCase();
            if (type === 'checkbox' || type === 'radio') {
                valeur = input.checked ? 1 : 0;
            } else if (type === 'number') {
                const value = input.value;
                if (Number.isInteger(value)) {
                    valeur = parseInt(value);
                } else {
                    valeur = parseFloat(value);
                }
            } else if (type === 'text') {
                const value = input.value;
                if (Number.isInteger(value)) {
                    valeur = parseInt(value);
                } else {
                    valeur = parseFloat(value);
                }
                if (Number.isNaN(valeur)) {
                    valeur = value;
                }
                // pour tous les autres types, on retourne la valeur
            } else {
                valeur = input.value;
            }
        } else if (input instanceof HTMLTextAreaElement) {
            valeur = input.value;
        } else if (input instanceof HTMLSelectElement) {
            const value = input.value;
            if (Number.isInteger(value)) {
                valeur = parseInt(value);
            } else {
                valeur = parseFloat(value);
            }
            if (Number.isNaN(valeur)) {
                valeur = value;
            }
        }
    } else {
        console.error(`L'élément ${inputId} n'existe pas`);
    }
    return valeur;
}

/**
 * Vide les champs de formulaire (input et textarea) dans une zone spécifiée.
 *
 * @param {Node} [zone=document] - La zone dans laquelle les champs doivent être vidés.
 * Par défaut, il s'agit du document entier.
 */
export function viderLesChamps(zone = document) {
    for (const input of zone.querySelectorAll('input, textarea')) {
        input.value = '';
    }
}

/**
 * Protége tous les champs de type input, textarea, select button dans une zone spécifiée.
 *
 * @param {Node} [zone=document] - La zone dans laquelle les champs doivent être protégés.
 * Par défaut, il s'agit du document entier.
 */
export function protegerLesChamps(zone = document) {
    for (const input of zone.querySelectorAll('input, textarea, select, button')) {
        input.disabled = true;
    }
}