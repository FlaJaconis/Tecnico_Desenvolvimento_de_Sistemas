<?php
include 'Paciente.php';

$paciente1 = new Paciente();

$paciente1 -> setNome('João da Silva');
$paciente1 -> setRG('66.666.666-0');
$paciente1 -> setCPF('777.777.777-00');
$paciente1 -> setEndereco('Rua do Bem-te-vi, 99 - Pq Ipê - São Paulo/SP');
$paciente1 -> setProfissao('Desenvolvedor de sistemas');

echo nl2br(
"<h2>
{$paciente1 -> getNome()}
\n{$paciente1 -> getCPF()}
\n{$paciente1 -> getRG()}
\n{$paciente1 -> getEndereco()}
\n{$paciente1 -> getProfissao()}</h2>"
);

?>