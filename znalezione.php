<?php
session_start();
if(isset($_POST['imie'])){
$imie=$_POST['imie'];
}
//tu łącz sie z bazą
$jest_dziecko=true;//jeśli jest równy false dziecka nie ma 
$blad=false;//do tej zmiennej wpisz false jeżeli jest bład 
$imie="dowolny tekst";//tekst z bazy danych
$d="dowolny tekst";//tekst z bazy danych
$d1="dowolny tekst";//tekst z bazy danych
$d2="dowolny tekst";//tekst z bazy danych
?>
<html>
<head>
	<link rel="Stylesheet" href="style.css" type="text/css"/>
</head>
<body>
	<div id="conteiner"><table >
<?php
if($blad==false)
{
	
	if($jest_dziecko==true)
	{
		echo '<tr>
		<td>imie:</td>';
		echo '<td>'.$imie.'</td></tr>';
		echo '<tr><td>nazwisko:</td>';
		echo '<td>'.$d.'</td></tr>';
		echo '<tr><td>lat:</td>';
		echo '<td>'.$d1.'</td></tr>';
		echo'<tr><td>rodzice:</td>';
		echo '<td>'.$d2.'</td></tr>';
	}
	else
	{
		echo 'niestety dziecka o podanym imieniu nie ma';
	}
}
else
{
	echo 'niestety wystąpił bład przyjdz póżniej';
	
}
?>
</table>
</div>
</body>
</html
