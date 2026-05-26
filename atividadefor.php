<?php
for ($i=1; $i<=5; $i++)
print "texto $i: <input type='text'> <br>";


$equipamentos=['mouse','teclado','monitor','fone','Impressora','HD Externo','Roteador Wi-Fi'];
foreach ($equipamentos as $equipamento)
echo $equipamento.  " ";
echo "<br>";


$alunos=['allef'=>9, 'wesley'=>8,'adriely'=>7,'cesar'=>5,'juan'=>3,'andreza'=>10,'neto'=>4];
foreach($alunos as $notas=>$apanhado)
echo($notas."-".$apanhado."<br>");

?>