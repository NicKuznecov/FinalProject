<!--
File name: QuarterFinalTournamentTable.php
Authors name: Nick Kuznecov, Jake Garland
Web-site name: Garlacov Tournaments
File Description: QuarterFinalTournamentTable page of the Garlacov Tournaments web-site.
-->                       

                            <table summary="Tournament Bracket" id="TournamentsTable" >
                                <tbody>        
                                    <tr>
                                       
                                        <td rowspan="2"><p>Player: <?php 
                                        
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
                                                                (registers.register_number = 1 OR
                                                                registers.register_number = 16)
                                                        AND          
                                                                registers.register_level >= 1
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
                                        <td rowspan="4" class="FutureRow"><p>team name</p></td>
                                        <td rowspan="8" class="FutureRow"><p>team name</p></td>
                                        <td rowspan="16" class="FutureRow"><p>team name</p></td>
                                    </tr>
                                    <tr>
                                       
                                    </tr>
                                    <tr>
                                        
                                        <td rowspan="2"><p>Player: <?php 
                                        
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
                                                                (registers.register_number = 8 OR
                                                                registers.register_number = 9)
                                                        AND          
                                                                registers.register_level >= 1
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
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td rowspan="2"><p>Player: <?php 
                                        
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
                                                                (registers.register_number = 5 OR 
                                                                 registers.register_number = 12)
                                                        AND          
                                                                registers.register_level >= 1
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
                                        <td rowspan="4" class="FutureRow"><p>team name</p></td>
                                    </tr>
                                    <tr>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td rowspan="2"><p>Player: <?php 
                                        
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
                                                                (registers.register_number = 4 OR
                                                                registers.register_number = 13)
                                                        AND          
                                                                registers.register_level >= 1
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
                                        
                                    </tr>
                                    <tr>
                                       
                                        <td rowspan="2"><p>Player: <?php 
                                        
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
                                                                (registers.register_number = 6 OR
                                                                registers.register_number = 11)
                                                        AND          
                                                                registers.register_level >= 1
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
                                        <td rowspan="4" class="FutureRow"><p>team name</p></td>
                                        <td rowspan="8" class="FutureRow"><p>team name</p></td>
                                    </tr>
                                    <tr>
                                        
                                    </tr>
                                    <tr>
                                       
                                        <td rowspan="2"><p>Player: <?php 
                                        
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
                                                                (registers.register_number = 3 OR 
                                                                 registers.register_number = 14)
                                                        AND          
                                                                registers.register_level >= 1
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
                                        
                                    </tr>
                                    <tr>
                                       
                                        <td rowspan="2"><p>Player: <?php 
                                        
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
                                                                (registers.register_number = 7 OR
                                                                registers.register_number = 10)
                                                        AND          
                                                                registers.register_level >= 1
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
                                        <td rowspan="4" class="FutureRow"><p>team name</p></td>
                                    </tr>
                                    <tr>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td rowspan="2"><p>Player: <?php 
                                        
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
                                                                (registers.register_number = 2 OR
                                                                registers.register_number = 15)
                                                        AND          
                                                                registers.register_level >= 1
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
                                       
                                    </tr>
                                </tbody>
                            </table>