
   
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
                                    <p>Tina hendak membuat table harga HP baru dan bekas. Pada table memiliki header atau judul Nama HP yang 1 kolom sebelahnya terdapat 2 baris. Baris pertama berjudul Harga. Dan baris kedua terdapat 2 kolom yaitu Baru dan Bekas.</p>
                                    <div class="card bg-gray-400 shadow mb-4 p-4">
                                    
                                    <div id="assignmentcontainer">
<form name="form"method="POST" onSubmit="submit()">                                 
    &lt;table border="2"&gt;<br> 
&nbsp;&lt;tr&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;th <input spellcheck="false" class="editablesection" name="satu" oninput="writinginput(this, 0)" style="width: 100px;"> = "<input spellcheck="false" class="editablesection" name="dua" oninput="writinginput(this, 0)" style="width: 53px;">" &gt;Nama HP&lt;/th&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;th <input spellcheck="false" class="editablesection" name="tiga" oninput="writinginput(this, 0)" style="width: 100px;"> = "<input spellcheck="false" class="editablesection" name="empat" oninput="writinginput(this, 0)" style="width: 53px;">" &gt;Harga&lt;/th&gt;<br>
&nbsp;&lt;/tr&gt;<br>
&nbsp;&lt;tr&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;Baru&lt;/th&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt; <input spellcheck="false" class="editablesection" name="lima" oninput="writinginput(this, 0)" style="width: 53px;"> &lt;/th&gt;<br>
&nbsp;&lt;/tr&gt;<br>
&nbsp;&lt;tr&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Samsung J2&lt;/td&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;1.000.000&lt;/td&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;500.000&lt;/td&gt;<br>
&nbsp;&lt;tr&gt;<br>
&nbsp;&lt;/tr&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Samsung A2&lt;/td&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;2.000.000&lt;/td&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;1.200.000&lt;/td&gt;<br>
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
        if (form.satu.value == "rowspan", 
            form.dua.value == "2",
            form.tiga.value == "colspan",
            form.empat.value == "2",
            form.lima.value == "Bekas"
            )
        {
            swal({ 
                title: "Good job!",
                text: "Yuk lanjut kuis berikutnya!",
                type: "success", 
                showConfirmButton: false,
                allowOutsideClick: false,
                footer:'<a class="btn-lg btn-primary" href="<?= base_url('Kuis/kuis_multimedia_1'); ?>">OK</a>'
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