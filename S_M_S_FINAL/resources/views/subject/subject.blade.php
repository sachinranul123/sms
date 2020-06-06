@include('includes.header')

<div class="panel-body ">
    <div class="modal-header">
        <div class=" position-fixed"  id="app"></div>
        <br>
        <br>
    </div>
</div>
<div class="container-fluid">
        <div align="right">
            <a href="subject/create" class="btn btn-primary btn-rounded waves-effect" ><i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp;Add Subject</a>
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
        <table class="table table-borderd ">
            <thead>
            <tr>
                <th >#</th>
                <th >Subject Id</th>
                <th >Subject name</th>
                <th colspan="4">Action</th>
            </tr>
            </thead>
            <tbody>
            @if(count($subjects)>0)
            @foreach($subjects as $row)
                <tr>
                    <td>{{$row['id']}}</td>
                    <td >{{$row['subject_id']}}</td>
                    <td >{{$row['subject_name']}}</td>
                    <td >
                        <div class="form-group">
                            <div class="row">
                        &nbsp; <button type="button" href="{{action('SubjectController@show',$row['id'])}}" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-address-card"></i>&nbsp
                                    &nbsp;View</button>&nbsp;
                        <a class="btn btn-outline-success" href="{{action('SubjectController@edit',$row['id'])}}"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>&nbsp;&nbsp;&nbsp;
                        <form action="{{action('SubjectController@destroy',$row['id'])}}" method="post" class="delete_form">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Delete</button>
                        </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
</div>




{{--DELETE BUTTON JS--}}
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
{{--DELETE BUTTON JS--}}











@include('includes.footer')
