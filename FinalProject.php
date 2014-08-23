<?php

if (isset($_POST['submit'])) {
    
    $retval = '';
        $to = 'melito.ben@gmail.com';
        $subject = 'Contact Form';

        $message = "Name: " . $name . "\n\n";
        $message .= "Email: " . $_POST['email'] . "\n\n";
        $message .= "Comments: " . $_POST['comments'];

        $headers = "From: ". $_POST['email'];

        if (mail($to, $subject, $message, $headers)) {
            $retval = '<h3>Thank you! We will be in touch shortly...</h3>';
        } else {
            $retval = '<h3>There was an error with your email!</h3>';
        }
    
}
echo $retval;
?>

<!doctype html>
<html>

<head>
  <title>Final Project</title>
  <link rel="stylesheet" href="Bootstrap_css/bootstrap.css"  type="text/css"/>
  <link rel="stylesheet" type="text/css" href="FinalProject.css">
  <link href='http://fonts.googleapis.com/css?family=Rubik+Mono+One' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Faster+One' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
  <script src="Bootstrap_js/bootstrap.js"></script>
  <script src="jquery.stellar/jquery.stellar.js" type="text/javascript"></script>
</head>


<body>


  <div id="myContainer">

    <progress id="progressbar" value="0"></progress>

    <div id="divider"></div>

    <span class="shadow">Nick Lehr</span>

    <!--Navigation -->
     <div id ="navi">
        <ul>
         <li><a href="#contactForm">Contact</a></li>
         <li ><a href="#photos">Photos</a></li>
         <li ><a href="#articles">Articles</a></li>
        </ul>
      </div>
    

  <!--Pic -->
    <div id="about">
      <img src="http://www.wearysloth.com/Gallery/ActorsW/18700-3049.jpg" id="profilePic">
    </div>

<!--About -->

      <div id="aboutText" class="shadow">
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu egestas massa. Phasellus auctor faucibus felis, in lobortis metus vehicula vitae. Proin pulvinar erat a metus placerat ullamcorper. Mauris ut nisi egestas lectus tempus facilisis sit amet tincidunt diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ipsum libero, commodo ac libero vel, tincidunt fringilla odio. Integer tristique sit amet tortor sit amet dictum. Curabitur mollis magna sem, id lacinia velit ornare in. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.
        </p>
      </div>
    

<!--Articles -->
    
    <div id="articles">
      <img class = "articlePic" id ="theInterviewPic"src = "./Articles/The_Interview.png"/>
      <img id = "playingCardsPic" class = "articlePic" src = "./Articles/Playing_Cards.png"/>
      <img id= "strikingItRichPic" class = "articlePic" src = "./Articles/Striking_it_Rich.png"/>
      <img class = "articlePic" id ="sweetSigsPic" src = "./Articles/Sweet_Sigs.png"/>

      <ul>
        <li><a id ="theInterview" href ="http://digboston.com/boston-beer-brewing/2013/08/2013-bukowski-tavern-pint-and-pen-winners/">"The Interview" - DigBoston </a></li>
        <li><a id ="playingCards" href = "http://www.boston.com/lifestyle/articles/2011/06/16/mansfield_sports_memorabilia_show_keeps_fans_returning/">"Playing Cards" - Boston.com </a></li>
        <li><a id= "strikingItRich" href = "http://goodmenproject.com/arts/striking-it-rich/">"Striking it Rich" - Good Men Project </a></li>
        <li><a id="sweetSigs" href ="http://goodmenproject.com/sports-2/sweet-sigs/">"Sweet Sigs" - Good Men Project </a></li>
      </ul>


    </div>

  <!--Photos-->
  <div id="photos">
    <p>Photos</p>
  </div>

  <div class = "container">
    <ul class="row">
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta1.png"/></li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta2.png"/></li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta3.png"/></li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta4.png"/></li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta5.png"/></li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta6.png"/></li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta7.png"/></li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta8.png"/></li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta9.png"/></li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta10.png"/></li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta11.png"/></li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta12.png"/></li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta13.png"/></li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta14.png"/></li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta15.png"/></li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta16.png"/></li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta17.png"/></li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"> <img src = "./Photos/lehrinsta18.png"/></li>

    </ul>


  </div>



 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">         
          <div class="modal-body">                
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

 <!--Contact Form-->


<form id = "contactForm" method="post"> 
  Name <br><input type="text" name="name" style = "background-color: #d3d3d3; width: 250px; font-family: georgia"><br>
  Email Address <br> <input type="email" name="email" style = "background-color: #d3d3d3; width: 250px; font-family: georgia"><br>
  Comments <br> <textarea name ="comments" rows="8" cols="30" style = "background-color: #d3d3d3; width: 350px; font-family: georgia"></textarea> <br>
  <input name ="submit" type="submit" value="SUBMIT" style="height: 30px; width: 80px; background: gray;color: white; font-size: 1 em; margin-top: 10px;">
</form>

<div id = "contactLeft"></span>Contact</span></div>

<div id = "contactRight"></span>Me</span></div>

<!--Social Links-->

<div id="social">

  <a href = "http://nicklehr.tumblr.com"><img src = "./Articles/twitter.png"></a>
  <a href = "https://twitter.com/Lester_Diamond1"><img src = "./Articles/tumblr.png"></a>

</div>


  <script type="text/javascript" src="FinalProject.js"></script>
  

    
    
  </div>

</body>


</html>