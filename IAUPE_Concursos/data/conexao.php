<?php

define('USUARIO', 'HELIFAZ');
define('SENHA', 'PROJETOIC');
define('DB', 'LOGIN_CAD_IC');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('não foi possível conectar');