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
:lang(en) { 
    quotes: '"' '"'  "'"  "'"; 
    }
    :lang(fr) { 
    quotes: "<<" ">>" "<" ">"; 
}
        </style>    
    </head>
    <body>
<pre class="styles"><code>:lang(en) { 
    quotes: '"' '"'  "'"  "'"; 
    }
    :lang(fr) { 
    quotes: "<<" ">>" "<" ">"; 
}</code></pre>
<p>Ez a szelektor akkor jöhet jól, ha többnyelvű oldalt kell készítenünk, ami tele van idézetekkel
    mindkét nyelven.</p>
<p>
    Míg a francia nyelvterületen az idézetek jelölésére a <q lang=fr>kakcsacsőr</q> terjedt el, addig
az angolban, az <q lang=en>idézőjel</q>.
</p>
    

 <pre class="htmlCode"><code><?php echo htmlspecialchars('<p>
    Ez a szelektor akkor jöhet jól, ha többnyelvű oldalt kell készítenünk, ami tele van idézetekkel
    mindkét nyelven.
</p>
<p>
    Míg a francia nyelvterületen az idézetek jelölésére a <q lang=fr>kacsacsőr</q> terjedt el, addig
    az angolban, az <q lang=en>idézőjel</q>.
</p>') ?></code></pre>
    </body>
</html>
