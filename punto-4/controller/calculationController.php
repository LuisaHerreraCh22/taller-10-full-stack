<?php
const AGE = 18;
$message="";
$today = new DateTime();



if(isset($_POST["name"])&& isset($_POST["date_birth"])){
    

    $name=$_POST["name"];
    $birthDate= new DateTime($_POST["date_birth"]);
    $newDate= $birthDate -> diff($today);

    $message2= " su edad actual es de: ". $newDate->y." años ". $newDate->m." meses ". $newDate->d." dias ";

    if($newDate->y>=AGE){
        $message="usted es mayor de edad,";
    }
    
    else{
        $message="usted es menor de edad,";
    }

}
?>