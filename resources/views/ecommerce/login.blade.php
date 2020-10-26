@extends('templates/base')
<!-- @section('title','Home') -->
@section('utama')
    <!--================login_part Area =================-->
   <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>

                  
                  <form class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="col-md-12 form-group">
                    <div class="creat_account d-flex align-items-center">
                        <input type="checkbox" id="f-option" name="selector">
                        <label for="f-option">Ingat Saya</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login </button>
                  </form>
                  <hr>
                  <div class="ant-row">
                      <div class>
                          <a href="#" class="ant-btn my-2 btn-block facebook-color">
                              <span type="submit" class="btn btn-primary btn-user btn-block">
                      Masuk Dengan Facebook </span>
                          </a>
                      </div>
                  </div>
                  <div class="ant-row">
                      <div class style="text-align: center; margin: 10px;">
                          <span>Lupa Kata Sandi?</span>
                          <span>
                              <u class="font-weight-bold"> <a href="/lupa">Klik Disini</a></u>
                          </span>
                      </div>
                  </div>
                  <div class="ant-row">
                      <div class style="text-align: center; margin: 10px;">
                          <span>Belum Punya Akun?</span>
                          <span>
                              <u class="font-weight-bold"> <a href="/daftar">Daftar Disini</a></u>
                          </span>
                      </div>
                  </div>
                  <div class="footer-tittle">
                                 <div class="footer-pera">
                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
    <!--================login_part end =================-->
<!-- JS here -->

@endsection