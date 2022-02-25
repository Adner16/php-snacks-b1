<?php
$name = 'Giovanni';
$mail = 'gio@mail.com';
$age = '26';

if ( count($name) > 3 && str_contains($mail, '@', '.') {
    echo ('accesso riuscito');
} else {
    echo ('accesso negato');
}

?>