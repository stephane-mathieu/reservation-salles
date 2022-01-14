<?php

namespace Models;


class User extends Model {

    //retourne les infos de lutilisateur choisis
    public function findAllInfoUser($login): array{

        //select les infos de lutilisateur choisis
        $query = $this->pdo->prepare("SELECT * FROM `utilisateurs` WHERE `login` = '$login'");
        $query->setFetchMode(\PDO::FETCH_ASSOC);
        $query->execute();
        $user=$query->fetchall();

        return $user;
    }

    
    //retourne les infos de lutilisateur choisis avec id
    public function findInfoUser($id):array{
        $requette = $this->pdo->prepare("SELECT login,password FROM `utilisateurs` WHERE `id`= '$id'");
        $requette->setFetchMode(\PDO::FETCH_ASSOC);
        $requette->execute();
        if (isset($requette))
        $recuper=$requette->fetchall(\PDO::FETCH_COLUMN);
        return $recuper;
    
    }

    // update le login de l'utilisateur
    public function updateLogin($newlog,$id){
        $update = $this->pdo->prepare("UPDATE `utilisateurs` SET `login`= '$newlog' WHERE `id` = '$id'");
        $result = $update->execute();
        return $result;
    }

    // update le password de l'utilisateur
    public function updatePassword($newpassWrd,$id):void{
        $update = $this->pdo->prepare("UPDATE `utilisateurs` SET `password`= '$newpassWrd' WHERE `id` = '$id'");
        $update->execute();
    }

    // insert le user dans la bdd
    public function insertUser($login,$password):void{
        $password = $this->pdo->prepare("INSERT INTO `utilisateurs`(`login`,`password`) VALUES ('$login','$password')");
        $password->execute();

        session_start();
        $_SESSION['flash']['sucess'] = "Your account has been create, you can now log in. ";
    }
}

?>