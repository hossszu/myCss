<?php
include 'header.php';
include 'left_menu.php';
?>
 
<form action=inc/contact_form.php method=post>
    <fieldset><legend>Contact Form</legend>
        <p>          
            <input type=text autofocus name=name id=name pattern="[a-zA-Z'\s]{2,20}" required=required title="Enter Your Name"><label for=name>name</label>
        </p>
        <p>          
            <input type=email name=email id=email required=required pattern="[a-zA-Z._\%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}"
title="Enter valid Email Address"><label for=email>email</label>
        </p>
        <p>           
<textarea name=massage data-minlength=20 
                      placeholder="At this moment, you have an awesome opportunity<wbr>
to be the person your mother always wanted you to be:
kind, helpful, and smart. Do that, and we'll give 
you a big Tnx." required=required ></textarea>
            
        </p>
        <p>
            <input type=submit name=submit value=send>
        </p>    
    </fieldset>
</form>               

<?php
include 'footer.php';
