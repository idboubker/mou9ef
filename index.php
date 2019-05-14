<?php include "connexion.php";
session_start();
mysqli_set_charset($link,"utf8");

//newsletter
if(isset($_POST['newsletter'])){
    $emailN= $_POST['emailN'];
    $sq = "INSERT INTO newspaper (email) VALUES ('$emailN')";

    if(mysqli_query($link,$sq)){
        echo '<script> 
                alert("Merci pour votre inscription à notre boite email");
              </script>';
    }
    else {
        echo '<script> 
                alert("Oops! L operation n a pas réussi");
              </script>'; }
}


if(isset($_POST['search'])){
    $_SESSION['ville']=$_POST['ville'];
    $_SESSION['metier']=$_POST['metier'];
    header('location : result.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>mou9ef</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/rating.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sh-index.css">
    <script src="js/jquery.js"></script>
</head>
<body>
    <header class="container-fluid">
    <div class="row">
        <div class="left-head col-md-4 col-sm-2">
            <a href="index.php"><img src="img/logo.png" alt=""></a>
        </div>

        <div class="right-head col-md-8 col-sm-10 text-right">
            <span class="lang">
            <label for="lang"><img src="img/lang.png" alt="">
                <select id="lang" class="form-control">
                       <option value="" selected class="hidden-xm" disabled>Language</option>
                    <option>Arabic</option>
                    <option>Frensh</option>
                    <option>English</option>
                  </select>
              </label>
            </span>

            <a href="register.php"><button class="btn btn-success sign">Sign-up</button></a>
            <a href="register.php"><button class="btn btn-success log">Log-in</button></a>
        </div>
    </div>
    </header>



    <div class="container-fluid in-search"  style="box-shadow: 0 30px 22px -22px rgba(0, 0, 0, 0.8) inset !important;">
         <div class="container text-center">
             <div class="row">
             <div class="sh text-center">
            <div class="search">
            <div class="lg-index"><img src="img/lg-index.svg" alt=""></div>
                <form action="index.php" method="POST">
                <div class="row">
                <div class="col-md-4 col-sm-6">
                    <select name="ville" id="sel-vil" class="form-control chev">
                        <?php
                    $sql = "select * from villes";
                        
                    $result = mysqli_query($link,$sql);
                    while($row=mysqli_fetch_assoc($result)){
                        echo '<option value="">'.$row['nom_vil'].'</option>';
                    }
                    ?>
                    </select>
                </div>

                <div class="col-md-4 col-sm-6">
                    <select name="metier" id="sel-job" class="form-control chev">
                             <?php
                    $sql2 = "select * from meties";
                      
                    $result2 = mysqli_query($link,$sql2);
                    while($row2=mysqli_fetch_assoc($result2)){
                        echo '<option value="">'.$row2['nom_met'].'</option>';
                    }
                    ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="submit" name="search" class="btn btn-success srh" value="SEARCH">
                </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
         </div>
    </div>
    <div class="seprate"></div>
    <div class="container ">

    <div class="wum"><!--wum=why use mo9ef-->
    <h3 class="text-center">WHY USE MOU9EF ?</h3><div class="seprate"></div>
        <div class="row">
        <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 ">
            <div class="feature text-center o shadow">
                <div class="feature-image">
                    <img src="img/star.svg" alt="">
                </div>
                <div class="feature-title">
                    <p>find the best <br>talent in one click</p>
                </div>

            </div>
        </div>


        <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 ">
            <div class="feature text-center y shadow">
                <div class="feature-image">
                    <img src="img/sut.svg" alt="">
                </div>
                <div class="feature-title">
                    <p>save your time <br>and your effort</p>
                </div>

            </div>
        </div>

        <br class="visible-sm-block">

        <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 ">
            <div class="feature text-center r shadow">
                <div class="feature-image">
                    <img src="img/mp.svg" alt="">
                </div>
                <div class="feature-title">
                    <p>multidisciplinary<br>profiles</p>
                </div>

            </div>
        </div>


        <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 ">
            <div class="feature text-center v shadow">
                <div class="feature-image">
                    <img src="img/money.svg" alt="">
                </div>
                <div class="feature-title">
                    <p>totally free</p>
                </div>

            </div>
        </div>



        </div>
    </div>

    <div class="seprate"></div>
    <div class="b-art"><h3 class=" text-center">BEST ARTISANS</h3>
    <div class="seprate"></div>

        <div class="row">





        <div class="offset-2 offset-sm-0 col-8 col-lg-3 col-md-4 col-sm-6 ">

                <div class="no_p_m art shadow">
                    <div class="img_bg"></div>
                    <hr>
                    <div class="des_art">
                        <h5>John doe</h5>



                        <div class="rating left">

      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>

    </div>
    <img src="img/fav.png" class="right" alt="">

                    </div>

                </div>


        </div>





        <div class="offset-2 offset-sm-0 col-8 col-lg-3 col-md-4 col-sm-6 ">
 
                <div class="no_p_m art shadow">
                    <div class="img_bg"></div>
                    <hr>
                    <div class="des_art">
                        <h5>John doe</h5>



                        <div class="rating left">

      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>

    </div>
    <img src="img/fav.png" class="right" alt="">

                    </div>

                </div>


        </div>





        <div class="offset-2 offset-sm-0 col-8 col-lg-3 col-md-4 col-sm-6 ">

                <div class="no_p_m art shadow">
                    <div class="img_bg"></div>
                    <hr>
                    <div class="des_art">
                        <h5>John doe</h5>



                        <div class="rating left">

      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>

    </div>
    <img src="img/fav.png" class="right" alt="">

                    </div>

                </div>


        </div>



        <div class="offset-2 offset-sm-0 col-8 col-lg-3 col-md-4 col-sm-6 ">

                <div class="no_p_m art shadow">
                    <div class="img_bg"></div>
                    <hr>
                    <div class="des_art">
                        <h5>John doe</h5>



                        <div class="rating left">

      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>

    </div>
    <img src="img/fav.png" class="right" alt="">

                    </div>

                </div>


        </div>





    <div class="seperate"></div>







        <div class="offset-2 offset-sm-0 col-8 col-lg-3 col-md-4 col-sm-6 ">
 
                <div class="no_p_m art shadow">
                    <div class="img_bg"></div>
                    <hr>
                    <div class="des_art">
                        <h5>John doe</h5>



                        <div class="rating left">

      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>

    </div>
    <img src="img/fav.png" class="right" alt="">

                    </div>

                </div>


        </div>





        <div class="offset-2 offset-sm-0 col-8 col-lg-3 col-md-4 col-sm-6 ">

                <div class="no_p_m art shadow">
                    <div class="img_bg"></div>
                    <hr>
                    <div class="des_art">
                        <h5>John doe</h5>



                        <div class="rating left">

      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>

    </div>
    <img src="img/fav.png" class="right" alt="">

                    </div>

                </div>


        </div>





        <div class="offset-2 offset-sm-0 col-8 col-lg-3 col-md-4 col-sm-6 ">

                <div class="no_p_m art shadow">
                    <div class="img_bg"></div>
                    <hr>
                    <div class="des_art">
                        <h5>John doe</h5>



                        <div class="rating left">

      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>

    </div>
    <img src="img/fav.png" class="right" alt="">

                    </div>

                </div>


        </div>



        <div class="offset-2 offset-sm-0 col-8 col-lg-3 col-md-4 col-sm-6">
            <a href="">
                <div class="no_p_m art shadow">
                    <div class="see-more text-center">
                    See More ! <img src="img/seemore.svg" alt="">
                    </div>
                </div>
            </a>

        </div>



            </div>



        </div><!--b-art best artisan-->


        <div class="network b-art">
        <div class="seprate"></div>
            <h3 class=" text-center">BEST ARTISANS</h3>
            <div class="seprate"></div>
            <div class="row text-center">
                <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 margin-seprate">
                    <div class="fb social shadow">
                        <div class="social-title">FACEBOOK</div>
                        <div class="social-url">
                            <div class="social-img"><img src="./img/f.svg" alt=""></div>
                            <div class="social-btn"><a href=""><button>LIKE</button></a></div>
                        </div>
                    </div>
                </div>

                <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 margin-seprate">
                    <div class="yt social shadow">
                        <div class="social-title">YOUTUBE</div>
                        <div class="social-url">
                            <div class="social-img"><img src="./img/f.svg" alt=""></div>
                            <div class="social-btn"><a href=""><button>SUBSCRIBE</button></a></div>
                        </div>
                    </div>
                </div>

                <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 margin-seprate">
                    <div class="tw social shadow">
                        <div class="social-title">TWITER</div>
                        <div class="social-url">
                            <div class="social-img"><img src="./img/f.svg" alt=""></div>
                            <div class="social-btn"><a href=""><button>LIKE</button></a></div>
                        </div>
                    </div>
                </div>

                <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 margin-seprate">
                    <div class="ista social shadow">
                        <div class="social-title">INSTAGRAM</div>
                        <div class="social-url">
                            <div class="social-img"><img src="./img/f.svg" alt=""></div>
                            <div class="social-btn"><a href=""><button>LIKE</button></a></div>
                        </div>
                    </div>
                </div>





            </div>
        </div>
        <div class="seprate"></div>


    <br><br>
    </div>

    <div class="container-fluid faq">

        <div class="container">

            <div class="faq-title text-center shadow">FREQUENCY ASKED QUESTIONS</div>
            <div class="seprate"></div>
            <div class="row">
                <div class="col-md-6 margin-seprate q-a">

                    <div class="question q1">Is mou9ef website free for use ?</div>
                    <div class="answer a1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ratione rerum.</div>
                </div>
                <div class="col-md-6 margin-seprate q-a">
                    <div class="question q2">Is mou9ef website free for use ?</div>
                    <div class="answer a2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ratione rerum.</div>
                </div>



            <br>


                <div class="col-md-6 margin-seprate q-a">
                    <div class="question q3">Is mou9ef website free for use ?</div>
                    <div class="answer  a3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ratione rerum.</div>
                </div>
                <div class="col-md-6  margin-seprate q-a">
                    <div class="question q4">Is mou9ef website free for use ?</div>
                    <div class="answer a4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ratione rerum.</div>
                </div>



            <br>


                <div class="col-md-6 margin-seprate q-a">
                    <div class="question q5">Is mou9ef website free for use ?</div>
                    <div class="answer a5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ratione rerum.</div>
                </div>
                <div class="col-md-6 margin-seprate q-a">
                    <div class="question q6">Is mou9ef website free for use ?</div>
                    <div class="answer a6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ratione rerum.</div>
                </div>

            </div>
            <div class="seprate"></div><div class="seprate"></div>
        </div>
    </div>

    <?php
    include "footer.php";
    ?>

    <script>
        function faqControl(){
    $(".answer").hide();
    $(".question").on("click",function(){
        $(this).next().slideToggle();
    });
}
        $(document).ready(function(){
      faqControl();
 });



    </script>
</body>
</html>
