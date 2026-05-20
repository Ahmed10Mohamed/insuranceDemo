@extends('admin-panel.layouts.app')

@section('css')
<style>
    /* Allow dropdown menus to overflow outside the card in this page */
    html body .container-xxl > .card {
        overflow: visible !important;
    }
</style>
@endsection

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="card" style="animation: fadeInUp 0.5s ease-out both;">
                 <!-- Transportation Image Decoration -->
                <img src="{{ asset('adminFiles/img/table-decoration.png') }}" alt="شحن ونقل" class="nq-table-decoration" />
            <div class="card-header page_title">
                <i class="icon-base ti tabler-building me-2"></i>
                الشركات
            </div>
            @php
                $canEdit = admin()->id === 1 || hasPermission(admin()->id, 'edit_company');
                $canDelete = admin()->id === 1 || hasPermission(admin()->id, 'delete_company');
                $canShowOrders = admin()->id === 1 || hasPermission(admin()->id, 'show_orders');
                $canOrderReceived = admin()->id === 1 || hasPermission(admin()->id, 'order_received');
                $canLoginAsCompany = admin()->id === 1 || hasPermission(admin()->id, 'login_as_company');
            @endphp

            <!-- Table -->
            <div class="card-body">

                <div class="card-datatable table-responsive pt-0">

                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم الشركة</th>
                                    <th>اسم مسؤول </th>
                                    <th>رقم الهاتف</th>
                                    <th>البريد الالكترونى  </th>
                                    <th>مفعل</th>

                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($all_data as $data)
                                    <tr style="animation: fadeInUp 0.3s ease-out; animation-delay: {{ $loop->index * 0.03 }}s;">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->companyName }}</td>
                                        <td>{{ optional($data->user)->fullName ?? 'N/A' }}</td>
                                        <td>{{ optional($data->user)->phone ?? 'N/A' }}</td>
                                        <td>{{ optional($data->user)->email ?? 'N/A' }}</td>
                                      
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input activeVendor"
                                                    id="{{ $data->user_id }}" data-type="approve"
                                                    data-url="{{ route('changeTypeUser') }}" name="isApprove"
                                                    @if (optional($data->user)->isApprove) checked @endif>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on">
                                                        <i class="ti tabler-check"></i>
                                                    </span>
                                                    <span class="switch-off">
                                                        <i class="ti tabler-x"></i>
                                                    </span>
                                                </span>
                                            </label>
                                        </td>

                                       

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    {{ $all_data->appends(request()->query())->links() }}

                </div>

            </div>
            <!--/ Table -->
        </div>

        {{-- Delete Modals (outside .card to avoid stacking context issue) --}}
        @if ($canDelete)
            @foreach ($all_data as $data)
                <div class="modal fade" id="basicModal-{{ $data->id }}" tabindex="-1"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">حذف الطلب</h5>
                                <button type="button" class="btn-close"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form role="form"
                                action="{{ route('Company.destroy', $data->id) }}"
                                method="POST">
                                <div class="modal-body">
                                    <input name="_method" type="hidden" value="DELETE">
                                    {{ csrf_field() }}
                                    <p>هل أنت متأكد من حذف الشركة</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-label-secondary"
                                        data-bs-dismiss="modal">
                                        اغلاق
                                    </button>
                                    <button type="submit" class="btn btn-danger"
                                        name='delete_modal'><i class="fa fa-trash"
                                            aria-hidden="true"></i> حذف</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

    </div>

    <!-- / Content -->
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('change', '.activeVendor', function() {
                const $el = $(this);
                const id = $el.attr('id');
                const type = $el.data('type');
                const url = $el.data('url');
                const isChecked = $el.is(':checked');

                if (!id || !url) {
                    console.error('Missing required data attributes.');
                    return;
                }

                Swal.fire({
                    title: 'تأكيد التحديث',
                    text: "هل أنت متأكد أنك تريد تغيير حالة هذا العنصر؟",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'نعم، تأكيد',
                    cancelButtonText: 'إلغاء',
                    reverseButtons: true,
                    customClass: {
                        confirmButton: 'btn btn-success mx-2',
                        cancelButton: 'btn btn-secondary'
                    },
                    buttonsStyling: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'GET',
                            url: url,
                            data: {
                                id: id,
                                type: type,
                            },
                            success: function() {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'تم بنجاح',
                                    text: 'تم تحديث الحالة بنجاح.',
                                    timer: 2000,
                                    showConfirmButton: false
                                });
                            },
                            error: function(xhr) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'خطأ',
                                    text: 'حدث خطأ أثناء محاولة التحديث. حاول مرة أخرى.',
                                });
                                console.error(xhr.responseText);
                                $el.prop('checked', !isChecked);
                            }
                        });
                    } else {
                        $el.prop('checked', !isChecked);
                    }
                });
            });
        });
    </script>
@endsection
