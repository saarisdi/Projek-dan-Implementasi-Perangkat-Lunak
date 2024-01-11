<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/ta1.css">
<div class="form-main-wrapper">
    <div>
        <img>
        <form>
            <h1 class="mt-5 mb-5">Formulir Tugas Akhir 1 Mahasiswa Informatika UNJANI</h1>
            <div class="form-input-wrapp form-mb-3">
                <label for="firstname" class="form-form-label"> Nama Lengkap </label>
                <div>
                    <input type="text" name="Nama" id="Nama" placeholder="Nama" class="form-form-input" />
                </div>
            </div>

            <div class="form-input-wrapper form-mb-3">
                <label for="NIM" class="form-form-label">NIM</label>
                <div>
                    <input type="text" name="NIM" id="NIM" placeholder="NIM" class="form-form-input" maxlength="10" />
                </div>
            </div>

            <script>
                document.getElementById('NIM').addEventListener('input', function() {
                    // Menghapus karakter non-digit
                    var nimValue = this.value.replace(/\D/g, '');

                    // Memastikan panjang NIM selalu 10 digit
                    if (nimValue.length > 10) {
                        nimValue = nimValue.slice(0, 10);
                    }

                    // Menetapkan nilai kembali ke input
                    this.value = nimValue;
                });
            </script>

            <div class="form-mb-3">
                <label class="form-form-label">Peminatan</label>

                <select class="form-form-input" name="occupation" id="occupation">
                    <option value="male">DSE</option>
                    <option value="female">AIG</option>
                </select>
            </div>

            <div class="form-mb-3">
                <label for="age" class="form-form-label"> Umur </label>
                <input type="text" name="age" id="age" placeholder="ex:20" class="form-form-input" />
            </div>

            <div class="form-mb-3">
                <label for="dob" class="form-form-label"> Tanggal Lahir </label>
                <input type="date" name="dob" id="dob" class="form-form-input" />
            </div>

            <div class="form-mb-3">
                <label class="form-form-label">Jenis Kelamin</label>

                <select class="form-form-input" name="occupation" id="occupation">
                    <option value="male">Laki-Laki</option>
                    <option value="female">Perempuan</option>
                </select>
            </div>

            <div class="form-mb-3">
                <label for="email" class="form-form-label"> Email </label>
                <input type="email" name="email" id="email" placeholder="example@email.com" class="form-form-input" />
            </div>

            <div class="form-mb-3">
                <label for="address" class="form-form-label"> Alamat </label>

                <input type="text" name="address" id="address" placeholder="Street address" class="form-form-input form-mb-3" />
                <input type="text" name="address2" id="address2" placeholder="Street address line 2" class="form-form-input" />
            </div>

            <div class="form-mb-3 form-input-wrapp">
                <label for="phone" class="form-form-label"> Nomor HP/Telepon </label>

                <div>
                    <input type="text" name="areacode" id="areacode" placeholder="Area code" class="form-form-input form-w-45" />

                    <input type="text" name="phone" id="phone" placeholder="Phone number" class="form-form-input" />
                </div>
            </div>

            <div class="form-input-flex">
                <div>
                    <label for="post" class="form-form-label"> Post/Zip code </label>
                    <input type="text" name="post" id="post" placeholder="ex:8976" class="form-form-input" />
                </div>
                <div>
                    <label for="city" class="form-form-label"> Kota </label>
                    <input type="text" name="city" id="city" placeholder="ex: Cimahi" class="form-form-input" />
                </div>
            </div>

            <div class="form-mb-3">
                <label for="upload" class="form-form-label">
                    Upload KHS
                </label>
                <input type="file" name="KHS" id="KHS" class="form-form-input form-form-file" />
            </div>

            <button class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>
