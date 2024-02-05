
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
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 40rem;"
                                            src="../assets/img/tp_2.gif" alt="kd tabel">
                                    </div>
                                    <h4 class="text-primary">Menampilkan Gambar pada Halaman WEB dengan HTML</h4>
                                    <p>Gambar akan membuat website kita terlihat lebih menarik. Karena otak kita lebih mudah menyerap informasi dengan visual dibandingkan hanya teks saja. Karena itu, gambar sangatlah penting. Gambar ditambahkan dengan menggunakan elemen img. Dengan atribut elemen img: src, alt, height, dan width.</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;img src="cat.gif" alt="Gambar Kucing" align="center" height="120" width="180"&gt;<br>
                                    </tt></div>

                                    <p>Berikut ini penjelasan mengenai atribut-atribut dalam tag img:</p>

                                    <h5 class="text-primary">1. Atribut src</h5>
                                    <p>Menunjukkan lokasi gambar ke browser. Jika gambar disimpan dalam satu directory dengan file HTML maka dituliskan langsung nama file dari gambar. </p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;img src="cat.gif" &gt;<br>
                                    </tt></div>

                                    <p>Apabila file gambarnya tersimpan di folder yang berbeda, maka kita hanya perlu menuliskan alamat path-nya.</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;img src="assets/image/cat.gif" &gt;<br>
                                    </tt></div>

                                    <p>jika kita menggunakan gambar dari website lain maka dituliskan alamat URL lengkap dari gambar tersebut</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;img src="https://www.google.com/images/branding/googlelogo/
                           2x/googlelogo_color_92x30dp.png" &gt;<br>
                                    </tt></div>
                                    
                                    <h5 class="text-primary">2. Atribut alt</h5>
                                    <p>Menunjukkan deskripsi singkat gambar jika gambar tidak dapat terlihat. Teks atribut ini harus menunjukkan isi atau informasi dari gambar.</p>

                                    <h5 class="text-primary">3. Atribut width and height</h5>
                                    <p>Menunjukkan dimensi panjang dan lebar dari gambar dengan satuan pixel.</p>
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="../assets/img/multimedia_1.png" alt="kd multimedia">
                                    </div>

                                    <h5 class="text-primary">4. Menggunakan gambar sebagai link</h5>
                                    <p>Cara membuat link dengan gambar adalah dengan menggabungkan tag a dan tag img. Tag a harus mengapit tag img.</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;a href="https://www.wikipedia.com"&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&lt;img src="images/sawah.jpg" width="160"&gt;<br>
                                    &lt;/a&gt;<br>
                                    </tt></div>

                                </div>
                                

                                <div class="form-group row text-center mt-3">
                                    <nav aria-label="...">
                                      <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item active">
                                          <a class="page-link" href="#">1<span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="<?= base_url('materi/materi_multimedia_2'); ?>">2</a></li>
                                        <li class="page-item"><a class="page-link" href="<?= base_url('materi/materi_multimedia_3'); ?>">3</a></li>
                                        <li class="page-item">
                                          <a class="page-link" href="<?= base_url('materi/materi_multimedia_2'); ?>">Next</a>
                                        </li>
                                      </ul>
                                    </nav>
                                </div>
                            </div>
                    </div>
                </div>