<?php 
include_once('call.php');
if(isset($_POST['insert'])){
    $sliderdata=$_POST['sliderdata'];
    $currentdatetime=date('Y-m-d h:i:s');
    if(!file_exists("slider")){ mkdir("slider", 0777, true); }
    $target_dir="slider/";
    $post_tmp_img = $_FILES["sliderimage"]["tmp_name"]; //file upload
    $post_imag = date("Y-m-d h-i-s").$_FILES["sliderimage"]["name"]; //file database upload
    move_uploaded_file($post_tmp_img,"$target_dir"."$post_imag");
    $sql="insert into tblslider2 (sliderdata,sliderimage,insertdatetime) values('$sliderdata','$post_imag','$currentdatetime')";
    mysqli_query($con,$sql);
    echo "<script> alert('Slider Data Save Successfully...!'); </script>";
    echo "<script> window.location='../index.php' </script>";
}
if(isset($_POST['update'])){
    $sliderimage_old=$_POST['sliderimage_old'];
    $sliderdata=$_POST['sliderdata'];
    $idslider=$_POST['idslider'];
    $currentdatetime=date('Y-m-d h:i:s');
    if(!file_exists("slider")){ mkdir("slider", 0777, true); }
    $target_dir="slider/";
    $post_tmp_img = $_FILES["sliderimage"]["tmp_name"]; //file upload
    $post_imag = date("Y-m-d h-i-s").$_FILES["sliderimage"]["name"]; //file database upload
    move_uploaded_file($post_tmp_img,"$target_dir"."$post_imag");
    $upd="update tblslider2 set sliderdata='$sliderdata',sliderimage='$post_imag',insertdatetime='$currentdatetime' where idslider='$idslider'";
    mysqli_query($con,$upd);
    unlink($sliderimage_old);
    echo "<script> alert('Slider Data Update Successfully...!'); </script>";
    echo "<script> window.location='addslider2.php' </script>";
}
if(isset($_POST['delete'])){
    $sliderimage_old=$_POST['sliderimage_old'];
    $idslider=$_POST['idslider'];
    $upd="delete from tblslider2 where idslider='$idslider'";
    mysqli_query($con,$upd);
    unlink($sliderimage_old);
    echo "<script> alert('Slider Data Delete Successfully...!'); </script>";
    echo "<script> window.location='addslider2.php' </script>";
}
?>