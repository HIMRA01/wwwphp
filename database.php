<?php
function dbConnexion (){
$connexiondb = null;
try {
       $connexionDb =  new PDO ("mysql:host=db.cours.com;dbname=cours_db", "admin","admin");


}catch(PDOException $e){
   $connexionDb =$e;
}
return $connexionDb;
}