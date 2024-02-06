<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FlashTix</title>
    <meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1">


     <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="js/flashtix.js"></script>
    <link rel="stylesheet" href="css/flashtix.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
        $(document).ready(function(){

            $("#but_submit").click(function(){
                var username = $("#txt_uname").val().trim();
                var password = $("#txt_pwd").val().trim();

                if( username != "" && password != "" ){
                    $.ajax({
                        url:'checkUser.php',
                        type:'post',
                        data:{username:username,password:password},
                        success:function(response){
                            var msg = "";
                            if(response == 1){
                                window.location = "flashtix.php";
                            }else{
                                msg = "Foute Gebruikersnaam of wachtwoord!";
                            }
                            $("#message").html(msg);
                        }
                    });
                }
            });

        });
    </script>
    <style>

        #login .container #login-row #login-column #login-box {
            margin-top: 1px;
            max-width: 1500px;
            height: 320px;
            border: 1px solid whitesmoke;
            background-color: lightgrey;
            border-radius: 5px;
        
        #login .container #login-row #login-column #login-box #login-form {
            padding: 5px;
        }
        #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
        }
    </style>
</head>
<body>
<div data-role="page" class="page" id="homepage">
    <div data-role="page" id="lastminute">
        <a class="knop" href="#homepage"
           data-role="button">Terug</a>
    </div>
    <div class="header" data-role="header" data-theme="b">
        <div class="nav" data-role="controlgroup">
            <div class="ui-grid-b">
                <div class="ui-block-a">
                    <a class="knop" href="#homepage"
                       data-role="button"
                       data-icon="home"
                       data-iconpos="left">Home</a>
                </div>

                <div class="ui-block-b">
                    <a class="knop" href="#homepage"
                       data-role="button">Welkom</a>
                </div>

                <div class="ui-block-c">
                    <a class="knop" href="#lastminutepage"
                       data-role="button"
                       data-icon="arrow-r"
                       data-iconpos="left"
                       data-transition="slidedown">Lastminute</a>
                </div>
            </div> <!-- /grid -->
        </div> <!-- nav -->
    </div><!-- /header -->

    <!-- begin registratie -->

    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="opgeslagen_accounts.php" method="post">
                            <h3 class="text-center text-info">Account aanmaken</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Gebruikersnaam:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Wachtwoord:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Registreren">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- einde registratie -->

    <footer>
        <br><br>
        <div class="footer" data-role="footer" data-theme="b">
            <div class="nav" data-role="controlgroup">
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                        <a class="knop" href="#agendapage"
                           data-role="button"
                           data-icon="grid"
                           data-iconpos="left">Agenda</a>
                    </div>
                    <div class="ui-block-b">
                        <a class="knop" href="#locatiepage"
                           data-role="button"
                           data-icon="search"
                           data-iconpos="left">Location </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>