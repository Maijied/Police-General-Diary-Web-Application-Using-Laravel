  <!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Sylhet Metropolitan Police</title>
    
<style>
   table, th, td,tr {
            border: 1px solid black;
            border-collapse: collapse;
        }
        p{
          font-family: kalpurush;
        }

body{
    /*text-align: center;*/
    /*background-image: url();*/
    background-color: lightblue;
}
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
  margin-left: 900px;
}
</style>

<script type="text/javascript">
  



function export2Word( element ) {

   var html, link, blob, url, css;

   css = (
     '<style>' +
     '@page WordSection1{size: 841.95pt 595.35pt;mso-page-orientation: landscape;}' +
     'div.WordSection1 {page: WordSection1;}' +
     '</style>'
   );

   html = element.innerText;
   blob = new Blob(['\ufeff', html], {
     type: 'application/msword'
   });
   url = URL.createObjectURL(blob);
   link = document.createElement('A');
   link.href = url;
   link.download = 'Document';  // default name without extension 
   document.body.appendChild(link);
   if (navigator.msSaveOrOpenBlob ) navigator.msSaveOrOpenBlob( blob, 'Document.doc'); // IE10-11
       else link.click();  // other browsers
   document.body.removeChild(link);
 };





</script>


  
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
->where('real_number','=',$details)
// ->orderBy('id')
          
          ->get();
          // echo $users;


?>
<div class="buttonclass">
<a href="http://majhiwala.nexenitlabs.com"><button class="button" id="buts" name="home" value="HOME" >HOME</button></a>
<button class="button" id="buts" name="print" value="PRINT" onClick="myfunction()">PRINT</button>
<button class="button" id="buts1"  onclick="export2Word(window.docx)">SAVE</button>
</div>
    <script type="text/javascript">
        function myfunction(){
            var x = document.getElementById('buts');
            var y = document.getElementById('buts1');
            x.style.visibility = 'hidden';
            y.style.visibility = 'hidden';
            window.print();
            x.style.visibility = 'visible';
            y.style.visibility = 'visible';
        }
    </script>
<div class="fogs">
  <div id="docx">
  <div class="WordSection1">

    
<img  class="smplogo"  src="http://localhost/SMP/public/img/smplogo.png">
<p  style="padding-left:160px">
<b>সিলেট মেট্রোপলিটন পুলিশ,সিলেট</b></p>


  
<!-- <h1 align="center" >General Diary Details</h1> -->

<?php             
foreach($users as $key){
?>


বরাবর<br>
                <p>অফিসার ইনচার্জ</p>
                &emsp;কোতোয়ালি মডেল থানা, <br>
                &emsp;সিলেট মেট্রোপলিটন পুলিশ ,সিলেট।<br><br>
                বিষয়ঃ সাধারণ ডায়েরীর আবেদন করার প্রসঙ্গে ।<br><br>

                জনাব<br>
                &emsp;&emsp;&emsp;যথাবিহীত সম্মান প্রদর্শন পূর্বক বিনীত নিবেদন এই যে, আমি নিম্নস্বাক্ষরকারী {{$key->v_name}}
                <!--  জাতীয় পরিচয় পত্র নং <input type="text" name="nid" size="25" placeholder=""> --> 
                পিতাঃ {{$key->father}} মাতাঃ  {{$key->mother}}<br>
                ঠিকানা (স্থায়ী) : {{$key->address_permanent}}<br>
                ঠিকানা (বর্তমান) : {{$key->address_present}}
                <br>
                আপনার থানায় হাজির হইয়া এই মর্মে সাধারণ ডায়েরী করার আবেদন করিতেছি যে, গত{{$key->lost_date}} তারিখ আমার জাতীয় পরিচয়পত্রের রসিদ যাহার ভোটার নং- {{$key->NID}}<b>, </b>{{$key->from_place}}হইতে {{$key->to_place}}যাওয়ার পথে কোথায় যেন হারিয়ে যায়। অনেক খোঁজাখুঁজি করেও পাওয়া যায় নাই। এমতাবস্তায় উক্ত বিষয়ে সাধারণ ডায়েরী করিতে ইচ্ছুক।


                <br> 

                আমি এই মর্মে জানাচ্ছি যে,
                <br>{{$key->body}}<br>
                &emsp;&emsp;&emsp;&emsp;     অতএব, মহোদয়ের নিকট আমার আকুল আবেদন এই যে, উক্ত বিষয়ে সাধারণ ডায়েরী করিতে আপনার সদয় মর্জি হয়।<br><br>
                তারিখঃ {{$key->date}}&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;  
                বিনীত নিবেদক<br>&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                স্বাক্ষরঃ ____________________<br> 
                &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 
                নামঃ ______________________<br>
                &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                মোবাইলঃ {{$key->mobile}}<br>
                &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                ই -মেইল (যদি থাকে) : {{$key->email}}<br>
                &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;



                জিডি নাম্বারঃ{{$key->gd_number}}<br><br>


<?php  


break;}   ?>

</div>
</div>
</div>
</body>

</html>