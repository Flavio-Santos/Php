<?php
print "Total de rendimentos bancarios: ";
$tRenBanc = trim(fgets(STDIN));
print "Total de rendimentos de salarios ou serviços: ";
$tRenSali = trim(fgets(STDIN));
print "Total de outros rendimentos: ";
$Rendtotal = trim(fgets(STDIN));
print "Serviços medicos pagos: ";
$ServMed = trim(fgets(STDIN));
print "Serviços educacionais pagos: ";
$ServAdc = trim(fgets(STDIN));
$rend1 = $tRenBanc*.2;
if($tRenSali <= 8000){
	$tRendiSal1 = 0;
}
else if(($tRenSali > 8000) || ($tRenSali <= 24000) ){
	$tRendiSal1 = $tRenSali*.15;
}
else if($tRenSali < 24000){
	$tRendiSal1 = $tRenSali*.20;
}
$totalRend1 = $Rendtotal*.10;
$subtotal = ($rend1 + $totalRend1 + $tRendiSal1);
$max1 = ($subtotal)*.30;
$tot = ($ServAdc+$ServMed);
$total = ($subtotal-$max1);
print "\n   ";
Print "Total de impostos:";
print  "\n$rend1		(Sobre rendimentos bancarios)";
print "\n$tRendiSal1		(Sobre salarios serviços)";
print "\n$totalRend1		(Sobre outros rendimentos)";
print "\n$subtotal		(Total)";
print "\n ------------------------------------ ";
print "\nMaximo a ser abatido: \n$max1 ";
print "\n ------------------------------------ ";
print "\nTotal de valores possiveis de abater: ";
print "\n$ServMed		(Serviços medicos)";
print "\n$ServAdc		(Serviços educacionais)";
print "\n$tot		(Total)";
print "\n ------------------------------------ ";
print "\nImposto total: ";
print "\n$subtotal		(Imposto bruto)";
if ($tot<0.3*$subtotal){
	print "\n$tot    (Abatimento) ";
}
else
print "\n$max1		(Abatimento)";
print "\n$total		(Total)";