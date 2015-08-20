<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Dashboard</title>

  <link rel="stylesheet" href="css/styles.css"/>
  <script src="js/main.js"></script>

</head>

<body>
 <header>
<h1>Interactive Dashboard</h1>
 </header>

<div class="demo-wrapper">

 <div class="s-page random-restored-page">
    <h2 class="page-title">Clock Widget</h2>


<button type="button" class="btn btn-success"><a id="link-clock" href="clock/clock.html">Show Clock</a></button>  
    <div class="close-button s-close-button">x</div>
  </div>
  <div class="s-page custom-page">
    <h2 class="page-title">Weather Update</h2>
    <button type="button" class="btn btn-success"><a id="link-weather" href="weather/weather.html">Show weather</a></button>  
    <div class="close-button s-close-button">x</div>
  </div>
  

  <div class="r-page random-r-page">
    <h2 class="page-title">calender Widget</h2>
<button type="button" class="btn btn-success"><a id="link-index2" href="calender/index2.html">Show Application</a></button>   

    
    <div class="close-button r-close-button">x</div>
  </div>

  <div class="dashboard clearfix">
    <ul class="tiles">



      <div class="col1 clearfix">
        <li class="tile tile-big tile-1 slideTextUp" data-page-type="r-page" data-page-name="random-r-page">
          
          <div><p>Calender</p></div>
          <div><p>View the Whole calender</p></div>
        </li>
        
        
        
        <li class="tile tile-small tile tile-2 slideTextRight" data-page-type="s-page" data-page-name ="random-restored-page">
          <div><p class="icon-arrow-right"></p></div>
          <div><p>Show Clock</p></div>
        </li>


        
        <li class="tile tile-small last tile-3" data-page-type="r-page" data-page-name="random-r-page">
          <p class="icon-calendar-alt-fill"></p>
        </li>
        
     
        <li class="tile tile-big tile-4 fig-tile" data-page-type="r-page" data-page-name="random-r-page">
          <figure>
            <img src="images/blue.jpg" />
            <figcaption class="tile-caption caption-left">Description</figcaption>
          </figure>
        </li>
      </div>

     

      <div class="col2 clearfix">
       <li class="tile tile-big tile-6 slideTextLeft" data-page-type="r-page" data-page-name="random-r-page">
           <div><h2>Dashboard is Done using the HTML5,CSS3,Jquery and Bootstrap.</h2></div>
        </li>
        
        <li class="tile tile-big tile-6 slideTextLeft" data-page-type="r-page" data-page-name="random-r-page">
          <div><p><span class="icon-skype"></span>Contact</p></div>
          <div><p>Show the Contact details</p></div>
        </li>
        


        <li class="tile tile-small tile-7 rotate3d rotate3dX" data-page-type="r-page" data-page-name="random-r-page">
          <div class="faces">
            <div class="front"><span class="icon-picassa"></span></div>
            <div class="back"><p>Extra Feautres</p></div>
          </div>
        </li>



        <li class="tile tile-small last tile-8 rotate3d rotate3dY" data-page-type="r-page" data-page-name="random-r-page">
          <div class="faces">
            <div class="front"><span class="icon-instagram"></span></div>
            <div class="back"><p>Extra Photo Plugin </p></div>
          </div>
        </li>
      </div>
      <div class="col3 clearfix">      
        
        <li class="tile tile-big tile-10" data-page-type="s-page" data-page-name="custom-page">
          <div><h1><span class="icon-cloudy"></span>Weather</h1></div>
        
        </li>
      </div></br>
   
      <div class="col3 clearfix">      
        
        <li class="tile tile-big tile-10" data-page-type="s-page" data-page-name="custom-page">
          <div><h1><span></span>Address</h1></div>
        
        </li>
      </div>


    </ul>
  </div>

</div>

  <script src="js/jquery-1.8.2.min.js"></script>
  <script src="js/scripts.js"></script>

</body>
</html>
