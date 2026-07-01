<div>
<section class="section">
          <x-stisla.section-header title="Sweet Alert">
        <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">Sweet Alert</div>
            </div>
    </x-stisla.section-header>

    <div class="section-body">
            <h2 class="section-title">Sweet Alert</h2>
            <p class="section-lead">
              We use 'Sweet Alert 2' made by 'Tristan Edwards'. You can check the full documentation <a href="https://sweetalert.js.org/">here</a>.
            </p>

            <div class="row">
              <div class="col-12 col-sm-6 col-lg-3">
                <x-stisla.card>
<div class="mb-2">Simple Sweet Alert</div>
                    <button class="btn btn-primary" id="swal-1">Launch</button>
</x-stisla.card>
              </div>
              <div class="col-12 col-sm-6 col-lg-3">
                <x-stisla.card>
<div class="mb-2">Success Message</div>
                    <button class="btn btn-primary" id="swal-2">Launch</button>
</x-stisla.card>
              </div>
              <div class="col-12 col-sm-6 col-lg-3">
                <x-stisla.card>
<div class="mb-2">Warning Message</div>
                    <button class="btn btn-primary" id="swal-3">Launch</button>
</x-stisla.card>
              </div>
              <div class="col-12 col-sm-6 col-lg-3">
                <x-stisla.card>
<div class="mb-2">Info Message</div>
                    <button class="btn btn-primary" id="swal-4">Launch</button>
</x-stisla.card>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-6 col-lg-3">
                <x-stisla.card>
<div class="mb-2">Error Message</div>
                    <button class="btn btn-primary" id="swal-5">Launch</button>
</x-stisla.card>
              </div>
              <div class="col-12 col-sm-6 col-lg-3">
                <x-stisla.card>
<div class="mb-2">Confirmation</div>
                    <button class="btn btn-primary" id="swal-6">Launch</button>
</x-stisla.card>
              </div>
              <div class="col-12 col-sm-6 col-lg-3">
                <x-stisla.card>
<div class="mb-2">Input Text</div>
                    <button class="btn btn-primary" id="swal-7">Launch</button>
</x-stisla.card>
              </div>
              <div class="col-12 col-sm-6 col-lg-3">
                <x-stisla.card>
<div class="mb-2">Auto Hide</div>
                    <button class="btn btn-primary" id="swal-8">Launch</button>
</x-stisla.card>
              </div>
            </div>
          </div>
        </section>

@push('js-libraries')
<script src="/assets/modules/sweetalert/dist/sweetalert.min.js"></script>
@endpush

@push('scripts')
<script src="/assets/js/page/modules-sweetalert.js"></script>
@endpush
</div>