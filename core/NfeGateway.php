<?php

interface NfeGateway
{
    public function getXml(string $chaveDeAcesso): string;
}

?>