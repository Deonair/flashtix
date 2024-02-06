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

<!-- begin login -->
<div class="container">

    <div id="div_login">
        <h1>Log in om verder te gaan</h1>
        <div id="message"></div>
        <div>
            <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Gebruikersnaam" />
        </div>
        <div>
            <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Wachtwoord"/>
        </div>
        <div>
            <input type="button" value="Login" name="but_submit" id="but_submit" />
            <input type="button" value="Registreren" onclick="window.location.href='registreren.php';"/>
        </div>
     </div>

</div>

            <!-- einde login -->
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




