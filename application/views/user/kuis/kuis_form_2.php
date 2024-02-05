
   
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
                                    <p>Rafa ingin membuat form biodata pada halaman webnya. Rafa menginginkan didalam form tersebut terdapat field Nama, field Jenis Kelamin yang dapat dipilih salah satu, field Hobi yang dapat dipilih lebih dari satu, dan field moto hidup yang dapat diisi kalimat yang Panjang. </p>
                                    <div class="card bg-gray-400 shadow mb-4 p-4">
                                    
                                    <div id="assignmentcontainer">
<form name="form"method="POST" onSubmit="submit()">                                 
&lt;h2&gt;Form BIODATA&lt;/h2&gt;<br>
Nama : &lt;input type="text" name="nama"&gt;&lt;br&gt;<br><br>

Jenis Kelamin : <br>
&nbsp;&nbsp;&lt;input type="<input spellcheck="false" class="editablesection" name="satu" oninput="writinginput(this, 0)" style="width: 53px;">" id="jk" name="jenis_kelamin" value="laki_laki"&gt;laki-laki&lt;br&gt;<br>
&nbsp;&nbsp;&lt;input type="<input spellcheck="false" class="editablesection" name="dua" oninput="writinginput(this, 0)" style="width: 53px;">" id="jk" name="jenis_kelamin" value="<input spellcheck="false" class="editablesection" name="tiga" oninput="writinginput(this, 0)" style="width: 53px;">"&gt;perempuan&lt;br&gt;<br><br>

Hobi:<br>
&nbsp;&nbsp;&lt;input type="<input spellcheck="false" class="editablesection" name="empat" oninput="writinginput(this, 0)" style="width: 53px;">" id="hobi1" name="hobi1" value="<input spellcheck="false" class="editablesection" name="lima" oninput="writinginput(this, 0)" style="width: 53px;">">berenang&lt;br&gt;<br>
&nbsp;&nbsp;&lt;input type="<input spellcheck="false" class="editablesection" name="enam" oninput="writinginput(this, 0)" style="width: 53px;">" id="hobi1" name="hobi1" value="membaca">membaca&lt;br&gt;<br><br>

Moto Hidup&lt;br&gt;<br>
&lt; <input spellcheck="false" class="editablesection" name="tujuh" oninput="writinginput(this, 0)" style="width: 100px;"> &gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;isikan moto kamu<br>
&lt; <input spellcheck="false" class="editablesection" name="delapan" oninput="writinginput(this, 0)" style="width: 100px;"> &gt;<br>


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
        if (form.satu.value == "radio", 
            form.dua.value == "radio",
            form.tiga.value == "perempuan",
            form.empat.value == "checkbox",
            form.lima.value == "berenang",
            form.enam.value == "checkbox",
            form.tujuh.value == "textarea",
            form.delapan.value == "/textarea")
        {
            swal({ 
                title: "Good job!",
                text: "Yuk lanjut kuis berikutnya!",
                type: "success", 
                showConfirmButton: false,
                allowOutsideClick: false,
                footer:'<a class="btn-lg btn-primary" href="<?= base_url('Kuis/kuis_form_3'); ?>">OK</a>'
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