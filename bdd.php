<?php
$servername = "localhost";
$username = "";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=json", $username, $password);
  // set the PDO error mode to exception
    
  echo "tu es connecter à la base de donnée ";
} catch(PDOException $e) {
  echo "tu n'est pas connecter: " . $e->getMessage();
}


?>


<?php


$sql = "CREATE TABLE rencontre (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    link VARCHAR(30) NOT NULL,
    prenom VARCHAR(30) NOT NULL,
    ex VARCHAR(30) NOT NULL,
    types VARCHAR(30) NOT NULL,
    nom VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    

$conn->exec($sql);



try{
    $sql = "CREATE TABLE rencontre (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        link VARCHAR(30) NOT NULL,
        prenom VARCHAR(30) NOT NULL,
        ex VARCHAR(30) NOT NULL,
        types VARCHAR(30) NOT NULL,
        nom VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
 echo  "<br><br>TA REQUETE EST BONNE ";
}

catch(PDOException $e){

    echo "pas bon: " . $e->getMessage();

}








?>



