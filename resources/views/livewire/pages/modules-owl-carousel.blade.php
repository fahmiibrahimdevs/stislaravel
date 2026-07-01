<div>
<section class="section">
          <x-stisla.section-header title="Owl Carousel">
        <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">Owl Carousel</div>
            </div>
    </x-stisla.section-header>

    <div class="section-body">
            <h2 class="section-title">Owl Carousel</h2>
            <p class="section-lead">Display multiple images alternately within a few seconds.</p>

            <div class="row">
              <div class="col-12 col-sm-6 col-lg-6">
                <x-stisla.card title="Sliders">
<div class="owl-carousel owl-theme slider" id="slider1">
                      <div><img alt="image" src="../assets/img/news/img01.jpg"></div>
                      <div><img alt="image" src="../assets/img/news/img08.jpg"></div>
                      <div><img alt="image" src="../assets/img/news/img10.jpg"></div>
                      <div><img alt="image" src="../assets/img/news/img09.jpg"></div>
                    </div>
</x-stisla.card>
              </div>
              <div class="col-12 col-sm-6 col-lg-6">
                <x-stisla.card title="Sliders (Caption)">
<div class="owl-carousel owl-theme slider" id="slider2">
                      <div><img alt="image" src="../assets/img/news/img01.jpg">
                        <div class="slider-caption">
                          <div class="slider-title">Image 1</div>
                          <div class="slider-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.</div>
                        </div>
                      </div>
                      <div><img alt="image" src="../assets/img/news/img08.jpg">
                        <div class="slider-caption">
                          <div class="slider-title">Image 2</div>
                          <div class="slider-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.</div>
                        </div>
                      </div>
                      <div><img alt="image" src="../assets/img/news/img10.jpg">
                        <div class="slider-caption">
                          <div class="slider-title">Image 3</div>
                          <div class="slider-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.</div>
                        </div>
                      </div>
                      <div><img alt="image" src="../assets/img/news/img09.jpg">
                        <div class="slider-caption">
                          <div class="slider-title">Image 4</div>
                          <div class="slider-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.</div>
                        </div>
                      </div>
                    </div>
</x-stisla.card>
              </div>
            </div>
          </div>
        </section>

@push('general-css')
<link rel="stylesheet" href="/assets/modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="/assets/modules/owl.carousel/dist/assets/owl.theme.default.min.css">
@endpush

@push('js-libraries')
<script src="/assets/modules/owl.carousel/dist/owl.carousel.min.js"></script>
@endpush

@push('scripts')
<script src="/assets/js/page/modules-slider.js"></script>
@endpush
</div>