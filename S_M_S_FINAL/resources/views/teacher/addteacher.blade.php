@include('includes.header')

<div class="container">
    <div class="card border-secondary md-6" style="max-width: 80rem;">
        <div class="modal-header light-blue darken-3 white-text ">
            <h3 class="title">&NonBreakingSpace;<i class="fas fa-plus"></i>&NonBreakingSpace; ADD NEW TEACHER</h3>

        </div>
    <form class="card-body" method="post" action="{{url('teacher')}}" novalidate>
        {{csrf_field()}}

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
            <input type="text" class="form-control" id="teacher_id" name="teacher_id" placeholder="TEACHER ID" autocomplete="off" autofocus required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="form-group col-4">
                <label for="fname">FIRST NAME</label>
                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="FIRST NAME" autocomplete="off"required >
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group col-4">
                <label for="mname">MIDDLE NAME</label>
                <input type="text" class="form-control" id="m_name" name="m_name" placeholder="MIDDLE NAME" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group col-4">
                <label for="lname">LAST NAME</label>
                <input type="text" class="form-control" id="l_name" name="l_name" placeholder="LAST NAME" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="form-group col-4">
                <label for="contact1">CONTACT NUMBER 01</label>
                <input type="number" class="form-control" id="contact_1" name="contact_1" placeholder="CONTACT NUMBER 01" autocomplete="off" autofocus required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group col-4">
                <label for="contact2">CONTACT NUMBER 02</label>
                <input type="number" class="form-control" id="contact_2" name="contact_2"  placeholder="CONTACT NUMBER 02" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group col-4">
                <label for="email">E - MAIL</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E - MAIL" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="form-group col-4">
                <label for="email">NIC NUMBER</label>
                <input type="text" class="form-control" id="nic_number" name="nic_number" placeholder="NIC NUMBER" autocomplete="off" autofocus required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group col-4">
                <label for="dob">DATE OF BIRTH</label>
                <input type="date" class="form-control" id="dob" name="dob"  placeholder="DATE OF BIRTH" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group col-4">
                <label for="address">PERSPNAL ADDRESS</label>
                <input type="text" class="form-control" id="address" name="address"  placeholder="PERSPNAL ADDRESS" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

        </div>
            <div class="modal-footer">
                <label  class="btn btn-outline-secondary waves-effect" ><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;Plese Complete Class Info&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></label>
            </div>
    </div>

        <div class="tab-pane fade " id="profile">
        <div class="row" >
            <div class="form-group col-4">
                <label for="jobtype">SELECT JOB TYPE</label>
                <select class="custom-select" name="job_type" id="job_type" required>
                <option selected="">Open this select menu</option>
                <option value="PART TIME">PART TIME</option>
                <option value="FULL TIME">FULL TIME</option>
                </select>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>


            <div class="form-group col-4">
                <label for="photo">TEACHER'S PHOTO </label>
                <div class="input-group" name="teacher_photo" id="teacher_photo">
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
        <div class="row" >
                <div class="form-group col-4">
                <label for="dob">DATE OF REGISTER</label>
                <input type="date" class="form-control" id="reg_date" name="reg_date"  placeholder="DATE OF REGISTER" required autocomplete="off">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
        </div>
            <br><br>
            <div class="modal-footer">
            <button type="submit"class="btn btn-outline-secondary waves-effect"><i class="far fa-save"></i>&nbsp;&nbsp;Save Teacher</button>
            <a type="button" href="/teacher" class="btn btn-outline-danger waves-effect"><i class="fas fa-times"></i>&nbsp;&nbsp;Back</a>
            </div>
        </div>
    </div>
    </div>
</form>
</div>
    <br><br> <br>

    {{--validater class--}}
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('card-body');
// Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
{{--validater class--}}

@include('includes.footer')
