<div>
<section class="section">
          <x-stisla.section-header title="Geolocation">
        <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Google Maps</a></div>
              <div class="breadcrumb-item">Geolocation</div>
            </div>
    </x-stisla.section-header>

    <div class="section-body">
            <h2 class="section-title">Geolocation</h2>
            <p class="section-lead">
              Here is a simple example using the map, we use the plugin <code>gmaps.js</code> made by <a href="https://github.com/hpneo" target="_blank">@hpneo</a>. You can learn more about this plugin <a href="https://github.com/hpneo/gmaps" target="_blank">here</a>.
            </p>

            <div class="row">
              <div class="col-12">
                <x-stisla.card title="Geolocation">
<div class="alert alert-info">
                      In this example there will be a marker on the map located in accordance with your position. Click 'allow' in the popup that appears in your browser.
                    </div>
                    <div id="map" data-height="400"></div>
</x-stisla.card>
              </div>
            </div>
          </div>
        </section>

@push('js-libraries')
<script src="http://maps.google.com/maps/api/js?key=AIzaSyB55Np3_WsZwUQ9NS7DP-HnneleZLYZDNw&amp;sensor=true"></script>
  <script src="/assets/modules/gmaps/gmaps.min.js"></script>
@endpush

@push('scripts')
<script src="/assets/js/page/gmaps-geolocation.js"></script>
@endpush
</div>