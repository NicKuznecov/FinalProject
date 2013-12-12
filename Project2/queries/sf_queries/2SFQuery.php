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
                                                                registers.register_level >= 2
                                                        AND     (registers.register_number = 2 OR
                                                                registers.register_number = 15 OR
                                                                registers.register_number = 7  OR
                                                                registers.register_number = 10)
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
                                  
                                                
                                        }  ?>