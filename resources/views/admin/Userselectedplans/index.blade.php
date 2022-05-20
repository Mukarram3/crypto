@extends('master')
@section('css')

    <link href="{{asset('assets/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('title', 'Users')
@section('main-content')

    {{-- Add Model --}}

    <div class="modal fade" id="exampleModaladduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose Plan For User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="addbalance" action="{{route('userbalancestore')}}">
                        @csrf

                            <div class="form-group">
                                <label for="type">Username</label>
                                <select name="userid" class="form-control">
                                    <option>Please Select Username</option>
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="type">Plan</label>
                                <select name="planid" class="form-control">
                                    <option value="0">Please Select Plan</option>
                                    @foreach($plans as $plan)
                                    <option value="{{$plan->id}}">{{$plan->name}}</option>
                                    @endforeach
                                </select>

                            </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>

                </form>
            </div>
        </div>
    </div>

    {{-- Add Model --}}

    {{-- Edit Model --}}

    <div class="modal fade" id="exampleModaledituser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('userbalanceupdate')}}" id="editbalanceform">
                        @csrf
                        <input type="hidden" id="edit_id" name="edit_id">

                        <div class="form-group">
                            <label for="type">Username</label>
                            <select name="userid" id="name" class="form-control">
                                <option value="0">Please Select Username</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>

                        </div>
                            <div class="form-group">
                                <label for="type">Plan</label>
                                <select name="planid" id="plan" class="form-control">
                                    <option value="0">Please Select Plan</option>
                                    @foreach($plans as $plan)
                                        <option value="{{$plan->id}}">{{$plan->name}}</option>
                                    @endforeach
                                </select>

                            </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

                </form>
            </div>
        </div>
    </div>

    {{-- Edit Model --}}


    <div class="container">
        <div class="row">
            <a data-toggle="modal" data-target="#exampleModaladduser" class="btn btn-primary font-weight-bolder" style="float: left;">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"></rect>
														<circle fill="#000000" cx="9" cy="15" r="6"></circle>
														<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>Add New User Plan</a>
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Users Selected Plans</h6>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center responsive" id="dataTable">
                            <thead class="thead-light">
                            <tr>
                                  <th>ID</th>
                                <th>User Name</th>
                                <th>Selected Plan</th>
                                <th>Plan Percentage Increment</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Selected Plan</th>
                                <th>Plan Percentage Increment</th>

                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach ($usersplans as $usersplan)


                                <tr>
                                    <td>{{$usersplan->id}}</td>
                                    <td>{{$usersplan->hasusers->name}}</td>
                                    <td>{{$usersplan->hasplans->name}}</td>
                                    <td>{{$usersplan->hasplans->percent}}</td>
                                    <td> <a type="button" class="editbalance" data-id="{{$usersplan->id}}" data-toggle="modal" data-target="#exampleModaledituser"><span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Design\Edit.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span></a>


                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="{{asset('assets/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <script>

        // $('#addbalance').on('submit', function(e){
        //     e.preventDefault();
        //     var form = this;
        //     $.ajax({
        //         url:$(form).attr('action'),
        //         method:$(form).attr('method'),
        //         data:new FormData(form),
        //         processData:false,
        //         dataType:'json',
        //         contentType:false,
        //         beforeSend:function(){
        //             $(form).find('span.error-text').text('');
        //         },
        //         success:function(data){
        //             if(data.code == 0){
        //
        //             }else{
        //                 toastr.success(data.msg);
        //                 location.reload();
        //             }
        //         }
        //     });
        // });


        $('.editbalance').on('click', function () {

            var edit_id = $(this).data('id');

            var urll = "{{url('Admin/UserBalance/Edit/')}}/" + edit_id;
            $.get(urll, function (data) {

                $('#edit_id').val(data.id);
                $('#name').val(data.userid);
                $('#plan').val(data.planid);

            });
        });

        // $('#editbalanceform').on('submit', function(e){
        //     e.preventDefault();
        //     var form = this;
        //     $.ajax({
        //         url:$(form).attr('action'),
        //         method:$(form).attr('method'),
        //         data:new FormData(form),
        //         processData:false,
        //         dataType:'json',
        //         contentType:false,
        //         success: function(data){
        //             if(data.code == 0){
        //
        //             }else{
        //                 toastr.success('Record Updated Successfully...');
        //                 location.reload();
        //
        //             }
        //         }
        //     });
        // });

    </script>

@endsection

