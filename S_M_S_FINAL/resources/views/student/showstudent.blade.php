@include('includes.header')

<div class="card">
    <!--student view modal-->
        <div class="modal-dialog cascading-modal modal-avatar modal-lg" role="document">
            <!--Content-->
            <div class="modal-content modal-lg">

                <!--Header-->
                <div class="modal-header">
                    <img src="{{asset('uploads/student/'.$student->image)}}" alt="avatar" class="rounded-circle img-responsive animated rotateIn">
                </div>
                <!--Body-->
                <div class="modal-body mb-1">
                    {{--                <i class="fas fa-address-card fa-4x mb-3 animated rotateIn"></i><br>--}}

                    <h2 class="mt-1 mb-2">{{$student->first_name}}&nbsp;{{$student->middle_name}}&nbsp;{{$student->last_name}}</h2>
                    <div class="md-6">
                        <br>
                        <li><label> Student Id : {{$student->student_id}}</label><br></li>
                        <li><label>Contact Number :{{$student->contact_number}} </label><br></li>
                        <li><label> Nic Number :{{$student->nic_number}} </label><br></li>
                        <li><label> Email :{{$student->email}} </label><br></li>
                        <li><label> Date of Birth :{{$student->dob}} </label><br></li>
                        <li><label> School Attend :{{$student->school_attends}} </label><br></li>
                        <li><label> Reregisterd Date :{{$student->reg_date}} </label><br></li>
                        <li><label> status : {{$student->status}}</label><br></li>
                        <li><label>Grade :  {{$student->stu_grade}}</label></li>
                        <br>
                        <h2 >Gardian's Info</h2>
                        <li><label>Name :&nbsp;&nbsp;{{$student->gardians_fname}}&nbsp;&nbsp;{{$student->gardians_lname}}</label></li>
                        <li><label> Relation To Student :{{$student->relation_to}}  </label><br></li>
                        <li><label> Contact Number:{{$student->gardian_contact}} </label><br></li>
                        <li><label> Address :{{$student->address}}</label><br></li>
                        </div>

                </div>
                <div class="modal-footer">

            <a href="/student" type="button" class="btn btn-outline-dark waves-effect"><i class="fas fa-times"></i>&nbsp;&nbsp;Back</a>
            </div>

            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--student view modal-->
</div>

@include('includes.footer')
