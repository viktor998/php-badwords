<?php 
    $testo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet viverra ligula. Cras et.';
    $badword = $_GET['word'];
?>

<div class="text">
    <?php 
        echo $testo . '<br>';
        echo 'la lunghezza è: ' . strlen($testo) . '<br>';
        echo str_replace($badword, '***', $testo);
          
    ?>
</div>