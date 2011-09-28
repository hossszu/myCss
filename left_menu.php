
<aside>
    <div>
        <h1>articles</h1>
        <ul>
            <li<?php markSelected("index", $baseName); ?>><a href="index.php">home</a></li>
            <li<?php markSelected("css", $baseName); ?>><a href="css.php">css</a>
                <ul>
                    <li<?php markSelected("cssSelectors", $baseName); ?>><a href="cssSelectors.php">selectors</a></li>
                    <li<?php markSelected("cssFontFace", $baseName); ?>><a href="cssFontFace.php">fontFaces</a></li>
                    <li<?php markSelected("sbox", $baseName); ?>><a href="sbox.php">sandBox</a></li>

                </ul>
            </li>
            <li<?php markSelected("articleHtml5", $baseName); ?>><a href="articleHtml5.php">html5</a></li>
        </ul>
    </div>
    


    <br>

    <div>
<h1>stickyNotes</h1>
<div id="scribble" contenteditable="true" onkeyup="storeUserScribble(this.id);"></div>
<p><a id="c-link" href='' onclick='clearLocal();'>Clear local storage</a></p>
    <script>
        getUserScribble();
    </script>

    </div>
</aside> 




<section id="main_wrapper">
