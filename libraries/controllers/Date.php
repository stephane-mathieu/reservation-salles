<?php
namespace Controllers;

class Date extends Controllers {
    protected $modelName = \Models\Date::class;

    public function inserReservationForm(){

        session_start();
        $idLogin = $_SESSION['userId'];
        @$title = $_POST['title'];
        @$description = $_POST['description'];
        @$date1 = $_POST['date-start'];



        $currenttime = $date1;
        $newtime = strtotime($currenttime . "+1hours");
        $newtime = date('Y-m-d H:i', $newtime);

        $date = $this->model->findDate($date1);
        $requette = count($date);

        $getdate = strtotime($date1);
        $hoursDate = getdate($getdate);

        $check = true;
        
        if(isset($_POST['submit'])){
      
            if(empty($title) && empty($description)){
                $check = false;
                echo "veuillez remplire les champs vide"."<br>";
            }
            if ($requette == 1) {
                $check = false;
                echo "Ce créneau n'est pas disponible. Choisis un autre"."<br>";
            }
            if($hoursDate['hours'] < 8 || $hoursDate['hours'] > 19){
                $check = false;
               echo "choisis une heure entre 8h et 19h"."<br>";
            }
            if($hoursDate['wday'] == 6 || $hoursDate['wday'] == 7) {
                $check = false;
                echo "vous ne pouvez pas choisir le weekend"."<br>";
            }
            if($check){
                $date = $this->model->insertDate($title,$description,$date1,$newtime,$idLogin);
                \Http::redirect("planning.php");
            }
        }

        $pageTitle = "reservation-form";
        \Renderer::render('Date/reservation-form',compact('pageTitle'));

    }


    public function showInfo(){
        session_start();

        $id = $_GET['val'];

        $planning = $this->model->findInfo($id);

        $pageTitle = "reservationshow";
        \Renderer::render('Date/reservation',compact('pageTitle','planning'));

    }

    public function showPlanning()
    {

            session_start();


            if (isset($_GET['']))


            setlocale (LC_TIME, 'fr_FR.utf8','fra');

            $jour = date("w");

            if (isset($_GET['reserver'])) {
                header ('Location: reservation-form.php');
            }

            if (isset($_GET['jour'])){
                $jour = intval($_GET['jour']);

            }

            $monday = date('d', strtotime('monday this week'));
            $tuesday = date('d', strtotime('tuesday this week'));
            $wednesday = date('d', strtotime('wednesday this week'));
            $thursday = date('d', strtotime('thursday this week'));
            $friday = date('d', strtotime('friday this week'));

            $semaine = array(0=> $monday, $tuesday, $wednesday, $thursday, $friday);
            $jourTexte =array(0=>'Lundi', 'Mardi', 'Mercredi', 'Jeudi','Vendredi', 'Samedi');

            $huit = '08:00';
            $neuf = '09:00';
            $dix = '10:00';
            $onze = '11:00';
            $douze = '12:00';
            $treize = '13:00';
            $quatorze = '14:00';
            $quinze = '15:00';
            $seize = '16:00';
            $dixsept = '17:00';
            $dixhuit = '18:00';
            $dixneuf = '19:00';

            $plageH = array(0=>'',$huit, $neuf, $dix, $onze,$douze, $treize, $quatorze, $quinze, $seize, $dixsept, $dixhuit, $dixneuf);
            $planning =$this->model->findAll();
            $pageTitle = "planningshow";
            \Renderer::render('Date/planning',compact('pageTitle','plageH','semaine','planning','jourTexte','jour'));
    
    }
}

?>