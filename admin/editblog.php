<?php
 include 'header.php';
 $id=$_GET['id'];
 $qry="SELECT * FROM blogs WHERE blog_id =$id";
 include '../dbconnection.php';
$result=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($result);
include '../closeconnection.php';
 ?>

<h2 class="text-3xl font-bold">Create Blog</h2>
<hr class="h-1 mt-1 bg-blue-600">

<!-- form ma encrtyoe use garsi file wala kam garna sakinxa  -->

<form action="actionblog.php" method="POST" enctype="multipart/form-data">
   
    <input type="hidden" name='id' value="<?php echo $row['blog_id'] ?>">

    <input type="date" name="date"  class="p-2 rounded block my-4 border w-full" value="<?php echo $row['blog_date'] ?>">
    <input type="text" name="title"  class="p-2 rounded block my-4 border w-full" placeholder="Enter Title of Blog" value="<?php echo $row['blog_title'] ?>"]>
   <textarea name="description" class="p-2 rounded block my-4 border w-full" placeholder="Enter Description of Blog"><?php echo $row['blog_description'] ?></textarea>
   <!-- current Picture -->
    <p>Current Picture</p>
    <img src="../uploads/<?php echo $row['blog_photopath']; ?>" alt="currnt available" class="w-20 h-20 object-cover rounded">
 
    <input type="hidden" name='oldpath' value="<?php echo $row['blog_photopath'] ?>">


   <input type="file" name="photopath"  class="p-2 rounded block my-4 border w-full">
   <div class="flex justify-center mt-5 gap-5">
    <button class="bg-blue-600 px-10 py-2 rounded text-white" type="submit" name="update">Save</button>
    <a href="blogs.php" class="bg-red-600 px-5 py-2 rounded text-white">Cancel</a>

   </div>
</form>

<?php include 'footer.php'; ?>