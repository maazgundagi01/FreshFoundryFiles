<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Order form</h4>
    <form action="./cartprocess.php" method="POST" style="border: 1px solid black; width: 50vw; padding: 2%;">
        <p>Consumer Name  <input type="text" name="consumer" value =""></p>
        <p>Payment Type <select type="text" name="payment" value="">
            <option name="Bitcoin" value="Bitcoin">Bitcoin</option>
            <option name="Dogecoin" value="Dogecoin">Dogecoin</option>
            <option name="Etherium" value="Etherium">Etherium</option>
        </select></p>
           <p><input type="checkbox" name="chck1" id="chck1"> Standard Mouse QTY <input type="text" name="Mouse"></p> 
           <p><input type="checkbox" name="chck2" id="chck2"> Standard Keyboard QTY <input type="text" name="Keyboard"></p> 
           <p><input type="checkbox" name="chck3" id="chck3"> 2015 MacBook Pro QTY <input type="text" name="Mac"></p> 
           <p><input type="checkbox" name="chck4" id="chck4"> Standard PC QTY <input type="text" name="PC"></p> 
            <p>Special Instructions for order? <textarea name="Instruction" id="" cols="20" rows="1.5"></textarea></p>
           <input type="submit" name="submit" value="Submit"></button>
    </form>
    <h4>Order Details</h4>
</body>
</html>
