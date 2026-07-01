<x-layouts.auth>
    <div class="card border-0" style="border-radius: 12px; box-shadow: 0 20px 40px -10px rgba(0,0,0,0.08), 0 10px 15px -5px rgba(0,0,0,0.04) !important;">
        <div class="card-body p-4">
            <div class="text-center mb-5 mt-3">
                <div class="d-inline-flex align-items-center justify-content-center text-white mb-3" style="width: 80px; height: 80px; border-radius: 18px; background-color: #1e3a8a; box-shadow: 0 8px 16px rgba(30, 58, 138, 0.25);">
                    <i class="fas fa-book-open" style="font-size: 34px;"></i>
                </div>
                <h2 class="font-weight-bold mb-1" style="color: #111827; font-size: 24px; letter-spacing: 0.5px;">Stislaravel</h2>
                <p class="mb-4" style="color: #6b7280; font-size: 13px;">Starter Template Admin Stisla + Laravel + Livewire + Laratrust</p>
                
                <h3 class="font-weight-bold mb-2 mt-4" style="color: #111827; font-size: 26px;">Daftar Akun</h3>
                <p style="color: #6b7280; font-size: 15px;">Buat akun baru untuk mulai menggunakan sistem</p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate="">
                @csrf
                
                <div class="form-group">
                    <label for="name" class="font-weight-bold" style="color: #374151;">Nama Lengkap</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" style="border-radius: 8px; padding: 12px 15px; height: auto; border: 1px solid #d1d5db; color: #111827; box-shadow: none;" placeholder="Masukkan nama Anda" name="name" tabindex="1" required autofocus value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email" class="font-weight-bold" style="color: #374151;">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" style="border-radius: 8px; padding: 12px 15px; height: auto; border: 1px solid #d1d5db; color: #111827; box-shadow: none;" placeholder="emailanda@stu.pnj.ac.id" name="email" tabindex="2" required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="role" class="font-weight-bold" style="color: #374151;">Pilih Role (Laratrust)</label>
                    <select id="role" name="role" class="form-control @error('role') is-invalid @enderror" style="border-radius: 8px; height: 50px; border: 1px solid #d1d5db; color: #111827; box-shadow: none;" required tabindex="3">
                        <option value="" disabled selected>Pilih tipe akun Anda</option>
                        <option value="admin">Administrator</option>
                        <option value="user">Pengguna Biasa (User)</option>
                    </select>
                    @error('role')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="password" class="font-weight-bold d-block" style="color: #374151;">Password</label>
                        <div class="position-relative">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" style="border-radius: 8px; padding: 12px 40px 12px 15px; height: auto; border: 1px solid #d1d5db; color: #111827; box-shadow: none;" name="password" tabindex="4" required autocomplete="new-password">
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
                    <div class="form-group col-6">
                        <label for="password_confirmation" class="font-weight-bold d-block" style="color: #374151;">Konfirmasi</label>
                        <div class="position-relative">
                            <input id="password_confirmation" type="password" class="form-control" style="border-radius: 8px; padding: 12px 40px 12px 15px; height: auto; border: 1px solid #d1d5db; color: #111827; box-shadow: none;" name="password_confirmation" tabindex="5" required autocomplete="new-password">
                            <span class="position-absolute" style="right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer; z-index: 10;" onclick="let p = document.getElementById('password_confirmation'); let i = this.querySelector('i'); if(p.type === 'password') { p.type = 'text'; i.classList.remove('fa-eye'); i.classList.add('fa-eye-slash'); } else { p.type = 'password'; i.classList.remove('fa-eye-slash'); i.classList.add('fa-eye'); }">
                                <i class="fas fa-eye" style="color: #9ca3af;"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-4 mb-3">
                    <button type="submit" class="btn btn-lg btn-block text-white font-weight-bold" tabindex="6" style="background-color: #1e3a8a; border-radius: 8px; padding: 12px; font-size: 16px; border: none; box-shadow: 0 4px 6px -1px rgba(30, 58, 138, 0.2);">
                        Daftar Sekarang
                    </button>
                </div>
                
                <div class="text-center mt-3">
                    <span style="color: #6b7280;">Sudah punya akun?</span> <a href="{{ route('login') }}" style="color: #1e3a8a; font-weight: 600;">Masuk di sini</a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.auth>
