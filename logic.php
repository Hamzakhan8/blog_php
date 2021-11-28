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

if(isset($_GET['id'])){

    $id=$_GET['id'];

    $sql="SELECT * FROM data WHERE id=$id";
    $querry=mysqli_query($conn,$sql);

}
if(isset($_GET['update'])){

    $id=$_GET['id'];
    $title=$_GET['title'];
    $content=$_GET['content'];

    $sql= "UPDATE data SET title='$title',content='$content' WHERE id=$id  ";
    mysqli_query($conn,$sql );
    header("location:index.php?info=update");

    exit();

}
if(isset($_POST['delete'])){

    $id=$_POST['id'];

    $sql="DELETE FROM data WHERE id=$id";
    $querry=mysqli_query($conn,$sql);
    header("location:index.php?info=delete");

}
?>