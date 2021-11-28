<?php
include "logic.php";


?>




<!doctype html>
<html lang="en">
  <head>
    <title>blog site</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      

  <div class="container mt-5">
        <?php if(isset($_GET['info'])){?>

            <?php if($_GET['info'] == 'added'){?>
            <div class="alert alert-success" role="alert">
                post has been added

            </div>
         <?php   } else if($_GET['info'] == 'updated'){?>

             <div class="alert alert-success" role="alert">
                post has been added

            </div>
            <?php   } else if($_GET['info'] == 'delete'){?>

<div class="alert alert-danger" role="alert">
   post has been deleted successfully
</div>

<?php   }?>

       
        
        <?php   }?> 
        
      
      
      <div class="text-center">
          <a href="create.php" class="btn btn-outline-dark">+ CRATE A NEW POST </a>

      </div> 

      <div class="row">
          <?php foreach($querry as $q){?>
          <div class="col-4 d-flex justify-content-center align-item-center">
              <div class="card text-white bg-dark mt-5">
              <div class="card-body" style="width:18rem;">
                <h5 class="card-title"><?php echo $q['title']; ?></h5>
                <p class="card-body"><?php echo $q['content'];?> </p>
                <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">read more <span class="text-danger">&rarr;</span></a>

              </div>

          </div>
          </div>
          <?php }?>
        </div>

  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>