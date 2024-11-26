<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/like_post.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Category</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'components/user_header.php'; ?>

<section class="categories">
   <h1 class="heading">Categories</h1>
   <div class="box-container">
      <div class="box"><span>01</span><a href="category.php?category=lifestyle">Lifestyle</a></div>
      <div class="box"><span>02</span><a href="category.php?category=travel">Travel</a></div>
      <div class="box"><span>03</span><a href="category.php?category=food">Food</a></div>
      <div class="box"><span>04</span><a href="category.php?category=technology">Technology</a></div>
      <div class="box"><span>05</span><a href="category.php?category=entertainment">Entertainment</a></div>
      <div class="box"><span>06</span><a href="category.php?category=photography">Photography</a></div>
      <div class="box"><span>07</span><a href="category.php?category=diy">DIY</a></div>
      <div class="box"><span>08</span><a href="category.php?category=gaming">Gaming</a></div>
      <div class="box"><span>09</span><a href="category.php?category=finance">Finance</a></div>
      <div class="box"><span>10</span><a href="category.php?category=education">Education</a></div>
      <div class="box"><span>11</span><a href="category.php?category=books">Books</a></div>
      <div class="box"><span>12</span><a href="category.php?category=pets">Pets</a></div>
      <div class="box"><span>13</span><a href="category.php?category=sports">Sports</a></div>
      <div class="box"><span>14</span><a href="category.php?category=history">History</a></div>
      <div class="box"><span>15</span><a href="category.php?category=art">Art</a></div>
      <div class="box"><span>16</span><a href="category.php?category=poetry">Poetry</a></div>
      <div class="box"><span>17</span><a href="category.php?category=short stories">Short Stories</a></div>
      <div class="box"><span>18</span><a href="category.php?category=novels">Novels</a></div>
      <div class="box"><span>19</span><a href="category.php?category=screenwriting">Screenwriting</a></div>
      <div class="box"><span>20</span><a href="category.php?category=journalism">Journalism</a></div>
   </div>
</section>

<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>
</body>
</html>