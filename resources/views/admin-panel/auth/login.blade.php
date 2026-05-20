<!doctype html>
<html lang="ar" class="layout-wide customizer-hide" dir="rtl" data-skin="default"
    data-assets-path="https://samionc.com/adminFiles/" data-template="vertical-menu-template" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>منصة التأمينات — تسجيل الدخول</title>

    <meta name="description" content="منصة إدارة التأمينات والخدمات التأمينية" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('adminFiles/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('adminFiles/vendor/fonts/iconify-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('adminFiles/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminFiles/vendor/libs/pickr/pickr-themes.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminFiles/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminFiles/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('adminFiles/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('adminFiles/vendor/libs/@form-validation/form-validation.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/toaster.css') }}">

    <!-- Helpers -->
    <script src="{{ asset('adminFiles/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('adminFiles/vendor/js/template-customizer.js') }}"></script>
    <script src="{{ asset('adminFiles/js/config.js') }}"></script>

    <style>
        .nq-login-bg::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg,
                    rgba(14, 35, 64, 0.85),
                    rgba(10, 88, 202, 0.75));
        }

        .nq-login-bg-content {
            position: relative;
            z-index: 2;
        }

        .nq-login-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #fff;
        }

        .nq-login-subtitle {
            color: #aeb8d0;
            margin-bottom: 2rem;
        }

        .nq-login-btn {
            width: 100%;
            border: none;
            border-radius: 12px;
            padding: 0.9rem 1rem;
            background: linear-gradient(135deg, #0d6efd, #0b5ed7);
            color: #fff;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .nq-login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(13, 110, 253, 0.3);
        }

        .nq-login-card {
            background: #1f2937;
            border-radius: 24px;
            padding: 2.5rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.25);
        }

        .nq-login-logo {
            width: 90px;
            margin-bottom: 1.5rem;
        }

        .form-control,
        .input-group-text {
            background: #111827 !important;
            border: 1px solid #374151 !important;
            color: #fff !important;
        }

        .form-control::placeholder {
            color: #9ca3af;
        }
    </style>
</head>

<body>
    <!-- Login Split Layout -->
    <div class="nq-login-wrapper">

        <!-- Left: Background Image Panel -->
        <div class="nq-login-bg"
            style="background-image: url('{{ asset('adminFiles/img/login-bg.png') }}'); position: relative;">

            <div class="nq-login-bg-content">
                <h1>منصة التأمينات</h1>

                <p>
                    نظام متكامل لإدارة التأمينات والخدمات التأمينية
                    ومتابعة العملاء والوثائق بسهولة وأمان
                </p>

                <div style="margin-top: 2rem;">
                    <i class="icon-base ti tabler-shield-check" style="font-size: 4rem; color: rgba(255,255,255,0.4);">
                    </i>
                </div>
            </div>
        </div>

        <!-- Right: Login Form Panel -->
        <div class="nq-login-form-panel">

            <div class="nq-login-card">

                <img src="{{ asset('logo.png') }}" alt="منصة التأمينات" class="nq-login-logo" />

                <h4 class="nq-login-title">
                    أهلاً بعودتك 👋
                </h4>

                <p class="nq-login-subtitle">
                    قم بتسجيل الدخول للوصول إلى لوحة إدارة التأمينات
                </p>

                <form action="{{ route('admin.login') }}" class="mb-4" method="post">
                    {{ csrf_field() }}

                    <div class="mb-4">
                        <label for="email" class="form-label">
                            اسم المستخدم
                        </label>

                        <div style="position: relative;">

                            <input type="text" class="form-control" id="email" name="email"
                                value="{{ old('email') }}" placeholder="أدخل اسم المستخدم"
                                style="padding-right: 2.8rem;" autofocus />

                            <i class="icon-base ti tabler-user"
                                style="position: absolute;
                          left: 1rem;
                          top: 50%;
                          transform: translateY(-50%);
                          color: #9ca3af;
                          font-size: 1.1rem;">
                            </i>
                        </div>
                    </div>

                    <div class="mb-4 form-password-toggle">

                        <label class="form-label" for="password">
                            كلمة المرور
                        </label>

                        <div class="input-group input-group-merge">

                            <input type="password" id="password" class="form-control" name="password"
                                placeholder="••••••••••••" aria-describedby="password" />

                            <span class="input-group-text cursor-pointer">
                                <i class="icon-base ti tabler-eye-off"></i>
                            </span>

                        </div>
                    </div>

                    <div class="mb-5">

                        <div class="d-flex justify-content-between align-items-center">

                            <div class="form-check mb-0 ms-2">

                                <input class="form-check-input" type="checkbox" name="rememberMe" value="1"
                                    id="remember-me" />

                                <label class="form-check-label" for="remember-me">
                                    تذكرني
                                </label>

                            </div>

                        </div>

                    </div>

                    <div class="mb-4">

                        <button class="nq-login-btn" type="submit">

                            <i class="icon-base ti tabler-login me-2"></i>

                            تسجيل الدخول

                        </button>

                    </div>

                </form>
                <!-- Login Link -->
                <div style="text-align: center; margin-top: 1rem;">

                    <span style="color: #9ca3af;">
                        ليس لديك حساب؟
                    </span>

                    <a href="{{ route('admin.register') }}"
                        style="color: #0d6efd;
                text-decoration: none;
                font-weight: 600;">
                        انشاء حساب جديد
                    </a>

                </div>

                <div style="text-align: center; margin-top: 1rem;">

                    <small style="color: #9ca3af;">
                        ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>

                        منصة التأمينات — جميع الحقوق محفوظة
                    </small>

                </div>

            </div>
        </div>
    </div>

    <!-- Core JS -->
    <script src="{{ asset('adminFiles/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('adminFiles/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('adminFiles/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('adminFiles/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('adminFiles/vendor/libs/@algolia/autocomplete-js.js') }}"></script>
    <script src="{{ asset('adminFiles/vendor/libs/pickr/pickr.js') }}"></script>
    <script src="{{ asset('adminFiles/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('adminFiles/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('adminFiles/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('adminFiles/vendor/js/menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/toaster.js') }}"></script>

    @if (session()->has('success'))
        <script>
            toastr.success('{{ session()->get('success') }}')
        </script>
    @endif

    @if (session()->has('fail') || $errors->any())
        <script>
            let failMessage = "{{ $errors->first() ?: session()->get('fail') }}";
            let failTitle = "تنبيه"
            toastr.error(failMessage, failTitle);
        </script>
    @endif

    <!-- Vendors JS -->
    <script src="{{ asset('adminFiles/vendor/libs/@form-validation/popular.js') }}"></script>
    <script src="{{ asset('adminFiles/vendor/libs/@form-validation/bootstrap5.js') }}"></script>
    <script src="{{ asset('adminFiles/vendor/libs/@form-validation/auto-focus.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('adminFiles/js/main.js') }}"></script>
    <script src="{{ asset('adminFiles/js/pages-auth.js') }}"></script>

</body>

</html>
