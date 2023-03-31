<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    $_SESSION['bid']=$_REQUEST['id'];
    $x=$_REQUEST['id'];

    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c9f4d01211.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            /box-sizing: border-box;/
            list-style: none;
            text-decoration: none;
        }

        body {
            
       /* background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg clip-path='url(%26quot%3b%23SvgjsClipPath1013%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='rgba(79%2c 235%2c 105%2c 1)'%3e%3c/rect%3e%3ccircle r='93.335' cx='51.23' cy='-61.93' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='93.335' cx='437.94' cy='337.51' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='93.335' cx='731.4' cy='756.2' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='47.345' cx='223.74' cy='366.95' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='99.5' cx='690.13' cy='139.1' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='104.39' cx='390.12' cy='533.24' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='171.245' cx='644' cy='151.53' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='76.845' cx='66.3' cy='136.97' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='180.99' cx='1276.43' cy='471.52' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='57.74' cx='939.14' cy='522.76' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='166.21' cx='509.17' cy='106.98' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='178.695' cx='766.68' cy='74.26' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='99.63' cx='309.62' cy='32.83' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='145.655' cx='537.05' cy='409.24' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='75.045' cx='44.7' cy='275.17' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='186.42' cx='231.07' cy='412.11' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='77.155' cx='348.96' cy='442.64' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='60.83' cx='320.52' cy='95.25' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='146.13' cx='1305.85' cy='311.1' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='70.095' cx='934.13' cy='238.88' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='65.715' cx='1091.96' cy='495.9' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='184.22' cx='867.62' cy='96.02' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='49.045' cx='1103.28' cy='521.84' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='51.065' cx='904.13' cy='348.01' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='90.85' cx='943.66' cy='99.78' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='90.185' cx='927.17' cy='87.89' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='102.855' cx='237.53' cy='239.82' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='126.78' cx='43.38' cy='480.12' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='117.91' cx='121.26' cy='74.27' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='128.16' cx='43.47' cy='180.26' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='140.105' cx='1263.01' cy='233.52' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='61.48' cx='805.18' cy='175.01' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='111.95' cx='112.21' cy='525.37' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='79.57' cx='1188.68' cy='44.81' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='117.46' cx='424.85' cy='254.36' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='128.13' cx='1243.64' cy='9.82' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='132' cx='455.61' cy='283.07' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='151.495' cx='313.93' cy='422.46' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='54.19' cx='26.98' cy='403.63' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='69.595' cx='1151.76' cy='507.85' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='157.85' cx='1097.38' cy='513.52' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='145.785' cx='1002.24' cy='31.8' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='89.385' cx='19.99' cy='47.44' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='171.13' cx='1069.15' cy='342.19' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='83.595' cx='1064.05' cy='199.38' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='181.16' cx='1307.64' cy='469.28' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='101.37' cx='715.15' cy='345.49' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='156.91' cx='141.17' cy='289.18' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='56.595' cx='66.04' cy='94.09' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='108.95' cx='872.8' cy='144.29' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='66.58' cx='1031.51' cy='155.73' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='174.98' cx='633.52' cy='532.25' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='163.315' cx='1412.32' cy='41.57' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='92.255' cx='1255.42' cy='159.06' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='99.06' cx='1180.11' cy='412.82' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='59.755' cx='329.94' cy='45.27' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='52.29' cx='908.86' cy='280.71' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='76.315' cx='762.83' cy='383.09' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='117.995' cx='252.51' cy='511.85' stroke='%23036de3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3c/g%3e%3cdefs%3e%3cclipPath id='SvgjsClipPath1013'%3e%3crect width='1440' height='560' x='0' y='0'%3e%3c/rect%3e%3c/clipPath%3e%3c/defs%3e%3c/svg%3e"); */
       background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg clip-path='url(%26quot%3b%23SvgjsClipPath1014%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='rgba(79%2c 235%2c 105%2c 1)'%3e%3c/rect%3e%3ccircle r='93.335' cx='51.23' cy='-61.93' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='93.335' cx='437.94' cy='337.51' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='93.335' cx='731.4' cy='756.2' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='47.345' cx='223.74' cy='366.95' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='99.5' cx='690.13' cy='139.1' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='104.39' cx='390.12' cy='533.24' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='171.245' cx='644' cy='151.53' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='76.845' cx='66.3' cy='136.97' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='180.99' cx='1276.43' cy='471.52' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='57.74' cx='939.14' cy='522.76' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='166.21' cx='509.17' cy='106.98' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='178.695' cx='766.68' cy='74.26' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='99.63' cx='309.62' cy='32.83' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='145.655' cx='537.05' cy='409.24' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='75.045' cx='44.7' cy='275.17' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='186.42' cx='231.07' cy='412.11' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='77.155' cx='348.96' cy='442.64' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='60.83' cx='320.52' cy='95.25' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='146.13' cx='1305.85' cy='311.1' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='70.095' cx='934.13' cy='238.88' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='65.715' cx='1091.96' cy='495.9' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='184.22' cx='867.62' cy='96.02' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='49.045' cx='1103.28' cy='521.84' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='51.065' cx='904.13' cy='348.01' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='90.85' cx='943.66' cy='99.78' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='90.185' cx='927.17' cy='87.89' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='102.855' cx='237.53' cy='239.82' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='126.78' cx='43.38' cy='480.12' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='117.91' cx='121.26' cy='74.27' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='128.16' cx='43.47' cy='180.26' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='140.105' cx='1263.01' cy='233.52' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='61.48' cx='805.18' cy='175.01' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='111.95' cx='112.21' cy='525.37' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='79.57' cx='1188.68' cy='44.81' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='117.46' cx='424.85' cy='254.36' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='128.13' cx='1243.64' cy='9.82' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='132' cx='455.61' cy='283.07' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='151.495' cx='313.93' cy='422.46' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='54.19' cx='26.98' cy='403.63' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='69.595' cx='1151.76' cy='507.85' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='157.85' cx='1097.38' cy='513.52' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='145.785' cx='1002.24' cy='31.8' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='89.385' cx='19.99' cy='47.44' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='171.13' cx='1069.15' cy='342.19' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='83.595' cx='1064.05' cy='199.38' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='181.16' cx='1307.64' cy='469.28' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='101.37' cx='715.15' cy='345.49' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='156.91' cx='141.17' cy='289.18' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='56.595' cx='66.04' cy='94.09' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='108.95' cx='872.8' cy='144.29' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='66.58' cx='1031.51' cy='155.73' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='174.98' cx='633.52' cy='532.25' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='163.315' cx='1412.32' cy='41.57' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='92.255' cx='1255.42' cy='159.06' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='99.06' cx='1180.11' cy='412.82' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='59.755' cx='329.94' cy='45.27' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='52.29' cx='908.86' cy='280.71' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='76.315' cx='762.83' cy='383.09' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='117.995' cx='252.51' cy='511.85' stroke='%2372af09' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3c/g%3e%3cdefs%3e%3cclipPath id='SvgjsClipPath1014'%3e%3crect width='1440' height='560' x='0' y='0'%3e%3c/rect%3e%3c/clipPath%3e%3c/defs%3e%3c/svg%3e");
       background-repeat:no-repeat;
       background-size:100% 900%;
        }

        .navbar .img1 {
            width: 10%;
            height: 20%;
            float: left;
            margin-top: 0px;
            margin-left: 0px;

        }

        .navbar .img2 {

            float: left;
            height: 84%;
            width: 30%;
            margin-right: -98%;
            margin-top: 10px;
        }

        .navbar h1 {
            color: white;
            font-family: cursive;
            margin-left: 42%;
            margin-top: -6%;
        }

        .wrapper {
            display: flex;
            position: relative;
        }

        .wrapper .sidebar {
            position: fixed;
            width: 561px;
            height: 100%;
            background: green;
            padding: 30px 0;
            margin: 0px 498px;
        }

        .wrapper .sidebar h2 {
            color: white;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 30px;
        }

        .wrapper .sidebar ul li {
            padding: 15px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            border-top: 1px solid rgba(225, 225, 225, 0.05);
            text-align: center;
            font-size: 23px;
        }

        .wrapper .sidebar ul li a {
            color: honeydew;
            display: block;
        }

        .wrapper .sidebar ul li a .fas .glyphicon {
            width: 25px;

        }

        .wrapper .sidebar ul li:hover {
            background: rgba(56, 196, 79, 0.25);
            margin: 24px;
        }

        .wrapper .sidebar ul li:hover a {
            color: #fff;
        }

        .d-flex {
            margin-top: -6%;
        }
        ul{
            list-style:none;
        }
        .btn a{
        text-decoration:none;
        color:white;
        font-weight:bold;
      }
      .btn{
          margin-top:-3%;
      }
    </style>
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: rgba(10, 231, 84, 0.5)">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="img1" src="images/logo5.png" alt="" width="30" height="24"
                    class="d-inline-block align-text-top">
                <img class="img2" src="images/logotext1.png" alt="" width="30" height="24"
                    class="d-inline-block align-text-top">
            </a>
            <h1>BUYER PAGE</h1>
            <!--form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form-->
            <button class="btn btn-warning" style="margin-right:-395px" ><a href="buyerorders.php?id=<?php echo $x;?>">MY ORDERS</a></button>
        <button class="btn btn-success" ><a href="main.html">LOGOUT</a></button>
        </div>
    </nav>
    <section class="wrapper">
        <div class="sidebar">
            <h2>Category</h2>
            <ul>
                <li><a href="products.php"><i class="fas fa-tractor"></i> Products</a></li>
                <li><a href="crops.php"><i class="fab fa-pagelines"></i> Crops</a></li>
                <li><a href="seeds.php"><i class="fas fa-seedling"></i> Seeds</a></li>
                <li><a href="greens.php"><i class="fas fa-leaf"></i> Greens</a></li>
                <li><a href="fruits.php"><i class="fas fa-apple-alt"></i> Fruits</a></li>
                <li><a href="vegetables.php"><i class="fas fa-carrot"></i> Vegetables</a></li>
            </ul>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>