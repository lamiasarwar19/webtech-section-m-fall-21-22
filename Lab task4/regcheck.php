<?php
    session_start();

    if (isset($_POST['submit']))
    {        
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password  = $_POST['password'];
        $re_password = $_POST['re_password'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        
        if ($email == "" || $username =="" || $password == "") 
        { 
            echo "Enter the all value";
        } 
        else{
            if($password==$re_password)
            {
                $data = ['username'=> $username, 'password'=> $password, 'email'=>$email,'gender'=>$gender,'dob'=>$dob];
                $_SESSION['current_user'] = $data;
                
                $file_location='file.json';

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
                            $data[$user]['username'] == $data['username'];
                            $data[$user]['email'] == $data['username'];
                            $data[$user]['dob'] == $data['username'];
                            $data[$user]['password'] == $data['password'];
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
                header('location:login.html');
            }
            else
            {
                echo "password did't match";
            }
        }
    }
?> 