 <?php  
 session_start();  
 $connect = mysqli_connect("localhost", "root", "jbrag42669", "testdb");  


 

//echo 'yes';
 if(isset($_POST["uname"]))  
 {  
      $query = "  
      SELECT * FROM user  
      WHERE username = '".$_POST["uname"]."'  
      AND passwd = '".$_POST["psw"]."' 
      
      ";

      //echo $query;



      $result = mysqli_query($connect, $query);  
      if(mysqli_num_rows($result) > 0)  
      {  
           $_SESSION['uname'] = $_POST['uname'];  
           header("location:balance.php");
      }  
      else  
      {  
           echo 'No';  
      }  
 }  
 if(isset($_POST["action"]))  
 {  
      unset($_SESSION["uname"]);  
 }  
 ?>