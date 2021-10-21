
<?php
session_start();

$con = new mysqli('localhost','root','','spark_bank');
define('bankName', 'MCB Bank');
$u=$_SESSION["user"];

$ar = $con->query("select * from useraccounts where id = '$u' ");
$userData = $ar->fetch_assoc();

$i=0;
$op=0;
?>
  <?php include 'header.php'?>
  </section>
  <?php require 'assets/function.php'; ?>
  <link rel="stylesheet" href="css/style.css">
  </head>
  <section  class = "mainarea">
  <h1 class = "transferh1"><?php echo  $userData["name"] ?></h1> 
  <h3><strong> Balance:<?php echo $userData["balance"]; ?></strong></h3>
    </div>
</div>



  <h5>New Transfer</h5>
  
      <form class = "formm1" method="post" >

        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="option">
    <option value="" disabled selected>Select the User</option>
        <?php   $array12 = $con->query("select * from useraccounts");
          {
            if ($array12->num_rows > 0)
            {
              while ($row12 = $array12->fetch_assoc())
              {
                  if($row12['name']==$userData['name'])
                        continue;
          ?>




            <!-- <table class="styled-table">
           <thead>
             <tr> -->
               <!-- <th scope="col"> -->
               <option value="<?php echo $row12['id'] ?>">
                 <p style=" text-align: center;font-size: x-large;"><?php echo $row12["name"]; ?></p>
</option>
<!--  </tr>
</thead>
</table> -->
          <?php
          }
          }
        }
          ?>
        </select>
        <div class="amount">
        <h3><strong> Enter Amount for tranfer</strong></h3>
        <input type='number' name='amount'  min='1' max='$userData[balance]' required>
<input class="button btn6" type="submit" name="tranfer">
</div>
      </form>
    </div>

    </div>


    <?php


     if (isset($_POST['tranfer']))
    {
      $op = $_POST['option'];

      $cre = "select * from useraccounts where id = '".$op."'";
$re = mysqli_query($con, $cre);
$r = mysqli_fetch_array($re);




  
      $amount = $_POST['amount'];
     $debited= setBalance($amount,'debit',$userData['accountNo']);
   if($debited>0)
   {
     setBalance($amount,'credit',$r['accountNo']); 
   }
    
    
      if  ($debited<0)
      {
        echo "<script>alert('Insufficient balance');window.location.href='cindex.php'</script>";
      }
      else
      {
        echo "<script>alert('Transfer Successful');window.location.href='cindex.php'</script>";
      }
        session_destroy();
    }
    ?>
  </section>
<?php include "footer.php";?>

</body>
</html>
