@extends('layouts.app')

@section('title')
MCloud Simple Solution
@endsection

@section('content')
    <!-- Header -->
<header class="text-center">
    <h1>
      Everyone Loves Business
    </h1>
    <p class="mt-3">
      We Make The Best Solutions For Your Need
    </p>
  </header>
  
  <main>
  

    {{-- about --}}
    <section class="section-about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h2>About Us</h2>
            <p style="font-weight: bold;">MCloud Simple Solution</p>
            <p>Sebuah perusahaan jasa website profesional yang sudah banyak dipercaya oleh berbagai macam jenis usaha,untuk membantu memasarkan produk maupun jasa, untuk membantu digital marketing agency. Jaminan kedisiplinan, kualitas, jujur, adalah target utama kami.</p>
          </div>
          <div class="col-md-5 text-center">
            <img
              src="frontend/images/about.jpg"
            />
          </div>
        </div>
      </div>
    </section>

    {{-- portfolio --}}
    <div class="container-fluid pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="portofolio">Portfolio</h2>
        <div class="row pt-3 gx-4 gy-4">
          <div class="col-md-4 py-2">
            <div class="card crop-img">
              <img
              src="{{ asset("frontend/images/mutasi.jpg") }}"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Mutasi Security</h5>
                <p class="card-text">
                  Aplikasi point of sales yang di dalamnya terdapat data anggota, data produk, data transaksi, data pengguna dan pengolahan data laporan. Sehingga dapat memudahkan kasir dalam bertransaksi dengan pelanggan. 
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 py-2">
            <div class="card crop-img">
              <img
                src="{{ asset("frontend/images/laravel.jpg") }}"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Point Of Sales</h5>
                <p class="card-text">
                  Aplikasi point of sales yang di dalamnya terdapat data anggota, data produk, data transaksi, data pengguna dan pengolahan data laporan. Sehingga dapat memudahkan kasir dalam bertransaksi dengan pelanggan. 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-2">
            <div class="card crop-img">
              <img
                src="{{ asset("frontend/images/php.jpg") }}"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Toko Komputer</h5>
                <p class="card-text">
                  Aplikasi point of sales yang di dalamnya terdapat data anggota, data produk, data transaksi, data pengguna dan pengolahan data laporan. Sehingga dapat memudahkan kasir dalam bertransaksi dengan pelanggan. 
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 py-2">
            <div class="card crop-img">
              <img
              src="{{ asset("frontend/images/mutasi.jpg") }}"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Mutasi Security</h5>
                <p class="card-text">
                  Aplikasi point of sales yang di dalamnya terdapat data anggota, data produk, data transaksi, data pengguna dan pengolahan data laporan. Sehingga dapat memudahkan kasir dalam bertransaksi dengan pelanggan. 
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 py-2">
            <div class="card crop-img">
              <img
              src="{{ asset("frontend/images/laravel.jpg") }}"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Mutasi Security</h5>
                <p class="card-text">
                  Aplikasi point of sales yang di dalamnya terdapat data anggota, data produk, data transaksi, data pengguna dan pengolahan data laporan. Sehingga dapat memudahkan kasir dalam bertransaksi dengan pelanggan. 
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 py-2">
            <div class="card crop-img">
              <img
              src="{{ asset("frontend/images/php.jpg") }}"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Mutasi Security</h5>
                <p class="card-text">
                  Aplikasi point of sales yang di dalamnya terdapat data anggota, data produk, data transaksi, data pengguna dan pengolahan data laporan. Sehingga dapat memudahkan kasir dalam bertransaksi dengan pelanggan. 
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    {{-- article --}}
    <div class="container-fluid pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="article">Article</h2>
        <div class="row pt-3 gx-4 gy-4">
          <div class="col-md-4 py-2">
            <div class="card crop-img">
              <img
              src="{{ asset("frontend/images/mutasi.jpg") }}"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Mutasi Security</h5>
                <p class="card-text">
                  Aplikasi point of sales yang di dalamnya terdapat data anggota, data produk, data transaksi, data pengguna dan pengolahan data laporan. Sehingga dapat memudahkan kasir dalam bertransaksi dengan pelanggan. 
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 py-2">
            <div class="card crop-img">
              <img
                src="{{ asset("frontend/images/laravel.jpg") }}"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Point Of Sales</h5>
                <p class="card-text">
                  Aplikasi point of sales yang di dalamnya terdapat data anggota, data produk, data transaksi, data pengguna dan pengolahan data laporan. Sehingga dapat memudahkan kasir dalam bertransaksi dengan pelanggan. 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-2">
            <div class="card crop-img">
              <img
                src="{{ asset("frontend/images/php.jpg") }}"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Toko Komputer</h5>
                <p class="card-text">
                  Aplikasi point of sales yang di dalamnya terdapat data anggota, data produk, data transaksi, data pengguna dan pengolahan data laporan. Sehingga dapat memudahkan kasir dalam bertransaksi dengan pelanggan. 
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 py-2">
            <div class="card crop-img">
              <img
              src="{{ asset("frontend/images/mutasi.jpg") }}"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Mutasi Security</h5>
                <p class="card-text">
                  Aplikasi point of sales yang di dalamnya terdapat data anggota, data produk, data transaksi, data pengguna dan pengolahan data laporan. Sehingga dapat memudahkan kasir dalam bertransaksi dengan pelanggan. 
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 py-2">
            <div class="card crop-img">
              <img
              src="{{ asset("frontend/images/laravel.jpg") }}"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Mutasi Security</h5>
                <p class="card-text">
                  Aplikasi point of sales yang di dalamnya terdapat data anggota, data produk, data transaksi, data pengguna dan pengolahan data laporan. Sehingga dapat memudahkan kasir dalam bertransaksi dengan pelanggan. 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-2">
            <div class="card crop-img">
              <img
              src="{{ asset("frontend/images/php.jpg") }}"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Mutasi Security</h5>
                <p class="card-text">
                  Aplikasi point of sales yang di dalamnya terdapat data anggota, data produk, data transaksi, data pengguna dan pengolahan data laporan. Sehingga dapat memudahkan kasir dalam bertransaksi dengan pelanggan. 
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    {{-- testimonial --}}
    <section class="section-testimonial-heading" id="testimonialHeading">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>Testimonial</h2>
          </div>
        </div>
      </div>
    </section>
  
    <section
      class="section section-testimonial-content"
      id="testimonialContent"
    >
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testiominal-content">
                <img
                  src="frontend/images/testimonial-1.png"
                  alt="User"
                  class="mb-4 rounded-circle"
                />
                <h3 class="mb-4">Angga Risky</h3>
                <p class="testimonial">
                  “ Sangat Memuaskan dan admin nya sangat ramah “
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testiominal-content">
                <img
                  src="frontend/images/testimonial-2.png"
                  alt="User"
                  class="mb-4 rounded-circle"
                />
                <h3 class="mb-4">Shayna</h3>
                <p class="testimonial">
                  “ Sistem yang dikembangkan MCloud Simple Solution sesuai yang kami butuhkan, sekarang pelaporan sudah bisa online. Untuk pelayananya juga sangat bagus. “
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testiominal-content">
                <img
                  src="frontend/images/testimonial-3.png"
                  alt="User"
                  class="mb-4 rounded-circle"
                />
                <h3 class="mb-4">Shabrina</h3>
                <p class="testimonial">
                  “ Sesuai dengan kebutuhan “
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    {{-- our team --}}
    <section class="section-team-heading" id="teamHeading">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>Our Team</h2>
          </div>
        </div>
      </div>
    </section>
  
    <section
      class="section section-team-content"
      id="teamContent"
    >
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-team text-center">
              <div class="testiominal-content">
                <h3 class="mb-4">Angga Risky</h3>
                <img
                  src="frontend/images/testimonial-2.png"
                  alt="User"
                  class="mb-4 rounded-circle"
                />
                <p class="team">
                  - Programmer -
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-team text-center">
              <div class="testiominal-content">
                <h3 class="mb-4">Shayna</h3>
                <img
                  src="frontend/images/testimonial-3.png"
                  alt="User"
                  class="mb-4 rounded-circle"
                />
                <p class="team">
                  - Designer -
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-team text-center">
              <div class="testiominal-content">
                <h3 class="mb-4">Shabrina</h3>
                <img
                  src="frontend/images/testimonial-1.png"
                  alt="User"
                  class="mb-4 rounded-circle"
                />
                <p class="team">
                  - Data Science -
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- wa --}}
    <div style="position:fixed;right:20px;bottom:20px;z-index:3;">
      <a style="font-weight: bold;font-family:Georgia, 'Times New Roman', Times, serif;" href="https://api.whatsapp.com/send?phone=+6285655234936&text=Halo,%20Selamat%20datang%20di%20Website%20MCloud%20Simple%20Solution%3F" target="_blank">
          <button style="background:#32C03C;vertical-align:center;height:36px;border-radius:5px;border:0;color:white;">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
    </svg> Whatsapp Kami</button></a>
    </div>

  </main>
@endsection