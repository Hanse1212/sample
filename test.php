<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            display: inline-block;
        }
        td {
            text-align: center;
            background-color: white;
            width: 30px; height: 30px;
            margin: 0; padding: 0;
            border: 1px solid black;
        }
        .dotted {
            position: relative;
            left: 100px;
        }
        .color td:nth-child(1){background-color: red;}
        .color td:nth-child(2){background-color: orange;}
        .color td:nth-child(3){background-color: yellow;}
        .color td:nth-child(4){background-color: green;}
        .color td:nth-child(5){background-color: blue;}
        .color td:nth-child(6){background-color: purple;}
        .color td:nth-child(7){background-color: black;}
        .color td:nth-child(8){background-color: white;}
    </style>
    <script>
        var aa = "white";
        function setAa(a){
            aa = a;
        }
        function change(a){
            var back = document.getElementById(a);
            back.style.backgroundColor = aa;
        }
        function HSet(){
            setAa('#' + document.getElementById('H').value);
        }
    </script> 
</head>
<body>
    <div class="dotted">
    <?php
        $width = $_POST["witdh"];
        $height = $_POST["height"];
        echo "<table>";
        for($i=0; $i<$height; $i++){
            echo "<tr>";
            for($j=0; $j<$width; $j++){
                $a += 1;
                echo "<td onclick='change($a)' id='$a'></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <table>
        <tr class="color">
            <td onclick="setAa('red')"></td>
            <td onclick="setAa('orange')"></td>
            <td onclick="setAa('yellow')"></td>
            <td onclick="setAa('green')"></td>
            <td onclick="setAa('blue')"></td>
            <td onclick="setAa('purple')"></td>
            <td onclick="setAa('black')"></td>
            <td onclick="setAa('white')"></td>
        </tr>
        <tr>
            <td>#</td>
            <td colspan="5"><input type="text" id="H"></td>
            <td colspan="2"><button onclick="HSet()">보내기</button></td>
        </tr>
    </table>
    </div>
    <a href="index.php">이전페이지</a>
</body>
</html>