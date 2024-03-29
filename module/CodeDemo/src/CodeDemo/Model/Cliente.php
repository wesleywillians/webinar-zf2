<?php

namespace CodeDemo\Model;

class Cliente
{

    private $nome;
    private $email;

    public function __construct(DataInterface $data)
    {
        $this->nome = $data->getData()['nome'];
        $this->email = $data->getData()['email'];
    }
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }



} 