<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roly-Poly Farm</title>
</head>
<body style="margin:0; padding:0;">
    <h1 style="text-align:center; font-size:10vw;">WELCOME</h1>
    <h3 style="text-align:center; font-size:2.5vw;">to the roly-poly farm</h3>
    <div style="margin:0; padding:0; width:100vw; display:flex; align-items:center;">
        <img style="width:20vw;" src="images/poly-1.jpg" alt="">
        <img style="width:20vw;" src="images/poly-2.jpg" alt="">
        <img style="width:20vw;" src="images/poly-3.jpg" alt="">
        <img style="width:20vw;" src="images/poly-6.jpg" alt="">
        <img style="width:20vw;" src="images/poly-5.jpg" alt="">
    </div>
    <strong><p style="font-size: 2vw; text-align: center;">Here's a roly-poly fact: </p></strong>
    <p style="font-size: 1.5vw; text-align: center;">
    <?php 
        $conn = mysqli_connect("localhost", "root", "", "POLY_DATA") or die("Connection failed: " . mysqli_connect_error()); 

        $result = mysqli_query($conn, "SELECT FACT_DESCRIPT FROM FACT ORDER BY RAND( ) LIMIT 1;"); 
        $fact = mysqli_fetch_all($result, MYSQLI_ASSOC);

        echo $fact[0]["FACT_DESCRIPT"];  
    ?>
    </p>
</body>
</html>