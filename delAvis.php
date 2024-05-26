<?php
	$servername='localhost';
	$dbname='korogu';
	$username='root';
	$password='';
	try{
		$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$afficher="SELECT * FROM satisfaction ORDER BY idSatisf";

		$listeAvis=$conn->query($afficher)->fetchAll(PDO::FETCH_ASSOC);
	}
	catch(PDOException $e){
		echo "erreur:" . $e->getMessage();
	}
	if (isset($_GET["id"]) AND is_numeric($_GET["id"])){
		$id=htmlentities($_GET['id']);
		$suppReq="DELETE FROM satisfaction WHERE idSatisf=".$id.";";
		$conn->exec($suppReq);
	}
	header("Location: administration.php")
?>