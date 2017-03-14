<?php
require('Row.php');

$pdf=new Row();
$pdf->AddPage('L');
$pdf->SetXY(10,10);
 $arrayConfig = [
            'align'         => ['J','L','C','R'],    // aceita array também
            'background'    => true,            // aceita array também
            'border'        => 1,                // aceita array também
            'fill'          => 240, // cinza     // aceita array também
            'font'          => 'Arial',          // aceita array também
            'height'        => 5 ,               // só aceita inteiro
            'size'          => 7,                // aceita array também
            'style'         => 'B',              // aceita array também
            'valign'         => ['','T','M','B'],   // aceita array também
            'width'         => [50,50,50,50],       // só aceita array
            'reset'        => true               // só aceita booleano
         ];

$pdf->RowConfig($arrayConfig);
$pdf->Row([
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'This sentence is left on the TOP of the box.',
    'This sentence is centered in the MIDDLE of the box.',
    'This sentence is right on the BOTTOM of the box.'
]);
$pdf->Output();
?>
