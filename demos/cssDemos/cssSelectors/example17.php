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
            :root{
                background-color: #333;
            }
            div{
                width:660px;
                background-color: #191919;               
                margin: auto;
            }
            ul li{
                list-style: none;
                display: inline;
                color: white;
                padding: 0 20px;
                border-left: solid 1px white;
            }
            ul li:first-of-type{
                border-left: none;
                color:goldenrod;
            }
        </style>    
    </head>
    <body>
        <pre class="styles"><code><?php echo htmlspecialchars(':root{
    background-color: #333;
}
div{
    width:660px;
    background-color: #191919;               
    margin: auto;
}
ul li{
    list-style: none;
    display: inline;
    color: white;
    padding: 0 20px;
    border-left: solid 1px white;
}
ul li:first-of-type{
    border-left: none;
    color:goldenrod;
}') ?></code></pre>

        <div>
            <ul>
                <li>Home
                <li>Css Demos
                <li>Portfolio
                <li>About Me
                <li>Contact Us
            </ul>
        </div>
        <pre class="htmlCode"><code><?php echo htmlspecialchars('<ul>
    <li>Home
    <li>Css Demos
    <li>Portfolio
    <li>About Me
    <li>Contact Us
</ul>') ?></code></pre>
    </body>
</html>
