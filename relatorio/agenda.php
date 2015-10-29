<?php
error_reporting(E_ALL);
set_time_limit(1800);
set_include_path('../assets/pdf-php/' . PATH_SEPARATOR . get_include_path());
include 'Cezpdf.php';

class Creport extends Cezpdf{
	function Creport($p,$o){
  		$this->__construct($p, $o,'',array(0.2,0.8,0.8));
	}
}
$pdf = new Creport('a4','portrait');
// to test on windows xampp
if(strpos(PHP_OS, 'WIN') !== false){
    $pdf->tempPath = '../';
}

$pdf -> ezSetMargins(5,5,5,5);

$mainFont = 'Times-Roman';
// select a font
$pdf->selectFont($mainFont);
$size=12;

$height = $pdf->getFontHeight($size);
// modified to use the local file if it can
$pdf->openHere('Fit');

//$border['width'] = 1;
$pdf->ezImage('img/logo2.png','25','125','','left','');
$pdf->ezText('');
$pdf->ezText('');
$meio =array();
$json = file_get_contents('..\json\fornecedor.json');
$lendo = json_decode($json, true);
$x=0;

foreach($lendo as $objeto){
    $meio[$x] = array('nome'=>$objeto['nome'],
                      'cnpj'=>$objeto['cnpj'],
                      'fone'=>$objeto['fone']
                     );
    $x++;
}

$cols = array('nome'=>'Nome', 'cnpj'=>'CNPJ','fone'=>'Telefone','cidade'=>'Cidade','contato'=>'Contato','bairro'=>'Bairro');
$pdf->ezTable($meio,$cols);


if (isset($_GET['d']) && $_GET['d']){
  echo $pdf->ezOutput(TRUE);
} else {
  $pdf->ezStream(array('compress'=>0));
}

//error_log($pdf->messages);
?>