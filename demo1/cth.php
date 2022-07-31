<td>
    <?php
    if (file_exists('../dataFoto/suratnikah/' . $suratnikah . '.jpg')) {
        $path = '../dataFoto/suratnikah/' . $suratnikah . '.jpg';
    } else {
        $path = 'img/noimage.jpg';
    }
    ?>

    <img src="../dataFoto/suratnikah/<?php echo $path ?>.jpg" alt="" height="50" width="50" />
</td>