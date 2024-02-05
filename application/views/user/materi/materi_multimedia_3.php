
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div class="container">
                <div class="y-20">
                 <div class="card shadow col-lg-8 mx-auto">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Format Multimedia Pada Halaman Web</h6>
                                </div>
                                <div class="card-body p-4">
                                    <h4 class="text-primary">Menampilkan Video pada Halaman WEB dengan HTML</h4>
                                    <p>Video ditambahkan dengan menggunakan elemen video. </p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;video width="640" height="480" controls autoplay&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&lt;source src="lenovo.mp4" type="video/mp4"&gt;<br>
                                    &nbsp;&nbsp;&nbsp;browser tidak bisa menampilkan video tag.<br>
                                    &lt;/video&gt;<br>
                                    </tt></div>

                                    <p>Adapun atribut-atribut pada tag audio dapat dilihat pada penjelasan berikut ini:</p>

                                    <h5 class="text-primary">1. Atribut controls</h5>
                                    <p>Atribut controls digunakan untuk menambahkan kontrol play, pause, dan volume.</p>

                                    <h5 class="text-primary">2. Atribut source </h5>
                                    <p>Atribut ini digunakan untuk me-link ke file video. Sama seperti atribut src pada image, Jika video disimpan dalam satu directory dengan file HTML maka dituliskan langsung nama file dari video. Sedangkan jika berbeda directory maka dituliskan alamat path menuju file video. </p>

                                    <h5 class="text-primary">3. Atribut autoplay</h5>
                                    <p>Atribut autoplay untuk menjalankan video secara otomatis.</p>

                                    <h5 class="text-primary">4. Atribut width dan height</h5>
                                    <p>Atribut ini digunakan untuk mengatur ukuran tampilan video dalam web</p>

                                    <h5 class="text-primary">5. Menambahkan video dari youtube</h5>
                                    <p>Tag yang kita butuhkan untuk menambahkan video dari Youtube adalah iframe. Tag ini sebenarnya berfungsi untuk menambahkan halaman lain dalam sebuah frame. Kemudian copy link video yang ingin ditampilkan dan ganti link depannya dengan https://www.youtube.com/embed/.<br>
                                    Contoh:<br>
                                    Link yang akan dicopy : https://youtu.be/rzc3_b_KnHc<br>
                                    diganti dengan https://www.youtube.com/embed/rzc3_b_KnHc<br>
                                    Menjadi :</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;iframe width="560" height="315" src="https://www.youtube.com/embed/rzc3_b_KnHc"&gt;<br>
                                    &lt;/iframe&gt;<br>
                                    </tt></div>

                                    <p>Cara Lainnya yaitu: <br>
                                    -   Pilih video yang ingin kita masukkan kedalam web kita. <br>
                                    -   Pilih menu share/ bagikan, kemudian pilih </> sematkan</p>
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="../assets/img/multimedia_2.png" alt="kd multimedia">
                                    </div>
                                    <p>-    Kemudian tinggal copy paste link yang tertera kedalam file HTML</p>
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="../assets/img/multimedia_3.png" alt="kd multimedia">
                                            <p>hasilnya:</p>
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="../assets/img/multimedia_4.png" alt="kd multimedia">
                                    </div>
                                </div>

                                <div class="form-group row text-center mt-3">
                                    <nav aria-label="...">
                                      <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                          <a class="page-link" href="<?= base_url('materi/materi_multimedia_2'); ?>" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="<?= base_url('materi/materi_multimedia_1'); ?>">1</a></li>
                                        <li class="page-item"><a class="page-link" href="<?= base_url('materi/materi_multimedia_2'); ?>">2</a></li>
                                        <li class="page-item active">
                                          <a class="page-link" href="#">3<span class="sr-only">(current)</span></a>
                                        </li>
                                        
                                        <li class="page-item disabled">
                                          <a class="page-link" href="">Next</a>
                                        </li>
                                      </ul>
                                    </nav>
                                </div>
                            </div>
                    </div>
                </div>