<?php
include_once 'inc/f.php';
include_once 'htmlMimeMail5.php';

if($_POST['submit']){
    $emailPatern = "%
                        [a-zA-Z._\%-]+ # user name part before @ simbol
                        @              #
                        [a-zA-Z0-9.-]+ # domain
                        \.             #
                        [a-zA-Z]{2,4}  # suffix
                   %x";
    $namePatern  = "%
                        [a-zA-Z'\s]{2,20}# can contain characters, spaces and apostrophies
                    %x";
                    
    preg_match($emailPatern, $_POST['email'],$email);
    preg_match($namePatern, $_POST['name'],$name);
    echo $email[0].'<br>';
    echo $name[0]. ' <br>';
    echo filter_var($_POST['massage'], FILTER_SANITIZE_FULL_SPECIAL_CHARS,!FILTER_FLAG_STRIP_LOW);
}

//$c = $db->exec('INSERT INTO `massages` (`name`,`mail`,`massages`) VALUES ()')
?>
