<?php 
if(isset($_POST['create']))
{
    $date=$_POST['date'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $photopath=$_POST['photopath'];

    //upload image
    $target_dir="../uploads/";
    $filename=time().$_FILES['photopath']['name'];  //unique ness garna lai time() diyako
    // tmp to fetch photo if photo not shown.
    $tmpname=$_FILES['photopath']['tmp_name'];
    
    //move upload file
    move_uploaded_file($tmpname,$target_dir.$filename);

    // aba upload grya filepath photopath ko variable ma halako

    $photopath=$filename;

    //query

    $qry="INSERT INTO blogs(blog_date,blog_title,blog_description,blog_photopath) VALUES('$date','$title','$description','$photopath')";


//execute query
    include '../dbconnection.php';

    $result =mysqli_query($conn,$qry);

    include '../closeconnection.php';

    if($result){
        header('Location:blogs.php');
    }
    else{
        echo "Failed to create Blog";
    }   

}

if(isset($_POST['update'])){

  $id=$_POST['id'];
    $date=$_POST['date'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $oldpath=$_POST['oldpath'];

  
    if($_FILES['photopath']['name'] !=""){
     //upload image
     $target_dir="../uploads/";
     $filename=time().$_FILES['photopath']['name'];  //unique ness garna lai time() diyako
     // tmp to fetch photo if photo not shown.
     $tmpname=$_FILES['photopath']['tmp_name'];
     
     //move upload file
     move_uploaded_file($tmpname,$target_dir.$filename);
 
     // aba upload grya filepath photopath ko variable ma halako
 
     $photopath=$filename;

    //  delete old image;
     unlink($target_dir.$oldpath);
    }
    else{
        $photopath=$oldpath;
    }
    $qry="UPDATE blogs SET blog_date='$date',blog_title='$title',blog_description='$description',blog_photopath='$photopath' WHERE blog_id=$id";
    include '../dbconnection.php';
    $result=mysqli_query($conn,$qry);
    include '../closeconnection.php';
    if($result){
        header('Location:blogs.php');
    }
    else{
        echo("Failed to upddate");
    }
}
// For delete
if(isset($_GET['deleteid'])){
  
    $id=$_GET['deleteid'];
    $qry="DELETE FROM blogs WHERE blog_id=$id";
    include '../dbconnection.php';
    $result=mysqli_query($conn,$qry);
    include '../closeconnection.php';
    if($result){
        header('Location:blogs.php');
    }
    else{
        echo("Failed to upddate");
    }   
}
?>