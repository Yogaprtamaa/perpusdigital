<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <title>✏️ Edit Buku — Elegant Library</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg-primary: #f8f9fd;
      --bg-secondary: #ffffff;
      --text-primary: #1e293b;
      --text-secondary: #64748b;
      --text-muted: #94a3b8;
      --accent: #6366f1;
      --accent-light: #818cf8;
      --accent-dark: #4f46e5;
      --border: rgba(226, 232, 240, 0.8);
      --shadow: 0 10px 40px rgba(99, 102, 241, 0.08);
      --success: #16a34a;
      --error: #dc2626;
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
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem 1rem;
    }

    .container {
      width: 100%;
      max-width: 700px;
      animation: fadeInUp 0.6s ease;
    }

    /* HEADER */
    .page-header {
      text-align: center;
      margin-bottom: 2.5rem;
    }

    .back-button {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      color: var(--text-secondary);
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 500;
      margin-bottom: 1rem;
      transition: all 0.3s ease;
    }

    .back-button:hover {
      color: var(--accent);
      transform: translateX(-4px);
    }

    .page-title {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
      font-size: 2rem;
      font-weight: 800;
      color: var(--text-primary);
      margin-bottom: 0.5rem;
    }

    .page-subtitle {
      color: var(--text-secondary);
      font-size: 0.95rem;
    }

    /* FORM CARD */
    .form-card {
      background: var(--bg-secondary);
      border-radius: 20px;
      padding: 2.5rem;
      box-shadow: var(--shadow);
      border: 1px solid var(--border);
    }

    /* FORM ELEMENTS */
    .form-group {
      margin-bottom: 1.75rem;
    }

    .form-label {
      display: block;
      font-size: 0.875rem;
      font-weight: 600;
      color: var(--text-primary);
      margin-bottom: 0.5rem;
      letter-spacing: 0.01em;
    }

    .form-label .required {
      color: var(--error);
      margin-left: 0.25rem;
    }

    .form-input {
      width: 100%;
      padding: 0.875rem 1rem;
      background: var(--bg-primary);
      border: 2px solid var(--border);
      border-radius: 12px;
      font-size: 0.95rem;
      color: var(--text-primary);
      transition: all 0.3s ease;
      font-family: inherit;
    }

    .form-input:focus {
      outline: none;
      border-color: var(--accent);
      background: var(--bg-secondary);
      box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
    }

    .form-input::placeholder {
      color: var(--text-muted);
    }

    .form-input:disabled {
      background: #f1f5f9;
      color: var(--text-muted);
      cursor: not-allowed;
    }

    /* INPUT ICONS */
    .input-wrapper {
      position: relative;
    }

    .input-icon {
      position: absolute;
      left: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: var(--text-muted);
      font-size: 1.1rem;
      pointer-events: none;
    }

    .input-wrapper .form-input {
      padding-left: 2.75rem;
    }

    /* FORM FOOTER */
    .form-footer {
      display: flex;
      gap: 1rem;
      margin-top: 2.5rem;
      padding-top: 1.5rem;
      border-top: 1px solid var(--border);
    }

    /* BUTTONS */
    .btn {
      padding: 0.875rem 1.75rem;
      border-radius: 12px;
      border: none;
      font-weight: 600;
      font-size: 0.95rem;
      cursor: pointer;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      flex: 1;
    }

    .btn-primary {
      background: linear-gradient(135deg, var(--accent), var(--accent-light));
      color: white;
      box-shadow: 0 4px 16px rgba(99, 102, 241, 0.3);
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(99, 102, 241, 0.4);
    }

    .btn-secondary {
      background: var(--bg-primary);
      color: var(--text-secondary);
      border: 2px solid var(--border);
    }

    .btn-secondary:hover {
      background: var(--bg-secondary);
      color: var(--text-primary);
      border-color: var(--text-muted);
    }

    .btn:active {
      transform: translateY(0);
    }

    /* INFO BOX */
    .info-box {
      background: linear-gradient(135deg, #f0f4ff, #e0e7ff);
      border-left: 4px solid var(--accent);
      padding: 1rem 1.25rem;
      border-radius: 12px;
      margin-bottom: 2rem;
      display: flex;
      align-items: start;
      gap: 0.75rem;
    }

    .info-box-icon {
      font-size: 1.25rem;
      flex-shrink: 0;
    }

    .info-box-text {
      font-size: 0.875rem;
      color: var(--text-secondary);
      line-height: 1.6;
    }

    /* HELPER TEXT */
    .helper-text {
      font-size: 0.8rem;
      color: var(--text-muted);
      margin-top: 0.375rem;
      display: flex;
      align-items: center;
      gap: 0.375rem;
    }

    /* ANIMATIONS */
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
    @media (max-width: 640px) {
      .form-card {
        padding: 1.5rem;
      }

      .page-title {
        font-size: 1.5rem;
      }

      .form-footer {
        flex-direction: column-reverse;
      }

      .btn {
        width: 100%;
      }
    }

    /* LOADING STATE */
    .btn-primary:disabled {
      opacity: 0.6;
      cursor: not-allowed;
      transform: none !important;
    }

    .btn-primary.loading::after {
      content: '';
      width: 16px;
      height: 16px;
      border: 2px solid white;
      border-top-color: transparent;
      border-radius: 50%;
      animation: spin 0.6s linear infinite;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }
  </style>
</head>

<body>
  <div class="container">
    <!-- HEADER -->
    <div class="page-header">
      <a href="#" class="back-button">← Kembali ke Daftar</a>
      <h1 class="page-title">
        <span>✏️</span>
        <span>Edit Buku</span>
      </h1>
      <p class="page-subtitle">Perbarui informasi buku dalam koleksi perpustakaan</p>
    </div>

    <!-- FORM CARD -->
    <div class="form-card">
      <!-- INFO BOX -->
      <div class="info-box">
        <span class="info-box-icon">💡</span>
        <div class="info-box-text">
          <strong>Tips:</strong> Pastikan semua informasi buku diisi dengan lengkap dan akurat. ISBN harus unik untuk setiap buku.
        </div>
      </div>

      <!-- FORM -->
      <form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- Judul Buku -->
    <div class="form-group">
        <label class="form-label">
            Judul Buku<span class="required">*</span>
        </label>
        <div class="input-wrapper">
            <span class="input-icon">📖</span>
            <input 
                type="text" 
                name="title" 
                class="form-input" 
                value="{{ old('title', $book->title) }}"
                placeholder="Masukkan judul buku"
                required
            >
        </div>
        <div class="helper-text">
            <span>ℹ️</span>
            <span>Gunakan judul lengkap buku</span>
        </div>
    </div>

    <!-- ISBN -->
    <div class="form-group">
        <label class="form-label">
            ISBN<span class="required">*</span>
        </label>
        <div class="input-wrapper">
            <span class="input-icon">🔢</span>
            <input 
                type="text" 
                name="isbn" 
                class="form-input" 
                value="{{ old('isbn', $book->isbn) }}"
                placeholder="978-0-123456-78-9"
                required
            >
        </div>
        <div class="helper-text">
            <span>ℹ️</span>
            <span>Nomor ISBN 10 atau 13 digit</span>
        </div>
    </div>

    <!-- Penulis -->
    <div class="form-group">
        <label class="form-label">
            Nama Penulis<span class="required">*</span>
        </label>
        <div class="input-wrapper">
            <span class="input-icon">✍️</span>
            <input 
                type="text" 
                name="author" 
                class="form-input" 
                value="{{ old('author', $book->author) }}"
                placeholder="Masukkan nama penulis"
                required
            >
        </div>
        <div class="helper-text">
            <span>ℹ️</span>
            <span>Nama lengkap penulis atau pengarang</span>
        </div>
    </div>

    <!-- Tahun Terbit -->
    <div class="form-group">
        <label class="form-label">
            Tahun Terbit<span class="required">*</span>
        </label>
        <div class="input-wrapper">
            <span class="input-icon">📅</span>
            <input 
                type="number" 
                name="year" 
                class="form-input" 
                value="{{ old('year', $book->year) }}"
                placeholder="2024"
                min="1900"
                max="2024"
                required
            >
        </div>
        <div class="helper-text">
            <span>ℹ️</span>
            <span>Tahun publikasi buku (1900 - 2024)</span>
        </div>
    </div>

    <!-- Tombol -->
    <div class="form-footer" style="margin-top: 20px;">
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </div>

</form>


        <!-- FORM FOOTER -->
        <div class="form-footer">
          <a href="#" class="btn btn-secondary">
            <span>✕</span>
            <span>Batal</span>
          </a>
          <button type="submit" class="btn btn-primary" id="submitBtn">
            <span>💾</span>
            <span>Simpan Perubahan</span>
          </button>
        </div>
      </form>
    </div>
  </div>

  <script>
    // Form submission handler
    document.getElementById('editBookForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      const submitBtn = document.getElementById('submitBtn');
      const originalContent = submitBtn.innerHTML;
      
      // Loading state
      submitBtn.classList.add('loading');
      submitBtn.disabled = true;
      submitBtn.innerHTML = '<span>Menyimpan...</span>';
      
      // Simulate API call
      setTimeout(() => {
        alert('✅ Buku berhasil diperbarui!');
        submitBtn.classList.remove('loading');
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalContent;
        
        // Redirect to index (uncomment in production)
        // window.location.href = 'index.html';
      }, 1500);
    });

    // Input validation feedback
    const inputs = document.querySelectorAll('.form-input');
    inputs.forEach(input => {
      input.addEventListener('blur', function() {
        if (this.value.trim() === '' && this.hasAttribute('required')) {
          this.style.borderColor = 'var(--error)';
        } else {
          this.style.borderColor = '';
        }
      });

      input.addEventListener('input', function() {
        if (this.style.borderColor === 'rgb(220, 38, 38)') {
          this.style.borderColor = '';
        }
      });
    });

    // Year validation
    const yearInput = document.querySelector('input[name="year"]');
    const currentYear = new Date().getFullYear();
    yearInput.setAttribute('max', currentYear);
  </script>
</body>
</html>