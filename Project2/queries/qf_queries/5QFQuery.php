<!--
File name: 5QFQuery.php
Authors name: Nick Kuznecov, Jake Garland
Web-site name: Garlacov Tournaments
File Description:  A query to find the name of the register of position 5 of the quarter finals.
-->   

<?php 
                                        
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
                                  
                                                
                                        }  ?>