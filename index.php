<?php
if($_POST) {
       // If user presses submit button
       $name = $_POST['name'];
       $comment = $_POST['comment'];
       $handle = fopen("comments.html","a");
       // a stands for append here. 
       fwrite ($handle,"<b>" . $name . "</b>:<br>" . $comment . "<br>");
       // We used bold for our Name and fwrite to print the input data
        fclose($handle);
        



}

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
     <h1>Comment section
     </h1>
     <form action="" method="POST">
         <div>
             <label> Name: </label>
             <input type="text" name="name" placeholder="Enter your Name">

         </div>
         <br>
         <div>
             <label> Comment: </label>
             <textarea name="comment" placeholder="Type your Comment here."></textarea>
         </div>
         <br>
         <input type="submit" name="submit" value="Submit">
        <p> I referred to Youtube video <a href="https://www.youtube.com/watch?v=3bgdhcqlMXg", target = "_blank"> (link) </a> for php part </p>




     </form>
     <?php include "comments.html"; ?>


</body>




</html>