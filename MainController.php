<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
   /**
    * @Route("/", name = "home")
    */
    public function inFindMinandMaxValues(){
        
    $Info = 5; //readline("Enter the size of the array"); (for console commands)
    //floatval($Info); ->when getting input from the console
    $int= rand();
    $arr =[];


    for ($i =0; $i <= $Info; $i++){
    array_push($arr, rand(0,10000));
    }

    $min = min($arr);
    $max = max($arr);
    /*echo 'Min: '.$min. ' Max: '.$max; */

       return new Response(
            '<html><body> Minimum Value : '.$min . ' Maximum Value : '.$max .'</body></html>'
       );    //--> For showing results in web.
    } 
}

