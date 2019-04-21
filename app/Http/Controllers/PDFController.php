<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
 // use DB;
use Illuminate\Support\Facades\DB;


class PDFController extends Controller
{
    public function getPDF(){
    	// $customers = DB::table('users')->select('id', 'email','name')->get();

    	$pdf=PDF::loadView('pdf.customer');
    	
    	return $pdf->stream('customer.pdf');


    }
    public function get(){

        return view('pdf.customer');

    }


    public function get_others(Request $req){
        $variable=$req->input('real_id');
        $user=mb_convert_encoding($variable, 'UTF-8');
        




        return view('pdf.customer_others')->withDetails($user);

    }

    public function get_passport(Request $req){
        $variable=$req->input('real_id');
        $user=mb_convert_encoding($variable, 'UTF-8');
        




        return view('pdf.customer_passport')->withDetails($user);

    }
    public function get_nid(Request $req){
        $variable=$req->input('real_id');
        $user=mb_convert_encoding($variable, 'UTF-8');
        




        return view('pdf.customer_nid')->withDetails($user);

    }




    public function get_cheque(Request $req){
        $variable=$req->input('real_id');
        $user=mb_convert_encoding($variable, 'UTF-8');
        




        return view('pdf.customer_cheque')->withDetails($user);

    }


    public function get_mobile(Request $req){
        $variable=$req->input('real_id');
        $user=mb_convert_encoding($variable, 'UTF-8');
        




        return view('pdf.customer_mobile')->withDetails($user);

    }
    // public function gdsearch(Request $req){
    // 	$search=$req->input('gdsearch_number');
    // 	$user=DB::table('smp')
    // 			->where('gd_number','=',$search)
    // 			->get();
    // 			foreach($user as $key){
    // 	 DB::table('temporary')->insert(
    //     ['thana_name' => mb_convert_encoding($key->thana_name, 'UTF-8'), 
    //     'NID' => mb_convert_encoding($key->NID, 'UTF-8'),
    //     'father' => mb_convert_encoding($key->father, 'UTF-8'), 
    //     'mother' => mb_convert_encoding($key->mother, 'UTF-8'), 
    //     'address_present' => mb_convert_encoding($key->address_present, 'UTF-8'), 
    //     'address_permanent' => mb_convert_encoding($key->address_permanent, 'UTF-8'), 
    //     'body' => mb_convert_encoding($key->body, 'UTF-8'), 
    //     'date' => mb_convert_encoding($key->date, 'UTF-8'), 
    //     'mobile' => mb_convert_encoding($key->mobile, 'UTF-8'), 
    //     'email' => mb_convert_encoding($key->email, 'UTF-8'),
    //     'gd_number'=>mb_convert_encoding($key->gd_number, 'UTF-8'),
    // 	'v_name'=>mb_convert_encoding($key->v_name, 'UTF-8')


    // ]);
    // 	}

    // 			return view('gdsearch')->withDetails($user)->withQuery ( $search );

    // }



