<?php

$result=0;
$message="";

if(isset($_POST["first_number"])&& isset($_POST["second_number"])&& isset($_POST["operation_type"])){



    $firstNumber= intval($_POST["first_number"]);
    $secondNumber=intval($_POST["second_number"]);
    $operationType=$_POST["operation_type"];

    if($firstNumber!=null && $secondNumber!=null){

    switch($operationType){
        case"sumar":
            $result=  $firstNumber+$secondNumber;
            break;
        case"restar":
            $result= $firstNumber-$secondNumber;
            break;    
        case"multiplicar":
            $result=  $firstNumber*$secondNumber;
            break;
        case"dividir":
            $result= $firstNumber/$secondNumber;
            break;   
        default:
            $message="Selecione una operacion valida";        

    }
    
}else{
    $message="Los dos números son obligatorios";
}

}

?>