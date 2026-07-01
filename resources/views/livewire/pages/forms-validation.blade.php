<div>
<section class="section">
          <x-stisla.section-header title="Form Validation">
        <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Form Validation</div>
            </div>
    </x-stisla.section-header>

    <div class="section-body">
            <h2 class="section-title">Form Validation</h2>
            <p class="section-lead">
              Form validation using default from Bootstrap 4
            </p>

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <x-stisla.card title="Default Validation">
<x-slot name="footer">

                      <button class="btn btn-primary">Submit</button>
                    
</x-slot>


                  <form>
                    
                    
                      <x-stisla.input type="text" label="Your Name" required="" />
                      <x-stisla.input type="email" label="Email" required="" />
                      <x-stisla.input type="email" label="Subject" />
                      <div class="form-group mb-0">
                        <label>Message</label>
                        <textarea class="form-control" required=""></textarea>
                      </div>
                    
                    
                  </form>
</x-stisla.card>
                <x-stisla.card title="JavaScript Validation">
<x-slot name="footer">

                      <button class="btn btn-primary">Submit</button>
                    
</x-slot>


                  <form class="needs-validation" novalidate="">
                    
                    
                      <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" class="form-control" required="">
                        <div class="invalid-feedback">
                          What's your name?
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" required="">
                        <div class="invalid-feedback">
                          Oh no! Email is invalid.
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Subject</label>
                        <input type="email" class="form-control">
                        <div class="valid-feedback">
                          Good job!
                        </div>
                      </div>
                      <div class="form-group mb-0">
                        <label>Message</label>
                        <textarea class="form-control" required=""></textarea>
                        <div class="invalid-feedback">
                          What do you wanna say?
                        </div>
                      </div>
                    
                    
                  </form>
</x-stisla.card>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <x-stisla.card title="Server-side Validation">
<x-slot name="footer">

                      <button class="btn btn-primary">Submit</button>
                    
</x-slot>


                  <form>
                    
                    
                      <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" class="form-control is-valid" value="Rizal Fakhri" required="">
                        <div class="valid-feedback">
                          Good job!
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control is-invalid" required="" value="rizal@fakhri">
                        <div class="invalid-feedback">
                          Oh no! Email is invalid.
                        </div>
                      </div>
                      <x-stisla.input type="email" label="Subject" />
                      <div class="form-group mb-0">
                        <label>Message</label>
                        <textarea class="form-control is-invalid" required="">Hello, i'm handsome!</textarea>
                        <div class="invalid-feedback">
                          Oh no! You entered an inappropriate word.
                        </div>
                      </div>
                    
                    
                  </form>
</x-stisla.card>
                <x-stisla.card title="JavaScript Validation (Horizontal Form)">
<x-slot name="footer">

                      <button class="btn btn-primary">Submit</button>
                    
</x-slot>


                  <form class="needs-validation" novalidate="">
                    
                    
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Your Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" required="">
                          <div class="invalid-feedback">
                            What's your name?
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" required="">
                          <div class="invalid-feedback">
                            Oh no! Email is invalid.
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Subject</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control">
                          <div class="valid-feedback">
                            Good job!
                          </div>
                        </div>
                      </div>
                      <div class="form-group mb-0 row">
                        <label class="col-sm-3 col-form-label">Message</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" required=""></textarea>
                          <div class="invalid-feedback">
                            What do you wanna say?
                          </div>
                        </div>
                      </div>
                    
                    
                  </form>
</x-stisla.card>
              </div>
            </div>
          </div>
        </section>
</div>