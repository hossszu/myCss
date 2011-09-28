<?php
include 'header.php';
include 'left_menu.php';
?>
<h1>Selectors, Kiválaszók!</h1>
<p>
    Véleményem szerint, a css "helyes" használatának, vagy inkább a használatának a legmegfelelőbb modjához vezető út, a kiválaszók
    beható ismerete. Szerencsére, a css faék egyszerűségű szintaxszisa miatt ez nem lessz túl nehéz. 
</p>
<p>

    A <strong>kiválaszók</strong>, vagy <strong>szelektorok</strong>, angolul "<strong>Selectors</strong>",
    segítségével választjuk ki, a kívánt <strong>html</strong> elemet, amire a stílust kívánjuk alkalmazni. 
    Ez lehet egy konkrét elem, vagy egy elem típus, vagy akár az összes elem.
    Tehát, a stíluslapon, minden szabályhoz, tartozik egy szelektor, és utána kapcsos zárójelek között,
    a <strong>deklarációs szakasz</strong>. Persze egy deklarációs szakaszhoz, tarozhat több 
    (illetve, megelőzheti azt) szelektor is, ilyenkor azokat vesszővel kell elválasztani.
</p>
<p>
    A <strong>deklaráció</strong> maga pedig egy <strong>tulajdonság : érték</strong> 
    párosból áll, amit mint itt is, kettőspontal kell elválasztani.
    Amennyiben a deklarációs szakasz több deklarációból áll, ugy azokat pontosvessző zárja le.
    A pntosság kedvéért, ha csak egy deklaráció van, akkor azt <strong>nem kötelezö</strong> lezárni, illetve, 
    több deklaráció esetén, az utolsó maradhat nyitva. Személy szerint tanácsolom őket <strong>minden 
        esetben</strong> lezárni, mivel ha késöbb hozzá kívánunk adni még valamit, akkor könnyen el tudjuk felejteni.
