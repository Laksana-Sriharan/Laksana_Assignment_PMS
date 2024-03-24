<html>
    <head>
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>
    <body>
                
            <div class="content">

                                <!-- Start Content-->
                                <div class="container-fluid">

                                    <!-- start page title -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="page-title-box">
                                                <div class="page-title-right">
                                                            <a href="{{route('auth.logout')}}" class="btn btn-secondary rounded-pill waves-effect waves-light">
                                                                <span>Logout</span>
                                                            </a>         
                        
                                                    <ol class="breadcrumb m-0">
    
                                                    <a href="{{ route('add.product') }}" class="btn btn-primary rounded-pill waves-effect waves-light"><i class="fa-solid fa-plus"></i> &nbsp; Add Product </a>
                                                    &nbsp; &nbsp; &nbsp;   
                                                    </ol>
                                                </div>
                                                <h4 class="page-title">All Product</h4>
                                            </div>
                                        </div>
                                    </div>     
                                    <!-- end page title --> 

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">


                                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>PID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                    <tbody>
                        @foreach($product as $key=> $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td> <img src="{{ asset($item->product_image) }}" style="width:100px; height: 125px;"> </td>
                            <td>{{ $item->product_name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                            <a href="{{ route('edit.product',$item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="{{ route('delete.product',$item->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
            </div> <!-- container -->
        </div> <!-- content -->

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
