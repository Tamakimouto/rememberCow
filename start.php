<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Remember the Cows</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://raw.githubusercontent.com/wagerfield/parallax/master/deploy/jquery.parallax.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
        <script src="js/script.js"></script>
    </head>

    <body>
        <div class="container-fluid text-center">
            <div class="col-sm-offset-3 col-sm-6 scene-container">
                <ul id="scene">
                    <li class="layer" data-depth="0.20"><img src="img/cow.png"></li>
                    <li class="layer" data-depth="0.60"><img src="img/grass3.png"></li>
                    <li class="layer" data-depth="0.40"><img src="img/grass2.png"></li>
                    <li class="layer" data-depth="0.15"><img src="img/grass.png"></li>
                    <li class="layer" data-depth="0.00"><img class="img-over" src="img/border.png"></li>
                </ul>
            </div>

            <div class="functional-overlay" id="home">
                <div class="col-xs-12 text-center">
                    <h1> {{ heading }} </h1>
                    <p> {{ subhead }} </p>
                </div>

                <div class="form-container">
                    <input type="text" v-model="user" :placeholder="userprompt">
                    <input type="password" v-model="pass" :placeholder="passprompt">
                    <button value="login" @click="login">Signin</button>
                    <button value="register" @click="register">Signup</button>
                    <p> {{ err }} </p>
                </div>


                <div class="col-xs-12 text-center copy">
                    <p>Copyright 2017 &copy; Team Unknown. All rights reserved.</p>
                </div>
            </div>
        </div>

    </body>

</html>
