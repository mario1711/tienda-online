<?php
 include ('fpdf/fpdf.php');

 $pdf = new fpdf();

 $pdf->AddPage();
 $pdf->SetFont('Helvetica' , 'B' , 14);
 $pdf->Write(7 , 'RESUMEN DE LA COMPRA');
 $pdf->Ln(); //Salto de linea
 $pdf->Cell(60,7,$_POST['descripcion']);
 $pdf->Write(7 , '$');
 $pdf->Cell(60,7,$_POST['precio']);
 $pdf->Ln(10);
 $pdf->Write(7 , 'SOLO MUESTRA UN PRODUCTO EN EL RECIBO :(');
 $pdf->Ln(10);
 $pdf->Write(7 , 'Total');
 $pdf->Write(7 , '-----------');
 $pdf->Write(7 , '$');
 $pdf->Cell(60,7,$_POST['total']);
 $pdf->Ln(10);

 $pdf->Output("prueba.pdf",'F');

 echo "<script language='javascript'>window.open('prueba.pdf');</script>";//paral archivo pdf generado

 exit;
?>