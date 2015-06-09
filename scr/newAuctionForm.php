<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Νέα Δημοπρασία</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/navbar.css" rel="stylesheet">

    <link href="../css/newAuctionFormStyle.css" rel="stylesheet">

    <link href="../css/globalShadowBoxStyle.css" rel="stylesheet">


    <!-- ---------------------------------BETA ---------------------------------------------------- -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="path/to/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="path/to/js/fileinput.min.js" type="text/javascript"></script>
    <!-- bootstrap.js below is only needed if you wish to use the feature of viewing details
         of text file preview via modal dialog -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- --------------------------------- ---------------------------------------------------- -->



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <link rel="stylesheet" type="text/css" href="mainstyle.css">
    <![endif]-->


    <script type="text/javascript">
        function colorChange() {
            var bgColor = prompt("Enter hex color", "");
            document.body.style.backgroundColor = bgColor;
        }
    </script>

</head>

<body style="background-color:#D7D7D7">


<!--  ---------------------------------------------------------- NAV BAR OLD ----------------------------
   <div class="navbar-wrapper" style="margin-left: 450px;">
       <div class="container" id="nav"  style="margin-top: 15px; width: auto">
           <ul  class="nav navbar-nav">
               <li><a href="index.php">Αρχική</a></li>
               <li><a href="hotel.php">Ξενοδοχεία</a></li>
               <li><a href="auction.php">Δημοπρασίες</a></li>
               <li><a href="about.php">Σχετικά με Εμάς</a></li>
               <li><a href="contact.php">Επικοινωνία</a></li>
           </ul>
       </div>
   </div>
</div>
<!--====================================================================================================================================-->

<!------------------------------------------------------ HEADER  --------------------------------------------------------------------------- -->
<div class="container" style="margin-top: 10px;" id="headerWithoutNavBar">
    <div style="float: right;">
        <form class="form-inline">
            <div class="form-group">
                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember me
                </label>
            </div>
            <button type="button" class="btn btn-primary">Sign in</button>
            <a href="registers.php">
                <button type="button" class="btn btn-primary">Register</button>
            </a>
        </form>
    </div>
    <div id="photoContainer">
        <img class="logoImage">
    </div>
</div>
<!--====================================================================================================================================-->

