<!DOCTYPE html>
<html lang="en">
    <body>
        <?php
            //Connecting to SQL via MySQLi API
            $mysqli = new mysqli("localhost", "s46kang", "Spring@*%2019", "s46kang");
            if ($mysqli->connect_errno) {
                echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
            //Query which retrieves the five most recently released songs 
            $getRecentSongsQuery = "SELECT * FROM song ORDER BY datetime_released DESC LIMIT 5";
            echo "<b> <center>HOME</center> </b> <br>";
            echo '<table border="1" cellspacing="2" cellpadding="2"> 
                    <tr> 
                    <td> <font face="Arial">Name</font> </td> 
                    <td> <font face="Arial">Duration(minutes)</font> </td> 
                    <td> <font face="Arial">Genre</font> </td> 
                    <td> <font face="Arial">Lyrics</font> </td> 
                    <td> <font face="Arial">Datetime Released</font> </td>
                    <td> <font face="Arial">Times Played</font> </td>  
                    </tr>';
            //executes query
            if ($result = $mysqli->query($getRecentSongsQuery)) {
                echo '<center><a href="release.php">Release</a><br/>
                <a href="playlists.php">Playlists</a><br/>
                <a href="podcasts.php">Podcasts</a><br/>
                <a href="change-password.php">Change Password</a></center><br/>';
                echo "<b> RECENTLY RELEASED MUSIC </b> <br>";
                //while loop which loops through the retrived tuples and prints them into a table
                while ($row = $result->fetch_assoc()) {
                    $song_name = $row["song_name"];
                    $duration_minutes = $row["duration_minutes"];
                    $genre = $row["genre"];
                    $lyrics = $row["lyrics"];
                    $datetime_released = $row["datetime_released"];
                    $times_played = $row["times_played"];

                    echo '<center><tr> 
                        <td>'.$song_name.'</td> 
                        <td>'.$duration_minutes.'</td> 
                        <td>'.$genre.'</td> 
                        <td>'.$lyrics.'</td> 
                        <td>'.$datetime_released.'</td>
                        <td>'.$times_played.'</td>
                        </tr></center>';
                }     
                //frees memory associated
                $result->free();
            }
        ?>    
        <?php
            //Connecting to SQL via MySQLi API
            $mysqli = new mysqli("localhost", "s46kang", "Spring@*%2019", "s46kang");
            if ($mysqli->connect_errno) {
                echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
            //Query which retrieves the 5 most popular songs by times_played 
            $getRecentSongsQuery = "SELECT * FROM song ORDER BY times_played DESC LIMIT 5";
        
            echo '<table border="1" cellspacing="2" cellpadding="2"> 
                    <tr> 
                    <td> <font face="Arial">Name</font> </td> 
                    <td> <font face="Arial">Duration(minutes)</font> </td> 
                    <td> <font face="Arial">Genre</font> </td> 
                    <td> <font face="Arial">Lyrics</font> </td> 
                    <td> <font face="Arial">Datetime Released</font> </td>
                    <td> <font face="Arial">Times Played</font> </td>  
                    </tr>';
            //executes query
            if ($result = $mysqli->query($getRecentSongsQuery)) {
                echo "<b> MOST POPULAR MUSIC </b> <br>";
                //while loop which loops through the retrived tuples and prints them into a table
                while ($row = $result->fetch_assoc()) {
                    $song_name2 = $row["song_name"];
                    $duration_minutes2 = $row["duration_minutes"];
                    $genre2 = $row["genre"];
                    $lyrics2 = $row["lyrics"];
                    $datetime_released2 = $row["datetime_released"];
                    $times_played2 = $row["times_played"];

                    echo '<center><tr> 
                        <td>'.$song_name2.'</td> 
                        <td>'.$duration_minutes2.'</td> 
                        <td>'.$genre2.'</td> 
                        <td>'.$lyrics2.'</td> 
                        <td>'.$datetime_released2.'</td>
                        <td>'.$times_played2.'</td>
                        </tr></center>';
                }     
                //frees memory associated
                $result->free();
            }
        ?>   
    </body>
</html>
