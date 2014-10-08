<?php
    ini_set('memory_limit', '500MB');
    $red = substr("255134098", 0, 3);
    $green = substr("255134098", 3, 3);
    $blue = substr("255134098", 6);
    $hex = null;
    $quoient = 10000;
    $remainder =  array();
    while ($quoient != 0) {
      $remainder[] = $quoient % 16;
      $quoient = round($quoient/16, 0, PHP_ROUND_HALF_DOWN);
      echo $quoient;

    };
    echo var_dump($remainder);
    /*header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
    <Message>hello</Message>
</Response>
*/

?>
