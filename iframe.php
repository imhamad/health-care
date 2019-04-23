<?php
//Connectin the Web App to Database to fetch Data

include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- <meta name="viewport" content="width=device-width, initial-scale=1">-->
 <!-- Latest compiled and minified CSS -->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">



 <link rel="stylesheet" href="table.css">
 <meta charset="UTF-8">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Record Display</title>
</head>
<body>
<!--<iframe src="index.php" frameborder="0" width="93%" height="860px" style="margin-left:4%;"></iframe>-->
<div class="text-center"><h4><strong>Lab User's Registration Record for Harsh Sir</strong></h4></div>
<div style="overflow-x:auto;">
<br><br>
<table class="table table-striped" id="datatable">
<thead>
<th>ID</th>
<th>User Name</th>
<th>User Email</th>
<th>User Phone</th>
<th>User Test Value</th>
<th>Prescription Image</th>
<th>Address</th>
<th>Date</th>
</thead>
<?php

 $query = "select * from userdata";
 $run = mysqli_query($connection,$query);
 while($row=mysqli_fetch_array($run)){

  ?>
<tr class="custom_width">
 <td><?php echo $row['user_id'];?></td>
 <td><?php echo substr($row['user_name'],0,25);?></td>
 <td><?php echo $row['user_email'];?></td>
 <td><?php echo $row['user_phone'];?></td>
 <td><?php echo $row['user_test_value'];?></td>
 <td><img src="<?php echo $row['prescription'];?>" alt="" width="50px"></td>
 <td><?php echo $row['address'];?></td>
<td><?php echo date('D-M-Y');?></td>
</tr>
 <?php  }?>
</table>


<br><br>
<caption class="text-center"><h4 class="text-center" style="margin-left:0%; font-weight:bolder;">Test Value</h4></caption>
<table class="table table-striped">
<tr>

 <td>1</td>
 <td>2</td>
 <td>3</td>
 <td>4</td>
</tr>
<tr>
 <td>DialCare Basic ( 63 tests )</td>
 <td>Cardio - Diabeto Package ( 94 TESTS)
</td>
 <td>Diabetes Package ( 68 TESTS)</td>
 <td>Cardio - Diabeto Package ( 94 TESTS)</td>
</tr>
</table>
 </div>
 <!-- </iframe>-->
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>

  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
 $(document).ready( function () {
    $('#datatable').DataTable();
} );
</script>


</body>
</html>
