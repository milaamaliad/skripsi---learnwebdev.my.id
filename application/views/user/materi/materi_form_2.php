
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div class="container">
                <div class="y-20">
                 <div class="card shadow col-lg-8 mx-auto">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Format Formulir Pada Halaman Web</h6>
                                </div>
                                <div class="p-4">
                                    <h5 class="text-primary">2. Komponen Formulir</h5>
                                    <p>Seperti telah diuraikan pada subbab sebelumnya, elemen dari tag form adalah tag-tag dari berbagai macam komponen formulir dengan fungsi yang berbeda-beda. Berikut ini adalah macam-macam komponen formulir.</p>

                                    <h6 class="text-success">1) Text Field</h6>
                                    <p>Input yang digunakan akan berupa kotak text berikut ini:</p>
                                   
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;form&gt;<br>
                                    &nbsp;&nbsp;&nbsp;First name: &lt;input type="text" name="firstname"&gt;&lt;br&gt;<br>
                                    &nbsp;&nbsp;&nbsp;Last name: &lt;input type="text" name="lastname"&gt;<br>
                                    &lt;/form&gt;<br>
                                    </tt></div>

                                    <div class="text-center">
                                        <p>hasilnya:</p>
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 17rem;"
                                            src="../assets/img/form_1.png" alt="kd multimedia">
                                    </div>

                                    <h6 class="text-success">2) Password Field</h6>
                                    <p>Password field adalah kotak yang ketika menuliskan password pada field maka huruf akan diganti dengan simbol lingkaran untuk melindungi tulisan password yang diketik.</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;form&gt;<br>
                                    &nbsp;&nbsp;&nbsp;Password: &lt;input type="password" name="pwd"&gt;<br>
                                    &lt;/form&gt;<br>
                                    </tt></div>

                                    <div class="text-center">
                                        <p>hasilnya:</p>
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 17rem;"
                                            src="../assets/img/form_2.png" alt="kd multimedia">
                                    </div>

                                    <h6 class="text-success">3) Radio Button</h6>
                                    <p>Radio button digunakan untuk memilih inputan hanya satu pilihan saja.</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;form&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&lt;input type="radio" name="pendidikan" value="smk"&gt;SMK&lt;br&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&lt;input type="radio" name="pendidikan" value="sma"&gt;SMA<br>
                                    &lt;/form&gt;<br>
                                    </tt></div>

                                    <div class="text-center">
                                        <p>hasilnya:</p>
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 10rem;"
                                            src="../assets/img/form_3.png" alt="kd multimedia">
                                    </div>

                                    <h6 class="text-success">4) Drop Down List </h6>
                                    <p>Atribut ini dengan tag select user dapat memilih data yang telah disediakan didalam web.</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;select&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&lt;option&gt;Semarang&lt;/option&gt;&lt;br&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&lt;option&gt;Bandung&lt;/option&gt;<br>
                                    &lt;/select&gt;<br>
                                    </tt></div>

                                    <div class="text-center">
                                        <p>hasilnya:</p>
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 10rem;"
                                            src="../assets/img/form_4.png" alt="kd multimedia">
                                    </div>

                                    <h6 class="text-success">5) Check Box</h6>
                                    <p>Perbedaan Check Box dengan radio button adalah dapat mencentang / memilih lebih dari satu pilihan.</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;form&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&lt;input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"&gt;I have a bike&lt;br&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&lt;input type="checkbox" id="vehicle2" name="vehicle2" value="Car"&gt;I have a car&lt;br&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&lt;input type="checkbox" id="vehicle3" name="vehicle3" value="Boat"&gt;I have a boat<br>
                                    &lt;/form&gt;<br>
                                    </tt></div>

                                    <div class="text-center">
                                        <p>hasilnya:</p>
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 10rem;"
                                            src="../assets/img/form_5.png" alt="kd multimedia">
                                    </div>

                                    <h6 class="text-success">6) Text Area</h6>
                                    <p>Text area seperti text field namun bedanya adalah text area dapat terdiri dari beberapa line/baris dan kolom.</p>
                                    
                                    <div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;"><tt>
                                    &lt;textarea&gt;<br>
                                    &nbsp;&nbsp;&nbsp;isikan pesan anda<br>
                                    &lt;/textarea&gt;<br>
                                    </tt></div>

                                    <div class="text-center">
                                        <p>hasilnya:</p>
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;"
                                            src="../assets/img/form_6.png" alt="kd multimedia">
                                    </div>
                                </div>

                                <div class="form-group row text-center mt-3">
                                    <nav aria-label="...">
                                      <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                          <a class="page-link" href="<?= base_url('materi/materi_form_1'); ?>" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="<?= base_url('materi/materi_form_1'); ?>">1</a></li>
                                        <li class="page-item active">
                                          <a class="page-link" href="#">2<span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="<?= base_url('materi/materi_form_3'); ?>">3</a></li>
                                        <li class="page-item">
                                          <a class="page-link" href="<?= base_url('materi/materi_form_3'); ?>">Next</a>
                                        </li>
                                      </ul>
                                    </nav>
                                </div>
                            </div>
                    </div>
                </div>