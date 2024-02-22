<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 20px solid black;
            margin-left: auto;
            margin-right: auto; 
            border-collapse: collapse;
            border: black;
            outline: solid black;
            border-radius: 1px;
            background-color: blue;
            width: 300px;
            height: 30px;
            box-shadow: 10px 10px 20px 0px rgba(0, 0, 0, 0.5);
        }
        display{
            background: white;
            text-align: center;
            width: 40px;
            padding: 20px;
            border: 1px solid black;
        }
        td {
            width: 50px;
            padding: 15px;
        }
        tr {
            width: 50px;
            padding: 15px;
        }
        input[type="button"]{
            width: 100%;
            padding: 20px 40px;
            background-color: silver;
            color:white;
            margin-bottom: 10px;
            border: none;
            border-radius: 20px;
            font-weight:bold;
            font-size: large;
            box-shadow: 10px 10px 20px 0px rgba(0, 0, 0, 0.5);
        }
        input[type="button"]:hover {
            background-color: lightblue;
        }
        input[type="text"]{
            width: 400px;
            padding: 10px;
            text-align: justify;
            font-size: large;
            border-radius: 1px;
            outline: 3px solid black;
            text-align: center;

        }
    </style>
</head>
<body>
<center>
    <h1>KALKULATOR PART 2</h1>
    <form class="display" name="form1" action="" method="post">
        <input type="text" name="text1" id=""><br>
        </center>
        <br>
        <table border="2" width="450" height="400">
            <tr>
                <td><input type="button" value="1" onClick="form1.text1.value+='1'"></td>
                <td><input type="button" value="2" onClick="form1.text1.value+='2'"></td>
                <td><input type="button" value="3" onClick="form1.text1.value+='3'"></td>
                <td><input type="button" value="x" onClick="form1.text1.value+='*'"></td>
            </tr>
            <tr>
                <td><input type="button" value="4" onClick="form1.text1.value+='4'"></td>
                <td><input type="button" value="5" onClick="form1.text1.value+='5'"></td>
                <td><input type="button" value="6" onClick="form1.text1.value+='6'"></td>
                <td><input type="button" value="/" onClick="form1.text1.value+='/'"></td>
            </tr>
            <tr>
                <td><input type="button" value="7" onClick="form1.text1.value+='7'"></td>
                <td><input type="button" value="8" onClick="form1.text1.value+='8'"></td>
                <td><input type="button" value="9" onClick="form1.text1.value+='9'"></td>
                <td><input type="button" value="+" onClick="form1.text1.value+='+'"></td>
            </tr>
            <tr>
                <td><input type="button" value="0" onClick="form1.text1.value+='0'"></td>
                <td><input type="button" value="=" onClick="form1.text1.value=eval(form1.text1.value)"></td>
                <td><input type="button" value="c" onClick="form1.text1.value=''"></td>
                <td><input type="button" value="-" onClick="form1.text1.value+='-'"></td>
            </tr>
        </table>
    </br>

        
    </form>
</body>
</html>