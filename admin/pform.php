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
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Payment Details</h1>
       </div>
       <div class="table-responsive">
       <div>
        if Payment is online please , scan following QR and Pay
        <img src="PAY.jpg" alt="" height=50%>
        </div>
        <hr>
       <form method="post" action="formsave.php" enctype="multipart/form-data">
            <div class="row col-12 mb-2">
                <div class="col-4">
                    <label for="">name</label>
                </div>
                <div class="col-8">
                    <input type="text" name="sliderdata" id="sliderdata" class="form-control" value="<?php echo $rowedit['sliderdata']; ?>">
                </div>
            </div>
            <div class="row col-12 mb-2">
                <div class="col-4">
                    <label for="">Recept Images</label>
                </div>
                <div class="col-8">
                    <input type="file" name="sliderimage" id="sliderimage" class="form-control">
                    <?php
                        if($_GET['idslider']!=""){ ?>
                        <input type="hidden" name="sliderimage_old" id="sliderimage_old" value="slider/<?php echo $rowedit['sliderimage']; ?>" class="form-control">
                        <img src="slider/<?php echo $rowedit['sliderimage']; ?>" height=50 width=100>
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
                    <input type="hidden" name="idslider" id="idslider" value="<?php echo $_GET['idslider']; ?>">
                    <a href="/online pizza ordering system/index.php" class="btn btn-info">Refresh</a>
                </div>
            </div>
        </form>