<?php

 define("DSN","mysql:host=localhost;dbname=todo_list;");
 define("USERNAME",'root');
 define("PASSWORD",'');
 try {
    $connection=new PDO(DSN,USERNAME,PASSWORD);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 } catch (PDOException $ex) {
     die($ex->getMessage());
 }
 



