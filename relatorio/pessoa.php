<?php
// Incluímos a biblioteca DOMPDF
require_once("../assets/dompdf/dompdf_config.inc.php");
 
// Instanciamos a classe
$dompdf = new DOMPDF();
 
$html = "Hello Word";


echo $html;
// Passamos o conteúdo que será convertido para PDF
$dompdf->load_html($html);
 
// Definimos o tamanho do papel e
// sua orientação (retrato ou paisagem)
//$dompdf->set_paper('A4','portrait');
 
// O arquivo é convertido
$dompdf->render();
 
// Salvo no diretório temporário do sistema
// e exibido para o usuário
$data = date('d-m-y');

$dompdf->stream("PESSOA_".$data.".pdf");
?>