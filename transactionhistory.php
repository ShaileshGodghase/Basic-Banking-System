<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History | SBG Bank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/d30ff5ad29.js" crossorigin="anonymous"></script> 
</head>

<body>

<?php
  include 'navbar.php';
?>
	<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>      
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'config.php';
            $sql ="select * from transaction";
            $query =mysqli_query($conn, $sql);
            while($rows = mysqli_fetch_assoc($query))
            {
        ?>
            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>      
        <?php
            }

        ?>
        </tbody>
    </table>
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