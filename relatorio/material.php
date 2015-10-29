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

$pdf -> ezSetMargins(10,10,20,20);

$mainFont = 'Times-Roman';
// select a font
$pdf->selectFont($mainFont);
$size=12;

$height = $pdf->getFontHeight($size);
// modified to use the local file if it can
$pdf->openHere('Fit');

//$border['width'] = 1;
$pdf->ezText('');

$pdf->ezImage('img/logo2.png','','175','','left','');
$pdf->ezText('');
$pdf->ezText('Materiais',25);
$pdf->ezText('');
$meio =array();
$json = file_get_contents('..\json\material.json');
$lendo = json_decode($json, true);
$x=0;

foreach($lendo as $objeto){
    $meio[$x] = array('codigo'=>$objeto['codigo'],
                      'descricao'=>$objeto['descricao'],
                      'medida'=>$objeto['medida'],
                      'qtd'=>rand(1,250)
                     );
    $x++;
}

$cols = array('codigo'=>'Codigo',
                'descricao'=>'Descrição',
                'medida'=>'Medida',
                'qtd'=>'Quantidade');
$pdf->ezTable($meio,$cols);


if (isset($_GET['d']) && $_GET['d']){
  echo $pdf->ezOutput(TRUE);
} else {
  $pdf->ezStream(array('compress'=>0));
}

//error_log($pdf->messages);
?>