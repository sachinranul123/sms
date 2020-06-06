<!DOCTYPE html>
<html>
 <head>
  <title>Multiselect Dropdown With Checkbox In Laravel - nicesnippets.com </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

   <meta name="csrf-token" content="{{ csrf_token() }}">
 </head>
 <body>
  <div class="panel panel-danger">
  <div class="panel-heading">Panel heading without title</div>

  <div class="container" style="width:500px;">
   <h2 align="center">Student Class Assign Place</h2>
   <br /><br />
   <form method="post" id="framework_form">
   <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Student Id</label>
    <div class="col-sm-10">
      <input type="text" name="stu_id" readonly value="{{$array['student']->student_id}}" class="form-control" id="stu_id" >
    </div>
  </div>
  <div class="form-group row">
    <label for="stu_fname" class="col-sm-2 col-form-label">Student First Name</label>
    <div class="col-sm-10">
      <input type="text" readonly value="{{$array['student']->first_name}}&nbsp;&nbsp;{{$array['student']->middle_name}}&nbsp;&nbsp;{{$array['student']->last_name}}" name="stu_fname" class="form-control" id="stu_fname" >
    </div>
  </div>

  <div class="form-group row">
    <label for="stu_grade" class="col-sm-2 col-form-label">Student Grade</label>
    <div class="col-sm-10">
      <input type="text" readonly value="{{$array['student']->stu_grade}}" name="stu_grade" class="form-control" id="stu_grade" >
    </div>
  </div>




    <div class="form-group">
     <label>Select Witch Class Student Attends</label>

     <select id="framework" name="name[]" multiple class="form-control" >
     @foreach($array['class'] as $row)
      <option value="{{$row->class_name}}">{{$row->class_name}}</option>
      @endforeach
     </select>

    </div>

    <div class="form-group">
     <input type="submit" class="btn btn-info" name="submit" value="Submit" />
    </div>
   </form>
   <br />
  </div>
  </div>
 </body>
<script>
$(document).ready(function(){
 $('#framework').multiselect({
  nonSelectedText: 'Select Class',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });

 $('#framework_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
   $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
   url:"{{ route('frameworks.store') }}",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#framework option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#framework').multiselect('refresh');
    alert(data['success']);
   }
  });
 });
});
</script>
</html>
