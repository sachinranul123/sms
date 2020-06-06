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
  <a href="" class="typewrite" data-period="2000" data-type='[ "I Love Design.", "I Love to Develop." ]'>
    <span class="wrap"></span>
  </a>
</h1>


<br>
@if(session('msg'))
    <div class="alert alert-success text-center container font-weight-bold"  role="alert">
        {{session('msg')}}
    </div>
@endif
<div class="container-fluid">
     <div align="right">
            <a href="{{url('class/create')}}" class="btn btn-primary btn-rounded waves-effect" ><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Class</a>
      </div>
</div>
<div class="container-fluid">
    <br>
    <table id="selectedColumn" class="table table-striped table-bordered table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>CLASS ID</th>
            <th>CLASS NAME</th>
            <th>GRADE</th>
            <th>CLASS DATE</th>
            <th>START TIME</th>
            <th>END TIME</th>
            <th>Class Fee</th>
            <th>ACTION</th>
        </tr>
        </thead>
        <tbody>
            @foreach ( $class as $row )
                <tr>
                    <td>{{$row['id']}}</td>
                    <td>{{$row['class_id']}}</td>
                    <td>{{$row['class_name']}}</td>
                    <td>{{$row['grade']}}</td>
                    <td>{{$row['class_date']}}</td>
                    <td>{{$row['start_time']}}</td>
                    <td>{{$row['end_time']}}</td>
                    <td>{{$row['class_fee']}}</td>
                    <td>
                        <div class="form-group">
                            <a href="{{action('ClassController@show',$row['id'])}}" class="btn btn-outline-warning"><i class="fas fa-address-card"></i>&nbsp;&nbsp;View</a>
                            <a href="{{action('ClassController@edit',$row['id'])}}" class="btn btn-outline-success"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                        </div>
                        </td>
                        </div>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>




@include('includes.footer')
