<?php 
if(empty($_GET['message'])) $message = '';
else $message = $_GET['message']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>

    <div> <?= $message; ?> </div>
    <form action='operAula19.php' method='post'>
        <input type='hidden' name='opr' value='register'>
        <table>
            <tr>
                <th colspan=2> Register </th>
            </tr>
            <tr>
                <td> Nome: </td>
                <td> <input type='text' name='nome'> </td>
            </tr>
            <tr>
                <td> Email: </td>
                <td> <input type='email' name='email'> </td>
            </tr>
            <tr>
                <td> Senha: </td>
                <td> <input type='password' name='senha'> </td>
            </tr>
            <tr>
                <td> </td>
                <td> <input type='submit' value='Registrar'> </td>
            </tr>
        </table>
    </form>
</body>
</html>