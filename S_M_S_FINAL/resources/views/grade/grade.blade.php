@include('includes.header')

<div class="container">
    <div class="position-fixed" id="app"></div>
    <br><br>
    <div class="modal-header">
     </div>
</div>
<br>
<div class="container-fluid">
        <div align="right">
            <a href="{{url('grade/create')}}" class="btn btn-primary btn-rounded waves-effect" ><i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp;Add Grade</a>
        </div>
</div>
<br>
@if(session('msg'))
    <div class="alert alert-success text-center container font-weight-bold">
        {{session('msg')}}
    </div>
@endif
<div class="container-fluid">
        <br>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th width="10%">#</th>
                <th width="25%">Grade Id</th>
                <th width="25%">Grade name</th>
                <th width="20%">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($grade as $row)
            <tr>
            <td>{{$row['id']}}</td>
            <td>{{$row['grade_id']}}</td>
            <td>{{$row['grade_name']}}</td>
            <td>
                <a type="submit" class="btn btn-success" href="{{action('GradeController@edit',$row['id'])}}">Edit</a>
            </td>
            </tr>
            @endforeach
            </tbody>
        </table>
</div>


<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Are you sure?</p>
      </div>
        <!--Body-->
      <div class="modal-body">
        <i class="fas fa-times fa-4x animated rotateIn"></i>
      </div>
        <!--Footer-->
      <div class="modal-footer flex-center">
        <a href="" class="btn  btn-outline-danger">Yes</a>
        <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalConfirmDelete-->



{{--DELETE BUTTON JS--}}
<!-- <script>
    $(document).ready(function () {
        $('.delete_form').on('submit',function () {
            if(confirm("Are You Sure Want To Delete It?"))
            {
                return true;
            }
            else
            {
                return false;
            }

        });
    });
</script> -->
{{--DELETE BUTTON JS--}}

{{--type write JS--}}
<script>
    var app = document.getElementById('app');

    var typewriter = new Typewriter(app, {
        loop: true
    });

    typewriter.typeString('<h1 style="font-family: Righteous, cursive;"><strong>WELCOME TO Grades Info !!</strong></h1>')
        .pauseFor(2500)
        .deleteAll()
        .start();
</script>
{{--type write JS--}}










@include('includes.footer')
