<?php
$name = $_POST["name"];
echo "<div class='container'><h1>$name</h1></div>";
?>

<style type="text/css">
    body{
        margin:0;
        padding:0;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #000;

    }
.container{
    position: absolute;
}
.container h1{
    position: relative;
    font-family: sans-serif;
    background: linear-gradient(70deg,red,blue,green,yellow,red);
    background-size: 400%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 100px;
    animation: animate 3s linear infinite;
}

@keyframes animate{
    0%{
        transform: rotate(0deg) skewX(0deg);
        background-position: 100%;
    }

   25%{
        transform: rotate(10deg) skewX(10deg);
    }
    50%{
        transform: rotate(0deg) skewX(0deg);
    }

    75%{
        transform: rotate(-10deg) skewX(-10deg);
    }

    100%{
        transform: rotate(0deg) skewX(0deg);
        background-position: 400%;
    }

}

</style>