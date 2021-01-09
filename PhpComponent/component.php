<?php

function component($Ref,
$desc,
$Nom_Donateur,
$Num_tel,
$Adresse,
$date_Reception,
$date_Acceptation,
$approuve_par){
  if($approuve_par!=null){
    $element = "

    <tr>
      <th scope=\"row\">$Ref</th>
      <td>$desc</td>
      <td>$Nom_Donateur</td>
      <td>$Num_tel</td>
      <td>$Adresse</td>
      <td>$date_Reception</td>
      <td>$date_Acceptation</td>
      <td>$approuve_par</td>
    </tr>
    ";
  }else{
    $element = "
    <tr class=\"table-danger\">
      <th scope=\"row\">$Ref</th>
      <td>$desc</td>
      <td>$Nom_Donateur</td>
      <td>$Num_tel</td>
      <td>$Adresse</td>
      <td>$date_Reception</td>
      <td>$date_Acceptation</td>
      <td>$approuve_par</td>
    </tr>
    ";
  }
    echo $element;
}


function component2($Ref,
$desc,
$Nom_Donateur,
$Num_tel,
$Adresse,
$date_Reception){
    $element = "
    <tr>
      <th scope=\"row\">$Ref</th>
      <td>$desc</td>
      <td>$Nom_Donateur</td>
      <td>$Num_tel</td>
      <td>$Adresse</td>
      <td>$date_Reception</td>
      <td><button class=\"btn btn-warning\">Approuver</button></td>
    </tr>
    ";
    echo $element;
}
?>
