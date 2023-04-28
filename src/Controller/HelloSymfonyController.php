<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class HelloSymfonyController {           //this class name must match with name of the file
   
    #[Route('/')]
   
    public function hellosymfony(){
        
        return new Response(
            'hello symfony'
        );
    }
}
?>




