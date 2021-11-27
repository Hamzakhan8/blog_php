<?php
$conn=mysqli_connect("localhost","root","","blog_php","3308");

if(!$conn){

    echo "<h2 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>connected</h2>";
}

$sql="SELECT * FROM data";
$querry=mysqli_query($conn,$sql);

if(isset($_POST["submit"])){

    $title=$_POST['title'];
    $content=$_POST['content'];
    $sql="INSERT INTO data(title,content) VALUES('$title','$content') ";

    $result=mysqli_query($conn,$sql);
    header('location:index.php?info=added');

    


}
?>