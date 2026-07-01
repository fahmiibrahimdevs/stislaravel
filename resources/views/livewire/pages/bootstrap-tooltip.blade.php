<div>
<section class="section">
          <x-stisla.section-header title="Tooltip">
        <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item">Tooltip</div>
            </div>
    </x-stisla.section-header>

    <div class="section-body">
            <h2 class="section-title">Tooltips</h2>
            <p class="section-lead">
              Examples for adding custom Bootstrap tooltips with CSS and JavaScript using CSS3 for animations and data-attributes for local title storage.
            </p>

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <x-stisla.card title="Directions">
<button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                      On top
                    </button>

                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                      On right
                    </button>

                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Vivamus
                    sagittis lacus vel augue laoreet rutrum faucibus.">
                      On bottom
                    </button>

                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                      On left
                    </button>
</x-stisla.card>
                <x-stisla.card title="Disabled Tooltip">
<span class="d-inline-block" data-toggle="tooltip" data-title="Disabled tooltip">
                      <button class="btn btn-primary pe-none" type="button" disabled>Disabled button</button>
                    </span>
</x-stisla.card>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <x-stisla.card title="Link">
<a href="#" data-toggle="tooltip" title="Tooltip, bro!">Hover me!</a>
</x-stisla.card>
                <x-stisla.card title="Paragraph">
<div class="buttons">
                      <p>Lorem ipsum dolor sit amet, consectetur <b data-toggle="tooltip" title="Hello, this is tooltip.">adipisicing elit</b>, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
</x-stisla.card>
              </div>
            </div>
          </div>
        </section>
</div>