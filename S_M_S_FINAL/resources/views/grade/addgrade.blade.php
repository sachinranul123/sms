@include('includes.header')
<br><br>
<div class="container">

    <div class="card border-dark md-6" style="max-width: 80rem;">
        <div class="modal-header light-blue darken-3 white-text ">
            <h3 class="title"><i class="fas fa-plus"></i> ADD NEW GRADE!</h3>
        </div>

        <form class="card-body" method="post" action="{{url('grade')}}" novalidate>
            {{csrf_field()}}
            <div class="row" >
                <div class="form-group col-5">
                    <label for="grade_id">GRADE ID</label>
                    <input type="text" class="form-control" name="grade_id" id="grade_id" placeholder="GRADE ID" autofocus required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="form-group col-5">
                    <label for="grade_name">GRADE NAME</label>
                    <input type="text" class="form-control" name="grade_name" id="grade_name"  placeholder="GRADE NAME" required>
                    <div class="valid-feedback">
                    Looks good!
                </div>
                </div>
            </div>
            <br><br><br>
            <div class="modal-footer">
                <button type="submit" class="btn btn-outline-secondary waves-effect"><i class="far fa-save"></i>&nbsp;&nbsp;Save Grade</button>
                <a type="button" href="/grade" class="btn btn-outline-danger waves-effect"><i class="fas fa-times"></i>&nbsp;&nbsp;&nbsp;Back</a>
        </div>
        </form>
    </div>
    </div>

{{--type script js--}}
<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('card-body');
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
{{--type script js--}}

@include('includes.footer')
