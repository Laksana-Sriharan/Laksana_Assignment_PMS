<html>
    <head>
        <!-- Plugins css -->
        <link href="{{asset('backend/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- Bootstrap css -->
        <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>
        <!-- icons -->
        <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Head js -->
        <script src="{{asset('backend/assets/js/head.js')}}"></script>

        <!-- Datatables css -->
        <link href="{{asset('backend/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Datatables css end -->

        <!-- Toster css -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>
    <body>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>



                        <div class="content">

                            <!-- Start Content-->
                            <div class="container-fluid">

                                                <!-- start page title -->
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="page-title-box">
                                                            <div class="page-title-right">
                                                                <ol class="breadcrumb m-0">
                                                                    <li class="breadcrumb-item"><a  class="btn btn-primary rounded-pill waves-effect waves-light text-light" href="{{ route('all.product') }}"><i class="fa-solid fa-angle-left"></i> &nbsp; Back </a></li>
                                                                </ol>
                                                            </div>
                                                            <h4 class="page-title">Add Product</h4>
                                                        </div>
                                                    </div>
                                                </div>     
                                                <!-- end page title -->

                                        <div class="row">
                                            <div class="col-lg-8 col-xl-12">
                                                <div class="card">
                                                    <div class="card-body">

                                                        <div class="tab-pane" id="settings">
                                                            <form id="myForm" method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                                                                @csrf

                                                                <h5 class="mb-4 text-uppercase"> Add Product</h5>

                                                                        <div class="row">

                                                                            <div class="col-md-6">
                                                                                <div class="form-group mb-3">
                                                                                    <label for="product_name" class="form-label"> Product Name </label>
                                                                                    <input type="text" name="product_name" class="form-control"   >

                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div class="form-group mb-3">
                                                                                    <label for="description" class="form-label"> Description </label>
                                                                                    <input type="text" name="description" class="form-control"   >

                                                                                </div>
                                                                            </div>


                                                                            
                                                                            <div class="col-md-6">
                                                                                <div class="form-group mb-3">
                                                                                    <label for="price" class="form-label"> Price </label>
                                                                                    <input type="text" name="price" class="form-control "   >

                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-12">
                                                                                    <div class="form-group mb-3">
                                                                                        <label for="example-fileinput" class="form-label"> Product Image</label>
                                                                                        <input type="file" name="product_image" id="image" class="form-control">

                                                                                    </div>
                                                                            </div> <!-- end col -->


                                                                            <div class="col-md-12">
                                                                                <div class="mb-3">
                                                                                    <label for="example-fileinput" class="form-label"> </label>
                                                                                    <img id="showImage" src="{{  url('upload/default.png') }}" class="rounded-circle avatar-lg img-thumbnail"
                                                                                            alt="profile-image">
                                                                                </div>
                                                                    
                                                                        </div> <!-- end row -->

                                                                

                                                                <div class="text-end">
                                                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="fa-solid fa-plus"></i>&nbsp; Add Product </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- end settings content-->
                                                    </div>
                                                </div> <!-- end card-->

                                            </div> <!-- end col -->
                                        </div><!-- end row-->
                            </div> <!-- container -->
                        </div> <!-- content -->

                                    <script type="text/javascript">
                                        $(document).ready(function (){
                                            $('#myForm').validate({
                                                rules: {
                                                    product_name: {
                                                        required : true,
                                                    }, 
                                                    price: {
                                                        required : true,
                                                    },
                                                },
                                                },
                                                messages :{
                                                    product_name: {
                                                        required : 'Please Enter Product Name',
                                                    }, 
                                                    price: {
                                                        required : 'Please Enter Price',
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