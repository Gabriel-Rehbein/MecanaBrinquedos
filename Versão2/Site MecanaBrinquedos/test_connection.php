<?php
require_once "functions.php";

login($connect); 

if ($connect) {
    echo "Conexão bem-sucedida!";
} else {
    echo "Erro na conexão.";
}
?>
