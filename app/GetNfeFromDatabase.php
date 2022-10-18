<?php

require_once '../core/NfeGateway.php';

class GetNfeFromDatabase implements NfeGateway
{
    public function getXml(string $chaveDeAcesso): string
    {
        var_dump('Peguei do banco');
        return 'retornado!';
    }
}

?>