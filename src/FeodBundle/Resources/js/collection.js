// Récupère le div qui contient la collection de tags
var collectionHolder = $('div.images');

// ajoute un lien « add a tag »
var $addImageLink = $('<a href="#" class="add_image_link btn btn-default">Ajouter une photo</a>');
var $newLinkLi = $addImageLink;

$(function(){
    // ajoute l'ancre « ajouter un tag » et li à la balise ul
    collectionHolder.append($newLinkLi);

    $addImageLink.on('click', function(e) {
        // empêche le lien de créer un « # » dans l'URL
        e.preventDefault();

        // ajoute un nouveau formulaire tag (voir le prochain bloc de code)
        addImageForm(collectionHolder, $newLinkLi);
    });
});

function addImageForm(collectionHolder, $newLinkLi) {
    // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
    var prototype = collectionHolder.attr('data-prototype');

    // Remplace '__name__' dans le HTML du prototype par un nombre basé sur
    // la longueur de la collection courante
    var newForm = prototype.replace(/__name__/g, collectionHolder.children().length);

    // Affiche le formulaire dans la page dans un li, avant le lien "ajouter un tag"
    var $newFormLi = newForm;
    $newLinkLi.before($newFormLi);
}




//Image Marquage
// Récupère le div qui contient la collection de tags
var collectionHolder2 = $('div.imagesMarquages');

// ajoute un lien « add a tag »
var $addImageMarquagesLink = $('<a href="#" class="add_imageMarquages_link btn btn-default">Ajouter une photo</a>');
var $newLinkLi2 = $addImageMarquagesLink;

$(function(){
    // ajoute l'ancre « ajouter un tag » et li à la balise ul
    collectionHolder2.append($newLinkLi2);

    $addImageMarquagesLink.on('click', function(e) {
        // empêche le lien de créer un « # » dans l'URL
        e.preventDefault();

        // ajoute un nouveau formulaire tag (voir le prochain bloc de code)
        addImageMarquagesForm(collectionHolder2, $newLinkLi2);
    });
});

function addImageMarquagesForm(collectionHolder2, $newLinkLi2) {
    // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
    var prototype2 = collectionHolder2.attr('data-prototype2');

    // Remplace '__name__' dans le HTML du prototype par un nombre basé sur
    // la longueur de la collection courante
    var newForm2 = prototype2.replace(/__name__/g, collectionHolder2.children().length);

    // Affiche le formulaire dans la page dans un li, avant le lien "ajouter un tag"
    var $newFormLi2 = newForm2;
    $newLinkLi2.before($newFormLi2);
}

//Image Fonctionnement
// Récupère le div qui contient la collection de tags
var collectionHolder3 = $('div.imagesFonctionnement');

// ajoute un lien « add a tag »
var $addImageFonctionnementLink = $('<a href="#" class="add_imageFonctionnement_link btn btn-default">Ajouter une photo</a>');
var $newLinkLi3 = $addImageFonctionnementLink;

$(function(){
    // ajoute l'ancre « ajouter un tag » et li à la balise ul
    collectionHolder3.append($newLinkLi3);

    $addImageFonctionnementLink.on('click', function(e) {
        // empêche le lien de créer un « # » dans l'URL
        e.preventDefault();

        // ajoute un nouveau formulaire tag (voir le prochain bloc de code)
        addImageFonctionnementForm(collectionHolder3, $newLinkLi3);
    });
});

function addImageFonctionnementForm(collectionHolder3, $newLinkLi3) {
    // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
    var prototype3 = collectionHolder3.attr('data-prototype3');

    // Remplace '__name__' dans le HTML du prototype par un nombre basé sur
    // la longueur de la collection courante
    var newForm3 = prototype3.replace(/__name__/g, collectionHolder3.children().length);

    // Affiche le formulaire dans la page dans un li, avant le lien "ajouter un tag"
    var $newFormLi3 = newForm3;
    $newLinkLi3.before($newFormLi3);
}

//Image Conditionnement
// Récupère le div qui contient la collection de tags
var collectionHolder4 = $('div.imagesConditionnement');

// ajoute un lien « add a tag »
var $addImageConditionnementLink = $('<a href="#" class="add_imageConditionnement_link btn btn-default">Ajouter une photo</a>');
var $newLinkLi4 = $addImageConditionnementLink;

