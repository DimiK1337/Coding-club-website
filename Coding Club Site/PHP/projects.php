<?php
$servername = "127.0.0.1";
$dbname = "coding_club";
$db_table = "project_submissions";
$username = "root";
$password = "";

$query = "SELECT * from $db_table";
$conn = new mysqli($servername, $username, $password, $dbname);

?>
<html>
    <head>
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!--Custom Stylesheets-->
        <link rel="Stylesheet" href="../CSS/projects.css">

        <title>Projects</title>
    </head>
    <body>
        <div id="NavBarDiv">
            <nav>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="../HTML/index.html">Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../HTML/contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../HTML/team_about.html">Who We Are</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../PHP/projects.php">Projects</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="headline">
            <h1>Projects</h1>
            <h5>Some projects made by the club members</h5>
            <p>Maybe some text idfk tbh</p>

        </div>
        <div id="projects">
            <!--
            <ul>
                <li>
                    <h1>Sample Project 1</h1>
                    <h3>by: sample person</h3>
                    <div class="body">
                    <table>
                        <tr>
                    <td><img class=image src="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX3684893.jpg"></td>
                    <td><p>A spectre is haunting Europe—the spectre o f Communism.
                            All the Powers of old Europe have entered into a holy
                            alliance to exorcise this spectre: Pope and Czar, Metternich
                            and Guizot,2 3 French Radicals and German police spies.
                            Where is the party in opposition that has not been
                            decried as Communistic by its opponents in power? Where is
                            the Opposition that has not hurled back the branding
                            reproach of Communism, against the more advanced opposition
                            parties, as well as against its reactionary adversaries?
                            Two things result from this fact:
                            I. Communism is already acknowledged by all European
                            Powers to be itself a Power.
                            II. It is high time that Communists should openly, in the
                            face o f the whole world, publish their views, their aims, their
                            tendencies, and meet this nursery tale of the Spectre o f Communism
                            with a Manifesto of the party itself.
                            To this end, Communists of various nationalities have
                            assembled in London, and sketched the following Manifesto,
                            to be published in the English, French, German, Italian,
                            Flemish and Danish languages.</p></td>
                        </tr>
                    </table>
                    </div>
                    <h4 class="comments">Comments:(?)</h4>
                    <p> </p>
                </li>
                <li>
                    <h1>Sample Project 2</h1>
                    <h3>by: sample person 2</h3>
                    <div class="body">
                    <table>
                        <tr>
                    <td><img class="image" src="https://img3.stockfresh.com/files/i/ichiosea/m/45/4056303_stock-photo-grandpa-protecting-his-savings.jpg"></td>
                    <td><p>In the earlier epochs of history, we find almost everywhere
                            a complicated arrangement of society into various
                            orders, a manifold gradation of social rank. In ancient Rome
                            we have patricians, knights, plebeians, slaves; in the Middle
                            Ages, feudal lords, vassals, guild-masters, journeymen,
                            apprentices, serfs; in almost all of these classes, again, subordinate
                            gradations.
                            The modem bourgeois society that has sprouted from the
                            ruins o f feudal society has not done away with class antagonisms.
                            It has but established new classes, new conditions o f
                            oppression, new forms of struggle in place o f the old ones.
                            Our epoch, the epoch of the bourgeoisie, possesses,
                            however, this distinctive feature: it has simplified the class
                            antagonisms. Society as a whole is more and more splitting
                            up into two great hostile camps, into two great classes directly
                            facing each other: Bourgeoisie and Proletariat.
                            From the serfs of the Middle Ages sprang the chartered
                            burghers of the earliest towns. From these burgesses the first
                            elements of the bourgeoisie were developed.</p></td>
                        </tr>
                    </table> 
                    </div> 
                    <h4 class="comments">Comments:(?)</h4>
                    <p> </p>                       
                </li>
                <li>
                    <h1>Sample project 3</h1>
                    <h3>by: sample person 3</h3>
                    <div class="body">
                    <table>
                        <tr>
                    <td><img class="image" src="https://pbs.twimg.com/media/DoQGxT6W0AAPred.png"></td>
                    <td><p>The discovery of America, the rounding of the Cape,
                            opened up fresh ground for the rising bourgeoisie. The EastIndian
                            and Chinese markets, the colonisation o f America,
                            trade with the colonies, the increase in the means o f exchange
                            and in commodities generally, gave to commerce, to
                            navigation, to industry, an impulse never before known, and
                            thereby, to the revolutionary element in the tottering feudal
                            society, a rapid development.
                            The feudal system of industry, under which industrial
                            production was monopolised by closed guilds, now no longer
                            sufficed for the growing wants o f the new markets. The
                            manufacturing system took its place. The guild-masters were
                            pushed on one side by the manufacturing middle class; division
                            of labour between the different corporate guilds vanished
                            in the face of division o f labour in each single workshop.
                            Meantime the markets kept ever growing, the demand
                            ever     rising. Even manufacture no longer sufficed. Thereupon,
                            steam and machinery revolutionised industrial production.
                            The place o f manufacture was taken by the giant, Modem
                            Industry, the place o f the industrial middle class, by industrial
                            millionaires, the leaders of whole industrial armies,
                            the modern bourgeois</p></td>
                        </tr>
                    </table>
                    </div>
                    <h4 class="comments">Comments:(?)</h4>
                    <p> </p>
                </li>
            </ul>
        -->
            <?php
                if($conn){
                    $result = mysqli_query($conn,$query);
                    while ($row = mysqli_fetch_assoc($result)){  
                        $proj_name = $row['project_name'];
                        $user_name = $row['user_name'];
                        $media_links = $row['media_links'];  
                        $description = $row['description'];                
                        echo
                        "
                        <h1>$proj_name</h1>
                        <h3>by:$user_name</h3>
                        <div class='body'>
                            <table>
                                <tr>
                                    <td><img class=image src='$media_links'></td>
                                <td>
                                    <p>$description</p>
                                </td>
                                </tr>
                            </table>
                        </div>
                    ";
                    }
                }
                else {
                    echo "Conn error";
                }
                
            ?>
            <div id="addproject">
                <a href="../HTML/add_project.html">Submit a project</a>
            </div>


        </div>
    </body>
</html>
