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
                width:860px;
                background-color: #191919;               
                margin: auto;
                padding: 20px;
            }
            p{
                color:white;
            }

            p:only-child{
                color:red;              
            }
        </style>    
    </head>
    <body>
        <pre class="styles"><code><?php echo htmlspecialchars(':root{
    background-color: #333;
}
div{
    width:860px;
    background-color: #191919;               
    margin: auto;
    padding: 20px;
}
p{
    color:white;
}
p:only-child{
    color:red;              
}') ?></code></pre>
        <div>
            <p>Egyke a gyermek</p>
        </div>
        <div>
            <p>Ezek itt ikrek</p>
            <p>Ezek itt ikrek</p>
        </div>
        <div>
            <p>Ők már nagycsaládnak számítanak.</p>
            <p>De nincsenek megélhetési gondjaik,</p>
            <p>a papa webdesigner, és az állam is bőkezűen támogatja őket.</p>
        </div>
<pre class="htmlCode"><code><?php echo htmlspecialchars('<div>
    <p>Egyke a gyermek</p>
</div>
<div>
    <p>Ezek itt ikrek</p>
    <p>Ezek itt ikrek</p>
</div>
<div>
    <p>Ők már nagycsaládnak számítanak.</p>
    <p>De nincsenek megélhetési gondjaik,</p>
    <p>a papa webdesigner, és az állam is bőkezűen támogatja őket.</p>
</div>') ?></code></pre>        
    </body>
</html>
