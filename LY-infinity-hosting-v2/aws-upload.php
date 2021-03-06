

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Data!!!  </title>

    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">

<style>
    *{
    padding: 0;
    margin: 0;
    }
    @media screen 
        and (min-width: 1024px)
        and (max-device-width: 3360px)
        /* and (min-device-height: 4000px) */
        and (-webkit-min-device-pixel-ratio: 1) 
        { 
        .main-data{
        /* border:1px solid black; */
        margin-left:0;
        margin-right:0;
        width:100%; 
        }
        .main-data::before{
        content:'';
        display:block;
        height:2.5rem;
        background: rgba(128, 167, 211, 0.801);

        }
        header{
            /* border: 2px solid yellow; */
        display:flex;
        justify-content:space-between;
        align-items:center;
        padding:0 1rem;
        }
        .logo{
        width: 100px;
        border-radius: 10px;
        }
        .navbar ul{
            /* border: 2px solid green; */
            padding-right: 2%;
            right: 0%;
            padding: 1.5% 1%;
            position: absolute;
            display: inline-flex;
            
        }
        .navbar ul li{
            border: 2px solid black;
            border-radius: 10px;
            margin: 0px 10px;
            list-style: none;
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 28px;
            text-align: center;
            text-decoration: none;
            background-color: lightblue;
            opacity: 0.75;
        }
        .navbar ul li a{
            text-decoration: none;
            color: maroon;
        }
        .navbar ul li:hover{
            opacity: 0.9;
        }
        .navbar ul li a:hover, .navbar li a::after{
            width: 100%;
            text-decoration: underline;
            color: blue;
            transition: 0.5s;
        }
        .list{
            border: 1.8px solid black;
            background:rgba(128, 167, 211, 0.801);
            /* height: 3.5rem; */
            text-align:center;
            font-size: 42px;
        }
        .list1{
            border: 1.8px solid black;
            background:rgba(128, 167, 211, 0.801);
            /* height: 3.5rem; */
            text-align:center;
            font-size: 40px;
        }
        .icon{
        display:flex;
        align-items: center;
        font-size: 30px;  
        grid-template-columns: 1fr 1fr;
        padding: 10px 12rem;
        background:lightgray;
        margin-bottom:0.3rem;
        }
        img{
        width: 100px;
        border-radius: 10px;
        margin: 5px 5px;
        }
        footer{
        width: 100%;
        padding: 1% 0;
        /* bottom: inherit; */
        background-color: black;
        color: skyblue;
        text-align: center;
        text-decoration: none;
        }
        h2{
            color: black;
            text-decoration: none;
            text-align: center;
        }
        .clg-name a{
            text-decoration: none;
            text-align: center;
        } 
    }
    @media screen and (min-width: 90px) and (max-width: 1024px) 
    and (min-device-height: 405px) and (max-device-height: 1366px)  
    and (orientation: portrait) 
    {
        .main-data{
        /* border:1px solid black; */
        margin-left:0;
        margin-right:0;
        width:100%; 
        }
        .main-data::before{
        content:'';
        display:block;
        height:2.5rem;
        background: rgba(128, 167, 211, 0.801);

        }
        header{
            /* border: 2px solid yellow; */
        display:flex;
        justify-content:space-between;
        align-items:center;
        padding:0 1rem;
        }
        .logo{
        width: 80px;
        border-radius: 10px;
        }
        .navbar ul{
            /* border: 2px solid green; */
            width: 100px;
            padding-right: 2%;
            text-align: right;
            right: 0%;
            padding: 1.5% 1%;
            position: absolute;
            display: inline-block;
            
        }
        .navbar ul li{
            border: 2px solid black;
            border-radius: 10px;
            margin: 3px;
            /* margin-left: 20%; */
            right: 0%;
            list-style: none;
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 20px;
            text-align: center;
            text-decoration: none;
            background-color: lightblue;
            opacity: 0.75;
        }
        .navbar ul li a{
            text-decoration: none;
            color: maroon;
        }
        .navbar ul li:hover{
            opacity: 0.9;
        }
        .navbar ul li a:hover, .navbar li a::after{
            width: 100%;
            text-decoration: underline;
            color: blue;
            transition: 0.5s;
        }
        .list{
            border: 1.5px solid black;
            background:rgba(128, 167, 211, 0.801);
            /* height: 2.7rem; */
            text-align:center;
            font-size: 30px;
        }
        .list1{
            border: 1.5px solid black;
            background:rgba(128, 167, 211, 0.801);
            /* height: 2.7rem; */
            padding: 20px 10px;
            text-align:center;
            font-size: 20px;
        }
        .icon{
        display:flex;
        align-items: center;
        font-size: 15px;  
        grid-template-columns: 1fr 1fr;
        padding: 10px 1rem;
        background:lightgray;
        margin-bottom:0.3rem;
        }
        img{
        width: 70px;
        border-radius: 10px;
        margin: 5px 5px;
        }
        footer{
        width: 100%;
        padding: 1% 0;
        /* bottom: inherit; */
        background-color: black;
        color: skyblue;
        text-align: center;
        text-decoration: none;
        }
        h2{
            color: black;
            text-decoration: none;
        }
        .clg-name a{
            text-decoration: none;
            text-align: center;
        }
    }
    @media (min-width: 500px) and (max-width: 1024px) and (min-device-height: 200px) 
        and (max-device-height: 811px)  and (orientation: landscape) 
        {
            .main-data{
        /* border:1px solid black; */
        margin-left:0;
        margin-right:0;
        width:100%; 
        }
        .main-data::before{
        content:'';
        display:block;
        height:2.5rem;
        background: rgba(128, 167, 211, 0.801);

        }
        header{
            /* border: 2px solid yellow; */
        display:flex;
        justify-content:space-between;
        align-items:center;
        padding:0 1rem;
        }
        .logo{
        width: 80px;
        border-radius: 10px;
        }
        .navbar ul{
            /* border: 2px solid green; */
            width: 100px;
            padding-right: 2%;
            right: 0%;
            
            padding: 1.5% 1%;
            position: absolute;
            display: inline-block;
            
        }
        .navbar ul li{
            border: 2px solid black;
            border-radius: 10px;
            margin: 3px;
            /* margin-left: 20%; */
            right: 0%;
            list-style: none;
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 20px;
            text-align: center;
            text-decoration: none;
            background-color: lightblue;
            opacity: 0.75;
        }
        .navbar ul li a{
            text-decoration: none;
            color: maroon;
        }
        .navbar ul li:hover{
            opacity: 0.9;
        }
        .navbar ul li a:hover, .navbar li a::after{
            width: 100%;
            text-decoration: underline;
            color: blue;
            transition: 0.5s;
        }
        .list{
            border: 1.5px solid black;
            background:rgba(128, 167, 211, 0.801);
            /* height: 2.7rem; */
            text-align:center;
            font-size: 30px;
        }
        .list1{
            border: 1.5px solid black;
            background:rgba(128, 167, 211, 0.801);
            /* height: 2.7rem; */
            text-align:center;
            padding: 10px 15px;
            font-size: 20px;
        }
        .icon{
        display:flex;
        align-items: center;
        font-size: 15px;  
        grid-template-columns: 1fr 1fr;
        padding: 10px 1rem;
        background:lightgray;
        margin-bottom:0.3rem;
        }
        img{
        width: 70px;
        border-radius: 10px;
        margin: 5px 5px;
        }
        footer{
        width: 100%;
        padding: 1% 0;
        /* bottom: inherit; */
        background-color: black;
        color: skyblue;
        text-align: center;
        text-decoration: none;
        }
        h2{
            color: black;
            text-decoration: none;
        }
        .clg-name a{
            text-decoration: none;
            text-align: center;
        }
    }


