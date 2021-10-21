<?php 
session_start();
$con = new mysqli('localhost','root','','spark_bank');
define('bankName','MCB Bank');
$ar = $con->query("select * from useraccounts where id = '$_GET[id]' ");
$_SESSION["user"]=$_GET["id"];
$userData = $ar->fetch_assoc();
?>
<?php include 'header.php' ?>
</section>
</head>
  <div class="header">


<h1>User Profile</h1>

<?php
  $array = $con->query("select * from useraccounts,branch where useraccounts.id = '$_GET[id]' AND useraccounts.branch = branch.branchId");
  $row = $array->fetch_assoc();
 ?>

 <section id="title">
  <div class="container-fluid">
    <table class="table table-info table-striped">
      <tbody>
        <tr>
          <td class=><strong>Name</strong></td>
          <th><?php echo $row['name'] ?></th>
          <td><strong>Account No</strong></td>
          <th><?php echo $row['accountNo'] ?></th>
        </tr><tr>
          <td><strong>Branch Name</strong></td>
          <th><?php echo $row['branchName'] ?></th>
          <td><strong>Branch Code</strong></td>
          <th><?php echo $row['branchNo'] ?></th>
        </tr><tr>
          <td><strong>Current Balance</strong></td>
          <th><?php echo $row['balance'] ?></th>
          <td><strong>Account Type</strong></td>
          <th><?php echo $row['accountType'] ?></th>
        </tr><tr>
          <td><strong>Contact Number</strong></td>
          <th><?php echo $row['number'] ?></th>
          <td><strong>Address</strong></td>
          <th><?php echo $row['address'] ?></th>
        </tr>
      </tbody>
    </table>
</div>
</section>
  <div class = "btnpmr"> 
    <a div class="btn btn-primary" role="button" href="transfer.php">Transfer Money</a>
  </div>    
</div>

<?php include "footer.php";?>

</body>
</html>
