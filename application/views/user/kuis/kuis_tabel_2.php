
   
        <!-- Content Wrapper -->
                        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div class="container">
                <div class="y-20">
                 <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Kuis Nomor 2</h6>
                                </div>
                                <div class="card-body p-4">
                                    <h4 class="text-primary">Perhatikan Soal berikut ini</h4>
                                    <p>Pak Guru hendak membuat table nilai dengan memanfaatkan atribut table di HTML dengan border 2 pixel dan jarak teks dengan garis di dalam sel sejumlah 1 pixel. Di dalam table tersebut jika siswa memiliki nilai dibawah 80 maka kolomnya diberi background warna merah. Sedangkan untuk anak yang memiliki nilai 100 maka kolomnya diberi background warna biru.</p>
                                    <div class="card bg-gray-400 shadow mb-4 p-4">
                                    
                                    <div id="assignmentcontainer">
<form name="form"method="POST" onSubmit="submit()">                                 
    &lt;table border="<input spellcheck="false" class="editablesection" name="satu" oninput="writinginput(this, 0)" style="width: 53px;">"  &nbsp;&nbsp;&nbsp; <input spellcheck="false" class="editablesection" name="dua" oninput="writinginput(this, 0)" style="width: 100px;">="1"&gt;<br>
        &nbsp;&lt;tr&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;nama&lt;/th&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;nilai&lt;/th&gt;<br>
        &nbsp;&lt;/tr&gt;<br>
        &nbsp;&lt;tr&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt; <input spellcheck="false" class="editablesection" name="tiga" oninput="writinginput(this, 0)" style="width: 53px;"> &gt;  Rani&lt;/td&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;80&lt;/td&gt;<br>
        &nbsp;&lt;/tr&gt;<br>
     &nbsp;&lt;tr  <input spellcheck="false" class="editablesection" name="empat" oninput="writinginput(this, 0)" style="width: 60px;">  ="blue"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Dani&lt;/td&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;100&lt;/td&gt;<br>
        &nbsp;&lt;/tr&gt;<br>
        &nbsp;&lt;tr bgcolor="<input spellcheck="false" class="editablesection" name="lima" oninput="writinginput(this, 0)" style="width: 53px;">"  &gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Yuni&lt;/td&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;t70&lt;/td&gt;<br>
        &nbsp;&lt;/tr&gt;<br>
&lt;/table&gt;<br>
</form>
                                    </div>
                                   
                                    </div>
                                    <div class="col-md-6 offset-md-3">
                                    <input type="submit" onclick="submit()" value="Submit Jawaban" class="btn btn-primary btn-user btn-block rounded-pill">
                                           
                                        
            
                                    </div>
                                </div>
                                
                                
                            </div>
                    </div>
                </div>


<script type="text/javascript">
    function submit(){
        if (form.satu.value == "2", 
            form.dua.value == "cellpadding",
            form.tiga.value == "td",
            form.empat.value == "bgcolor",
            form.lima.value == "red"
            )
        {
            swal({ 
                title: "Good job!",
                text: "Yuk lanjut kuis berikutnya!",
                type: "success", 
                showConfirmButton: false,
                allowOutsideClick: false,
                footer:'<a class="btn-lg btn-primary" href="<?= base_url('Kuis/kuis_tabel_3'); ?>">OK</a>'
            });
        } else{
            Swal.fire(
              'Salah :(',
              'Yuk coba lagi!',
              'error'
            )
        }
    }
</script>