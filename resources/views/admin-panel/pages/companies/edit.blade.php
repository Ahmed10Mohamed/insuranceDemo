@extends('admin-panel.layouts.app')

@section('css')
@include('admin-panel.pages.companies._form-styles')
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y" style="animation: fadeInUp 0.5s ease-out both;">
        <div class="app-ecommerce nq-company-form">
            <!-- Transportation Accent Image -->
            <img src="{{ asset('adminFiles/img/create-accent.png') }}" alt="إضافة جديد" class="nq-form-accent" />

            <!-- Add User -->
            <div
                class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">


            </div>
            <form method="POST" id="FormUpdate" action="{{ route('Company.update', $data->id) }}"
                enctype="multipart/form-data">
                {{ csrf_field() }}


                <div class="row">

                    <!-- First column-->
                    <div class="col-12 col-lg-12">

                        <!-- personal Information -->
                        <div class="card mb-6">
                            <h5 class="card-header page_title">تعديل شركه</h5>
                            <div class="card-body">

                                <div class="row mb-5 gx-5">
                                    <div class="col-12 col-lg-10">
                                        <!-- fullName -->
                                        <div class="mb-4 row">
                                            <label for="fullName" class="col-md-3 col-form-label"> اسم الشركة كامل <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input class="form-control" required name="fullName"
                                                    value="{{ old('fullName', $data->user->fullName) }}" id="fullName">
                                            </div>
                                        </div>
                                        <!-- commercialNumber -->
                                        <div class="mb-4 row">
                                            <label for="commercialNumber" class="col-md-3 col-form-label">رقم التسجيل
                                                التجاري <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input class="form-control" required name="commercialNumber"
                                                    value="{{ old('commercialNumber', $data->commercialNumber) }}"
                                                    id="commercialNumber">
                                            </div>
                                        </div>
                                        <!-- city -->
                                        <div class="mb-4 row">
                                            <label for="city_id" class="col-md-3 col-form-label">المحافظة <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-md-9">

                                                <select id="city_id-org" required name="city_id" class="select2 form-select"
                                                    data-placeholder="اسم المحافظة">
                                                    <option value="">اسم المحافظة</option>
                                                    @foreach ($cities as $city)
                                                        <option value="{{ $city->id }}" @selected(old('city_id', $data->user->city_id) == $city->id)>
                                                            {{ $city->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!-- address -->
                                        <div class="mb-4 row">
                                            <label for="address" class="col-md-3 col-form-label">العنوان بالتفصيل</label>
                                            <div class="col-md-9">
                                                <input class="form-control" name="address"
                                                    value="{{ old('address', $data->user->address) }}" id="address">
                                            </div>
                                        </div>
                                        <!-- phone -->
                                        <div class="mb-4 row">
                                            <label for="phone" class="col-md-3 col-form-label">رقم التليفون <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input class="form-control" required name="phone"
                                                    value="{{ old('phone', $data->user->phone) }}" id="phone">
                                            </div>
                                        </div>
                                        <!-- email -->
                                        <div class="mb-4 row">
                                            <label for="email" class="col-md-3 col-form-label">البريد الالكترونى </label>
                                            <div class="col-md-9">
                                                <input class="form-control" name="email"
                                                    value="{{ old('email', $data->user->email) }}" id="email">
                                            </div>
                                        </div>
                                        <!-- webSite -->
                                        <div class="mb-4 row">
                                            <label for="webSite" class="col-md-3 col-form-label">الموقع الإلكترونى </label>
                                            <div class="col-md-9">
                                                <input class="form-control" name="webSite"
                                                    value="{{ old('webSite', $data->webSite) }}" id="webSite">
                                            </div>
                                        </div>
                                        <!-- companyType -->
                                        <div class="mb-4 row">
                                            <label for="companyType" class="col-md-3 col-form-label">اختار النوع <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-md-9">

                                                <select id="companyType-org" name="companyType" class="select2 form-select"
                                                    data-placeholder="اختار النوع">
                                                    <option value="">اختار النوع</option>

                                                    <option value="company" @selected(old('companyType', $data->company_type_label ?? '') == 'الشركة')>شركة</option>
                                                    <option value="ELNaql" @selected(old('companyType', $data->company_type_label ?? '') == 'الناقل')>الناقل</option>


                                                </select>
                                            </div>
                                        </div>

                                        <!-- companyName -->
                                        <div class="mb-4 row">
                                            <label for="companyName" class="col-md-3 col-form-label">اسم الشركه <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input class="form-control" required name="companyName"
                                                    value="{{ old('companyName', $data->companyName) }}" id="companyName">
                                            </div>
                                        </div>

                                        <!-- contactPerson -->
                                        <div class="mb-4 row">
                                            <label for="contactPerson" class="col-md-3 col-form-label">اسم مسؤول
                                                الاتصال <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input class="form-control" required name="contactPerson"
                                                    value="{{ old('contactPerson', $data->contactPerson) }}"
                                                    id="contactPerson">
                                            </div>
                                        </div>
                                        <!-- phonePerson -->
                                        <div class="mb-4 row">
                                            <label for="phonePerson" class="col-md-3 col-form-label">رقم هاتف مسؤول
                                                الاتصال <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input class="form-control" required name="phonePerson"
                                                    value="{{ old('phonePerson', $data->phonePerson) }}"
                                                    id="phonePerson">
                                            </div>
                                        </div>
                                        <!-- emailPerson -->
                                        <div class="mb-4 row">
                                            <label for="emailPerson" class="col-md-3 col-form-label">البريد الإلكتروني
                                                لمسؤول الاتصال</label>
                                            <div class="col-md-9">
                                                <input class="form-control" name="emailPerson"
                                                    value="{{ old('emailPerson', $data->emailPerson) }}"
                                                    id="emailPerson">
                                            </div>
                                        </div>
                                        <!-- userName -->
                                        <div class="mb-4 row">
                                            <label for="userName" class="col-md-3 col-form-label">اسم المستخدم <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input class="form-control" required name="userName"
                                                    value="{{ old('userName',$data->user->userName) }}" id="userName">
                                            </div>
                                        </div>


                                        <!-- company_specialization_id -->
                                        <div class="mb-4 row">
                                            <label for="company_specialization_id" class="col-md-3 col-form-label">مجالات
                                                التخصص في الشحن</label>
                                            <div class="col-md-9">
                                                <select id="company_specialization_id" name="company_specialization_id"
                                                    class="select2 form-select"
                                                    data-placeholder="مجالات التخصص في الشحن ">
                                                    <option value="">مجالات التخصص في الشحن </option>
                                                    @foreach ($companySpecializations as $companySpecialization)
                                                        <option value="{{ $companySpecialization->id }}"
                                                            @selected(old('company_specialization_id', $data->company_specialization_id) == $companySpecialization->id)>{{ $companySpecialization->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>




                                        <!-- image -->
                                        <div class="mb-4 row">
                                            <label for="phone" class="col-md-3 col-form-label">لوجو الشركة
                                            </label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="file" name="image"
                                                    value="{{ old('image') }}" id="image">
                                            </div>
                                            <div class="col-md-1">
                                                <img src="{{ asset($data->user->image) }}" width="50"
                                                    height="50">
                                            </div>
                                        </div>













                                        <!-- end all data -->

                                    </div>

                                </div>

                                <hr>
                                <div class="row">
                                    <div class="mb-6 col-md-6 form-password-toggle">
                                        <label class="form-label" for="password">كلمة المرور الجديدة <span
                                                style="color: #f00;">(اتركها فارغه فى حاله الرغبه فى تغير كلمة
                                                المرور)</span></label>

                                        <div class="input-group input-group-merge">
                                            <input class="form-control" type="password" id="password" name="password"
                                                value="{{ old('password') }}"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                            <span class="input-group-text cursor-pointer"><i
                                                    class="ti tabler-eye-off"></i></span>
                                        </div>
                                    </div>

                                    <div class="mb-6 col-md-6 form-password-toggle">
                                        <label class="form-label" for="password_confirmation">تأكيد كلمة المرور (اتركها
                                            فارغه فى حاله الرغبه فى تغير كلمة
                                            المرور)</span></label>
                                        <div class="input-group input-group-merge">
                                            <input class="form-control" type="password" name="password_confirmation"
                                                id="password_confirmation" value="{{ old('password_confirmation') }}"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&# xb7;&# xb7;&# xb7;" />
                                            <span class="input-group-text cursor-pointer"><i
                                                    class="ti tabler-eye-off"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-body">المتطلبات:</h6>
                                <ul class="ps-4 mb-0">
                                    <li class="mb-4">الحد الأدنى 6 أحرف - كلما زاد العدد كان ذلك أفضل </li>
                                </ul>

                                <hr>









                            </div>
                        </div>





                        <div class="mt-2">
                            <button type="submit" id="submitBtn" class="btn btn-primary">
                                <span class="spinner-border spinner-border-sm d-none me-1" role="status"
                                    aria-hidden="true"></span>
                                <span class="btn-text">تعديل شركة</span>
                            </button>
                            <button type="reset" class="btn btn-label-secondary">الغاء</button>
                        </div>


                    </div>
            </form>
            <!-- / Content -->
        @endsection
        @section('script')
            <script>
                $(document).ready(function() {
                    $('#FormUpdate').on('submit', function(e) {
                        e.preventDefault();

                        const form = $(this)[0];
                        const formData = new FormData(form);
                        const submitBtn = $('#submitBtn');
                        const spinner = submitBtn.find('.spinner-border');
                        const btnText = submitBtn.find('.btn-text');
                        formData.append('_method', 'PUT'); // Laravel requires this for PUT requests

                        // Disable the button and show the download
                        submitBtn.prop('disabled', true);
                        spinner.removeClass('d-none');
                        btnText.text('جاري الإرسال...');

                        $.ajax({
                            url: "{{ route('Company.update', $data->id) }}",
                            method: "POST",
                            data: formData,
                            processData: false,
                            contentType: false,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success(response) {
                                if (response.success) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'تم بنجاح!',
                                        text: 'تم تعديل بيانات الشركة بنجاح.',
                                        confirmButtonText: 'حسنًا'
                                    }).then(() => {
                                        window.location.href = "{{ route('Company.index') }}";
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'خطأ!',
                                        text: response.message || "حدث خطأ غير متوقع",
                                        confirmButtonText: 'حسنًا'
                                    });
                                }
                            },
                            error(xhr) {
                                let message = "حدث خطأ أثناء إرسال البيانات.";
                                if (xhr.responseJSON?.errors) {
                                    message = Object.values(xhr.responseJSON.errors)
                                        .flat()
                                        .map(err => `• ${err}`)
                                        .join('<br>');
                                }

                                Swal.fire({
                                    icon: 'error',
                                    title: 'أخطاء في البيانات',
                                    html: message,
                                    confirmButtonText: 'موافق'
                                });
                            },
                            complete() {
                                // Re-enable the button and hide the download.
                                submitBtn.prop('disabled', false);
                                spinner.addClass('d-none');
                                btnText.text('تعديل شركة');
                            }
                        });
                    });
                });
            </script>

            <!-- Page JS -->
            <script src="{{ asset('adminFiles/vendor/libs/quill/katex.js') }}"></script>
            <script src="{{ asset('adminFiles/vendor/libs/quill/quill.js') }}"></script>
            <script src="{{ asset('adminFiles/vendor/libs/dropzone/dropzone.js') }}"></script>
            <script src="{{ asset('adminFiles/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>

            <script src="{{ asset('adminFiles/js/app-ecommerce-product-add.js') }}"></script>
            <script src="{{ asset('adminFiles/js/forms-selects.js') }}"></script>
            <script src="{{ asset('adminFiles/js/forms-tagify.js') }}"></script>
            <script src="{{ asset('adminFiles/js/forms-typeahead.js') }}"></script>
        @endsection
