<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>➕ Tambah Buku Baru</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      margin: 0;
      padding: 30px;
      background-color: #f5f7fa;
      color: #1e293b;
    }

    .container {
      max-width: 900px;
      margin: auto;
    }

    /* HEADER */
    .header {
      display: flex;
      align-items: center;
      gap: 20px;
      margin-bottom: 30px;
    }

    .header .logo {
      font-size: 40px;
      background: #10b981;
      color: white;
      padding: 12px;
      border-radius: 14px;
    }

    .header h1 {
      margin: 0;
      font-size: 30px;
      font-weight: 700;
    }

    .header p {
      margin: 0;
      font-size: 14px;
      color: #64748b;
    }

    /* CARD */
    .form-card {
      background: white;
      padding: 30px;
      border-radius: 18px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.06);
      border: 1px solid #e2e8f0;
    }

    .form-label {
      font-weight: 600;
      margin-bottom: 6px;
      display: block;
      color: #334155;
    }

    .input-icon-box {
      position: relative;
      margin-bottom: 20px;
    }

    .input-icon-box span {
      position: absolute;
      left: 14px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 17px;
      color: #64748b;
    }

    .form-input {
      width: 100%;
      padding: 12px 14px 12px 40px;
      border: 1px solid #cbd5e1;
      border-radius: 10px;
      font-size: 15px;
      outline: none;
      transition: 0.2s;
    }

    .form-input:focus {
      border-color: #3b82f6;
      box-shadow: 0 0 0 3px rgba(59,130,246,0.2);
    }

    /* BUTTONS */
    .btn-group {
      margin-top: 25px;
      display: flex;
      gap: 12px;
    }

    .btn {
      padding: 11px 20px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 600;
      font-size: 15px;
      cursor: pointer;
      border: none;
    }

    .btn-save {
      background: #3b82f6;
      color: white;
    }

    .btn-save:hover {
      background: #2563eb;
    }

    .btn-back {
      background: #e2e8f0;
      color: #1e293b;
    }

    .btn-back:hover {
      background: #cbd5e1;
    }

  </style>
</head>

<body>
  <div class="container">

    <!-- HEADER -->
    <div class="header">
      <div class="logo">➕</div>
      <div>
        <h1>Tambah Buku Baru</h1>
        <p>Masukkan informasi lengkap buku ke dalam sistem</p>
      </div>
    </div>

    <!-- FORM -->
    <div class="form-card">

      <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <!-- Judul Buku -->
        <label class="form-label">Judul Buku</label>
        <div class="input-icon-box">
          <span>📘</span>
          <input type="text" name="title" class="form-input" placeholder="Masukkan judul lengkap buku" required>
        </div>

        <!-- ISBN -->
        <label class="form-label">ISBN</label>
        <div class="input-icon-box">
          <span>🔢</span>
          <input type="text" name="isbn" class="form-input" placeholder="978-0-123456-78-9" required>
        </div>

        <!-- Penulis -->
        <label class="form-label">Penulis</label>
        <div class="input-icon-box">
          <span>✍️</span>
          <input type="text" name="author" class="form-input" placeholder="Nama penulis buku" required>
        </div>

        <!-- Tahun -->
        <label class="form-label">Tahun Terbit</label>
        <div class="input-icon-box">
          <span>📅</span>
          <input type="number" name="year" class="form-input" placeholder="2024" min="1900" max="2025" required>
        </div>

        <!-- BUTTONS -->
        <div class="btn-group">
          <button type="submit" class="btn btn-save">💾 Simpan</button>
          <a href="{{ route('books.index') }}" class="btn btn-back">← Kembali</a>
        </div>
      </form>

    </div>

  </div>
</body>
</html>
