<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Register |Product Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
       
         <!-- Bootstrap css -->
         <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
         <!-- App css -->
        <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>
        <!-- icons -->
        <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />


        <!-- Plugins css -->
        <link href="{{asset('backend/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- Head js -->
        <script src="{{asset('backend/assets/js/head.js')}}"></script>

        <!-- Toster css -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

                                    <div class="content">

                                                        <!-- Start Content-->
                                                        <div class="container-fluid">

                                                            <!-- start page title -->
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="page-title-box">
                                                                        
                                                                        <h4 class="page-title">Register</h4>
                                                                    </div>
                                                                </div>
                                                            </div>     
                                                            <!-- end page title -->

                                    <div class="row">


                                    <div class="col-lg-8 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">





                                        <!-- end timeline content-->

                                        <div class="tab-pane" id="settings">
                                            <form id="myForm" method="post" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                                                @csrf

                                                <h5 class="mb-4 text-uppercase"> Sign Up </h5>

                                                <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="name" class="form-label"> Name</label>
                                                <input type="text" name="name" class="form-control"   >

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="email" class="form-label"> Email</label>
                                                <input type="email" name="email" class="form-control"   >

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="password" class="form-label"> Password </label>
                                                <div class="input-group input-group-merge">
                                                    
                                                    <input type="password" name="password" class="form-control">
                                                    <div class="input-group-text" data-password="false">
                                                        <span class="password-eye"></span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                     </div> <!-- end row -->



                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"> Register</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end settings content-->


                                                                        </div>
                                                                    </div> <!-- end card-->

                                                                </div> <!-- end col -->
                                                            </div>
                                                            <!-- end row-->

                                                        </div> <!-- container -->

                                                    </div> <!-- content -->


                                    <script type="text/javascript">
                                        $(document).ready(function (){
                                            $('#myForm').validate({
                                                rules: {
                                                    name: {
                                                        required : true,
                                                    }, 
                                                    email: {
                                                        required : true,
                                                    }, 
                                                    phone: {
                                                        required : true,
                                                    }, 
                                                    photo: {
                                                        required : true,
                                                    }, 
                                                    password: {
                                                        required : true,
                                                    }, 
                                                    roles: {
                                                        required : true,
                                                    }, 
                                                },
                                                messages :{
                                                    name: {
                                                        required : 'Please Enter User Name',
                                                    }, 
                                                    email: {
                                                        required : 'Please Enter User Email',
                                                    },
                                                   
                                                    password: {
                                                        required : 'Please Enter User Password',
                                                    },
                                                    photo: {
                                                        required : 'Please Select User Photo',
                                                    },
                                                   
                                                },
                                                errorElement : 'span', 
                                                errorPlacement: function (error,element) {
                                                    error.addClass('invalid-feedback');
                                                    element.closest('.form-group').append(error);
                                                },
                                                highlight : function(element, errorClass, validClass){
                                                    $(element).addClass('is-invalid');
                                                },
                                                unhighlight : function(element, errorClass, validClass){
                                                    $(element).removeClass('is-invalid');
                                                },
                                            });
                                        });
                                        
                                    </script>


                                    <script type="text/javascript">
                                        
                                        $(document).ready(function(){
                                            $('#image').change(function(e){
                                                var reader = new FileReader();
                                                reader.onload =  function(e){
                                                    $('#showImage').attr('src',e.target.result);
                                                }
                                                reader.readAsDataURL(e.target.files['0']);
                                            });
                                        });
                                    </script>

                                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

                                    <!-- Toster js-->
                                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

                                    <script>
                                                @if(Session::has('message'))
                                                var type = "{{ Session::get('alert-type','info') }}"
                                                switch(type){
                                                    case 'info':
                                                    toastr.info(" {{ Session::get('message') }} ");
                                                    break;

                                                    case 'success':
                                                    toastr.success(" {{ Session::get('message') }} ");
                                                    break;

                                                    case 'warning':
                                                    toastr.warning(" {{ Session::get('message') }} ");
                                                    break;

                                                    case 'error':
                                                    toastr.error(" {{ Session::get('message') }} ");
                                                    break; 
                                                }
                                                @endif 
                                    </script>
                                    <!-- Vendor js -->
                                    <script src="{{asset('backend/assets/js/vendor.min.js')}}"></script>

                                    <!-- Plugins js-->
                                    <script src="{{asset('backend/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
                                    <script src="{{asset('backend/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

                                    <script src="{{asset('backend/assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>

                                    <!-- Dashboar 1 init js-->
                                    <script src="{{asset('backend/assets/js/pages/dashboard-1.init.js')}}"></script>

                                    <!-- App js-->
                                    <script src="{{asset('backend/assets/js/app.min.js')}}"></script>

                                    <!-- Datatables init -->
                                    <script src="{{asset('backend/assets/js/pages/datatables.init.js')}}"></script>
                                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                                    <script src="{{ asset('backend/assets/js/code.js') }}"></script>
                                    <script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>





    </body>
</html>

