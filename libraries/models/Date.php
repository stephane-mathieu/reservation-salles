<?php
namespace Models;

class Date extends Model {

    public function insertDate($title,$description,$date1,$newtime,$idLogin){
        if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['date-start'])){
            $password = $this->pdo->prepare("INSERT INTO `reservations`( `titre`, `description`, `debut`, `fin`, `id_utilisateur`) VALUES('$title','$description','$date1','$newtime','$idLogin')");
            $password->execute();
        }
        else{
            echo "veuillez remplire ces champs vide";
        }
    }
    public function findDate($day){
        $query = $this->pdo->prepare("SELECT * from reservations WHERE debut = '".$day."'");
        $query->setFetchMode(\PDO::FETCH_ASSOC);
        $query->execute();
        $date=$query->fetchall();

        return $date;

    }

    public function findInfo($id){

        $query = $this->pdo->prepare("SELECT utilisateurs.login, reservations.titre, reservations.debut, reservations.fin, reservations.id  FROM `utilisateurs` INNER JOIN reservations ON id_utilisateur = utilisateurs.id WHERE $id = reservations.id");
        $query->setFetchMode(\PDO::FETCH_ASSOC);
        $query->execute();
        $date=$query->fetchall();
        return $date;
    }

    public function FindAll(){
        $query = $this->pdo->prepare("SELECT utilisateurs.login, reservations.titre, reservations.debut, reservations.fin, reservations.id  FROM `utilisateurs` INNER JOIN reservations ON id_utilisateur=utilisateurs.id");
        $query->setFetchMode(\PDO::FETCH_ASSOC);
        $query->execute();
        $date=$query->fetchall();
        return $date;
    }

}


?>