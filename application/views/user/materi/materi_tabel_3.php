
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div class="container">
                <div class="y-20">
                 <div class="card shadow col-lg-8 mx-auto">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Menggabungkan Cell pada table</h6>
                                </div>
                                <div class="card-body p-4">
                                    <h4 class="text-primary">1. Colspan</h4>
                                    <p>Untuk menggabungkan dua atau lebih kolom tabel pada HTML, digunakan atribut colspan yang ditambahkan pada tag <td>dengan format penulisan sebagai berikut:</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;td colspan="value"&gt; .... &lt;/td&gt;<br>
                                    </tt></div>
                                    <p>Dimana value adalah nilai dari banyaknya kolom yang akan digabungkan.</p>
                                    
                                    <h4 class="text-primary">2. Rowspan</h4>
                                    <p>Sedangkan, untuk menggabungkan dua atau lebih baris tabel pada HTML digunakan atribut rowspan yang juga ditambahkan pada tag <td>dengan format penulisan sebagai berikut:</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;td rowspan="value"&gt; .... &lt;/td&gt;<br>
                                    </tt></div>
                                    
                                    <p> Berikut ini merupakan contoh code yang menerapkan atribut colspan dan rowspan:</p>
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="../assets/img/tabel_6.png" alt="kd tabel">
                                        <p>hasilnya:</p>
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;"
                                            src="../assets/img/tabel_7.png" alt="kd tabel">
                                    </div>
                                </div>
                                <div class="form-group row text-center mt-3">
                                    <nav aria-label="...">
                                      <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                          <a class="page-link" href="<?= base_url('materi/materi_tabel_2'); ?>" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="<?= base_url('materi/materi_tabel_1'); ?>">1</a></li>
                                        <li class="page-item"><a class="page-link" href="<?= base_url('materi/materi_tabel_2'); ?>">2</a></li>
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