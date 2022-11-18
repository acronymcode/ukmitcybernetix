@extends('layouts.main')

@section('container')
  <!-- Banner -->
  <section>
    <div class="row justify-content-center text-center banner">
      <div class="col-lg-5 col-md-12 col-sm-12 text-center text-lg-start kata">
        <h3 class="fs-2 fw-bold">
          Unit Kegiatan Mahasiswa<br />
          IT CYBERNETIX
        </h3>
        <p class="upi fw-bold">Universitas Putra Indonesia "YPTK"</p>
        <p class="desc fw-light mt-4">
          Wadah pemberdayaan mahasiswa <br />
          yang berfokus membangun keterampilan <br />
          dalam mengenal dunia teknologi
        </p>
        <div class="row btn-banner-wrapper">
          <div class="col-md-6 mb-2">
            <a href="/struktural">
              <button class="btn btn-banner kenali" type="submit">Kenali Kami</button>
            </a>
          </div>
          <div class="col-md-6 mb-2">
            <a href="/recruitment">
              <button class="btn btn-dark btn-banner gabung" type="submit">Gabung</button>
              </a>
          </div>
        </div>
      </div>
      <div class="img-banner col-lg-5 col-md-12">
        <img src="asset/img/banner.svg" alt="" />
      </div>
    </div>
  </section>

  <!-- WHY -->
  <section class="devisi">
    <a class="link" href="">why?</a>
    <p class="title fs-5 fw-bold">
      Unit Kegiatan Mahasiswa <br />
      Dengan Devisi Standar Industri
    </p>
    <div class="row">
      <div class="col-lg-6 col-sm-12 text-center text-lg-start text-md-start mb-4">
        <div class="card border-0 card-devisi">
          <div class="card-body">
            <div class="row justify-content-center p-3">
              <div class="col-lg-9 mb-2">
                <h5 class="card-title mb-3 fw-bold">Programming</h5>
                <p class="card-text">Pengembangan Sistem Perangkat Lunak Website dan Mobile</p>
              </div>
              <div class="col-lg-3 text-center">
                <img src="asset/img/devisi/software.svg" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 text-center text-lg-start text-md-start mb-4">
        <div class="card border-0 card-devisi">
          <div class="card-body">
            <div class="row justify-content-center p-3">
              <div class="col-lg-9 mb-2">
                <h5 class="card-title mb-3 fw-bold">UI & UX Design</h5>
                <p class="card-text">Pengembangan Sistem Perangkat Lunak Website dan Mobile</p>
              </div>
              <div class="col-lg-3 text-center">
                <img src="asset/img/devisi/software.svg" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 text-center text-lg-start text-md-start mb-4">
        <div class="card border-0 card-devisi">
          <div class="card-body">
            <div class="row justify-content-center p-3">
              <div class="col-lg-9 mb-2">
                <h5 class="card-title mb-3 fw-bold">Operation System</h5>
                <p class="card-text">Pengembangan Sistem Perangkat Lunak Website dan Mobile</p>
              </div>
              <div class="col-lg-3 text-center">
                <img src="asset/img/devisi/software.svg" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 text-center text-lg-start text-md-start mb-4">
        <div class="card border-0 card-devisi">
          <div class="card-body">
            <div class="row justify-content-center p-3">
              <div class="col-lg-9 mb-2">
                <h5 class="card-title mb-3 fw-bold">Multimedia</h5>
                <p class="card-text">Pengembangan Sistem Perangkat Lunak Website dan Mobile</p>
              </div>
              <div class="col-lg-3 text-center">
                <img src="asset/img/devisi/software.svg" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 text-center text-lg-start text-md-start mb-4">
        <div class="card border-0 card-devisi">
          <div class="card-body">
            <div class="row justify-content-center p-3">
              <div class="col-lg-9 mb-2">
                <h5 class="card-title mb-3 fw-bold">Networking</h5>
                <p class="card-text">Pengembangan Sistem Perangkat Lunak Website dan Mobile</p>
              </div>
              <div class="col-lg-3 text-center">
                <img src="asset/img/devisi/software.svg" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 text-center text-lg-start text-md-start mb-4">
        <div class="card border-0 card-devisi">
          <div class="card-body">
            <div class="row justify-content-center p-3">
              <div class="col-lg-9 mb-2">
                <h5 class="card-title mb-3 fw-bold">Hardware</h5>
                <p class="card-text">Pengembangan Sistem Perangkat Lunak Website dan Mobile</p>
              </div>
              <div class="col-lg-3 text-center">
                <img src="asset/img/devisi/software.svg" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHO -->
  <section class="struktural">
    <a class="link" href="">who us?</a>
    <p class="title fs-5 fw-bold">
      Hilangkan Rasa Penasaran <br />
      Dengan mengenal bagian dari kami
    </p>
    <div class="row mt-5 struktural-card">
      <div class="col-md-6 col-lg-3 col-md-6 text-center mb-2">
        <div class="card shadow p-2">
          <div class="card-body">
            <img class="profil mb-4 img-fluid" src="asset/img/struktural/billy.svg" alt="" />
            <h6 class="card-title fw-bold">Billy Hendrik, Ph.D.</h6>
            <p class="card-text mb-4 fs-6 fw-light">Pembina</p>
            <div class="row text-center justify-content-center">
              <div class="col-3">
                <a href=""><img class="img-fluid" src="asset/img/in.svg" alt="" /></a>
              </div>
              <div class="col-3">
                <a href=""><img class="img-fluid" src="asset/img/ig.svg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 text-center mb-2">
        <div class="card shadow p-2">
          <div class="card-body">
            <img class="profil mb-4 img-fluid" src="asset/img/struktural/1.svg" alt="" />
            <h6 class="card-title fw-bold">CX-Fizi</h6>
            <p class="card-text mb-4 fs-6 fw-light">Kepala Dewan Pengawas Organisasi</p>
            <div class="row text-center justify-content-center">
              <div class="col-3">
                <a href=""><img class="img-fluid" src="asset/img/in.svg" alt="" /></a>
              </div>
              <div class="col-3">
                <a href=""><img class="img-fluid" src="asset/img/ig.svg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 text-center mb-2">
        <div class="card shadow p-2">
          <div class="card-body">
            <img class="profil mb-4 img-fluid" src="asset/img/struktural/2.svg" alt="" />
            <h6 class="card-title fw-bold">CX-Alif</h6>
            <p class="card-text mb-4 fs-6 fw-light">Sekretaris Dewan Pengawas Organisasi</p>
            <div class="row text-center justify-content-center">
              <div class="col-3">
                <a href=""><img class="img-fluid" src="asset/img/in.svg" alt="" /></a>
              </div>
              <div class="col-3">
                <a href=""><img class="img-fluid" src="asset/img/ig.svg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 text-center mb-2">
        <div class="card shadow p-2">
          <div class="card-body">
            <img class="profil mb-4 img-fluid" src="asset/img/struktural/3.svg" alt="" />
            <h6 class="card-title fw-bold">CX-Dhika</h6>
            <p class="card-text mb-4 fs-6 fw-light">Staff Dewan Pengawas Organisasi</p>
            <div class="row text-center justify-content-center">
              <div class="col-3">
                <a href=""><img class="img-fluid" src="asset/img/in.svg" alt="" /></a>
              </div>
              <div class="col-3">
                <a href=""><img class="img-fluid" src="asset/img/ig.svg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5 struktural-card">
      <div class="col-md-6 col-lg-3 text-center mb-2">
        <div class="card shadow p-2">
          <div class="card-body">
            <img class="profil mb-4 img-fluid" src="asset/img/struktural/ketua.svg" alt="" />
            <h6 class="card-title fw-bold">Cx-Mufid</h6>
            <p class="card-text mb-4 fs-6 fw-light">Ketua Umum</p>
            <div class="row text-center justify-content-center">
              <div class="col-3">
                <a href=""><img class="img-fluid" src="asset/img/in.svg" alt="" /></a>
              </div>
              <div class="col-3">
                <a href=""><img class="img-fluid" src="asset/img/ig.svg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 text-center mb-2">
        <div class="card shadow p-2">
          <div class="card-body">
            <img class="profil mb-4 img-fluid" src="asset/img/struktural/wakil.svg" alt="" />
            <h6 class="card-title fw-bold">Cx-Akbar</h6>
            <p class="card-text mb-4 fs-6 fw-light">Wakil Ketua Umum</p>
            <div class="row text-center justify-content-center">
              <div class="col-3">
                <a href=""><img class="img-fluid" src="asset/img/in.svg" alt="" /></a>
              </div>
              <div class="col-3">
                <a href=""><img class="img-fluid" src="asset/img/ig.svg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 text-center mb-2">
        <div class="card shadow p-2">
          <div class="card-body">
            <img class="profil mb-4 img-fluid" src="asset/img/struktural/sekretaris.svg" alt="" />
            <h6 class="card-title fw-bold">Cx-Winda</h6>
            <p class="card-text mb-4 fs-6 fw-light">Sekretaris Umum</p>
            <div class="row text-center justify-content-center">
              <div class="col-3">
                <a href=""><img class="img-fluid" src="asset/img/in.svg" alt="" /></a>
              </div>
              <div class="col-3">
                <a href=""><img class="img-fluid" src="asset/img/ig.svg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 text-center mb-2">
        <div class="card shadow p-2">
          <div class="card-body">
            <img class="profil mb-4 img-fluid" src="asset/img/struktural/bendahara.svg" alt="" />
            <h6 class="card-title fw-bold">Cx-Wulan</h6>
            <p class="card-text mb-4 fs-6 fw-light">Bendahara Umum</p>
            <div class="row text-center justify-content-center">
              <div class="col-3">
                <a href=""><img class="img-fluid" src="asset/img/in.svg" alt="" /></a>
              </div>
              <div class="col-3">
                <a href=""><img class="img-fluid" src="asset/img/ig.svg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="/struktural" class="text-center">
      <button class="selengkapnya mt-5" type="submit">Selengkapnya</button>
    </a>
    </div>
  </section>

  <!-- BEST MOMENT -->
  <section class="best-moment">
    <a class="link" href="">who us?</a>
    <p class="title fs-5 fw-bold">
      Hilangkan Rasa Penasaran <br />
      Dengan mengenal bagian dari kami
    </p>
    <div class="row justify-content-start mb-5">
      <div class="col-lg-7 besar">
        <div class="card card-moment">
          <div class="card-body">
            <!-- <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-5 besar">
        <div class="card card-moment">
          <div class="card-body">
            <!-- <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below asa natural lead-in.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a> -->
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-start mt-5 text-center">
      <div class="col-lg-4 besar">
        <div class="card">
          <div class="card-body">
            <p>Anggota Aktif</p>
            <h3 class="fw-bold">128</h3 class="fw-bold">
          </div>
        </div>
      </div>
      <div class="col-lg-4 besar">
        <div class="card">
          <div class="card-body">
            <p>Anggota Luar Biasa</p>
            <h3 class="fw-bold">128</h3 class="fw-bold">
          </div>
        </div>
      </div>
      <div class="col-lg-4 besar">
        <div class="card">
          <div class="card-body">
            <p>Project</p>
            <h3 class="fw-bold">128</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Best Stories -->
  <section class="best-stories">
    <a class="link" href="">who us?</a>
    <p class="title fs-5 fw-bold">
      Hilangkan Rasa Penasaran <br />
      Dengan mengenal bagian dari kami
    </p>
    

    <div class="row justify-content-start mt-5 text-center">
      <div class="col-lg-4 besar">
        <div class="card">
          <div class="card-body">
            <!-- <p>Anggota Aktif</p>
            <h3 class="fw-bold">128</h3 class="fw-bold"> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4 besar">
        <div class="card">
          <div class="card-body">
            <!-- <p>Anggota Luar Biasa</p>
            <h3 class="fw-bold">128</h3 class="fw-bold"> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4 besar">
        <div class="card">
          <div class="card-body">
            <!-- <p>Project</p>
            <h3 class="fw-bold">128</h3> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  
@endsection