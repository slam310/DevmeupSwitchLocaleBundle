<?php

namespace Devmeup\SwitchLocaleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SwitchLocaleController extends Controller
{
    
    public function switchLocaleAction($locale = null)
    {
        if ($locale != null)
        {
            // On enregistre la langue en session
            $this->container->get('session')->setLocale($locale);
        }

        // on tente de rediriger vers la page d'origine
        $url = $this->container->get('request')->headers->get('referer');
        if (empty($url))
        {
            $url = $this->container->get('router')->generate('_homepage');
        }
        return new RedirectResponse($url);
    }
}
