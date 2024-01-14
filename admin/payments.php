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
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
       <h3 class="text-center">payments List</h3>                    
       <div class="table-responsive">
            <table class="table table-bordered">
                <tr class="bg-dark text-white">
                    <th>Sr.No.</th>
                    <th>data</th>
                    <th>Image of payment</th>
                    <th>Date Time</th>
                </tr>
              <?php
                $query="select * from tblslider2";
                $result=mysqli_query($con,$query);
                $s=1;
                while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $s++; ?></td>
                        <td><?php echo $row['sliderdata']; ?></td>
                        <td>
                        <a href="showimg.php" class="btn btn-info">click here
                        <img src="slider/<?php echo $row['sliderimage']; ?>" height=50 width=100></a> </td>
                        <td><?php echo $row['insertdatetime']; ?></td>
                     </tr>
               <?php } ?>
             </table>
      </div>  
</main>