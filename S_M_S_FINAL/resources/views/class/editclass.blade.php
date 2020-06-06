@include('includes.header')

<br><br>
<div class="container">

    <div class="card border-dark md-6" style="max-width: 80rem;">
        <div class="modal-header light-green darken-8 white-text ">
            <h3 class="title"><i class="fas fa-edit"></i> &nbsp;EDIT CLASS!</h3>

        </div>
        <form class="card-body" method="post" action="{{action('ClassController@update',$id)}}" novalidate>
            <input type="hidden" name="_method" value="PATCH"/>
            {{csrf_field()}}
            <br>

            <div class="row" >
                <div class="form-group col-2">
                    <label for="class_id">CLASS ID</label>
                    <input type="text" value="{{$class->class_id}}" class="form-control" id="class_id" name="class_id" placeholder="CLASS ID" autocomplete="off" required autofocus>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="form-group col-4">
                    <label for="class_name">CLASS NAME</label>
                    <input type="text" value="{{$class->class_name}}" class="form-control" id="class_name" name="class_name" placeholder="CLASS NAME" required autocomplete="off" >
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="form-group col-3">
                    <label for="class_fee">CLASS FEE</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text">LKR :</span>
                        <input type="text" value="{{$class->class_fee}}" class="form-control" id="class_fee" name="class_fee" placeholder="CLASS FEE" required autocomplete="off" >
                        <span class="input-group-text">.00</span>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-group col-3">
                    <label for="hall_charge">Hall Charges</label>
                    <div class="input-group-prepend">
                        <input type="text" value="{{$class->hall_charge}}" class="form-control" id="hall_charge" name="hall_charge" required  autocomplete="off" >
                        <span class="input-group-text">%</span>
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>

            <div class="row" >
                <div class="form-group col-3">
                    <label for="class_date">DATE</label>
                    <select class="custom-select" id="class_date" value="{{$class->class_date}}" name="class_date" required>
                        <option value="Sun Day"></option>
                        <option value="Mon Day"></option>
                        <option value="Tues Day"></option>
                        <option value="Wedness DAy"></option>
                        <option value="Thurs Day"></option>
                        <option value="Fri Day"></option>
                        <option value="Satur Day"></option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="start_time">START TIME</label>
                    <input type="time" value="{{$class->start_time}}" class="form-control" id="start_time" name="start_time"  autocomplete="off" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="form-group col-3">
                    <label for="end_tme">END TIME</label>
                    <input type="time" value="{{$class->end_time}}" class="form-control" id="end_time" name="end_time"  autocomplete="off" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

            </div>
    </div>
    <br><br><br>
    <div class="modal-footer">
        <button type="submit" class="btn btn-outline-secondary waves-effect"><i class="far fa-save"></i>&nbsp;&nbsp;Save Class</button>
        <a type="button" class="btn btn-outline-danger waves-effect" href="/class"><i class="fas fa-times"></i>&nbsp;&nbsp;Back</a>
    </div>
    </form>
</div>
</div>
<br><br><br>

{{--validater js--}}
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
{{--validater js--}}
@include('includes.footer')

