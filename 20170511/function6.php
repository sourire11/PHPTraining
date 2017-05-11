<html>
<head>
<h2>サンプル1</h2>
    <?php
     function writeMsg() {
         echo "Hello world!";
     }
     writeMsg();
     ?>
<h2>サンプル2</h2>
    <?php
    function familyName($fname) {
        echo "$fname yamada.<br>";
    }
    familyName("yuuki");
    familyName("hirobumi");
    familyName("yukiko");
    familyName("hanako");
    familyName("keichi");
    ?>

</head>
</html>
