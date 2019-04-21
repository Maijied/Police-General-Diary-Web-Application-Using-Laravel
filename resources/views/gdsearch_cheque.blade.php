 
<!DOCTYPE html>
<html lang="en">
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
    background-color:#99e6e6;
        border: 1px solid black !important;
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
        background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(img/policecar.jpg);
        background-size: 1920px 1080px;
        background-repeat: no-repeat;
        background-position: center;
      background-size: 100%;
      background-attachment: fixed;
    }
    .navbar-static-top{
        background-color: black;
    }
    .panel-body{
        padding-top: 35px;
      background-color: lightblue;
      align:left;
      height:700px;
      
      border: 5px solid black;
      border-radius: 10px;
    }
    .panel-heading{
       background-color: black !important;
      text-align: center;
      font-size: 20px;
        font-family: monospace;
    }
    .pix{
        width: 300px;

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
    font-size: 25px;
    padding: 15px 40px 15px 40px;
    margin-top: 40px;
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


form{

font-family:monospace;
font-size:20px;
color:black;
font-weight:bold;
}
    
    #saveb{
    margin:auto;
    color:black;
    }
    
    


    

</style>



<script type="text/javascript">
    
    function validateForm() {
        var v = document.forms["myForm"]["gdsearch_account_number"].value;
        var w = document.forms["myForm"]["gdsearch_number"].value;
        var x = document.forms["myForm"]["gdsearch_v_name"].value;
        var y = document.forms["myForm"]["gdsearch_mobile"].value;
        var z = document.forms["myForm"]["gdsearch_bank_name"].value;
        if (w == "" && x == "" && y == "" && z == "" && v=="") {
            alert("Atleast one field must be filled out");
            return false;
        }
    }

</script>
</head>
<body>
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
                        <li><img src="{{url('../')}}/public/img/sust.png" width="40px" height="40px"/></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                        <!-- <li><img src="{{url('../')}}/public/img/sust.png" width="40px" height="40px"/></li> -->
                        @else
                        <!-- <img src="{{url('../')}}/public/img/{{Auth::user()->pic}}" width="40px" height="40px"/> -->
                        <!-- <img src="{{url('../')}}/public/img/sust.png" width="40px" height="40px"/> -->
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
                        <div class="panel-heading"><b><font color="white" >General Diary Search Box</font></b></div>

                        <div class="panel-body">
                           

                          <form action="{{url('/')}}/gdsearchresult_cheque" method="post" onsubmit="return validateForm()" name="myForm">
                            {{csrf_field()}}


                            <font >Search By GD no:&emsp;&emsp;&ensp; &ensp;</font><input placeholder="" type="text" name="gdsearch_number"><br>
                            <font >Search By Bank Name: &ensp;</font><input placeholder="" type="text" name="gdsearch_bank_name"><br>
                            <font >Search By Mobile no: &ensp;</font><input placeholder="" type="text" name="gdsearch_mobile"><br>
                            <font >Search By Account no: </font><input placeholder="" type="text" name="gdsearch_account_number"><br>
                            <font >Search By Name:&emsp;&emsp;&emsp;&ensp; </font><input placeholder="" type="text" name="gdsearch_v_name"><br>
                            <input type="submit" name="submit" value="Search" class="btn btn-primary">            
                        </form>

                        @if(isset($details))
<br>
<br>
<br>
                        <p> <b>The Search results for your query  {{ $query }}  is :</b></p>
                        
                        
                        <h2>Search Result</h2>
                        
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th>Name</th>
                                    <th>GD no.</th>
                                    <th>Bank Name</th>
                                    <th>Account No</th>
                                    <th>Mobile No</th>
                                    <th>Date</th>
                                    
                                    <th>Print</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($details as $user)

                                <tr>
                                    <td>{{$user->v_name}}</td>
                                    <td>{{$user->gd_number}}</td>
                                    <td>{{$user->bank_name}}</td>
                                    <td>{{$user->account_number}}</td>
                                    <td>{{$user->mobile}}</td>
                                    <td>{{$user->date}}</td>
                                    <td>

                                        <form action="{{url('/')}}/get_cheque" method="get">
                                            {{csrf_field()}}
                                            <input type="hidden" name="real_id" value="<?php echo htmlspecialchars($user->id);?>" >
                                            

                                            
                                            <input type="submit"  name="submit" value="Print/Save" class="btn btn-primary" id="saveb">            
                                        </form>


                                        
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
    <!-- <form action="{{url('/')}}/getPDF" method="get">
                    {{csrf_field()}}

                    
                    <input type="submit" name="submit" value="SEE DETAILS  (pdf)" class="btn btn-primary">            
                </form> -->
                 <!--  <form action="{{url('/')}}/get" method="get">
                    {{csrf_field()}}

                    
                    <input type="submit" name="submit" value="SEE DETAILS  (pdf)" class="btn btn-primary">            
                  </form>

              -->                 
              @endif








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
