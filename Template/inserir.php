<?php 

  $cx1=$_POST['palavra'];
  $cx2=$_POST['significado'];
  $cx3=$_POST['exemplo'];
  $cx4=$_POST['classe'];
  try {
      $conecta = new PDO('mysql:host=localhost;dbname=fastDicionary', 'root', '');
      $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      $conecta->exec("set names utf8");  
      $conecta->exec("INSERT INTO dicionario(palavra,significado,exemplo,classegramatical)
       VALUES('".$cx1."','".$cx2."','".$cx3."','".$cx4."')");
        echo "Dados gravados com sucesso";
    }
    catch(PDOException $e)
    {
      echo 'ERRO: ' . $e->getMessage();
    }

   ?>
