<?php 

function createEmail($username, $domain = "[example.com](http://example.com/)") {
    return "$username@$domain";
    }
    
    $email1 = createEmail("john");

?>