<?php
$name = 'Giovanni';
$mail = 'gio@mail.com';
$age = '26';

if ( strlen($name) > 3 && strpos($mail, '@') !==false && strpos($mail, '.') !==false && is_numeric($age) ) {
    echo ('accesso riuscito');
} else {
    echo ('accesso negato');
}

?>