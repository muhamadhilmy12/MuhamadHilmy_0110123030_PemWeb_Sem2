<?php 
include_once 'top.php';
include_once 'menu.php';
?>
<div>
    <div class="container-fluid px-4 pt-4">
        <?php
        $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];

        echo $ar_buah[2];

        echo '<br/>Jumlah Buah ' . count($ar_buah);

        echo '<ol>';
        foreach($ar_buah as $buah){
        echo '<li>'. $buah .'</li>';
        }
        echo '</ol>';
        
        $ar_buah[]="Durian";

        unset($ar_buah[1]);

        $ar_buah[2]="Manggis";

        echo '<ul>';
        foreach($ar_buah as $k => $v){
        echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
        }
        echo '</ul>';
        ?>
    </div>
</div>
<?php  
include_once 'bottom.php';
?>