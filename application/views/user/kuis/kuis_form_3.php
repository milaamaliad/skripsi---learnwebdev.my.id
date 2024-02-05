
   
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
                                    <p>Lusi mendapatkan tugas untuk membuat form pemesanan tiket kereta yang didalamnya terdapat field nama, field dropdown untuk memilih tujuan, dan tombol submit.</p>
                                    <div class="card bg-gray-400 shadow mb-4 p-4">
                                    
                                    <div id="assignmentcontainer">
<form name="form"method="POST" onSubmit="submit()">                                 
&lt;h4&gt;PEPEMESANAN TIKET KERETA&lt;/h4&gt;<br><br>
&lt;form&gt;<br><br>
&nbsp;&nbsp;Nama : &lt;input type="text" name="nama"&gt;&lt;br&gt;<br><br>
   &nbsp;&nbsp;TUJUAN:<br>
    &nbsp;&nbsp;&nbsp;&lt; <input spellcheck="false" class="editablesection" name="satu" oninput="writinginput(this, 0)" style="width: 100px;"> &gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; <input spellcheck="false" class="editablesection" name="dua" oninput="writinginput(this, 0)" style="width: 100px;"> value="surabaya"&gt;SURABAYA &lt; <input spellcheck="false" class="editablesection" name="tiga" oninput="writinginput(this, 0)" style="width: 100px;"> &gt;<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt; <input spellcheck="false" class="editablesection" name="empat" oninput="writinginput(this, 0)" style="width: 100px;"> value="malang"&gt;MALANG &lt; <input spellcheck="false" class="editablesection" name="lima" oninput="writinginput(this, 0)" style="width: 100px;"> &gt;<br>
    &nbsp;&nbsp;&lt; <input spellcheck="false" class="editablesection" name="enam" oninput="writinginput(this, 0)" style="width: 100px;"> &gt;<br><br>
   
    &nbsp;&nbsp;&lt;input type="submit" value="submit"&gt;<br><br>
   
&lt;/form&gt;<br>

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
        if (form.satu.value == "select", 
            form.dua.value == "option",
            form.tiga.value == "/option",
            form.empat.value == "option",
            form.lima.value == "/option",
            form.enam.value == "/select")
        {
            swal({ 
                title: "Good job!",
                text: "Yuk lanjut kuis berikutnya!",
                type: "success", 
                showConfirmButton: true,
                allowOutsideClick: true
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