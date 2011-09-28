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
            a[target]{
                text-decoration: overline underline;
            }
            a[target=_self]{
                text-decoration: none;
            }
            /*A "td[class~="hu"]" megegyezik a "td.hu"-val*/
            td[class~="hu"] {
                color: red;
            }
            /*Összefűzve, viszont már súlyosabb*/
            td.hu.first{
                color: navy;
            }
     
        </style>    
    </head>
    <body>
        <pre class="styles"><code><?php echo htmlspecialchars('a[target]{
    text-decoration: overline underline;
}
a[target=_self]{
    text-decoration: none;
}
/*A "td[class~="hu"]" megegyezik a "td.hu"-val*/
td[class~="hu"] {
    color: red;
}
/*Összefűzve, viszont már súlyosabb*/
td.hu.first{
    color: navy;
}') ?></code></pre>

        <table>
            <thead>
                <tr>
                    <th>Id
                    <th>English
                    <th>Magyar
            <tbody>
                <tr>
                    <td class="first id 1" id="first-id-1">1 
                    <td class="first en 1" id="en-1-first"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=to+determine" onClick="poptic(this.href); return false;">to determine </a>
                    <td class="first hu 1" id="hu-1-first">dönt, eldönt, elhatároz, határoz, meghatároz, megállapít, véget ér 
                <tr>
                    <td class="id 2" id="id-2">2 
                    <td class="en 2" id="en-2"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=to+deter" onClick="poptic(this.href); return false;">to deter </a>
                    <td class="hu 2" id="hu-2">elrettent elriaszt
                <tr>
                    <td class="id 3" id="id-3">3 
                    <td class="en 3" id="en-3"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=determination" onClick="poptic(this.href); return false;">determination </a>
                    <td class="hu 3" id="hu-3">döntés, elhatározás, meghatározás, szándék, véghatározat
                <tr>
                    <td class="id 4" id="id-4">4 
                    <td class="en 4" id="en-4"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=diverse" onClick="poptic(this.href); return false;">diverse </a>
                    <td class="hu 4" id="hu-4">eltérő, különböző, sokféle, változatos 
                <tr>
                    <td class="id 5" id="id-5">5 
                    <td class="en 5" id="en-5"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=submission" onClick="poptic(this.href); return false;">submission  </a>
                    <td class="hu 5" id="hu-5"> alávetés, alázatosság, behódolás, engedelmeskedés, engedelmesség, meghódolás
                <tr>
                    <td class="id 6" id="id-6">6 
                    <td class="en 6" id="en-6"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=demand" onClick="poptic(this.href); return false;">demand </a>
                    <td class="hu 6" id="hu-6">igényel, kér, követel, megkövetel
                <tr>
                    <td class="id 7" id="id-7">7 
                    <td class="en 7" id="en-7"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=on+demand" onClick="poptic(this.href); return false;">on demand </a>
                    <td class="hu 7" id="hu-7">igény, szerint 
                <tr>
                    <td class="id 8" id="id-8">8 
                    <td class="en 8" id="en-8"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=belong" onClick="poptic(this.href); return false;">belong </a>
                    <td class="hu 8" id="hu-8">tartozik valahova 
                <tr>
                    <td class="id 9" id="id-9">9 
                    <td class="en 9" id="en-9"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=to+use" onClick="poptic(this.href); return false;">to use </a>
                    <td class="hu 9" id="hu-9">alkalmaz, bánik, elfogyaszt, elhasznál, felhasznál, fogyaszt, használ, kimerít 
                <tr>
                    <td class="id 10" id="id-10">10 
                    <td class="en 10" id="en-10"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=submissive" onClick="poptic(this.href); return false;">submissive  </a>
                    <td class="hu 10" id="hu-10">alázatos, engedelmes, engedékeny 
                <tr>
                    <td class="id 11" id="id-11">11 
                    <td class="en 11" id="en-11"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=deception" onClick="poptic(this.href); return false;">deception  </a>
                    <td class="hu 11" id="hu-11">csalás, csalódás, fortély, tévedés 
                <tr>
                    <td class="id 12" id="id-12">12 
                    <td class="en 12" id="en-12"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=to+disguise" onClick="poptic(this.href); return false;">to disguise  </a>
                    <td class="hu 12" id="hu-12">elrejt, palástol 
                <tr>
                    <td class="id 13" id="id-13">13 
                    <td class="en 13" id="en-13"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=to+coalesce" onClick="poptic(this.href); return false;">to coalesce </a>
                    <td class="hu 13" id="hu-13">egyesül, koalícióra lép, szövetkezik, összenő 
                <tr>
                    <td class="id 14" id="id-14">14 
                    <td class="en 14" id="en-14"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=to+invoke" onClick="poptic(this.href); return false;">to invoke </a>
                    <td class="hu 14" id="hu-14"> esdekel, felidéz, segítségül hív 
                <tr>
                    <td class="id 15" id="last-id-15">15 
                    <td class="en 15" id="last-en-15"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=to+substitute" onClick="poptic(this.href); return false;">to substitute </a>
                    <td class="hu 15" id="hu-15-last">helyettesít 
        </table>
 <pre class="htmlCode"><code><?php echo htmlspecialchars('<table>
    <thead>
        <tr>
            <th>Id
            <th>English
            <th>Magyar
    <tbody>
        <tr>
            <td class="first id 1" id="first-id-1">1 
            <td class="first en 1" id="en-1-first"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=to+determine" onClick="poptic(this.href); return false;">to determine </a>
            <td class="first hu 1" id="hu-1-first">dönt, eldönt, elhatároz, határoz, meghatároz, megállapít, véget ér 
        <tr>
            <td class="id 2" id="id-2">2 
            <td class="en 2" id="en-2"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=to+deter" onClick="poptic(this.href); return false;">to deter </a>
            <td class="hu 2" id="hu-2">elrettent elriaszt
        <tr>
            <td class="id 3" id="id-3">3 
            <td class="en 3" id="en-3"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=determination" onClick="poptic(this.href); return false;">determination </a>
            <td class="hu 3" id="hu-3">döntés, elhatározás, meghatározás, szándék, véghatározat
        <tr>
            <td class="id 4" id="id-4">4 
            <td class="en 4" id="en-4"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=diverse" onClick="poptic(this.href); return false;">diverse </a>
            <td class="hu 4" id="hu-4">eltérő, különböző, sokféle, változatos 
        <tr>
            <td class="id 5" id="id-5">5 
            <td class="en 5" id="en-5"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=submission" onClick="poptic(this.href); return false;">submission  </a>
            <td class="hu 5" id="hu-5"> alávetés, alázatosság, behódolás, engedelmeskedés, engedelmesség, meghódolás
        <tr>
            <td class="id 6" id="id-6">6 
            <td class="en 6" id="en-6"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=demand" onClick="poptic(this.href); return false;">demand </a>
            <td class="hu 6" id="hu-6">igényel, kér, követel, megkövetel
        <tr>
            <td class="id 7" id="id-7">7 
            <td class="en 7" id="en-7"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=on+demand" onClick="poptic(this.href); return false;">on demand </a>
            <td class="hu 7" id="hu-7">igény, szerint 
        <tr>
            <td class="id 8" id="id-8">8 
            <td class="en 8" id="en-8"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=belong" onClick="poptic(this.href); return false;">belong </a>
            <td class="hu 8" id="hu-8">tartozik valahova 
        <tr>
            <td class="id 9" id="id-9">9 
            <td class="en 9" id="en-9"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=to+use" onClick="poptic(this.href); return false;">to use </a>
            <td class="hu 9" id="hu-9">alkalmaz, bánik, elfogyaszt, elhasznál, felhasznál, fogyaszt, használ, kimerít 
        <tr>
            <td class="id 10" id="id-10">10 
            <td class="en 10" id="en-10"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=submissive" onClick="poptic(this.href); return false;">submissive  </a>
            <td class="hu 10" id="hu-10">alázatos, engedelmes, engedékeny 
        <tr>
            <td class="id 11" id="id-11">11 
            <td class="en 11" id="en-11"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=deception" onClick="poptic(this.href); return false;">deception  </a>
            <td class="hu 11" id="hu-11">csalás, csalódás, fortély, tévedés 
        <tr>
            <td class="id 12" id="id-12">12 
            <td class="en 12" id="en-12"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=to+disguise" onClick="poptic(this.href); return false;">to disguise  </a>
            <td class="hu 12" id="hu-12">elrejt, palástol 
        <tr>
            <td class="id 13" id="id-13">13 
            <td class="en 13" id="en-13"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=to+coalesce" onClick="poptic(this.href); return false;">to coalesce </a>
            <td class="hu 13" id="hu-13">egyesül, koalícióra lép, szövetkezik, összenő 
        <tr>
            <td class="id 14" id="id-14">14 
            <td class="en 14" id="en-14"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=to+invoke" onClick="poptic(this.href); return false;">to invoke </a>
            <td class="hu 14" id="hu-14"> esdekel, felidéz, segítségül hív 
        <tr>
            <td class="id 15" id="last-id-15">15 
            <td class="en 15" id="last-en-15"><a target="_self"  href="http://szotar.sztaki.hu/dict_search.php?O=HUN&W=to+substitute" onClick="poptic(this.href); return false;">to substitute </a>
            <td class="hu 15" id="hu-15-last">helyettesít 
</table>') ?></code></pre>
    </body>
</html>
