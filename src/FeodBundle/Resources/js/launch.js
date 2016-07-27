
launch();
function launch(){
    var url= window.location.href;
    var st='';

    if(url.indexOf("mortier") > -1){
        st="feodbundle_mortier_";
        transUnitSI(st+'poidsChargeMili',st+'uniteQMA',st+'poidsChargeCalcule','poidsChargeCalculeLabel');
        showBande(st+'nbBandesOgive','bandeOgive');
        showBande(st+'nbBandesCorps','bandeCouleur');
		showBande(st+'nBExploAlter','ExplosifAssociesAlter');
        showBande(st+'nBChimAlter','ChimiqueAssociesAlter');
        
    }
    else if(url.indexOf("artillerie") > -1){
        st="feodbundle_artillerie_";
        showBande(st+'nbBandesCorps','bandesCorps');
        showBande(st+'nbBandesOgive','bandeOgive');
        showBande(st+'nombreCeintures','largeurCeinture');
        showBande(st+'nBExploAlter','ExplosifAssociesAlter');
        showBande(st+'nBChimAlter','ChimiqueAssociesAlter');
        transUnitSI(st+'poidsChargeMili',st+'uniteQMA',st+'poidsChargeCalcule','poidsChargeCalculeLabel');
        transUnitSI(st+'calibre',st+'uniteDistance',st+'calibreReel',st+'calibreReelLabel');
        
    }
    else if(url.indexOf("mines") > -1){
        st="feodbundle_mines_";
        showBande('feodbundle_mines_bandeCouleurNombre','bandeCouleur');
        showBande('feodbundle_mines_nbrAllumeur','nomAllumeurMine');
        showBande('feodbundle_mines_nombrePuitAmorcage','nomAllumeur');
		showBande(st+'nBExploAlter','ExplosifAssociesAlter');
        showBande(st+'nBChimAlter','ChimiqueAssociesAlter');
        showDepotage(st+'sousTypeMine','depotage');
        transUnitSI(st+'poidsMine',st+'unitePoidsMine',st+'poidsMineCalcule','poidsMineCalcule');
        transUnitSI(st+'poidsChargeMili',st+'uniteQMA',st+'poidsChargeMiliCalcule','poidsChargeCalculeLabel');
    }
    
    else if(url.indexOf("minesMarines") > -1){
        st="feodbundle_minesmarines_";
        showBande('feodbundle_minesMarines_bandeCouleurNombre','bandeCouleur');
        showBande('feodbundle_minesMarines_nbrAllumeur','nomAllumeurMine');
        showBande('feodbundle_minesMarines_nombrePuitAmorcage','nomAllumeur');
		showBande(st+'nBExploAlter','ExplosifAssociesAlter');
        showBande(st+'nBChimAlter','ChimiqueAssociesAlter');
        transUnitSI(st+'poidsMine',st+'unitePoidsMine',st+'poidsMineCalcule','poidsMineCalcule');
        transUnitSI(st+'poidsChargeMili',st+'uniteQMA',st+'poidsChargeMiliCalcule','poidsChargeCalculeLabel');
    }
    
    else if(url.indexOf("missiles") > -1){
        st="feodbundle_missiles_";
        showBande(st+'nbBandesCorps','bandesCorps');
        showBande(st+'nbBandesOgive','bandeOgive');
        showBande(st+'nombreCeintures','largeurCeinture');
        showBande(st+'nBExploAlter','ExplosifAssociesAlter');
        showBande(st+'nBChimAlter','ChimiqueAssociesAlter');
        transUnitSI(st+'poidsChargeMili',st+'uniteQMA',st+'poidsChargeCalcule','poidsChargeCalculeLabel');
        transUnitSI(st+'calibre',st+'uniteDistance',st+'calibreReel',st+'calibreReelLabel');
        
    }
    else if(url.indexOf("grenades") > -1) {
        st = "feodbundle_grenades_";
		showBande('feodbundle_grenades_bandeCouleurNombre','bandeCouleur');
        showBande('feodbundle_grenades_nbrAllumeur','nomAllumeurMine');
        showBande('feodbundle_grenades_nombrePuitAmorcage','nomAllumeur');
		showBande(st+'nBExploAlter','ExplosifAssociesAlter');
        showBande(st+'nBChimAlter','ChimiqueAssociesAlter');
    }

    else if(url.indexOf("bombes") > -1) {
        st = "feodbundle_bombes_";
        transUnitSI(st+'Poids',st+'UniteMasse',st+'PoidsMunCalcule','poidsBombesCalcule');
        transUnitSI(st+'poidsChargeMili',st+'uniteQMA',st+'poidsChargeCalcule','poidsChargeCalculeLabel');
        showBande(st+'NbBandesOgive','bandeOgive');
        showBande(st+'NbBandesCorps','bandeCouleur');
        showBande(st+'NbBandesEmp','bandeCouleurEmp');
		showBande(st+'nBExploAlter','ExplosifAssociesAlter');
        showBande(st+'nBChimAlter','ChimiqueAssociesAlter');
    }

    else if(url.indexOf("mortier") > -1) {
        st = "feodbundle_mortier_";
		showBande(st+'nBExploAlter','ExplosifAssociesAlter');
        showBande(st+'nBChimAlter','ChimiqueAssociesAlter');
    }

    else if(url.indexOf("sousmunitions") > -1) {
        st = "feodbundle_sousmunitions_";
		showBande(st+'nBExploAlter','ExplosifAssociesAlter');
        showBande(st+'nBChimAlter','ChimiqueAssociesAlter');
    }

    else if(url.indexOf("roquettes") > -1) {
        st = "feodbundle_roquettes_";
		showBande(st+'nBExploAlter','ExplosifAssociesAlter');
        showBande(st+'nBChimAlter','ChimiqueAssociesAlter');
    }
    
    else if(url.indexOf("amorcage") > -1) {
        st = "feodbundle_amorcage_";
        transUnitSI(st+'poids',st+'UnitePoidsFusee',st+'PoidsMunCalcule','poidsFuseesCalcule');
        transUnitSI(st+'poidsChargeMili',st+'uniteQMA',st+'poidsChargeCalcule','poidsChargeCalculeLabel');
		showBande(st+'nBExploAlter','ExplosifAssociesAlter');
        showBande(st+'nBChimAlter','ChimiqueAssociesAlter');
    }

    volumeCalc(st+'conditionnementDimEmballageHaut',st+'conditionnementDimEmballageLarg',st+'conditionnementDimEmballageLong',st+'conditionnementVolumeEmballage');
    colorField(st+'DRAM');
    colorField(st+'DREP');
}