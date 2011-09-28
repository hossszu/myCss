<?php

include 'header.php';
include 'left_menu.php';
?>
<h1>A Css röl kicsit bövebben</h1>
<blockquote class="cssSelector">
<h2>Út a fevilágosodás felé.</h2>
<p>
Egy sötét, kietlen út porában szétszórva hevernek régi böngészőspecifikus tag-ek roncsai, összeférhetetlen DOMok és nem működő CSS támogatások.
</p>
<p>
Pedig meg kell tisztítanunk elménket a múlt beidegződéseitől. A Web felvilágosodását elértük, hála olyan emberek faradhatatlan munkájának,
mint a <a href="http://www.w3.org/">W3C</a>, a <a href="http://www.webstandards.org/">WaSP</a> és jelentősebb böngészők alkotói.
</p>
<cite>Idézet: <a href="http://www.csszengarden.com/tr/magyar/">csszengarden.com</a></cite></blockquote>
<article class="thumbnail">
  <figure>  
   <img src="images/cssSelector.jpg" alt="thumbnail image cssselector">
   </figure>
   <h1>Css szelektorok</h1>
   <time pubdate="pubdate">Kelt: 2011-09-28</time>
   <p>
   A kiválaszók, vagy szelektorok, angolul "Selectors", segítségével választjuk ki, a kívánt html elemet, amire a stílust kívánjuk alkalmazni. </p>
   <span><a href="cssSelectors.php">Tovább >></a></span>
</article>
<br></br>
<article class="thumbnail">
  <figure>  
   <img src="images/cssSelector.jpg" alt="thumbnail image cssselector">
   </figure>
   <h1>Web fonts @font-face</h1>
   <time pubdate="pubdate">Kelt: 2011-09-28</time>
   <p>
   A web-font forradalom kitörése óta várunk valami böngészőfüggetlen megoldásra
   ami végre segít kitörni a "Helvetica, Verdana, sans-serif" nyújtotta unalomból.</p>
   <span><a href="cssFontFace.php">Tovább >></a></span>
   
</article>
<br></br>
<article class="thumbnail">
<ol>
<li><strong>Property:</strong> The style that you are applying to a selector, e.g. <code>border</code>. </li>
<li><strong>Value: </strong>The value that the property can have, e.g. <code>1px</code>. </li>

<li><strong>Keyword:</strong> A word that is defined within the <span class="caps">CSS</span> specs and hence must never appear within quotes when used. E.g. <code>red</code>, <code>solid</code>, <code>dotted</code>.</li>
<li>
<p><strong>Length Units:</strong>Values can be declared in units (e.g., 1px, 2%). <a href="http://twitter.com/#!/nimbuin/status/28960734159">This summarizes major units you should be concerned with</a>.</p>

</li>
<li><strong>Functional Notation:</strong> Any value that is specified as a function (an identifier followed by <code>()</code>). Mainly used to denote colors, URIs, attributes, and transforms: e.g. <code>rgba(0, 0, 0, 0.5)</code>, <code>url('im.png')</code>, <code>attr('href')</code>, <code>scale(20)</code>. Here are <a href="http://www.w3.org/TR/css3-values/#functional">some more details on functional notation</a>.</li>

<li>
<p><strong>Declaration:</strong> The set of property names and values like&nbsp;so:</p>
<pre>background: red;</pre></li>
<li>
<p><strong>Declaration Block:</strong> A set of declarations within <code>{}</code>,&nbsp;e.g.</p>
<pre>{
      clear: both;
      color: sky; 
    }</pre></li>

<li>
<p><strong>Rule or Rule Set:</strong> Selector(s) followed by a declaration block.&nbsp;E.g.</p>
<pre>#lovelyweather {
    	clear: both;
    	color: skyblue;
    }  
    </pre><p>This <a href="http://nimbupani.com/demo/css-vocab.html">demo</a> shows what each part of a ruleset means. Hover on each of the terms to see what they mean. <b><span class="caps">UPDATE</span>:</b> <a href="http://foolproof.me/post/9544204125/learning-the-css-vocabulary">Ville</a> has a <a href="http://pumpula.net/p/csseditori/csse-rule-inspector/">much better demo</a>. </p>

</li>
<li>
<p><strong>Selector</strong> The way you declare which elements the styles should apply to. <code>#lovelyweather</code> in the above example is a selector. There are <a href="http://www.w3.org/TR/css3-selectors/">different kinds of selectors</a>:</p>
<ul>
<li><strong>Class:</strong> The most commonly used selector. E.g. &#8220;.cloudy&#8221; to select an element with classname cloudy (e.g. &#8216;<br />

