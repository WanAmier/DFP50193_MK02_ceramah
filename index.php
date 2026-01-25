<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Ceramah Software & Application</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<div class="container">
    <h1>Ceramah Profesional: "Kecemerlangan Akademik & Kerjaya"</h1>

    <div class="speaker">
        <img src="lecturer.jpeg" alt="Penceramah">
        <div>
            <h2>NOR ZURAIDA BINTI MOHD GAMINAN</h2>
            <p><b>Gelaran:</b> Ketua Program DIT (Software & Application Development)</p>
            <p><b>Kepakaran:</b> Pembangunan Teknologi Software & Application 
        </div>
    </div>

    <div class="info">
        <h3>Sinopsis</h3>
        <p>Ceramah ini memberi panduan praktikal untuk mencapai kecemerlangan akademik dan membina kerjaya yang berjaya.</p>

        <h3>Logistik</h3>
        <p><b>Tarikh:</b> 15 Mac 2026</p>
        <p><b>Masa:</b> 9.00 pagi - 12.00 tengah hari</p>
        <p><b>Lokasi:</b> Dewan Utama, Politeknik Tuanku Syed Sirajuddin</p>

        <h3>Yuran</h3>
        <p>RM 250.00 seorang</p>

        <h3>Hubungan</h3>
        <p>Email: amierhamzah2005@gmail.com | Tel: 013 351-5866</p>
    </div>

    <div class="form-section">
        <h2>Borang Pendaftaran</h2>
        <form action="pengesahan.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm();">

            <label>Nama Penuh</label>
            <input type="text" name="nama" required>

            <label>Alamat E-mel</label>
            <input type="email" name="email" required>

            <label>Nombor Telefon</label>
            <input type="text" name="telefon" required>

            <label>Kategori Peserta</label>
            <select name="kategori" required>
                <option value="">-- Pilih --</option>
                <option>Pelajar</option>
                <option>Pensyarah</option>
                <option>Orang Awam</option>
                <option>Korporat</option>
            </select>

            <label>Bilangan Slot</label>
            <input type="number" id="slot" name="slot" min="1" required>

            <label>Bukti Pembayaran</label>
            <input type="file" name="resit" required>

            <label>
                <input type="checkbox" id="terma" name="terma" required>
                Saya bersetuju dengan Terma & Syarat
            </label>

            <button type="submit">Hantar Pendaftaran</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2026 Ceramah Software & Application</p>
    </footer>
</div>

</body>
</html>
