<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Prophecy Cup Announcement Form</title>
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
    <!--announcement and admin forms-->
    <div class="mainwrapper">
        <header>
            <h1>Home Page Admin Forms</h1>
        </header>
        <h2>Match Schedules</h2>
        <p>Fill out the form below to create an announcement. Please make sure to put the time of event in EST until further notice.</p>
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
                    <!-- content of announcement -->
                    <label for="announcements">Announcements</label>
                    <br />
                    <textarea name="announcements"
                              id="announcements"></textarea>
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