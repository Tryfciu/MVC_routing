<?php

require_once '../app/assets/html_defaults/header.php';


if(empty($data['name']))
{
    echo "Hello traveler";
}
else
{
    echo "Hello " . $data['name'];
}

require_once '../app/assets/html_defaults/footer.php';


?>
