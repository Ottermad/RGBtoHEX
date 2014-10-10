<?php
    include('conversion.php');
    $hex = "N/A";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        global $hex;
        $red = $_POST['red'];
        $green = $_POST['green'];
        $blue = $_POST['blue'];
        $hex = fromDenary($red, 16). fromDenary($green, 16) . fromDenary($blue, 16);
        //var_dump($_POST);
        
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            RGB to HEX
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <h1 class="Title">RGB to HEX</h1>
        <form method="post">
            <table>
                <tr>
                    <th>
                        <label for="red">Red Value:</label>
                    </th>
                    <td>
                        <input type="number" maxlength="3" size="3" name="red" id="red">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="green">Green Value:</label>
                    </th>
                    <td>
                        <input type="number" maxlength="3" size="3" name="green" id="green">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="blue">Blue Value:</label>
                    </th>
                    <td>
                        <input type="number" maxlength="3" size="3" name="blue" id="blue">
                    </td>
                </tr>
            </table>
            <input type="submit" value="submit ">
        </form>
        <p>
            Hex Value: <?php echo $hex; ?>
        </p>
    </body>
</html>