$(function(){
    // ajoute l'ancre « ajouter un tag » et li à la balise ul
    collectionHolder4.append($newLinkLi4);

    $addImageConditionnementLink.on('click', function(e) {
        // empêche le lien de créer un « # » dans l'URL
        e.preventDefault();

        // ajoute un nouveau formulaire tag (voir le prochain bloc de code)
        addImageConditionnementForm(collectionHolder4, $newLinkLi4);
    });
});

function addImageConditionnementForm(collectionHolder4, $newLinkLi4) {
    // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
    var prototype4 = collectionHolder4.attr('data-prototype4');

    // Remplace '__name__' dans le HTML du prototype par un nombre basé sur
    // la longueur de la collection courante
    var newForm4 = prototype4.replace(/__name__/g, collectionHolder4.children().length);

    // Affiche le formulaire dans la page dans un li, avant le lien "ajouter un tag"
    var $newFormLi4 = newForm4;
    $newLinkLi4.before($newFormLi4);
}

//Image Vecteur
// Récupère le div qui contient la collection de tags
var collectionHolder5 = $('div.imagesVecteur');

// ajoute un lien « add a tag »
var $addImageVecteurLink = $('<a href="#" class="add_imageVecteur_link btn btn-default">Ajouter une photo</a>');
var $newLinkLi5 = $addImageVecteurLink;

$(function(){
    // ajoute l'ancre « ajouter un tag » et li à la balise ul
    collectionHolder5.append($newLinkLi5);

    $addImageVecteurLink.on('click', function(e) {
        // empêche le lien de créer un « # » dans l'URL
        e.preventDefault();

        // ajoute un nouveau formulaire tag (voir le prochain bloc de code)
        addImageVecteurForm(collectionHolder5, $newLinkLi5);
    });
});


function addImageVecteurForm(collectionHolder5, $newLinkLi5) {
    // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
    var prototype5 = collectionHolder5.attr('data-prototype5');

    // Remplace '__name__' dans le HTML du prototype par un nombre basé sur
    // la longueur de la collection courante
    var newForm5 = prototype5.replace(/__name__/g, collectionHolder5.children().length);

    // Affiche le formulaire dans la page dans un li, avant le lien "ajouter un tag"
    var $newFormLi5 = newForm5;
    $newLinkLi5.before($newFormLi5);
}

//Image Traitement
// Récupère le div qui contient la collection de tags
var collectionHolder6 = $('div.imagesTraitement');

// ajoute un lien « add a tag »
var $addImageTraitementLink = $('<a href="#" class="add_imageTraitement_link btn btn-default">Ajouter une photo</a>');
var $newLinkLi6 = $addImageTraitementLink;

$(function(){
    // ajoute l'ancre « ajouter un tag » et li à la balise ul
    collectionHolder6.append($newLinkLi6);

    $addImageTraitementLink.on('click', function(e) {
        // empêche le lien de créer un « # » dans l'URL
        e.preventDefault();

        // ajoute un nouveau formulaire tag (voir le prochain bloc de code)
        addImageTraitementForm(collectionHolder6, $newLinkLi6);
    });
});

function addImageTraitementForm(collectionHolder6, $newLinkLi6) {
    // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
    var prototype6 = collectionHolder6.attr('data-prototype6');

    // Remplace '__name__' dans le HTML du prototype par un nombre basé sur
    // la longueur de la collection courante
    var newForm6 = prototype6.replace(/__name__/g, collectionHolder6.children().length);

    // Affiche le formulaire dans la page dans un li, avant le lien "ajouter un tag"
    var $newFormLi6 = newForm6;
    $newLinkLi6.before($newFormLi6);
}


//Image Chargement
// Récupère le div qui contient la collection de tags
var collectionHolder7 = $('div.imagesChargement');

// ajoute un lien « add a tag »
var $addImageChargementLink = $('<a href="#" class="add_imageChargement_link btn btn-default">Ajouter une photo</a>');
var $newLinkLi7 = $addImageChargementLink;

$(function(){
    // ajoute l'ancre « ajouter un tag » et li à la balise ul
    collectionHolder7.append($newLinkLi7);

    $addImageChargementLink.on('click', function(e) {
        // empêche le lien de créer un « # » dans l'URL
        e.preventDefault();

        // ajoute un nouveau formulaire tag (voir le prochain bloc de code)
        addImageChargementForm(collectionHolder7, $newLinkLi7);
    });
});

