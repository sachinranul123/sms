@include('includes.header')

<div class="card">
    <!--student view modal-->
        <div class="modal-dialog cascading-modal modal-avatar modal-lg" role="document">
            <!--Content-->
            <div class="modal-content modal-lg">

                <!--Header-->
                <div class="modal-header">
                    <img alt="avatar" class="rounded-circle img-responsive animated rotateIn">
                </div>
                <!--Body-->
                <div class="modal-body mb-1">
{{--                    <i class="fas fa-address-card fa-4x mb-3 animated rotateIn"></i><br>--}}

                    <h2 class="mt-1 mb-2">{{$teacher->first_name}}&nbsp;{{$teacher->middle_name}}&nbsp;{{$teacher->last_name}}</h2>
                    <div class="md-6">
                        <br>
                        <li><label> Teacher Id :&nbsp;&nbsp;{{$teacher->teacher_id}}</label><br></li>
                        <li><label>Contact Number 01 : &nbsp;&nbsp;{{$teacher->contact_1}}</label><br></li>
                        <li><label>Contact Number 02 : &nbsp;&nbsp;{{$teacher->contact_2}}</label><br></li>
                        <li><label> Nic Number : &nbsp;&nbsp;{{$teacher->nic_number}}</label><br></li>
                        <li><label> Email : &nbsp;&nbsp;{{$teacher->email}}</label><br></li>
                        <li><label> Date of Birth : &nbsp;&nbsp;{{$teacher->dob}}</label><br></li>
                        <li><label> Personal Address : &nbsp;&nbsp;{{$teacher->address}}</label><br></li>
                        <li><label> Job Type : &nbsp;&nbsp;{{$teacher->job_type}}</label><br></li>
                        <li><label> Reg Date : &nbsp;&nbsp;{{$teacher->reg_date}}</label><br></li>

                        <br>

                        </div>

                </div>
                <div class="modal-footer">

            <a href="/teacher" type="button" class="btn btn-outline-dark waves-effect"><i class="fas fa-times"></i>&nbsp;&nbsp;Back</a>
            </div>

            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--student view modal-->
</div>

@include('includes.footer')
