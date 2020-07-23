<?php
												include("connection.php");
												$sql ="SELECT * FROM notice WHERE noticeno='1'";
      

        $records=mysqli_query($con,$sql);
       

        while($row=mysqli_fetch_array($records))


        { ?>
            
            
                    
            <tr>
               

           
            <td><div style="font-size:16px;"><a href="<?php echo $row['picsource']; ?>"><u><?php echo $row['title'];?></u></a></div></td>
            <?php } ?>