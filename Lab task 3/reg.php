<?php
    session_start();

$username = "";
$username_error = "";

$name = "";
$name_error = "";

$email = "";
$email_error = "";

$password ="";
$password_error="";

$gender = "";
$gender_error = "";

$dob = "";
$dob_error = "";

$re_password ="";
$repassword_error ="";
     

    

    if (isset($_POST['submit']))
    {   
        $name        = $_POST['name'];     
        $email       = $_POST['email'];
        $username    = $_POST['username'];
        $password    = $_POST['password'];
        $re_password = $_POST['re_password'];
        //$gender      = $_POST['gender'];
       // $gender = ($_POST["gender"]);
        $dob         = $_POST['dob'];

   
        
        //if ($email == "" || $username =="" || $password == "") 
       // { 
          //  echo "Enter the all value";
        //} 
         if(empty($_POST['name'])) {
        $name_error = "*Name can not be empty";
      }


       if(empty($_POST['email'])) {
        $email_error = "*email can not be empty"; }
        

       if(empty($_POST['username'])) {
        $username_error = "*Username can not be empty";
      }

       if(empty($_POST['password'])) {
        $password_error = "*password can not be empty";
      }
if(empty($_POST['gender'])) {
       $gender_error = "*gender must be select";
      }
       if(empty($_POST['dob'])) {
        $dob_error = "*Dob can not be empty";
      }

      //  if(isset($_GET['submit']) && !isset($_GET['gender']))
        //    {
          //      echo "select a gender";
           // }
       
      //else{
       // $gender = test_input($_POST['gender']);
      //}

        else{
            if(strlen($username)<4){
                $username_error="*name must be atleast 4 char\n";

            }
            else if(strlen($password)<8){
                $password_error = " *password must be 8 chars";
                }

            else if($password != $re_password){

                echo "password & confirm password mismatch...";
            }
           else{
            if($password==$re_password)
            {
                $data = ['username'=> $username, 'password'=> $password, 'email'=>$email,'gender'=>$gender,'dob'=>$dob];
                $_SESSION['current_user'] = $data;
                
                $file_location='data.json';

                if(filesize($file_location)==0){
                    $myfile=fopen($file_location, 'w');
                    $json=json_encode($data);
                    fwrite($myfile, '['.$json.']');
                }
                else{
                    $users = json_decode(file_get_contents($file_location),true);
                    $flag = false;
                    if(isset($_SESSION['loggedInUser'])){
                        $loggedInUser = $_SESSION['loggedInUser'];
                    }
                    
                    foreach ($users as $user => $entry){ 
                        if($entry['username'] == $loggedInUser['username']){
                            $data[$user]['email'] == $data['email'];
                            $data[$user]['username'] == $data['username'];
                            $data[$user]['password'] == $data['password'];
                            $data[$user]['gender'] == $data['gender'];
                            $data[$user]['dob'] == $data['dob'];
                            $_SESSION['loggedInUser'] = $data;
                            $flag = true;
                            break;
                        }
                    }
                    if($flag){ 
                        file_put_contents($file_location, json_encode($users));
                    }
                    else{
                
                        array_push($users, $data);
                        file_put_contents($file_location, json_encode($users));
                    }
                }
            }
            else
            {
                echo "password did't match";
            }
        }
    }
 }  
?> 

<!DOCTYPE html>
<html>
<head>
    
    <title>Registration</title>
    <style type="text/css">
        .error {
            color: red;
        }
    </style>
</head>
<body>
   
   
            
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">               
                <fieldset style="width:320px" >
                    <legend>
                        <h3>
                            REGISTRATION
                        </h3>
                    </legend>
                    <table align="center" height="400px" >
                        <tr>
                            <td>Name<br></td>
                            <td>:<input type="text" name="name" value="">
                            <span class="error"><?php echo $name_error; ?></span></td>
                        </tr>
            
                        <tr>
                            <td>Email <br></td>        
                            <td> :<input type="email" name="email" value="">
                            <span class="error"><?php echo $email_error; ?></span> </td>
                        </tr>
            
                        <tr>
                            <td>User Name<br></td>
                            <td>:<input type="text" name="username" value="">
                             <span class="error"><?php echo $username_error; ?></span></td>
                        </tr>
                        <tr>
                            <td>Password</td>        
                            <td>:<input type="password" name="password" value=""><br>
                            <span class="error"><?php echo $password_error; ?></span></td>
                        </tr>
            
                        <tr >
                            <td>Confirm Password <br></td>
                            <td>:<input type="password" name="re_password" value="">
                            <span class="error"><?php echo $repassword_error; ?></td>
                        </tr>
    
                        <tr height='30px'>
                            <td colspan="2">
                                <fieldset>
                                    <legend>Gender</legend>
                                    <input type="radio" name="gender" value="Male"> Male
                                    <input type="radio" name="gender" value="Female"> Female
                                    <input type="radio" name="gender" value="Other"> Other
                                    <span class="error"><?php echo $gender_error; ?>
                                </fieldset>
                            </td>
                        </tr>
    
                        <tr>        
                            <td colspan="2">
                                <fieldset>
                                    <legend>Date of Birth</legend>
                                    <input type="date" name="dob" value="">
                                    <span class="error"><?php echo $dob_error; ?>
                                </fieldset>
                            </td>
                        </tr> 
    
                        <tr align="right">
                            <td  height=" 50px">
                                <input type="submit" name="submit" value="Submit">
                                <input type="reset" name="click" value="reset">
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
    
</body>
</html>