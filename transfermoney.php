<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money | SBG Bank</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/d30ff5ad29.js" crossorigin="anonymous"></script>
    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
<?php include 'navbar.php'; ?>
<div class="container">
    <h2 class="text-center pt-4">Transfer Money</h2>
    <br>
    <div class="row">
        <div class="col">
            <div class="table-responsive-sm">
                <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                    <thead>
                        <tr>
                        <th scope="col" class="text-center py-2">Id</th>
                        <th scope="col" class="text-center py-2">Name</th>
                        <th scope="col" class="text-center py-2">E-Mail</th>
                        <th scope="col" class="text-center py-2">Balance</th>
                        <th scope="col" class="text-center py-2">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($rows=mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td class="py-2"><?php echo $rows['id'] ?></td>
                            <td class="py-2"><?php echo $rows['name']?></td>
                            <td class="py-2"><?php echo $rows['email']?></td>
                            <td class="py-2"><?php echo $rows['balance']?></td>
                            <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td> 
                        </tr>
                        <?php
                            }
                        ?>    
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>
    <footer>
        <a href="index.php"><h1 class="text-color-red">SBG &nbsp;<span style="color: white;">Bank</span></h1></a>
        <div class="social-media">
            <a href="https://github.com/ShaileshGodghase" target="_blank"><i style="color:white" class="fab fa-github fa-2x"></i></a>
            <a href="https://www.instagram.com/shailesh_3105/" target="_blank"><i style="color:white" class="fab fa-instagram fa-2x"></i></a>
            <a href="https://www.linkedin.com/in/shailesh-godghase-b4392220a/" target="_blank"><i style="color:white" class="fab fa-linkedin-in fa-2x"></i></a>
        </div>
        <span style="color:white">Created By <a class="s" href="https://shaileshgodghase.github.io/Portfolio/" target="_blank">Shailesh Godghase</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>