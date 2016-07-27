    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var $collectionHolder11 = $('div.ExplosifAssocies');

    // On ajoute un lien pour ajouter une nouvelle catégorie
    var $addExplosifAssociesLink11 = $('<a href="#" class="add_ExplosifAssocies_link btn btn-primary">Ajouter un Explosif</a>');
    $collectionHolder11.append($addExplosifAssociesLink11);

    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    $addExplosifAssociesLink11.click(function(e) {
      addExplosif($collectionHolder11);
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = $collectionHolder11.find(':input').length;
    
     // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index === 0) {
      addExplosif($container);
    } else {
      // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
      $container.children('div').each(function() {
        addDeleteLink($(this));
      });
    }

    // La fonction qui ajoute un formulaire Explosif
    function addExplosif($collectionHolder11) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte "__name__label__" qu'il contient par le label du champ
      // - le texte "__name__" qu'il contient par le numéro du champ
      var $prototype11 = $($collectionHolder11.attr('data-prototype11').replace(/__name__label__/g, 'Amorçage n°' + (index+1))
          .replace(/__name__/g, index));

      // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
      addDeleteLink($prototype11);

      // On ajoute le prototype modifié à la fin de la balise <div>
      $collectionHolder11.append($prototype11);

      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      //index++;
    }

    // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink($prototype11) {
      // Création du lien
      $deleteLink = $('<a href="#" class="btn btn-danger">Annuler</a>');

      // Ajout du lien
      $prototype11.append($deleteLink);

      // Ajout du listener sur le clic du lien
      $deleteLink.click(function(e) {
        $prototype11.remove();
        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    }