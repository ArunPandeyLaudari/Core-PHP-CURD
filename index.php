<?php
$qry = "SELECT * FROM blogs ORDER BY blog_date desc LIMIT 3";
include 'dbconnection.php';
$result = mysqli_query($conn, $qry);
include 'closeconnection.php';
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LICT Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
        rel="stylesheet" />
</head>

<body>
    <nav class="flex justify-between items-center bg-blue-900 text-white px-10">
        <img src="https://lict.edu.np/wp-content/uploads/2021/01/final.png" alt="" class="h-16">
        <div class="flex gap-5">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Contact</a>
            <a href="">Login</a>
        </div>
    </nav>
    <h2 class="font-bold text-center mt-5 text-blue-700 text-xl">Our Blogs</h2>
    <div class="grid grid-cols-3 gap-10 px-24 mt-10">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="bg-gray-100 p-2 rounded shadow-md">
                <img src="uploads/<?php echo $row['blog_photopath'] ?>" alt="" class="w-full h-40 object-cover rounded">
                <h3 class="font-bold text-lg"><?php echo $row['blog_title']; ?></h3>
                <p class="text-sm mt-3 line-clamp-1"><?php echo $row['blog_description']; ?></p>
                <a class="bg-blue-900 text-white px-3 py-1 mt-5 inline-block" href="">Read More</a>
            </div>
        <?php
        }
        ?>
    </div>
    <!-- line-clamp-1 ley chai description ko line just 1 sentence gaarxw -->


    <footer class="bg-blue-900 text-white pt-5 mt-10">
        <div class="grid grid-cols-3 px-24 gap-10">
            <div>
                <h3 class="font-bold text-lg">About Us</h3>
                <p class="text-sm mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit blanditiis iste totam dolorem cumque mollitia libero voluptas et veniam esse!</p>
            </div>
            <div>
                <h3 class="font-bold text-lg">Contact Us</h3>
                <p class="text-sm mt-3"><i class="ri-phone-fill"></i> 987654320</p>
                <p class="text-sm mt-3"><i class="ri-mail-fill"></i> info@lict.edu.np </p>
                <p class="text-sm mt-3"><i class="ri-map-pin-fill"></i> Nawalpur, Nepal</p>
            </div>
            <div>
                <h3 class="font-bold text-lg">Follow Us</h3>
                <div class="flex gap-5 mt-3">
                    <a href=""><i class="ri-facebook-box-fill text-2xl"></i></a>
                    <a href=""><i class="ri-twitter-x-fill text-2xl"></i></a>
                    <a href=""><i class="ri-instagram-fill text-2xl"></i></a>
                </div>
            </div>
        </div>
        <div class="text-center mt-5 bg-blue-950 p-5">
            <p>&copy; 2024 LICT. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>