<?php
include 'header.php';
include 'left_menu.php';
?>
<h2> X + Y</h2>
<pre class="htmlCode"><code>ul + p {
       color: red;
    }  
</code></pre>
<p>This is referred to as an adjacent selector. It will select <em>only</em> the element that is immediately preceded by the former element. In this case, only the first paragraph after each <code>ul</code> will have red text.</p>

<h5> <a href="demos/cssDemos/adjacent.php" onclick="">View Demo </a> </h5>
<h3> Compatibility </h3>
<ul>
    <li>IE7+ </li>
    <li>Firefox </li>
    <li>Chrome </li>
    <li>Safari </li>
    <li>Opera </li>

</ul>
<hr />
<h2> X > Y</h2>
<pre class="htmlCode"><code><?php echo htmlspecialchars('<div>#container > ul {
  border: 1px solid black;
}') ?></code></pre>
<p>The difference between the standard <code>X Y</code> and <code>X &gt; Y</code> is that the latter will only select direct children. For example, consider the following markup.</p>

<pre class="htmlCode"><code><?php echo htmlspecialchars('<div id="container">
<ul>
    <li> List Item
        <ul>
            <li> Child </li>
        </ul>
    </li>
    <li> List Item </li>
    <li> List Item </li>
    <li> List Item </li>
    </ul>
</div>');?>
</code> 	
</pre>
<p>A selector of <code>#container &gt; ul</code> will only target the <code>ul</code>s which are direct children of the <code>div</code> with an <code>id</code> of <code>container</code>. It will not target, for instance, the <code>ul</code> that is a child of the first <code>li</code>. </p>

<p>For this reason, there are performance benefits in using the child combinator. In fact, it&#8217;s recommended particularly when working with JavaScript-based CSS selector engines.</p>
<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/childcombinator.html">View Demo </a> </h5>
<h3> Compatibility </h3>
<ul>
    <li>IE7+ </li>
    <li>Firefox </li>
    <li>Chrome </li>

    <li>Safari </li>
    <li>Opera </li>
</ul>
<hr />
<h2> X ~ Y</h2>
<pre class="htmlCode"><code>ul ~ p {
   color: red;
}</code></pre>
<p>This sibling combinator is similar to <code>X + Y</code>, however, it&#8217;s less strict. While an adjacent selector (<code>ul + p</code>) will only select the first element that is <em>immediately</em> preceded by the former selector, this one is more generalized. It will select, referring to our example above, any <code>p</code> elements, as long as they follow a <code>ul</code>. </p>

<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/generalcombinator.html">View Demo </a> </h5>
<h3> Compatibility </h3>
<ul>
    <li>IE7+ </li>
    <li>Firefox </li>
    <li>Chrome </li>
    <li>Safari </li>
    <li>Opera </li>

</ul>
<hr />
<h2> X[title]</h2>
<pre class="htmlCode"><code>a[title] {
   color: green;
}</code></pre>
<p>Referred to as an <em>attributes selector</em>, in our example above, this will only select the anchor tags that have a <code>title</code> attribute. Anchor tags which do not will not receive this particular styling. But, what if you need to be more specific? Well&#8230;</p>

<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/attributes.html">View Demo </a> </h5>
<h3> Compatibility </h3>
<ul>
    <li>IE7+ </li>
    <li>Firefox </li>
    <li>Chrome </li>
    <li>Safari </li>
    <li>Opera </li>

</ul>
<hr />
<h2> X[href="foo"]</h2>
<pre class="htmlCode"><code>a[href="http://net.tutsplus.com"] {
  color: #1f6053; /* nettuts green */
}</code></pre>
<p>The snippet above will style all anchor tags which link to <em>http://net.tutsplus.com</em>; they&#8217;ll receive our branded green color. All other anchor tags will remain unaffected.</p>
<blockquote>
    <p>

        Note that we&#8217;re wrapping the value in quotes. Remember to also do this when using a JavaScript CSS selector engine. When possible, always use CSS3 selectors over unofficial methods.
    </p>
</blockquote>
<p>This works well, though, it&#8217;s a bit rigid. What if the link does indeed direct to Nettuts+, but, maybe, the path is <em>nettuts.com</em> rather than the full url? In those cases we can use a bit of the regular expressions syntax.</p>
<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/attributes2.html">View Demo </a> </h5>
<h3> Compatibility </h3>

<ul>
    <li>IE7+ </li>
    <li>Firefox </li>
    <li>Chrome </li>
    <li>Safari </li>
    <li>Opera </li>
</ul>
<hr />
<h2> X[href*="nettuts"]</h2>

<pre class="htmlCode"><code>a[href*="tuts"] {
  color: #1f6053; /* nettuts green */
}</code></pre>
<p>There we go; that&#8217;s what we need. The star designates that the proceeding value must appear <em>somewhere</em> in the attribute&#8217;s value. That way, this covers <em>nettuts.com</em>, <em>net.tutsplus.com,</em> and even <em>tutsplus.com</em>. </p>

<p>Keep in mind that this is a broad statement. What if the anchor tag linked to some non-Envato site with the string <em>tuts</em> in the url? When you need to be more specific, use <code>^</code> and <code>&amp;</code>, to reference the beginning and end of a string, respectively.</p>
<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/attributes3.html">View Demo </a> </h5>
<h3> Compatibility </h3>
<ul>

    <li>IE7+ </li>
    <li>Firefox </li>
    <li>Chrome </li>
    <li>Safari </li>
    <li>Opera </li>
</ul>
<hr />
<h2> X[href^="http"]</h2>

<pre class="htmlCode"><code>a[href^="http"] {
   background: url(path/to/external/icon.png) no-repeat;
   padding-left: 10px;
}</code></pre>
<p>Ever wonder how some websites are able to display a little icon next to the links which are external? I&#8217;m sure you&#8217;ve seen these before; they&#8217;re nice reminders that the link will direct you to an entirely different website.</p>
<p>This is a cinch with the carat symbol. It&#8217;s most commonly used in regular expressions to designate the beginning of a string. If we want to target all anchor tags that have a <code>href</code> which begins with <code>http</code>, we could use a selector similar to the snippet shown above.</p>
<blockquote>

    <p>Notice that we&#8217;re not searching for <code>http://</code>; that&#8217;s unnecessary, and doesn&#8217;t account for the urls that begin with <code>https://</code>. </p>
</blockquote>
<p>Now, what if we wanted to instead style all anchors which link to, say, a photo? In those cases, let&#8217;s search for the <em>end</em> of the string.</p>
<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/attributes4.html">View Demo </a> </h5>

<h3> Compatibility </h3>
<ul>
    <li>IE7+ </li>
    <li>Firefox </li>
    <li>Chrome </li>
    <li>Safari </li>
    <li>Opera </li>
</ul>
<hr />
<h2>X[href$=".jpg"]</h2>

<pre class="htmlCode"><code>a[href$=".jpg"] {
   color: red;
}</code></pre>
<p>Again, we use a regular expressions symbol, <code>$</code>, to refer to the end of a string. In this case, we&#8217;re searching for all anchors which link to an image &#8212; or at least a url that ends with <code>.jpg</code>. Keep in mind that this certainly won&#8217;t work for <code>gifs</code> and <code>pngs</code>.</p>

<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/attributes5.html">View Demo </a> </h5>
<h3> Compatibility </h3>
<ul>
    <li>IE7+ </li>
    <li>Firefox </li>
    <li>Chrome </li>
    <li>Safari </li>
    <li>Opera </li>

</ul>
<hr />
<h2> X[data-*="foo"]</h2>
<pre class="htmlCode"><code>a[data-filetype="image"] {
   color: red;
}</code></pre>
<p>Refer back to number eight; how do we compensate for all of the various image types: <code>png</code>, <code>jpeg,</code><code>jpg</code>, <code>gif</code>? Well, we could create multiple selectors, such as:</p>

<pre class="htmlCode"><code>a[href$=".jpg"],
a[href$=".jpeg"],
a[href$=".png"],
a[href$=".gif"] {
   color: red;
}</code></pre>
<p>But, that&#8217;s a pain in the butt, and is inefficient. Another possible solution is to use custom attributes. What if we added our own <code>data-filetype</code> attribute to each anchor that links to an image?</p>
<pre class="htmlCode"><code>&lt;a href="path/to/image.jpg" data-filetype="image"> Image Link &lt;/a></code></pre>
<p>Then, with that <em>hook</em> in place, we can use a standard attributes selector to target only those anchors. </p>

<pre class="htmlCode"><code>a[data-filetype="image"] {
   color: red;
}</code></pre>
<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/attributes6.html">View Demo </a> </h5>
<h3> Compatibility </h3>
<ul>
    <li>IE7+ </li>
    <li>Firefox </li>
    <li>Chrome </li>

    <li>Safari </li>
    <li>Opera </li>
</ul>
<hr />
<h2>X[foo~="bar"]</h2>
<pre class="htmlCode"><code>a[data-info~="external"] {
   color: red;
}

a[data-info~="image"] {
   border: 1px solid black;
}</code></pre>
<p>Here&#8217;s a special one that&#8217;ll impress your friends. Not too many people know about this trick. The tilda (<code>~</code>) symbol allows us to target an attribute which has a spaced-separated list of values. </p>

<p>Going along with our custom attribute from number fifteen, above, we could create a <code>data-info</code> attribute, which can receive a space-separated list of anything we need to make note of. In this case, we&#8217;ll make note of external links and links to images &#8212; just for the example.</p>
<pre class="htmlCode"><code>"&lt;a href="path/to/image.jpg" data-info="external image"> Click Me, Fool &lt;/a></code></pre>
<p>With that markup in place, now we can target any tags that have either of those values, by using the ~ attributes selector trick.</p>
<pre class="htmlCode"><code>/* Target data-info attr that contains the value "external" */
a[data-info~="external"] {
   color: red;
}

/* And which contain the value "image" */
a[data-info~="image"] {
  border: 1px solid black;
}</code></pre>
<p>Pretty nifty, ay?

</p>
<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/attributes7.html">View Demo </a> </h5>
<h3> Compatibility </h3>
<ul>
    <li>IE7+ </li>
    <li>Firefox </li>
    <li>Chrome </li>

    <li>Safari </li>
    <li>Opera </li>
</ul>
<hr />
<h2> X:checked</h2>
<pre class="htmlCode"><code>input[type=radio]:checked {
   border: 1px solid black;
}</code></pre>
<p>This pseudo class will only target a user interface element that has been <em>checked</em> - like a radio button, or checkbox. It's as simple as that.</p>

<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/checked.html">View Demo </a> </h5>
<h3> Compatibility </h3>
<ul>
    <li>IE9+ </li>
    <li>Firefox </li>
    <li>Chrome </li>
    <li>Safari </li>
    <li>Opera </li>

</ul>
<hr />
<h2>X:after</h2>
<p>The <code>before</code> and <code>after</code> pseudo classes kick butt. Every day, it seems, people are finding new and creative ways to use them effectively. They simply generate content around the selected element.</p>
<p>Many were first introduced to these classes when they encountered the clear-fix hack.</p><div class="tutorial_image">

</div>
<pre class="htmlCode"><code>.clearfix:after {
    content: "";
    display: block;
    clear: both;
    visibility: hidden;
    font-size: 0;
    height: 0;
    }

.clearfix {
   *display: inline-block;
   _height: 1%;
}</code></pre>
<p>This <em>hack</em> uses the <code>:after</code> pseudo class to append a space after the element, and then clear it. It's an excellent trick to have in your tool bag, particularly in the cases when the <code>overflow: hidden;</code> method isn't possible.</p>
<p>For another creative use of this, <a href="http://net.tutsplus.com/tutorials/html-css-techniques/quick-tip-getting-clever-with-css3-shadows/" >refer to my quick tip on creating shadows</a>. </p>

<blockquote>
    <p>According to the CSS3 Selectors specification, you should technically use the pseudo element syntax of two colons <code>::</code>. However, to remain compatible, the user-agent will accept a single colon usage as well. In fact, at this point, it's smarter to use the single-colon version in your projects.</p>
</blockquote>
<h3> Compatibility </h3>
<ul>
    <li>IE8+ </li>
    <li>Firefox </li>
    <li>Chrome </li>
    <li>Safari </li>

    <li>Opera </li>
</ul>
<hr />
<h2>X:hover</h2>
<pre class="htmlCode"><code>div:hover {
  background: #e3e3e3;
}</code></pre>
<p>Oh come on. You know this one. The official term for this is <code>user action pseudo class</code>. It sounds confusing, but it really isn't. Want to apply specific styling when a user hovers over an element? This will get the job done!</p>
<blockquote>
    <p>Keep in mind that older version of Internet Explorer don't respond when the <code>:hover</code> pseudo class is applied to anything other than an anchor tag. </p>

</blockquote>
<p>You'll most often use this selector when applying, for example, a <code>border-bottom</code> to anchor tags, when hovered over.</p>
<pre class="htmlCode"><code>a:hover {
 border-bottom: 1px solid black;
}</code></pre>
<blockquote>
    <p><strong>Pro-tip</strong> - <code>border-bottom: 1px solid black;</code> looks better than <code>text-decoration: underline;</code>. </p>

</blockquote>
<h3> Compatibility </h3>
<ul>
    <li>IE6+ (In IE6, :hover must be applied to an anchor element) </li>
    <li>Firefox </li>
    <li>Chrome </li>
    <li>Safari </li>
    <li>Opera </li>
</ul>
<hr />

<h2> X:not(selector)</h2>
<pre class="htmlCode"><code>div:not(#container) {
   color: blue;
}</code></pre>
<p>The <code>negation</code> pseudo class is particularly helpful. Let's say I want to select all divs, except for the one which has an <code>id</code> of <code>container</code>. The snippet above will handle that task perfectly.</p>

<p>Or, if I wanted to select every single element (not advised) except for paragraph tags, we could do:</p>
<pre class="htmlCode"><code>*:not(p) {
  color: green;
}</code></pre>
<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/not.html">View Demo </a> </h5>
<h3> Compatibility </h3>
<ul>
    <li>IE9+ </li>
    <li>Firefox </li>

    <li>Chrome </li>
    <li>Safari </li>
    <li>Opera </li>
</ul>
<hr />
<h2> X::pseudoElement</h2>
<pre class="htmlCode"><code>p::first-line {
   font-weight: bold;
   font-size: 1.2em;
}</code></pre>
<p>We can use pseudo elements (designated by <code>::</code>) to style fragments of an element, such as the first line, or the first letter. Keep in mind that these must be applied to block level elements in order to take effect.</p>

<blockquote>
    <p>A pseudo-element is composed of two colons: <code>::</code></p>
</blockquote>
<h4>Target the First Letter of a Paragraph</h4>
<pre class="htmlCode"><code>
p::first-letter {
   float: left;
   font-size: 2em;
   font-weight: bold;
   font-family: cursive;
   padding-right: 2px;
}</code></pre>
<p>This snippet is an abstraction that will find all paragraphs on the page, and then sub-target only the first letter of that element. </p>
<p>This is most often used to create newspaper-like styling for the first-letter of an article.</p>
<h4>Target the First Line of a Paragraph</h4>
<pre class="htmlCode"><code>p::first-line {
   font-weight: bold;
   font-size: 1.2em;
}</code></pre>
<p>Similarly, the <code>::first-line</code> pseudo element will, as expected, style the first line of the element only. </p>
<blockquote>
    <p>"For compatibility with existing style sheets, user agents must also accept the previous one-colon notation for pseudo-elements introduced in CSS levels 1 and 2 (namely, :first-line, :first-letter, :before and :after). This compatibility is not allowed for the new pseudo-elements introduced in this specification." - <a href="http://www.w3.org/TR/css3-selectors/" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','www.w3.org']);">Source</a></p>
</blockquote>
<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/pseudoElements.html">View Demo </a> </h5>
<h3> Compatibility </h3>

<ul>
    <li>IE6+ </li>
    <li>Firefox </li>
    <li>Chrome </li>
    <li>Safari </li>
    <li>Opera </li>
</ul>
<hr />
<h2>X:nth-child(n)</h2>

<pre class="htmlCode"><code>li:nth-child(3) {
   color: red;
}</code></pre>
<p>Remember the days when we had no way to target specific elements in a stack? The <code>nth-child</code> pseudo class solves that!</p>
<p>Please note that <code>nth-child</code> accepts an integer as a parameter, however, this is not zero-based. If you wish to target the second list item, use <code>li:nth-child(2)</code>. </p>
<p>We can even use this to select a variable set of children. For example, we could do <code>li:nth-child(4n)</code> to select every fourth list item. </p>

<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/nth.html">View Demo </a> </h5>
<h3> Compatibility </h3>
<ul>
    <li>IE9+ </li>
    <li>Firefox 3.5+ </li>
    <li>Chrome </li>
    <li>Safari </li>
</ul>

<hr />
<h2>X:nth-last-child(n)</h2>
<pre class="htmlCode"><code>li:nth-last-child(2) {
   color: red;
}</code></pre>
<p>What if you had a huge list of items in a <code>ul</code>, and only needed to access, say, the third to the last item? Rather than doing <code>li:nth-child(397)</code>, you could instead use the <code>nth-last-child</code> pseudo class.</p>

<p>This technique works almost identically from number sixteen above, however, the difference is that it begins at the end of the collection, and works its way back.</p>
<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/nthLast.html">View Demo </a> </h5>
<h3> Compatibility </h3>
<ul>
    <li>IE9+ </li>
    <li>Firefox 3.5+ </li>
    <li>Chrome </li>
    <li>Safari </li>

    <li>Opera </li>
</ul>
<hr />
<h2>X:nth-of-type(n)</h2>
<pre class="htmlCode"><code>ul:nth-of-type(3) {
   border: 1px solid black;
}</code></pre>
<p>There will be times when, rather than selecting a <code>child</code>, you instead need to select according to the <code>type</code> of element. </p>

<p>Imagine mark-up that contains five unordered lists. If you wanted to style only the third <code>ul</code>, and didn't have a unique <code>id</code> to hook into, you could use the <code>nth-of-type(n)</code> pseudo class. In the snippet above, only the third <code>ul</code> will have a border around it.</p>
<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/nthOfType.html">View Demo </a> </h5>

<h3> Compatibility </h3>
<ul>
    <li>IE9+ </li>
    <li>Firefox 3.5+ </li>
    <li>Chrome </li>
    <li>Safari </li>
</ul>
<hr />
<h2>X:nth-last-of-type(n)</h2>

<pre class="htmlCode"><code>ul:nth-last-of-type(3) {
   border: 1px solid black;
}</code></pre>
<p>And yes, to remain consistent, we can also use <code>nth-last-of-type</code> to begin at the end of the selectors list, and work our way back to target the desired element.</p>
<h3> Compatibility </h3>
<ul>
    <li>IE9+ </li>
    <li>Firefox 3.5+ </li>
    <li>Chrome </li>

    <li>Safari </li>
    <li>Opera </li>
</ul>
<hr />
<h2>X:first-child</h2>
<pre class="htmlCode"><code>ul li:first-child {
   border-top: none;
}</code></pre>
<p>This structural pseudo class allows us to target only the first child of the element's parent. You'll often use this to remove borders from the first and last list items. </p>
<p>For example, let's say you have a list of rows, and each one has a <code>border-top</code> and a <code>border-bottom</code>. Well, with that arrangement, the first and last item in that set will look a bit odd. </p>

<p>Many designers apply classes of <code>first</code> and <code>last</code> to compensate for this. Instead, you can use these pseudo classes.</p>
<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/firstChild.html">View Demo </a> </h5>
<h3> Compatibility </h3>
<ul>
    <li>IE7+  </li>

    <li>Firefox </li>
    <li>Chrome </li>
    <li>Safari </li>
    <li>Opera </li>
</ul>
<hr />
<h2>X:last-child</h2>
<pre class="htmlCode"><code>ul > li:last-child {
   color: green;
}</code></pre>

<p>The opposite of <code>first-child</code>, <code>last-child</code> will target the last item of the element's parent.</p>
<h3>Example</h3>
<p>Let's build a simple example to demonstrate one possible use of these classes. We'll create a styled list item. </p>
<h4>Markup</h4>
<pre class="htmlCode"><code>&lt;ul>
    &lt;li> List Item &lt;/li>
    &lt;li> List Item &lt;/li>
    &lt;li> List Item &lt;/li>
&lt;/ul></code></pre>
<p>Nothing special here; just a simple list.</p>
<h4>CSS</h4>
<pre class="htmlCode"><code>ul {
 width: 200px;
 background: #292929;
 color: white;
 list-style: none;
 padding-left: 0;
}

li {
 padding: 10px;
 border-bottom: 1px solid black;
 border-top: 1px solid #3c3c3c;
}</code></pre>
<p>This styling will set a background, remove the browser-default padding on the <code>ul</code>, and apply borders to each <code>li</code> to provide a bit of depth.</p>
<div class="tutorial_image">
    <img src="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/extraBorders.png" alt="Styled List" />

</div>
<blockquote>
    <p>To add depth to your lists, apply a <code>border-bottom</code> to each <code>li</code> that is a shade or two darker than the <code>li</code>'s background color. Next, apply a <code>border-top</code> which is a couple shades <em>lighter</em>. </p>

</blockquote>
<p>The only problem, as shown in the image above, is that a border will be applied to the very top and bottom of the unordered list - which looks odd. Let's use the <code>:first-child</code> and <code>:last-child</code> pseudo classes to fix this.</p>
<pre class="htmlCode"><code>li:first-child {
    border-top: none;
}

li:last-child {
   border-bottom: none;
}</code></pre>
<div class="tutorial_image">
    <img src="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/fixed.png" alt="Fixed" />
</div>
<p>There we go; that fixes it!</p>

<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/firstChild.html">View Demo </a> </h5>
<h3> Compatibility </h3>
<ul>
    <li>IE9+  </li>
    <li>Firefox </li>
    <li>Chrome </li>
    <li>Safari </li>
    <li>Opera </li>

</ul>
<p><em>Yep - IE8 supported <code>:first-child</code>, but not <code>:last-child</code>. Go figure. </em> </p>
<hr />
<h2>X:only-child</h2>
<pre class="htmlCode"><code>div p:only-child {
   color: red;
}</code></pre>
<p>Truthfully, you probably won't find yourself using the <code>only-child</code> pseudo class too often. Nonetheless, it's available, should you need it.</p>

<p>It allows you to target elements which are the <em>only</em> child of its parent. For example, referencing the snippet above, only the paragraph that is the only child of the <code>div</code> will be colored, red.</p>
<p>Let's assume the following markup.</p>
<pre class="htmlCode"><code>&lt;div>&lt;p> My paragraph here. &lt;/p>&lt;/div>

&lt;div>
   &lt;p> Two paragraphs total. &lt;/p>
   &lt;p> Two paragraphs total. &lt;/p>

&lt;/div></code></pre>
<p>In this case, the second <code>div</code>'s paragraphs will not be targeted; only the first <code>div</code>. As soon as you apply more than one child to an element, the <code>only-child</code> pseudo class ceases to take effect.</p>
<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/onlyChild.html">View Demo </a> </h5>
<h3> Compatibility </h3>

<ul>
    <li>IE9+  </li>
    <li>Firefox </li>
    <li>Chrome </li>
    <li>Safari </li>
    <li>Opera </li>
</ul>
<hr />
<h2>X:only-of-type</h2>

<pre class="htmlCode"><code>li:only-of-type {
   font-weight: bold;
}</code></pre>
<p>This structural pseudo class can be used in some clever ways. It will target elements that do not have any siblings within its parent container. As an example, let's target all <code>ul</code>s, which have only a single list item. </p>
<p>First, ask yourself how you would accomplish this task? You could do <code>ul li</code>, but, this would target <em>all</em> list items. The only solution is to use <code>only-of-type</code>.</p>
<pre class="htmlCode"><code>ul > li:only-of-type {
   font-weight: bold;
}</code></pre>
<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/onlyOfType.html">View Demo </a> </h5>
<h3> Compatibility </h3>
<ul>
    <li>IE9+  </li>
    <li>Firefox 3.5+ </li>
    <li>Chrome </li>
    <li>Safari </li>

    <li>Opera </li>
</ul>
<hr />
<h2>X:first-of-type</h2>
<p>The <code>first-of-type</code> pseudo class allows you to select the first siblings of its type. </p>
<h4>A Test</h4>
<p>To better understand this, let's have a test. Copy the following mark-up into your code editor:</p>

<pre class="htmlCode"><code>&lt;div>
   &lt;p> My paragraph here. &lt;/p>
   &lt;ul>
      &lt;li> List Item 1 &lt;/li>
      &lt;li> List Item 2 &lt;/li>
   &lt;/ul>

   &lt;ul>
      &lt;li> List Item 3 &lt;/li>
      &lt;li> List Item 4 &lt;/li>
   &lt;/ul>
&lt;/div></code></pre>
<p>Now, without reading further, try to figure out how to target only <em>"List Item 2"</em>. When you've figured it out (or given up), read on.</p>
<h4>Solution 1</h4>
<p>There are a variety of ways to solve this test. We'll review a handful of them. Let's begin by using <code>first-of-type</code>. </p>
<pre class="htmlCode"><code>ul:first-of-type > li:nth-child(2) {
   font-weight: bold;
}</code></pre>
<p>This snippet essentially says, "find the first unordered list on the page, then find only the immediate children, which are list items. Next, filter that down to only the second list item in that set.</p>
<h4>Solution 2</h4>

<p>Another option is to use the adjacent selector.</p>
<pre class="htmlCode"><code>p + ul li:last-child {
   font-weight: bold;
}</code></pre>
<p>In this scenario, we find the <code>ul</code> that immediately proceeds the <code>p</code> tag, and then find the very last child of the element.</p>
<h4>Solution 3</h4>
<p>We can be as obnoxious or as playful as we want with these selectors. </p>

<pre class="htmlCode"><code>ul:first-of-type li:nth-last-child(1) {
   font-weight: bold;
}</code></pre>
<p>This time, we grab the first <code>ul</code> on the page, and then find the very first list item, but starting from the bottom! <img src='http://net.tutsplus.com/wp-includes/images/smilies/icon_smile.gif' alt=':)' class='wp-smiley' /> </p>
<h5> <a href="http://d2o0t5hpnwv4c1.cloudfront.net/840_cssSelectors/selectors/firstOfType.html">View Demo </a> </h5>
<h3> Compatibility </h3>
<ul>

    <li>IE9+  </li>
    <li>Firefox 3.5+</li>
    <li>Chrome </li>
    <li>Safari </li>
    <li>Opera </li>
</ul>
<hr />

<?php
include 'footer.php';
