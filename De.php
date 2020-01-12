<?php
                                        $db = mysqli_connect('localhost', 'id10661862_tkings', 'tkings', 'id10661862_tkings');
                                        $queryq = "SELECT * FROM portfolio WHERE js='De' ORDER BY id DESC LIMIT 6";
                                        $resultr = mysqli_query($db, $queryq);
                                        $kount = mysqli_num_rows($resultr); 
                                        if ( $kount >0) :
                                            while($roww = mysqli_fetch_array($resultr))	: ?>
                                            <div id="<?php echo $roww["js"] ;?>">
                                                <div class="sk3 wow fadeInUp">
                                                    <div class="img">
                                                        <img src="portfolio uploads/<?php echo $roww["jc"] ;?>" />
                                                    </div>
                                                    <div class="fig">
                                                        <h5><?php echo $roww["jn"] ;?></h5>
                                                        <h4><?php echo $roww["jd"] ;?></h4>
                                                    </div>
                                                </div>
                                                </div>
                                        <?php endwhile ; else : echo "No records Now" ?> 
						                <?php endif ?>