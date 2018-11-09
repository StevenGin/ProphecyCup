<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Prophecy Cup Playoffs</title>
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
        
        <main>
		<div class="bannerWrapper">
			<img src="/prophecy/images/banner.png" class="banner" alt="banner"/>		
			<h1>Playoffs</h1>
		</div>
           
		   <?php
        include('../../partials/format.html')
        ?>
			<p>Top 6 teams at the end of the season will participate in a playoff bracket lasting 3 weeks.</p>
			<h2>Format</h2>
			<!--picture of format-->
			<img id= "playoffs" src="/prophecy/images/format/playoffs.png" alt="playoff bracket"/>
			<p>The bracket is determend by seed with the top 2 teams will receive a buy for quarterfinals. Highest seaded team for each matchup will get their choice on which side they wish to start on for their first game with all following games alternating.</p>
			<h2>Prizes</h2>
			<h3>First place</h3>
			<p>Will receive RP prize pool determained at the start of each season. This is based of advertisements/donations</p>
			<h3>Top 6</h3>
			<p>Will qualify for the following regular season.</p>
        </main>
    </div>

    <?php
    include('../../partials/footer.html');
    ?>
</body>
</html>