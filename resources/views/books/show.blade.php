<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>📘 Detail Buku — {{ $book->title }}</title>
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
      font-size: 42px;
      background: #3b82f6;
      color: white;
      padding: 12px;
      border-radius: 14px;
      display: flex;
      align-items: center;
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
    .detail-card {
      background: white;
      padding: 30px;
      border-radius: 18px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.06);
      border: 1px solid #e2e8f0;
    }

    .detail-title {
      font-size: 24px;
      font-weight: 700;
      color: #1e293b;
      margin-bottom: 10px;
    }

    .detail-code {
      font-size: 14px;
      color: #94a3b8;
      margin-bottom: 20px;
    }

    .detail-item {
      margin-bottom: 15px;
      font-size: 16px;
    }

    .detail-item strong {
      color: #475569;
      width: 140px;
      display: inline-block;
    }

    /* BADGE */
    .badge-status {
      display: inline-block;
      background: #10b981;
      color: white;
      padding: 6px 12px;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 600;
      margin-top: 8px;
    }

    /* BUTTONS */
    .btn-group {
      margin-top: 30px;
      display: flex;
      gap: 12px;
    }

    .btn {
      padding: 10px 18px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 600;
      font-size: 15px;
    }

    .btn-back {
      background: #e2e8f0;
      color: #1e293b;
    }

    .btn-back:hover {
      background: #cbd5e1;
    }

    .btn-edit {
      background: #3b82f6;
      color: white;
    }

    .btn-edit:hover {
      background: #2563eb;
    }
  </style>
</head>

<body>
  <div class="container">

    <!-- HEADER -->
    <div class="header">
      <div class="logo">📘</div>
      <div>
        <h1>Detail Buku</h1>
        <p>Informasi lengkap buku dalam perpustakaan digital</p>
      </div>
    </div>

    <!-- DETAIL CARD -->
    <div class="detail-card">

      <div class="detail-title">{{ $book->title }}</div>

      <div class="detail-code">
        Kode Buku: BK-{{ date('Y') }}-{{ str_pad($book->id, 3, '0', STR_PAD_LEFT) }}
      </div>

      <span class="badge-status">✓ Tersedia</span>

      <div class="detail-item">
        <strong>ISBN:</strong> {{ $book->isbn }}
      </div>

      <div class="detail-item">
        <strong>Penulis:</strong> {{ $book->author }}
      </div>

      <div class="detail-item">
        <strong>Tahun Terbit:</strong> {{ $book->year }}
      </div>

      <!-- BUTTON GROUP -->
      <div class="btn-group">
        <a href="{{ route('books.index') }}" class="btn btn-back">← Kembali</a>
        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-edit">✏️ Edit Buku</a>
      </div>

    </div>

  </div>
</body>
</html>
