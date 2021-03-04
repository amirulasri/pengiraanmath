<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengiraan matematik</title>
</head>
<body>
    <h2>Penambahan dua nombor</h2>
    Nombor 1<input type="number" name="" id="nombor1"><br>
    Nombor 2<input type="number" name="" id="nombor2">
    <br>
    <button onclick="kira()">Kira</button>

    <script>
        function kira(){
            no1 = document.getElementById("nombor1").value;
            no2 = document.getElementById("nombor2").value;
            no1int = parseInt(no1);
            no2int = parseInt(no2);
            alert(no1int+no2int);
        }
    </script>
</body>
</html>