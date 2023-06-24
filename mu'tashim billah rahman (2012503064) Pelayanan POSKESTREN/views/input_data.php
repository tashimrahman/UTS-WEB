<div class="container">
  <h2>Input Data Pasien</h2>
  <form action="controllers/proses_input_data.php" method="post">
    <div class="form-group">
      <label>NIS:</label>
      <input type="Text" class="form-control" placeholder="Ketik NIS" name="nis">
    </div>
    <div class="form-group">
      <label>IDPasien:</label>
      <input type="Text" class="form-control" placeholder="Ketik IDPasien" name="idpasien">
    </div>
    <div class="form-group">
      <label>Nama:</label>
      <input type="Text" class="form-control" placeholder="Ketik Nama" name="nama">
    </div>
    <div class="form-group">
      <label>kamar:</label>
      <input type="Text" class="form-control" placeholder="Ketik Kamar" name="kamar">
    </div>
    <div class="form-group">
      <label>Alamat:</label>
      <input type="Text" class="form-control" placeholder="Ketik Alamat" name="alamat">
    </div>   
    <button type="submit" class="btn btn-primary">Input Data</button>
  </form>
</div>