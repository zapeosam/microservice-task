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
        $filename = uniqid(parse_url($url, PHP_URL_HOST).'.').'.pdf';
        return new Response(
            $this->get('knp_snappy.pdf')->getOutput($url),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="'.$filename.'"',
            ]
        );
    }
}

?>