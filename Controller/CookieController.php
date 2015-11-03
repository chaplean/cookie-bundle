<?php

namespace Chaplean\Bundle\CookieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class CookieController.
 *
 * @package   Chaplean\Bundle\CookieBundle\Controller
 * @author    Valentin - Chaplean <valentin@chaplean.com>
 * @copyright 2014 - 2015 Chaplean (http://www.chaplean.com)
 * @since     1.0.0
 */
class CookieController extends Controller
{
    /**
     * @return Response
     */
    public function cookieHeadbandAction()
    {
        $script = $this->renderView('ChapleanCookieBundle::cookie-headband.js.twig', array(
            'learn_more' => $this->getParameter('chaplean_cookie.learn_more'),
        ));

        $response = new Response($script);
        $response->headers->set('Content-Type', 'text/javascript');

        return $response;
    }
}
