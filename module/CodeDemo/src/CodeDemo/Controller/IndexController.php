<?php

namespace CodeDemo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        $cliente = $this->getServiceLocator()->get('CodeDemo\Model\Cliente');

        return new ViewModel(['cliente'=>$cliente]);
    }

} 