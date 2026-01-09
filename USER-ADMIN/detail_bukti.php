<?php
            include '../config.php';
            $id = $_GET['id']; 
            $q = mysqli_query($con, "SELECT * FROM penyambungan WHERE id='$id'");
            while($row = mysqli_fetch_array($q)){
            ?>                            
<center>
    <?php echo "<img src='../USER-PELANGGAN/BUKTI BAYAR/" . $row['bukti_bayar'] . "'width='100%'/>" ?><br><?php echo $row['bukti_bayar'] ?>
</center>

<?php } ?>