@include('includes.header')
<br><br>

<div class="container">

    <div class="card border-dark md-6" style="max-width: 80rem;">
        <div class="modal-header light-blue darken-3 white-text ">
            <h3 class="title"><i class="fas fa-plus"></i> ADD NEW SUBJECT!</h3>

        </div>

        <form class="card-body" method="post" action="{{url('subject')}}" novalidate>
            {{csrf_field()}}
        <br>
{{--            @if(count($errors) > 0 )--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <div class="alert alert-danger text-center container font-weight-bold">--}}
{{--                        {{$error}}--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endif--}}


            <div class="row" >
                <div class="form-group col-5">
                    <label for="subjectid">SUBJECT ID</label>
                    <input type="text" class="form-control" name="subject_id" id="subject_id" placeholder="SUBJECT ID" autofocus required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="form-group col-5">
                    <label for="subjectname">SUBJECT NAME</label>
                    <input type="text" class="form-control" name="subject_name" id="subject_name"  placeholder="SUBJECT NAME" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class="modal-footer">
                <button type="submit" class="btn btn-outline-secondary waves-effect"><i class="far fa-save"></i>&nbsp;&nbsp;Save Subject</button>
                <a type="button" href="/subject" class="btn btn-outline-danger waves-effect"><i class="fas fa-times"></i>&nbsp;&nbsp;&nbsp;Back</a>
        </div>

      </form>
    </div>
    </div>

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
