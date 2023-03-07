<?php
      
            $servername = "localhost";
            $username = "root";
            $pass = "";
            $dbname = "onestop";
            $conn = new mysqli($servername, $username, "$pass", $dbname);
            
            
            
            
            
                
                    
                    $sql= "insert into events(name,info,date,time,location,phoneno,emailid,ticket_price)  values('".$_POST['event']."','".$_POST['desc']."','".$_POST['date']."','".$_POST['time']."','".$_POST['venue']."',".$_POST['mobile'].",'".$_POST['email']."',".$_POST['price'].")";
                   
                    $result = mysqli_query($conn,$sql);      
            
                   
                   
                        echo mysqli_error($conn);
                    
                    ?>