
   
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
                                    <p>Andy hendak membuat table untuk mendata nama, usia, dan pekerjaan kedua orang tuanya. Ayah Andy berusia 40 tahun, sedangkan Ibu Andy berusia 4 tahun lebih muda dari Ayah Andy. Bantu Andy untuk membuat table dengan html!</p>
                                    <div class="card bg-gray-400 shadow mb-4 p-4">
                                    
                                    <div id="assignmentcontainer">
<form name="form"method="POST" onSubmit="submit()">                                 
&lt;table border="1"&gt;<br><br>
&nbsp;<input spellcheck="false" class="editablesection" name="satu" oninput="writinginput(this, 0)" style="width: 53px;"><br>
&nbsp;&nbsp;&nbsp;&nbsp;<input spellcheck="false" class="editablesection" name="dua" oninput="writinginput(this, 0)" style="width: 53px;"> Nama <input spellcheck="false" class="editablesection" name="tiga" oninput="writinginput(this, 0)" style="width: 53px;"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;Usia<input spellcheck="false" class="editablesection" name="empat" oninput="writinginput(this, 0)" style="width: 53px;"><br>
&nbsp;&nbsp;&nbsp;&nbsp;<input spellcheck="false" class="editablesection" name="lima" oninput="writinginput(this, 0)"  style="width: 53px;"> Pekerjaan&lt;/th&gt;<br>
        &nbsp;&lt;/tr&gt;<br>
        &nbsp;&lt;tr&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Yusuf&lt;/td&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;<input spellcheck="false" class="editablesection" name="enam" oninput="writinginput(this, 0)" style="width: 53px;"> 40&lt;/td&gt;<br>
           &nbsp;&nbsp;&nbsp;&nbsp; &lt;td&gt;Guru&lt;/td&gt;<br>
        &nbsp;&lt;/tr&gt;<br>
       &nbsp; &lt;tr&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp; &lt;td&gt;Santi &lt;/td&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt; <input spellcheck="false" class="editablesection" name="tujuh" oninput="writinginput(this, 0)" style="width: 53px;"> &lt;/td&gt;<br>
             &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Ibu Rumah Tangga <input spellcheck="false" class="editablesection" name="delapan" oninput="writinginput(this, 0)" style="width: 53px;"><br>
        &nbsp;<input spellcheck="false" class="editablesection" name="sembilan" oninput="writinginput(this, 0)" style="width: 53px;"><br><br>
    <input spellcheck="false" class="editablesection" onkeypress="checkKey(event)" name="sepuluh" style="width: 90px;">

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
        if (form.satu.value == "<tr>", 
            form.dua.value == "<th>",
            form.tiga.value == "</th>",
            form.empat.value == "</th>",
            form.lima.value == "<th>",
            form.enam.value == "<td>",
            form.tujuh.value == "36",
            form.delapan.value == "</td>",
            form.sembilan.value == "</tr>",
            form.sepuluh.value == "</table>")
        {
            swal({ 
                title: "Good job!",
                text: "Yuk lanjut kuis berikutnya!",
                type: "success", 
                showConfirmButton: false,
                allowOutsideClick: false,
                footer:'<a class="btn-lg btn-primary" href="<?= base_url('Kuis/kuis_tabel_2'); ?>">OK</a>'
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