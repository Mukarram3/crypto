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
                    <h5 class="modal-title" id="exampleModalLabel">Create Plan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('planstore')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Plan Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Mukarram">
                        </div>
                            <div class="form-group">
                                <label for="inputEmail4">Percentage Increment</label>
                                <input type="text" class="form-control" name="increment" id="inputEmail4" placeholder="Percentage Increment">
                            </div>

                            <div class="form-group">
                                <label for="inputPassword4">Balance Required</label>
                                <input type="text" class="form-control" name="minbalance" id="inputPassword4" placeholder="Balance Required">
                            </div>

                        <div class="form-group">
                            <label for="inputPassword4">Description</label>
                            <textarea class="form-control" name="description" id="description" placeholder="Description"></textarea>
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
                    <h5 class="modal-title" id="exampleModalLabel">Edit Plan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('planupdate')}}">
                        @csrf
                        <input type="hidden" id="id" name="id">
                        <div class="form-group">
                            <label for="editname">Plan Name</label>
                            <input type="text" class="form-control" id="editname" name="name" placeholder="Mukarram">
                        </div>
                        <div class="form-group">
                            <label for="editpercentinre">Percentage Increment</label>
                            <input type="text" class="form-control" name="increment" id="editpercentinre" placeholder="Percentage Increment">
                        </div>

                        <div class="form-group">
                            <label for="editminbalance">Balance Required</label>
                            <input type="text" class="form-control" name="minbalance" id="editminbalance" placeholder="Balance Required">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword4">Description</label>
                            <textarea class="form-control" name="editdescription" id="editdescription" placeholder="Description"></textarea>
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
											</span>New Plan</a>
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Plans</h6>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center responsive" id="dataTable">
                            <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Percentage Increment</th>
                                <th>Minimum Balance Required</th>
                                <th>Balance Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Percentage Increment</th>
                                <th>Minimum Balance Required</th>
                                <th>Balance Description</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach ($plans as $plan)


                                <tr>
                                    <td>{{$plan->id}}</td>
                                    <td>{{$plan->name}}</td>
                                    <td>{{$plan->percent}}</td>
                                    <td>{{$plan->minbalance}}</td>
                                    <td>{{$plan->description}}</td>
                                    <td> <a class="editplan" data-id="{{$plan->id}}" type="button" data-target="#exampleModaledituser" data-toggle="modal"><span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Design\Edit.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span></a>

                                        <a type="button" data-id="{{$plan->id}}" id="plandelete"><span class="svg-icon svg-icon-danger svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
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

        $(document).ready(function(){
            $('#dataTable').DataTable(); // ID From dataTable
        });

        $('.editplan').on('click',function (){

            var editid= $(this).data('id');
            var url= "{{url('Admin/Plan/Edit')}}/" + editid;

            $.get(url,function (data){
                $('#id').val(data.id);
                $('#editname').val(data.name);
                $('#editpercentinre').val(data.percent);
                $('#editminbalance').val(data.minbalance);
                $('#editdescription').val(data.description);
            });


        });

        $(document).on('click','#plandelete', function(){
            var id = $(this).data('id');

            var url = '{{ route("plandelete") }}';
            swal.fire({
                title:'Are you sure?',
                html:'You want to <b>delete</b> this Record',
                showCancelButton:true,
                showCloseButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#556ee6',
                width:300,
                allowOutsideClick:false
            })

                .then(function(result){
                    if(result.value){
                        $.get(url,{id:id}, function(data){
                            if(data.code == 1){

                                toastr.success(data.msg);
                                location.reload();

                            }else{
                                toastr.error(data.msg);
                            }
                        },'json');
                    }
                });
        });

    </script>

@endsection

