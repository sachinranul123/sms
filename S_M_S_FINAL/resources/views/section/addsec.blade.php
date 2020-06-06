@include('includes.header')

<br><br>
<div class="container">

    <div class="card border-dark md-6" style="max-width: 80rem;">
        <div class="modal-header light-blue darken-3 white-text ">
            <h3 class="title"><i class="fas fa-plus"></i> ADD NEW SECTION!</h3>

        </div>
    <form class="card-body" method="post" action="{{url('section')}}" novalidate>
        {{csrf_field()}}
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
            <label for="sectionid">SECTION ID</label>
            <input type="text" class="form-control" id="section_id" name="section_id" placeholder="SECTION ID" autocomplete="off"
                   required autofocus>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group col-5">
            <label for="sectionname">SECTION NAME</label>
            <input type="text" class="form-control" id="section_name" name="section_name" placeholder="SECTION NAME" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="modal-footer">
        <button type="submit" class="btn btn-outline-secondary waves-effect"><i class="far fa-save"></i>&nbsp;&nbsp;Save Section</button>
        <a type="button" class="btn btn-outline-danger waves-effect" href="/section"><i class="fas fa-times"></i>&nbsp;&nbsp;Back</a>
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
