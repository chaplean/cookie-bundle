<?php

namespace Chaplean\Bundle\CookieBundle\Controller;

use GK;
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
     * @param boolean $uglify
     *
     * @return Response
     * @throws \Exception
     */
    public function cookieHeadbandAction($uglify = false)
    {
        $script = $this->renderView('ChapleanCookieBundle::cookie-headband.js.twig', array(
            'learn_more' => $this->getParameter('chaplean_cookie.learn_more'),
        ));

        if ($uglify) {
            $packer = new GK\JavascriptPacker($script);
            $script = $packer->pack();
        }

        $response = new Response($script);
        $response->headers->set('Content-Type', 'text/javascript');

        return $response;
    }
}
