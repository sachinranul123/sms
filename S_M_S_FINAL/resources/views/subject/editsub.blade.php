@include('includes.header')
<br><br>
<div class="container">
    <legend></legend>
    <div class="card border-dark md-6" style="max-width: 80rem;">
        <div class="modal-header light-green darken-8 white-text ">
            <h3 class="title"><i class="far fa-edit"></i> EDIT SUBJECT!</h3>

        </div>
        <form class="card-body" method="post" action="{{action('SubjectController@update',$id)}}">
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
                    <label for="subject_id">SUBJECT ID</label>
                    <input type="text" name="subject_id" value="{{$subjects->subject_id}}" class="form-control" id="subject_id" placeholder="SUBJECT ID" autocomplete="off" autofocus>
                </div>
                <div class="form-group col-5">
                    <label for="subject_name">SUBJECT NAME</label>
                    <input type="text" name="subject_name" value="{{$subjects->subject_name}}" class="form-control" id="subject_name"  placeholder="SUBJECT NAME" autocomplete="off" >
                </div>
            </div>
            <br><br><br>
            <div class="modal-footer">
                <button type="submit" class="btn btn-outline-secondary"><i class="far fa-save"></i>&nbsp;&nbsp;Save Change</button>

                <button type="button" class="btn btn-outline-danger" href="/subject"><i class="fas fa-times"></i>&nbsp;&nbsp;Back</button>
            </div>
        </form>
    </div>
</div>
@include('includes.footer')
