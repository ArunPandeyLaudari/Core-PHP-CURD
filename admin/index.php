<?php include 'header.php'; 
$qry ="SELECT COUNT(blog_id) as totalblogs FROM blogs";
include '../dbconnection.php';
$result=mysqli_query($conn, $qry);
$row=mysqli_fetch_assoc($result);
include '../closeconnection.php';

?>
<!-- header ko file halna lai  -->
        <h2 class="text-3xl font-bold">Dashboard</h2>
        <hr class="h-1 bg-blue-600">

        <!-- card ko divisin -->
         <div class="grid grid-cols-3 gap-10 mt-5">
            <div class="bg-blue-200 p-5 rounded shadow-md">
                <h3 class="font-bold text-lg">Total Blogs</h3>
                <p class="text-2xl mt-3"><?php echo $row['totalblogs'];?></p>
            </div>
            <div class="bg-yellow-200 p-5 rounded shadow-md">
                <h3 class="font-bold text-lg">Total Banners</h3>
                <p class="text-2xl mt-3">5</p>
            </div>
            <div class="bg-green-200 p-5 rounded shadow-md">
                <h3 class="font-bold text-lg">Total News</h3>
                <p class="text-2xl mt-3">3</p>
            </div>
         </div>
<!-- footer ko file yo page ma halna lai -->
 <?php include 'footer.php'; ?>
   