<?php
 include 'header.php';
 ?>

<h2 class="text-3xl font-bold">Create Blog</h2>
<hr class="h-1 mt-1 bg-blue-600">

<!-- form ma encrtyoe use garsi file wala kam garna sakinxa  -->

<form action="actionblog.php" method="POST" enctype="multipart/form-data">
    <input type="date" name="date"  class="p-2 rounded block my-4 border w-full">
    <input type="text" name="title"  class="p-2 rounded block my-4 border w-full" placeholder="Enter Title of Blog">
   <textarea name="description" id="" class="p-2 rounded block my-4 border w-full" placeholder="Enter Description of Blog"></textarea>
   <input type="file" name="photopath"  class="p-2 rounded block my-4 border w-full">
   <div class="flex justify-center mt-5 gap-5">
    <button class="bg-blue-600 px-10 py-2 rounded text-white" type="submit" name="create">Save</button>
    <a href="blogs.php" class="bg-red-600 px-5 py-2 rounded text-white">Cancel</a>

   </div>
</form>

<?php include 'footer.php'; ?>