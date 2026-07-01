<div>
<section class="section">
          <x-stisla.section-header title="Vector Map">
        <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">Vector Map</div>
            </div>
    </x-stisla.section-header>

    <div class="section-body">
            <h2 class="section-title">Vector Map</h2>
            <p class="section-lead">
              We use the 'jQuery Vector Map Library' plugin to create vector maps. This plugin is created by @manifestinteractive
            </p>

            <div class="row">
              <div class="col-12">
                <x-stisla.card title="Vector Map">
<div id="visitorMap"></div>
</x-stisla.card>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <x-stisla.card title="Vector Map With Flag Icon">
<div class="alert alert-primary">
                      Click on the map below to change the icon
                    </div>
                    <div class="row align-items-center mb-4">
                      <div class="col-6 text-right">
                        <div class="font-weight-bold">You Choose: </div>
                      </div>
                      <div class="col-6">
                        <span class="flag-icon flag-icon-id flag-icon-shadow" id="flag-icon"></span>
                      </div>
                    </div>
                    <div id="visitorMap2"></div>
</x-stisla.card>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <x-stisla.card title="Indonesian Map">
<div id="visitorMap3"></div>
</x-stisla.card>
              </div>
            </div>
          </div>
        </section>

@push('general-css')
<link rel="stylesheet" href="/assets/modules/izitoast/dist/css/iziToast.min.css">
  <link rel="stylesheet" href="/assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="/assets/modules/flag-icon-css/css/flag-icon.min.css">
@endpush

@push('js-libraries')
<script src="/assets/modules/izitoast/dist/js/iziToast.min.js"></script>
  <script src="/assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="/assets/modules/jqvmap/dist/maps/jquery.vmap.indonesia.js"></script>
@endpush

@push('scripts')
<script src="/assets/js/page/modules-vector-map.js"></script>
@endpush
</div>