$(function(){
    $(".chosen-select").chosen();
});
function showDepotage(champSousType,classToShow){
    if (document.getElementById(champSousType).selectedIndex==2){
        $('.'+classToShow).show();
    }else{
        $('.'+classToShow).hide();
    }
}
function colorField(fieldID){
    var select = document.getElementById(fieldID);
    var choice = select.selectedIndex;  // Récupération de l'index du <option> choisi
    var selectedColor=select.options[choice].text;
    switch(selectedColor){
        case 'Rouge':
            $("#"+fieldID+"_chosen").css("border","4px solid red");
            $("#"+fieldID+"_chosen").css("border-radius","5px");
            break;
        case 'Orange':
            $("#"+fieldID+"_chosen").css("border","4px solid orange");
            $("#"+fieldID+"_chosen").css("border-radius","5px");
            break;
        case 'Jaune':
            $("#"+fieldID+"_chosen").css("border","4px solid yellow");
            $("#"+fieldID+"_chosen").css("border-radius","5px");
            break;
        case 'Vert':
            $("#"+fieldID+"_chosen").css("border","4px solid green");
            $("#"+fieldID+"_chosen").css("border-radius","5px");
            break;
    }
}

function addEvent (obj, event, fct){
	if (obj.attachEvent)
		obj.attachEvent("on" + event, fct);
	else
		obj.addEventListener(event,fct,true);
	}


function transUnitSI(champChiffreID,champUniteID,resultID,labelID) {
    var champValue = document.getElementById(champChiffreID).value;
    var select = document.getElementById(champUniteID);
    var choice = select.selectedIndex;  // Récupération de l'index du <option> choisi

    var inputUnit = select.options[choice].text; // Récupération du texte du <option> d'index "choice"
    if (champValue == null) {
        champValue = 0;
    }
    if (inputUnit == null) {
        $('#'+resultID).val(null);
    } else {
        switch (inputUnit) {
            case 'mm':
                $('#'+resultID).val(champValue);
                break;
            case 'cm':
                $('#'+resultID).val(parseFloat(champValue) * 10);
                break;
            case 'inch':
                $('#'+resultID).val(parseFloat(champValue) * 25.4);
                break;
            case 'g':
                $('#'+resultID).val(champValue);
                break;
            case 'gramme':
                $('#'+resultID).val(champValue);
                break;
            case 'kg':
                $('#'+resultID).val(parseFloat(champValue) * 1000);
                break;
            case 'kilogramme':
                $('#'+resultID).val(parseFloat(champValue) * 1000 );
                break;
            case 'lb':
                $('#'+resultID).val(parseFloat(champValue) * 453.59);
                break;
            case 'pound / livre':
                $('#'+resultID).val(parseFloat(champValue) * 453.59);
                break;
            case 'ounce / once':
                $('#'+resultID).val(parseFloat(champValue) * 28.35);
                break;
            case 'centimètre cube':
                $('#'+resultID).val(parseFloat(champValue) * 0.001);
                break;
            case 'litre':
                $('#'+resultID).val(champValue);
                break;
            case 'mètre cube':
                $('#'+resultID).val(parseFloat(champValue) * 1000);
                break;
            case 'Gallon':
                $('#'+resultID).val(parseFloat(champValue) * 4.55);
                break;
        }
        if(champValue==document.getElementById(resultID).value ||champValue==0||champValue==null ||inputUnit == 'Choisissez une option' ||inputUnit==null){
            $('#'+resultID).hide();
            $('#'+labelID).hide();
        }else{
            $('#'+resultID).show();
            $('#'+labelID).show();
        }
        $('#'+resultID).prop('disabled', true);
    }
}
function volumeCalc(hauteurID,longueurID,largeurID,volumeID){
    var hauteur=$("#"+hauteurID).val();
    var longueur=$("#"+longueurID).val();
    var largeur=$("#"+largeurID).val();
    $("#"+volumeID).val(hauteur*longueur*largeur/1000000);
    $("#"+volumeID).prop('disabled', true);

}
function showBande(nbID,bandeClass){
    var nbBande=$("#"+nbID).val();
    var bandeList=$("."+bandeClass);
    for(var i=0;i<4;i++){
        if(i<nbBande){
            $(bandeList[i]).children().css('width','100%');
            $(bandeList[i]).show();
        }else{
            $(bandeList[i]).hide();
        }
    }
}