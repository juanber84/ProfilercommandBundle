<?php
 
namespace Juanber84\Bundle\ProfilercommandBundle\DataCollector;
 
use Symfony\Component\HttpKernel\DataCollector\DataCollector;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class CommandDataCollector extends DataCollector
{

    Private $datos;

    public function __construct($profilercommand)
    {
        $this->datos = $profilercommand;
    }

    public function collect(Request $request, Response $response, \Exception $exception = null)
    {
        $this->data  =  $this->datos; 
    }

    public function getProfile()
    {  

        return $this->data;
    }


    public function getName()
    {
        return 'command';
    }
}