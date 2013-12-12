<!--
File name: TournamentTable.php
Authors name: Nick Kuznecov, Jake Garland
Web-site name: Garlacov Tournaments
File Description: TournamentTable page of the Garlacov Tournaments web-site.
-->                       
<?php
                    
                             
?>
                           <!-- Tournament Table holding information -->
                            <table summary="Tournament Bracket" id="TournamentsTable" >
                                <tbody>        
                                    <tr>
                                        <!-- Query to find user position -->
                                        <td><p>1. <?php include('queries/ro16_queries/1Ro16Query.php'); 
                                        if($masterquery['register_level'] == 0)
                                        {
                                            echo '<button type="button">Promote('.$row['register_name'].')</button>';
                                        }?></p></td>
                                         <!-- Query to find user position -->
                                        <td rowspan="2"><p>Player: <?php include('queries/qf_queries/1QFQuery.php') ?></p></td>
                                         <!-- Query to find user position -->
                                        <td rowspan="4"><p>Player: <?php include('queries/sf_queries/1SFQuery.php') ?></p></td>
                                         <!-- Query to find user position -->
                                        <td rowspan="8"><p>Player: <?php include('queries/f_queries/1FQuery.php') ?></p></td>
                                         <!-- Query to find user position -->
                                        <td rowspan="16"><p>Winner: <?php 
                                        
                                         $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                                         $registers_sql = "SELECT
                                                                registers.register_name
                           
                                                        FROM 
                                                                tournaments
                                                        LEFT JOIN
                                                                registers
                                                        ON
                                                                tournaments.tournament_id=  registers.register_tournament
                                                        WHERE    
                                                                registers.register_level >= 3
                                                        AND        
                                                                tournaments.tournament_id =  " . mysqli_real_escape_string($dbc, $_GET['id']);
                                                                

                                        $registers_result = mysqli_query($dbc, $registers_sql);
                                 
                                        if(!$registers_result)
                                        {
                                                echo 'The user could not be displayed, please try again later.';
                                        }
                                        else
                                        {
                                        $row = mysqli_fetch_array($registers_result);
                                        
                                            
                                                      echo $row['register_name']; 
                                  
                                                
                                        }  ?></p></td>
                                    </tr>
                                    <tr>
                                         <!-- Query to find user position -->
                                        <td><p>16. <?php include('queries/ro16_queries/16Ro16Query.php'); echo '<button type="submit">Promote('.$row['register_name'].')</button>' ?></p></td>
                                    </tr>
                                    <tr>
                                         <!-- Query to find user position -->
                                        <td><p>8. <?php include('queries/ro16_queries/8Ro16Query.php'); echo '<button type="button">Promote('.$row['register_name'].')</button>' ?></p></td>
                                        <td rowspan="2"><p>Player: <?php include('queries/qf_queries/8QFQuery.php') ?></p></td>
                                    </tr>
                                    <tr>
                                         <!-- Query to find user position -->
                                        <td><p>9. <?php  include('queries/ro16_queries/9Ro16Query.php'); echo '<button type="button">Promote('.$row['register_name'].')</button>' ?></p></td>
                                    </tr>
                                    <tr>
                                         <!-- Query to find user position -->
                                        <td><p>5. <?php  include('queries/ro16_queries/5Ro16Query.php'); echo '<button type="button">Promote('.$row['register_name'].')</button>' ?></p></td>
                                         <!-- Query to find user position -->
                                        <td rowspan="2"><p>Player: <?php include('queries/qf_queries/5QFQuery.php') ?></p></td>
                                         <!-- Query to find user position -->
                                        <td rowspan="4"><p>Player: <?php include('queries/sf_queries/4SFQuery.php') ?></p></td>
                                    </tr>
                                    <tr>
                                         <!-- Query to find user position -->
                                        <td><p>12. <?php include('queries/ro16_queries/12Ro16Query.php'); echo '<button type="button">Promote('.$row['register_name'].')</button>'?></p></td>
                                    </tr>
                                    <tr>
                                         <!-- Query to find user position -->
                                        <td><p>4. <?php include('queries/ro16_queries/4Ro16Query.php'); echo '<button type="button">Promote('.$row['register_name'].')</button>'?></p></td>
                                         <!-- Query to find user position -->
                                        <td rowspan="2"><p>Player: <?php include('queries/qf_queries/4QFQuery.php')?></p></td>
                                    </tr>
                                    <tr>
                                         <!-- Query to find user position -->
                                        <td><p>13. <?php include('queries/ro16_queries/13Ro16Query.php'); echo '<button type="button">Promote('.$row['register_name'].')</button>'  ?></p></td>
                                    </tr>
                                    <tr>
                                         <!-- Query to find user position -->
                                        <td><p>6. <?php include('queries/ro16_queries/6Ro16Query.php'); echo '<button type="button">Promote('.$row['register_name'].')</button>' ?></p></td>
                                         <!-- Query to find user position -->
                                        <td rowspan="2"><p>Player: <?php include('queries/qf_queries/6QFQuery.php')?></p></td>
                                         <!-- Query to find user position -->
                                        <td rowspan="4"><p>Player: <?php include('queries/sf_queries/3SFQuery.php') ?></p></td>
                                         <!-- Query to find user position -->
                                        <td rowspan="8"><p>Player:<?php include('queries/f_queries/2FQuery.php') ?></p></td>
                                    </tr>
                                    <tr>
                                         <!-- Query to find user position -->
                                        <td><p>11. <?php  include('queries/ro16_queries/11Ro16Query.php'); echo '<button type="button">Promote('.$row['register_name'].')</button>' ?></p></td>
                                    </tr>
                                    <tr>
                                         <!-- Query to find user position -->
                                        <td><p>3. <?php  include('queries/ro16_queries/3Ro16Query.php'); echo '<button type="button">Promote('.$row['register_name'].')</button>'  ?></p></td>
                                         <!-- Query to find user position -->
                                        <td rowspan="2"><p>Player: <?php include('queries/qf_queries/3QFQuery.php')?></p></td>
                                    </tr>
                                    <tr>
                                         <!-- Query to find user position -->
                                        <td><p>14. <?php include('queries/ro16_queries/14Ro16Query.php'); echo '<button type="button">Promote('.$row['register_name'].')</button>'   ?></p></td>
                                    </tr>
                                    <tr>
                                         <!-- Query to find user position -->
                                        <td><p>7. <?php  include('queries/ro16_queries/7Ro16Query.php'); echo '<button type="button">Promote('.$row['register_name'].')</button>' ?></p></td>
                                         <!-- Query to find user position -->
                                        <td rowspan="2"><p>Player: <?php include('queries/qf_queries/7QFQuery.php')?></p></td>
                                         <!-- Query to find user position -->
                                        <td rowspan="4"><p>Player: <?php include('queries/sf_queries/2SFQuery.php') ?></p></td>
                                    </tr>
                                    <tr>
                                         <!-- Query to find user position -->
                                        <td><p>10. <?php  include('queries/ro16_queries/10Ro16Query.php'); echo '<button type="button">Promote('.$row['register_name'].')</button>'  ?></p></td>
                                    </tr>
                                    <tr>
                                         <!-- Query to find user position -->
                                        <td><p>2. <?php include('queries/ro16_queries/2Ro16Query.php'); echo '<button type="button">Promote('.$row['register_name'].')</button>' ?></p></td>
                                         <!-- Query to find user position -->
                                        <td rowspan="2"><p>Player: <?php include('queries/qf_queries/2QFQuery.php')?></p></td>
                                    </tr>
                                    <tr>
                                         <!-- Query to find user position -->
                                        <td><p>15. <?php  include('queries/ro16_queries/15Ro16Query.php'); echo '<button type="button">Promote('.$row['register_name'].')</button>'  ?></p></td>
                                    </tr>
                                </tbody>
                            </table>
