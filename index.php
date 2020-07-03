



<html>
    <head>
        <meta charset="utf-8">
        <title>Site routing</title>
        <link rel="stylesheet" href="vitrine.css">
       
        
    </head>

<?php
include('header.php');
?>
    <body>
<?php

if($_GET){
if($_GET["page"] == "accueil") 
{
    //afficher page accueil//
    include("vitrine-accueil.html");
    
}

elseif($_GET['page'] == 'programme')
{
    //afficher page programme//
    include("vitrine-programme.html");
} 
elseif($_GET['page'] == 'contacts')
{
    //afficher page contact//
    include('vitrine-contacts.html');
}
    //afficher page contact-form//
elseif($_GET['page'] =='contact-form')
{
    include('contact-form.php');
}
else{
    include('404.php');
}


}
include('footer.php');





?>