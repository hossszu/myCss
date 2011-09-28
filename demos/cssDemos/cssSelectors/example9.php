<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="../../../js/jquery.js"></script>
        <script type="text/javascript" src="../../../js/jquery.snippet.js"></script>
        <link rel="stylesheet" type="text/css"  href="../../../css/jquery.snippet.css">
        <script>
            $(document).ready(function(){
                $("pre.htmlCode").snippet("html",{style:"the",showNum:true});
                $("pre.styles").snippet("css",{style:"the",showNum:true});
                $("pre.js").snippet("javascript",{style:"the",showNum:true});
            });
        </script>
        <style>
            ul li[class|="en"]{
                color:#2b81af;
                border-left:solid 2px;
                padding-left: 15px;
                list-style: circle;
            }                       
        </style>    
    </head>
    <body>
        <pre class="styles"><code><?php echo htmlspecialchars('td[id|="en"]{
    color:#2b81af;
    border-left:solid 2px;
    padding-left: 15px;
    list-style: circle;
}') ?></code></pre>

<ul> 
    <li class="en">American English</li><!--Kiválasztja-->
    <li class="en-">British English</li><!--Kiválasztja-->
    <li class="en-international or other dialect">International English  or other dialect</li><!--Kiválasztja-->
    <li class="english">English</li><!--Nem választja ki-->
    <li class="US-en">US English</li><!--Nem választja ki-->
</ul>
 <pre class="htmlCode"><code><?php echo htmlspecialchars('<ul>
    <li class="en">American English</li><!--Kiválasztja-->
    <li class="en-">British English</li><!--Kiválasztja-->
    <li class="en-international or other dialect">International English  or other dialect</li><!--Kiválasztja-->
    <li class="english">English</li><!--Nem választja ki-->
    <li class="US-en">US English</li><!--Nem választja ki-->
</ul>') ?></code></pre>
    </body>
</html>
