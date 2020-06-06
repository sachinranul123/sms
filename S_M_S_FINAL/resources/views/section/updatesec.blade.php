@include('includes.header')
<br><br>
<div class="container">
    <legend></legend>
    <div class="card border-dark md-6" style="max-width: 80rem;">
        <div class="modal-header light-green darken-8 white-text ">
            <h3 class="title"><i class="far fa-edit"></i> EDIT SECTION!</h3>

        </div>


    <form class="card-body" method="post" action="{{action('SectionController@update',$id)}}">
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
            <label for="section_id">SECTION ID</label>
            <input type="text" value="{{$section->section_id}}" class="form-control" id="section_id" name="section_id" placeholder="SECTION ID" autocomplete="off" autofocus>
            </div>
            <div class="form-group col-5">
            <label for="section_name">SECTION NAME</label>
            <input type="text" value="{{$section->section_name}}" class="form-control" id="section_name" name="section_name"  placeholder="SECTION NAME" autocomplete="off"v >
            </div>
        </div>
        <br><br><br>
        <div class="modal-footer">
            <button type="submit" class="btn btn-outline-success waves-effect" ><i class="far fa-save"></i>&nbsp;&nbsp;Save Change</button>
        <a type="button" class="btn btn-outline-danger waves-effect" href="/section"><i class="fas fa-times"></i>&nbsp;&nbsp;Back</a>
      </div>
    </form>
</div>
</div>
@include('includes.footer')
