<html>
    <body>

    <?php
        $d = date("D");

        if ($d == "Fri")
            echo "Have a nice weekend";
        elseif ($d == "sun")
            echo "Have a nice sunday";
        else
            echo "Have a nice day";
    ?>
    </body>
</html>
