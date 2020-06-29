<?php 


  try {
      $conecta = new PDO('mysql:host=localhost;dbname=fastdicionary', 'root', '');
     
    }
    catch(PDOException $e)
    {
      echo 'ERRO: ' . $e->getMessage();
    }

   
  

?>