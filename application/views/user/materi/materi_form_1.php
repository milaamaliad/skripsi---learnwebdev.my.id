
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div class="container">
                <div class="y-20">
                 <div class="card shadow col-lg-8 mx-auto">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Fromat Formulir pada Halaman Web</h6>
                                </div>
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 40rem;"
                                            src="../assets/img/tp_3.gif" alt="kd tabel">
                                    </div>
                                    <h2 class="text-primary">Apa itu Formulir dengan HTML?</h2><p>Dengan menggunakan beberapa perintah HTML, formulir dapat ditampilkan pada browser untuk mengumpulkan data dari user yang mengakses halaman web. User dapat menginputkan datanya melalui komponen-komponen formulir yang ditampilkan pada halaman web.</p>
                                    <p>Namun, perlu diketahui bahwa formulir yang dibuat dengan HTML hanya berfungsi sebagai antar muka atau interface. Untuk dapat memproses data yang telah diinputkan, perlu digunakan bahasa pemrograman lain seperti PHP atau Javascript, yang akan dipelajari pada bab-bab selanjutnya. </p> 
                                    
                                    <h5 class="text-primary">1. Format formulir</h5>
                                    <p>MUntuk dapat menampilkan formulir pada halaman web, digunakan tag form. Tag ini memiliki beberapa atribut yang harus diberikan, seperti:<br>
                                    -   action untuk menentukan aksi yang akan dilakukan saat data dikirim<br>
                                    -   method metode pengiriman data.</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;form action="prosess.php" method="GET"&gt;<br>
                                     form field di sini <br>
                                    &lt;/form&gt;<br>
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
                                        <li class="page-item"><a class="page-link" href="<?= base_url('materi/materi_form_2'); ?>">2</a></li>
                                        <li class="page-item"><a class="page-link" href="<?= base_url('materi/materi_form_3'); ?>">3</a></li>
                                        <li class="page-item">
                                          <a class="page-link" href="<?= base_url('materi/materi_form_2'); ?>">Next</a>
                                        </li>
                                      </ul>
                                    </nav>
                                </div>
                            </div>
                    </div>
                </div>