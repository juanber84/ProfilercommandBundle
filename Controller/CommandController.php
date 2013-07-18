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

    public function indexAction()
    {
        return array();
    }

    public function executeAction($command, Request $request)
    {
		$kernel = $this->get('kernel');
		$application = new \Symfony\Bundle\FrameworkBundle\Console\Application($kernel);
		$application->setAutoExit(false);
		$values = explode(' ', $command);
		$options = array();
		foreach($values as $key => $value ){
			if( $key == 0 ) $options['command'] = $value;
			else $options[$value]  = true;
		}
		$application->run(new \Symfony\Component\Console\Input\ArrayInput($options));
		$referer = $request->headers->get('referer');
        return new RedirectResponse($referer);
    }
}


