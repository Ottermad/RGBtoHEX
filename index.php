<?php 
    # Functions for Conversions

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header( 'Location: webInterface.php' );
}
else {
    include('conversion.php');



    ini_set('memory_limit', '500MB');
    $body = $_REQUEST['Body'];
    $red = substr($body, 0, 3);
    $green = substr($body, 3, 3);
    $blue = substr($body, 6);
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
}
?>

<Response>
    <Message><?php echo fromDenary($red, 16). fromDenary($green, 16) . fromDenary($blue, 16); ?></Message>
</Response>