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
    <a href="#popular" class="btn btn-get-started px-4 mt-4">
      Get started
    </a>
  </header>
  
  <main>
  

    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="portofolio">Portfolio</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti,
          dolorum quasi? Neque consectetur odio placeat inventore perferendis
          quibusdam omnis deleniti.
        </p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="{{ asset("frontend/images/mutasi.jpg") }}"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Lorem, ipsum.</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                  odit atque nam animi dolores itaque.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://media.suara.com/pictures/480x260/2020/04/18/15789-cara-membuat-website.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Lorem, ipsum.</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                  odit atque nam animi dolores itaque.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://www.elsevier.com/__data/assets/image/0004/823261/information-system-supporting-science.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Lorem, ipsum.</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                  odit atque nam animi dolores itaque.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://trinetprimasolusi.net/wp-content/uploads/2019/11/Management-Information-System.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Lorem, ipsum.</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                  odit atque nam animi dolores itaque.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://accounting.binus.ac.id/files/2019/07/KSInformationSystem-1515206840.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Lorem, ipsum.</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                  odit atque nam animi dolores itaque.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://i0.wp.com/quipperhome.wpcomstaging.com/wp-content/uploads/2019/04/45a18-template-image-blog-white-4.png?resize=800%2C533"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Lorem, ipsum.</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                  odit atque nam animi dolores itaque.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- tim -->
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="staff">Our Team</h2>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et deleniti
          quas at magni, iusto voluptates neque corrupti dolorum! Repellat,
          quod.
        </p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4 text-center tim">
            <img
              src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png"
              class="rounded-circle mb-3"
            />
            <h4>John Doe</h4>
            <p>Web Designer</p>
            <p>
              <a href="" class="social"><i class="fab fa-twitter"></i></a>
              <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center tim">
            <img
              src="https://www.kingrosales.com/wp-content/uploads/2018/05/king-rosales-profile-photo-square.jpg"
              class="rounded-circle mb-3"
            />
            <h4>Michael Dell</h4>
            <p>Data Scientist</p>
            <p>
              <a href="" class="social"><i class="fab fa-twitter"></i></a>
              <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center tim">
            <img
              src="https://www.kingrosales.com/wp-content/uploads/2018/05/king-rosales-profile-photo-square.jpg"
              class="rounded-circle mb-3"
            />
            <h4>Paul</h4>
            <p>Network Engineer</p>
            <p>
              <a href="" class="social"><i class="fab fa-twitter"></i></a>
              <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <section class="section-networks" id="networks">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Our Networks</h2>
            <p>
              Companies are trusted us
              <br />
              more than just a trip
            </p>
          </div>
          <div class="col-md-8 text-center">
            <img
              src="frontend/images/partner.png"
              alt="Logo Partner"
              class="img-partner"
            />
          </div>
        </div>
      </div>
    </section>
  
    <section class="section-testimonial-heading" id="testimonialHeading">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>They Are Loving Us</h2>
            <p>
              Moments were giving them
              <br />
              the best experience
            </p>
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
                  “ It was glorious and I could not stop to say wohooo for
                  every single moment Dankeeeeee “
                </p>
              </div>
              <hr />
              <p class="trip-to mt-2">
                Trip to Ubud
              </p>
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
                  “ The trip was amazing and I saw something beautiful in that
                  Island that makes me want to learn more “
                </p>
              </div>
              <hr />
              <p class="trip-to mt-2">
                Trip to Nusa Penida
              </p>
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
                  “ I loved it when the waves was shaking harder — I was
                  scared too “
                </p>
              </div>
              <hr />
              <p class="trip-to mt-2">
                Trip to Karimun Jawa
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
              I Need Help
            </a>
            <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
              Get Started
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection