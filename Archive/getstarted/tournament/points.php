<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Prophecy Cup Point System</title>
    <!--base style sheet-->
    <link rel="stylesheet" type="text/css" href="/prophecy/css/primarystyle.css" />
    <link rel="stylesheet" type="text/css" href="/prophecy/css/stylesheet.css" />
    <!--Points table style sheet-->
    <link rel="stylesheet" type="text/css" href="/prophecy/css/tables.css" />
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
    include('../../partials/navigation.html');
    ?>
    <div class="mainwrapper">
        <div class="advertisement"><p>advertisement here</p></div><!--advertisement-->
    </div>
    
    <div class="mainwrapper">
	
    <main>
	<div class="bannerWrapper">
			<img src="/prophecy/images/banner.png" class="banner" alt="banner"/>		
			<h1>Prophecy Cup Point System</h1>
		</div>
   
        <div>
        <div id="points">
            <table>
                <tr>
                    <th>League Rank</th>
                    <th>PCUP Points</th>
                </tr>
                <tr>
                    <td class="bronze">Bronze</td>
                    <td class="bronze">1</td>
                </tr>
                <tr>
                    <td class="silver">Silver</td>
                    <td class="silver">2</td>
                </tr>
                <tr>
                    <td class="gold">Gold 5</td>
                    <td class="gold">6</td>
                </tr>
                <tr>
                    <td class="gold">Gold 4</td>
                    <td class="gold">7</td>
                </tr>
                <tr>
                    <td class="gold">Gold 3</td>
                    <td class="gold">9</td>
                </tr>
                <tr>
                    <td class="gold">Gold 2</td>
                    <td class="gold">10</td>
                </tr>
                <tr>
                    <td class="gold">Gold 1</td>
                    <td class="gold">12</td>
                </tr>
                <tr>
                    <td class="plat">Platinum 5</td>
                    <td class="plat">13</td>
                </tr>
                <tr>
                    <td class="plat">Platinum 4</td>
                    <td class="plat">15</td>
                </tr>
                <tr>
                    <td class="plat">Platinum 3</td>
                    <td class="plat">17</td>
                </tr>
                <tr>
                    <td class="plat">Platinum 2</td>
                    <td class="plat">19</td>
                </tr>
                <tr>
                    <td class="plat">Platinum 1</td>
                    <td class="plat">20</td>
                </tr>
                <tr>
                    <td class="dia">Diamond 5</td>
                    <td class="dia">21</td>
                </tr>
                <tr>
                    <td class="dia">Diamond 4</td>
                    <td class="dia">24</td>
                </tr>
                <tr>
                    <td class="dia">Diamond 3</td>
                    <td class="dia">28</td>
                </tr>
                <tr>
                    <td class="dia">Diamond 2</td>
                    <td class="dia">36</td>
                </tr>
                <tr>
                    <td class="dia">Diamond 1</td>
                    <td class="dia">45</td>
                </tr>
                <tr>
                    <td class="op">Master</td>
                    <td class="op">55</td>
                </tr>
                <tr>
                    <td class="op">Challenger</td>
                    <td class="op">65</td>
                </tr>

            </table>
        </div>
        <div>
            <p>
                A point system is used to determine the ELO of every player which gives each player a fixed score dependent on their current rank. A team is allowed a maximum of 100PCUP points shared between the 5 players that play in an offical Prophecy Cup game.
                If the sum goes over 100 points the team will face serious consequesnces. The points of each player locks in when he joins a team no matter how much they climb/drop as long as he stays on the same team. Each time a player joins a new team or rejoins a team his points will be updated
            </p>
            <h2>Point System Exceptions</h2>
            <p>
                For the point system to be determaind the play must have played 100 games in the current League of Legends season. If he doesn't he will have a meeting with the Council which will determain his point value. This also applies to players who have recent banned accounts. If
                a player has decreased ranks due to decay (valid for plat and higher) the following formula will determain your points
            </p>
            <h3>POINTS = (PRE-DECAY RANK + POST-DECAY RANK) / 2</h3>
            <h2>New seasons</h2>
            <p>At the begining of the season every players point value is reset. For as long as they have not played the hundered games in the season there rank will be determained by the previous season as long as they have played 100 games in that season.</p>
        </div>
            <div style="clear:both;"></div>
        </div>
    </main>
</div>
    <!--form using api here-->
    <?php
    include('../../partials/footer.html')
    ?>

</body>
</html>