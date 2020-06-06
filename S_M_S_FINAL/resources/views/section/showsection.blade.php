@include('includes.header')

<div class="container">
    <div class="card-body" >
        <div class="modal-dialog modal-notify modal-success modal-lg " role="document">
            <div class="modal-dialog cascading-modal modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header light-blue darken-3 white-text">
                        <h4 class="title"><i class="fas fa-users"></i> SECTION DETAILS</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">

                            <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i><br>
                            <li><label>Section Id :&nbsp;&nbsp;{{$section->section_id}}</label></li>
                            <li><label>Section Name :&nbsp;&nbsp;{{$section->section_name}}</label></li>
                    </div>
                    </div>

                    <div class="modal-footer">
                        <a type="submit" class="btn btn-outline-dark" href="/section">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
