<html>
<style>
    a{
        color: white
        }
        a:visited{
        color: white;
        }
        .container {
        position: relative;
        text-align: center;
        color: black;

        }
        .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        }
</style>

<head>
</head>

<body >
	<img src="header.png" width=100%>
    <div class="container">
        <img style="margin-left:10px;" src="login.png" alt="board" width=600 height=683>
        <div class="centered">
            <label for="uname"><br>
                <font size="7">Username</font></br>
            </label>
            <input style="height:40px; width:180px;" type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><br>
                <font size="7">Password</br>
            </label>
            <input style="height:40px; width:180px" type="password" placeholder="Enter Password" name="psw" required>
            <p></p>
            <button style="color=#FFFFFF; height: 30px; width: 100px;" type="submit">Login</button>
        </div>
    </div>
</body>
