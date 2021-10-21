<?php
session_start();
$con = new mysqli('localhost','root','','spark_bank');
define('bankName', 'MCB Bank');
?>

<?php include 'header.php' ?>
</section>
<div class = "cshow" >
   <h1>Account Details</h1>


<section id="title">
  <div class="container-fluid">
  <tbody>
    <table class="table">
     <thead class="table-dark">
       <tr class = "w3-light-grey">
         <th scope="col">S.No</th>
         <th scope="col">Holder Name</th>
         <th scope="col">Account No.</th>
         <th scope="col">Branch Name</th>
         <th scope="col">Current Balance</th>
         <th scope="col">Account type</th>
         <th scope="col">Contact</th>
         <th scope="col"></th>
       </tr>
     </thead>
     <tbody>      
       <?php
         $i=0;
          $array = $con->query("select * from useraccounts,branch where useraccounts.branch = branch.branchId");
         // $array = $con->query("select * from useraccounts");
         if ($array->num_rows > 0)
         {
           while ($row = $array->fetch_assoc())
           {$i++;
       ?>
         <tr>
           <th scope="row"><?php echo $i ?></th>
           <td><strong><?php echo $row['name'] ?></strong></td>
           <td><strong><?php echo $row['accountNo'] ?></strong></td>
           <td><strong><?php echo $row['branchName'] ?></strong></td>
           <td><strong>₹<?php echo $row['balance'] ?></strong></td>
           <td><strong><?php echo $row['accountType'] ?></strong></td>
           <td><strong><?php echo $row['number'] ?></strong></td>
           <td>
             <a class="btn btn-info" role="button" href="show.php?id=<?php echo $row['id'] ?>"  data-toggle='tooltip' title="View More info">View</a>

           </td>

         </tr>
       <?php
           }
         }
        ?>
     </tbody>
   </table>
</div>
</div>
<footer>
<?php include "footer.php";?>

    </footer>

</body>
</html>

      