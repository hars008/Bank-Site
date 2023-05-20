<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="mystyle1.css" />
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
          <td class="navi"><a href="ass1.html">Dashboard</a></td>
          <td class="navi"><a href="accountopening.html">Open A/C</a></td>
          <td class="navi"><a href="#">Loan</a></td>
          <td class="navi"><a href="#">Deposit</a></td>
        </tr>
      </tbody>
    </table>
   <br><br>
    
   <div class="dashboard_table" style="display:flex;justify-content:space-around;">
    <!-- <table class="depositer" border="1" style="float:left">
    <tr><th colspan="4">LIST OF depositer</th></tr>
     <tr> 
        <th>Name</th>
        <th>A/C No.</th>
        <th>Balance</th>
        <th>Details</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td></tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td></tr>
    </table> -->
    <?php
      include('conn.php');
      $sql="select customer_name, depositor.account_number, balance from
      depositor inner join account on depositor.account_number=
      account.account_number" ;
      $res=mysqli_query($conn, $sql);
      echo '<table border="1" class="depositor" style="float:left;"> <tr><th colspan="4">LIST OF depositer</th></tr><tr><th>Name</th><th>A/C No.</th><th>
      Balance</th><th>Details</th></tr>';
      while($result=mysqli_fetch_assoc($res))
      {
      echo '<tr><td>'. $result['customer_name'] . '</td><td>'.
      $result['account_number'] . '</td><td>' . $result['balance'] . '</td><td><a
      href="account_detail.php?uid=' . $result['customer_name'] . ' ">View
      Details</a></td></tr>';
      }
      echo '</table>';
    ?>

    <?php
      include('conn.php');
      $sql="select customer_name, borrower.loan_number, amount from
      borrower inner join LOAN on borrower.loan_number=
      LOAN.LOAN_NUMBER" ;
      $res=mysqli_query($conn, $sql);
      echo '<table border="1" class="borrower"> <tr><th colspan="4">LIST OF borrower</th></tr><tr><th>Name</th><th>LOAN No.</th><th>
      Amount</th><th>Details</th></tr>';
      while($result=mysqli_fetch_assoc($res))
      {
      echo '<tr><td>'. $result['customer_name'] . '</td><td>'.
      $result['loan_number'] . '</td><td>' . $result['amount'] . '</td><td><a
      href="account_detail.php?uid=' . $result['customer_name'] . ' ">View
      Details</a></td></tr>';
      }
      echo '</table>';
    ?>
    <!-- <table class="borrower" border="1">
         <tr><th colspan="4">LIST OF borrower</th></tr>
     <tr> 
        <th>Name</th>
        <th>A/C No.</th>
        <th>Balance</th>
        <th>Details</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td></tr>
    <tr>
         <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </table> -->
   </div>
  </body>
</html>
