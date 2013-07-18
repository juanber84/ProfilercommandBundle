ProfilercommandBundle
=====================

Commands tools in your Symfonyprofiler

Add in your composer.json

    {
        "require": {
            "juanber84/profilercommand-bundle": "dev-master"
        }
    }

Add in your app/AppKernel.php

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

Add in your app/routing.yml

    juanber84_profilercommand:
      resource: "@Juanber84ProfilercommandBundle/Resources/config/routing.yml"
      prefix: /

