<?php //header("Expires: Sat, 26 Jul 2017 05:00:00 GMT");
ini_set('display_errors', 'On');
include_once 'inc/f.php';
db();

$baseName = basename($_SERVER["PHP_SELF"], ".php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="keywords" content="HTML5, CSS3, weblapszerkesztés">
        <meta name="description" content="Szabványkövető weblap készítése">
        <meta name="robots" content="index, all">
        <!--[if lte IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <link rel="stylesheet" href="stylesheets/ie.css" type="text/css" media="screen">
        <![endif]-->

        <link rel="stylesheet" type="text/css"  href="css/main.css">
        <link rel="stylesheet" type="text/css"  href="css/jquery.snippet.css">
        <link rel="stylesheet" type="text/css"  href="css/colorbox.css">

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.snippet.js"></script>
        <script type="text/javascript" src="js/jquery.colorbox.js"></script>


        <script>
            $(document).ready(function(){
                $("pre.htmlCode").snippet("html",{style:"the",showNum:true});
                $("pre.styles").snippet("css",{style:"the",showNum:true});
                $("pre.js").snippet("javascript",{style:"the",showNum:true});
                $("a[class*=example]").colorbox({width:"80%", height:"80%", iframe:true});

            });

        </script>
<script>
  function storeUserScribble(id) {
    var scribble = document.getElementById('scribble').innerHTML;
    localStorage.setItem('userScribble',scribble);
  }

  function getUserScribble() {
    if ( localStorage.getItem('userScribble')) {
      var scribble = localStorage.getItem('userScribble');
    }
    else {
      var scribble = '';
    }
    document.getElementById('scribble').innerHTML = scribble;
  }

  function clearLocal() {
    clear: localStorage.clear();
    return false;
  }
</script>

    </head>
    <body>
        <div id="wrap">             
            <div id="header">
                <form action="#" method="post">
                    <input type="text" name="search">
                    <input type="submit" value="keres">                  
                </form>
            </div> 
            <header>            
                <nav id="headerNav">
                    <ul>
                        <li <?php markSelected("index", $baseName) ?>><a href="index.php">home</a></li>
                        <li <?php markSelected("about", $baseName) ?>><a href="about.php">about me</a></li>
                        <li <?php markSelected("contact", $baseName) ?>><a href="contact.php">contact</a></li>
                    </ul>
                </nav>
            </header>    
            <div id="wrapper">