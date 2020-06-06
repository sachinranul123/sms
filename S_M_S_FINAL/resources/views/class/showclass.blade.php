@include('includes.header')

<div class="container">
    <div class="card-body" >
        <div class="modal-dialog modal-notify modal-success modal-lg " role="document">
            <div class="modal-dialog cascading-modal modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header light-blue darken-3 white-text">
                        <h4 class="title"><i class="fas fa-users"></i> CLASS DETAILS</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">

                            <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i><br>
                    <br>
                             <li><label>  Class Name : {{$class->class_name}}</label><br></li>
                            <li><label> Class Id : {{$class->class_id}}</label><br></li>
                    <li><label>Class Date:{{$class->class_date}} </label><br></li>
                    <li><label> Start Time :{{$class->start_time}} </label><br></li>
                    <li><label> End Time :{{$class->end_time}} </label><br></li>
                            <li><label> Class Fee :&nbsp;&nbsp;<label>LKR .</label>{{$class->class_fee}}<label>&nbsp;.00</label> </label><br></li>
                    <li><label> Hall Charge :{{$class->hall_charge}}&nbsp;<label>% </label><br></li>


                </div>


                        <div class="modal-footer">
                            <a type="submit" class="btn btn-outline-dark" href="/class">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('includes.footer')
