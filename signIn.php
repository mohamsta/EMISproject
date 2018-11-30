 <?php
session_start();

include('topMenu.php');
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true)
{
    header("location: welcome.php");
    exit;

}

require_once  "config.php";

$username = $password = "";
$username_err = $password_err = "";

/*if($_SERVER["REQUEST_METHOD"] == "POST")
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
        
        $sql = "SELECT id, username, password FROM users WHERE username = :username";

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
                        $username = $row["password"];
                        $hashed_password  = $row["password"];
                        if(password_verify($password, $hashed_password))
                        {
                            session_start();

                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            header("location: ActivityPage.php");
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

}*/


echo'<body>
	<div style="margin: auto; text-align: center;">
	<form method="post">
	<br/><br/><br/><label>Username:</label>
	<input type="text" placeholder="username" name="username"><br/>
	<br/>
	<label>Password:</label>
	<input type="text" placeholder="password" name="password"><br/>
	<br/>
	<input type="submit" value="Sign In">
	</form>
	<br/><a href="register.php" style="text-decoration: none;">Register here</a>
	<br/><a href="forgotpassword.php" style="text-decoration: none;">Forgot Password</a>
	</div>
	</body>';
?>


