 
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
  <link href="http://localhost/routine/css/app.css" rel="stylesheet">
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
      background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(img/back.jpg);
      
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
      align:left;
      border: 5px solid black;
      border-radius: 10px;
      /*background-image: url(http://localhost/SMP/public/img/smplogo.png);*/
    }
    .panel-heading{
      background-color: black !important;
      text-align: center;
      font-size: 20px;
        font-family: monospace;
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
      top: 5.5%;
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
    border: 5px solid black;
    padding: 5px;
    margin: 5px;*/
    border-radius: 25px;
    background: black;
    padding: 10px; 
    padding-left: 20px;
    width: 100px;
    height: 50px; 
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
     position: "absolute";
   margin-left:40%;
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

  input[type=text] {
    border: none;
    border-bottom: 1px solid black;
    background-color: lightblue;
  }

  textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #E7C89E;
    resize: none;

  }
div p
{
  color: black;
  font-size: 20px;
  
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
             <p  align="center">
              সিলেট মেট্রোপলিটন পুলিশ,সিলেট</p>



              <form action="{{url('/')}}/insert_nid" method="post">
                {{csrf_field()}}
                বরাবর<br>
                &emsp;অফিসার ইনচার্জ<br>
                &emsp;কোতোয়ালি মডেল থানা, <br>
                &emsp;সিলেট মেট্রোপলিটন পুলিশ ,সিলেট।<br><br>
                বিষয়ঃ সাধারণ ডায়েরীর আবেদন করার প্রসঙ্গে ।<br><br>

                জনাব<br>
                &emsp;&emsp;&emsp;যথাবিহীত সম্মান প্রদর্শন পূর্বক বিনীত নিবেদন এই যে, আমি নিম্নস্বাক্ষরকারী <input type="text"  class="pix" name="v_name" placeholder="">
                <!--  জাতীয় পরিচয় পত্র নং <input type="text" name="nid" size="25" placeholder=""> --> 
                পিতাঃ <input type="text" name="father" size="40" placeholder=""> মাতাঃ  <input type="text" name="mother" size="40" placeholder=""><br>
                ঠিকানা (স্থায়ী) <input type="text" name="permanent_address" size="50"  placeholder=""><br>
                ঠিকানা (বর্তমান) <input type="text" name="present_address" size="50" placeholder="">
                <br>
                আপনার থানায় হাজির হইয়া এই মর্মে সাধারণ ডায়েরী করার আবেদন করিতেছি যে, গত<input type="text" name="lost_date"  placeholder=""> তারিখ আমার জাতীয় পরিচয়পত্রের রসিদ যাহার ভোটার নং- <input type="text" name="nid"  placeholder=""><b>, </b><input type="text" name="from_place"  placeholder="">হইতে <input type="text" name="to_place"  placeholder="">যাওয়ার পথে কোথায় যেন হারিয়ে যায়। অনেক খোঁজাখুঁজি করেও পাওয়া যায় নাই। এমতাবস্তায় উক্ত বিষয়ে সাধারণ ডায়েরী করিতে ইচ্ছুক।


                <br> 

                আমি এই মর্মে জানাচ্ছি যে,
                <br><textarea rows="20" cols="100" name="c_info"></textarea><br>
                &emsp;&emsp;&emsp;&emsp;     অতএব, মহোদয়ের নিকট আমার আকুল আবেদন এই যে, উক্ত বিষয়ে সাধারণ ডায়েরী করিতে আপনার সদয় মর্জি হয়।<br><br>
                তারিখঃ <input type="text" name="date" class="pix" placeholder="">&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;  
                বিনীত নিবেদক<br>&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                স্বাক্ষরঃ ____________________<br> 
                &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 
                নামঃ ______________________<br>
                &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                মোবাইলঃ <input type="text"  name="mobile" size="30" placeholder=""><br>
                &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                ই -মেইল (যদি থাকে) : <input type="text" name="email" class="pix" placeholder=""><br>
                &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;



                জিডি নাম্বারঃ<input type="text"  size="28" name="gd_number"><br><br>
                      <!-- <font color="green">Victim's name:  </font><input type="text"  class="pix" name="v_name"><br><br>
                      
                      
                      
                      
                      
                      <font color="green">Mobile no:  </font><input type="text" class="pix" name="mobile"><br><br>
                      <font color="green">Email:  </font><input type="text" name="email" class="pix"><br><br> -->
                      
                      <input type="submit" name="submit" value="Proceed" class="btn btn-primary">               
                    </form>








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