    public function gdsearch_passport(Request $req){
     $search_gd=$req->input('gdsearch_number');
     $search_passport=$req->input('gdsearch_passport');
     $search_mobile=$req->input('gdsearch_mobile');
     if((isset($search_gd) && !empty($search_gd)) && (isset($search_passport) && !empty($search_passport)) && (isset($search_mobile) && !empty($search_mobile))){
         $user=DB::table('passport')
         ->where('gd_number','=',$search_gd)
         ->where('passport_no','=',$search_passport)
         ->where('mobile','=',$search_mobile)

         ->get();
     }
     elseif((isset($search_passport) && !empty($search_passport))){

        $user=DB::table('passport')
             // ->where('gd_number','=',$search_gd)
        ->where('passport_no','=',$search_passport)
             // ->where('mobile','=',$search_mobile)

        ->get();

    }
    elseif((isset($search_mobile) && !empty($search_mobile))){

        $user=DB::table('passport')
             // ->where('gd_number','=',$search_gd)
             // ->where('passport_no','=',$search_passport)
        ->where('mobile','=',$search_mobile)

        ->get();

    }
    elseif((isset($search_gd) && !empty($search_gd))){

        $user=DB::table('passport')
        ->where('gd_number','=',$search_gd)
             // ->where('passport_no','=',$search_passport)
             // ->where('mobile','=',$search_mobile)

        ->get();

    }


    DB::table('temporary')->truncate();
    foreach($user as $key){
      DB::table('temporary')->insert(
        ['passport_no' => mb_convert_encoding($key->passport_no, 'UTF-8'), 
        'NID' => mb_convert_encoding($key->NID, 'UTF-8'),
        'real_number' => mb_convert_encoding($key->id, 'UTF-8'),
        'to_place' => mb_convert_encoding($key->to_place, 'UTF-8'),
        'from_place' => mb_convert_encoding($key->from_place, 'UTF-8'),
        'father' => mb_convert_encoding($key->father, 'UTF-8'), 
        'mother' => mb_convert_encoding($key->mother, 'UTF-8'), 
        'address_present' => mb_convert_encoding($key->address_present, 'UTF-8'), 
        'address_permanent' => mb_convert_encoding($key->address_permanent, 'UTF-8'), 
        'body' => mb_convert_encoding($key->body, 'UTF-8'), 
        'date' => mb_convert_encoding($key->date, 'UTF-8'),
        'lost_date' => mb_convert_encoding($key->lost_date, 'UTF-8'), 
        'mobile' => mb_convert_encoding($key->mobile, 'UTF-8'), 
        'email' => mb_convert_encoding($key->email, 'UTF-8'),
        'gd_number'=>mb_convert_encoding($key->gd_number, 'UTF-8'),
        'v_name'=>mb_convert_encoding($key->v_name, 'UTF-8')


    ]);
  }

  return view('gdsearch_passport')->withDetails($user)->withQuery ( $search_gd ,$search_mobile,$search_mobile);

}




public function gdsearch_others(Request $req){
 $search_gd=$req->input('gdsearch_number');
 $search_nid=$req->input('gdsearch_nid');
 $search_mobile=$req->input('gdsearch_mobile');
 $search_v_name=$req->input('gdsearch_v_name');
 if((isset($search_gd) && !empty($search_gd)) && (isset($search_nid) && !empty($search_nid)) && (isset($search_mobile) && !empty($search_mobile)) && (isset($search_v_name) && !empty($search_v_name))){
     $user=DB::table('smp')
     ->where('gd_number','=',$search_gd)
     ->where('NID','=',$search_nid)
     ->where('mobile','=',$search_mobile)
     ->where('v_name','=',$search_v_name)

     ->get();
 }
 elseif((isset($search_nid) && !empty($search_nid))){

    $user=DB::table('smp')
             // ->where('gd_number','=',$search_gd)
    ->where('NID','=',$search_nid)
             // ->where('mobile','=',$search_mobile)
             // ->where('v_name','=',$search_v_name)

    ->get();



}
elseif((isset($search_mobile) && !empty($search_mobile))){

    $user=DB::table('smp')
             // ->where('gd_number','=',$search_gd)
             // ->where('passport_no','=',$search_passport)
    ->where('mobile','=',$search_mobile)

    ->get();

}
elseif((isset($search_gd) && !empty($search_gd))){

    $user=DB::table('smp')
    ->where('gd_number','=',$search_gd)
             // ->where('passport_no','=',$search_passport)
             // ->where('mobile','=',$search_mobile)

    ->get();

}
elseif((isset($search_v_name) && !empty($search_v_name))){

    $user=DB::table('smp')
             // ->where('gd_number','=',$search_gd)
    ->where('v_name','=',$search_v_name)
             // ->where('mobile','=',$search_mobile)
             // ->where('v_name','=',$search_v_name)

    ->get();



}


DB::table('temporary')->truncate();
foreach($user as $key){
  DB::table('temporary')->insert(
    [ 
        'NID' => mb_convert_encoding($key->NID, 'UTF-8'),
        'real_number' => mb_convert_encoding($key->id, 'UTF-8'),
        'father' => mb_convert_encoding($key->father, 'UTF-8'), 
        'mother' => mb_convert_encoding($key->mother, 'UTF-8'), 
        'address_present' => mb_convert_encoding($key->address_present, 'UTF-8'), 
        'address_permanent' => mb_convert_encoding($key->address_permanent, 'UTF-8'), 
        'body' => mb_convert_encoding($key->body, 'UTF-8'), 
        'date' => mb_convert_encoding($key->date, 'UTF-8'),
        'lost_date' => mb_convert_encoding($key->lost_date, 'UTF-8'), 
        'mobile' => mb_convert_encoding($key->mobile, 'UTF-8'), 
        'email' => mb_convert_encoding($key->email, 'UTF-8'),
        'gd_number'=>mb_convert_encoding($key->gd_number, 'UTF-8'),
        'v_name'=>mb_convert_encoding($key->v_name, 'UTF-8')


    ]);
}

return view('gdsearch_others')->withDetails($user)->withQuery ( $search_gd ,$search_mobile,$search_v_name);

}





public function gdsearch_nid(Request $req){
 $search_gd=$req->input('gdsearch_number');
 $search_nid=$req->input('gdsearch_nid');
 $search_mobile=$req->input('gdsearch_mobile');
 $search_v_name=$req->input('gdsearch_v_name');
 if((isset($search_gd) && !empty($search_gd)) && (isset($search_nid) && !empty($search_nid)) && (isset($search_mobile) && !empty($search_mobile)) && (isset($search_v_name) && !empty($search_v_name))){
     $user=DB::table('nid')
     ->where('gd_number','=',$search_gd)
     ->where('NID','=',$search_nid)
     ->where('mobile','=',$search_mobile)
     ->where('v_name','=',$search_v_name)

     ->get();
 }
 elseif((isset($search_nid) && !empty($search_nid))){

    $user=DB::table('nid')
             // ->where('gd_number','=',$search_gd)
    ->where('NID','=',$search_nid)
             // ->where('mobile','=',$search_mobile)
             // ->where('v_name','=',$search_v_name)

    ->get();



}
elseif((isset($search_mobile) && !empty($search_mobile))){

    $user=DB::table('nid')
             // ->where('gd_number','=',$search_gd)
             // ->where('passport_no','=',$search_passport)
    ->where('mobile','=',$search_mobile)

    ->get();

}
elseif((isset($search_gd) && !empty($search_gd))){

    $user=DB::table('nid')
    ->where('gd_number','=',$search_gd)
             // ->where('passport_no','=',$search_passport)
             // ->where('mobile','=',$search_mobile)

    ->get();

}
elseif((isset($search_v_name) && !empty($search_v_name))){

    $user=DB::table('nid')
             // ->where('gd_number','=',$search_gd)
    ->where('v_name','=',$search_v_name)
             // ->where('mobile','=',$search_mobile)
             // ->where('v_name','=',$search_v_name)

    ->get();



}


DB::table('temporary')->truncate();
foreach($user as $key){
  DB::table('temporary')->insert(
    [ 
        'NID' => mb_convert_encoding($key->NID, 'UTF-8'),
        'real_number' => mb_convert_encoding($key->id, 'UTF-8'),
        'to_place' => mb_convert_encoding($key->to_place, 'UTF-8'),
        'from_place' => mb_convert_encoding($key->from_place, 'UTF-8'),
        'father' => mb_convert_encoding($key->father, 'UTF-8'), 
        'mother' => mb_convert_encoding($key->mother, 'UTF-8'), 
        'address_present' => mb_convert_encoding($key->address_present, 'UTF-8'), 
        'address_permanent' => mb_convert_encoding($key->address_permanent, 'UTF-8'), 
        'body' => mb_convert_encoding($key->body, 'UTF-8'), 
        'date' => mb_convert_encoding($key->date, 'UTF-8'),
        'lost_date' => mb_convert_encoding($key->lost_date, 'UTF-8'), 
        'mobile' => mb_convert_encoding($key->mobile, 'UTF-8'), 
        'email' => mb_convert_encoding($key->email, 'UTF-8'),
        'gd_number'=>mb_convert_encoding($key->gd_number, 'UTF-8'),
        'v_name'=>mb_convert_encoding($key->v_name, 'UTF-8')


    ]);
}

return view('gdsearch_nid')->withDetails($user)->withQuery ( $search_gd ,$search_mobile,$search_v_name);

}




public function gdsearch_mobile(Request $req){
 $search_gd=$req->input('gdsearch_number');
 $search_sim=$req->input('gdsearch_sim');
 $search_mobile=$req->input('gdsearch_mobile');
 $search_v_name=$req->input('gdsearch_v_name');
 $search_imei1=$req->input('gdsearch_imei1');
 if((isset($search_gd) && !empty($search_gd)) && (isset($search_sim) && !empty($search_sim)) && (isset($search_mobile) && !empty($search_mobile)) && (isset($search_v_name) && !empty($search_v_name)) && (isset($search_imei1) && !empty($search_imei1))){
     $user=DB::table('mobile')
     ->where('gd_number','=',$search_gd)
     ->where('sim','=',$search_sim)
     ->where('mobile','=',$search_mobile)
     ->where('v_name','=',$search_v_name)
     ->where('imei1','=',$search_imei1)

     ->get();
 }
 elseif((isset($search_sim) && !empty($search_sim))){

    $user=DB::table('mobile')
             // ->where('gd_number','=',$search_gd)
    ->where('sim','=',$search_sim)
             // ->where('mobile','=',$search_mobile)
             // ->where('v_name','=',$search_v_name)

    ->get();



}
elseif((isset($search_mobile) && !empty($search_mobile))){

    $user=DB::table('mobile')
             // ->where('gd_number','=',$search_gd)
             // ->where('passport_no','=',$search_passport)
    ->where('mobile','=',$search_mobile)

    ->get();

}
elseif((isset($search_gd) && !empty($search_gd))){

    $user=DB::table('mobile')
    ->where('gd_number','=',$search_gd)
             // ->where('passport_no','=',$search_passport)
             // ->where('mobile','=',$search_mobile)

    ->get();

}
elseif((isset($search_v_name) && !empty($search_v_name))){

    $user=DB::table('mobile')
             // ->where('gd_number','=',$search_gd)
    ->where('v_name','=',$search_v_name)
             // ->where('mobile','=',$search_mobile)
             // ->where('v_name','=',$search_v_name)

    ->get();



}
elseif((isset($search_imei1) && !empty($search_imei1))){

    $user=DB::table('mobile')
             // ->where('gd_number','=',$search_gd)
    ->where('imei1','=',$search_imei1)
             // ->where('mobile','=',$search_mobile)
             // ->where('v_name','=',$search_v_name)

    ->get();



}



DB::table('temporary')->truncate();
foreach($user as $key){
  DB::table('temporary')->insert(
    [ 'sim' => mb_convert_encoding($key->sim, 'UTF-8'),
    'imei1' => mb_convert_encoding($key->imei1, 'UTF-8'),
    'imei2' => mb_convert_encoding($key->imei2, 'UTF-8'),
    'mobile_model' => mb_convert_encoding($key->mobile_model, 'UTF-8'),
    'mobile_color' => mb_convert_encoding($key->mobile_color, 'UTF-8'),
    'NID' => mb_convert_encoding($key->NID, 'UTF-8'),
    'real_number' => mb_convert_encoding($key->id, 'UTF-8'),
    'to_place' => mb_convert_encoding($key->to_place, 'UTF-8'),
    'from_place' => mb_convert_encoding($key->from_place, 'UTF-8'),
    'father' => mb_convert_encoding($key->father, 'UTF-8'), 
    'mother' => mb_convert_encoding($key->mother, 'UTF-8'), 
    'address_present' => mb_convert_encoding($key->address_present, 'UTF-8'), 
    'address_permanent' => mb_convert_encoding($key->address_permanent, 'UTF-8'), 
    'body' => mb_convert_encoding($key->body, 'UTF-8'), 
    'date' => mb_convert_encoding($key->date, 'UTF-8'),
    'lost_date' => mb_convert_encoding($key->lost_date, 'UTF-8'), 
    'mobile' => mb_convert_encoding($key->mobile, 'UTF-8'), 
    'email' => mb_convert_encoding($key->email, 'UTF-8'),
    'gd_number'=>mb_convert_encoding($key->gd_number, 'UTF-8'),
    'v_name'=>mb_convert_encoding($key->v_name, 'UTF-8')


]);
}

return view('gdsearch_mobile')->withDetails($user)->withQuery ( $search_gd ,$search_mobile,$search_v_name);

}





public function gdsearch_cheque(Request $req){
 $search_gd=$req->input('gdsearch_number');
 $search_account_number=$req->input('gdsearch_account_number');
 $search_mobile=$req->input('gdsearch_mobile');
 $search_v_name=$req->input('gdsearch_v_name');
 $search_bank_name=$req->input('gdsearch_bank_name');
 if((isset($search_gd) && !empty($search_gd)) && (isset($search_account_number) && !empty($search_account_number)) && (isset($search_mobile) && !empty($search_mobile)) && (isset($search_v_name) && !empty($search_v_name)) && (isset($search_bank_name) && !empty($search_bank_name))){
     $user=DB::table('bank')
     ->where('gd_number','=',$search_gd)
     ->where('account_number','=',$search_account_number)
     ->where('mobile','=',$search_mobile)
     ->where('v_name','=',$search_v_name)
     ->where('bank_name','=',$search_bank_name)

     ->get();
 }
 elseif((isset($search_account_number) && !empty($search_account_number))){

    $user=DB::table('bank')
             // ->where('gd_number','=',$search_gd)
    ->where('account_number','=',$search_account_number)
             // ->where('mobile','=',$search_mobile)
             // ->where('v_name','=',$search_v_name)

    ->get();



}
elseif((isset($search_mobile) && !empty($search_mobile))){

    $user=DB::table('bank')
             // ->where('gd_number','=',$search_gd)
             // ->where('passport_no','=',$search_passport)
    ->where('mobile','=',$search_mobile)

    ->get();

}
elseif((isset($search_gd) && !empty($search_gd))){

    $user=DB::table('bank')
    ->where('gd_number','=',$search_gd)
             // ->where('passport_no','=',$search_passport)
             // ->where('mobile','=',$search_mobile)

    ->get();

}
elseif((isset($search_v_name) && !empty($search_v_name))){

    $user=DB::table('bank')
             // ->where('gd_number','=',$search_gd)
    ->where('v_name','=',$search_v_name)
             // ->where('mobile','=',$search_mobile)
             // ->where('v_name','=',$search_v_name)

    ->get();



}
elseif((isset($search_bank_name) && !empty($search_bank_name))){

    $user=DB::table('bank')
             // ->where('gd_number','=',$search_gd)
    ->where('bank_name','=',$search_bank_name)
             // ->where('mobile','=',$search_mobile)
             // ->where('v_name','=',$search_v_name)

    ->get();



}



DB::table('temporary')->truncate();
foreach($user as $key){
  DB::table('temporary')->insert(
    [ 'account_number' => mb_convert_encoding($key->account_number, 'UTF-8'),
    'start_page' => mb_convert_encoding($key->start_page, 'UTF-8'),
    'end_page' => mb_convert_encoding($key->end_page, 'UTF-8'),
    'pages' => mb_convert_encoding($key->pages, 'UTF-8'),
    'bank_name' => mb_convert_encoding($key->bank_name, 'UTF-8'),
    'time_of_day' => mb_convert_encoding($key->time_of_day, 'UTF-8'),
    'NID' => mb_convert_encoding($key->NID, 'UTF-8'),
    'real_number' => mb_convert_encoding($key->id, 'UTF-8'),
    'to_place' => mb_convert_encoding($key->to_place, 'UTF-8'),
    'from_place' => mb_convert_encoding($key->from_place, 'UTF-8'),
    'father' => mb_convert_encoding($key->father, 'UTF-8'), 
    'mother' => mb_convert_encoding($key->mother, 'UTF-8'), 
    'address_present' => mb_convert_encoding($key->address_present, 'UTF-8'), 
    'address_permanent' => mb_convert_encoding($key->address_permanent, 'UTF-8'), 
    'body' => mb_convert_encoding($key->body, 'UTF-8'), 
    'date' => mb_convert_encoding($key->date, 'UTF-8'),
    'lost_date' => mb_convert_encoding($key->lost_date, 'UTF-8'), 
    'mobile' => mb_convert_encoding($key->mobile, 'UTF-8'), 
    'email' => mb_convert_encoding($key->email, 'UTF-8'),
    'gd_number'=>mb_convert_encoding($key->gd_number, 'UTF-8'),
    'v_name'=>mb_convert_encoding($key->v_name, 'UTF-8')


]);
}

return view('gdsearch_cheque')->withDetails($user)->withQuery ( $search_gd ,$search_mobile,$search_v_name);

}





public function gdsearch(Request $req){
    $search=$req->input('gd_type');

    if($search=='passport'){

        return view('gdsearch_passport');

    }
    else if($search=='cheque'){

        return view('gdsearch_cheque');

    }
    else if($search=='nid'){

        return view('gdsearch_nid');

    }
    else if($search=='mobile'){

        return view('gdsearch_mobile');

    }
    else if($search=='others'){

        return view('gdsearch_others');

    }
}


public function insert(Request $req){
    $v_name=mb_convert_encoding($req->input('v_name'), 'UTF-8');
    
    // $thana_name=mb_convert_encoding($req->input('thana_name'), 'UTF-8');
    $nid=mb_convert_encoding($req->input('nid'), 'UTF-8');
    $father=mb_convert_encoding($req->input('father'), 'UTF-8');
    $mother=mb_convert_encoding($req->input('mother'), 'UTF-8');
    $present_address=mb_convert_encoding($req->input('present_address'), 'UTF-8');
    $permanent_address=mb_convert_encoding($req->input('permanent_address'), 'UTF-8');
    $c_info=mb_convert_encoding($req->input('c_info'), 'UTF-8');
    $mobile=mb_convert_encoding($req->input('mobile'), 'UTF-8');
    $email=mb_convert_encoding($req->input('email'), 'UTF-8');
    $date=mb_convert_encoding($req->input('date'), 'UTF-8');
    $lost_date=mb_convert_encoding($req->input('lost_date'), 'UTF-8');
    $gd_number=mb_convert_encoding($req->input('gd_number'), 'UTF-8');
    


    DB::table('smp')->insert(
        [ 
            'NID' => $nid, 
            'father' => $father, 
            'mother' => $mother, 
            'address_present' => $present_address, 
            'address_permanent' => $permanent_address, 
            'body' => $c_info, 
            'date' => $date,
            'lost_date' => $lost_date, 
            'mobile' => $mobile, 
            'email' => $email,
            'gd_number'=>$gd_number,
            'v_name'=>$v_name]
        );
        // DB::table('project_time')->insert(
        // ['task_id' => $task_id,'task_deadline'=> $Dline]
        // );
        // DB::table('project_leader')->insert(
        // ['task_id' => $task_id,'project_leader'=> $project_leader]
        // );
    return view('welcome')->withDetails($v_name);


}


public function insert_passport(Request $req){
    $v_name=mb_convert_encoding($req->input('v_name'), 'UTF-8');
    $nid=mb_convert_encoding($req->input('nid'), 'UTF-8');
    $father=mb_convert_encoding($req->input('father'), 'UTF-8');
    $mother=mb_convert_encoding($req->input('mother'), 'UTF-8');
    $present_address=mb_convert_encoding($req->input('present_address'), 'UTF-8');
    $permanent_address=mb_convert_encoding($req->input('permanent_address'), 'UTF-8');
    $lost_date=mb_convert_encoding($req->input('lost_date'), 'UTF-8');
    $mobile=mb_convert_encoding($req->input('mobile'), 'UTF-8');
    $email=mb_convert_encoding($req->input('email'), 'UTF-8');
    $date=mb_convert_encoding($req->input('date'), 'UTF-8');
    $gd_number=mb_convert_encoding($req->input('gd_number'), 'UTF-8');
    $passport_number=mb_convert_encoding($req->input('passport_number'), 'UTF-8');
    $to_place=mb_convert_encoding($req->input('to_place'), 'UTF-8');
    $from_place=mb_convert_encoding($req->input('from_place'), 'UTF-8');
    $c_info=mb_convert_encoding($req->input('c_info'), 'UTF-8');
    //$date=mb_convert_encoding($req->input('date'), 'UTF-8');
    


    DB::table('passport')->insert(
        ['passport_no' => $passport_number, 
        'NID' => $nid,
        'to_place' => $to_place,
        'from_place' => $from_place,
        'lost_date' => $lost_date, 
        'father' => $father, 
        'mother' => $mother, 
        'address_present' => $present_address, 
        'address_permanent' => $permanent_address, 
        'body' => $c_info, 
        'date' => $date, 
        'mobile' => $mobile, 
        'email' => $email,
        'gd_number'=>$gd_number,
        'v_name'=>$v_name]
    );
        // DB::table('project_time')->insert(
        // ['task_id' => $task_id,'task_deadline'=> $Dline]
        // );
        // DB::table('project_leader')->insert(
        // ['task_id' => $task_id,'project_leader'=> $project_leader]
        // );
    return view('welcome')->withDetails($v_name);


}

public function insert_mobile(Request $req){
    $v_name=mb_convert_encoding($req->input('v_name'), 'UTF-8');
    $nid=mb_convert_encoding($req->input('nid'), 'UTF-8');
    $father=mb_convert_encoding($req->input('father'), 'UTF-8');
    $mother=mb_convert_encoding($req->input('mother'), 'UTF-8');
    $present_address=mb_convert_encoding($req->input('present_address'), 'UTF-8');
    $permanent_address=mb_convert_encoding($req->input('permanent_address'), 'UTF-8');
    $lost_date=mb_convert_encoding($req->input('lost_date'), 'UTF-8');
    $mobile=mb_convert_encoding($req->input('mobile'), 'UTF-8');
    $email=mb_convert_encoding($req->input('email'), 'UTF-8');
    $date=mb_convert_encoding($req->input('date'), 'UTF-8');
    $gd_number=mb_convert_encoding($req->input('gd_number'), 'UTF-8');
    //$passport_number=mb_convert_encoding($req->input('passport_number'), 'UTF-8');
    $to_place=mb_convert_encoding($req->input('to_place'), 'UTF-8');
    $from_place=mb_convert_encoding($req->input('from_place'), 'UTF-8');
    $c_info=mb_convert_encoding($req->input('c_info'), 'UTF-8');
    $imei1=mb_convert_encoding($req->input('imei1'), 'UTF-8');
    $imei2=mb_convert_encoding($req->input('imei2'), 'UTF-8');
    $mobile_model=mb_convert_encoding($req->input('mobile_model'), 'UTF-8');
    $mobile_color=mb_convert_encoding($req->input('mobile_color'), 'UTF-8');
    $sim=mb_convert_encoding($req->input('lost_phone_number'), 'UTF-8');
    


    DB::table('mobile')->insert(
        [
            'mobile_model' => $mobile_model,
            'mobile_color' => $mobile_color, 
            'sim' => $sim,
            'NID' => $nid,
            'imei1' => $imei1,
            'imei2' => $imei2,
            'to_place' => $to_place,
            'from_place' => $from_place,
            'lost_date' => $lost_date, 
            'father' => $father, 
            'mother' => $mother, 
            'address_present' => $present_address, 
            'address_permanent' => $permanent_address, 
            'body' => $c_info, 
            'date' => $date, 
            'mobile' => $mobile, 
            'email' => $email,
            'gd_number'=>$gd_number,
            'v_name'=>$v_name]
        );
        // DB::table('project_time')->insert(
        // ['task_id' => $task_id,'task_deadline'=> $Dline]
        // );
        // DB::table('project_leader')->insert(
        // ['task_id' => $task_id,'project_leader'=> $project_leader]
        // );
    return view('welcome')->withDetails($v_name);


}



public function insert_nid(Request $req){
    $v_name=mb_convert_encoding($req->input('v_name'), 'UTF-8');
    $nid=mb_convert_encoding($req->input('nid'), 'UTF-8');
    $father=mb_convert_encoding($req->input('father'), 'UTF-8');
    $mother=mb_convert_encoding($req->input('mother'), 'UTF-8');
    $present_address=mb_convert_encoding($req->input('present_address'), 'UTF-8');
    $permanent_address=mb_convert_encoding($req->input('permanent_address'), 'UTF-8');
    $lost_date=mb_convert_encoding($req->input('lost_date'), 'UTF-8');
    $mobile=mb_convert_encoding($req->input('mobile'), 'UTF-8');
    $email=mb_convert_encoding($req->input('email'), 'UTF-8');
    $date=mb_convert_encoding($req->input('date'), 'UTF-8');
    $gd_number=mb_convert_encoding($req->input('gd_number'), 'UTF-8');
    //$passport_number=mb_convert_encoding($req->input('passport_number'), 'UTF-8');
    $to_place=mb_convert_encoding($req->input('to_place'), 'UTF-8');
    $from_place=mb_convert_encoding($req->input('from_place'), 'UTF-8');
    $c_info=mb_convert_encoding($req->input('c_info'), 'UTF-8');
    // $imei1=mb_convert_encoding($req->input('imei1'), 'UTF-8');
    // $imei2=mb_convert_encoding($req->input('imei2'), 'UTF-8');
    // $mobile_model=mb_convert_encoding($req->input('mobile_model'), 'UTF-8');
    // $mobile_color=mb_convert_encoding($req->input('mobile_color'), 'UTF-8');
    // $sim=mb_convert_encoding($req->input('lost_phone_number'), 'UTF-8');
    


    DB::table('nid')->insert(
        [
        // 'mobile_model' => $mobile_model,
        // 'mobile_color' => $mobile_color, 
        // 'sim' => $sim,
            'NID' => $nid,
        // 'imei1' => $imei1,
        // 'imei2' => $imei2,
            'to_place' => $to_place,
            'from_place' => $from_place,
            'lost_date' => $lost_date, 
            'father' => $father, 
            'mother' => $mother, 
            'address_present' => $present_address, 
            'address_permanent' => $permanent_address, 
            'body' => $c_info, 
            'date' => $date, 
            'mobile' => $mobile, 
            'email' => $email,
            'gd_number'=>$gd_number,
            'v_name'=>$v_name]
        );
        // DB::table('project_time')->insert(
        // ['task_id' => $task_id,'task_deadline'=> $Dline]
        // );
        // DB::table('project_leader')->insert(
        // ['task_id' => $task_id,'project_leader'=> $project_leader]
        // );
    return view('welcome')->withDetails($v_name);


}



public function insert_bank(Request $req){
    $v_name=mb_convert_encoding($req->input('v_name'), 'UTF-8');
    $nid=mb_convert_encoding($req->input('nid'), 'UTF-8');
    $father=mb_convert_encoding($req->input('father'), 'UTF-8');
    $mother=mb_convert_encoding($req->input('mother'), 'UTF-8');
    $present_address=mb_convert_encoding($req->input('present_address'), 'UTF-8');
    $permanent_address=mb_convert_encoding($req->input('permanent_address'), 'UTF-8');
    $lost_date=mb_convert_encoding($req->input('lost_date'), 'UTF-8');
    $mobile=mb_convert_encoding($req->input('mobile'), 'UTF-8');
    $email=mb_convert_encoding($req->input('email'), 'UTF-8');
    $date=mb_convert_encoding($req->input('date'), 'UTF-8');
    $gd_number=mb_convert_encoding($req->input('gd_number'), 'UTF-8');
    //$passport_number=mb_convert_encoding($req->input('passport_number'), 'UTF-8');
    $to_place=mb_convert_encoding($req->input('to_place'), 'UTF-8');
    $from_place=mb_convert_encoding($req->input('from_place'), 'UTF-8');
    $c_info=mb_convert_encoding($req->input('c_info'), 'UTF-8');
    $time_of_day=mb_convert_encoding($req->input('time_of_day'), 'UTF-8');
    $bank_name=mb_convert_encoding($req->input('bank_name'), 'UTF-8');
    $account_number=mb_convert_encoding($req->input('account_number'), 'UTF-8');
    $to_cheque=mb_convert_encoding($req->input('to_cheque'), 'UTF-8');
    $from_cheque=mb_convert_encoding($req->input('from_cheque'), 'UTF-8');
    $pages=mb_convert_encoding($req->input('pages'), 'UTF-8');


    // $imei1=mb_convert_encoding($req->input('imei1'), 'UTF-8');
    // $imei2=mb_convert_encoding($req->input('imei2'), 'UTF-8');
    // $mobile_model=mb_convert_encoding($req->input('mobile_model'), 'UTF-8');
    // $mobile_color=mb_convert_encoding($req->input('mobile_color'), 'UTF-8');
    // $sim=mb_convert_encoding($req->input('lost_phone_number'), 'UTF-8');
    


    DB::table('bank')->insert(
        [
        // 'mobile_model' => $mobile_model,
        // 'mobile_color' => $mobile_color, 
        // 'sim' => $sim,
            'NID' => $nid,
            'account_number' => $account_number,
            'start_page' => $from_cheque,
            'end_page' => $to_cheque,
            'pages' => $pages,
            'bank_name' => $bank_name,
            'time_of_day' => $time_of_day,
        // 'imei1' => $imei1,
        // 'imei2' => $imei2,
            'to_place' => $to_place,
            'from_place' => $from_place,
            'lost_date' => $lost_date, 
            'father' => $father, 
            'mother' => $mother, 
            'address_present' => $present_address, 
            'address_permanent' => $permanent_address, 
            'body' => $c_info, 
            'date' => $date, 
            'mobile' => $mobile, 
            'email' => $email,
            'gd_number'=>$gd_number,
            'v_name'=>$v_name]
        );
        // DB::table('project_time')->insert(
        // ['task_id' => $task_id,'task_deadline'=> $Dline]
        // );
        // DB::table('project_leader')->insert(
        // ['task_id' => $task_id,'project_leader'=> $project_leader]
        // );
    return view('welcome')->withDetails($v_name);


}

}

