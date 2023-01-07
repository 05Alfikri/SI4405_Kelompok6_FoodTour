@include('layouts.layouts')
<br>
<section id="login">
    <div class="container">
        <div class="form-login">
            <p class="login-text" style="font-size: 50px; font-weight: 700; text-align:center">Login</p>
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" class="form-control form-control-lg" name="email" value="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>" style="border-radius: 50px;" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" class="form-control form-control-lg" name="password" value="<?= isset($_COOKIE['password']) ? $_COOKIE['password'] : '' ?>" style="border-radius: 50px;" />
                </div>

                <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="check" name="check" />
                    <label class="form-check-label" for="check">Remember me</label>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-lg" name="loginAd" style="background-color: #4C7972; color: white; border-radius: 50px; padding: 5px 50px;">Login</button>
                    <p class="small fw-bold">Belum punya akun?<a href="{{'register'}}" class="link-danger"> Daftar</a></p>
                </div>
            </form>
        </div>
    </div>
</section>