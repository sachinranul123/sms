@include('includes.header')
<br><br>
<div class="container">
    <legend></legend>
    <div class="card border-dark md-6" style="max-width: 80rem;">
        <div class="modal-header light-green darken-8 white-text ">
            <h3 class="title"><i class="far fa-edit"></i> EDIT GRADE INFO!</h3>

        </div>
        <form class="card-body" method="post" action="{{action('GradeController@update',$id)}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH"/>
            <br>
            @if(count($errors) > 0 )
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger text-center container font-weight-bold">
                        {{$error}}
                    </div>
                @endforeach
            @endif

            <div class="row" >

                <div class="form-group col-5">
                    <label for="grade_id">GRADE ID</label>
                    <input type="text" name="grade_id" value="{{$grade->grade_id}}" class="form-control" id="grade_id" placeholder="SUBJECT ID" autocomplete="off" autofocus>
                </div>
                <div class="form-group col-5">
                    <label for="grade_name">GRADE NAME</label>
                    <input type="text" name="grade_name" value="{{$grade->grade_name}}" class="form-control" id="grade_name"  placeholder="SUBJECT NAME" autocomplete="off" >
                </div>
            </div>
            <br><br><br>
            <div class="modal-footer">
                <button type="submit" class="btn btn-outline-secondary"><i class="far fa-save"></i>&nbsp;&nbsp;Save Change</button>

                <button type="submit" class="btn btn-outline-danger" href="/grade"><i class="fas fa-times"></i>&nbsp;&nbsp;Back</button>
            </div>
        </form>
    </div>
</div>



<!-- form validation -->
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
   <!-- form validation -->

@include('includes.footer')
