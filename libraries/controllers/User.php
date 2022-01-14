<?php

namespace Controllers;


class User extends Controllers{

    protected $modelName = \Models\User::class;

    public function index() {
        $pageTitle = "Accueil";

        \Renderer::render('users/index',compact('pageTitle'));
    }

    public function insert(){
        // insert un user

            if(!empty($_POST)){
                // Erreurs possibles
                $errors = array();
                $login = $_POST['login'];
                $password = $_POST['password'];
                if(empty($_POST['login'])){
                    $errors['login'] = "Your login is not valid";
                } else {
                
                    //recupere les informations de lutilisateur choisis pour verifier si il ya pas deja le meme login
                    $loginCheckResult= $this->model->findAllInfoUser($login);

                    if(count($loginCheckResult) != 0){
                    $errors['login'] = "Login not available";
                    echo  $errors['login'];
                    }
                }

                if(empty($_POST['password'])){
                    $errors['password'] = "You must enter a valid password";
                    echo $errors['password'];
                }

                if($_POST['password'] != $_POST['password_confirm']){
                    $errors['password_confirm'] = "Your password doesn't match";
                    echo $errors['password_confirm'];
                }

                if (empty($errors)){
                    $password = password_hash($password, PASSWORD_BCRYPT);
                    // insert les donner dans la bdd
                    $addUser= $this->model->insertUser($login,$password);

                    session_start();
                    $_SESSION['flash']['sucess'] = "Your account has been create, you can now log in. ";
                    \Http::redirect("connexion.php");
                }
        }

        $pageTitle = "inscription";
        \Renderer::render('users/inscription',compact('pageTitle'));
    }

    public function login(){

        if(!empty($_POST) && !empty($_POST['login']) && !empty($_POST['password'])){

            @$login = $_POST['login'];
            @$password = $_POST['password'];
            @$errors = array();

            $user= $this->model->findAllInfoUser($login);

            if(password_verify($password, $user['0']['password'])){
                    session_start();
                    $_SESSION['user'] = $user['0']['login'];
                    $_SESSION['userPass'] = $user['0']['password'];
                    $_SESSION['userId'] = $user['0']['id'];
                    $_SESSION['flash']['error'] = "You are logged now. ";
                    \Http::redirect("index.php");
            
            }
            else {
                    $errors['connect'] = "Incorrect login or password";
                    echo $errors['connect'];
            }
        }

        $pageTitle = "connexion";

        \Renderer::render('users/connexion',compact('pageTitle'));

    }

    public function update(){
            // update le login
            //
            
            session_start();
            //recup de la session conn
            @$sessLogin = $_SESSION['user'];
            @$sessPasswrd = $_SESSION['userPass'];
            @$id = $_SESSION['userId'];
            @$newlog = $_POST['login'];

            @$password =  $_POST['password'];
            $hashed_pwrd = password_hash($password, PASSWORD_DEFAULT);
            $newpassWrd = $hashed_pwrd;


            if (isset($_SESSION['user'])) {
                // recup login et password

                $recuper = $this->model->findInfoUser($id);
                //pareille mais pour password hash
                $recupsw = $this->model->findInfoUser($id);
                
            }

            $requete_confetch= $this->model->findAllInfoUser($newlog);

                if(isset($_POST['validerlog']))
                {
                    // peut modifier soit le login ou password  ou les deux en meme temps
                    if(!empty($_POST['login'])){

                        if(count($requete_confetch) == 0){
                            $newlog = $_POST['login'];
                            // update le login
                            $update = $this->model->updateLogin($newlog,$id);

                            if(isset($update)) {
                                // update password
                                $recuper = $this->model->findInfoUser($id);
                            }
                        } elseif(count($requete_confetch) != 0){
                            echo "login alredy used";
                        }
                    }

                    if(!empty($_POST['password'])){
                        $update2 = $this->model->updatePassword($newpassWrd,$id);
                    }
                }

                $pageTitle = "profil";
                \Renderer::render('users/profil', compact('pageTitle','recuper'));
    }


}

?>