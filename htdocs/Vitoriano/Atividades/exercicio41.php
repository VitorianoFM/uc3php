<?php

// Verificação de Conversão de Notas para Conceitos

echo "Digite sua nota para converter: ";
$nota = trim(fgets(STDIN));

if ($nota >= 90 && $nota <= 100) { 
    echo "Sua nota será convertida para A";
}
elseif ($nota >= 80 && $nota <= 89) { 
    echo "Sua nota será convertida para B";
}
elseif ($nota >= 70 && $nota <= 79) { 
    echo "Sua nota será convertida para C";
}
elseif ($nota >= 60 && $nota <= 69) { 
    echo "Sua nota será convertida para D";
}
elseif ($nota < 60) { 
    echo "Sua nota será convertida para F";
}