</p>
<pre class=styles><code><?php echo htmlspecialchars('h1,
h2,
h3,
h4{color:red;font-size:16px;}') ?></code></pre>
Vagy:
<pre class=styles><code><?php echo htmlspecialchars('a, a:hover, a:visited, a:active{
  text-decoration: overline;
  color:navy;
  font-style: italic;
}') ?></code></pre>
<br>
<table>
    <tr>
        <td>-
        <td>Minta
        <td>Jelentés(Magyar)
        <td>Meaning(English)
    <tr>
        <td>1
        <td>*
        <td><a href=#one>bármely elem</a>
        <td>any element
    <tr>
        <td>2
        <td>E
        <td><a href=#two>egy E típusú elem</a>
        <td>an element of type E
    <tr>
        <td>3
        <td>E[foo]
        <td><a href=#tree>egy E típusú elem, aminek az attributuma: "foo"</a>
        <td>an E element with a "foo" attribute
    <tr>
        <td>4
        <td>E[foo="bar"]
        <td><a href=#four>egy E típusú elem,  aminek az attributuma: "foo", 
                és az értéke: "bar"</a>
        <td>an E element whose "foo" attribute value is exactly
            equal to "bar"
    <tr>
        <td>5
        <td>E[foo~="bar"]
        <td><a href=#five>egy E típusú elem,  aminek az attributuma: "foo", 
                és az értékek szoközzel vannak elválasztva, 
                mellyek közül, az egyik: "bar"</a>
        <td>an E element whose "foo" attribute value is a list of
            whitespace-separated values, one of which is exactly equal to "bar"
    <tr>
        <td>6
        <td>E[foo^="bar"]
        <td><a href=#six>egy E típusú elem,  aminek az attributuma: "foo", és az értéke,
                "bar"-ral kezdődik</a>
        <td>an E element whose "foo" attribute value begins
            exactly with the string "bar"
    <tr>
        <td>7
        <td>E[foo$="bar"]
        <td><a href=#seven>egy E típusú elem,  aminek az attributuma: "foo", és az értéke,
                "bar"-ra végződik</a>
        <td>an E element whose "foo" attribute value ends exactly
            with the string "bar"
    <tr>
        <td>8
        <td>E[foo*="bar"]
        <td><a href=#eight>egy E típusú elem,  aminek az attributuma:
                "foo", és az értéke, tartalmazza a "bar"-t</a>
        <td>an E element whose "foo" attribute value contains the
            substring "bar"
    <tr>
        <td>9
        <td>E[foo|="en"]
        <td><a href=#nine>egy E típusú elem,  aminek az attributuma:
                "foo", és a felsorolt értékek, kötőjellel vannak elválasztva, 
                mellyek közül, valamelyik a kötőjel elött, "en"</a>
        <td>an E element whose "foo" attribute has a
            hyphen-separated list of values beginning (from the left) with "en"
    <tr>
        <td>10
        <td>E:root
        <td><a href=#ten>E elem, a dokumentum gyökere(a html 4 ben mindig a "html",
                csak magasabb a "specificity")</a>
        <td>an E element, root of the document
    <tr>
        <td>11
        <td>E:nth-child(n)
        <td><a href=#eleven>E szülő elem, n. leszármazottja </a>
        <td>an E element, the n-th child of its parent
    <tr>
        <td>12
        <td>E:nth-last-child(n)
        <td><a href=#twelve>Mint fentebb, csak hátulról számítva</a>
        <td>an E element, the n-th child of its parent, counting
            from the last one
    <tr>
        <td>13
        <td>E:nth-of-type(n)
        <td><a href=#thirteen>E elem, n. testvére</a>
        <td>an E element, the n-th sibling of its type
    <tr>
        <td>14
        <td>E:nth-last-of-type(n)
        <td><a href=#fourteen>Mint fentebb, csak hátulról számítva</a>
        <td>an E element, the n-th sibling of its type, counting
            from the last one
    <tr>
        <td>15
        <td>E:first-child
        <td><a href=#fifteen>E elem, első leszármazottja</a>
        <td>an E element, first child of its parent
    <tr>
        <td>16
        <td>E:last-child
        <td><a href=#sixteen>E elem, utolsó leszármazottja</a>
        <td>an E element, last child of its parent
    <tr>
        <td>17
        <td>E:first-of-type
        <td><a href=#seventeen>E elem, első testvére</a>
        <td>an E element, first sibling of its type
    <tr>
        <td>18
        <td>E:last-of-type
        <td><a href=#eighteen>E elem, utolsó testvére</a>
        <td>an E element, last sibling of its type
    <tr>
        <td>19
        <td>E:only-child
        <td><a href=#nineteen>E elem, egyedüli leszármazottja</a>
        <td>an E element, only child of its parent
    <tr>
        <td>20
        <td>E:only-of-type
        <td><a href=#twenty>E elem, egyedüli testvére</a> 
        <td>an E element, only sibling of its type
    <tr>
        <td>21
        <td>E:empty
        <td><a href=#twentyone>E elem, leszármazott nélkül (beleértve a text nódot is)</a>
        <td>an E element that has no children (including text
            nodes)
    <tr>
        <td>22
        <td>E:link<br>
            E:visited
        <td><a href=#twentytwo>E elem(:link), még nem látogatott,(:visited)már látogatott</a>
        <td>an E element being the source anchor of a hyperlink of
            which the target is not yet visited (:link) or already visited
            (:visited)
    <tr>
        <td>23
        <td>E:active<br>
            E:hover<br>
            E:focus
        <td><a href=#twentythree>egy E elem, különböző akció közben</a>
        <td>an E element during certain user actions
    <tr>
        <td>24
        <td>E:target
        <td><a href=#twentyfour>egy E elem, amire egy aktív belső hivatkozás mutat</a>
        <td>an E element being the target of the referring URI
    <tr>
        <td>25
        <td>E:lang(fr)
        <td><a href=#twentyfive>egy E típusú elem, az adott nyelven</a>
        <td>an element of type E in language "fr" (the document
            language specifies how language is determined)
    <tr>
        <td>26
        <td>E:enabled<br>
            E:disabled
        <td><a href=#twentysix>felhasználói interfész, ami engedélyezett, vagy sem 
                (rádio gomb, jelölőnégyzet)</a>
        <td>a user interface element E which is enabled or
            disabled
    <tr>
        <td>27
        <td>E:checked
        <td><a href=#twentyseven>mint fentebb, csak azt vizsgálja, hogy ki van e jelölve</a>
        <td>a user interface element E which is
            checked (for instance a
            radio-button or checkbox)
    <tr>
        <td>28
        <td>E::first-line
        <td><a href=#twentyeight>az első formázandó sora, az E elemnek</a>
        <td>the first formatted line of an E element
    <tr>
        <td>29
        <td>E::first-letter
        <td><a href=#twentynine>az első formázandó betűje, az E elemnek</a>
        <td>the first formatted letter of an E element
    <tr>
        <td>30
        <td>E::before
        <td><a href=#thirty>generált tartalom, az E elem előtt</a>
        <td>generated content before an E element
    <tr>
        <td>31
        <td>E::after
        <td><a href=#thirtyone>generált tartalom, az E elem után</a>
        <td>generated content after an E element
    <tr>
        <td>32
        <td>E.warning
        <td><a href=#thirtytwo>egy E elem, aminek a class atributuma: warning</a>
        <td>an E element whose class is "warning" (the document
            language specifies how class is determined).
    <tr>
        <td>33
        <td>E#myid
        <td><a href=#thirtytree>egy E elem, aminek az id atributuma: myid</a>
        <td>an E element with ID equal to "myid".
    <tr>
        <td>34
        <td>E:not(s)
        <td><a href=#thirtyfour>egy E elem, amire nem igaz ("e:not(:hover)")</a>
        <td>an E element that does not match simple selector s
    <tr>
        <td>35
        <td>E F
        <td><a href=#thirtyfive>egy F elem, ami leszármazottja az E elemnek</a>
        <td>an F element descendant of an E element
    <tr>
        <td>36
        <td>E &gt; F
        <td><a href=#thirtysix>egy F elem, ami gyermeke az E elemnek</a>
        <td>an F element child of an E element
    <tr>
        <td>37
        <td>E + F
        <td><a href=#thirtyseven>egy F elem, ami közvetlen leszármazottja az E elemnek</a>
        <td>an F element immediately preceded by an E element
    <tr>
        <td>38
        <td>E ~ F
        <td><a href=#thirtyeight>egy F elem, ami leszármazottja az E elemnek, de nem 
                feltétlenül közvetlenül</a>
        <td>an F element preceded by an E element
