<?php

require_once '../core/NfeGateway.php';

class GetNfeFromApi implements NfeGateway
{
    public function getXml(string $chaveDeAcesso): string
    {
        var_dump('chamei da API');
        return 'test';
    }
}

?>