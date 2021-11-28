<?php
$PriceMouse = 4.99;
$PriceKeyboard = 19.99;
$PriceMac = 1999.99;
$PricePc = 499.99;

    if (isset($_POST['submit'])){
        echo "<div style=' padding:3px; width:60vw;border:3px solid green;'>Consumer Name:".$_POST["consumer"]."<br>";
        echo "Order Date:". date('F jS Y') ."<br>";
        echo "Payment Method:".$_POST["payment"]."</div>";
        echo "<h4 style=' padding:0px 2px; width:max-content;border:3px solid green;'>Products</h4>";
        if(isset($_POST['chck1'])){
            echo "<p style=' margin-top:0px; width:60vw;border:3px solid green;'>standard Mouse</p>";
        }
        if(isset($_POST['chck2'])){
            echo "<p style=' width:60vw;border:3px solid green;'>standard Keyboard</p>";
        }
        if(isset($_POST['chck3'])){
            echo "<p style=' width:60vw;border:3px solid green;'>2015 MacBook Pro</p>";
        }
        if(isset($_POST['chck4'])){
            echo "<p style=' width:60vw;border:3px solid green;'>Standard PC</p>";
        }
        if(isset($_POST['chck1'])){
            echo "<table><tr><td>Std Mouse<td><td>Qty: ".$_POST['Mouse']."x4.99</td><td>Total :".(int)$_POST['Mouse']*$PriceMouse."</td> </tr>";
        }
        if(isset($_POST['chck2'])){
            echo "<tr><td>Std Keyboard<td><td>Qty: ".$_POST['Keyboard']."x19.99</td><td>Total :".(int)$_POST['Keyboard']*$PriceKeyboard."</td> </tr>";
        }
        if(isset($_POST['chck3'])){
            echo "<tr><td>2015_MB_Pro_qty<td><td>Qty: ".$_POST['Mac']."x1999.99</td><td>Total :".(int)$_POST['Mac']*$PriceMac."</td> </tr>";
        }
        if(isset($_POST['chck4'])){
            echo "<tr><td>std_pc_qty<td><td>Qty: ".$_POST['PC']."x499.99</td><td>Total :".(int)$_POST['PC']*$PricePc."</td> </tr>";   
        }
         echo "  </table><p style=' width:60vw;border:3px solid green;'><b>Special Instructions for order?</b> ".$_POST["Instruction"]. "</p>";
    }
?>