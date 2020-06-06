@include('includes.header')
<div class="container">
    <div class="card border-dark md-6" style="max-width: 80rem;">
        <div class="modal-header light-green darken-8 white-text ">
            <h3 class="title">&NonBreakingSpace;<i class="fas fa-edit"></i>&NonBreakingSpace; EDIT TEACHER</h3>

        </div>
    <form class="card-body" method="post" action="{{action('TeacherController@update',$id)}}">
        {{csrf_field()}}
        @if(count($errors) > 0 )
            @foreach($errors->all() as $error)
                <div class="alert alert-danger text-center container font-weight-bold">
                    {{$error}}
                </div>
            @endforeach
        @endif
        <input type="hidden" name="_method" value="PATCH"/>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Personal Information</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " data-toggle="tab" href="#profile">Subject Information</a>
        </li>
      </ul>
        <br>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active show" id="home">
        <div class="row" >
            <div class="form-group col-4">
            <label for="teacherid">TEACHER ID</label>
            <input type="text" value="{{$teacher->teacher_id}}"class="form-control" id="teacher_id" name="teacher_id" placeholder="TEACHER ID" autocomplete="off" autofocus>
            </div>
        </div>
        <div class="row" >
            <div class="form-group col-4">
                <label for="fname">FIRST NAME</label>
                <input type="text" value="{{$teacher->first_name}}"  class="form-control" id="f_name" name="f_name" placeholder="FIRST NAME" autocomplete="off" >

            </div>
            <div class="form-group col-4">
                <label for="mname">MIDDLE NAME</label>
                <input type="text" value="{{$teacher->middle_name}}" class="form-control" id="m_name" name="m_name" placeholder="MIDDLE NAME" autocomplete="off" >
            </div>
            <div class="form-group col-4">
                <label for="lname">LAST NAME</label>
                <input type="text"value="{{$teacher->last_name}}"  class="form-control" id="l_name" name="l_name" placeholder="LAST NAME" autocomplete="off" >
            </div>
        </div>
        <div class="row" >
            <div class="form-group col-4">
                <label for="contact1">CONTACT NUMBER 01</label>
                <input type="text" value="{{$teacher->contact_1}}" class="form-control" id="contact_1" name="contact_1" placeholder="CONTACT NUMBER 01" autocomplete="off" autofocus>
            </div>
            <div class="form-group col-4">
                <label for="contact2">CONTACT NUMBER 02</label>
                <input type="text"value="{{$teacher->contact_2}}"  class="form-control" id="contact_2" name="contact_2"  placeholder="CONTACT NUMBER 02" autocomplete="off" >
            </div>
            <div class="form-group col-4">
                <label for="email">E - MAIL</label>
                <input type="text"value="{{$teacher->email}}"  class="form-control" id="email" name="email" placeholder="E - MAIL" autocomplete="off" >
            </div>
        </div>
        <div class="row" >
            <div class="form-group col-4">
                <label for="email">NIC NUMBER</label>
                <input type="text"value="{{$teacher->nic_number}}"  class="form-control" id="nic_number" name="nic_number" placeholder="NIC NUMBER" autocomplete="off" autofocus>
                </div>
            <div class="form-group col-4">
                <label for="dob">DATE OF BIRTH</label>
                <input type="text"value="{{$teacher->dob}}" class="form-control" id="dob" name="dob"  placeholder="DATE OF BIRTH" autocomplete="off">
            </div>
            <div class="form-group col-4">
                <label for="address">PERSPNAL ADDRESS</label>
                <input type="text"value="{{$teacher->address}}"  class="form-control" id="address" name="address"  placeholder="PERSPNAL ADDRESS" autocomplete="off" >
            </div>
        </div>
            <div class="modal-footer">
                <label  class="btn btn-outline-secondary waves-effect" ><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;Plese Complete Class Info&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></label>
            </div>
    </div>
        <div class="tab-pane fade " id="profile">
        <div class="row" >
            <div class="form-group col-4">
                <label for="job_type">SELECT JOB TYPE</label>
                <select class="custom-select"value="{{$teacher->job_type}}"  name="job_type" id="job_type">

                <option value="{{$teacher->job_type}}">{{$teacher->job_type}}</option>

                </select>
            </div>


            <div class="form-group col-4">
                <label for="photo">TEACHER'S PHOTO </label>
                <div class="input-group">
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="photo">
                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                </div>
                <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
                </div>
                </div>
        </div>
        </div>
            <br><br>
            <div class="modal-footer">
                <button type="submit" class="btn btn-outline-secondary waves-effect"><i class="far fa-save"></i>&nbsp;&nbsp;Save Change<button>
            <a type="button" href="/teacher" class="btn btn-outline-danger waves-effect"><i class="fas fa-times"></i>&nbsp;&nbsp;Back</a>
            </div>

    </div>
    </div>
</form>
</div>
    <br><br>

@include('includes.footer')
