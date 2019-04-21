<!DOCTYPE html>
<html lang="bn">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content_Type" context="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Sylhet Metropolitan Police</title>
		
<style>
	 table, th, td,tr {
            border: 1px solid black;
            border-collapse: collapse;
        }
        

/*body{
    text-align: center;
}*/
.smplogo{
    height: 100px;
    width: 150px;
    padding-left: 180px;
}
.fogs{
    position: absolute;
    left: 20%;
    top: 10%;
    width: 100%;
    /*text-align: center;*/
    align-self: center;
}
.button {
     display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;

}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
  
}
.buttonclass
{
  margin-left: 1000px;
}
</style>


	
</head>
<body>
<!-- <script type="text/javascript">
    if(window.print){
        document.write('<form><input type="button" name="print" value="PRINT" onClick="window.print()"></form>');
    }
</script> -->

<?php   

use Illuminate\Http\Request;

 // use DB;
use Illuminate\Support\Facades\DB;

$users=DB::table('temporary')
->orderBy('id', 'desc')
    			
    			->get();


?>
<button class="button" id="buts" name="print" value="PRINT" onClick="myfunction()">PRINT</button>
    <script type="text/javascript">
        function myfunction(){
            var x = document.getElementById('buts');
            x.style.visibility = 'hidden';
            window.print();
        }
    </script>
<div class="fogs">
    
<img  class="smplogo"  src="http://localhost/SMP/public/img/smplogo.png">
<p  style="padding-left:160px">
<b>সিলেট মেট্রোপলিটন পুলিশ,সিলেট</b></p>


	
<!-- <h1 align="center" >General Diary Details</h1> -->

<?php             
foreach($users as $key){
?>


বরাবর<br>
                    <p>অফিসার ইনচার্জ</p>
                    <u>{{$key->thana_name}}</u> &emsp;থানা, সিলেট মেট্রোপলিটন পুলিশ ,সিলেট।<br><br>
                    বিষয়ঃ সাধারন ডাইরী করার করার প্রসঙ্গে ।<br><br>

                    জনাব<br>
&emsp;&emsp;&emsp;আমি নিম্নস্বাক্ষরকারী (নাম)<u>{{$key->v_name}}</u>
                   <b> জাতীয় পরিচয় পত্র নং :</b><u>{{$key->NID}} </u><br>
                   <b> পিতাঃ </b><u>{{$key->father}} </u><b>মাতাঃ </b> <u>{{$key->mother}}</u><br>
                   <b> ঠিকানা (স্থায়ী) : </b><u>{{$key->address_permanent}}</u><br>
                   <b> ঠিকানা (বর্তমান) : </b><u>{{$key->address_present}}</u>
                      <br>
                      আমি এই মর্মে জানাচ্ছি যে,
                      <br><u>{{$key->body}}</u><br>
    &emsp;&emsp;&emsp;&emsp;      অতএব, মহোদয় উপরোক্ত বিষয়টি আপনার থানায় সাধারণ ডাইরীভূক্ত করতে মর্জি হয় ।<br><br>
   <b> তারিখঃ</b> <u>{{$key->date}}</u>&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;  
    বিনীত নিবেদক<br>&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <b>স্বাক্ষরঃ</b> ____________________<br> 
    &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 
    <b>নামঃ</b> ______________________<br>
    &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <b>মোবাইলঃ </b><u>{{$key->mobile}}</u><br>
    &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <b>ই -মেইল (যদি থাকে) : </b><u>{{$key->email}}</u><br>
    &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;



                    <b>জিডি নাম্বারঃ</b><u>{{$key->gd_number}}</u><br><br>



<!-- Thana name:{{$key->thana_name}}<br>
Victim name:{{$key->v_name}}<br>
National Identification no:{{$key->NID}}<br>
Father's name:{{$key->father}}<br>
Mother's name:{{$key->mother}}<br>
Present Address:{{$key->address_present}}<br>
Permanent Address:{{$key->address_permanent}}<br>
Mobile no.:{{$key->mobile}}<br>
E-mail:{{$key->email}}<br>
Date of crime:{{$key->date}}<br>
GD no:{{$key->gd_number}}<br>
Details:{{$key->body}}<br>
 --><?php  break;}   ?>
</div>
</body>

</html>