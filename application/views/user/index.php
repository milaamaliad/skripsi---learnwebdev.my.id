<style type="text/css">

# Sections
--------------------------------------------------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-header {
  text-align: center;
  padding-bottom: 40px;
}
.section-header h2 {
  font-size: 13px;
  letter-spacing: 1px;
  font-weight: 700;
  margin: 0;
  color: #4154f1;
  text-transform: uppercase;
}
.section-header p {
  margin: 10px 0 0 0;
  padding: 0;
  font-size: 38px;
  line-height: 42px;
  font-weight: 700;
  color: #012970;
}
@media (max-width: 768px) {
  .section-header p {
    font-size: 28px;
    line-height: 32px;
  }
}

# Hero Section
--------------------------------------------------------------*/
.hero {
  width: 100%;
  height: 100vh;
  background: url(<?= base_url('assets/'); ?>img/hero-bg.png) top center no-repeat;
  background-size: cover;
}
.hero h1 {
  margin: 0;
  font-size: 48px;
  font-weight: 700;
  color: #012970;
}
.hero h2 {
  color: #444444;
  margin: 15px 0 0 0;
  font-size: 26px;
}
.hero .btn-get-started {
  margin-top: 30px;
  line-height: 0;
  padding: 15px 40px;
  border-radius: 4px;
  transition: 0.5s;
  color: #fff;
  background: #4154f1;
  box-shadow: 0px 5px 30px rgba(65, 84, 241, 0.4);
}
.hero .btn-get-started span {
  font-family: "Nunito", sans-serif;
  font-weight: 600;
  font-size: 16px;
  letter-spacing: 1px;
}
.hero .btn-get-started i {
  margin-left: 5px;
  font-size: 18px;
  transition: 0.3s;
}
.hero .btn-get-started:hover i {
  transform: translateX(5px);
}
.hero .hero-img {
  text-align: right;
}
@media (min-width: 1024px) {
  .hero {
    background-attachment: fixed;
  }
}
@media (max-width: 991px) {
  .hero {
    height: auto;
    padding: 120px 0 60px 0;
  }
  .hero .hero-img {
    text-align: center;
    margin-top: 80px;
  }
  .hero .hero-img img {
    width: 80%;
  }
}
@media (max-width: 768px) {
  .hero {
    text-align: center;
  }
  .hero h1 {
    font-size: 32px;
  }
  .hero h2 {
    font-size: 24px;
  }
  .hero .hero-img img {
    width: 100%;
  }
}
    .pricing .box {
  padding: 40px 20px;
  background: #fff;
  text-align: center;
  box-shadow: 0px 0 30px rgba(1, 41, 112, 0.08);
  border-radius: 4px;
  position: relative;
  overflow: hidden;
  transition: 0.3s;
}
.pricing .box:hover {
  transform: scale(1.1);
  box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
}
.pricing h3 {
  font-weight: 700;
  font-size: 18px;
  margin-bottom: 15px;
}
.pricing .price {
  font-size: 36px;
  color: #444444;
  font-weight: 600;
  font-family: "Poppins", sans-serif;
}
.pricing .price sup {
  font-size: 20px;
  top: -15px;
  left: -3px;
}
.pricing .price span {
  color: #bababa;
  font-size: 16px;
  font-weight: 300;
}
.pricing img {
  padding: 30px 40px;
}
.pricing ul {
  padding: 0;
  list-style: none;
  color: #444444;
  text-align: center;
  line-height: 26px;
  font-size: 16px;
  margin-bottom: 25px;
}
.pricing ul li {
  padding-bottom: 10px;
}
.pricing ul .na {
  color: #ccc;
  text-decoration: line-through;
}
.pricing .btn-buy {
  display: inline-block;
  padding: 8px 40px 10px 40px;
  border-radius: 50px;
  color: #4154f1;
  transition: none;
  font-size: 16px;
  font-weight: 400;
  font-family: "Nunito", sans-serif;
  font-weight: 600;
  transition: 0.3s;
  border: 1px solid #4154f1;
}
.pricing .btn-buy:hover {
  background: #4154f1;
  color: #fff;
}
.pricing .featured {
  width: 200px;
  position: absolute;
  top: 18px;
  right: -68px;
  transform: rotate(45deg);
  z-index: 1;
  font-size: 14px;
  padding: 1px 0 3px 0;
  background: #4154f1;
  color: #fff;
}

.testimonial {
    margin-top: 130px;
}

.testimonial p {
    font-size: 2rem;
    text-align: center;
    font-weight: 200;
    font-style: italic;
    margin-bottom: 30px;
}
# Footer
--------------------------------------------------------------*/
.footer {
  background: #f6f9ff;
  padding: 0 0 30px 0;
  font-size: 14px;
}
.footer .footer-newsletter {
  padding: 50px 0;
  background: #f6f9ff;
  border-top: 1px solid #e1ecff;
}
.footer .footer-newsletter h4 {
  font-size: 24px;
  margin: 0 0 10px 0;
  padding: 0;
  line-height: 1;
  font-weight: 700;
  color: #012970;
}

</style>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Welcome to Learn WebDev!</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Let`s Learn Web Development Together</h2>
          <div class="m-2" data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start ">
              <a href="#pricing" class="btn btn-primary btn-lg scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="../assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="pricing" class="pricing">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>-----------------------</h2>
          <p>Ruang Belajar</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">

          <div class="col-lg-4 col-md-6 mt-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <img src="../assets/img/values-1.png" class="img-fluid" alt="">
              <h3>Materi</h3>
              
              <a href="<?= base_url('materi/materi_tabel_1'); ?>" class="btn-buy">Materi</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <img src="../assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Praktik Coding</h3>
              
              <a href="<?= base_url('PraktikCoding/praktikcoding_1'); ?>" class="btn-buy">Praktik Coding</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <img src="../assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Kuis</h3>
              
              <a href="<?= base_url('kuis/kuis_tabel_1'); ?>" class="btn-buy">Kuis</a>
            </div>
          </div>

        </div>

      </div>

<!-- Testimonial -->
      <section class="testimonial">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <p>"semua orang harus belajar pemrograman karena mengajarkan Anda cara berpikir"</p>
          </div>
        </div>
        
      </section>

    <div class="footer">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <header class="section-header">
          <h2>-----------------------</h2>
          <p></p>
        </header>
          </div>
          <div class="col-lg-6">
            
          </div>
        </div>
      </div>
    </div>
    </div>


<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 