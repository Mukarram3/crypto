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
                    <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('createuser')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">User Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Mukarram">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="type">Type</label>
                                <select name="type" class="form-control">
                                    <option>Please Select Type</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <select name="status" class="form-control">
                                    <option>Please Select Status</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="name">Balance</label>
                            <input type="text" class="form-control" name="balance" placeholder="Enter Balance">
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
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('updateuser')}}">
                    @csrf
                    <input type="hidden" id="edit_id" name="edit_id">
                    <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Mukarram">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="type">Type</label>
                            <select id="type" name="type" class="form-control">
                                <option>Please Select Type</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="status">Status</label>
                            <select id="status" name="status" class="form-control">
                                <option>Please Select Status</option>
                                <option value="1">1</option>
                                <option value="0">0</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="name">Balance</label>
                        <input type="text" class="form-control" name="balance" id="balance">
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

{{--   Edit User Balance           --}}


<div class="modal fade" id="editbalancemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Balance</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('updatebalance')}}">
                    @csrf
                    <input type="hidden" id="edituser_id" name="edit_id">


                    <div class="form-group">
                        <label for="name">Balance</label>
                        <input type="text" class="form-control" name="balance" id="editbalance">
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


{{--   Edit User Balance           --}}


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
											</span>New User</a>
        <div class="col-lg-12">

            <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Users</h6>
              </div>
              <div class="table-responsive p-3">
              <table class="table align-items-center responsive" id="dataTable">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Balance</th>
                    <th>Type</th>
                    <th>Status</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Balance</th>
                    <th>Type</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($users as $user)


                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->balance}}</td>
                    <td>{{$user->type}}</td>
                    <td>{{$user->status}}</td>
                      <td> <a type="button" class="edit_user" data-id="{{$user->id}}" data-toggle="modal" data-target="#exampleModaledituser"><span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Design\Edit.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span></a>

                          <a class="userdelete" type="submit" data-id="{{$user->id}}"><span class="svg-icon svg-icon-danger svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span></a>

                          <a class="editbalance btn btn-primary" type="submit" data-toggle="modal" data-target="#editbalancemodal" data-id="{{$user->id}}">Edit Balance</a>

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

    $('.userdelete').click(function(){
        var id = $(this).data('id');
        // console.log(country_id);
        var url = '{{ route("deleteeuser") }}';
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

    $('.edit_user').on('click', function () {

        var edit_id = $(this).data('id');

        var urll = "{{url('Admin/User/edit/')}}/" + edit_id;
        $.get(urll, function (data) {

            $('#edit_id').val(data.id);
            $('#name').val(data.name);
            $('#email').val(data.email);
            $('#password').val(data.password);
            $('#balance').val(data.balance);
            $('#type').val(data.type);
            $('#status').val(data.status);

        });
    });


    $('.editbalance').on('click', function () {

        var edit_id = $(this).data('id');

        var urll = "{{url('Admin/User/edit/')}}/" + edit_id;
        $.get(urll, function (data) {
            $('#editbalance').val(data.balance);
            $('#edituser_id').val(data.id);
        });
    });

});

</script>

@endsection

