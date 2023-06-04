<?php

  $dbHost = 'Localhost';
  $dbUsername = 'root';
  $dbPassoword = '';
  $dbName = 'formulario-joao';

  $conexao = new mysqli($dbHost,$dbUsername,$dbPassoword,$dbName);

  /*if($conexao->connect_errno){

    echo "Erro";

  } else{

    echo "Conexão efetuada com sucesso";

  }
*/
  ?>