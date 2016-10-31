<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MicroController extends Controller
{
    /**
     * @Route("/urltopdf")
     */
    public function urltopdfAction(Request $request)
    {
        $url = $request->query->get('url');
        return new Response($url);
    }
}

?>