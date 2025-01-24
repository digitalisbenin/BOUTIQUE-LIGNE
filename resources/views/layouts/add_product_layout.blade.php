<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Codescandy" name="author">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DI-SHOP</title>
    <link href="{{ asset('assets/libs/dropzone/dist/min/dropzone.min.css') }}" rel="stylesheet" />
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="https://freshcart.codescandy.com/assets/images/favicon/favicon.ico">


    <!-- Libs CSS -->
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/feather-webfont/dist/feather-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-M8S4MT3EYG");
    </script>
    <script type="text/javascript">
        (function (c, l, a, r, i, t, y) {
            c[a] =
                c[a] ||
                function () {
                    (c[a].q = c[a].q || []).push(arguments);
                };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "kuc8w5o9nt");
    </script>

</head>

<body>

@if(count($errors)>0)
    <div class="container my-2">
        <div class="row">


            <div class="col-10 mx-auto p-3 my-2 alert alert-danger" role="alert" data-dismiss="alert">
                <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">&times</button>
                </ul>
                @foreach ($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                    @endforeach
                    </ul>
            </div>
        </div>
         </div>
      @endif

@if (Session::has('success'))
    <div class="container my-2">
        <div class="row">
            <div class="col-10 mx-auto p-3 my-2 alert alert-success alert-dismissible fade show {{ Session::get('action') ? 'float-right' : 'text-center' }}" role="alert" data-dismiss="alert">


                <button type="button" class="close"data-bs-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{ Session::get('success')}}</strong>
                @if(Session::get('action'))
                    <hr>
                    <a href="{{ route(Session::get('action')) }}" class="btn btn-xs btn-success float-right">Continuer</a>
                @endif
            </div>
        </div>
    </div>
@endif

@yield('add product section')

<!-- Libs JS -->
<!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('assets/js/theme.min.js') }}"></script>

<script src="{{ asset('assets/libs/quill/dist/quill.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/editor.js') }}"></script>
<script src="{{ asset('assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/dropzone.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('status'))
    <script>
        Swal.fire({
            title: "{{ session('status') }}",
            text: "That thing is still around?",
            icon: "success"
        });
    </script>
@endif
@yield('scripts')
</body>
