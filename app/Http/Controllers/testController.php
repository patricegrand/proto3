<?php

namespace App\Http\Controllers;
use PdoGsb;
use Illuminate\Http\Request;

class testController extends Controller
{
     
    function faireTest(){
        $visiteur = session('visiteur') ;
        return view('vuetest')->with('visiteur',$visiteur);
    }
    function modifierMdp(){
        $visiteur = session('visiteur') ;
        return view('vuemdp')->with('visiteur',$visiteur)
                             ->with('erreurs',null);
    }
    function validerMdp(Request $request){
        $visiteur = session('visiteur') ;
        $date = ($request['date']);
        $mdp1 = ($request['mdp1']);
        $mdp2 = ($request['mdp2']);
        $dateVisiteur = PdoGsb::getDateEmbauche($visiteur['id']);
        if($mdp1 == $mdp2 && $date == $dateVisiteur){
            $res = PdoGsb::updateMdp($mdp2,$visiteur['id']);
            $erreur[] =" C'est ok" ;
        }
        else
            {
               $erreur[] =" C'est pas bon recommencer" ;
            }

            return view('vuemdp')->with('visiteur',$visiteur)
            ->with('erreurs',$erreur);   
    }
}
