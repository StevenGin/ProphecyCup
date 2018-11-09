<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>Prophecy Cup League of Legends</title>
    <!--base style sheet-->
    <link rel="stylesheet" type="text/css" href="css/primarystyle.css" />
    <!--navigation-->
        <link rel="stylesheet" type="text/css" href="css/navtop.css" />
    <link rel="stylesheet" type="text/css" href="css/navdrop.css" />


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
        include('partials/navigation.html')
    ?>

    <div class="mainwrapper">
        <div class="advertisement">
            <p>advertisement here</p>
        </div>
        <!--advertisement-->
    </div>
    <!--heading css primarystyle-->
    <!--heading with jhin and pic writting over top-->

    <div id="imagewrapper">
        <header>
            <img id="jhin" src="images/jhin.gif" alt="Jhin Image" />
            <div class="title">
                <h1>Prophecy Cup</h1>
                <h2>League of Legends Community <br /> and Tournaments</h2>
            </div>
        </header>
        <aside>
            <h3>Scheduled Matches (EST)</h3>
            <h4>
                <a href=" https://www.twitch.tv/prophecy_cup/">
                    <img src="images/social/twitch16.png" alt="twitch symbol" />/Prophecy Cup
                </a>
            </h4>

            <!--output form information here-->
            <div id="matchesInfo">
                <p>
                    <span class="redHighlight">07/22</span>
                </p>
                <p class="indent">
                    <span class="redHighlight">7:00 P.M.</span>
                    <span class="spacing">TKE VS NLY</span>
                </p>
                <p class="indent">
                    <span class="redHighlight">9:00 P.M.</span>
                    <span class="spacing">DFRE VS EFC</span>
                </p>
                <p>
                    <span class="redHighlight">07/23</span>
                </p>
                <p class="indent">
                    <span class="redHighlight">7:00 P.M.</span>
                    <span class="spacing">YFR VS NLY</span>
                </p>
            </div>
        </aside>
    </div>

    <!--main tournaments and community-->
    <div class="mainwrapper">

        <section>
                <div>
                    <img src="images/vayneEmote.png" alt="vayne emote"/>
					<h3 class="color">Tournaments</h3>
                    <p>
                        Prophecy Cup's Tournament is designed to create the most competitive and fair experience for players
                        of all ELOs. Teams are evenly matched based on a point system created by the staff in order to make
                        each team as close in power as possible.
                    </p>
                </div>
                <div>
					<img src="images/poroEmote.png" alt="buddy poro emote" />
					<h3 class="color">Community</h3>
					
                    <p>
                        Prophecy Cup's community is active at all hours of the day. Occasionally, we host fun events such as
                        Trivia and Dr. Mundo Dodgeball tournaments in order to bring the community together.
                    </p>
                </div>
        </section>
        <div class="advertisement">
            <p>advertisement here</p>
        </div>
        <!--advertisement-->
        <!--main content-->
        <div id="announcements">
            <h3 class="color">Announcements</h3>
            <!--output form information here-->
            <ul>
                <li>
                    <span class="redHighlight">July 22 9:00PM </span> Mundo Dodgeball
                </li>
                <li>
                    <span class="redHighlight">July 26 12:00AM </span>Season Starts
                </li>
                <li>
                   <span class="redHighlight">August 1 5:00PM </span>Captains meeting
                </li>
                <li><span class="redHighlight">August 31 12:00am </span>Season Ends</li>
            </ul>
        </div>
    </div>
      <?php
    include('partials/footer.html');
    ?>
 

</body>

</html>