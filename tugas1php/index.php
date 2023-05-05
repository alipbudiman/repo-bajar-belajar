<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="login.php">   
        <table widht="40%" align="center" cellpedding="2" cellspacing="2">
            <tr>
                <td widht="13%"> Username </td>
                <td> <input type="text" name="username"></td> 
            </tr>
            <tr>
                <td widht="13%"> Password </td>
                <td> <input type="text" name="password"></td> 
            </tr>
            <tr>
                <td> <input type="submit" name="btnLogin" value="Login"> </td>
                <td> <input type="reset" name="reset" value="Reset"> </td>
            </tr>
        </table>
    </form>
</body>
</html>