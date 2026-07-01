<div>
<section class="section">
          <x-stisla.section-header title="Sparkline">
        <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">Sparkline</div>
            </div>
    </x-stisla.section-header>

    <div class="section-body">
            <h2 class="section-title">Sparkline</h2>
            <p class="section-lead">
              We use 'Sparkline' made by 'Gareth Watts'. You can check the full documentation <a href="https://omnipotent.net/jquery.sparkline/">here</a>.
            </p>

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <x-stisla.card title="Line Chart">
<div class="sparkline-inline"></div>
</x-stisla.card>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <x-stisla.card title="Bar Chart">
<div class="sparkline-bar"></div>
</x-stisla.card>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <x-stisla.card title="Line Chart #2">
<div class="sparkline-line"></div>
</x-stisla.card>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <x-stisla.card title="Pie Chart">
<div class="text-center">
                      <div class="sparkline-pie d-inline"></div>
                    </div>
</x-stisla.card>
              </div>
            </div>
          </div>
        </section>

@push('js-libraries')
<script src="/assets/modules/jquery-sparkline/jquery.sparkline.min.js"></script>
@endpush

@push('scripts')
<script src="/assets/js/page/modules-sparkline.js"></script>
@endpush
</div>