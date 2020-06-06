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
  <a href="" class="typewrite" data-period="2000" data-type='[ "STUDENTS PAGE.", "ADD NEW STUDENT.","EDIT STUDENT DETAILS.","VIEW STUDENTS DETAILS.","ASSIGN STUDENT TO CLASSES" ]'>
    <span class="wrap"></span>
  </a>
</h1>

@if(session('msg'))
    <div class="alert alert-success text-center container font-weight-bold">
        {{session('msg')}}
    </div>
@endif
<div class="container-fluid">
        <div align="right">
            <a href="/student/create" class="btn btn-primary btn-rounded waves-effect" data-toggle="tooltip" data-placement="left" title="Click Here To Fill Student Admission Form" >

                <i class="fas fa-plus"></i>&nbsp;&nbsp;Add Student</a>

        </div>
</div>
<div class="container-fluid">
        <br>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Student Id</th>
                <th>Name</th>
                <th>Grade</th>
                <th>Contact</th>
                <th width="30%">Action</th>
            </tr></th>

            </thead>
            <tbody>
            @foreach($student as $row)
                <tr>
{{--                   {{-- <td><img src="{{asset('uploads/student/' . $row['image'])}}" width="100px" height="100px" alt="image"></td>--}}
                    <td>{{$row['student_id']}}</td>
                    <td>{{$row['first_name']}}&nbsp;{{$row['middle_name']}}&nbsp;{{$row['last_name']}}</td>
                    <td>{{$row['stu_grade']}}</td>

                    <td>{{$row['contact_number']}}</td>
                    <td>
                        <div class="form-group">
                        <div class="row">
                            <a  href="{{url('frameworks/'.$row['id'])}}" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="Student Assign to Class" ><i class="fas fa-address-card"></i>&nbsp
                                &nbsp;assign</a>
                        <a  href="{{action('StudentController@show',$row['id'])}}" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="bottom" title="View Selected Student Details" ><i class="fas fa-address-card"></i>&nbsp
                            &nbsp;View</a>
                        <a  class="btn btn-outline-success" href="{{action('StudentController@edit',$row['id'])}}"  data-toggle="tooltip" data-placement="bottom" title="Edit Student Details"><i class="fas fa-edit"></i>&nbsp;&nbsp; Edit</a>
                        <form action="{{action('StudentController@destroy',$row['id'])}}" method="post" class="delete_form">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE" />
                            <a type="submit" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="bottom" title="Delete Student"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Delete</a>
                        </form>
                            </div>
                        </div>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
</div>


{{--delete button JS--}}
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
{{--delete button JS--}}











@include('includes.footer')
