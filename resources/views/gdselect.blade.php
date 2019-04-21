 
<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="faBxLNxqElDR4ILQKw4iFe3DP5mDb0COfuGoXzGY">

  <title>SMP</title>


  <!-- Styles -->
  <link href="http://localhost/police/css/app.css" rel="stylesheet">
  <style>



   table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
  .boxed{
    border:1px solid black;
    background-color: #98f5ff;
  }
/*app-navbar-collapse{

    background-color: "red";

    }*/
    body{
      background-color: black;
      background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(img/back.jpg);
      
      background-position: center;
      background-size: 100%;
      background-attachment: fixed;
    }
    .navbar-static-top{
      background-color: black;
    }
    .panel-body{
      padding-top: 135px;
      background-color: lightblue;
      

      border: 5px solid black;
      border-radius: 10px;
      /*background-image: url(http://localhost/SMP/public/img/smplogo.png);*/
    }
    
    .panel-heading{
      background-color: black !important;
      text-align: center;
      font-size: 20px;
        font-family: monospace;
        /*border: 1px solid black;
        border-radius: 5px;*/


    }
    .pix{
      width: 150px;

    }
    .panel-default{
      

    }
    .col-md-offset-2{
      
      
    }
    .image{
      border-radius: 50%;
      height: 50px;
      width: 50px;
      padding:5%;
    }
    .imagesmp{
      border-radius: 50%;
      height: 150px;
      width: 150px;

    }
    .smplogo{
      height: 100px;
      width: 150px;
      /*align: middle;*/
      /*right:  100px;*/
      /*background-position: center center;*/
      left: 40%;
      top: 10.5%;
      position: absolute;

    /*border-radius: 50%;
    position: absolute;
    top: 50px;
    left: calc(50% - 50px);*/
    /*padding-right: 50px;*/

  }
  .clock{
     /*background-color: black;
     color: white;
    width: 100px;
    border: 2px solid white;
    border-radius: 25px;
    padding: 5px;
    margin: 5px;*/
    
    
    background: black;
    padding: 10px; 
    padding-left: 20px;
    
    width: 90px;
    height: 40px; 
    color: white;
  }

  .btn {


    background: #3498db;
    background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
    background-image: -moz-linear-gradient(top, #3498db, #2980b9);
    background-image: -ms-linear-gradient(top, #3498db, #2980b9);
    background-image: -o-linear-gradient(top, #3498db, #2980b9);
    background-image: linear-gradient(to bottom, #3498db, #2980b9);
    -webkit-border-radius: 28;
    -moz-border-radius: 28;
    border-radius: 28px;
    -webkit-box-shadow: 0px 10px 26px #666666;
    -moz-box-shadow: 0px 10px 26px #666666;
    box-shadow: 0px 10px 26px #666666;
    font-family: Arial;
    color: #ffffff;
    font-size: 20px;
    padding: 10px 20px 10px 20px;
    margin-top: 2px;
    text-decoration: none;
    width: 150px;
  }

  .btn:hover {
    background: #3cb0fd;
    background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
    background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
    text-decoration: none;
  }
div p
{
  color: black;
  font-size: 30px;
  border:2px solid black;
  border-radius: 15px ;
}
  



  

</style>

<script>
  function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =h + ":" + m + ":" + s ;
    var t = setTimeout(startTime, 500);
  }
  function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
  }
</script>   
</head>
<body onload="startTime()">
 
  <div id="app">
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">


          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand" href="{{ url('/') }}">
            <!-- Laravel -->
            <b><font color="white">SMP</font></b>
          </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse" >
          <!-- Left Side Of Navbar -->
         <ul class="nav navbar-nav">
                        @if (Auth::check())
                        <li><a href="{{url('/')}}">Home</a></li>

                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <!-- <li><img src="{{url('../')}}/public/img/sust.png" width="40px" height="40px"/></li> -->
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><div id="txt" class="clock"></div></li>
                        <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                        <!-- <li><img src="{{url('../')}}/public/img/sust.png" width="40px" height="40px"/></li> -->
                        @else
                        <!-- <img src="{{url('../')}}/public/img/{{Auth::user()->pic}}" width="40px" height="40px"/> -->
                        <!-- <img src="{{url('../')}}/public/img/sust.png" width="40px" height="40px"/> -->
                        <li><div id="txt" class="clock"></div></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>

                
                @endif
            </ul>

        </div>
      </div>
    </nav> 

    <div class="container">
      <div class="row">   
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading"><b><font color="white">General Diary Box</font></b></div>

            <div class="panel-body">
             <img  class="smplogo"  src="http://localhost/SMP/public/img/smplogo.png">
             <div>
             <p  align="center">
              সিলেট মেট্রোপলিটন পুলিশ,সিলেট

            </p>
            </div>

            <form action="{{url('/')}}/passport"  method="POST" align="center">
              {{csrf_field() }}
              <input type="submit" name="passport" align="center" value="PASSPORT" class="btn btn-primary">
              
            </form><br>
            <form action="{{url('/')}}/mobile" method="POST" align="center">
              {{csrf_field() }}
              <input type="submit" name="mobile" value="MOBILE" class="btn btn-primary">
              
            </form><br>
            <form action="{{url('/')}}/nid" method="POST" align="center">
              {{csrf_field() }}
              <input type="submit" name="nid" value="NID" class="btn btn-primary">
              
            </form><br>
            <form action="{{url('/')}}/cheque" method="POST" align="center">
              {{csrf_field() }}
              <input type="submit" name="cheque" value="CHEQUE"  class="btn btn-primary">
              
            </form><br>
            <form action="{{url('/')}}/other" method="POST" align="center">
              {{csrf_field() }}
              <input type="submit" name="other" value="OTHERS" class="btn btn-primary">
              
            </form><br>








          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="http://localhost/SMP/js/app.js"></script>
</body>
</html>
