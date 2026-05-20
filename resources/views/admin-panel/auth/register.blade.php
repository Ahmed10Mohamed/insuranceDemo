<!doctype html>
<html lang="ar" dir="rtl" class="layout-wide customizer-hide" data-skin="default"
    data-assets-path="https://samionc.com/adminFiles/" data-template="vertical-menu-template" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>منصة التأمينات — إنشاء حساب</title>

    <meta name="description" content="إنشاء حساب جديد بمنصة التأمينات لإدارة العملاء والوثائق التأمينية بسهولة وأمان" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('adminFiles/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('adminFiles/vendor/fonts/iconify-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('adminFiles/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminFiles/vendor/libs/pickr/pickr-themes.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminFiles/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminFiles/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('adminFiles/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminFiles/vendor/libs/@form-validation/form-validation.css') }}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/toaster.css') }}">

    <!-- Helpers -->
    <script src="{{ asset('adminFiles/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('adminFiles/vendor/js/template-customizer.js') }}"></script>
    <script src="{{ asset('adminFiles/js/config.js') }}"></script>

    <style>
        * {
            font-family: 'Cairo', sans-serif;
        }

        body {
            background: #0f172a;
            overflow-x: hidden;
        }

        .nq-login-wrapper {
            min-height: 100vh;
            display: flex;
        }

        .nq-login-bg {
            width: 50%;
            position: relative;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem;
        }

        .nq-login-bg::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg,
                    rgba(15, 23, 42, 0.92),
                    rgba(13, 110, 253, 0.75));
        }

        .nq-login-bg-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 500px;
        }

        .nq-login-bg-content h1 {
            color: #fff;
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .nq-login-bg-content p {
            color: rgba(255, 255, 255, 0.8);
            line-height: 2;
            font-size: 1.05rem;
        }

        .nq-login-form-panel {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            background: #111827;
        }

        .nq-login-card {
            width: 100%;
            max-width: 520px;
            background: #1f2937;
            border-radius: 24px;
            padding: 2.5rem;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        .nq-login-logo {
            width: 85px;
            display: block;
            margin: 0 auto 1.5rem;
        }

        .nq-login-title {
            color: #fff;
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: .5rem;
        }

        .nq-login-subtitle {
            color: #9ca3af;
            text-align: center;
            margin-bottom: 2rem;
            line-height: 1.8;
        }

        .form-label {
            color: #e5e7eb;
            margin-bottom: .6rem;
            font-weight: 600;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            font-size: 1.1rem;
        }

        .form-control,
        .input-group-text {
            background: #111827 !important;
            border: 1px solid #374151 !important;
            color: #fff !important;
            min-height: 50px;
        }

        .form-control {
            padding-right: 1rem;
            padding-left: 3rem;
            border-radius: 12px !important;
        }

        .form-control::placeholder {
            color: #6b7280;
        }

        .form-control:focus {
            border-color: #0d6efd !important;
            box-shadow: 0 0 0 .2rem rgba(13, 110, 253, 0.15) !important;
        }

        .input-group-text {
            border-radius: 0 12px 12px 0 !important;
        }

        .nq-login-btn {
            width: 100%;
            border: none;
            border-radius: 14px;
            padding: 0.95rem;
            background: linear-gradient(135deg, #0d6efd, #2563eb);
            color: #fff;
            font-size: 1rem;
            font-weight: 700;
            transition: .3s ease;
        }

        .nq-login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(13, 110, 253, 0.25);
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
        }

        .login-link span {
            color: #9ca3af;
        }

        .login-link a {
            color: #3b82f6;
            font-weight: 700;
            text-decoration: none;
            margin-right: .3rem;
        }

        .login-link a:hover {
            color: #60a5fa;
        }

        .footer-text {
            text-align: center;
            margin-top: 2rem;
            color: #6b7280;
            font-size: .9rem;
        }

        @media (max-width: 992px) {

            .nq-login-bg {
                display: none;
            }

            .nq-login-form-panel {
                width: 100%;
                min-height: 100vh;
            }
        }
    </style>
</head>

<body>

    <div class="nq-login-wrapper">

        <!-- Left Side -->
        <div class="nq-login-bg" style="background-image: url('{{ asset('adminFiles/img/login-bg.png') }}');">

            <div class="nq-login-bg-content">

                <h1>منصة التأمينات</h1>

                <p>
                    أنشئ حسابك الآن وابدأ في إدارة العملاء والوثائق
                    والخدمات التأمينية بطريقة احترافية وآمنة بالكامل.
                </p>

                <div class="mt-5">
                    <i class="icon-base ti tabler-shield-lock" style="font-size: 5rem; color: rgba(255,255,255,.25);">
                    </i>
                </div>

            </div>
        </div>

        <!-- Right Side -->
        <div class="nq-login-form-panel">

            <div class="nq-login-card">

                <img src="{{ asset('logo.png') }}" alt="منصة التأمينات" class="nq-login-logo" />

                <h2 class="nq-login-title">
                    إنشاء حساب جديد
                </h2>

                <p class="nq-login-subtitle">
                    أدخل بياناتك لإنشاء حساب جديد والاستفادة من جميع خدمات منصة التأمينات.
                </p>

                <form action="{{ route('admin.register') }}" method="POST">

                    {{ csrf_field() }}

                    <!-- Full Name -->
                    <div class="mb-4">

                        <label for="fullName" class="form-label">
                            الاسم بالكامل
                        </label>

                        <div class="input-wrapper">

                            <input type="text" class="form-control" id="fullName" name="fullName"
                                value="{{ old('fullName') }}" placeholder="أدخل الاسم بالكامل" autofocus>

                            <i class="icon-base ti tabler-user"></i>

                        </div>

                    </div>

                    <!-- Company -->
                    <div class="mb-4">

                        <label for="companyName" class="form-label">
                            اسم الشركة
                        </label>

                        <div class="input-wrapper">

                            <input type="text" class="form-control" id="companyName" name="companyName"
                                value="{{ old('companyName') }}" placeholder="أدخل اسم الشركة">

                            <i class="icon-base ti tabler-building"></i>

                        </div>

                    </div>

                    <!-- Email -->
                    <div class="mb-4">

                        <label for="email" class="form-label">
                            البريد الإلكتروني
                        </label>

                        <div class="input-wrapper">

                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ old('email') }}" placeholder="example@email.com">

                            <i class="icon-base ti tabler-mail"></i>

                        </div>

                    </div>

                    <!-- Phone -->
                    <div class="mb-4">

                        <label for="phone" class="form-label">
                            رقم الهاتف
                        </label>

                        <div class="input-wrapper">

                            <input type="text" class="form-control" id="phone" name="phone"
                                value="{{ old('phone') }}" placeholder="01xxxxxxxxx">

                            <i class="icon-base ti tabler-phone"></i>

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
                    <!-- Submit -->
                    <div class="d-grid mt-4">

                        <button class="nq-login-btn" type="submit">

                            <i class="icon-base ti tabler-user-plus me-2"></i>

                            إنشاء الحساب

                        </button>

                    </div>

                </form>

                <!-- Login Link -->
                <div class="login-link">

                    <span>
                        لديك حساب بالفعل؟
                    </span>

                    <a href="{{ route('login') }}">
                        تسجيل الدخول
                    </a>

                </div>

                <!-- Footer -->
                <div class="footer-text">

                    ©
                    <script>
                        document.write(new Date().getFullYear());
                    </script>

                    منصة التأمينات — جميع الحقوق محفوظة

                </div>

            </div>

        </div>

    </div>

    <!-- Core JS -->
    <script src="{{ asset('adminFiles/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('adminFiles/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('adminFiles/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('adminFiles/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('adminFiles/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <!-- Toastr -->
    <script src="{{ asset('js/toaster.js') }}"></script>

    @if (session()->has('success'))
        <script>
            toastr.success('{{ session()->get('success') }}');
        </script>
    @endif

    @if (session()->has('fail') || $errors->any())
        <script>
            toastr.error(
                "{{ $errors->first() ?: session()->get('fail') }}",
                "تنبيه"
            );
        </script>
    @endif

    <!-- Main JS -->
    <script src="{{ asset('adminFiles/js/main.js') }}"></script>

</body>

</html>
