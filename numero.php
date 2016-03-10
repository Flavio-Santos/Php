<?php
print "Qual o sexo do cliente(f/m)? ";
$sex = trim(fgets(STDIN));
if ($sex == "f" || $sex == "F"){
	$sex = 8;
}
else{
	$sex = 10;
}

print "Quantas cervejas foram consumidas? ";
$cerv = trim(fgets(STDIN));
print "Quantos refrigerantes foram consumidos? ";
$refri = trim(fgets(STDIN));
print "Quantos espetinhos foram consumidos? ";
$espet = trim(fgets(STDIN));
$cerv1 = $cerv*2.50;
$refri2 = $refri*2;
$espet3 = $espet*4;
$resultado = ($cerv1+$refri2+$espet3);
print "Valor da conta: ";
print "\n$sex (valor básico)";
print "\n$resultado (bebida e comida)";
if($resultado <= 15 ){
	$cover = 3;
	print "\n$cover (cantores)";
}
else{
	$cover = 0;
}
$subtotal = $sex+$resultado+$cover;
print "\n$subtotal (subtotal sem 10%)";
$total = $subtotal*.10+$subtotal;
print "\n------------------------";
print "\n$total (Total)";