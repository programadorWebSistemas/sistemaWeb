 <?php
        include("../../funcs/conexion.php");
       
            $sql = "select*from usuarios where expediente=".$_GET['expediente'];
            
            if($row=$db->fetch_row($query)){
                if($datos['nombre_archivo']==""){?>
        <p>NO tiene archivos</p>
                <?php }else{ ?>
        <iframe src="Public/<?php echo $row['expediente']; ?>"></iframe>
                
                <?php } } ?>