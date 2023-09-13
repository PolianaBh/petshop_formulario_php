<!DOCTYPE html>

<html lang = "pt-br">

      <head>
	           <meta name="author" content="Poliana Barbosa">    
               <meta charset="UTF-8">
	           <title>PET SHOP</title>
	  </head>
	  
	  

<body>
<?php

$nome = $_POST ['nome_cliente']??; // Captura no nome do cliente
$data = $_POST ['data_nascimento']??; // Captura data do nascimento
$sexo = $_POST ['sexo']??; // Captura o sexo da pessoa
$endereco = $_POST['endereco']??; // Captura o endereço da pessoa
$tipo_animal = $_POST['tipo_animal']??; // Captura o tipo de animal 
$reservas = $_POST['reservas[]']??; // Captura o serviço selecionado para reserva
$outros = $_POST['outros']??; // Captura outros tipos de serviços demandados
$enviar = $_POST['enviar']??; // Envia as informações
$reset= $_POST['reset']??; // Limpa os campos preenchidos



echo "PREZADO(A) CLIENTE, CONFIRA SUA RESERVA:<br>";
echo "___________________________________________________<br><br>";

echo 'NOME DO CLIENTE: '.'<br><br>';
echo 'DATA DE NASCIMENTO: '.'<br><br>';
echo 'SEXO: '. '<br><br>';
echo 'ENDEREÇO: '. '<br><br>';
echo 'TIPO DE ANIMAL: '.'<br><br>';
echo 'RESERVAR: '. '<br><br>';
echo 'OUTROS SERVIÇOS:'. '<br><br>';


echo "___________________________________________________";

?>
</body>
</html>