<div class=cloudy></div>
<p>&#8217; There can be more than 1 element with the same&nbsp;classname. </p></li>
<li><strong><span class="caps">ID</span>:</strong> Use this sparingly. You cannot reuse an <span class="caps">ID</span> within the same page and used only to identify an element uniquely. E.g. <code>&lt;div id=lovelyweather&gt;&lt;/div&gt;</code></li>
<li><strong>Attribute Selector:</strong> If you use any attribute other than class or id to identify an element in a stylesheet, you would be using Attribute Selectors. You can also do basic pattern matching within an attribute selector (so if you would like to do basic pattern matching for selectors using class or <span class="caps">ID</span> attributes, you would want to use attribute&nbsp;selectors).</li>

<li><strong>Pseudo-Classes: </strong> Classes that are applied to elements based on information that is not present in the markup, e.g. <code>:first-child</code> or <code>:last-child</code>. Do note that the selectors are parsed from right to left (<a href="http://nimbupani.com/demo/css-vocab.html#pseudo-classes">see the demo</a>). You cannot use <code>section article:first-child</code> to select the first occurrence of <code>article</code>, if the first child of <code>section</code> is <code>h1</code> and not <code>article</code>. Likewise with the <code>:nth-child</code>, and <code>:last-child</code>&nbsp;pseudo-classes.  </li>

<li><strong>Pseudo-Elements</strong> Pseudo-elements differ from Pseudo-Classes in that they actually create an element in the document tree. This is almost the first instance of <span class="caps">CSS</span> modifying the <span class="caps">HTML</span> document tree. You should ideally use pseudo-elements with &#8220;::&#8221; instead of &#8220;:&#8221; (but most browsers accept &#8220;:&#8221; notation for <span class="caps">CSS</span> 2.1 pseudo-elements). Pseudo-elements are: <code>::first-line</code>, <code>::first-letter</code>, <code>::before</code>, <code>::after</code> (<a href="http://nimbupani.com/demo/css-vocab.html#pseudo-elements">See the demo for how pseudo-elements work</a>). </li>

</ul>
</li>
<li>
<p><strong>Combinators:</strong> The selection of an element based on its occurrence in relation to another element (chosen by the choice of combinator: whitespace, <code>&gt;</code>, <code>+</code>, or <code>~</code>). You can&nbsp;have:</p>
<ul>
<li><strong>Descendant Combinator:</strong> This is the most common usage, e.g. <code>#lovelyweather h1</code>.</li>

<li><strong>Child Combinator:</strong> Select an element if it is a direct child of another element (and not a grandchild of that&nbsp;element). </li>
<li><strong>Adjacent Sibling Combinator: </strong>The element that is immediately adjacent to another&nbsp;element. </li>
<li><strong>General Sibling Combinator:</strong> The element that is adjacent, but not immediately to another&nbsp;element. </li>
</ul>
<p><a href="http://nimbupani.com/demo/css-vocab.html#combinators">See demo for all these&nbsp;combinators.</a></p>

</li>
<li><strong>At-Rules:</strong> Rules that begin with the <code>@</code> character, e.g. <a href="http://www.w3.org/TR/2005/WD-css3-cascade-20051215/#import">@import</a>, <a href="http://www.w3.org/TR/css3-page/#page-box-page-rule">@page</a>, <a href="http://www.w3.org/TR/css3-mediaqueries/#background">@media</a>, and <a href="http://www.w3.org/TR/2009/WD-css3-fonts-20090618/#the-font-face-rule">@font-face</a>.</li>
<li><strong>Media Features:</strong> With media queries, you can target the styles depending on the feature of that particular medium. A popular use of a media feature is the <code>min-width</code> and <code>max-width</code> to detect iOS&nbsp;devices. </li>

<li><strong>Vendor-specific Extension: </strong>Exactly what it states. They provide functionality specific to that particular vendor (i.e. the browser). They do not always necessarily represent a feature declared in a standard. Peter Beverloo maintains an <a href="http://peter.sh/experiments/vendor-prefixed-css-property-overview/">exhaustive list of vendor-prefixed <span class="caps">CSS</span> properties by browser</a>. See <a href="http://nimbupani.com/demo/css-vocab.html#vendor-specific">this demo for how vendor-specific extensions work</a>.</li>
</ol>
   
</article>

<?php
include 'footer.php';