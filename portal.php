<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="images/lg.png" type="image/png">
        <title> t.kings | portal </title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/mobstyle.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>


<section>
<h1> All Suscribed Mails</h1>

<?php
                                        $db = mysqli_connect('localhost', 'id10661862_tkings', 'tkings', 'id10661862_tkings');
                                        $queryqm = "SELECT * FROM suscribers";
                                        $resultrm = mysqli_query($db, $queryqm);
                                        $kountm = mysqli_num_rows($resultrm); 
                                        if ( $kountm >0) : ?>
<textarea style="width: 80%; margin:auto; height: 300px"><?php while($rowwm = mysqli_fetch_array($resultrm))	: ?><?php echo $rowwm["email"].";" ;?><?php endwhile?></textarea>
						                <?php endif  ?>
</section>
                            
            <section class="portfolio  wow fadeInUp" id="portfolio">
                <h1 class="h11 wow fadeInUp"> PORTFOLIO </h1>
                            <form class="pp1f wow fadeInUp" name="porf"  style="width: 80%; margin:auto;" method="post" enctype="multipart/form-data">
                                <input type="text" name="jn" placeholder="Job Name" />
                                <input type="text" name="jd" placeholder="Job Description" />
                                <select  name="js">
                                    <option value="select">Select Service</option>
                                    <option value="Wd">Website Development</option>
                                    <option value="Ma">Marketting</option>
                                    <option value="De">Design</option>
                                    <option value="Ad">App Development</option>
					            </select>
                                <span>Upload image</span> <input type="file" name="ppf" accept="image/*" />
                                <button name="psubmit" type="submit" value="psubmit"> Post</button>
                            </form>
                            <p class="red" style="text-align:center;" > 
                                <?php
                                        // connect to the database
                                        $db = mysqli_connect('localhost', 'id10661862_tkings', 'tkings', 'id10661862_tkings');
                                    if(isset($_POST["psubmit"])) {
                                        $tdate = date("Y-m-d h:i:sa");
                                        $error7 = "";
                                        $errors = array();
                                        $tdr = "portfolio uploads/";
                                        $trf = $tdr . basename($_FILES["ppf"]["name"]);
                                        $uk = 1;
                                        $ift = strtolower(pathinfo($trf,PATHINFO_EXTENSION));
                                        $check = getimagesize($_FILES["ppf"]["tmp_name"]);
                                        $jn = mysqli_real_escape_string($db, $_POST['jn']);
                                        $jd = mysqli_real_escape_string($db, $_POST['jd']);
                                        $js = mysqli_real_escape_string($db, $_POST['js']);
                                      
                                        if (empty($jn)) {
                                            array_push($errors, "Username is required");
                                          echo  "Enter Job Name <br />";
                                        }
                                        if (empty($jd)) {
                                            array_push($errors, "Password is required");
                                          echo "Description is Needed <br />";
                                        }

                                        if ($js == "select")  {
                                            array_push($errors, "Password is required");
                                            echo  "Service is Needed <br />";
                                        }
                                        
                                        if($check !== false) {
                                            echo "File is an image - " . $check["mime"] . ". <br />";
                                            $uk = 1;
                                        } else {
                                            echo "File is not an image. <br />";
                                            $uk = 0;
                                        }

                                        // Check file size
                                        if ($_FILES["ppf"]["size"] > 500000) {
                                            echo "Sorry, your file is too large. <br />";
                                            $uk = 0;
                                        }

                                                        // Allow certain file formats
                                        if($ift != "jpg" && $ift != "png" && $ift != "jpeg" && $ift!= "gif" ) {
                                            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br />";
                                            $uk = 0;
                                        }
                                        // Check if $uploadOk is set to 0 by an error
                                        if ($uk == 0) {
                                            echo "Sorry, your file was not uploaded.  <br />";
                                        // if everything is ok, try to upload file
                                        } else {
                                            if (move_uploaded_file($_FILES["ppf"]["tmp_name"], $trf)) {
                                                $jc = basename( $_FILES["ppf"]["name"]);
                                                echo "The file ". basename( $_FILES["ppf"]["name"]). " has been uploaded.  <br />";
                                            } else {
                                                echo "Sorry, there was an error uploading your file.  <br />";
                                            }
                                        }

                                      
                                        if (count($errors) == 0 && $uk == 1) {
                                            $depquery = "INSERT INTO portfolio (jn, jd, js, jc, jdate) 
                                            VALUES('$jn', '$jd', '$js', '$jc', '$tdate')";
                                            if ($db->query($depquery) === TRUE) {
                                            echo "Uploaded successfully <br />";
                                            }
                                        }
                                    }

                                ?>
                            </p>

                            <ul class="wow fadeInUp">
                                <li><a href="javascript:void(0)" style="border:4px solid green" onclick="pta()" id="pta" >All</a> </li>
                                <li><a href="javascript:void(0)" onclick="ptb()"  id="ptb">Web Development</a></li>
                                <li><a href="javascript:void(0)"  onclick="ptc()"  id="ptc" >Marketting</a></li>
                                <li><a href="javascript:void(0)"   onclick="ptd()"  id="ptd">Design</a></li>
                                <li><a href="javascript:void(0)"   onclick="pte()"  id="pte">App Development</a></li>
      
                             <div class="flex" id="flex">
                             
                                    <?php
                                        $db = mysqli_connect('localhost', 'id10661862_tkings', 'tkings', 'id10661862_tkings');
                                        $queryq = "SELECT * FROM portfolio ORDER BY id DESC LIMIT 6";
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
							                <?php endwhile?> 
						                <?php endif  ?>
                                    </div>
                             </section>


            <section class="blogs  wow fadeInUp" id="blogs">
                <h1 class="h11 wow fadeInUp">BLOG</h1>
                
                <form class="pp1f wow fadeInUp"  style="width: 80%; margin:auto;" method="post" enctype="multipart/form-data">
                                <input type="text" name="bt" placeholder="Title" />
                                <input type="text" name="bd" placeholder="Description" />
                                <br />
                                <textarea name="bc" placeholder="Content" style="width:90%; height: 400px; color:black; font-size:30px;" /></textarea>
                                <br />
                                <span>Upload image</span> <input type="file" name="bf" accept="image/*" />
                                <br />
                                <button name="bsubmit" type="submit" value="bsubmit"> Post</button>
                    </form>

                    <p class="red" style="text-align:center;" > 
                                <?php
                                   
                                         // connect to the database
                                        $db = mysqli_connect('localhost', 'id10661862_tkings', 'tkings', 'id10661862_tkings');
                                    if(isset($_POST["bsubmit"])) {
                                        $tdate = date("Y-m-d h:i:sa");
                                        $error7 = "";
                                        $errors = array();
                                        $tdr = "blog uploads/";
                                        $trf = $tdr . basename($_FILES["bf"]["name"]);
                                        $uk = 1;
                                        $ift = strtolower(pathinfo($trf,PATHINFO_EXTENSION));
                                        $check = getimagesize($_FILES["bf"]["tmp_name"]);
                                        $bt = mysqli_real_escape_string($db, $_POST['bt']);
                                        $bd = mysqli_real_escape_string($db, $_POST['bd']);
                                        $bc = mysqli_real_escape_string($db, $_POST['bc']);
                                      
                                        if (empty($bt)) {
                                            array_push($errors, "Username is required");
                                          echo  "Enter Blog Title <br />";
                                        }
                                        if (empty($bd)) {
                                            array_push($errors, "Password is required");
                                          echo "Blog Description please <br />";
                                        }

                                        if (empty($bc)) {
                                            array_push($errors, "Password is required");
                                            echo  "Blog Content <br />";
                                        }
                                        
                                        if($check !== false) {
                                            echo "File is an image - " . $check["mime"] . ". <br />";
                                            $uk = 1;
                                        } else {
                                            echo "File is not an image. <br />";
                                            $uk = 0;
                                        }

                                        // Check file size
                                        if ($_FILES["bf"]["size"] > 500000) {
                                            echo "Sorry, your file is too large. <br />";
                                            $uk = 0;
                                        }

                                                        // Allow certain file formats
                                        if($ift != "jpg" && $ift != "png" && $ift != "jpeg" && $ift!= "gif" ) {
                                            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br />";
                                            $uk = 0;
                                        }
                                        // Check if $uploadOk is set to 0 by an error
                                        if ($uk == 0) {
                                            echo "Sorry, your file was not uploaded.  <br />";
                                        // if everything is ok, try to upload file
                                        } else {
                                            if (move_uploaded_file($_FILES["bf"]["tmp_name"], $trf)) {
                                                $jc = basename( $_FILES["bf"]["name"]);
                                                echo "The file ". basename( $_FILES["bf"]["name"]). " has been uploaded.  <br />";
                                            } else {
                                                echo "Sorry, there was an error uploading your file.  <br />";
                                            }
                                        }

                                      
                                        if (count($errors) == 0 && $uk == 1) {
                                            $depquery = "INSERT INTO blog (bt, bd, bc, bp, bdate) 
                                            VALUES('$bt', '$bd', '$bc', '$jc', '$tdate')";
                                            if ($db->query($depquery) === TRUE) {
                                            echo "Uploaded successfully <br />";
                                            }
                                        }
                                    }

                                ?>
                            </p>
                <div class="flex">
                <?php
                                        $db = mysqli_connect('localhost', 'id10661862_tkings', 'tkings', 'id10661862_tkings');
                                        $queryqq = "SELECT * FROM blog  ORDER BY id DESC LIMIT 6";
                                        $resultrr = mysqli_query($db, $queryqq);
                                        $kountt = mysqli_num_rows($resultrr); 
                                        if ( $kountt >0) :
                                            while($rowww = mysqli_fetch_array($resultrr))	: ?>
                                                <div class="flex1 wow fadeInUp">
                                                    <div class="bimg">
                                                        <img src="blog uploads/<?php echo $rowww["bp"] ;?>" />
                                                    </div>
                                                    <div class="capt">
                                                        <h5><?php echo $rowww["bt"] ;?></h5>
                                                        <h4><?php echo $rowww["bd"] ;?></h4>
                                                        <h6><?php echo $rowww["bdate"] ;?></h6>
                                                        <p>
                                                        <?php echo $rowww["bc"] ;?>
                                                        </p>
                                                    </div>
                                                </div>
							                <?php endwhile?> 
						                <?php endif  ?>
                </div>
            </section>
            <footer   class="wow fadeInUp">
                <div class="f1 wow fadeInUp">
                   <h1 class="wow fadeInUp"> t.kings </h1>
                   <ul class="wow fadeInUp">
                    <li> <a href="https://facebook.com/kingsman97" target="_blank"  class="fa fa-facebook"></a></li>
                    <li><a href="https://twitter.com/xo_sacred" target="_blank"  class="fa fa-twitter"></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=2348145678112&text=From Website Visitor" target="_blank"  class="fa fa-whatsapp"></a></li>
                    <li><a href="https://instagram.com/xosacred" target="_blank" class="fa fa-instagram"></a></li>
                    <li><a href="mailto:nwachukwu.tochukwu01@gmail.com?subject=From Website" target="_blank" class="fa fa-envelope"></a></li>
                    <li><a href="https://github.com/t-kings" target="_blank"  class="fa fa-github"></a> </li>
                    <li><a href="https://fa-linkedin.com/nwachukwu-kingsley-387944190" target="_blank"  class="fa fa-linkedin"></a></li>
                    <li><a href="https://dribble.com/xo_sacred" target="_blank"  class="fa fa-dribbble"></a> </li>
                    </ul>
                </div>
                <div class="f2 wow fadeInUp">
                        Copyright ©2019 All rights reserved | 
                        <ul>
                                <li><a href="#about">About Me</a></li>
                                <li><a href="#skills">Skills</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#education">Education</a></li>
                                <li><a href="#portfolio">Portfolio</a></li>
                                <li><a href="#blogs">Blog</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                </div>
            </footer>
            <script src="js/skript.js"></script>    
            <script src="js/wow.min.js"></script>
            <script>
                new WOW().init();
            </script>
    </body>
</html>