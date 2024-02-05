
   
        <!-- Content Wrapper -->
                        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div class="container">
                <div class="y-20">
                 <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Kuis Nomor 1</h6>
                                </div>
                                <div class="card-body p-4">
                                    <h4 class="text-primary">Perhatikan Soal berikut ini</h4>
                                    <p>Indah ingin membuat form login pada halaman webnya. Ketentuan yang indah inginkan yaitu terdapat form untuk memasukkan username dan password selain itu terdapat tombol login dibawahnya. Identitas pada setiap field sama dengan nama fieldnya. Bantu Indah untuk membuatnya!</p>
                                    <div class="card bg-gray-400 shadow mb-4 p-4">
                                    
                                    <div id="assignmentcontainer">
<form name="form"method="POST" onSubmit="submit()">                                 
&lt;!DOCTYPE html&gt;<br>
&lt;html&gt;<br>
&nbsp;&nbsp;&lt;body&gt;<br><br>


&nbsp;&nbsp;&nbsp;&nbsp;&lt;h2&gt;Form LOGIN&lt;/h2&gt;<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;username : &lt; input type="<input spellcheck="false" class="editablesection" name="satu" oninput="writinginput(this, 0)" style="width: 53px;">" &nbsp;&nbsp;&nbsp; name="<input spellcheck="false" class="editablesection" name="dua" oninput="writinginput(this, 0)" style="width: 100px;">" &gt;&lt;br&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;password : &lt; input type="<input spellcheck="false" class="editablesection" name="tiga" oninput="writinginput(this, 0)" style="width: 100px;">" &nbsp;&nbsp;&nbsp; name="<input spellcheck="false" class="editablesection" name="empat" oninput="writinginput(this, 0)" style="width: 100px;">" &gt;&lt;br&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="<input spellcheck="false" class="editablesection" name="lima" oninput="writinginput(this, 0)" style="width: 53px;">" &nbsp;&nbsp;&nbsp; <input spellcheck="false" class="editablesection" name="enam" oninput="writinginput(this, 0)" style="width: 53px;">="login"&gt;<br><br>


&nbsp;&nbsp;&lt;/body&gt;<br>
&lt;/html&gt;

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
        if (form.satu.value == "text ", 
            form.dua.value == "username",
            form.tiga.value == "password",
            form.empat.value == "password",
            form.lima.value == "submit",
            form.enam.value == "value")
        {
            swal({ 
                title: "Good job!",
                text: "Yuk lanjut kuis berikutnya!",
                type: "success", 
                showConfirmButton: false,
                allowOutsideClick: false,
                footer:'<a class="btn-lg btn-primary" href="<?= base_url('Kuis/kuis_form_2'); ?>">OK</a>'
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