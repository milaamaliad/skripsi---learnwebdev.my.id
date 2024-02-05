
   
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
                                    <p>Brian ingin memasukkan video dari youtube dan video dari file pribadinya. Brian berniat menampilkan video dari youtube dengan lebar 300 pixel dengan tinggi 200 pixel. Sedangan untuk video dari file pribadinya Brian ingin menampilkan dengan lebar dan tinggi 2 kali lipat dari video youtube yang ditampilkannya. Bantu Brian untuk membuatnya!</p>
                                    <div class="card bg-gray-400 shadow mb-4 p-4">
                                    
                                    <div id="assignmentcontainer">
<form name="form"method="POST" onSubmit="submit()">                                 
&lt;!DOCTYPE html&gt;<br>
&lt;html&gt;<br>
&nbsp;&nbsp;&lt;body&gt;<br>

  &nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;Video dari Youtube&lt;/h1&gt;<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&lt; <input spellcheck="false" class="editablesection" name="satu" oninput="writinginput(this, 0)" style="width: 53px;"> &nbsp;&nbsp;&nbsp; width="<input spellcheck="false" class="editablesection" name="dua" oninput="writinginput(this, 0)" style="width: 53px;">"&nbsp;&nbsp;&nbsp;  <input spellcheck="false" class="editablesection" name="tiga" oninput="writinginput(this, 0)" style="width: 53px;">="200" src="https://www.youtube.com/embed/rzc3_b_KnHc"&gt;&lt;/iframe&gt;<br>

 &nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;Video dari File Pribadi&lt;/h1&gt;<br><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&lt; <input spellcheck="false" class="editablesection" name="empat" oninput="writinginput(this, 0)" style="width: 53px;"> &gt;<br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; <input spellcheck="false" class="editablesection" name="lima" oninput="writinginput(this, 0)" style="width: 60px;"> src="video/Rich_Brian.mp4" width="<input spellcheck="false" class="editablesection" name="enam" oninput="writinginput(this, 0)" style="width: 53px;">" height="400"&gt;<br>

&nbsp;&nbsp;&nbsp;&nbsp;&lt;/video&gt;<br>

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
        if (form.satu.value == "iframe", 
            form.dua.value == "300",
            form.tiga.value == "height",
            form.empat.value == "video",
            form.lima.value == "source",
            form.enam.value == "600")
        {
            swal({ 
                title: "Good job!",
                text: "Yuk lanjut kuis berikutnya!",
                type: "success", 
                showConfirmButton: false,
                allowOutsideClick: false,
                footer:'<a class="btn-lg btn-primary" href="<?= base_url('Kuis/kuis_form_1'); ?>">OK</a>'
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