<?php 
try{
$conn = new PDO('mysql:host=localhost; dbname=aldea', 'root', '');
} catch(PDOException $e){
   echo "Error: ". $e->getMessage();
   die();
}
?>