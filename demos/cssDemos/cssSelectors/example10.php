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
            body:root{
                background-color:silver;
            } 
            html{
                background-color: red;
            }
             
        </style>    
    </head>
    <body>
        <pre class="styles"><code><?php echo htmlspecialchars(':root{
    background-color:silver;
} 
html{
    background-color: red;
}') ?></code></pre>
        <p>
            Lorem ipsum dolor sit amet, sed in id a rutrum porttitor, 
            amet congue nam sollicitudin eu, tristique faucibus lacus, 
            tempus consequat interdum mauris non, pellentesque metus fusce orci. 
            Integer felis ac rutrum vivamus congue, vel felis vitae ac ac,
            tortor sodales quis est in, condimentum adipiscing. Vulputate diam molestie,
            et scelerisque, placerat bibendum ipsum porta quis nulla sapien, 
            conubia elit orci montes lectus maecenas eu, a fuga quis sapien elementum. 
            Ac sem velit varius elit morbi dolor, fermentum lorem. 
            Facilisi molestie sagittis pellentesque lectus, in elit congue arcu et volutpat,
            hymenaeos justo, bibendum a wisi sit eget vivamus morbi, mattis ac vulputate mattis nullam.
            Elit ipsum et tempus, elit ornare, nulla mollis adipiscing,
            id egestas nullam feugiat elit vel in. Vivamus dapibus dapibus magna torquent mi, 
            lacus elementum urna tempor cum mus felis, neque est semper arcu nulla. Sit adipiscing non,
            nibh urna. Risus id, eget suscipit nullam, ipsum ac ut arcu elit luctus,
            taciti elementum viverra felis libero. Nisl mattis sit duis nec pretium,
            et eget, vestibulum sit, ac eros mus ut, mi pellentesque eu. Qui est cras ac.</p>

    </body>
</html>
