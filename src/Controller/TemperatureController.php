<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class TemperatureController {
    #[Route('/temp')]

    function fahrenheit(request $request) {
        $temp = $request->query->get('temperature');
        
        if (!is_numeric($temp)) {

            // Return an error if the temperature is invalid
            
            return new Response("Error: Temperature must be a number", 400);
            
            }
            $fahrenheit = ($temp * 9 / 5) + 32;
            $celcius = ($temp-32)/1.8;
                return new Response (
                    $temp. " Celsius in Fahrenheit: " .$fahrenheit. 
                    " and " .$temp. " Fahrenheit in Celcius: " .$celcius
                );
            
               
            
            
           

    }

    

}