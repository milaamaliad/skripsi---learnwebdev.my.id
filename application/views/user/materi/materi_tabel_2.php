

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div class="container">
                <div class="y-20">
                 <div class="card shadow col-lg-8 mx-auto">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Atribut pada Tag Tabel</h6>
                                </div>
                                <div class="card-body p-4">
                                    <h4 class="text-primary">1. Atribut Border</h4>
                                    <p>Attribute border digunakan untuk mengatur ukuran garis tepi yang ada pada tabel html, satuan yang digunakan adalah satuan pixel. Jika tidak diberikan nilai pada bagian border maka tabel akan ditampilkan tanpa memiliki garis. Atribut ini dapat dimasukkan pada tag table.</p>
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;table border="1"&gt;<br>
                                    </tt></div>
                                    
                                    <h4 class="text-primary">2. Atribut cellpadding</h4>
                                    <p>Atribut cellpadding adalah atribut untuk mengatur jarak teks dengan garis di dalam sel. Atribut ini dapat dimasukkan pada tag table.</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;table cellpadding="1"&gt;<br>
                                    </tt></div>

                                    <h4 class="text-primary">3. Atribut cellspacing</h4>
                                    <p>Atribut CellSpacing berfungsi mengatur jarak antara garis tepi dari bagian dalam dengan garis tepi yang dibagian luar, antara kolom dengan garis tepi table.</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;table cellspacing="1"&gt;<br>
                                    </tt></div>

                                    <h4 class="text-primary">4. Atribut bgcolor</h4>
                                    <p>Untuk menambahkan warna pada sel dan baris, kita bisa menambahkan atribut bgcolor di dalam tag td (untuk sel) atau tr (untuk baris).</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;tr bgcolor="yellow"&gt;<br>
                                    </tt></div>    

                                    <p>Untuk lebih jelasnya dapat dilihat pada contoh code berikut ini:</p>
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="../assets/img/tabel_4.png" alt="kd tabel">
                                        <p>hasilnya:</p>
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="../assets/img/tabel_5.png" alt="kd tabel">
                                    </div>
                                </div>
                                <div class="form-group row text-center mt-3">
                                    <nav aria-label="...">
                                      <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                          <a class="page-link" href="<?= base_url('materi/materi_tabel_1'); ?>" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="<?= base_url('materi/materi_tabel_1'); ?>">1</a></li>
                                        <li class="page-item active">
                                          <a class="page-link" href="#">2<span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="<?= base_url('materi/materi_tabel_3'); ?>">3</a></li>
                                        <li class="page-item">
                                          <a class="page-link" href="<?= base_url('materi/materi_tabel_3'); ?>">Next</a>
                                        </li>
                                      </ul>
                                    </nav>
                                </div>
                            </div>
                    </div>
                </div>