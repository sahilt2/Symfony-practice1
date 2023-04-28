<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class TemperatureController {
    #[Route('/temp')]

    function fahrenheit(request $request) {
        $temp = $request->query->get('temperature');
        $fahrenheit = ($temp * 9 / 5) + 32;
        if (!is_numeric($temp)) {

            // Return an error if the temperature is invalid
            
            return new Response("Error: Temperature must be a number", 400);
            
            } else{
                return new Response (
                    $temp. " Celsius in Fahrenheit: " .$fahrenheit 
                );
            }
            
           

    }

    

}