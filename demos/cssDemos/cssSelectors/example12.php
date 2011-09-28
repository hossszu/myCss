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
                width:560px;
                background-color: #191919;               
                margin: auto;
                line-height: 0;
            }
            img{
                width:100px;
                height:100px;
                margin-right: 15px;             
                margin-bottom: 15px;                                  
            }
            img:nth-of-type(5n){
                 margin-right: 0px; 
            }
            img:nth-last-of-type(-n+5){
                 margin-bottom: 0; 
            }
        </style>    
    </head>
    <body>        <pre class="styles"><code><?php echo htmlspecialchars(':root{
    background-color: #333;
}
div{
    width:560px;
    background-color: #191919;               
    margin: auto;
    line-height: 0;
}
img{
    width:100px;
    height:100px;
    margin-right: 15px;             
    margin-bottom: 15px;                                  
}
img:nth-of-type(5n){
     margin-right: 0px; 
}
img:nth-last-of-type(-n+5){
     margin-bottom: 0; 
}') ?></code></pre>
        <div>
<img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg">
        </div>
 <pre class="htmlCode"><code><?php echo htmlspecialchars('<!--A kívánt hatás eléréséhez,
     fontos, hogy a kódot egy sorba írd, mert az img, egy inline elem, tehát a kódban lávő
     sortörés hozzáadódik a képekhez, mintha margin lenne!-->
<div><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"><img src="../../demoImages/golya.jpg"></div>') ?></code></pre>

    </body>
</html>
