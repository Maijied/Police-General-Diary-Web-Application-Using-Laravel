 
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


select{
margin-left:30%;
height:40px;
radius:2px solid black;
border-radius: 28px;
font-size:20px;


   



}
option{
font-size:20px ;

}
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
      align:center;
      
      border: 5px solid black;
      border-radius: 10px;
      height:700px;
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


    
    


    

</style>
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

        </div>            </div>
        </nav>

        <div class="container">
            <div class="row">   
               
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><b><font color="white">General Diary Search Box</font></b></div>

                        <div class="panel-body">


                          <form action="{{url('/')}}/gdsearchresult" method="post">
                              {{csrf_field()}}
                              <select name="gd_type" class="col-md-4 control-label">
                                
                                <option value="passport">Passport</option>
                                <option value="nid">NID</option>
                                <option value="mobile">Mobile</option>
                                <option value="cheque">Cheque</option>
                                <option value="others">Others</option>
                            </select><br><br><br>
                            
<!-- 
    <font color="green">Search By GD no: </font><input placeholder="General Diary Number" type="text" name="gdsearch_number"> -->
    <input type="submit" name="submit" value="Search" class="btn btn-primary">            
</form>
@if(isset($details))
<p> The Search results for your query <b> {{ $query }} </b> is :</p>
<h2>Sample User details</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>GD no.</th>
            <th>Date</th>
            <th>Thana</th>
            <th>mobile</th>
            <th>Name</th>
            <th>Print</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($details as $user)
        <tr>
            <td>{{$user->gd_number}}</td>
            <td>{{$user->date}}</td>
            <td>{{$user->thana_name}}</td>
            <td>{{$user->mobile}}</td>
            <td>{{$user->v_name}}</td>
            <td>
                
               <form action="{{url('/')}}/get" method="get">
                {{csrf_field()}}

                
                <input type="submit" name="submit" value="SEE DETAILS  (pdf)" class="btn btn-primary">            
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
                <form action="{{url('/')}}/get" method="get">
                    {{csrf_field()}}

                    
                    <input type="submit" name="submit" value="SEE DETAILS  (pdf)" class="btn btn-primary">            
                </form>

                
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
