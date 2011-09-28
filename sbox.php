<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta name="generator" content="HTML Tidy for Mac OS X (vers 1 September 2005), see www.w3.org" />

	<title>Example 5: Negative Margins [+ companion columns, + footerStickAlt, + elastic]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css" media="screen">
/*<![CDATA[*/

/*
http://www.alistapart.com/d/negativemargins/ex5.htm
combined with
companion columns technique
and
footerStickAlt
plus
conditional elastic

Modified Version by Georg Sørtun
http://www.gunlaug.no/contents/wd_1.html
*/

.container { /*was: id*/
	width: 100%;
	float: left;
	margin-right: -200px;
	/* background: url(background_2.gif) repeat-y right;*/
}
.content { /*was: id*/
	margin-right: 200px;
	/* background: url(background_3.gif) repeat-y left; */
}
.main { /*was: id*/
	margin-left: 150px;
}

.left { /*was: id*/
	width: 150px;
	float: left;
}

.sidebar { /*was: id*/
	width: 200px;
	float: right;
}

h1 {
	margin-top: 0;
}
.last {
	margin-bottom: 0;
}


/* ---:::--- inverted equal height columns start here ---:::--- */

html {
	height: 100%; /* FSA */
	margin: 0;
	padding: 0;
	}

body {
	height: 100%; /* FSA */
	margin: 0;
	padding: 0;
	/* can not set font-size here because IE6 needs to see its own default */
	font-family: 'Luxi sans', Optima, 'Lucida Grande', Lucida, 'Lucida Sans Unicode', sans-serif;
	line-height: 1.5;
	color: white;
	background: #777;
	text-align: center; /* IE-win quirks mode centering */
	}

#page { /* added em-guidance and centering */
	width: 100%;
	max-width: 60em;
	min-width: 560px;
	margin: 0 auto;
	height: 100%;
	text-align: left;
	font-size: 100%; /* safe to set font-size here */
	}

#stacker {  
	position: relative; 
	z-index: 2;   
	width: 100%;
	min-height: 100%; /* FSA */
	}
/* 
the padding of the columns and some place for the footer
*/ 
.colpad {
	padding: 0em 0.5em 2.5em 0.5em;
	}

#header {
	width: 100%;
	height: 3em;
	background: #d7dabd;
	}
	
#pedestal { 
	clear: both;
	float: left;    /* makes Opera 8.54 behave */
	position: relative; 
	z-index: -1;
	width: 100%;
	height: 2em;
	line-height: 1em;
	margin-top: -3em; 
	font-size: 1em;
	}

#pedestal .content { 
	background:  red;
	}

#pedestal .main { 
	background: blue;
	}

#pedestal .container { 
	background:  green;
	}

#pedestal .companion { 
	margin-top: -16000px !important; /* EHC, but reversed: from bottom to top */
	padding-top: 16000px !important; 
	position: relative;
	height: 1em;
	}

/*
The #footer (FSA) fits into the gap the #pedestal has left
*/  
	
#footer {
	clear:both;
	float:left;
	position: relative;
	z-index: 3;
	height: 2em;
	margin-top: -2em;
	width: 100%;    
	line-height: 2em;
	font-size: 1em;
	background: #d7dabd;
	}


/*]]>*/
</style><!--[if IE]><style>

* html #stacker { /* FSA */
	height: 100%; /* does not understand min-height */
	}

.companion {zoom: 1;}

#footer {float: none} /* does not clear from a float */

/* IE min-max expression for 'conditional elastic' */


* html body #page {width:expression(
(document.documentElement.offsetWidth) >(1020/12)
* parseInt(document.body.currentStyle.fontSize)?  "60em"
: ((document.documentElement.offsetWidth) < 600? "554px" : "100%")); }
	
</style><![endif]-->
</head>

<body>

	<div id="page">
		<div id="stacker">
			<div id="header">
				Header
			</div><!--<div id="outer_wrapper">
				<div id="wrapper">-->

			<div class="container">
				<div class="content">
					<div class="left">
						<div class="colpad">

							<h1>navbar</h1>

							<ul>
								<li>link one</li>

								<li>link two</li>
							</ul>
						</div>

					</div>

					<div class="main">
						<div class="colpad">
							<h1>content</h1>

							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus varius eleifend tellus. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nulla facilisi. Sed wisi lectus, placerat nec, mollis quis, posuere eget, arcu.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus varius eleifend tellus. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nulla facilisi. Sed wisi lectus, placerat nec, mollis quis, posuere eget, arcu.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus varius eleifend tellus. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nulla facilisi. Sed wisi lectus, placerat nec, mollis quis, posuere eget, arcu.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus varius eleifend tellus. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nulla facilisi. Sed wisi lectus, placerat nec, mollis quis, posuere eget, arcu.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus varius eleifend tellus. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nulla facilisi. Sed wisi lectus, placerat nec, mollis quis, posuere eget, arcu.</p>

							<p class="last">Donec euismod. Praesent mauris mi, adipiscing non, mollis eget, adipiscing ac, erat. Integer nonummy mauris sit amet metus. In adipiscing, ligula ultrices dictum vehicula, eros turpis lacinia libero, sed aliquet urna diam sed tellus. Etiam semper sapien eget metus.</p>

						</div>
					</div>
				</div>
			</div>

			<div class="sidebar">
				<div class="colpad">
					<h1>sidebar</h1>

					<p>Here be your sidebar. Add whatever content you may desire.</p>
				</div>
			</div><!--<div class="clearing">&nbsp;</div>-->
			<!--</div> wrapper-->
			<!-- </div> outer_wrapper-->
		</div><!--nonFooter-->

		<div id="pedestal">
			<div class="companion container">

				<div class="companion content">
					<div class="companion main">
						f
					</div>
				</div>
			</div>
		</div>

		<div id="footer">

			From Rian Brill's ALA article <a href="http://www.alistapart.com/articles/negativemargins/">"Creating Liquid Layouts with Negative Margins"</a>, <a href="http://www.alistapart.com/d/negativemargins/ex5.htm">Example 5</a> with <a href="http://www.satzansatz.de/cssd/companions.html">Companion Columns</a>.
		</div>
	</div>
</body>
</html>
