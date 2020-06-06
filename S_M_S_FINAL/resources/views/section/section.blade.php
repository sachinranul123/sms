@include('includes.header')

<h1>
  <a href="" class="typewrite" data-period="2000" data-type='[ "I Love Design.", "I Love to Develop." ]'>
    <span class="wrap"></span>
  </a>
</h1>

<div class="panel-body ">
    <div class="modal-header">
        <div class=" position-fixed"  id="app"></div>
        <br>
        <br>
    </div>
</div>
<br>

<div class="container-fluid ">
        <div align="right">
            <a href="{{url('section/create')}}" class="btn btn-primary waves-effect" ><i class="fa fa-plus"> &nbsp;</i>Add Section</a>
        </div>
</div>


@if(session('msg'))
    <div class="alert alert-success text-center container font-weight-bold"  role="alert">
        {{session('msg')}}
    </div>
@endif

<br>
<div class="table-responsive">
    <table  class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="10%">#</th>
            <th width="30%">Section Id</th>
            <th width="25%">Section Name</th>
            <th width="35%">Action</th>
            </tr>
        </thead>

    <tbody>
    @foreach($section as $row)
        <tr>
            <td>{{$row['id']}}</td>
            <td>{{$row['section_id']}}</td>
            <td>{{$row['section_name']}}</td>
            <td>
                <div class="form-group">
                    <a href="{{action('SectionController@show',$row['id'])}}" class="btn btn-outline-warning"><i class="fas fa-address-card"></i>&nbsp;&nbsp;View</a>
                    <a href="{{action('SectionController@edit',$row['id'])}}" class="btn btn-outline-success"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                    <form action="{{action('SectionController@destroy',$row['id'])}}" method="post" class="delete_form">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE" />
                        <a type="submit" class="btn btn-outline-danger waves-effect"><i class="fas fa-trash-alt"></i>&nbsp;Delete</a>
                    </form>

                </div>
            </td>
        </tr>
    @endforeach
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

{{--    TYPE WRITER JS    --}}
        <script>
            var app = document.getElementById('app');

            var typewriter = new Typewriter(app, {
                loop: true
            });

            typewriter.typeString('<h1 style="font-family: Righteous, cursive;"><strong>WLCOME TO SECTIONS PAGE !!</strong></h1>')
                .pauseFor(2500)
                .deleteAll()
                .typeString('<h1 style="font-family:Indie Flower, cursive;"><strong> SECTION DETAILS VIEW &</strong></h1>')
                .pauseFor(2500)
                .deleteChars(6)
                .typeString('<h1 style="font-family: Indie Flower, cursive;"><strong>EDIT !!</strong></h1>')
                .pauseFor(2000)
                .start();
        </script>
{{--    TYPE WRITER JS    --}}



@include('includes.footer')
