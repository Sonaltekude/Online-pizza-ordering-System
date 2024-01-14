<?php 
    include_once('sidebar.php');  
    include_once('conn.php');
    if($_GET['idaboutus']!=''){
        $sel="Select * from tblaboutus where idaboutus='".$_GET['idaboutus']."'";
        $res=mysqli_query($con,$sel);
        $rowedit=mysqli_fetch_assoc($res);
    }
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add About US</h1>
       </div>
       <div class="table-responsive">
       <form method="post" action="aboutsave.php" enctype="multipart/form-data">
            <div class="row col-12 mb-2">
                <div class="col-4">
                    <label for="">Company Name</label>
                </div>
                <div class="col-8">
                    <input type="text" name="companyname" id="companyname" class="form-control" value="<?php echo $rowedit['companyname']; ?>">
                </div>
            </div>
             <div class="row col-12 mb-2">
                <div class="col-4">
                    <label for="">Company Desc</label>
                </div>
                <div class="col-8">
                    <input type="text" name="companydesc" id="companydesc" class="form-control" value="<?php echo $rowedit['companydesc']; ?>">
                </div>
            </div>
            <div class="row col-12 mb-2">
                <div class="col-4">
                    <label for="">Logo</label>
                </div>
                <div class="col-8">
                    <input type="file" name="companylogo" id="companylogo" class="form-control">
                    <input type="hidden" name="companylogo_old" id="companylogo_old" value="<?php echo $rowedit['companylogo']; ?>" class="form-control">
                    <?php
                        if($_GET['idaboutus']!=""){ ?>
                        <img src="about/<?php echo $rowedit['companylogo']; ?>" height=50 width=100>
                       <?php }
                    ?>
                </div>
            </div>
            <div class="row col-12 mb-2">
                <div class="col-12 text-center">
                    <?php if($_GET['operation']=='update'){ ?>
                        <input type="submit" value="update" name="update" Value="Update" class="btn btn-warning   ">
                   <?php  }elseif($_GET['operation']=='delete'){ ?>
                        <input type="submit" value="delete" name="delete" Value="Delete" class="btn btn-danger   ">
                   <?php  }else { ?>
                    <input type="submit" value="insert" name="insert" Value="Save" class="btn btn-primary   ">
                    <?php } ?>
                    <input type="hidden" name="idaboutus" id="idaboutus" value="<?php echo $_GET['idaboutus']; ?>">
                    <a href="aboutus.php" class="btn btn-info">Refresh</a>
                </div>
            </div>
        </form>
        </div>
        <hr>
       <h3 class="text-center">About Us List</h3>                    
       <div class="table-responsive">
            <table class="table table-bordered">
                <tr class="bg-dark text-white">
                    <th>Update</th>
                    <th>Delete</th>
                    <th>Sr.No.</th>
                    <th>Name</th>
                    <th>Desc</th>
                    <th>Image</th>
                    <th>Date Time</th>
                </tr>
              <?php
                $query="select * from tblabout";
                $result=mysqli_query($con,$query);
                $s=1;
                while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><a href="addboutus.php?idaboutus=<?php echo $row['idaboutus']; ?>&operation=update" class="btn btn-success">Update</a></td>
                        <td><a href="addboutus.php?idaboutus=<?php echo $row['idaboutus']; ?>&operation=delete" class="btn btn-danger">Delete</a></td>
                        <td><?php echo $s++; ?></td>
                        <td><?php echo $row['companyname']; ?></td>
                        <td><?php echo $row['companydesc']; ?></td>
                        <td><img src="about/<?php echo $row['companylogo']; ?>" height=50 width=100></td>
                        <td><?php echo $row['insertdatetime']; ?></td>
                     </tr>
               <?php } ?>
             </table>
      </div>  
</main>