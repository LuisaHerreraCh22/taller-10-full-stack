<?php
const AGE=18;
$message="";



if(isset($_POST["name"])&& isset($_POST["age_person"])){
    

    $name=$_POST["name"];
    $agePerson= intval($_POST["age_person"]);

    if($name!=null && $agePerson!=null){
    if($agePerson>=AGE){
        $message="usted es mayor de edad";
    }
    
    else{
        $message="usted es menor de edad.";
    }
}else{
    $name="Señor Usuario";
    $message="todos los campos son obligatorios";
}
}
?>