<div>
<section class="section">
          <x-stisla.section-header title="Popover">
        <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item">Popover</div>
            </div>
    </x-stisla.section-header>

    <div class="section-body">
            <h2 class="section-title">Popovers</h2>
            <p class="section-lead">
              Examples for adding Bootstrap popovers, like those found in iOS, to any element on your site.
            </p>

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <x-stisla.card title="Directions">
<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                      On top
                    </button>

                    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                      On right
                    </button>

                    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                    sagittis lacus vel augue laoreet rutrum faucibus.">
                      On bottom
                    </button>

                    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                      On left
                    </button>
</x-stisla.card>
                <x-stisla.card title="Disabled Popover">
<span class="d-inline-block" data-toggle="popover" data-content="Disabled popover">
                      <button class="btn btn-primary pe-none" type="button" disabled>Disabled button</button>
                    </span>
</x-stisla.card>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <x-stisla.card title="Dismiss">
<a tabindex="0" class="btn btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
</x-stisla.card>
                <x-stisla.card title="Link">
<div class="buttons">
                      <p>Lorem ipsum dolor sit amet, consectetur <a href="javascript:;" data-toggle="popover" title="Popover Title" data-content="Hello, this is link." data-trigger="focus">adipisicing elit</a>, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
</x-stisla.card>
              </div>
            </div>
          </div>
        </section>
</div>