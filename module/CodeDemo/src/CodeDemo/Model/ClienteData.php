<?php

namespace CodeDemo\Model;

class ClienteData implements DataInterface
{
    public function getData()
    {
        return [
            'nome'=>'Wesley',
            'email'=>'wsilva@schoolofnet.com'
        ];
    }

} 