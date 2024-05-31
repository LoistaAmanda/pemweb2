<x-layout>
<x-slot >
    <x-slot name="page_name">Halaman Pasien / Create</x-slot>
    <x-slot name="page_title"> Form Data Pasien</x-slot>
    <x-slot name="page_content">
    <form class="forms-sample" action="{{ url('dashboard/pasien/store') }}" method="post">
          @csrf
          <div class="form-group row">
              <label for="kode" class="col-sm-4 col-form-label">kode Pasien</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="kode" name="kode"
                      placeholder="Masukkan kode Pasien">
              </div>
          </div>

          <div class="form-group row">
              <label for="nama" class="col-sm-4 col-form-label">Nama Pasien</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama" name="nama"
                      placeholder="Masukkan Nama Pasien">
              </div>
          </div>

          <div class="form-group row">
              <label for="tmp_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                      placeholder="Masukkan Tempat Lahir">
              </div>
          </div>

          <div class="form-group row">
              <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-8">
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                      placeholder="Masukkan Tanggal Lahir">
              </div>
          </div>

          <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-8">
                    <select class="form-control" id="gender" name="gender">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
          </div>

          <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label">Email</label>
              <div class="col-sm-8">
                  <input type="email" class="form-control" id="email" name="email"
                      placeholder="Masukkan Email Pasien">
              </div>
          </div>

          <div class="form-group row">
              <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="alamat" name="alamat"
                      placeholder="Masukkan Alamat Pasien">
              </div>
          </div>

          <div class="form-group row">
              <label for="kel_nama" class="col-sm-4 col-form-label">Nama Kelurahan Pasien</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="kel_nama" name="kel_nama"
                      placeholder="Masukkan Nama Kelurahan Pasien">
              </div>
          </div>

          <div class="form-group row">
              <div class="col-sm-4"></div>
              <div class="col-sm-8">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
              </div>
          </div>
        </form>
    </x-slot>
</x-slot>
</x-layout>