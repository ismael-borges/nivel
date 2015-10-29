<?php
// PDO connect *********
function connect() {
    return require_once 'conexao.php';
}
 
$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM cadastro_funcionario WHERE nome LIKE (:keyword) ORDER BY id ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['nome']);
	// add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['nome']).'\')">'.$name.'</li>';
}
?>