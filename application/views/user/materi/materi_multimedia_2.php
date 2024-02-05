

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
                                    <h4 class="text-primary">Menampilkan Audio pada Halaman WEB dengan HTML</h4>
                                    <p>Audio ditambahkan dengan menggunakan elemen audio. </p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;audio controls&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&lt;source src="rain.mp3" type="audio/mpeg"&gt;<br>
                                    &nbsp;&nbsp;&nbsp;Browser tidak mendukung tag audio.<br>
                                    &lt;/audio&gt;<br>
                                    </tt></div>

                                    <p>Adapun atribut-atribut pada tag audio dapat dilihat pada penjelasan berikut ini:</p>

                                    <h5 class="text-primary">1.  Atribut controls</h5>
                                    <p>Atribut controls digunakan untuk menambahkan kontrol play, pause, dan volume.</p>

                                    <h5 class="text-primary">2.  Atribut autoplay</h5>
                                    <p>Atribut ini berfungsi untuk memutar audio secara otomatis.</p>
                                   
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;audio autoplay&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&lt;source src="rain.mp3" type="audio/mpeg"&gt;<br>
                                    &nbsp;&nbsp;&nbsp;audio diputar secara otomatis<br>
                                    &lt;/audio&gt;<br>
                                    </tt></div>

                                    <h5 class="text-primary">3. Atribut loop</h5>
                                    <p>Atribut loop berfungsi untuk mengulang-ulang pemutaran audio. Ini seperti repeat one</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;audio loop&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&lt;source src="rain.mp3" type="audio/mpeg"&gt;<br>
                                    &nbsp;&nbsp;&nbsp;audio diputar berulang-ulang<br>
                                    &lt;/audio&gt;<br>
                                    </tt></div>

                                    <h5 class="text-primary">4. Atribut muted</h5>
                                    <p>Atribut ini berfungsi untuk mensenyapkan audio.</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;audio muted&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&lt;source src="rain.mp3" type="audio/mpeg"&gt;<br>
                                    &nbsp;&nbsp;&nbsp;audio muted<br>
                                    &lt;/audio&gt;<br>
                                    </tt></div>

                                    <h5 class="text-primary">5. Atribut source </h5>
                                    <p>Atribut ini digunakan untuk me-link ke file audio. Sama seperti atribut src pada image, Jika audio disimpan dalam satu directory dengan file HTML maka dituliskan langsung nama file dari audio. Sedangkan jika berbeda directory maka dituliskan alamat path menuju file audio. Dan jika audio mengambil dari website lain maka tuliskan link audio tersebut.</p>
                                </div>

                                <div class="form-group row text-center mt-3">
                                    <nav aria-label="...">
                                      <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                          <a class="page-link" href="<?= base_url('materi/materi_multimedia_1'); ?>" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="<?= base_url('materi/materi_multimedia_1'); ?>">1</a></li>
                                        <li class="page-item active">
                                          <a class="page-link" href="#">2<span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="<?= base_url('materi/materi_multimedia_3'); ?>">3</a></li>
                                        <li class="page-item">
                                          <a class="page-link" href="<?= base_url('materi/materi_multimedia_3'); ?>">Next</a>
                                        </li>
                                      </ul>
                                    </nav>
                                </div>
                            </div>
                    </div>
                </div>