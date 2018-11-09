<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Prophecy Cup Matches Form</title>
    <!--base style sheet-->
    <link rel="stylesheet" type="text/css" href="../css/primarystyle.css" />

    <!--css forms sheets-->
    <link rel="stylesheet" type="text/css" href="../css/form.css" />

    <!--navigation-->
    <link rel="stylesheet" type="text/css" href="/prophecy/css/navtop.css" />
    <link rel="stylesheet" type="text/css" href="/prophecy/css/navdrop.css" />


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

    <script type="text/javascript" src="/prophecy/java/nav.js">

                        /***********************************************
                        * Flex Level Drop Down Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
                        * Please keep this notice intact
                        * Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
                        ***********************************************/

    </script>
</head>
<body>
    <?php
    include('../partials/navigation.html');
    ?>

    <div class="mainwrapper">
        <div class="advertisement"><p>advertisement here</p></div><!--advertisement-->
    </div>
    <!--announcement and admin forms-->
    <div class="mainwrapper">
        <header>
            <h1>Home Page Admin Forms</h1>
        </header>
        <h2>Match Schedules</h2>
        <p>Fill out the form below when a team schedules a match. Please make sure to put time in EST until further notice.</p>
        <form action="" method="post">
            <fieldset>
                <div class="spacing">
                    <!--date and time-->
                    <label for="date">Date</label>
                    <input type="date"
                           id="date"
                           name="date" />
                </div>
                <div class="spacing">
                    <label for="time">Time</label>
                    <input type="time"
                           id="time"
                           name="time" />
                </div>
                <div class="spacing">
                    <!--team starting on blue side of map-->
                    <label for="blue">Blue side</label>
                    <input type="text"
                           id="blue"
                           name="blue" />
                    <p>VS</p>
                    <!--team starting on red side of map-->
                    <label for="red">Red side</label>
                    <input type="text"
                           id="red"
                           name="red" />
                </div>
                <div class="spacing">
                    <input type="submit" value="Submit" />
                </div>
            </fieldset>
        </form>


    </div>


    <?php
    include('../partials/footer.html');
    ?>

</body>
</html>