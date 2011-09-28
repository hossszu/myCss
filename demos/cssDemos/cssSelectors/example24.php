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
            :target{
                background-color:silver;
                color:red;
                padding: 50px;
                text-align: center;             
                width:600px;
                border:inset 1px red; 
                display: block;
            }  
            a{
                text-decoration: none;
            }
            p{
                display: none;
            }
        </style>    
    </head>
    <body>
        <pre class="styles"><code><?php echo htmlspecialchars(':target{
    background-color:gray;
    color:red;
    padding: 50px;
    text-align: center;             
    width:600px;
    border:inset 1px red; 
    display: block;
}  
a{
    text-decoration: none;
}
p{
    display: none;
}') ?></code></pre>
        <a href="#zeil">Klikk ide, és láss csodát.</a>
        <br>
        <p id="zeil">
            Bocs, de a csoda ma elmaradt, hejette viszont láthattál egy példát arra, hogy, hogyan lehet
            hivatkozni egy belépési pontra.</br></br>
            <a href="#">Bezár.</a></p>

    </body>
</html>
