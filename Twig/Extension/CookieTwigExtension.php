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
     * @var \Twig_Environment
     */
    private $templating;

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
            new \Twig_SimpleFunction('chaplean_cookie', array($this, 'chapleanCookie'), array('is_safe' => array('html'))),
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
