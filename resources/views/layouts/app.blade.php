<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- First: jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Second: jQuery UI -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', $settings->site_name ?? '')</title>
    <link rel="icon" type="image/png" href="{{ asset($settings->favicon ?? '') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<style>
    table tbody tr td img {
        height: 70px;
    }

    th,
    td {
        min-width: 110px;
    }
</style>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('admin.index') }}">
                    {{ $settings->site_name ?? '' }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.enquires.index') }}">
                                    <i class="fa-regular fa-bell"></i>
                                    {{ __('Enquires') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.galleries.index') }}">
                                    <i class="fas fa-images"></i>
                                    {{ __('Gallery') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.banners.index') }}">
                                    <i class="fa-solid fa-image"></i>
                                    {{ __('Banners') }}
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.catalogs.index') }}">
                                    <i class="fa-solid fa-file-pdf"></i>
                                    {{ __('Catalogs') }}
                                </a>
                            </li> --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-shop"></i>
                                    {{ __('Products') }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{ route('admin.products.index') }}">
                                            <i class="fa-brands fa-product-hunt"></i>
                                            {{ __('Products') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{ route('admin.productCategories.index') }}">
                                            <i class="fa fa-list-alt"></i>
                                            {{ __('Product Categories') }}
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.testimonials.index') }}">
                                    <i class="fa-regular fa-comments"></i>
                                    {{ __('Testimonials') }}
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.services.index') }}">
                                    <i class="fa-regular fa-paper-plane"></i>
                                    {{ __('Services') }}
                                </a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.blogs.index') }}">
                                    <i class="fa-regular fa-font-awesome"></i>
                                    {{ __('Blogs') }}
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa-regular fa-user"></i>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.settings.index') }}">
                                    <i class="fa-solid fa-gear"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.clear-cache') }}">
                                    <i class="fa-solid fa-broom"></i>
                                </a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @include('admin.alerts')
            @yield('content')
        </main>
    </div>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- tinymce -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.6.0/tinymce.min.js"
        integrity="sha512-/4EpSbZW47rO/cUIb0AMRs/xWwE8pyOLf8eiDWQ6sQash5RP1Cl8Zi2aqa4QEufjeqnzTK8CLZWX7J5ZjLcc1Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {

            // slug maker
            $("#title").on("input", function() {
                let title = $(this).val();
                let slug = title.toLowerCase()
                    .replace(/[^a-z0-9\s-]/g, '') // Remove invalid characters
                    .replace(/\s+/g, '-') // Replace spaces with hyphens
                    .replace(/-+/g, '-'); // Remove multiple hyphens

                $("#slug").val(slug);
            });

            // AOS
            AOS.init();

            //  tinymce 
            tinymce.init({
                selector: 'textarea#content', // Target the textarea by ID
                plugins: 'advlist autolink lists link charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste help wordcount',
                toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code',
                height: 300
            });

            //  Image Preview 
            $('#image_url').change(function() {
                let reader = new FileReader();

                reader.onload = function(e) {
                    $('#imagePreview').attr('src', e.target.result).show();
                }

                if (this.files[0]) {
                    reader.readAsDataURL(this.files[0]); // Convert to base64 string
                }
            });

            // Multiple Image Preview 
            $('#image_url').on('change', function(event) {
                var container = $('#imagePreviewContainer');
                container.html(''); // Clear old previews

                $.each(event.target.files, function(index, file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var img = $('<img>')
                            .attr('src', e.target.result)
                            .addClass('img-thumbnail m-1')
                            .css('width', '100px');
                        container.append(img);
                    };
                    reader.readAsDataURL(file);
                });
            });


            $('#mobile_image_url').change(function() {
                let reader = new FileReader();

                reader.onload = function(e) {
                    $('#imagePreview2').attr('src', e.target.result).show();
                }

                if (this.files[0]) {
                    reader.readAsDataURL(this.files[0]); // Convert to base64 string
                }
            });

            // Multiple Delete Alert
            $('#multiple-delete').on('submit', function(event) {
                event.preventDefault();

                Swal.fire({
                    title: "Are you sure?",
                    text: "Selected items will be permanently deleted!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#dc3545",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Yes, delete them!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit(); // Submit the form manually
                    }
                });
            });


            // Delete Alert
            $('.delete-confirm').on('click', function(event) {
                event.preventDefault();

                let deleteUrl = $(this).data('url'); // Get URL from data attribute

                Swal.fire({
                    title: "Are you sure?",
                    text: "This action cannot be undone!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#dc3545",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = deleteUrl; // Redirect to delete route
                    }
                });
            });


            // Handle SweetAlert2 session messages dynamically
            let
                messageType =
                "{{ session('success') ? 'success' : (session('warning') ? 'warning' : (session('error') ? 'error' : '')) }}";
            let messageText = "{{ session('success') ?? (session('warning') ?? (session('error') ?? '')) }}";

            if (messageType && messageText) {
                Swal.fire({
                    title: messageType.charAt(0).toUpperCase() + messageType.slice(1) + "!",
                    text: messageText,
                    icon: messageType,
                    timer: 3000, // Auto close after 3 seconds
                    showConfirmButton: false
                });
            }


            // When #select-all is clicked
            $('#select-all').on('click', function() {
                // Check or uncheck all checkboxes with class .item-checkbox
                $('.item-checkbox').prop('checked', $(this).prop('checked'));
            });

            // If any .item-checkbox is unchecked, uncheck #select-all
            $('.item-checkbox').on('change', function() {
                // If all checkboxes are checked, check #select-all
                if ($('.item-checkbox:checked').length === $('.item-checkbox').length) {
                    $('#select-all').prop('checked', true);
                } else {
                    // Otherwise, uncheck #select-all
                    $('#select-all').prop('checked', false);
                }
            });


        });
    </script>
</body>

</html>
