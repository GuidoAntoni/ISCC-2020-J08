<!DOCTYPE html>
<html>
<head>
<title>mini-site-routing</title>
<ul>
      <li> <a href="http://localhost/ISCC/ISCC-2020-J08/ISCC-2020-J08/EX_01/mini-site-routing.php?page=1">Accueil</a></li>
      <li> <a href="http://localhost/ISCC/ISCC-2020-J08/ISCC-2020-J08/EX_01/mini-site-routing.php?page=2">Page 2</a></li>
      <li> <a href="http://localhost/ISCC/ISCC-2020-J08/ISCC-2020-J08/EX_01/mini-site-routing.php?page=3">Page 3</a></li> 
      <br>
    </ul>

</head>

<body>
<?php
if($_GET["page"]== "1")
{
    echo "Accueil !";
}
if($_GET["page"]== "2")
{
    echo "Page 2 !";
}
if($_GET["page"]== "3")
{
    echo "Page 3 !";
}
?>
</body>

</html>