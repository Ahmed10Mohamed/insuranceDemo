@extends('company-panel.layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y ">

  

    <!-- Bottom Section -->
    <div class="row g-6">

     
        <!-- Account -->
        <div class="col-xl-6 col-md-6">
            <div class="card h-100">
                <div class="card-header">
                    <h5>معلومات الحساب</h5>
                </div>
                <div class="card-body text-center">
                    <h6>{{ admin()->fullName }}</h6>
                    <p>{{ admin()->userName }}</p>
                    <p>{{ admin()->phone }}</p>
                    <span class="badge bg-success">نشط</span>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection

   <!-- DataTable with Buttons -->
