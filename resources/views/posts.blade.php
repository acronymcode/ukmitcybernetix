@extends('layouts.main')

@section('container')
  <!-- Banner -->
  <section class="struktural-dokumentasi">
    <div class="row justify-content-center">
      <div class="col-sm-10">
        <div class="card shadow card-blog">
          <div class="card-body ">
            <a href="#" class="text-profile p-2 text-light">Profile</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHO -->
  <section class="blog posts">
    <h3 class="text-center fw-bold mb-5">New Articel</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img class="img-fluid" src="asset/img/articel/1.jpg " class="card-img-top" alt="..." />
          <a href="">
            <div class="card-footer">
              <small class="">Dasar Dasar Perintah Terminal Linux Ubuntu</small>
            </div>
          </a>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img class="img-fluid" src="asset/img/articel/2.jpg" class="card-img-top" alt="..." />
          <a href="">
            <div class="card-footer">
              <small class="">Trik SuperWeb Development</small>
            </div>
          </a>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img class="img-fluid" src="asset/img/articel/3.jpg" class="card-img-top" alt="..." />
          <a href="">
            <div class="card-footer">
              <small class="">Memaham konsep OOP pada Java</small>
            </div>
          </a>
        </div>
      </div>
    </div>

    <h3 class="text-center fw-bold mb-5 mt-5">LifeHack Articel</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img class="img-fluid" src="asset/img/articel/1.jpg " class="card-img-top" alt="..." />
          <a href="">
            <div class="card-footer">
              <small class="">Dasar Dasar Perintah Terminal Linux Ubuntu</small>
            </div>
          </a>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img class="img-fluid" src="asset/img/articel/2.jpg" class="card-img-top" alt="..." />
          <a href="">
            <div class="card-footer">
              <small class="">Trik SuperWeb Development</small>
            </div>
          </a>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img class="img-fluid" src="asset/img/articel/3.jpg" class="card-img-top" alt="..." />
          <a href="">
            <div class="card-footer">
              <small class="">Memaham konsep OOP pada Java</small>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
    
@endsection

