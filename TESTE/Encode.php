<?php

$password="ufrs3753";

$criptografada=base64_encode($password);

echo $criptografada;

$decriptografada=base64_decode($criptografada);

echo $decriptografada;