</table>
<br>
<br>
<h2>1.<a id=one><code>*</code></a> <a href="#">Univerzális szelektor(Universal selector)</a></h2>
<p>Túl sok magyarázatot nem igényel, egyszerűen minden elemre vonatkozik.
    Rengetegszer látam már használni, de személy szerint nem javaslom, feleslegesen sok terhet ró a böngészőre 
    , bár "debug" célokra kétség kívül jó.
</p>
<pre class=styles><code>* {
        margin:0;
        padding:0;
}</code></pre>

<p>Használható még, mint univerzális "child" szelektor.</p>
<p>Tényleg ne használd túl gyakran, vagy inkább soka.</p>
<pre class=styles><code>#id * {
        margin:0;
        padding:0;
}</code></pre>

<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>Minden böngeszővel kompatibilis.</p>

<hr />

<h2>2.<a id=two><code>E</code></a> <a href="#">Típus szelektor(Type selector)</a></h2>
<p>Kiválaszt minden "E" tipusú elemet, a példában, a <code>"p"</code>, a <code>"div"</code> 
    és  a <code>"span"</code> elemeket.</p>

<pre class=styles><code>p, div, span {
       color: red;
}</code></pre>
<h4>Bemutatva:</h4>
<p>CSS 1</p>
<h4>Kompatibilitás:</h4>
<p>Minden böngeszővel kompatibilis.</p>

<hr />