</style>
    
</head>
<body>
    <div class="main-data">
        <header>
            <div class="navbar">
                <img src="logo.jpg" class="logo" usemap="#workmap">
                <map name="workmap">
                <area shape="rect" coords="34,44,270,350" alt="Computer" href="mailto: vishwajeetkadam14@gmail.com"></map>
                <ul>
                <li><a href="index2.html"><b> Home</a></li>
                <li><a href="#">Contact </a></li>
                </ul>
            </div>
        </div>	
        </header>
        <h3 class="list"><i>Uploading Objects to S3 Bucket.....</i></h3><br>
        <div class="row">
            <div class="icon">
            <br>
            <br>
            </div>
        </div><br>
        <div class="list1">
            <br>
            <br>
            <h2 style="color: green;">&emsp; 
                <?php 
                    $command = escapeshellcmd('python aws-upload.py');
                    $output = shell_exec($command);
                    echo $output;
                ?>
            </h2>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h3><i> &emsp; For any query please contact Website admin. </i></h3>
            <br>
        </div><br>
        <div class="row">
            <div class="icon">
            <br>
            <br>
            </div>
        </div><br>
        <footer> <img src="logo.jpg"><br>
            <p style="color: rgba(255, 255, 255, 0.822);">Last Update  11-Jun-21</p>
            <br>
            <p>Contact &#8644; <a style="color: rgba(255, 255, 255, 0.822)" href="mailto: vishwajeetkadam14@gmail.com">Vishwajeet Kadam</a></p>
        </footer>
    </div>
   
    
    
</body>
</html>