 <?php
session_start();

include('topMenu.php');
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true)
{
    header("location: Main_Prof.php");
    exit;

}

require_once  "config.php";

$username = $password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    //check if username is empty
    if(empty(trim($_POST["username"])))
    {
        $username_err = "Please enter username.";
    }
    else{
        $username = trim($_POST["username"]);
    }

    //check if password is empty
    if(empty(trim($_POST["password"])))
    {
        $password_err = "Please enter your password.";
    }
     else{
        $password = trim($_POST["password"]);
    }

    //validate credentials
    if(empty($username_err) && empty($password_err))
    {
        
        $sql = "SELECT id, username, password FROM Users WHERE username = :username";

        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $param_username = trim($_POST["username"]);

            if($stmt->execute())
            {
                if($stmt->rowCount() == 1)
                {
                    if($row = $stmt->fetch())
                    {
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password  = $row["password"];
                        //if(password_verify($password, $hashed_password))
                        if($hashed_password == $password)
                        {
                            session_start();

                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["sessionId"] = $username;
                            $_SESSION["loggedin_time"] = time();


                            header("location: ActivityPage.php");
                           // header("location: Main_Prof.php");
                        } else{
                            $password_err = "The username or password you entered is incorrect.";
                        }

                    }
                }else{

                        $username_err = "The username or password you entered is incorrect.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        unset($stmt);

    }

    unset($pdo);

}

?>
 <html lang="en">
 <body>
    <div class="wrapper">
        <p></p>
        <p></p>
        <h2 style="text-align: center">Login</h2>
        <p style="text-align: center">Please fill in your credentials to Login</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div style="margin-bottom: 1em <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <!--<label>Username</label>-->
                <input type="text" required name="username" placeholder="Enter username..." style="display: block; width: 20%; height: 34px; padding: 6px 12px; margin: 0 auto;
                       font-size: 14px; line-height 1.42857143; color: #555; background-color: #fff; background-image: none;
                       border: 1px solid #ccc; border-radius: 4px; -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0 .075);
                       box-shadow: inset 0 1px 1px rgba(0,0,0 .075); -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
                       -o-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s; transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
                value="<?php echo $username; ?>">
                <center><label for="username">Username</label></center>
                <span style="display: block; margin-top: 5px; margin-bottom: 5px; color: #737373">
                    <?php echo $username_err; ?>
                </span>
            </div>
            <div style="margin-bottom: 1em <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <!--<label>Password</label>-->
                <input type="password" required name="password" placeholder="Enter password..." style="display: block; width: 20%; height: 34px; padding: 6px 12px; margin: 0 auto;
                    font-size: 14px; line-height 1.42857143; color: #555; background-color: #fff; background-image: none;
                    border: 1px solid #ccc; border-radius: 4px; -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0 .075);
                    box-shadow: inset 0 1px 1px rgba(0,0,0 .075); -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
                    -o-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s; transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;">

		<center><label for="password" style="password: block; margin: 0 50px ">Password</label></center>
                <span style="display: block; margin-top: 5px; margin-bottom: 5px; color: #737373">
                    <?php echo $password_err; ?>
                </span>
            </div>
            <div style="margin-bottom: 15px">
                <input type="submit" value="Login" style="display: block; margin: 0 auto">
            </div>
        </form>
 </body>
 </html>


