<div>
<section class="section">
          <x-stisla.section-header title="Calendar">
        <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">Calendar</div>
            </div>
    </x-stisla.section-header>

    <div class="section-body">
            <h2 class="section-title">Calendar</h2>
            <p class="section-lead">
              We use 'Full Calendar' made by @fullcalendar. You can check the full documentation <a href="https://fullcalendar.io/">here</a>.
            </p>

            <div class="row">
              <div class="col-12">
                <x-stisla.card title="Calendar">
<div class="fc-overflow">
                      <div id="myEvent"></div>
                    </div>
</x-stisla.card>
              </div>
            </div>
          </div>
        </section>

@push('general-css')
<link rel="stylesheet" href="/assets/modules/fullcalendar/dist/fullcalendar.min.css">
@endpush

@push('js-libraries')
<script src="/assets/modules/fullcalendar/dist/fullcalendar.min.js"></script>
@endpush

@push('scripts')
<script src="/assets/js/page/modules-calendar.js"></script>
@endpush
</div>