function addImageChargementForm(collectionHolder7, $newLinkLi7) {
    // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
    var prototype7 = collectionHolder7.attr('data-prototype7');

    // Remplace '__name__' dans le HTML du prototype par un nombre basé sur
    // la longueur de la collection courante
    var newForm7 = prototype7.replace(/__name__/g, collectionHolder7.children().length);

    // Affiche le formulaire dans la page dans un li, avant le lien "ajouter un tag"
    var $newFormLi7 = newForm7;
    $newLinkLi7.before($newFormLi7);
}

//Image Dimensions
// Récupère le div qui contient la collection de tags
var collectionHolder8 = $('div.imagesDimensions');

// ajoute un lien « add a tag »
var $addImageDimensionsLink = $('<a href="#" class="add_imageDimensions_link btn btn-default">Ajouter une photo</a>');
var $newLinkLi8 = $addImageDimensionsLink;

$(function(){
    // ajoute l'ancre « ajouter un tag » et li à la balise ul
    collectionHolder8.append($newLinkLi8);

    $addImageDimensionsLink.on('click', function(e) {
        // empêche le lien de créer un « # » dans l'URL
        e.preventDefault();

        // ajoute un nouveau formulaire tag (voir le prochain bloc de code)
        addImageDimensionsForm(collectionHolder8, $newLinkLi8);
    });
});

function addImageDimensionsForm(collectionHolder8, $newLinkLi8) {
    // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
    var prototype8 = collectionHolder8.attr('data-prototype8');

    // Remplace '__name__' dans le HTML du prototype par un nombre basé sur
    // la longueur de la collection courante
    var newForm8 = prototype8.replace(/__name__/g, collectionHolder8.children().length);

    // Affiche le formulaire dans la page dans un li, avant le lien "ajouter un tag"
    var $newFormLi8 = newForm8;
    $newLinkLi8.before($newFormLi8);
}

//Image Fusees
// Récupère le div qui contient la collection de tags
var collectionHolder9 = $('div.imagesFusees');

// ajoute un lien « add a tag »
var $addImageFuseesLink = $('<a href="#" class="add_imageFusees_link btn btn-default">Ajouter une photo</a>');
var $newLinkLi9 = $addImageFuseesLink;

$(function(){
    // ajoute l'ancre « ajouter un tag » et li à la balise ul
    collectionHolder9.append($newLinkLi9);

    $addImageFuseesLink.on('click', function(e) {
        // empêche le lien de créer un « # » dans l'URL
        e.preventDefault();

        // ajoute un nouveau formulaire tag (voir le prochain bloc de code)
        addImageFuseesForm(collectionHolder9, $newLinkLi9);
    });
});

function addImageFuseesForm(collectionHolder9, $newLinkLi9) {
    // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
    var prototype9 = collectionHolder9.attr('data-prototype9');

    // Remplace '__name__' dans le HTML du prototype par un nombre basé sur
    // la longueur de la collection courante
    var newForm9 = prototype9.replace(/__name__/g, collectionHolder9.children().length);

    // Affiche le formulaire dans la page dans un li, avant le lien "ajouter un tag"
    var $newFormLi9 = newForm9;
    $newLinkLi9.before($newFormLi9);
}


//FILE
// Récupère le div qui contient la collection de tags
var collectionHolder10 = $('div.File');

// ajoute un lien « add a tag »
var $addFileLink = $('<a href="#" class="add_File_link btn btn-default">Ajouter un Document</a>');
var $newLinkLi10 = $addFileLink;

$(function(){
    // ajoute l'ancre « ajouter un tag » et li à la balise ul
    collectionHolder10.append($newLinkLi10);

    $addFileLink.on('click', function(e) {
        // empêche le lien de créer un « # » dans l'URL
        e.preventDefault();

        // ajoute un nouveau formulaire tag (voir le prochain bloc de code)
        addFileForm(collectionHolder10, $newLinkLi10);
    });
});

