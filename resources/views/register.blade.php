
@extends('admin_template')

@section('title')
ورود | ثبت‌نام
@endsection

@section('content')


<body>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column" style="margin-right: 60%;">
              <div class="card card-plain mt-4">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-green text-gradient">خوش آمدید</h3>
                </div>
                <div class="card-body">
                  <form role="form">
                    <label>نام</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="" aria-label="Email">
                    </div>
                    <label>شماره‌ موبایل</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="" aria-label="Email">
                    </div>
                    <label>ایمیل</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="" aria-label="Email" aria-describedby="email-addon">
                    </div>
                    <label>کلمه عبور</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="" aria-label="Password" aria-describedby="password-addon">
                    </div>
                    <label>تکرار کلمه عبور</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="" aria-label="Password" aria-describedby="password-addon">
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn bg-gradient-green w-100 mt-4 mb-0">ثبت‌ نام</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    قبلا ثبت‌ نام کرده‌ام
                  <a href="/login" class="text-green text-gradient font-weight-bold">ورود به حساب</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('/img/grocery-banner-1.jpeg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
          درباره ما
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
          تماس با ما
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
          سوالات متداول
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
          راهنما
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
          خانه
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
              &copy; All Rights Reserved. Designed
              by
              <a class="text-green text-gradient" href="https://www.linkedin.com/in/maryamboneh/">Maryam Boneh</a>
          </p>
        </div>
      </div>
    </div>
  </footer>

@endsection
