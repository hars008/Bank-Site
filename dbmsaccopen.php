<?php
include('conn.php');
session_start();
$customer_name=$_POST["customer_name"];
$customer_street=$_POST["Address"];
$customer_city=$_POST["City"];
// echo "connected";
$sql="insert into master_customer values ('$customer_name','$customer_street','$customer_city')";
$res=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="mystyle.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account Opening</title>
    <link rel="icon" type="image/x-icon" href="https://e7.pngegg.com/pngimages/728/384/png-clipart-vadodara-bank-of-baroda-central-bank-of-india-online-banking-bank-angle-text-thumbnail.png">
  </head>
  <body>
    <header>
      <img
        src="https://i.pinimg.com/originals/64/19/09/641909d6f37f5523a915b48a0a74a10c.png"
        alt="logo"
        class="logo"
        width="125"
        height="140"
      />
      <h1><center>BANK OF BARODA</center></h1>
    </header>
    <table class="navigation">
      <tbody>
        <tr>
          <td class="navi"><a href="ass1.html">Home</a></td>
          <td class="navi"><a href="accountopening.html">Open A/C</a></td>
          <td class="navi"><a href="#">Loan</a></td>
          <td class="navi"><a href="#">Deposit</a></td>
        </tr>
      </tbody>
    </table>
   <br><br>
    <form id="Account_opening">
      <h1 style=" color: aliceblue;background-color: rgb(238, 39, 39);margin: 0px; padding: 20px; border: 2px black solid;"><center>Account Opening</center></h1>
        
        <table>
          <tr>
            <td class="fields"><label for="Name">Customer Name:</label></td>
            <td class="inputs"><?php echo $_POST["customer_name"]?></td>
          </tr>
          <tr>
            <td class="fields"><label for="Address">Address:</label></td>
            <td class="inputs">
            <?php echo $_POST["Address"]?>
            </textarea>
            </td>
          </tr>
          <tr>
            <td class="fields"><label for="City">City:</label></td>
            <td class="inputs"> <?php echo $_POST["City"] ?> </td>
          </tr>
          <tr>
            <td></td>
            <!-- <td><button type="submit" value="submit" style="float:left;">Submit</button><button type="reset" value="reset">Reset</button></td> -->
          </tr>
        </table>
      
    </form>
  </body>
</html>


<!-- // header('location:accountopening.html');

// else
// {
// header('location:accountopening.html');
// } -->
