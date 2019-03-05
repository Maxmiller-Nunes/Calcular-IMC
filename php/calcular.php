<?php

if (isset($_POST['altura']) && !empty($_POST['altura']) && isset($_POST['peso']) && !empty($_POST['peso'])) {
  
  $altura = $_POST['altura'];
  $peso = $_POST['peso'];

  $altura = str_replace(',', '.', $altura);
  $peso = str_replace(',', '.', $peso);

  $imc = $peso / ($altura*$altura);

  if($imc < 18.5){
    echo "Seu IMC é: ".$imc." e você esta abaixo do peso.";
  }elseif($imc < 24.9){
    echo "Seu IMC é: ".$imc." e você esta com peso normal.";
  }elseif($imc < 29.9){
    echo "Seu IMC é: ".$imc." e você esta sobrepeso.";
  }elseif($imc < 34.9){
    echo "Seu IMC é: ".$imc." e você esta com obesidade grau I.";
  }elseif($imc < 39.9){
    echo "Seu IMC é: ".$imc." e você esta com obesidade grau II.";
  }elseif($imc > 40){
    echo "Seu IMC é: ".$imc." e você esta com obesidade grau III.";
  }

}else{
  echo "Por favor preencha todos os campos!";
}

//echo json_encode($imc);
?>