function addFileForm(collectionHolder10, $newLinkLi10) {
    // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
    var prototype10 = collectionHolder10.attr('data-prototype10');

    // Remplace '__name__' dans le HTML du prototype par un nombre basé sur
    // la longueur de la collection courante
    var newForm10 = prototype10.replace(/__name__/g, collectionHolder10.children().length);

    // Affiche le formulaire dans la page dans un li, avant le lien "ajouter un tag"
    var $newFormLi10 = newForm10;
    $newLinkLi10.before($newFormLi10);
}

//Image Explosif
// Récupère le div qui contient la collection de tags
var collectionHolder11 = $('div.imagesExplosif');

// ajoute un lien « add a tag »
var $addImageExplosifLink = $('<a href="#" class="add_imageExplosif_link btn btn-default">Ajouter une photo</a>');
var $newLinkLi11 = $addImageExplosifLink;

$(function(){
    // ajoute l'ancre « ajouter un tag » et li à la balise ul
    collectionHolder11.append($newLinkLi11);

    $addImageExplosifLink.on('click', function(e) {
        // empêche le lien de créer un « # » dans l'URL
        e.preventDefault();

        // ajoute un nouveau formulaire tag (voir le prochain bloc de code)
        addImageExplosifForm(collectionHolder11, $newLinkLi11);
    });
});

function addImageExplosifForm(collectionHolder11, $newLinkLi11) {
    // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
    var prototype11 = collectionHolder11.attr('data-prototype11');

    // Remplace '__name__' dans le HTML du prototype par un nombre basé sur
    // la longueur de la collection courante
    var newForm11 = prototype11.replace(/__name__/g, collectionHolder11.children().length);

    // Affiche le formulaire dans la page dans un li, avant le lien "ajouter un tag"
    var $newFormLi11 = newForm11;
    $newLinkLi11.before($newFormLi11);
}


//Image Chimique
// Récupère le div qui contient la collection de tags
var collectionHolder14 = $('div.imagesChimique');

// ajoute un lien « add a tag »
var $addImageChimiqueLink = $('<a href="#" class="add_imageChimique_link btn btn-default">Ajouter une photo</a>');
var $newLinkLi14 = $addImageChimiqueLink;

$(function(){
    // ajoute l'ancre « ajouter un tag » et li à la balise ul
    collectionHolder14.append($newLinkLi14);

    $addImageChimiqueLink.on('click', function(e) {
        // empêche le lien de créer un « # » dans l'URL
        e.preventDefault();

        // ajoute un nouveau formulaire tag (voir le prochain bloc de code)
        addImageChimiqueForm(collectionHolder14, $newLinkLi14);
    });
});

function addImageChimiqueForm(collectionHolder14, $newLinkLi14) {
    // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
    var prototype14 = collectionHolder14.attr('data-prototype14');

    // Remplace '__name__' dans le HTML du prototype par un nombre basé sur
    // la longueur de la collection courante
    var newForm14 = prototype14.replace(/__name__/g, collectionHolder14.children().length);

    // Affiche le formulaire dans la page dans un li, avant le lien "ajouter un tag"
    var $newFormLi14 = newForm14;
    $newLinkLi14.before($newFormLi14);
}

//VIDEOS
// Récupère le div qui contient la collection de tags
var collectionHolder22 = $('div.Videos');

// ajoute un lien « add a tag »
var $addVideosLink = $('<a href="#" class="add_Videos_link btn btn-default">Ajouter une Vidéo</a>');
var $newLinkLi22 = $addVideosLink;

$(function(){
    // ajoute l'ancre « ajouter un tag » et li à la balise ul
    collectionHolder22.append($newLinkLi22);

    $addVideosLink.on('click', function(e) {
        // empêche le lien de créer un « # » dans l'URL
        e.preventDefault();

        // ajoute un nouveau formulaire tag (voir le prochain bloc de code)
        addVideosForm(collectionHolder22, $newLinkLi22);
    });
});

function addVideosForm(collectionHolder22, $newLinkLi22) {
    // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
    var prototype22 = collectionHolder22.attr('data-prototype22');

    // Remplace '__name__' dans le HTML du prototype par un nombre basé sur
    // la longueur de la collection courante
    var newForm22 = prototype22.replace(/__name__/g, collectionHolder22.children().length);

    // Affiche le formulaire dans la page dans un li, avant le lien "ajouter un tag"
    var $newFormLi22 = newForm22;
    $newLinkLi22.before($newFormLi22);
}