<h2>3.<a id=tree><code>E[foo]</code></a><a href="#"> Tulajdonság alapú kiválasztás(Attribute selector)</a></h2>
<p>Egy E típusú elem, aminek <strong>van</strong> "foo" attributuma, a példában,    
    kiválaszt minden olyan "a" elemet, aminek van "target" attributuma.</p>
<pre class=styles><code><?php echo htmlspecialchars('a[target]{
  text-decoration: overline underline;
}') ?></code></pre>
<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>
<a class=example href="demos/cssDemos/cssSelectors/example3.php" >Demo 3</a>
<hr />

<h2>4.<a id=four><code>E[foo="bar"]</code></a><a href="#">Attribute selector</a></h2>
<p>Egy E típusú elem, aminek az attributuma: "foo", a példában,    
    kiválaszt minden olyan "a" elemet, linket, aminek van "href" attributuma, 
    ami nem is túl ritka a linkeknél, és az értéke "google.com".</p>
<pre class=styles><code><?php echo htmlspecialchars('a[href="google.com"]{
  cursor: progress;
}') ?></code></pre>
<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>
<a class=example href="demos/cssDemos/cssSelectors/example4.php" >Demo 4</a>

<hr />

<h2>5.<a id=five><code>X[foo~="bar"]</code></a><a href="#">Attribute selector</a></h2>

<p>Kiválaszt minden olyan X tipusú elemet, aminek az attributuma "foo", és a szóközzel elválasztott értékei közül az egyik "bar".<br>
    (<strong>A css specifikáció szerint ugyan megengedett, de határozottan nem előírásos!</strong>)</p>
<blockquote class="cssSelector">
    <p><strong>Note:</strong> If an element has multiple class attributes, their values must be concatenated with spaces between the values
before searching for the class. As of this time the working group is not aware of any manner in
which this situation can be reached, however, so this behavior is explicitly non-normative in this specification. 
    </p>
<cite>Idézet: <a href="http://www.w3.org/TR/css3-selectors/#class-html">www.w3.org</a></cite></blockquote>

<pre class=styles><code>a[target]{
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
}</code></pre>
<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>

<a class=example href="demos/cssDemos/cssSelectors/example5.php" >Demo 5</a>

<hr />

<h2>6.<a id=six><code>E[foo^="bar"] </code></a><a href="#">Attribute selector</a></h2>
<p>Kiválaszt minden olyan E tipusú elemet, aminek az attributuma "foo", és annak az értéke "bar"-ral kezdődik.</p>
<pre class=styles><code>td[class^="id"] {
text-align:center;
padding: 2px;
border:solid 1px #666;
}</code></pre>
<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>

<a class=example href="demos/cssDemos/cssSelectors/example6.php" >Demo 6</a>

<hr />

<h2>7.<a id=seven><code>E[foo$="bar"] </code></a><a href="#">Attribute selector</a></h2>
<p>Kiválaszt minden olyan E tipusú elemet, aminek az attributuma "foo", és annak az értéke "bar"-ra végződik.</p>
<pre class=styles><code>td[id$="last"] {
    border-bottom:none;
}</code></pre>
<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>

<a class=example href="demos/cssDemos/cssSelectors/example7.php" >Demo 7</a>

<hr />

<h2>8.<a id=eight><code>E[foo*="bar"]  </code></a><a href="#">Attribute selector</a></h2>
<p>Kiválaszt minden olyan E tipusú elemet, aminek az attributuma "foo", és annak az értékében szerepel a "bar".</p>
<pre class=styles><code>td[foo*="bar"] {
    border-bottom:none;
}</code></pre>
<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>

<a class=example href="demos/cssDemos/cssSelectors/example8.php" >Demo 8</a>

<hr />

<h2>9.<a id=nine><code>E[foo|="en"]  </code></a><a href="#">Attribute selector</a></h2>
<p>Kiválaszt minden olyan X tipusú elemet, aminek az attributuma "foo", és az értéke "en", "en-" vagy "en-*".
</p>
<pre class=styles><code>li[class|="en"] {
    color:#2b81af;
    border-left:solid 2px;
    padding-left: 15px;
    list-style: circle;
}</code></pre>

