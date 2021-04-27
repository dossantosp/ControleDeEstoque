<?php
//gerarsenha.php

$senha= 26615876;
echo "senha não criptografada: $senha";
$senhacriptografada = md5($senha);
echo "senha criptografada : $senhacriptografada";