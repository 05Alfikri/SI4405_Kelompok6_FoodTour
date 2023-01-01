@include('layouts.layouts')

<br>
<section id="register">
    <div class="container">
                <p class="login-text" style="font-size: 50px; font-weight: 700; text-align:center">Registrasi</p>
                    <form action="{{ url('/register')}}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="mb-3">
                            <label class="form-label" for="name">Name lengkap</label>
                            <input type="name" id="name" class="form-control form-control-lg" name="name" required style="border-radius: 50px;" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label " for="email">Email</label>
                            <input type="email" id="email" class="form-control form-control-lg" name="email" required style="border-radius: 50px;" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" class="form-control form-control-lg" name="password"
                                required style="border-radius: 50px;" />
                        </div>

                        <div class="mb-3">
                            <div class="form-outline mb-3">
                                <label class="form-label" for="password2">konfirmasi password</label>
                                <input type="password" id="password2" class="form-control form-control-lg"
                                    name="password2" required style="border-radius: 50px;" />
                            </div>

                            <div class="text-center">
                                <button type="submit" name="daftar" class="btn btn-lg" style="background-color: #4C7972; color: white; border-radius: 50px; padding: 5px 50px;">Registrasi</button>
                                <p class="small fw-bold">sudah punya akun? <a href="{{ 'login' }}"
                                        class="link-danger"> Login</a></p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>