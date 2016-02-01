<?php 
$conn = mysqli_connect("localhost", "root", "root", "fotos_insta");
error_reporting(E_ALL);
if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$id			= $_POST['id'];
$nome		= $_POST['nome'];
$descricao	= $_POST['descricao'];
$link		= $_POST['link'];
$user		= $_POST['user'];
$img		= $_POST['img'];

$sql = "SELECT * FROM fotos WHERE id = {$id}";

$res = mysqli_query($conn, $sql);


if (!$res) {
$sql1 = "INSERT INTO fotos (id,nome,descricao,link,user,img)
 			 VALUES ('$id','$nome',\"$descricao\",'$link','$user','$img')";


 }else{
	$sql1 = "UPDATE fotos
			 SET id = '$id',
				 nome = '$nome',
				 descricao = \"$descricao\",
				 link = '$link',
				 user = '$user',
				 img = '$img'
			 WHERE id = '$id'";
			 
}


$res1 = mysqli_query($conn, $sql1);


if ($res1) {
	echo "td certo";
}else{
	echo $sql1;
}



?>