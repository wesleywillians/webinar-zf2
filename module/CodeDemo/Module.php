<?php

namespace CodeDemo;

use CodeDemo\Model\ClienteData;
use CodeDemo\Model\Cliente;

class Module
{

    public function getServiceConfig()
    {
        return [
          'factories' => [
              'CodeDemo\Model\Cliente' => function($sm) {
                  $clienteData = new ClienteData();
                  $cliente = new Cliente($clienteData);
                  return $cliente;
              }
          ]
        ];
    }

    public function getConfig()
    {
        return include __DIR__.'/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }


}