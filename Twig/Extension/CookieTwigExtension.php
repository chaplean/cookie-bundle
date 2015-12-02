<?php

namespace Chaplean\Bundle\CookieBundle\Twig\Extension;

/**
 * CookieTwigExtension.php.
 *
 * @author    Valentin - Chaplean <valentin@chaplean.com>
 * @copyright 2014 - 2015 Chaplean (http://www.chaplean.com)
 * @since     1.0.1
 */
class CookieTwigExtension extends \Twig_Extension
{
    /**
     * @var array
     */
    private $parametersCookie;

    /**
     * CookieTwigExtension constructor.
     *
     * @param array             $parametersCookie
     * @param \Twig_Environment $templating
     */
    public function __construct(array $parametersCookie, \Twig_Environment $templating)
    {
        $this->parametersCookie = $parametersCookie;
        $this->templating = $templating;
    }

    /**
     * @return string
     */
    public function chapleanCookie()
    {
        return $this->templating->render('ChapleanCookieBundle::chaplean-cookie.html.twig');
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return array(
            'chaplean_cookie' => new \Twig_Function_Method($this, 'chapleanCookie', array('is_safe' => array('html'))),
        );
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'chaplean_cookie_twigextension';
    }
}
