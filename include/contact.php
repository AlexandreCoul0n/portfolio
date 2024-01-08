<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Portfolio de Coulon Alexandre</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../menu.css">

</head>

<body>
  <header>
   <?php require 'menu.html' ?>
  </header>
<script type="module" src="/composant/jquery.config.js"></script>
<script type="module" src="/composant/noty.config.js"></script>

<div id='formulaire' class='formulaire'>
    <div class="row">
        <div class="col-sm-6 ">
            <label for="nom" class="col-form-label obligatoire">Nom et prénom</label>
            <input type="text" class="form-control"
                   id="nom" name="nom"
                   required
                   pattern="^[A-Za-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ]([ '\-]?[A-Za-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ])*$"
                   maxlength='30'
                   autofocus
                   autocomplete="off"
            >
        </div>

        <div class="col-sm-6">
            <label for="email" class="col-form-label obligatoire ">Email</label>
            <input type="email" class="form-control"
                   id="email" name="email"
                   required
                   autocomplete="off"
            >
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="message" class="col-form-label obligatoire">Ma question</label>
            <textarea id='message' name="message" class="form-control"
                      minlength="10"
                      required
                      style="resize:vertical; min-height:150px"></textarea>
        </div>
    </div>

    <div class="form-check ">
        <label for="accepter" class=" ">
            <span style="font-size: small" class="obligatoire">
              En soumettant ce formulaire, j’accepte que mes informations soient utilisées exclusivement dans le cadre de ma demande.
           </span>
        </label>
        <input type="checkbox" id="accepter" class="form-check-input " required>
    </div>
    <button id="btnEnvoyer" class="btn btn btn-danger mt-2 d-block w-100">Envoyer</button>
</div>