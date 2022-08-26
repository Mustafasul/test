
  <?php 
          // // $severname = "localhost";
          // // $usrename = "root";
          // // $password = "";
          // // $database = "test";

          // //  $coon = mysqli_connect($severname , $usrename , $password , $database);

          //  // if (!$coon){
          //  //    echo " <span style = 'color:red'> connection has problems ....</span>";

          //  //     }
          //  //  else {
          //  //    echo "<span style = 'color:green'> connection has done  successfuly...</span>";
          //  //  }

          //  if (isset($_post['submit'])) {

          //    $name = $_post["name"];
          //    $address = $_post["address"];
          //    $email = $_post["email"];
          //    $phone = $_post["phone"];

           
          //      if ($name = "" || $address = "" || $email = "" || $phone = "") {
          //        echo "<span style = 'color:red'> Fill all the fields... </span> ";
          //          }
          //      else 
          //         { 
          //      $res = mysqli_query ($coon , "INSERT INTO `users` (`name`, `address`, `email`, `phone`) VALUES ('$name', '$address', '$email', '$phone');");
          //         }

          //       if ($res = 1) {
          //         echo "record successfuly saved...";
          //            }
          //       else {
          //         echo "OOps! Your Record is'nt saved";
          //       }
          //   }


 




    include_once "conn.php";
 
      // POST, GET, SESSION, COOKIE, ...

      if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        if ($name == ""  || $phone == "" || $email == "" || $address == "" ) {
             echo " <span style='color:Red'> Please fill all  fields </span>";
                           }
            else{
              $result = mysqli_query ($conect,"INSERT INTO `users` (`name`, `address`, `email`, `phone`) VALUES ('$name', '$address', '$email', '$phone');");   
                }
          if ($result == 1){
         echo "<span style='color:green'> Your record successfuly submited </span>";
                    }
            else{
               echo "<span style = 'color:Red'>OOps Your record is`nt submited</span> " ;

        }
     
      }

     ?>

<!DOCTYPE html>
<html>
<head>
	<title> Add User </title>
    <!--<style>
    	.table_div{
              background-color: rgb(220,220,220);
              width: 250px;
              height: 180px;
              padding: 20px;
              position: absolute;
              left: 40%;
              right: 50%;

    	         }
         </style>-->

</head>
<body style="background-color:rgb(200,200,200);">
	   <h2><center> Add New User</center> </h2><hr/><hr/><br/><br/>
         <!-- <div class="table_div"  ><br/> -->
           <table align="center"> 
            <form method="POST">
          	 <tr>
          	 	  <td> Name </td>
          	 	  <td> <input type="text" name="name" placeholder="Enter your name  "> </td>

          	 </tr>
          	 <tr>
          	 	  <td> phone </td>
          	 	  <td> <input type="number" name="phone" placeholder="Enter your phone number"> </td>

          	 </tr>
          	 <tr>
          	 	  <td> Email </td>
          	 	  <td> <input type="Email" name="email" placeholder="Enter your E_mail"> </td>
          	 </tr>
          	 <tr>
          	 	  <td> Address </td>
          	 	  <td> <input type="text" name="address" placeholder="Enter your address"> </td>
          	 </tr>
             <tr> 
                 <td></td>
                 <td> <input type="submit" name="submit"  value="save"></dt>
             </tr>
          </form></table> 
          
                
          <!--</div>  -->

</body>
</html>