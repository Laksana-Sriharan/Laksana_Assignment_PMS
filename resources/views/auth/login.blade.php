<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Log In |Product Management System</title>
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                            <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="index.html" class="logo logo-dark">
                                            <span class="logo-lg">
                                                <img src="{{asset('backend/assets/images/logo.png')}}" alt="" height="120">
                                            </span>
                                        </a>
                    
                                        <a href="index.html" class="logo logo-light">
                                            <span class="logo-lg">
                                                <img src="{{asset('backend/assets/images/logo.png')}}" alt="" height="120">
                                            </span>
                                        </a>
                                        <h2 class="text-center"> Product Management System </h2><br>
                                    </div>
                                    
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="login" class="form-label">Name/Email</label>
                                        <input class="form-control @error('login') is-invalid @enderror" name="login" type="text" id="login" required="" placeholder="Enter your Name/Email/Phone">
                                        @error('login')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror

                                    </div>

                                   
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input name="password" type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password">
                                            
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                    
                                            </div>
                                           
                                        </div>
                                        @error('password')
                                                    <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    

                                    <div class="text-center d-grid">
                                        <button class="btn btn-primary" type="submit"> Log In </button>
                                    </div>
                                    
                                    <div class="text-center d-grid">
                                    <p>Don't have an account yet?</p>
                                    <a href="{{route('register')}}" class ="text-decoration-none">Register Here!</a>
                                    </div>

                                </form>


                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                           
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2024 - <script>document.write(new Date().getFullYear())</script> &copy;  <a href="" class="text-white-50">Product Management System</a> 
        </footer>

        
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