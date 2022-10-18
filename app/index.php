<?php

// require_once 'GetNfeFromApi.php';
require_once 'GetNfeFromDatabase.php';
require_once '../core/UseCase.php';

// $nfeGateway = new GetNfeFromApi();
$nfeGateway = new GetNfeFromDatabase();

$getXmlUseCase = new UseCase($nfeGateway);
$getXmlUseCase->execute();

?>