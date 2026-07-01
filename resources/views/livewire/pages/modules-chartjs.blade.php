<div>
<section class="section">
          <x-stisla.section-header title="Chart.JS">
        <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">Chart.js</div>
            </div>
    </x-stisla.section-header>

    <div class="section-body">
            <h2 class="section-title">Chart.js</h2>
            <p class="section-lead">
              We use 'Chart.JS' made by @chartjs. You can check the full documentation <a href="http://www.chartjs.org/">here</a>.
            </p>

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <x-stisla.card title="Line Chart">
<canvas id="myChart"></canvas>
</x-stisla.card>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <x-stisla.card title="Bar Chart">
<canvas id="myChart2"></canvas>
</x-stisla.card>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <x-stisla.card title="Doughnut Chart">
<canvas id="myChart3"></canvas>
</x-stisla.card>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <x-stisla.card title="Pie Chart">
<canvas id="myChart4"></canvas>
</x-stisla.card>
              </div>
            </div>
          </div>
        </section>

@push('js-libraries')
<script src="/assets/modules/chart.js/dist/Chart.min.js"></script>
@endpush

@push('scripts')
<script src="/assets/js/page/modules-chartjs.js"></script>
@endpush
</div>