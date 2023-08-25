<?php
use Dompdf\Dompdf;

ob_start();
?>
<h1>Relatorio SIS Sistema Interno da Seletto</h1>
<hr>
<?php foreach($cliente as $clientes ):?>
    <p><b>Nome: </b><?=$clientes['cliente'];?></p>
    <p><b>Ambiente: </b><?=$clientes['ambiente'];?></p>
    <p><b>Material usado na/o <?=$clientes['ambiente'];?>: </b><?=$clientes['material'];?></p>
    <p><b><?=$clientes['ambiente'];?> instalado por: </b><?=$clientes['marceneiro'];?></p>

    <br><br>

<?php endforeach;?>

<?php
$relatorio=ob_get_contents();
ob_end_clean();


$pdf= new Dompdf();
$pdf->loadHtml($relatorio);
$pdf->render();
header('Content-type: application/pdf');

echo $pdf->Output();


?>


