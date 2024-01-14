<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="jquery.min.js"></script>
    </head> 
<?php 
    // include_once('sidebar.php');  
    include_once('call.php');
    if($_GET['idslider']!=''){
        $sel="Select * from tblslider2 where idslider='".$_GET['idslider']."'";
        $res=mysqli_query($con,$sel);
        $rowedit=mysqli_fetch_assoc($res);
    }
?>

            
              <?php
                $query="select * from tblslider2";
                $result=mysqli_query($con,$query);
                $s=1;
                while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <br>
                        <td><?php echo $s++; ?></td>
                        <td><?php echo $row['sliderdata']; ?></td>
                        <td>
                        
                        <img src="slider/<?php echo $row['sliderimage']; ?>" height=100% width=500> </td>
                        <td><?php echo $row['insertdatetime']; ?></td>
                     </tr>
               <?php } ?>
             </table>
      </div>  
</main>