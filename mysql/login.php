<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table align="center" bgcolor="#CCCCCC" border="0" cellpadding="0"
    cellspacing="1" width="300">
        <tr>
            <td>
                <form method="post" name="">
                    <table bgcolor="#FFFFFF" border="0" cellpadding="3"
                    cellspacing="1" width="100%">
                        <tr>
                            <td align="center" colspan="3"><strong>User
                            Login</strong></td>
                        </tr>
                        <tr>
                            <td width="78">Email</td>
                            <td width="6">:</td>
                            <td width="294"><input id="email" name=
                            "email" type="text"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input id="password" name="password" type=
                            "password"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><input name="submit" type="submit" value=
                            "Login"> <input name="reset" type="reset" value=
                            "reset"></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
    <?php
    if(isset($_SESSION['login_user']))
{

    header("location: home.php");
} 
 else{
    if (isset($_POST['submit']))
        {     
    include("config.php");
    session_start();
    $email=$_POST['email'];
    $password=$_POST['password'];
    $_SESSION['login_user']=$email; 
    $query = mysql_query("SELECT email FROM user_details WHERE email='$email' and password='$password'");
     if (mysql_num_rows($query) != 0)
    {
     echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";   
      }
      else
      {
    echo "<script type='text/javascript'>alert('Email Or Password Invalid!')</script>";
    }
    }
}
    ?>
</body>
</html>