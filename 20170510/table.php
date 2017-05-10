<table border="1">
<?php
for($a = 1; $a <=10; $a++){
    echo '<tr>';
    for($i = 1; $i <=10; $i++){
        $ans = $a * $i;
        echo '<td>'.$ans.'</td>';
    }
    echo '</tr>';
}
?>
</table>
