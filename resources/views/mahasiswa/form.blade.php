<div class="form-group">
    <label for="nim">NIM</label>
    <input type="text" name="nim" class="form-control" value="{{ old('nim', $mahasiswa->nim ?? '') }}">
</div>
<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $mahasiswa->nama ?? '') }}">
</div>
<div class="form-group">
    <label for="jurusan">Jurusan</label>
    <input type="text" name="jurusan" class="form-control" value="{{ old('jurusan', $mahasiswa->jurusan ?? '') }}">
</div>
<div class="form-group">
    <label for="gender">Gender</label>
    <select name="gender" class="form-control">
        <option value="Laki-laki" {{ (old('gender', $mahasiswa->gender ?? '') == 'Laki-laki') ? 'selected' : '' }}>Laki-laki</option>
        <option value="Perempuan" {{ (old('gender', $mahasiswa->gender ?? '') == 'Perempuan') ? 'selected' : '' }}>Perempuan</option>
    </select>
</div>
<div class="form-group">
    <label for="alamat">Alamat</label>
    <textarea name="alamat" class="form-control">{{ old('alamat', $mahasiswa->alamat ?? '') }}</textarea>
</div>
