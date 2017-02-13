<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Todo List</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://raw.githubusercontent.com/wagerfield/parallax/master/deploy/jquery.parallax.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
        <script src="../js/script.js"></script>
    </head>

    <body>
        <div class="container-fluid text-center">

            <div class="functional-overlay" id="list">
                <div class="col-xs-12 text-center">
                    <h1> {{ heading }} </h1>
                    <p> {{ subhead }} </p>
                </div>

                <div>
                <h1> {{ user }}'s todo list </h1>
                    <ul>
                        <li v-for="thing in todolist" @remove="todolist.splice(index, 1)">
                            {{ thing }}
                            <button @click="pop">Remove</button>
                        </li>
                    </ul>
                    <input type="text" v-model="todo">
                    <button @click="update">Add</button>
                </div>

                <div class="col-xs-12 text-center copy">
                    <p>Copyright 2017 &copy; Team Unknown. All rights reserved.</p>
                </div>
            </div>
        </div>

    </body>

</html>
