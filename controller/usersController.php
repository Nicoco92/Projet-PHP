<?php
include_once('model/usersModel.php');

class UsersController
{
    private $model;
    public function __construct()
    {
        $this->model = new UsersModel;
    }

    /**
     * INSCRIPTION
     */
    public function getFormInscription()
    {
        include_once('view/inscription.php');
    }


    public function setUser()
    {
        if (isset($_POST['nom'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $mdp = password_hash($_POST['mdp'],PASSWORD_DEFAULT);

            if ($this->model->setUser($nom, $prenom, $tel, $email, $mdp)) {
                echo "Inscription OK";
            } else {
                echo "Inscription KO";
                $this->getFormInscription();
            }


        } else {
            $this->getFormInscription();
        }


    }
    /**
     * Authentification
     */
    public function getFormAuthentification()
    {
        include_once('view/authentification.php');
    }
    public function getAuthentification()
    {
        if (isset($_POST['email'])) {
           
            $email = $_POST['email'];
           
            $user=$this->model->getUserByEmail($email);
            $mdp=password_verify($_POST['mdp'],$user['mdp']);

            if ($mdp) {
                $_SESSION['nom']=$user['nom'];
                $_SESSION['prenom']=$user['prenom'];
                echo "Connection OK";
            } else {
                echo "Connection KO";
                $this->getFormAuthentification();
            }


        } else {
            $this->getFormAuthentification();
        }


    }


}