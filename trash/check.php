<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <title>check</title>
</head>

<body>
  <form
  <?php
  if(isset($_POST['mot0'])){ // INDICATE NUMBER OF KEYWORD
    $rep='Bienvenue_dans_cette_chasse_au_tresor_!';  // INDICATE KEYWORD
    if($_POST['mot0']==$rep){
      header("Location: enigme2.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: enigme1.html"); // INDICATE CURRENT PAGE
    }
  }
  if(isset($_POST['mot1'])){ // INDICATE NUMBER OF KEYWORD
    $rep='isoleucine';  // INDICATE KEYWORD
    if($_POST['mot1']==$rep){
      header("Location: enigme3.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: enigme2.html"); // INDICATE CURRENT PAGE
    }
  }
  if(isset($_POST['mot2'])){ // INDICATE NUMBER OF KEYWORD
    $rep='498';  // INDICATE KEYWORD
    if($_POST['mot2']==$rep){
      header("Location: enigme4.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: enigme3.html"); // INDICATE CURRENT PAGE
    }
  }
  if(isset($_POST['mot3'])){ // INDICATE NUMBER OF KEYWORD
    $rep='vous_avez_recupere_le_dernier_element';  // INDICATE KEYWORD
    if($_POST['mot3']==$rep){
      header("Location: enigme5.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: enigme4.html"); // INDICATE CURRENT PAGE
    }
  }
  if(isset($_POST['mot4'])){ // INDICATE NUMBER OF KEYWORD
    $rep='pacifique';  // INDICATE KEYWORD
    if($_POST['mot4']==$rep){
      header("Location: cle2.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: cle1.html"); // INDICATE CURRENT PAGE
    }
  }
  if(isset($_POST['mot5'])){ // INDICATE NUMBER OF KEYWORD
    $rep='forteresse';  // INDICATE KEYWORD
    if($_POST['mot5']==$rep){
      header("Location: cle3.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: cle2.html"); // INDICATE CURRENT PAGE
    }
  }
  if(isset($_POST['mot6'])){ // INDICATE NUMBER OF KEYWORD
    $rep='The_Rock';  // INDICATE KEYWORD
    if($_POST['mot6']==$rep){
      header("Location: cle4.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: cle3.html"); // INDICATE CURRENT PAGE
    }
  }
  if(isset($_POST['mot7'])){ // INDICATE NUMBER OF KEYWORD
    $rep='pélican';  // INDICATE KEYWORD
    if($_POST['mot7']==$rep){
      header("Location: cle5.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: cle4.html"); // INDICATE CURRENT PAGE
    }
  }
  if(isset($_POST['mot8'])){ // INDICATE NUMBER OF KEYWORD
    $rep='détenus';  // INDICATE KEYWORD
    if($_POST['mot8']==$rep){
      header("Location: cle6.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: cle5.html"); // INDICATE CURRENT PAGE
    }
  }
  if(isset($_POST['mot9'])){ // INDICATE NUMBER OF KEYWORD
    $rep='espagnol';  // INDICATE KEYWORD
    if($_POST['mot9']==$rep){
      header("Location: cle7.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: cle6.html"); // INDICATE CURRENT PAGE
    }
  }
  if(isset($_POST['mot10'])){ // INDICATE NUMBER OF KEYWORD
    $rep='prisons';  // INDICATE KEYWORD
    if($_POST['mot10']==$rep){
      header("Location: cle8.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: cle7.html"); // INDICATE CURRENT PAGE
    }
  }
  if(isset($_POST['mot11'])){ // INDICATE NUMBER OF KEYWORD
    $rep='1576';  // INDICATE KEYWORD
    if($_POST['mot11']==$rep){
      header("Location: cle9.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: cle8.html"); // INDICATE CURRENT PAGE
    }
  }
  if(isset($_POST['mot12'])){ // INDICATE NUMBER OF KEYWORD
    $rep='cellule';  // INDICATE KEYWORD
    if($_POST['mot12']==$rep){
      header("Location: cle10.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: cle9.html"); // INDICATE CURRENT PAGE
    }
  }
  if(isset($_POST['mot13'])){ // INDICATE NUMBER OF KEYWORD
    $rep='San_Francisco';  // INDICATE KEYWORD
    if($_POST['mot13']==$rep){
      header("Location: cle11.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: cle10.html"); // INDICATE CURRENT PAGE
    }
  }
  if(isset($_POST['mot14'])){ // INDICATE NUMBER OF KEYWORD
    $rep='évasion';  // INDICATE KEYWORD
    if($_POST['mot14']==$rep){
      header("Location: cle12.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: cle11.html"); // INDICATE CURRENT PAGE
    }
  }
  if(isset($_POST['mot15'])){ // INDICATE NUMBER OF KEYWORD
    $rep='criminel';  // INDICATE KEYWORD
    if($_POST['mot15']==$rep){
      header("Location: cle13.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: cle12.html"); // INDICATE CURRENT PAGE
    }
  }
  if(isset($_POST['mot16'])){ // INDICATE NUMBER OF KEYWORD
    $rep='1775';  // INDICATE KEYWORD
    if($_POST['mot16']==$rep){
      header("Location: cle14.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: cle13.html"); // INDICATE CURRENT PAGE
    }
  }

   if(isset($_POST['mot17'])){ // INDICATE NUMBER OF KEYWORD
    $rep='San_Francisco-Pacifique-1775-espagnol(e/s)-pélicans-The_Rock-forteresse-prison-criminels-évasion-détenus-1576-cellules';  // INDICATE KEYWORD
    if($_POST['mot17']==$rep){
      header("Location: end.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: cle14.html"); // INDICATE CURRENT PAGE
    }
  }

if(isset($_POST['mot18'])){ // INDICATE NUMBER OF KEYWORD
    $rep='Alcatraz';  // INDICATE KEYWORD
    if($_POST['mot18']==$rep){
      header("Location: alcatraz.html"); } // INDICATE NEXT PAGE
    else{
        header("Location: end.html"); // INDICATE CURRENT PAGE
    }
  }	

  ?>
  </form>
</body>
