        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            

                <!-- Begin Page Content -->
                <div class="container-fluid bg-gray">
                    <div class="text-center mt-3">
                        <button type="button" data-toggle="modal" data-target="#panduan" class="btn btn-info btn-lg">Panduan</button>
                        <button type="button" onclick="runCode();"  class="btn btn-success btn-lg" value="Run Code">Run</button>
                    </div>
                    <div class="row mt-3">
                    <div class="col-lg-6">
                          <textarea id="sourceCode" class="p-4" rows="3">
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid green;
}
</style>
<body>

<h2>Kontak Perusahan</h2>

<table>
  <tr>
    <th>Perusahan</th>
    <th>Kontak</th>
    <th>Kota</th>
  </tr>
  <tr>
    <td>Dua Kelinci</td>
    <td>Maria Tan</td>
    <td>Surabaya</td>
  </tr>
  <tr>
    <td>Indofood</td>
    <td>Siska L</td>
    <td>Jakarta</td>
  </tr>
</table>

<p>Untuk lebih memahamai Format Tabel Pada Halaman Web silahkan edit dan belajar pada page ini dan pahami materi di Page Materi</p>

</body>
</html>


                          </textarea>
                    </div>

                    <div class="col-lg-6">
                        <iframe id="targetCode" class="p-4"></iframe>
                    </div>
                </div>
                </div>

<script type="text/javascript">
            function runCode()
            {
                var content = document.getElementById('sourceCode').value;
                var iframe = document.getElementById('targetCode');
                iframe = (iframe.contentWindow) ? iframe.contentWindow : (iframe.contentDocument.document) ? iframe.contentDocument.document : iframe.contentDocument;
                iframe.document.open();
                iframe.document.write(content);
                iframe.document.close();
                return false;
            }
            runCode();
        </script>



<!-- Modal -->
            <div class="modal fade" id="panduan" tabindex="-1" role="dialog" aria-labelledby="panduan" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="panduan">Panduan Praktik Coding</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body p-4">
            <p>1. Pastikan Anda telah membaca dan memahami <a href="<?= base_url('materi/materi_tabel_1'); ?>">materi Format Tabel Pada Halaman Web</a> </p>
            <p>2. Masukkan header HTML pada text box yang tersedia di sebelah kiri tampilan anda</p>
            <P>3. Masukkan CSS didalam header HTML anda</P>
            <p>4. Selanjutnya masukan body HTML</p>
            <p>5. Terakhir masukkan Footer HTML</p>
            <p>6. Pilih tombol RUN untuk melihat hasil Praktik Coding anda</p>
            <p>7. Hasil akan tertampil pada text box di sebelah kanan tampilan anda</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info waves-effect waves-light" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
                   