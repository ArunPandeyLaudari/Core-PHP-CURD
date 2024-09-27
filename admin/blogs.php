<?php include 'header.php';

$qry="SELECT * FROM blogs";
include '../dbconnection.php';
$result=mysqli_query($conn,$qry);
include '../closeconnection.php';

?>

<h2 class="text-3xl font-bold">Blogs</h2>
<hr class="h-1 bg-blue-600 mt-1">

<div class="text-right mt-5">
    <a href="createblog.php" class="bg-blue-600 px-5 py-2 rounded text-white">Add Blog</a>
</div>

<table class="w-full mt-10">
    <tr>
        <th class="border p-2">Date</th>
        <th class="border p-2">Titles</th>
        <th class="border p-2">Images</th>
        <th class="border p-2">Description</th>
        <th class="border p-2">Action</th>
    </tr>

<!-- loop ma garna lai data load as per the data base -->
    <?php
    
    while($row=mysqli_fetch_assoc($result))
    {
      
    ?>

    <tr class="text-center">
        <td class="border p-2"><?php echo $row['blog_date'];?></td>
        <td class="border p-2"><?php echo $row['blog_title'];?></td>
        <td class="border p-2"><img src="../uploads/<?php  echo $row['blog_photopath']; ?>" alt="blogs Photo" class="w-20 mx-auto h-20 object-cover rounded "></td>
        <td class="border p-2 w-7/12"><?php echo $row['blog_description'];?></td>
        <td class="border p-2">
            <a href="editblog.php?id=<?php echo $row['blog_id'];?>" class="bg-blue-600 px-3 py-1 rounded text-white">Edit</a>
            <a href="actionblog.php?deleteid=<?php echo $row['blog_id']?>" class="bg-red-600 px-3 py-1 rounded text-white" onclick=" return confirm('Are you sure you want to delete?')">Delete</a>
        </td> 
    </tr>

    <?php
     } 
    ?>
    
</table>

<?php include 'footer.php' ?>