<pre class=htmlCode><code><?php echo htmlspecialchars('<ul>
    <li class="en">American English</li><!--Kiválasztja-->
    <li class="en-">British English</li><!--Kiválasztja-->
    <li class="en-international or other dialect">Other dialect</li><!--Kiválasztja-->
    <li class="english">English</li><!--Nem választja ki-->
    <li class="US-en">US English</li><!--Nem választja ki-->
</ul>')?></code></pre>



<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>

<a class=example href="demos/cssDemos/cssSelectors/example9.php" >Demo 9</a>

<hr />

<h2>10.<a id=ten><code>E:root</code></a><a href="#">Áll osztály kiválasztó(pseudo class selector)</a></h2>
<p>Nem egy <strong>"tetszőleges"</strong> elmre vonatkozik
    hanem a <strong>"dokumentum törzsre"</strong>. Ekvivalens a <strong>html</strong> elemmel, de nagyobb a súlya.
</p>
<p>
    Csak önmagában, <strong>":root"</strong>, vagy a <strong>"html"</strong> elem utótagjaként 
    <strong>"html:root"</strong> használható!
</p>
<pre class=styles><code><?php echo htmlspecialchars(':root{
    background-color:silver;
} 
html{
    background-color: red;
}') ?></code></pre>
<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>

<a class=example href="demos/cssDemos/cssSelectors/example10.php" >Demo 10</a>
<hr />

<h2>11.<a id=eleven><code>E:nth-child(n) </code></a><a href="#">pseudo class selector</a></h2>
<p>Egy E elem, a paraméterként megadott érték szerinti elemét választja ki.
    A paraméter <strong>integer</strong> bázisú, de megengedett még az <strong>"odd"</strong> ami a páratlan elemeket, és az 
    <strong>"even"</strong>, ami a páros elemeket választja ki.
    Figyeljunk oda, hogy a számozás <strong>nem nullától</strong>, hanem 1 től indul!
</p>
<pre class=styles><code><?php echo htmlspecialchars('/*A második elemet választja ki*/
tr:nth-child(2){
    background-color: lightblue;
}
/*Minden harmadik elemet,*/
tr:nth-child(3n){
    background-color: lightcoral;
}
/*Szintén minden harmadik elemet, de a negyekik elemtől kezdve*/
tr:nth-child(3n+4){
    background-color: lightgoldenrodyellow;
}
/*Ez minden 5. elemet választja ki, de a -3. elemtől kezdve, tehát az első
/*kiválasztott elem a 3. lesz, majd a 8. 12. és így tovább.*/
tr:nth-child(5n-3){
    border:solid 1px blue;
}
/*Ugyan az mint a nth-child(10), a tizedik elemet választja ki*/
tr:nth-child(+10){
    background-color: red;
}
/*A 11. elem utan mindet kiválasztja*/
tr:nth-child(n+11){
    border:solid 1px blue;
}
/*A 11. elemig mindet kiválasztja*/
tr:nth-child(-n+11){
    border:solid 1px blue;
}') ?></code></pre>
<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>

<a class=example href="demos/cssDemos/cssSelectors/example11.php" >Demo 11</a>

<hr />

<h2>12.<a id=twelve><code>E:nth-last-child(n) </code></a><a href="#">pseudo class selector</a></h2>
<p>Ugyan az, mint az <strong>E:nth-child(n)</strong>, csak hátulról kezdődik a számozás.
</p>
<pre class=styles><code><?php echo htmlspecialchars('/*Hátulról a második elemet választja ki*/
tr:nth-last-child(2){
    background-color: lightblue;
}
/*Hátulról számítva a szülő minden harmadik gyermekét választja ki,*/
tr:nth-last-child(3n){
    background-color: lightcoral;
}
/*Hátulról számítva a szülő minden harmadik gyermekét választja ki,
/*de hátulról a negyedik elemtől kezdve*/
tr:nth-last-child(3n+4){
    background-color: lightgoldenrodyellow;
}
/*Ugyan az mint a nth-last-child(10).*/
tr:nth-last-child(+10){
    background-color: red;
}
/*Hátulról a 11. elemtől, az utolsóig mindet kiválasztja*/
tr:nth-last-child(n+11){
    border:solid 1px blue;
}') ?></code></pre>

<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>
<a class=example href="demos/cssDemos/cssSelectors/example12.php" >Demo 12</a>
<hr />

<h2>13.<a id=thirteen><code>E:nth-of-type(n) </code></a><a href="#">pseudo class selector</a></h2>
<p>Ugyan az, mint az <strong>E:nth-child(n)</strong>, csak nem egy elem leszármazottját,
    hanem a testvérét választja ki.
</p>
<pre class=styles><code><?php echo htmlspecialchars('td:nth-of-type(odd){
    background-color: lightblue;          
}
td:nth-of-type(even){
    border: solid 1px red;         
}') ?></code></pre>

<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>
<a class=example href="demos/cssDemos/cssSelectors/example13.php" >Demo 13</a>


<hr />

<h2>14.<a id=fourteen><code>E:nth-last-of-type(n)</code></a><a href="#">pseudo class selector</a></h2>
<p>Ugyan az, mint az <strong>E:nth-of-type(n) </strong>, csak nem egy elem leszármazottját,
    hanem a testvérét választja ki, de a számolást hátulról kezdi.
</p>
<pre class=styles><code><?php echo htmlspecialchars('td:nth-last-of-type(even){
    background-color: lightblue;          
}
td:nth-of-type(even){
    border: solid 1px red;         
}') ?></code></pre>

<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>

<hr />

<h2>15.<a id=fifteen><code>E:first-child </code></a><a href="#">pseudo class selector</a></h2>
<p>Egy E elem első leszármazottját választja ki.
</p>
<pre class=styles><code><?php echo htmlspecialchars('tr:first-child{
padding: 5px;
font-size: 18px;
font-weight: bold;
font-style: italic;
color: goldenrod;
}') ?></code></pre>

<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>
<a class=example href="demos/cssDemos/cssSelectors/example15.php" >Demo 15</a>

<hr />

<h2>16.<a id=sixteen><code>E:last-child </code></a><a href="#">pseudo class selector</a></h2>
<p>Egy E elem utolsó leszármazottját választja ki.
</p>
<pre class=styles><code><?php echo htmlspecialchars('tr:last-child{
padding: 5px;
font-size: 18px;
font-weight: bold;
font-style: italic;
color: goldenrod;
}') ?></code></pre>

<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>


<hr />

<h2>17.<a id=seventeen><code>E:first-of-type</code></a><a href="#">pseudo class selector</a></h2>
<p>Egy E elem testvérét választja ki.
</p>
<pre class=styles><code><?php echo htmlspecialchars(':root{
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

<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>
<a class=example href="demos/cssDemos/cssSelectors/example17.php" >Demo 17</a>

<hr />

<h2>18.<a id=eighteen><code>E:last-of-type</code></a><a href="#">seudo class selector</a>p</h2>
<p>Egy E elem utolsó testvérét választja ki.
</p>
<pre class=styles><code><?php echo htmlspecialchars(':root{
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
    border-right: solid 1px white;
}
ul li:first-of-type{
    color: yellowgreen;
}
ul li:last-of-type{
    border-right: none;
}') ?></code></pre>

<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>
<a class=example href="demos/cssDemos/cssSelectors/example18.php" >Demo 18</a>

<hr />

<h2>19.<a id=nineteen><code>E:only-child</code></a><a href="#">pseudo class selector</a></h2>
<p>Akkor választja ki E elemet, ha csak egy gyermek elemet tartalmaz.
</p>
<pre class=styles><code><?php echo htmlspecialchars(':root{
    background-color: #333;
}
div{
    width:860px;
    background-color: #191919;               
    margin: auto;             
}
ul li{
    list-style: none;
    color: white;
    padding: 10px 20px;            
}
ul li:first-of-type{
    border-left: none;
    color:goldenrod;
}
ul li:only-child{
    color:red;
}') ?></code></pre>

<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>
<a class=example href="demos/cssDemos/cssSelectors/example19.php" >Demo 19</a>

<hr />

<h2>20.<a id=twenty><code>E:only-of-type</code></a><a href="#">pseudo class selector</a></h2>
<p>Akkor választja ki E elemet, ha nincs több testvér eleme.
</p>
<pre class=styles><code><?php echo htmlspecialchars(':root{
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

<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>
<a class=example href="demos/cssDemos/cssSelectors/example20.php" >Demo 20</a>

<hr />

<h2>21.<a id=twentyone><code>E:only</code></a><a href="#">pseudo class selector</a></h2>
<p>E elem, leszármazott nélkül (beleértve a text nódot is)
</p>
<pre class=styles><code><?php echo htmlspecialchars(':root{
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
p:empty{
    color: steelblue;
}
p:empty:before{
    content: "Ez itt egy tök üres paragraph, amit mégis látsz, \
        az egy css szemfényvesztés! Viszont a legjobb hír az egészben, \
        hogy a szöveg színe, mégis acélkék"
}') ?></code></pre>

<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>
<a class=example href="demos/cssDemos/cssSelectors/example21.php" >Demo 21</a>

<hr />

<h2>22.<a id=twentytwo><code>E:link, E:visited, E:active, E:hover, E:focus</code></a><a href="#">pseudo class selector</a></h2>
<p>Gondolom ebbe nem kell részletesen belemenni, mindenki látott már ilyet.
</p>

<h4>Bemutatva:</h4>
<p>CSS 1</p>
<h4>Kompatibilitás:</h4>
<p>Minden böngészővel kompatibilis. </p>

<hr />

<h2>24.<a id=twentyfour><code>E:target</code></a><a href="#">pseudo class selector</a></h2>
<p>A target szelektorral azt a belépési pontot lehet dísziteni, amire már hivatkozva lett.
</p>
<pre class=styles><code><?php echo htmlspecialchars(':target{
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
<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>

<a class=example href="demos/cssDemos/cssSelectors/example24.php" >Demo 24</a>

<hr />

<h2>25.<a id=twentyfive><code>E:lang(fr)</code></a><a href="#">pseudo class selector</a></h2>
<p>Kiválasztja E elemet, ha a <strong>"lang"</strong> attributumának az értéke <strong>"fr"</strong></p>

<pre class=styles><code><?php echo htmlspecialchars(':lang(en) { 
    quotes: \'"\' \'"\'  "\'"  "\'"; 
    }
    :lang(fr) { 
    quotes: "<<" ">>" "<" ">"; 
}')?></code></pre>
<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>

<a class=example href="demos/cssDemos/cssSelectors/example25.php" >Demo 25</a>

<hr />

<h2>26.<a id=twentysix><code>E:enabled, E:disabled, E:checked </code></a><a href="#">pseudo class selector</a></h2>
<p>Az <strong>:enabled</strong> és a <strong>:disabled</strong> <strong>pseudo</strong> osztályok</p>
<p>Gondolom ez sem kíván túl sok magyarázatot, az enabled azokat a beviteli mezőket, gombokat
választja ki, amelyeken nincs tiltva a felhasználói aktivitás. Magyarul ki lehet jelölni, rá lehet vinni a "fokuszt" kattintani lehet rá, stb.</p>
<p>Míg a disabled, ennek az ellenkezője.</p>
<p>A checked azokra a radigombokra, vagy jelölőnégyzetekre, "checkbox" vonatkozik, amelyek ki vannak jelölve.</p>
<p></p>

<h4>Bemutatva:</h4>
<p>CSS 2</p>
<h4>Kompatibilitás:</h4>
<p>IE7+ </p>

<a class=example href="demos/cssDemos/cssSelectors/example26.php" >Demo 26</a>

<hr />

<?php
include 'footer.php';