<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
        <table>
            <tr>
                <td>가로</td>
                <td><input type="number" name="witdh"></td>
            </tr>
            <tr>
                <td>세로</td>
                <td><input type="number" name="height"></td>
            </tr>
        </table>
        <input type="submit" value="설정">
        <input type="reset" value="초기화" onclick="go()">
    </form>

</body>
</html>