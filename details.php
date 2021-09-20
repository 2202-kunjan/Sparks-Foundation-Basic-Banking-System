<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customer where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from customer where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert(" Negative values cannot be transferred")';
        echo '</script>';
    }
    else if($amount > $sql1['balance'])
    {
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")';
        echo '</script>';
    }

    else if($amount == 0)
    {
         echo '<script type="text/javascript">';
         echo 'alert("Zero value cannot be transferred")';
         echo '</script>';
     }

    else {
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE customer set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);

                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE customer set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);

                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transfer(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Successful');
                                     window.location='history.php';
                           </script>";
                }
                $newbalance= 0;
                $amount =0;
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <style>
		button{
      border-radius: 5px;
    border:0;
    background:red;
    color:#eee;
    line-height:37px;
    height:40px;
    width: 10%;
    cursor:pointer;
    font-size: 20px;
		}
	  button:hover{
			background-color:#777E8B;
			transform: scale(1.1);
			color:white;
		}
    input{
      width:50%;
 height:25px;
 line-height:25px;
 color:#333;
 background-color:#fff;
 border-bottom:1px solid #236;
 border-radius:3px;
 padding:3px;
    }
  select{width:50%;
 height:33px;
}
    form{
      text-align: center;
      font-size: 23px;
    }
    table{
      border-collapse: collapse;
      width: 100%;
      font-family:"Times New Roman", Times, serif;
      font-size: 23px;
      text-align: center;
    }
    
    th{
      background-color: white;
    }
    </style>
</head>

<body>
        <center><h1>Transaction</h1></center>
            <?php
                include 'config.php';
                $sd=$_GET['id'];
                $sql = "SELECT * FROM  customer where id=$sd";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Balance</th>
                </tr>
                <tr>
                    <td><?php echo $rows['id'] ?></td>
                    <td><?php echo $rows['name'] ?></td>
                    <td><?php echo $rows['email'] ?></td>
                    <td><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <section class="form">
        <label>Transfer To:</label>
        <select name="to" required>
            <option value="" disabled selected>Select</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM customer where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option value="<?php echo $rows['id'];?>" >

                    <?php echo $rows['name'] ;?> (Balance:
                    <?php echo $rows['balance'] ;?> )

                </option>
            <?php
                }
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Amount :</label>
            <input type="number" name="amount" required>
            <br><br>
            <button name="submit" type="submit" id="myBtn">Transfer</button>
          </section>
        </form>
</body>
</html>
