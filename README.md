ProfilercommandBundle -- DEV
============================

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/f309f5a9-77c1-464c-ae6c-587ec91f60cc/big.png)](https://insight.sensiolabs.com/projects/f309f5a9-77c1-464c-ae6c-587ec91f60cc)
[![knpbundles.com](http://knpbundles.com/juanber84/ProfilercommandBundle/badge)](http://knpbundles.com/juanber84/ProfilercommandBundle)

Commands tools in your Symfonyprofiler. This is the master version, it can be unstable.
You must user me [1.0 version ](https://github.com/juanber84/ProfilercommandBundle/tree/1.0 "stable version") (stable).

![alt text](http://juanber84.pusku.com/recursos/pantallazo.png "ProfilercommandBundle")

Add in your composer.json

    {
        "require": {
            "juanber84/profilercommand-bundle": "dev-master"
        }
    }

Add in your app/AppKernel.php

```php
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
```
Add in your app/routing.yml

    juanber84_profilercommand:
      resource: "@Juanber84ProfilercommandBundle/Resources/config/routing.yml"
      prefix: /

Your parameters.yml must will be...

    parameters:
        // ...
        // ...
        // ...                
        profilercommand:
            front:
                cacheclear: 
                    name: cache:clear
                    command: cache:clear
                assetsinstall: 
                    name: assets:install
                    command: assets:install /Users/juanberzal/Desktop/Symfony/web  
                schemaupdate: 
                    name: schema:update
                    command: doctrine:schema:update --force
                dump: 
                    name: dump
                    command: assetic:dump
            profiler:
                cacheclear: 
                    name: cache:clear
                    command: cache:clear
                assetsinstall: 
                    name: assets:install
                    command: assets:install /Users/juanberzal/Desktop/Symfony/web   
