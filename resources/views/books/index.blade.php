<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <title>📚 Daftar Buku — Elegant Library</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg-primary: #f8f9fd;
      --bg-secondary: #ffffff;
      --surface: linear-gradient(145deg, #ffffff, #f0f4ff);
      --text-primary: #1e293b;
      --text-secondary: #64748b;
      --text-muted: #94a3b8;
      --accent: #6366f1;
      --accent-light: #818cf8;
      --accent-dark: #4f46e5;
      --border: rgba(226, 232, 240, 0.8);
      --shadow: 0 10px 40px rgba(99, 102, 241, 0.08);
      --shadow-hover: 0 20px 60px rgba(99, 102, 241, 0.12);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: var(--bg-primary);
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      color: var(--text-primary);
      line-height: 1.6;
      -webkit-font-smoothing: antialiased;
    }

    .container {
      max-width: 1400px;
      margin: 0 auto;
      padding: 2.5rem 2rem;
    }

    /* HEADER ELEGANT */
    .header {
      margin-bottom: 3rem;
      animation: fadeInDown 0.6s ease;
    }

    .header-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 2rem;
      margin-bottom: 1.5rem;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .logo {
      width: 50px;
      height: 50px;
      background: linear-gradient(135deg, var(--accent), var(--accent-light));
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      box-shadow: 0 8px 24px rgba(99, 102, 241, 0.2);
    }

    .brand-text h1 {
      font-size: 2rem;
      font-weight: 800;
      color: var(--text-primary);
      letter-spacing: -0.02em;
    }

    .brand-text p {
      font-size: 0.875rem;
      color: var(--text-secondary);
      font-weight: 400;
    }

    .btn-primary {
      background: linear-gradient(135deg, var(--accent), var(--accent-light));
      color: white;
      padding: 0.75rem 1.75rem;
      border-radius: 12px;
      border: none;
      font-weight: 600;
      font-size: 0.9rem;
      cursor: pointer;
      box-shadow: 0 4px 16px rgba(99, 102, 241, 0.3);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      text-decoration: none;
      display: inline-block;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(99, 102, 241, 0.4);
    }

    .btn-primary:active {
      transform: translateY(0);
    }

    /* STATS CARD */
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .stat-card {
      background: var(--bg-secondary);
      padding: 1.5rem;
      border-radius: 16px;
      border: 1px solid var(--border);
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
      transition: all 0.3s ease;
    }

    .stat-card:hover {
      transform: translateY(-4px);
      box-shadow: var(--shadow);
    }

    .stat-label {
      font-size: 0.8rem;
      color: var(--text-muted);
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    .stat-value {
      font-size: 2rem;
      font-weight: 800;
      color: var(--text-primary);
      margin-top: 0.5rem;
    }

    /* MAIN CARD */
    .main-card {
      background: var(--bg-secondary);
      border-radius: 20px;
      padding: 2rem;
      box-shadow: var(--shadow);
      border: 1px solid var(--border);
      animation: fadeInUp 0.6s ease;
    }

    /* SEARCH BAR */
    .search-section {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 1.5rem;
      margin-bottom: 2rem;
      padding-bottom: 1.5rem;
      border-bottom: 1px solid var(--border);
    }

    .search-box {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      background: var(--bg-primary);
      padding: 0.5rem 1rem;
      border-radius: 12px;
      border: 1px solid var(--border);
      flex: 1;
      max-width: 400px;
      transition: all 0.3s ease;
    }

    .search-box:focus-within {
      border-color: var(--accent);
      box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
    }

    .search-icon {
      color: var(--text-muted);
      font-size: 1.2rem;
    }

    .search-input {
      flex: 1;
      border: none;
      background: transparent;
      font-size: 0.9rem;
      color: var(--text-primary);
      outline: none;
    }

    .search-input::placeholder {
      color: var(--text-muted);
    }

    .filter-group {
      display: flex;
      gap: 0.75rem;
    }

    .btn-filter {
      padding: 0.6rem 1.2rem;
      background: var(--bg-primary);
      border: 1px solid var(--border);
      border-radius: 10px;
      font-size: 0.85rem;
      font-weight: 500;
      color: var(--text-secondary);
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn-filter:hover,
    .btn-filter.active {
      background: var(--accent);
      color: white;
      border-color: var(--accent);
    }

    /* TABLE ELEGANT */
    .table-wrapper {
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
    }

    thead tr {
      border-bottom: 2px solid var(--border);
    }

    th {
      padding: 1rem 1.25rem;
      text-align: left;
      font-size: 0.75rem;
      font-weight: 700;
      color: var(--text-muted);
      text-transform: uppercase;
      letter-spacing: 0.08em;
    }

    tbody tr {
      border-bottom: 1px solid var(--border);
      transition: all 0.3s ease;
    }

    tbody tr:hover {
      background: var(--bg-primary);
    }

    td {
      padding: 1.25rem;
      font-size: 0.9rem;
    }

    .book-number {
      width: 45px;
      height: 45px;
      background: linear-gradient(135deg, #f0f4ff, #e0e7ff);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      color: var(--accent);
      font-size: 0.9rem;
    }

    .book-title {
      font-weight: 600;
      color: var(--text-primary);
      font-size: 1rem;
      margin-bottom: 0.25rem;
    }

    .book-code {
      font-size: 0.75rem;
      color: var(--text-muted);
      font-weight: 500;
    }

    .book-meta {
      color: var(--text-secondary);
      font-weight: 500;
    }

    .badge {
      display: inline-block;
      padding: 0.35rem 0.75rem;
      background: linear-gradient(135deg, #f0fdf4, #dcfce7);
      color: #16a34a;
      border-radius: 8px;
      font-size: 0.75rem;
      font-weight: 600;
    }

    /* ACTION BUTTONS */
    .action-buttons {
      display: flex;
      gap: 0.5rem;
      justify-content: flex-end;
    }

    .btn-action {
      padding: 0.5rem 1rem;
      border-radius: 8px;
      font-size: 0.8rem;
      font-weight: 600;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }

    .btn-view {
      background: #f0f4ff;
      color: var(--accent);
    }

    .btn-view:hover {
      background: var(--accent);
      color: white;
    }

    .btn-edit {
      background: #fef3c7;
      color: #d97706;
    }

    .btn-edit:hover {
      background: #d97706;
      color: white;
    }

    .btn-delete {
      background: #fee2e2;
      color: #dc2626;
    }

    .btn-delete:hover {
      background: #dc2626;
      color: white;
    }

    /* EMPTY STATE */
    .empty-state {
      text-align: center;
      padding: 4rem 2rem;
    }

    .empty-state-icon {
      font-size: 4rem;
      margin-bottom: 1rem;
      opacity: 0.5;
    }

    .empty-state-text {
      color: var(--text-muted);
      font-size: 1rem;
    }

    /* FOOTER */
    .footer {
      margin-top: 3rem;
      text-align: center;
      color: var(--text-muted);
      font-size: 0.85rem;
    }

    .footer strong {
      color: var(--accent);
      font-weight: 600;
    }

    /* ANIMATIONS */
    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
      .container {
        padding: 1.5rem 1rem;
      }

      .header-top {
        flex-direction: column;
        align-items: flex-start;
      }

      .brand-text h1 {
        font-size: 1.5rem;
      }

      .search-section {
        flex-direction: column;
        align-items: stretch;
      }

      .search-box {
        max-width: 100%;
      }

      table {
        font-size: 0.85rem;
      }

      th, td {
        padding: 0.75rem;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    
    <!-- HEADER -->
    <header class="header">
      <div class="header-top">
        <div class="brand">
          <div class="logo">📚</div>
          <div class="brand-text">
            <h1>Perpustakaan Digital</h1>
            <p>Sistem manajemen koleksi buku modern & elegan</p>
          </div>
        </div>

        <!-- BUTTON TAMBAH BUKU -->
        <a href="{{ route('books.create') }}" class="btn-primary">+ Tambah Buku Baru</a>
      </div>

      <!-- STATS -->
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-label">Total Buku</div>
          <div class="stat-value">{{ $books->count() }}</div>
        </div>
        <div class="stat-card">
          <div class="stat-label">Dipinjam</div>
          <div class="stat-value">0</div>
        </div>
        <div class="stat-card">
          <div class="stat-label">Tersedia</div>
          <div class="stat-value">{{ $books->count() }}</div>
        </div>
        <div class="stat-card">
          <div class="stat-label">Kategori</div>
          <div class="stat-value">1</div>
        </div>
      </div>
    </header>

    <!-- MAIN CARD -->
    <section class="main-card">
      
      <!-- SEARCH & FILTER -->
      <div class="search-section">
        <div class="search-box">
          <span class="search-icon">🔍</span>
          <input type="text" class="search-input" placeholder="Cari judul, ISBN, atau penulis..." />
        </div>
        <div class="filter-group">
          <button class="btn-filter active">Semua</button>
          <button class="btn-filter">Tersedia</button>
          <button class="btn-filter">Dipinjam</button>
        </div>
      </div>

      <!-- TABLE -->
      <div class="table-wrapper">
        <table>
          <thead>
            <tr>
              <th style="width: 80px;">No</th>
              <th>Judul & Kode</th>
              <th>ISBN</th>
              <th>Penulis</th>
              <th>Tahun</th>
              <th>Status</th>
              <th style="text-align: right;">Aksi</th>
            </tr>
          </thead>

          <tbody>
            @forelse($books as $index => $book)
            <tr>
              <td>
                <div class="book-number">{{ $index + 1 }}</div>
              </td>

              <td>
                <div class="book-title">{{ $book->title }}</div>
                <div class="book-code">BK-{{ date('Y') }}-{{ str_pad($book->id, 3, '0', STR_PAD_LEFT) }}</div>
              </td>

              <td class="book-meta">{{ $book->isbn }}</td>
              <td class="book-meta">{{ $book->author }}</td>
              <td class="book-meta">{{ $book->year }}</td>

              <td><span class="badge">✓ Tersedia</span></td>

              <td>
                <div class="action-buttons">
                  
                  <!-- DETAIL -->
                  <a href="{{ route('books.show', $book->id) }}" 
                     class="btn-action btn-view">Detail</a>

                  <!-- EDIT -->
                  <a href="{{ route('books.edit', $book->id) }}" 
                     class="btn-action btn-edit">Edit</a>

                  <!-- DELETE -->
                  <form action="{{ route('books.destroy', $book->id) }}" 
                        method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn-action btn-delete">Hapus</button>
                  </form>

                </div>
              </td>
            </tr>
            @empty
              <tr>
                <td colspan="7">
                  <div class="empty-state">
                    <div class="empty-state-icon">📚</div>
                    <div class="empty-state-text">Belum ada data buku. Mulai tambahkan koleksi Anda!</div>
                  </div>
                </td>
              </tr>
            @endforelse
          </tbody>

        </table>
      </div>

    </section>

    <!-- FOOTER -->
    <footer class="footer">
      © 2024 Perpustakaan Digital — Powered by <strong>Fartech ID</strong>
    </footer>

  </div>
</body>
</html>