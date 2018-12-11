<?php
/**
 * Created by PhpStorm.
 * User: scottlandunderwood
 * Date: 2018-12-08
 * Time: 15:56
 */
?>

<html>
<head>
    <title>Simple Form</title>
</head>
<body>
<h2>Thank You For Submitting The Form</h2>

<!-- Getting the output from the form value provided through 'form.php' -->
First Name: <?php echo $_POST['Fname']; // displaying the value of First Name provided in 'Form.php' while submitting the form ?><br/>
Last Name: <?php echo $_POST['Lname']; // displaying the value of Last Name provided in 'Form.php' while submitting the form ?><br/>
Confirm Date: <?php echo $_POST['ConfirmDate']; // displaying the value of Username provided in 'Form.php' while submitting the form ?><br/>
Requested Time: <?php echo $_POST['ReqTime']; // displaying the value of Password provided in 'Form.php' while submitting the form ?><br/>
<!-- End of getting the value from the submitted form -->
</body>
</html>
