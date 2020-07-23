
											<table >
													<tr>
														<td width="20px"></td>
														<td width="280px"></td>
													</tr>
												<?php
												include("connection.php");
												$sql ="SELECT * FROM notice";
       $cnt=1;

        $records=mysqli_query($con,$sql);
       

        while($row=mysqli_fetch_array($records))


        { ?>
            
            
                    
            <tr >
               

            <td><div style="font-size:16px;"><?php echo($cnt) ?><?php   echo".";?><?php  $cnt=$cnt+1; ?></td>
            <td><a href="<?php echo $row['picsource']; ?>"><u><?php echo $row['title'];?></u></a></div><hr></td>
            <?php } ?>
            
            


												
												
											</table>
											
										</div>
									</div>
								</div>