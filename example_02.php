<?php
require('Row.php');

$pdf=new Row();
$pdf->AddPage('L');
$pdf->SetFont('Arial','',15);
$pdf->SetXY(10,10);
$pdf->SetVAligns(['M','T','B']);
 $arrayConfig = [
            'border'        => 1,                // aceita array também
            'style'         => 'B',              // aceita array também
            'font'          => 'Helvetica',      // aceita array também
            'background'    => false,             // aceita array também
            'fill'          => 240, // cinza     // aceita array também
            'size'          => 9,                // aceita array também
            'align'         => 'C',              // aceita array também
            'width'         => [50,50,50], // só aceita array
            'height'        => 5 ,               // só aceita inteiro
            'reset'        => true               // só aceita booleano
         ];

$pdf->RowConfig($arrayConfig);
$pdf->Row([
    'This sentence is centered in the middle of the box.',
    'This sentence is centered in the top of the box.',
    'This sentence is centered in the bottom of the box.'
]);
$pdf->Output();
?>
