$(function() {
    $("#scene").parallax();

    var home = new Vue({
        el: "#home",
        data: {
            heading: "Remember the Cow",
            subhead: "Never dare to forget!",
            userprompt: "Your Username",
            passprompt: "Your Password",
            user: "",
            pass: "",
            err: ""
        },
        methods: {
            login: function() {
                $.ajax({
                    type: "POST",
                    url: "php/signin.php",
                    data: {
                        username: this.user,
                        password: this.pass
                    },
                    success: function(res) {
                        console.log(res);
                        if (res["error"] == "") {
                            window.location = res["location"];
                        } else {
                            home.err = res["error"];
                        }
                    },
                    error: function(req, textStatus, err) {
                        console.log(textStatus + ": " + err);
                    }
                });
            },
            register: function() {
                $.ajax({
                    type: "POST",
                    url: "php/signup.php",
                    data: {
                        username: this.user,
                        password: this.pass
                    },
                    success: function(res) {
                        window.location = res["location"];
                    },
                    error: function(req, textStatus, err) {
                        console.log("error has occured");
                        console.log(textStatus + ": " + err);
                    }
                });
            }
        }

    });

    var list = new Vue({
        el: "#list",
        data: {
            heading: "Remember the cow",
            subhead: "Never Forget",
            user: "",
            todolist: [],
            todo: ""
        },
        methods: {
            update: function() {
                if (this.todo != "") {
                    this.todolist.push(this.todo);
                    this.todo = "";
                }

                $.ajax({
                    type: "POST",
                    url: "submit.php",
                    data: {
                        user: list.user,
                        list: list.todolist
                    }
                });
            },
            pop: function(index) {
                this.todolist.splice(index, 1);
                list.update();
            },
            exit: function() {
                $.ajax({
                    type: "POST",
                    url: "logout.php",
                    success: function() {
                        window.location = "../start.php";
                    }
                });
            }
        },
        mounted: function() {
            $.ajax({
                type: "POST",
                url: "load.php",
                success: function(res) {
                    console.log(res["user"]);
                    res['data'].forEach(function(item) {
                        list.todolist.push(item);
                    });
                    list.user = res['user'];
                },
                error: function(req, textStatus, err) {
                        console.log(textStatus + ": " + err);
                }
            });
        }
    });
});
