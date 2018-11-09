<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Prophecy Cup Regular season</title>
    <!--base style sheet-->
    <link rel="stylesheet" type="text/css" href="/prophecy/css/primarystyle.css" />
    <link rel="stylesheet" type="text/css" href="/prophecy/css/stylesheet.css" />
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
        
        <main class="formatMain">
		<div class="bannerWrapper">
			<img src="/prophecy/images/banner.png" class="banner" alt="banner"/>		
			<h1>Regular Season</h1>
		</div>
            
			<?php
        include('../../partials/format.html')
        ?>
            <p>A total of 10 teams participate in the regular season with top 6 teams advancing to playoffs. The season will be 9 weeks long and each team will play the other team once. 
            <h2>Format</h2>
            <p>Each matchup are best of 3 series. The side of the map each
            team is starting on is determaind by coin toss at the captains meeting before the week starts. The winner will get to chose for games 1 and 3, while the loser will choose for game 2. If a team is 
            not present for coin toss the other team will get side choice for all games.
            </p>
            <h2>Standings</h2>
            <p>Teams will be sorted in the standings by:</p>
            <ol>
                <li>Percentage of series won</li>
                <li>Percentage of games won</li>
                <li>Alphabetical order</li>
            </ol>
            <p>In the case of a tie breaker</p>
            <ul>
                <li>If two teams have the same percentage of series won, ties will be broken by
                <ol>
                    <li>Percentage of games won</li>
                    <li>Head to Head record</li>
                    <li>Tie breaker game</li>
                </ol>
                </li>
                <li>
                    If three or more teams have same percentage of series won
                    <ol>
                        <li>Head to head record</li>
                        <li>Percentage of games won</li>
                        <li>Tiebreaker round robin (3 teams) or bracket (4+ teams)</li>
                    </ol>
                </li>
            </ul>
        </main>
    </div>

    <?php
    include('../../partials/footer.html');
    ?>
</body>
</html>