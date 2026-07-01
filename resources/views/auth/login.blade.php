<x-layouts.auth>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="card border-0" style="border-radius: 12px; box-shadow: 0 20px 40px -10px rgba(0,0,0,0.08), 0 10px 15px -5px rgba(0,0,0,0.04) !important;">
        <div class="card-body p-4">
            <div class="text-center mb-5 mt-3">
                <div class="d-inline-flex align-items-center justify-content-center text-white mb-3" style="width: 80px; height: 80px; border-radius: 18px; background-color: #1e3a8a; box-shadow: 0 8px 16px rgba(30, 58, 138, 0.25);">
                    <i class="fas fa-book-open" style="font-size: 34px;"></i>
                </div>
                <h2 class="font-weight-bold mb-1" style="color: #111827; font-size: 24px; letter-spacing: 0.5px;">Stislaravel</h2>
                <p class="mb-4" style="color: #6b7280; font-size: 13px;">Starter Template Admin Stisla + Laravel + Livewire + Laratrust</p>
                
                <h3 class="font-weight-bold mb-2 mt-4" style="color: #111827; font-size: 26px;">Selamat Datang</h3>
                <p style="color: #6b7280; font-size: 15px;">Masuk ke akun Anda untuk melanjutkan</p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                @csrf
                <div class="form-group">
                    <label for="email" class="font-weight-bold" style="color: #374151;">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" style="border-radius: 8px; padding: 12px 15px; height: auto; border: 1px solid #d1d5db; color: #111827; box-shadow: none;" placeholder="emailanda@stu.pnj.ac.id" name="email" tabindex="1" required autofocus value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="font-weight-bold" style="color: #374151;">Password</label>
                    <div class="position-relative">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" style="border-radius: 8px; padding: 12px 40px 12px 15px; height: auto; border: 1px solid #d1d5db; color: #111827; box-shadow: none;" name="password" tabindex="2" required>
                        <span class="position-absolute" style="right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer; z-index: 10;" onclick="let p = document.getElementById('password'); let i = this.querySelector('i'); if(p.type === 'password') { p.type = 'text'; i.classList.remove('fa-eye'); i.classList.add('fa-eye-slash'); } else { p.type = 'password'; i.classList.remove('fa-eye-slash'); i.classList.add('fa-eye'); }">
                            <i class="fas fa-eye" style="color: #9ca3af;"></i>
                        </span>
                    </div>
                    @error('password')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                        <label class="custom-control-label" for="remember-me" style="color: #4b5563; font-size: 14px; padding-top: 2px;">Ingat saya di perangkat ini</label>
                    </div>
                </div>

                <div class="form-group mt-4 mb-3">
                    <button type="submit" class="btn btn-lg btn-block text-white font-weight-bold" tabindex="4" style="background-color: #1e3a8a; border-radius: 8px; padding: 12px; font-size: 16px; border: none; box-shadow: 0 4px 6px -1px rgba(30, 58, 138, 0.2);">
                        Masuk
                    </button>
                </div>
                
                <div class="text-center mt-3">
                    <span style="color: #6b7280;">Belum punya akun?</span> <a href="{{ route('register') }}" style="color: #1e3a8a; font-weight: 600;">Hubungi Administrator</a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.auth>
