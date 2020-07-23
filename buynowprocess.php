<?php 
  require_once('connection.php');
     include('crudinsert.php');

     if(isset($_POST['submit']))
     {
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $age = (int)$_POST['age'];
       $email = $_POST['email'];
       $phone = (int)$_POST['phone'];
       $town = $_POST['town'];
       $state = $_POST['state'];
       $zipcode = (int)$_POST['zipcode'];
       $country = $_POST['country'];
       $vname = $_POST['vname'];
   
       $query = "INSERT INTO `buy`(`fname`, `lname`, `age`, `email`, `phone`, `town`, `state`, `zipcode`, `country`, `vname`) VALUES ('$fname','$lname','$age','$email','$phone','$town','$state','$zipcode','$country','$vname')";
       $res = mysqli_query($con,$query);
   
       
   
     }
      
     $accessories=5000; 
     $tax=1000; 
     $vname=$_REQUEST["vname"];
     $rec = mysqli_query($con,"SELECT * FROM twowheeler where vehiclename='$vname' ");
     $record= mysqli_fetch_array($rec);
                          
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    #p{
      font-size:25px;
      background-color:aqua;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="logo.jpg" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                Invoice #: <?php $rec = mysqli_query($con,"SELECT * FROM twowheeler where vehiclename='$vname' ");
                                            $record= mysqli_fetch_array($rec);                       
                                            $name = $record['vehicleid'];
                                            echo $name;?><br>
                                Created: <?php
                                    
                                    echo date("Y-m-d ") . "<br>";
                                    date_default_timezone_set("Asia/Calcutta");
                                    echo date("h:i:sa"). "<br>";
                                    ?><br>
                               
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                  <select name="" id="">
                    <option value="Net Banking">Net Banking</option>
                    <option value="Cash on Delivery">Cash on Delivery</option>
                    <option value="Debit/Credit card">Debit/Credit card</option>
                  </select>
                </td>
            </tr>
            
            
            <tr class="details">
                <td>
                    
                </td>
                
                <td>
                    
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Items
                </td>
                
                <td>
                    Price
                </td>
            </tr>
            
            <tr class="item">
                <td>
                  <?php
                                           
                    $name = $record['vehiclename'];
                    echo "Vehicle name : ";
                    echo $name; 
                  ?>  
                </td>
                
                <td>
                <?php 
                                         
                  $Cost = $record['cost'];
                  echo $Cost;
                ?>
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Accessories
                </td>
                
                <td>
               <?php echo $accessories; ?>
                </td>
            </tr>
            
            <tr class="item last">
                <td>
                    Tax
                </td>
                
                <td>
                <?php echo $tax; ?>
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total: <?php 
                    $total= $accessories + $tax + $Cost;
                    echo $total;
                   ?>
                </td>
            </tr>
        </table>
    </div>
    <p align="center" id="p">To download your invoice click here
      <br>
    </p>
    <p align="center">
    <button onclick="myFunction()">Print Invoice</button>
    </p>

      

      <script>
      function myFunction() {
        window.print();
      }
      </script>
	<button > <a href="drop-down-menu-homepage.php">Homepage</a> </button>
</body>
</html>