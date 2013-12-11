<!--
File name: TournamentTable.php
Authors name: Nick Kuznecov, Jake Garland
Web-site name: Garlacov Tournaments
File Description: TournamentTable page of the Garlacov Tournaments web-site.
-->                       

                            <table summary="Tournament Bracket" id="TournamentsTable" >
                                <tbody>        
                                    <tr>
                                        <td><p>1. <?php 
                                        
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
                                                                registers.register_number = 1 
                                                        AND          
                                                                tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);

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
                                        <td rowspan="2"><p>team name</p></td>
                                        <td rowspan="4"><p>team name</p></td>
                                        <td rowspan="8"><p>team name</p></td>
                                        <td rowspan="16"><p>team name</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>16. <?php                                         
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
                                                                registers.register_number = 16
                                                        AND          
                                                                tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);

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
                                        <td><p>8. <?php                                          
                                      
                                         $registers_sql = "SELECT
                                                                registers.register_name
                           
                                                        FROM
                                                                tournaments
                                                        LEFT JOIN
                                                                registers
                                                        ON
                                                                tournaments.tournament_id=  registers.register_tournament
                                                        WHERE
                                                                registers.register_number = 8 
                                                        AND          
                                                                tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);

                                        $registers_result = mysqli_query($dbc, $registers_sql);
                                 
                                        if(!$registers_result)
                                        {
                                                echo 'The user could not be displayed, please try again later.';
                                        }
                                        else
                                        {
                                        $row = mysqli_fetch_array($registers_result);
                                        
                                            
                                                      echo $row['register_name']; 
                                  
                                                
                                        } ?></p></td>
                                        <td rowspan="2"><p>team name</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>9. <?php                                          
                                       
                                         $registers_sql = "SELECT
                                                                registers.register_name
                           
                                                        FROM
                                                                tournaments
                                                        LEFT JOIN
                                                                registers
                                                        ON
                                                                tournaments.tournament_id=  registers.register_tournament
                                                        WHERE
                                                                registers.register_number = 9 
                                                        AND          
                                                                tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);

                                        $registers_result = mysqli_query($dbc, $registers_sql);
                                 
                                        if(!$registers_result)
                                        {
                                                echo 'The user could not be displayed, please try again later.';
                                        }
                                        else
                                        {
                                        $row = mysqli_fetch_array($registers_result);
                                        
                                            
                                                      echo $row['register_name']; 
                                  
                                                
                                        } ?></p></td>
                                    </tr>
                                    <tr>
                                        <td><p>5. <?php                                         
                                   
                                         $registers_sql = "SELECT
                                                                registers.register_name
                           
                                                        FROM
                                                                tournaments
                                                        LEFT JOIN
                                                                registers
                                                        ON
                                                                tournaments.tournament_id=  registers.register_tournament
                                                        WHERE
                                                                registers.register_number = 5 
                                                        AND          
                                                                tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);

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
                                        <td rowspan="2"><p>team name</p></td>
                                        <td rowspan="4"><p>team name</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>12. <?php                                         
                                   
                                         $registers_sql = "SELECT
                                                                registers.register_name
                           
                                                        FROM
                                                                tournaments
                                                        LEFT JOIN
                                                                registers
                                                        ON
                                                                tournaments.tournament_id=  registers.register_tournament
                                                        WHERE
                                                                registers.register_number = 12 
                                                        AND          
                                                                tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);

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
                                        <td><p>4. <?php                                          
                                  
                                         $registers_sql = "SELECT
                                                                registers.register_name
                           
                                                        FROM
                                                                tournaments
                                                        LEFT JOIN
                                                                registers
                                                        ON
                                                                tournaments.tournament_id=  registers.register_tournament
                                                        WHERE
                                                                registers.register_number = 4 
                                                        AND          
                                                                tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);

                                        $registers_result = mysqli_query($dbc, $registers_sql);
                                 
                                        if(!$registers_result)
                                        {
                                                echo 'The user could not be displayed, please try again later.';
                                        }
                                        else
                                        {
                                        $row = mysqli_fetch_array($registers_result);
                                        
                                            
                                                      echo $row['register_name']; 
                                  
                                                
                                        } ?></p></td>
                                        <td rowspan="2"><p>team name</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>13. <?php                                          
                                  
                                         $registers_sql = "SELECT
                                                                registers.register_name
                           
                                                        FROM
                                                                tournaments
                                                        LEFT JOIN
                                                                registers
                                                        ON
                                                                tournaments.tournament_id=  registers.register_tournament
                                                        WHERE
                                                                registers.register_number = 13
                                                        AND          
                                                                tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);

                                        $registers_result = mysqli_query($dbc, $registers_sql);
                                 
                                        if(!$registers_result)
                                        {
                                                echo 'The user could not be displayed, please try again later.';
                                        }
                                        else
                                        {
                                        $row = mysqli_fetch_array($registers_result);
                                        
                                            
                                                      echo $row['register_name']; 
                                  
                                                
                                        } ?></p></td>
                                    </tr>
                                    <tr>
                                        <td><p>6. <?php                                         
                                
                                         $registers_sql = "SELECT
                                                                registers.register_name
                           
                                                        FROM
                                                                tournaments
                                                        LEFT JOIN
                                                                registers
                                                        ON
                                                                tournaments.tournament_id=  registers.register_tournament
                                                        WHERE
                                                                registers.register_number = 6 
                                                        AND          
                                                                tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);

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
                                        <td rowspan="2"><p>team name</p></td>
                                        <td rowspan="4"><p>team name</p></td>
                                        <td rowspan="8"><p>team name</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>11. <?php                                         
                                      
                                         $registers_sql = "SELECT
                                                                registers.register_name
                           
                                                        FROM
                                                                tournaments
                                                        LEFT JOIN
                                                                registers
                                                        ON
                                                                tournaments.tournament_id=  registers.register_tournament
                                                        WHERE
                                                                registers.register_number = 11
                                                        AND          
                                                                tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);

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
                                        <td><p>3. <?php                                          
                                        
                                         $registers_sql = "SELECT
                                                                registers.register_name
                           
                                                        FROM
                                                                tournaments
                                                        LEFT JOIN
                                                                registers
                                                        ON
                                                                tournaments.tournament_id=  registers.register_tournament
                                                        WHERE
                                                                registers.register_number = 3 
                                                        AND          
                                                                tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);

                                        $registers_result = mysqli_query($dbc, $registers_sql);
                                 
                                        if(!$registers_result)
                                        {
                                                echo 'The user could not be displayed, please try again later.';
                                        }
                                        else
                                        {
                                        $row = mysqli_fetch_array($registers_result);
                                        
                                            
                                                      echo $row['register_name']; 
                                  
                                                
                                        } ?></p></td>
                                        <td rowspan="2"><p>team name</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>14. <?php                                         
                                     
                                         $registers_sql = "SELECT
                                                                registers.register_name
                           
                                                        FROM
                                                                tournaments
                                                        LEFT JOIN
                                                                registers
                                                        ON
                                                                tournaments.tournament_id=  registers.register_tournament
                                                        WHERE
                                                                registers.register_number = 14 
                                                        AND          
                                                                tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);

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
                                        <td><p>7. <?php                                         
                                      
                                         $registers_sql = "SELECT
                                                                registers.register_name
                           
                                                        FROM
                                                                tournaments
                                                        LEFT JOIN
                                                                registers
                                                        ON
                                                                tournaments.tournament_id=  registers.register_tournament
                                                        WHERE
                                                                registers.register_number = 7 
                                                        AND          
                                                                tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);

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
                                        <td rowspan="2"><p>team name</p></td>
                                        <td rowspan="4"><p>team name</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>10. <?php                                         
                                        
                                         $registers_sql = "SELECT
                                                                registers.register_name
                           
                                                        FROM
                                                                tournaments
                                                        LEFT JOIN
                                                                registers
                                                        ON
                                                                tournaments.tournament_id=  registers.register_tournament
                                                        WHERE
                                                                registers.register_number = 10
                                                        AND          
                                                                tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);

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
                                        <td><p>2. <?php                                          
                                         
                                         $registers_sql = "SELECT
                                                                registers.register_name
                           
                                                        FROM
                                                                tournaments
                                                        LEFT JOIN
                                                                registers
                                                        ON
                                                                tournaments.tournament_id=  registers.register_tournament
                                                        WHERE
                                                                registers.register_number = 2 
                                                        AND          
                                                                tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);

                                        $registers_result = mysqli_query($dbc, $registers_sql);
                                 
                                        if(!$registers_result)
                                        {
                                                echo 'The user could not be displayed, please try again later.';
                                        }
                                        else
                                        {
                                        $row = mysqli_fetch_array($registers_result);
                                        
                                            
                                                      echo $row['register_name']; 
                                  
                                                
                                        } ?></p></td>
                                        <td rowspan="2"><p>team name</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>15. <?php                                         
                                         
                                         $registers_sql = "SELECT
                                                                registers.register_name
                           
                                                        FROM
                                                                tournaments
                                                        LEFT JOIN
                                                                registers
                                                        ON
                                                                tournaments.tournament_id=  registers.register_tournament
                                                        WHERE
                                                                registers.register_number = 15 
                                                        AND          
                                                                tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);

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
                                </tbody>
                            </table>