<div>
<section class="section">
          <x-stisla.section-header title="Toastr">
        <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">Toastr</div>
            </div>
    </x-stisla.section-header>

    <div class="section-body">
            <h2 class="section-title">Toastr</h2>
            <p class="section-lead">
              We use 'iziToast' made by @Dolce. You can check the full documentation <a href="https://izitoast.marcelodolza.com/">here</a>.
            </p>
            <div class="row">
              <div class="col-12 col-sm-6 col-lg-3">
                <x-stisla.card>
<div class="mb-2">Info Message</div>
                    <button class="btn btn-primary" id="toastr-1">Launch</button>
</x-stisla.card>
              </div>
              <div class="col-12 col-sm-6 col-lg-3">
                <x-stisla.card>
<div class="mb-2">Success Message</div>
                    <button class="btn btn-primary" id="toastr-2">Launch</button>
</x-stisla.card>
              </div>
              <div class="col-12 col-sm-6 col-lg-3">
                <x-stisla.card>
<div class="mb-2">Warning Message</div>
                    <button class="btn btn-primary" id="toastr-3">Launch</button>
</x-stisla.card>
              </div>
              <div class="col-12 col-sm-6 col-lg-3">
                <x-stisla.card>
<div class="mb-2">Error Message</div>
                    <button class="btn btn-primary" id="toastr-4">Launch</button>
</x-stisla.card>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-6 col-lg-3">
                <x-stisla.card>
<div class="mb-2">Toastr Right Bottom</div>
                    <button class="btn btn-primary" id="toastr-5">Launch</button>
</x-stisla.card>
              </div>
              <div class="col-12 col-sm-6 col-lg-3">
                <x-stisla.card>
<div class="mb-2">Toastr Center Bottom</div>
                    <button class="btn btn-primary" id="toastr-6">Launch</button>
</x-stisla.card>
              </div>
              <div class="col-12 col-sm-6 col-lg-3">
                <x-stisla.card>
<div class="mb-2">Toastr Left Bottom</div>
                    <button class="btn btn-primary" id="toastr-7">Launch</button>
</x-stisla.card>
              </div>
              <div class="col-12 col-sm-6 col-lg-3">
                <x-stisla.card>
<div class="mb-2">Toastr Top Center</div>
                    <button class="btn btn-primary" id="toastr-8">Launch</button>
</x-stisla.card>
              </div>
            </div>
          </div>
        </section>

@push('general-css')
<link rel="stylesheet" href="/assets/modules/izitoast/dist/css/iziToast.min.css">
@endpush

@push('js-libraries')
<script src="/assets/modules/izitoast/dist/js/iziToast.min.js"></script>
@endpush

@push('scripts')
<script src="/assets/js/page/modules-toastr.js"></script>
@endpush
</div>