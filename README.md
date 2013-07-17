ProfilercommandBundle
=====================

Commands tools in your Symfonyprofiler


{
    "require": {
        "juanber84/profilercommand-bundle": "dev-master"
    }
}


<?php

  // app/AppKernel.php
  public function registerBundles()
  {
    return array(
      // ...
      new Juanber84\Bundle\ProfilercommandBundle\Juanber84ProfilercommandBundle(),
      // ...
      );
  }