
    <?php
        $agenda = [];
        $agenda[] = 'dentista a las 12h';
        $agenda[] = 'dormir';
        $agenda[] = 'llegar a casa';
        $agenda[] = 'hola';
    ?>
    <ul>
        <?php foreach ($agenda as $cita) : ?> 
            <li style="color: red;"><?php echo $cita?></li>
        <?php endforeach;?>
    </ul>
    <?php $agenda[0] = 'dentista a las 16h';?>
    <ul>
        <?php 
            foreach ($agenda as $cita){
                echo "<li>$cita</li>";
            }
        ?>
    </ul>