<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Prophecy Cup Announcement Form</title>
    <!--base style sheet-->
    <link rel="stylesheet" type="text/css" href="../css/primarystyle.css" />
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css" />

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

    <div class="mainwrapper">

        <main class="formatMain">
            <div class="bannerWrapper">
                <img src="/prophecy/images/banner.png" class="banner" alt="banner" />
                <h1 id="teamNameBanner">Prophecy Cup Standings</h1>
            </div>
            <table id="team">
                <tr>
                    <th id="standings">Standing</th>
                    <th id="playoff">Playoff Contention</th>
                    <th colspan="2">Team</th>
                    <th class="games">Series</th>
                    <th class="games">Games</th>
                </tr>
                <tr  class="teamRow">
                    <td class="teamRow">1</td>
                    <td>Qualified</td>
                    <td class="teamLogo"><img src="/prophecy/images/teams/gbc.png" alt="GBC logo" /></td>
                    <td class="teamName">Goth Boi Clique</td>
                    <td>8-1</td>
                    <td>15-4</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Qualified</td>
                    <td><img src="/prophecy/images/teams/noIcon.png" alt="No Team Icon" /></td>
                    <td class="teamName">Vortex</tdclass="teamName">
                    <td>8-1</td>
                    <td>14-6</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Qualified</td>
                    <td><img src="/prophecy/images/teams/noIcon.png" alt="No Team Icon" /></td>
                    <td  class="teamName">IRL Sluts</td>
                    <td>6-3</td>
                    <td>11-4</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Qualified</td>
                    <td><img src="/prophecy/images/teams/noIcon.png" alt="No Team Icon" /></td>
                    <td class="teamName">twitch.tv/JBiezus</td>
                    <td>6-3</td>
                    <td>9-7</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Qualified</td>
                    <td><img src="/prophecy/images/teams/noIcon.png" alt="No Team Icon" /></td>
                    <td class="teamName">Spell It Chat</td>
                    <td>6-3</td>
                    <td>9-7</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Qualified</td>
                    <td><img src="/prophecy/images/teams/noIcon.png" alt="No Team Icon" /></td>
                    <td class="teamName">The Hashslinging Slashers</td>
                    <td>4-5</td>
                    <td>6-11</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Didn't Qualify</td>
                    <td><img src="/prophecy/images/teams/noIcon.png" alt="No Team Icon" /></td>
                    <td class="teamName">Desolate</td>
                    <td>3-6</td>
                    <td>5-13</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Didn't Qualify</td>
                    <td><img src="/prophecy/images/teams/noIcon.png" alt="No Team Icon" /></td>
                    <td class="teamName">Team-0</td>
                    <td>3-6</td>
                    <td>3-11</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Disbanded</td>
                    <td><img src="/prophecy/images/teams/noIcon.png" alt="No Team Icon" /></td>
                    <td class="teamName">Rabid Raccoons</td>
                    <td>1-8</td>
                    <td>0-8</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Didn't Qualify</td>
                    <td><img src="/prophecy/images/teams/noIcon.png" alt="No Team Icon" /></td>
                    <td class="teamName">Free Tay-K</td>
                    <td>0-9</td>
                    <td>0-3</td>
                </tr>
            </table>

        </main>
    </div>

            <?php
            include('../partials/footer.html');
            ?>

</body>
</html>