<!------------------------------------------------ CURRENT NAVBAR-------------------------------------------------------------------------------------->
<div class="navbar-wrapper" style="margin-left: 450px;">
    <div class="container" id="nav">
        <nav id="navtag" role="navigation" style=" margin-top: 50px;">
            <!-- class="navbar navbar-inverse navbar-static-top" -->
            <div class="container" style="width: auto;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--
                    <a class="navbar-brand" href="http://www.jssor.com/index.php">Bootstrap Carousel</a>
                         -->
                </div>
                <div id="navbar"> <!-- class="navbar-collapse collapse" -->
                    <ul class="nav navbar-nav"> <!---->
                        <li><a href="index.php">Αρχική</a></li>
                        <li><a href="hotel.php">Ξενοδοχεία</a></li>
                        <li><a href="auction.php">Δημοπρασίες</a></li>
                        <li><a href="about.php">Σχετικά με Εμάς</a></li>
                        <li><a href="contact.php">Επικοινωνία</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!--====================================================================================================================================-->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<br>




    <div id="conteinerMarketing" class="container marketing shadowStyle"><!-- BG COLOR-->

        <!--<hr class="featurette-divider"> -->


        <!-- Main Container body
      ============================================================================================= -->
        <!-------------------------- -->
        <div class="head_title">
            <p>

            <h3><i>Προσθήκη Δημοπρασίας</i></h3></p>
            <hr class="featurette-divider">
        </div>
        <!-- =============================================PERIEXOMENO SELIDAS ================================================-->

        <p class="infoTxt"> Καλώς ήρθατε στην φόρμα συμπλήρωσης ξενοδείων. Παρακαλούμε συμπληρώστε τα παρακάτω πεδία με
            τις
            απαραίτητες πληροφορίες
            για να καταχωρηθεί η ξενοδοχειακή σας μονάδα στην σελίδα μας</p>

        <br><br><br>

        <div class="container marketing">
            <div class="head_title">
                <p><h4><i>Φορμα Εγγραφής</i></h4></p>
                <hr class="featurette-divider">
            </div>


            <div class="row">
                <div class="col-xs-12" id="auctionFormLabels">
                    <form class="form-horizontal">

                        <div class="form-group">
                            <p for="auctionHotelName" class="col-xs-2 control-label">Όνομα Ξενοδοχείου </p>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="auctionHotelName" placeholder="Όνομα">
                            </div>
                        </div>


                        <div class="form-group">
                            <p for="auctionLongDescription" class="col-xs-2 control-label">Περιγραφή </p>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="auctionLongDescription"
                                       placeholder="Περιγραφή">
                            </div>
                        </div>

                        <div class="form-group">
                            <p for="auctionHotelRooms" class="col-xs-2 control-label">Αριθμός Δωματίων </p>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="auctionHotelRooms"
                                       placeholder="Αριθμός Δωματίων">
                            </div>
                        </div>

                        <div class="form-group">
                            <p for="auctionHotelRoomType" class="col-xs-2 control-label">Τύπος Δωματίου</p>

                            <div class="col-sm-4">
                                <select class="form-control">
                                    <option>Δίκλινο</option>
                                    <option>Τρίκλινο</option>
                                    <option>Τετρακλινο</option>
                                    <option>Διαμέρισμα</option>
                                    <option>Studio</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <p for="auctionRoomCheckIn" class="col-xs-2 control-label">Ημ/νια Άφιξης </p>

                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="auctionRoomCheckIn">
                            </div>
                        </div>

                        <div class="form-group">
                            <p for="auctionRoomCheckIn" class="col-xs-2 control-label">Ημ/νια Αναχώρησης </p>

                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="auctionRoomCheckOut">
                            </div>
                        </div>

                        <div class="form-group">
                            <p for="auctionHotelStartPrice" class="col-xs-2 control-label">Τιμή Εκκίνησης </p>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="auctionHotelStartPrice"
                                       placeholder="">
                            </div>
                        </div>

                        <div class="form-group">
                            <p for="auctionHotelLessPrice" class="col-xs-2 control-label">Ελάχιστη Τιμή </p>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="auctionHotelLessPrice"
                                       placeholder="">
                            </div>
                        </div>

                        <div class="form-group">
                            <p for="auctionHotelLessPrice" class="col-xs-2 control-label">Ενεργεί Εξαγορά </p>

                            <div class="col-sm-offset-1 col-sm-1 ">
                                <div class="checkbox">
                                    <input type="checkbox">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <p for="auctionHotelByOutPrice" class="col-xs-2 control-label">ΤΙμή Εξαγοράς </p>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="auctionHotelByOutPrice"
                                       placeholder="">
                            </div>
                        </div>


                        <div class="form-group">
                            <p for="auctionHotelStarts" class="col-xs-2 control-label">Ημ/νια Εκκίνησης </p>

                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="auctionHotelStarts">
                            </div>
                        </div>

                        <div class="form-group">
                            <p for="auctionHotelEnds" class="col-xs-2 control-label">Ημ/νια Λήξης </p>

                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="auctionHotelEnds">
                            </div>
                        </div>

                        <div class="form-group">
                            <p for="auctionHotelRoomType" class="col-xs-2 control-label">Τύπος Δωματίου</p>

                            <div class="col-sm-4">
                                <select class="form-control">
                                    <option>Ενεργή</option>
                                    <option>Ανενεργή</option>
                                    <option>Σε Αναμονή</option>

                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <p for="hotelPhotosInput">Φωτογραφία</p>

                            <div class="col-sm-4">
                                <input type="file" id="hotelPhotosInput">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Εισαγωγή</button>
                            </div>
                        </div>

                    </form>
                </div>


            </div>

        </div>

        <br><br><br><br><br>


    </div>
    <!-- /.container -->

    <br><br>

    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>

        <p>&copy; Your Hotel In Action 2015. &middot; <a href="#">Privacy</a> &middot; </p>
        <button type="button" class="btn btn-warning" onclick="colorChange()">Bg Changer</button>
        <button type="button" class="btn btn-warning" onclick="colorChange()">Conteiner Changer</button>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>


</body>
</html>