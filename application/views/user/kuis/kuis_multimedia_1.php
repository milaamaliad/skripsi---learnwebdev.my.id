
   
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
                                    <p>Dina ingin menampilkan gambar di halaman web yang sedang dibuatnya. Nama file dari gambar adalah kucing.png yang berada pada folder lain yaitu folder gambar. Dina ingin gambar yang ditampilkan memiliki lebar 500 pixel dengan tinggi setengah dari lebarnya. Bantu Dina untuk membuat!</p>
                                    <div class="card bg-gray-400 shadow mb-4 p-4">
                                    
                                    <div id="assignmentcontainer">
<form name="form"method="POST" onSubmit="submit()">                                 
&lt;!DOCTYPE html&gt;<br>
&lt;html&gt;<br>
&nbsp;&nbsp;&lt;body&gt;<br>

&nbsp;&nbsp;&nbsp;&nbsp;&lt;h2&gt;Gambar Kucing&lt;/h2&gt;<br>

&nbsp;&nbsp;&nbsp;&nbsp;&lt; <input spellcheck="false" class="editablesection" name="satu" oninput="writinginput(this, 0)" style="width: 53px;">&nbsp;&nbsp; src="<input spellcheck="false" class="editablesection" name="dua" oninput="writinginput(this, 0)" style="width: 200px;">"  &nbsp;&nbsp; <input spellcheck="false" class="editablesection" name="tiga" oninput="writinginput(this, 0)" style="width: 53px;">="Gambar Kucing"  &nbsp;&nbsp;<input spellcheck="false" class="editablesection" name="empat" oninput="writinginput(this, 0)" style="width: 53px;">="500px" height="<input spellcheck="false" class="editablesection" name="lima" oninput="writinginput(this, 0)" style="width: 53px;">"&gt;<br>

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
        if (form.satu.value == "img", 
            form.dua.value == "gambar/kucing.png",
            form.tiga.value == "alt",
            form.empat.value == "width",
            form.lima.value == "250px")
        {
            swal({ 
                title: "Good job!",
                text: "Yuk lanjut kuis berikutnya!",
                type: "success", 
                showConfirmButton: false,
                allowOutsideClick: false,
                footer:'<a class="btn-lg btn-primary" href="<?= base_url('Kuis/kuis_multimedia_2'); ?>">OK</a>'
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