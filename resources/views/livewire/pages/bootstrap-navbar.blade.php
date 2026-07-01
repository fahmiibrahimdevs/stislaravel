<div>
<section class="section">
          <x-stisla.section-header title="Navbar">
        <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item">Navbar</div>
            </div>
    </x-stisla.section-header>

    <div class="section-body">
            <h2 class="section-title">Navbar</h2>
            <p class="section-lead">
              Examples for Bootstrap’s powerful, responsive navigation header, the navbar. Includes support for branding, navigation, and more, including support for our collapse plugin.
            </p>

            <div class="row">
              <div class="col-12">
                <x-stisla.card title="Brand">
<nav class="navbar bg-primary">
                      <a class="navbar-brand" href="#">My App</a>
                    </nav>
</x-stisla.card>
                <x-stisla.card title="Items">
<nav class="navbar navbar-expand-lg bg-primary">
                      <a class="navbar-brand" href="#">My App</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                          </li>
                        </ul>
                      </div>
                    </nav>
</x-stisla.card>
              </div>
              <div class="col-12">
                <x-stisla.card title="Form">
<nav class="navbar bg-primary">
                      <a class="navbar-brand" href="#">My App</a>
                      <form class="form-inline">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                      </form>
                    </nav>
</x-stisla.card>
                <x-stisla.card title="Text">
<nav class="navbar navbar-expand-lg bg-primary">
                      <a class="navbar-brand" href="#">My App</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                          </li>
                        </ul>
                        <span class="navbar-text">
                          Navbar text with an inline element
                        </span>
                      </div>
                    </nav>
</x-stisla.card>
              </div>
            </div>
          </div>
        </section>
</div>