
   
        <!-- Content Wrapper -->
                        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div class="container">
                <div class="y-20">
                 <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Kuis Nomor 3</h6>
                                </div>
                                <div class="card-body p-4">
                                    <h4 class="text-primary">Perhatikan Soal berikut ini</h4>
                                    <p>Yunus ingin memasukkan audio dari halaman web lain dengan link audio www.audio.id/master/audio/air.mp3 ke dalam halaman web yang dibuatnya.  Yunus ingin pemutaran audio tersebut dapat terus mengulang-ulang tanpa berhenti. Bantu Yunus untuk membuatnya!</p>
                                    <div class="card bg-gray-400 shadow mb-4 p-4">
                                    
                                    <div id="assignmentcontainer">
<form name="form"method="POST" onSubmit="submit()">                                 
&lt;!DOCTYPE html&gt;<br>
&lt;html&gt;<br>
&nbsp;&nbsp;&lt;body&gt;<br>

&nbsp;&nbsp;&nbsp;&nbsp;&lt;audio <input spellcheck="false" class="editablesection" name="satu" oninput="writinginput(this, 0)" style="width: 53px;"> &gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; <input spellcheck="false" class="editablesection" name="dua" oninput="writinginput(this, 0)" style="width: 60px;">&nbsp;&nbsp; src="<input spellcheck="false" class="editablesection" name="tiga" oninput="writinginput(this, 0)" style="width: 240px;">"      &nbsp;&nbsp; <input spellcheck="false" class="editablesection" name="empat" oninput="writinginput(this, 0)" style="width: 53px;">="audio/mpeg"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ini Suara AIR<br>
&nbsp;&nbsp;&nbsp;&nbsp;< <input spellcheck="false" class="editablesection" name="lima" oninput="writinginput(this, 0)" style="width: 53px;"> &gt;<br>

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
        if (form.satu.value == "loop", 
            form.dua.value == "source",
            form.tiga.value == "www.audio.id/master/audio/air.mp3",
            form.empat.value == "type",
            form.lima.value == "/audio")
        {
            swal({ 
                title: "Good job!",
                text: "Yuk lanjut kuis berikutnya!",
                type: "success", 
                showConfirmButton: false,
                allowOutsideClick: false,
                footer:'<a class="btn-lg btn-primary" href="<?= base_url('Kuis/kuis_multimedia_3'); ?>">OK</a>'
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