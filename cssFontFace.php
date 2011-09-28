<?php

include 'header.php';
include 'left_menu.php';
?>
<pre>The New Bulletproof @Font-Face Syntax

February 3, 2011

Updated: April 21, 2011 10:49 AM EST

Since the beginning of the 'webfont revolution' we've relied on somewhat hacky @font-face declarations to get webfonts loading cross-browser. Could there be a better way? One that's clear and compatible with future browsers?
Short history

In September 2009, Paul Irish came up with the Bulletproof syntax for writing the @font-face declaration. It was compact and worked across all browsers at the time. Recent, growing complaints that fonts weren't loading in Android, led me to recommended the Mo' Bulletproofer syntax devised by Richard Fink instead. Unfortunately Mo' Bulletproofer requires double declarations. Defining each font twice in the CSS is cumbersome, so I looked for a better solution.
The “Fontspring @Font-Face Syntax”

The code should have been clean, clear and simple all along. Finally, it is:

@font-face {
	font-family: 'MyFontFamily';
	src: url('myfont-webfont.eot?#iefix') format('embedded-opentype'), 
	     url('myfont-webfont.woff') format('woff'), 
	     url('myfont-webfont.ttf')  format('truetype'),
	     url('myfont-webfont.svg#svgFontName') format('svg');
	}

What? I don't get it.

The hack trick that makes this work is the '?' following the EOT filename. Seriously.
How it works

Internet Explorer <9 has a bug in the parser for the src attribute. If you include more than one font format in the src, IE fails to load it and reports a 404 error. The reason is that IE attempts to load as a file everything between the opening parenthesis all the way to the very last closing parenthesis. To deal with that wrong behavior, you merely declare the EOT first and append a single question mark. The question mark fools IE into thinking the rest of the string is a query string and loads just the EOT file. The other browsers follow the spec and select the format they need based on the src cascade and the format hint.
Browser compatibility

Safari 5.03, IE 6-9, Firefox 3.6-4, Chrome 8, iOS 3.2-4.2, Android 2.2-2.3, Opera 11
What about data uri fonts?

You can use this syntax as well to embed your fonts into a stylesheet. For it to work does require two declarations however. But if you are going this route, what is an extra declaration? Note that the format hint for the EOT needs to be 'embedded-opentype.'

@font-face {
	font-family: 'MyFontFamily';
	src: url('myfont-webfont.eot?') format('embedded-opentype');
	}
	
@font-face {
	font-family: 'MyFontFamily';
	     url(data:font/truetype;charset=utf-8;base64,BASE64_ENCODED_DATA_HERE)  format('truetype'),
	     url(data:font/woff;charset=utf-8;base64,BASE64_ENCODED_DATA_HERE)  format('woff'),
	     url('myfont-webfont.svg#svgFontName') format('svg');
	}

Update 1 - Feb 3, 2011

The CSSNinja made a great observation about how to get IE9 to take a WOFF instead of the EOT. He suggested adding a hash to the format hint of the EOT. This works because IE9 doesn't recognize the format hint '#embedded-opentype.' So I modified the syntax to reflect his finding. I changed the format hint from 'embedded-opentype' to 'eot' which IE9 doesn't understand either and therefore moves on to the WOFF. We've reverted back to the correct format hint for eot, format('embedded-opentype') due to issues with serving on IIS. See this post for details.
Update 2 - Feb 4, 2011

IE was failing to load webfonts if the page was loaded locally. Turns out that IE prefers the '?' question mark character. The code has been updated to reflect this. Originally this post lauded the magical '#' hash. Hat tip to Chris Neale for the idea.
Update 3 - Feb 21, 2011

In response to this syntax not working in IE9 Compatibility modes (as well as an extended conversation with Microsoft) we've updated the syntax slightly. The revision adds redundancy, but further bulletproofs the method. Please see our separate post about this here.
Update 4 - April 21, 2011

When this syntax is used on an IIS server, IE9 users may not see the font. This can be solved in two ways. 1) Add the WOFF format to the list of MIME types. or 2) change the format('eot') portion to format('embedded-opentype'). Either one will solve issues with IE9.

</pre>
http://www.fontspring.com/blog/the-new-bulletproof-font-face-syntax
<?php
include 'footer.php';