<?php

namespace Juanber84\Bundle\ProfilercommandBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Console\Application as App;
use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Component\Process\ProcessBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CommandController extends Controller
{
    public function executeAction($command, Request $request)
    {
        $pieces = explode('.',$command);
        $finalcommand =  $this->container->getParameter($pieces[0]); 
        $finalcommand = $finalcommand[$pieces[1]][$pieces[2]];
	    $kernel = $this->get('kernel');
        $application = new \Symfony\Bundle\FrameworkBundle\Console\Application($kernel);
        $application->setAutoExit(false);
        $input = new \Symfony\Component\Console\Input\StringInput($finalcommand);
        $application->run($input);
        $referer = $request->headers->get('referer');
        return new RedirectResponse($referer);
    }
}


