<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eswatini School Management System | Home</title>
  <!-- Google Fonts & Font Awesome for clean icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: #f8fafc;
      color: #0f172a;
      line-height: 1.5;
    }

    /* Eswatini-inspired accents: blue, yellow, red from flag */
    :root {
      --eswatini-blue: #3b82f6;
      --eswatini-yellow: #fbbf24;
      --eswatini-red: #dc2626;
      --dark: #0f172a;
      --gray: #475569;
      --light-bg: #f1f5f9;
    }

    .container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* Header / Nav */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 16px 0;
      flex-wrap: wrap;
      gap: 16px;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo-icon {
      background: linear-gradient(135deg, var(--eswatini-blue), #1e40af);
      width: 44px;
      height: 44px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 24px;
      box-shadow: 0 8px 16px -4px rgba(59, 130, 246, 0.3);
    }

    .logo-text h1 {
      font-size: 1.5rem;
      font-weight: 700;
      letter-spacing: -0.02em;
      line-height: 1.2;
    }

    .logo-text span {
      font-size: 0.75rem;
      font-weight: 500;
      color: var(--eswatini-yellow);
      background: var(--dark);
      padding: 2px 8px;
      border-radius: 20px;
      letter-spacing: 0.3px;
    }

    .nav-links {
      display: flex;
      gap: 28px;
      align-items: center;
      flex-wrap: wrap;
    }

    .nav-links a {
      text-decoration: none;
      color: var(--dark);
      font-weight: 500;
      transition: color 0.2s;
      font-size: 0.95rem;
    }

    .nav-links a:hover {
      color: var(--eswatini-blue);
    }

    .btn {
      display: inline-block;
      padding: 10px 22px;
      border-radius: 40px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.2s;
      font-size: 0.9rem;
      border: none;
      cursor: pointer;
    }

    .btn-primary {
      background: var(--eswatini-blue);
      color: white;
      box-shadow: 0 8px 16px -6px rgba(59, 130, 246, 0.4);
    }

    .btn-primary:hover {
      background: #2563eb;
      transform: translateY(-2px);
    }

    .btn-outline {
      background: transparent;
      border: 1.5px solid var(--eswatini-blue);
      color: var(--eswatini-blue);
    }

    .btn-outline:hover {
      background: #eff6ff;
    }

    /* Hero Section */
    .hero {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 40px;
      padding: 60px 0 70px;
      flex-wrap: wrap;
    }

    .hero-content {
      flex: 1 1 500px;
    }

    .badge {
      display: inline-block;
      background: #dbeafe;
      color: #1e40af;
      font-weight: 600;
      font-size: 0.8rem;
      padding: 6px 14px;
      border-radius: 30px;
      margin-bottom: 20px;
      letter-spacing: 0.3px;
      border: 1px solid #bfdbfe;
    }

    .hero-content h1 {
      font-size: 3.2rem;
      font-weight: 700;
      line-height: 1.2;
      letter-spacing: -0.03em;
      margin-bottom: 20px;
    }

    .hero-highlight {
      color: var(--eswatini-blue);
      border-bottom: 4px solid var(--eswatini-yellow);
      display: inline-block;
      padding-bottom: 4px;
    }

    .hero-content p {
      font-size: 1.1rem;
      color: var(--gray);
      max-width: 550px;
      margin-bottom: 32px;
    }

    .hero-buttons {
      display: flex;
      gap: 16px;
      flex-wrap: wrap;
      margin-bottom: 36px;
    }

    .hero-stats {
      display: flex;
      gap: 32px;
      flex-wrap: wrap;
    }

    .stat-item {
      display: flex;
      flex-direction: column;
    }

    .stat-number {
      font-size: 1.8rem;
      font-weight: 700;
      color: var(--dark);
      line-height: 1.2;
    }

    .stat-label {
      font-size: 0.85rem;
      color: var(--gray);
      font-weight: 500;
    }

    .hero-image {
      flex: 1 1 380px;
      background: linear-gradient(145deg, #eef2ff, #ffffff);
      border-radius: 32px;
      padding: 30px 24px;
      box-shadow: 0 30px 50px -20px rgba(0, 0, 0, 0.15);
      border: 1px solid #e2e8f0;
      position: relative;
    }

    .hero-image::before {
      content: "🇸🇿";
      position: absolute;
      top: 20px;
      right: 30px;
      font-size: 2.4rem;
      opacity: 0.8;
    }

    .dashboard-preview {
      display: flex;
      flex-direction: column;
      gap: 18px;
    }

    .preview-card {
      background: white;
      border-radius: 18px;
      padding: 16px 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.02);
      border: 1px solid #eef2f6;
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .preview-icon {
      width: 42px;
      height: 42px;
      background: #dbeafe;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--eswatini-blue);
      font-size: 1.2rem;
    }

    .preview-text h4 {
      font-weight: 600;
      font-size: 0.95rem;
    }

    .preview-text p {
      font-size: 0.8rem;
      color: var(--gray);
    }

    .preview-progress {
      margin-left: auto;
      font-weight: 600;
      font-size: 0.9rem;
      color: #16a34a;
    }

    /* Features Section */
    .section-title {
      text-align: center;
      font-size: 2.2rem;
      font-weight: 700;
      letter-spacing: -0.02em;
      margin-bottom: 12px;
    }

    .section-subtitle {
      text-align: center;
      color: var(--gray);
      max-width: 600px;
      margin: 0 auto 48px;
    }

    .features {
      padding: 70px 0;
      background: white;
    }

    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
    }

    .feature-card {
      background: var(--light-bg);
      padding: 32px 24px;
      border-radius: 28px;
      transition: all 0.25s;
      border: 1px solid #e9eef4;
    }

    .feature-card:hover {
      transform: translateY(-6px);
      background: white;
      box-shadow: 0 20px 30px -12px rgba(0, 0, 0, 0.08);
      border-color: #dbeafe;
    }

    .feature-icon {
      width: 56px;
      height: 56px;
      background: white;
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
      color: var(--eswatini-blue);
      margin-bottom: 24px;
      box-shadow: 0 6px 12px -6px rgba(0, 0, 0, 0.05);
    }

    .feature-card h3 {
      font-size: 1.3rem;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .feature-card p {
      color: var(--gray);
      font-size: 0.95rem;
    }

    /* Local context section */
    .local-section {
      padding: 60px 0;
    }

    .local-grid {
      display: flex;
      gap: 30px;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
    }

    .local-card {
      background: white;
      border-radius: 28px;
      padding: 32px;
      flex: 1 1 280px;
      border-left: 8px solid var(--eswatini-yellow);
      box-shadow: 0 12px 24px -12px rgba(0, 0, 0, 0.08);
    }

    .local-card i {
      color: var(--eswatini-blue);
      font-size: 2rem;
      margin-bottom: 16px;
    }

    .local-card h3 {
      font-size: 1.3rem;
      margin-bottom: 12px;
    }

    .local-card p {
      color: var(--gray);
    }

    .local-card:nth-child(2) {
      border-left-color: var(--eswatini-red);
    }

    .local-card:nth-child(3) {
      border-left-color: var(--eswatini-blue);
    }

    /* CTA Section */
    .cta-section {
      background: var(--dark);
      border-radius: 48px;
      padding: 60px 48px;
      margin: 40px 0 80px;
      text-align: center;
      color: white;
      position: relative;
      overflow: hidden;
    }

    .cta-section::after {
      content: "🇸🇿";
      position: absolute;
      bottom: -10px;
      right: 20px;
      font-size: 7rem;
      opacity: 0.1;
      pointer-events: none;
    }

    .cta-section h2 {
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 16px;
      position: relative;
      z-index: 2;
    }

    .cta-section p {
      color: #cbd5e1;
      max-width: 600px;
      margin: 0 auto 32px;
      position: relative;
      z-index: 2;
    }

    .cta-btn {
      background: var(--eswatini-yellow);
      color: var(--dark);
      padding: 14px 36px;
      font-weight: 700;
      border-radius: 50px;
      text-decoration: none;
      display: inline-block;
      transition: all 0.2s;
      position: relative;
      z-index: 2;
      box-shadow: 0 12px 20px -10px rgba(251, 191, 36, 0.5);
    }

    .cta-btn:hover {
      background: #f59e0b;
      transform: scale(1.02);
    }

    /* Footer */
    footer {
      border-top: 1px solid #e2e8f0;
      padding: 40px 0 24px;
      color: var(--gray);
      font-size: 0.9rem;
    }

    .footer-grid {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 30px;
      margin-bottom: 32px;
    }

    .footer-brand p {
      max-width: 280px;
      margin-top: 12px;
    }

    .footer-links h4 {
      font-weight: 600;
      color: var(--dark);
      margin-bottom: 16px;
    }

    .footer-links ul {
      list-style: none;
    }

    .footer-links li {
      margin-bottom: 8px;
    }

    .footer-links a {
      text-decoration: none;
      color: var(--gray);
    }

    .footer-links a:hover {
      color: var(--eswatini-blue);
    }

    .footer-bottom {
      text-align: center;
      padding-top: 24px;
      border-top: 1px solid #e2e8f0;
      font-size: 0.85rem;
    }

    /* Mobile adjustments */
    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }
      .hero-content h1 {
        font-size: 2.4rem;
      }
      .hero {
        padding: 30px 0;
      }
      .cta-section {
        padding: 40px 24px;
      }
      .cta-section h2 {
        font-size: 1.8rem;
      }
      .section-title {
        font-size: 1.8rem;
      }
      .logo-text h1 {
        font-size: 1.2rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Header -->
    <nav class="navbar">
      <div class="logo">
        <div class="logo-icon">
          <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="logo-text">
          <h1>Eswatini SMS</h1>
          <span>School Management</span>
        </div>
      </div>
      <div class="nav-links">
        <a href="#">Home</a>
        <a href="#">Features</a>
        <a href="#">Schools</a>
        <a href="#">Pricing</a>
        <a href="#">Contact</a>
        <a href="#" class="btn btn-outline">Sign In</a>
        <a href="#" class="btn btn-primary">Get Started</a>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
      <div class="hero-content">
        <div class="badge">
          <i class="fas fa-flag" style="color: #fbbf24; margin-right: 6px;"></i> Proudly serving Eswatini schools
        </div>
        <h1>
          Manage your school <span class="hero-highlight">smarter</span>, not harder.
        </h1>
        <p>
          The all-in-one platform for Eswatini schools — from Manzini to Mbabane, 
          Hluti to Siteki. Streamline admissions, attendance, grades, and communication 
          in one secure place.
        </p>
        <div class="hero-buttons">
          <a href="#" class="btn btn-primary" style="padding: 14px 32px; font-size: 1rem;">
            <i class="fas fa-rocket" style="margin-right: 8px;"></i> Request a demo
          </a>
          <a href="#" class="btn btn-outline" style="padding: 14px 32px; font-size: 1rem;">
            <i class="fas fa-play" style="margin-right: 8px;"></i> Watch video
          </a>
        </div>
        <div class="hero-stats">
          <div class="stat-item">
            <span class="stat-number">120+</span>
            <span class="stat-label">Schools onboard</span>
          </div>
          <div class="stat-item">
            <span class="stat-number">45k+</span>
            <span class="stat-label">Students managed</span>
          </div>
          <div class="stat-item">
            <span class="stat-number">98%</span>
            <span class="stat-label">Satisfaction rate</span>
          </div>
        </div>
      </div>

      <div class="hero-image">
        <div class="dashboard-preview">
          <div class="preview-card">
            <div class="preview-icon"><i class="fas fa-user-graduate"></i></div>
            <div class="preview-text">
              <h4>Student enrollment</h4>
              <p>New admissions · Term 2</p>
            </div>
            <div class="preview-progress">+24</div>
          </div>
          <div class="preview-card">
            <div class="preview-icon"><i class="fas fa-calendar-check"></i></div>
            <div class="preview-text">
              <h4>Attendance today</h4>
              <p>St. Marks High</p>
            </div>
            <div class="preview-progress">94%</div>
          </div>
          <div class="preview-card">
            <div class="preview-icon"><i class="fas fa-file-invoice"></i></div>
            <div class="preview-text">
              <h4>Fee collection</h4>
              <p>E1,240,000 · Term target</p>
            </div>
            <div class="preview-progress">76%</div>
          </div>
          <div class="preview-card">
            <div class="preview-icon"><i class="fas fa-chart-line"></i></div>
            <div class="preview-text">
              <h4>Grade 7 results</h4>
              <p>Maths & English</p>
            </div>
            <div class="preview-progress">+8.2%</div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Features Section -->
  <section class="features">
    <div class="container">
      <h2 class="section-title">Everything your school needs</h2>
      <p class="section-subtitle">
        Designed for Eswatini's primary, secondary, and high schools — with local support and offline-friendly tools.
      </p>

      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-user-plus"></i></div>
          <h3>Student records</h3>
          <p>Digital admissions, profiles, and academic history — accessible anytime, anywhere.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-clock"></i></div>
          <h3>Smart attendance</h3>
          <p>Mark attendance in seconds, generate daily reports, and notify parents automatically.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-book-open"></i></div>
          <h3>Grades & reports</h3>
          <p>Capture marks, generate term reports, and track student progress against national standards.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-coins"></i></div>
          <h3>Fee management</h3>
          <p>Track school fees, send reminders, and reconcile payments — with mobile money integration.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-comments"></i></div>
          <h3>Parent portal</h3>
          <p>Keep parents informed with SMS, email, and a self-service portal for results and announcements.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-chalkboard-teacher"></i></div>
          <h3>Teacher tools</h3>
          <p>Lesson planning, timetables, and resource sharing — built for the Eswatini curriculum.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Local / Eswatini section -->
  <div class="container">
    <section class="local-section">
      <h2 class="section-title">Made for Eswatini</h2>
      <p class="section-subtitle">We understand the unique needs of schools in the Kingdom.</p>
      <div class="local-grid">
        <div class="local-card">
          <i class="fas fa-wifi"></i>
          <h3>Low-data mode</h3>
          <p>Works smoothly on slow connections and offline — perfect for rural schools.</p>
        </div>
        <div class="local-card">
          <i class="fas fa-mobile-alt"></i>
          <h3>Mobile money ready</h3>
          <p>Integrated with MTN MoMo and Eswatini Mobile for easy fee payments.</p>
        </div>
        <div class="local-card">
          <i class="fas fa-language"></i>
          <h3>SiSwati & English</h3>
          <p>Full interface in both official languages, with support for local naming conventions.</p>
        </div>
      </div>
    </section>
  </div>

  <!-- CTA Section -->
  <div class="container">
    <div class="cta-section">
      <h2>Ready to modernise your school?</h2>
      <p>Join over 120 schools across Eswatini already using our platform. Get a free consultation and demo.</p>
      <a href="#" class="cta-btn">
        <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Book a free demo
      </a>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <div class="logo" style="margin-bottom: 12px;">
            <div class="logo-icon" style="width: 36px; height: 36px; font-size: 1.2rem;">
              <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="logo-text">
              <h1 style="font-size: 1.2rem;">Eswatini SMS</h1>
            </div>
          </div>
          <p>Empowering schools across the Kingdom with simple, powerful management tools.</p>
        </div>
        <div class="footer-links">
          <h4>Product</h4>
          <ul>
            <li><a href="#">Features</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Demo</a></li>
            <li><a href="#">Updates</a></li>
          </ul>
        </div>
        <div class="footer-links">
          <h4>Resources</h4>
          <ul>
            <li><a href="#">Help centre</a></li>
            <li><a href="#">Training</a></li>
            <li><a href="#">Case studies</a></li>
            <li><a href="#">Contact support</a></li>
          </ul>
        </div>
        <div class="footer-links">
          <h4>Company</h4>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Partners</a></li>
            <li><a href="#">Privacy</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2025 Eswatini School Management System. All rights reserved. Proudly built in the Kingdom of Eswatini.</p>
      </div>
    </div>
  </footer>
</body>
</html>