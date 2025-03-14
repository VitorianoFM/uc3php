<?php

// Verificação Horario Funcionamento

echo "Qual horario atual? ";
$horario = trim(fgets(STDIN));

if ( $horario >= 8 && $horario <= 18) {
    echo "O estabelecimento esta aberto";

} else {
    echo "O estabelecimento esta fechado";
}
