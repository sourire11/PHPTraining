<table border="1">
<?php
for($a = 1; $a <=10; $a++){
    echo '<tr>';
    for($i = 1; $i <= 10; $i++){
        $ans = $a * $i;
        if(($i % 2 == 0 && $a % 2 == 0) || ($a % 2 == 1 && $i % 2 == 1)){
            echo '<td>'.$ans.'</td>';
        }
        else{
            echo '<td>'.$ans.'</td>';
        }
    }
    echo '</tr>';
}
?>
</table>
