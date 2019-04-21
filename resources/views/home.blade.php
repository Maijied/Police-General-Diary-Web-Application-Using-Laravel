@extends('profile.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Routine App,CSE SUST</div>

                <div class="panel-body">
                    <!-- <a href="{{url('/')}}/viewclass">View all classes this Semester </a><br><br><br>
                    <a href="{{url('/')}}/tomorrowclass">View classes for today </a><br><br> -->

                    <img src="{{url('../')}}/public/img/sust.png" width="200px" height="200px"/><br>
                                        <?php
                    $users = DB::table('main_routine')
                 
                ->get();


                    foreach ($users as $key ) {
                        $day_id=$key->day_id;
                         $users_day = DB::table('day')
                         ->where('day.day_id','=',$day_id)

                 
                ->get();
                foreach ($users_day as $key_day) {
                   $day=$key_day->day_name;
                }
                $room_id=$key->room_id;
                $users_room=DB::table('room')
                ->where('room.room_id','=',$room_id)
                ->get();
                foreach ($users_room as $key_room) {
                    $room=$key_room->room_num;
                }
                $start=$key->start_time;
                $end=$key->end_time;
                $teacher_id1=$key->teaches_id;
                $users_teacher1=DB::table('teaches')
                ->where('teaches.teaches_id','=',$teacher_id1)
                ->get();
                foreach ($users_teacher1 as $key_teacher1) {
                    $teacher1=$key_teacher1->instructor_id;
                    $course1=$key_teacher1->course_id;
                }
                $users_teacher=DB::table('teacher')
                ->where('teacher.instructor_id','=',$teacher1)
                ->get();
                foreach ($users_teacher as $key_teacher) {
                        $teacher=$key_teacher->employee_code;
                }
                $users_course=DB::table('course')
                ->where('course.course_id','=',$course1)
                ->get();
                foreach ($users_course as $key_course) {
                    $course=$key_course->course_code;
                    $session=$key_course->session;
                }
                $users_check=DB::table('course_time')
                ->get();
                $a=0;
                foreach ($users_check as $key_check) {
                    if ($key_check->course_code==$course && $key_check->day==$day && $key_check->start==$start && $key_check->end==$end && $key_check->teacher_id==$teacher && $key_check->session==$session && $key_check->room==$room) {
                        $a=1;
                    }
                }
                if ($a==0) {
                    # code...
                
                $users_update=DB::table('course_time')
                
                ->insert(['course_code'=>$course ,'day'=>$day, 'start'=>$start,'end'=>$end,'teacher_id'=>$teacher,'session'=>$session,'room'=>$room]);

}
                    }

                    ?>


 
                    <form action="{{url('/')}}/viewclass" method="get">
                    View all classes this Semester:<input type="submit" name="submit" value="VIEW NOW">
                        

                    </form>

                    <form action="{{url('/')}}/tomorrowclass" method="get">
                    View classes for today: <input type="submit" name="submit" value="VIEW NOW">
                    
                        

                    </form>
                    <!-- <?php
                    for($i=0;$i<10;$i++){
                        ?>
                    

                    <div class="boxed">
                        Post Displayed
                    </div>
                    <?php
                }

                    ?> -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
