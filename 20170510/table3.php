<table border="1" cellpadding="5">
<?php
for($a = 1; $a <=9; $a++){
echo '<tr>';
        $ans = $a * $i;
        if(($i % 2 == 0 && $a % 2 == 0) || ($a % 2 == 1 && $i % 2 == 1)){
            echo '<td>'.$ans.'</td>';
        }
        else{
            echo '<td>'.$i.'×'.$a.'='.$ans.'</td>';
        }
    }
    echo '</tr>';
}
?>
</table>
