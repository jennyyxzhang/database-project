<html>
<head><title>Updating...</title><style>
        body {
        background-color: linen;
        }

        h1 {
        color: maroon;
        }

        button {
            margin-left: 20px;
        }
    </style></head>

<div style="text-align:center; padding-top:30px">
<h1>Update my Address</h1>
<body>

<?php


if (isset($_POST["changeaddress"])){
    
    echo '<form action = "updatetonew.php" method = post>';
    echo 'Enter new address: <input name = newad type = text> <input type = submit name = updatead value = Update></form>';
}

?>



</body>
</div>
</html>