<?php
 
namespace Juanber84\Bundle\ProfilercommandBundle\DataCollector;
 
use Symfony\Component\HttpKernel\DataCollector\DataCollector;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MemoryDataCollector extends DataCollector
{
    public function collect(Request $request, Response $response, \Exception $exception = null)
    {
        $this->data = array(
            'memory' => memory_get_peak_usage(true),
        );
    }

    public function getMemory()
    {
        return $this->data['memory'];
    }

    public function updateMemoryUsage()
    {
        $this->data['memory'] = memory_get_peak_usage(true);
        return $this->data['memory'];
    }

    public function getName()
    {
        return 'memory';
    }
}