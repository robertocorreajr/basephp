<?php

require_once 'NfeGateway.php';

class UseCase 
{

    private NfeGateway $nfeGateway;

    public function __construct(NfeGateway $nfeGateway)
    {
        $this->nfeGateway = $nfeGateway;
    }

    public function execute(): string
    {
        return $this->nfeGateway->getXml('chave de acesso');
    }
}

?>