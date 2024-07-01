@extends('guest.layouts.app')

@section('main')
    <!-- Hero Section -->
    <section style="" id="hero" class="hero">

        <img src="assets/pph/hero.jpg" alt="" data-aos="fade-in">

        <div class="container ">
            <h2 data-aos="fade-up" data-aos-delay="100">Selamat Datang,<br>
                Pondok Pesantren KH. HASAN BESARI
            </h2>
            <p data-aos="fade-up" data-aos-delay="200"></p>
            <div class="d-flex mt-4 " data-aos="fade-up" data-aos-delay="300">
                <a href="#kontak" class="btn-get-started">Hubungi</a>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/pph/tentang.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>Profil</h3>
                    <p class="fst-italic">
                        Assalamualaikum Warahmatullahi Wabarakatuh
                    </p>
                    <p class="text-justify">
                        Pondok Pesantren Sunan Pandanaran (PPSPA) merupakan lembaga pendidikan berbasis
                        pesantren yang dari masa ke masa terus mengalami perkembangan. Saat ini PPSPA telah
                        memiliki hampir semua jenjang pendidikan formal mulai tingkat dasar hingga perguruan
                        tinggi, selain juga pendidikan non-formal seperti tahfidzul Qur’an dan diniyah/qiraatul kutub.
                    </p>
                    <p class="text-justify">
                        Sejak awal dirintis, PPSPA selalu berusaha hadir di tengah-tengah dinamika yang sedang
                        dihadapi umat/masyarakat. Seiring perkembangan zaman, tantangan di tengah-tengah
                        masyarakat semakin kompleks, dibutuhkan kecakapan-kecakapan yang relevan dengan
                        perkembangan zaman dan teknologi mutakhir.

                    </p>
                    <p class="text-justify">
                        Fenomena ini ditangkap dengan cerdas oleh PPSPA melalui dawuh langsung dari
                        pengasuhnya, KH. Dr. Mu’tashim Billah, SQ. M.Pd.I. kepada salah satu cabangnya yakni
                        Pondok Pesantren KH. Hasan Besari sebagai pelaksana untuk meluncurkan “Tawajuhan
                        Khidir Projek” guna meningkatkan kecakapan-kecakapan praksis baik dalam bidang agama,
                        ekonomi, ataupun kepemimpinan bagi santri sebagai bekal kembali ke masyarakat.
                        Bayangannya dengan kecakapan tersebut para santri yang telah “boyong” atau “mukim”
                        bisa menjadi aktor yang bermanfaat di berbagai sektor.
                    </p>
                    {{-- <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate
                                velit.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda
                                mastiro dolore eu fugiat nulla pariatur.</span></li>
                    </ul>
                    <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a> --}}
                </div>

            </div>

        </div>

    </section><!-- /About Section -->
    <!-- Courses Section -->
    <section id="program" class="courses section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <p>Program</p>
            <h2>Program PP KH.BESARI</h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

                
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="course-item">
                        <img src="assets/pph/program (2).png" class="img-fluid" alt="...">
                        <div class="course-content">


                            <h3><a href="#" data-bs-toggle="modal" data-bs-target="#umumModal">Umum</a></h3>

                        </div>
                    </div>
                </div> <!-- End Course Item-->


                <!-- Modal -->
                <div class="modal fade" id="umumModal" tabindex="-1" aria-labelledby="umumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="umumModalLabel">Umum</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="assets/pph/program (2).png" class="img-fluid" alt="...">
                            </div>

                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="course-item">
                        <img src="assets/pph/program (1).png" class="img-fluid" alt="...">
                        <div class="course-content">


                            <h3><a href="#" data-bs-toggle="modal" data-bs-target="#extraModal">Extra</a></h3>

                        </div>
                    </div>
                </div> <!-- End Course Item-->


                <!-- Modal -->
                <div class="modal fade" id="extraModal" tabindex="-1" aria-labelledby="extraModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="extraModalLabel">Extra</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="assets/pph/program (1).png" class="img-fluid" alt="...">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="course-item">
                        <img src="assets/pph/program (3).png" class="img-fluid" alt="...">
                        <div class="course-content">


                            <h3><a href="#" data-bs-toggle="modal" data-bs-target="#ppdbModal">PPDB</a></h3>

                        </div>
                    </div>
                </div> <!-- End Course Item-->


                <!-- Modal -->
                <div class="modal fade" id="ppdbModal" tabindex="-1" aria-labelledby="ppdbModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ppdbModalLabel">PPDB</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="assets/pph/program (3).png" class="img-fluid" alt="...">
                            </div>

                        </div>
                    </div>
                </div>





            </div>

        </div>

    </section><!-- /Courses Section -->

     <!-- Trainers Index Section -->
     <section id="kegiatan" class="section trainers-index">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <p>Kegiatan</p>
            <h2>Dokumentasi kegiatan</h2>
        </div><!-- End Section Title -->
        <div class="container">
  
          <div class="row">
  
            <div class="col-lg-6 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="assets/pph/kegiatan (1).jpeg" class="img-fluid" alt="">
                {{-- <div class="member-content">
                  <h4>Walter White</h4>
                  <span>Web Development</span>
                  <p>
                    Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div> --}}
              </div>
            </div><!-- End Team Member -->
            <div class="col-lg-6 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="assets/pph/kegiatan (1).jpg" class="img-fluid" alt="">
                {{-- <div class="member-content">
                  <h4>Walter White</h4>
                  <span>Web Development</span>
                  <p>
                    Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div> --}}
              </div>
            </div><!-- End Team Member -->
  
            <div class="col-lg-6 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="assets/pph/kegiatan (2).jpeg" class="img-fluid" alt="">
                {{-- <div class="member-content">
                  <h4>Walter White</h4>
                  <span>Web Development</span>
                  <p>
                    Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div> --}}
              </div>
            </div><!-- End Team Member -->
            <div class="col-lg-6 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="assets/pph/kegiatan (2).jpg" class="img-fluid" alt="">
                {{-- <div class="member-content">
                  <h4>Walter White</h4>
                  <span>Web Development</span>
                  <p>
                    Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div> --}}
              </div>
            </div><!-- End Team Member -->
            <div class="col-lg-6 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="assets/pph/kegiatan (3).jpeg" class="img-fluid" alt="">
                {{-- <div class="member-content">
                  <h4>Walter White</h4>
                  <span>Web Development</span>
                  <p>
                    Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div> --}}
              </div>
            </div><!-- End Team Member -->
            <div class="col-lg-6 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="assets/pph/kegiatan (4).jpeg" class="img-fluid" alt="">
                {{-- <div class="member-content">
                  <h4>Walter White</h4>
                  <span>Web Development</span>
                  <p>
                    Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div> --}}
              </div>
            </div><!-- End Team Member -->
            <div class="col-lg-6 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="assets/pph/kegiatan (3).jpg" class="img-fluid" alt="">
                {{-- <div class="member-content">
                  <h4>Walter White</h4>
                  <span>Web Development</span>
                  <p>
                    Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div> --}}
              </div>
            </div><!-- End Team Member -->
  
  
          </div>
  
        </div>
  
      </section><!-- /Trainers Index Section -->
     <section id="kontak" class="section contact">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <p>Kontak kami</p>
            <h2>Hubungi kami</h2>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15808.69659798421!2d110.29693951475832!3d-7.876839502084932!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af989ff544d6d%3A0x5d4a4eb1678aee1f!2sPondok%20Pesantren%20Hasan%20Besari%20Cabang%20PP.%20Sunan%20pandanaran!5e0!3m2!1sid!2sid!4v1719844562343!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div><!-- End Google Maps -->

            <div class="row gy-4">
    
              <div class="col-lg-4">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h3>Alamat</h3>
                    <p>Kedung, Guwosari, Kec. Pajangan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55751</p>
                  </div>
                </div><!-- End Info Item -->
    
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-telephone flex-shrink-0"></i>
                  <div>
                    <h3>Kontak</h3>
                    <p>081312430714</p>
                  </div>
                </div><!-- End Info Item -->
    
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h3>Email</h3>
                    <p>pphbesari@gmail.com</p>
                  </div>
                </div><!-- End Info Item -->
    
              </div>
    
              <div class="col-lg-8">
                <form id="whatsapp-form" data-aos="fade-up" data-aos-delay="200" class="php-email-form">
                    <div class="row gy-4">
                      <div class="col-md-12">
                        <input type="text" id="name" class="form-control" placeholder="Nama" required>
                      </div>
                      <div class="col-md-12">
                        <textarea id="message" class="form-control" rows="6" placeholder="Pesan" required></textarea>
                      </div>
                      <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-get-started">Kirim Pesan</button>
                      </div>
                    </div>
                  </form>
                  
              </div><!-- End Contact Form -->
    
            </div>
    
          </div>
    
  
      </section><!-- /Trainers Index Section -->
@endsection
