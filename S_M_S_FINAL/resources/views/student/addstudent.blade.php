@include('includes.header')

<div class="container">
    <div class="card border-secondary md-6" style="max-width: 80rem;">
        <div class="modal-header light-blue darken-3 white-text ">
            <h3 class="title">&NonBreakingSpace;<i class="fas fa-plus"></i>&NonBreakingSpace; ADD NEW STUDENT</h3>

        </div>
    <form class="card-body" method="post" action="{{url('student')}}" enctype="multipart/form-data" novalidate>
        {{csrf_field()}}

        @if(count($errors) > 0 )
            @foreach($errors->all() as $error)
                <div class="alert alert-danger text-center container font-weight-bold">
                    {{$error}}
                </div>
            @endforeach
        @endif
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                   aria-controls="pills-home" aria-selected="true">PERSONAL INFO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                   aria-controls="pills-profile" aria-selected="false">CLASS INFO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                   aria-controls="pills-contact" aria-selected="false">GARDIAN'S INFO</a>
            </li>
        </ul>
        <div class="tab-content pt-2 pl-1" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="row" >
            <div class="form-group col-4">
            <label for="student-id">STUDENT ID</label>
            <input type="text" class="form-control" id="student-id" name="student-id" placeholder="STUDENT ID" autocomplete="off" autofocus required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

        </div>
        <div class="row" >
            <div class="form-group col-4">
                <label for="fname">FIRST NAME</label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="FIRST NAME" autocomplete="off" required >
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group col-4">
                <label for="mname">MIDDLE NAME</label>
                <input type="text" class="form-control" id="mname" name="mname" placeholder="MIDDLE NAME" autocomplete="off" required >
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group col-4">
                <label for="lname">LAST NAME</label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="LAST NAME" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="form-group col-4">
                <label for="contact">CONTACT NUMBER</label>
                <input type="text" class="form-control" id="contact" name="contact" placeholder="CONTACT NUMBER " autocomplete="off" autofocus required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group col-4">
                <label for="nic">NIC NUMBER</label>
                <input type="text" class="form-control" id="nic" name="nic" placeholder="NIC NUMBER" autocomplete="off" autofocus required>
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
        </div>
        <div class="row" >
            <div class="form-group col-4">
                <label for="email">E - MAIL</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E - MAIL" autocomplete="off" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="form-group col-4">
                <label for="school-att">SCHOOL ATTEND</label>
                <input type="text" class="form-control" id="school-att" name="school-att"  placeholder="SCHOOL ATTEND" autocomplete="off" required >
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group col-4">
                <label for="photo">STUDENT'S PHOTO </label>
                <div class="input-group">
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="photo" name="photo">
                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                </div>
                <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
                </div>
                </div>
            </div>
        </div>
                <div class="modal-footer">
                    <label class="btn btn-outline-secondary waves-effect"data-toggle="tooltip" data-placement="top" title="Click 'CLASS INFO'"><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;Plese Complete Class Info&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></label>
                </div>
        </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row" >
            <div class="form-group col-4">
                <label for="reg-date">DATE OF REGISTER</label>
                <input type="date" class="form-control" id="reg-date" name="reg-date"  placeholder="DATE OF BIRTH" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
                <div class="form-group col-4">
                    <label for="status">STUDENT STATUS</label>
                    <textarea type="date" class="form-control" id="status" name="status"  placeholder="Status About Student" autocomplete="off" required></textarea>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="form-group col-4">
                        <label for="section">SELECT GRADE</label>
                        <select class="custom-select"  name="student_grade" required>
                            @foreach($grades as $row)
                            <option value="{{$row->grade_id}}">{{$row->grade_name}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <br><br>
                <div class="modal-footer">
                    <label  class="btn btn-outline-secondary waves-effect"data-toggle="tooltip" data-placement="top" title="Click  'GARDIAN'S INFO'" ><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;Plese Complate Gardian's Info&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></label>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

        <div class="row" >
            <div class="form-group col-4">
                <label for="gfname">FIRST NAME</label>
                <input type="text" class="form-control" id="gfname" name="gfname" placeholder="FIRST NAME" autocomplete="off" autofocus required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group col-4">
                <label for="glname">LAST NAME</label>
                <input type="text" class="form-control" id="glname" name="glname" placeholder="LAST NAME" autocomplete="off" autofocus required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group col-4">
                <label for="relation">RELATIONSHIP TO STUDENT</label>
                <select class="custom-select" id="relation" name="relation" required>
                <option selected="">Open this select menu</option>
                <option value="Father">Father</option>
                <option value="Mother">Mother</option>
                <option value="Gardian">Gardian</option>
                <option value="Other">Other</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-4">
                <label for="gcontact">CONTACT NUMBER</label>
                <input type="text" class="form-control" id="gcontact" name="gcontact" placeholder="CONTACT NUMBER" autocomplete="off" autofocus required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="form-group col-4">
                <label for="address">ADDRESS</label>
                <textarea type="text" class="form-control" id="address" name="address" placeholder="ADDRESS" autocomplete="off" autofocus required></textarea>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>

            <div class="modal-footer">
            <button type="submit"class="btn btn-outline-secondary waves-effect"data-toggle="tooltip" data-placement="top" title="Click Here to Save Student"><i class="far fa-save"></i>&nbsp;&nbsp;Save Student</button>
            <a href="/student" type="button" class="btn btn-outline-danger waves-effect"><i class="fas fa-times"></i>&nbsp;&nbsp;Back</a>
            </div>
       </div>

    </div>

</form>
</div>
</div>
</div>
</div>
<br><br><br>



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
{{--mouse hover js--}}
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
{{--mouse hover js--}}















@include('includes.footer')















