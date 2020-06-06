@include('includes.header')

<style>
body {
  background-color:#fff;
  text-align: center;
  color:#fff;
  padding-top:1em;
}

{  text-decoration: none;}
</style>
<h1>
  <a href="" class="typewrite" data-period="2000" data-type='[ "TEACHERS PAGE.", "ADD NEW TEACHERS.","EDIT TEACHERS DETAILS.","VIEW TEACHERS DETAILS."]'>
    <span class="wrap"></span>
  </a>
</h1>

<div class="container-fluid">
        <div align="right">
            <a href="{{url('teacher/create')}}"class="btn btn-primary btn-rounded waves-effect" data-toggle="tooltip" data-placement="top" title="Click Here To Fill Teachers Admission Form"  ><i class="fa fa-plus"> &nbsp;</i>Add Teacher</a>
        </div>
</div>
@if(session('msg'))
    <div class="alert alert-success text-center container font-weight-bold">
        {{session('msg')}}
    </div>
@endif
<div class="container-fluid">
        <br>
        <table class="table table-borderd">
            <thead>
            <tr>
                <th>Teacher Id</th>
                <th>Name</th>
                <th>Contact 01</th>
                <th>Contact 02</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teacher as $row)
                <tr>

                    <td>{{$row['teacher_id']}}</td>
                    <td>{{$row['first_name']}}&nbsp;&nbsp;{{$row['middle_name']}}&nbsp;&nbsp;{{$row['last_name']}}</td>
                    <td>{{$row['contact_1']}}</td>
                    <td>{{$row['contact_2']}}</td>
                    <td>
                        <div class="form-group">
                            <div class="row">
                                &nbsp;&nbsp;&nbsp;
                                <a type="button" href="{{action('TeacherController@show',$row['id'])}}" class="btn btn-outline-warning"  data-toggle="tooltip" data-placement="bottom" title="Click Here To View Teachers Info" ><i class="fas fa-address-card"></i>&nbsp
                                    &nbsp;View</a>&nbsp;
                                <a type="button" class="btn btn-outline-success" href="{{action('TeacherController@edit',$row['id'])}}" data-toggle="tooltip" data-placement="bottom" title="Click Here To Edit Teachers Info" ><i class="fas fa-edit"></i>&nbsp;&nbsp;&nbsp;Edit</a>&nbsp;&nbsp;&nbsp;
                                <form action="{{action('TeacherController@destroy',$row['id'])}}" method="post" class="delete_form">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
</div>

{{--Delete Button JS--}}
<script>
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
</script>
{{--Delete Button JS--}}


@include('includes.footer')
