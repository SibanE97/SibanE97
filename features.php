<?php
$pageTitle = "Features | Eswatini School Management System";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container">

  <!-- Page Header -->
  <header class="page-header">
    <div class="badge">
      <i class="fas fa-cogs" style="margin-right: 6px;"></i> Powerful. Simple. Local.
    </div>
    <h1>All the tools your school needs — <span>in one place</span></h1>
    <p>
      From admissions to alumni, our platform covers every aspect of school management.
      Built for Eswatini, trusted by schools across the Kingdom.
    </p>
  </header>

  <!-- Quick feature tabs -->
  <div class="feature-tabs">
    <a href="#student-records"><i class="fas fa-user-graduate" style="margin-right: 6px;"></i> Student Records</a>
    <a href="#attendance"><i class="fas fa-clock" style="margin-right: 6px;"></i> Attendance</a>
    <a href="#grades"><i class="fas fa-book-open" style="margin-right: 6px;"></i> Grades</a>
    <a href="#fees"><i class="fas fa-coins" style="margin-right: 6px;"></i> Fees</a>
    <a href="#communication"><i class="fas fa-comments" style="margin-right: 6px;"></i> Communication</a>
    <a href="#teacher-tools"><i class="fas fa-chalkboard-teacher" style="margin-right: 6px;"></i> Teacher Tools</a>
  </div>

  <!-- Deep dive features -->
  <section class="features-deep">

    <!-- 1. Student Records -->
    <div class="feature-block" id="student-records">
      <div class="feature-block-content">
        <span class="feature-tag">Student Information</span>
        <h2><i class="fas fa-user-graduate"></i> Complete student records</h2>
        <p>
          Maintain a secure, digital profile for every learner — from admission to graduation.
          Store personal details, guardian contacts, medical notes, and academic history in one place.
        </p>
        <ul class="feature-list">
          <li><i class="fas fa-check-circle"></i> Digital admission forms & document uploads</li>
          <li><i class="fas fa-check-circle"></i> Automatic class allocation & student IDs</li>
          <li><i class="fas fa-check-circle"></i> Guardian & emergency contact management</li>
          <li><i class="fas fa-check-circle"></i> Academic transcript generation</li>
        </ul>
        <a href="#" class="btn btn-primary" style="padding: 12px 28px;">Explore student records →</a>
      </div>
      <div class="feature-block-image">
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-user-plus"></i></div>
          <div class="mini-text"><h4>New admission</h4><p>Grade 8 · Manzini</p></div>
          <div class="mini-stat">+12</div>
        </div>
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-id-card"></i></div>
          <div class="mini-text"><h4>Student profiles</h4><p>Active records</p></div>
          <div class="mini-stat">1,248</div>
        </div>
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-file-alt"></i></div>
          <div class="mini-text"><h4>Transcripts issued</h4><p>This term</p></div>
          <div class="mini-stat">84</div>
        </div>
      </div>
    </div>

    <!-- 2. Attendance (reversed) -->
    <div class="feature-block reverse" id="attendance">
      <div class="feature-block-content">
        <span class="feature-tag">Daily Operations</span>
        <h2><i class="fas fa-clock"></i> Smart attendance tracking</h2>
        <p>
          Mark attendance in under a minute, whether in class or on the playground.
          Our system works offline and syncs when you're back online.
        </p>
        <ul class="feature-list">
          <li><i class="fas fa-check-circle"></i> One-tap roll call for teachers</li>
          <li><i class="fas fa-check-circle"></i> Automatic SMS alerts to parents for absentees</li>
          <li><i class="fas fa-check-circle"></i> Daily, weekly & termly attendance reports</li>
          <li><i class="fas fa-check-circle"></i> Integration with school timetable</li>
        </ul>
        <a href="#" class="btn btn-primary" style="padding: 12px 28px;">See attendance demo →</a>
      </div>
      <div class="feature-block-image">
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-calendar-check"></i></div>
          <div class="mini-text"><h4>Today's attendance</h4><p>St. Marks High</p></div>
          <div class="mini-stat">94%</div>
        </div>
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-bell"></i></div>
          <div class="mini-text"><h4>Parent alerts sent</h4><p>Absent students</p></div>
          <div class="mini-stat">7</div>
        </div>
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-chart-simple"></i></div>
          <div class="mini-text"><h4>Term average</h4><p>All classes</p></div>
          <div class="mini-stat">91.2%</div>
        </div>
      </div>
    </div>

    <!-- 3. Grades -->
    <div class="feature-block" id="grades">
      <div class="feature-block-content">
        <span class="feature-tag">Academic</span>
        <h2><i class="fas fa-book-open"></i> Grades & report cards</h2>
        <p>
          Capture marks for tests, exams, and continuous assessment. Generate professional
          report cards aligned with the Eswatini curriculum.
        </p>
        <ul class="feature-list">
          <li><i class="fas fa-check-circle"></i> Custom grading scales (A–F, Eswatini system)</li>
          <li><i class="fas fa-check-circle"></i> Automatic calculation of averages & positions</li>
          <li><i class="fas fa-check-circle"></i> One-click term report generation (PDF)</li>
          <li><i class="fas fa-check-circle"></i> Subject-wise performance analytics</li>
        </ul>
        <a href="#" class="btn btn-primary" style="padding: 12px 28px;">View grade features →</a>
      </div>
      <div class="feature-block-image">
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-pen"></i></div>
          <div class="mini-text"><h4>Grade 7 Maths</h4><p>Term 2 average</p></div>
          <div class="mini-stat">78%</div>
        </div>
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-file-pdf"></i></div>
          <div class="mini-text"><h4>Reports generated</h4><p>This week</p></div>
          <div class="mini-stat">156</div>
        </div>
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-ranking-star"></i></div>
          <div class="mini-text"><h4>Top student</h4><p>Overall position</p></div>
          <div class="mini-stat">1st</div>
        </div>
      </div>
    </div>

    <!-- 4. Fees (reversed) -->
    <div class="feature-block reverse" id="fees">
      <div class="feature-block-content">
        <span class="feature-tag">Finance</span>
        <h2><i class="fas fa-coins"></i> School fee management</h2>
        <p>
          Track fees, send reminders, and accept payments — including mobile money.
          Reduce arrears and simplify reconciliation.
        </p>
        <ul class="feature-list">
          <li><i class="fas fa-check-circle"></i> Fee structure setup per grade / term</li>
          <li><i class="fas fa-check-circle"></i> Mobile money integration (MTN MoMo, Eswatini Mobile)</li>
          <li><i class="fas fa-check-circle"></i> Automated payment reminders via SMS</li>
          <li><i class="fas fa-check-circle"></i> Real-time arrears & collection reports</li>
        </ul>
        <a href="#" class="btn btn-primary" style="padding: 12px 28px;">Explore fee module →</a>
      </div>
      <div class="feature-block-image">
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-credit-card"></i></div>
          <div class="mini-text"><h4>Fees collected</h4><p>Term 2 target</p></div>
          <div class="mini-stat">E1.24M</div>
        </div>
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-clock"></i></div>
          <div class="mini-text"><h4>Outstanding</h4><p>Students with arrears</p></div>
          <div class="mini-stat">18</div>
        </div>
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-mobile-alt"></i></div>
          <div class="mini-text"><h4>MoMo payments</h4><p>Today</p></div>
          <div class="mini-stat">E42,500</div>
        </div>
      </div>
    </div>

    <!-- 5. Communication -->
    <div class="feature-block" id="communication">
      <div class="feature-block-content">
        <span class="feature-tag">Engagement</span>
        <h2><i class="fas fa-comments"></i> Parent & staff communication</h2>
        <p>
          Keep everyone in the loop with announcements, SMS, and a dedicated parent portal.
          Reduce phone calls and paperwork.
        </p>
        <ul class="feature-list">
          <li><i class="fas fa-check-circle"></i> Bulk SMS & email to parents</li>
          <li><i class="fas fa-check-circle"></i> Parent portal for results, attendance & fees</li>
          <li><i class="fas fa-check-circle"></i> Staff announcements & internal messaging</li>
          <li><i class="fas fa-check-circle"></i> Event calendar & reminders</li>
        </ul>
        <a href="#" class="btn btn-primary" style="padding: 12px 28px;">See communication tools →</a>
      </div>
      <div class="feature-block-image">
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-sms"></i></div>
          <div class="mini-text"><h4>SMS sent today</h4><p>Announcements & alerts</p></div>
          <div class="mini-stat">1,240</div>
        </div>
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-users"></i></div>
          <div class="mini-text"><h4>Parent portal logins</h4><p>This week</p></div>
          <div class="mini-stat">682</div>
        </div>
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-calendar-alt"></i></div>
          <div class="mini-text"><h4>Upcoming event</h4><p>Sports day · 12 May</p></div>
          <div class="mini-stat">RSVP</div>
        </div>
      </div>
    </div>

    <!-- 6. Teacher Tools (reversed) -->
    <div class="feature-block reverse" id="teacher-tools">
      <div class="feature-block-content">
        <span class="feature-tag">For Educators</span>
        <h2><i class="fas fa-chalkboard-teacher"></i> Teacher productivity tools</h2>
        <p>
          Give teachers back their time with lesson planning, timetable management,
          and resource sharing — all accessible from any device.
        </p>
        <ul class="feature-list">
          <li><i class="fas fa-check-circle"></i> Digital lesson plans & schemes of work</li>
          <li><i class="fas fa-check-circle"></i> Personalised timetables</li>
          <li><i class="fas fa-check-circle"></i> Shared resource library (past papers, notes)</li>
          <li><i class="fas fa-check-circle"></i> Substitute teacher management</li>
        </ul>
        <a href="#" class="btn btn-primary" style="padding: 12px 28px;">Explore teacher tools →</a>
      </div>
      <div class="feature-block-image">
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-book"></i></div>
          <div class="mini-text"><h4>Lesson plans</h4><p>Created this term</p></div>
          <div class="mini-stat">142</div>
        </div>
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-file-pdf"></i></div>
          <div class="mini-text"><h4>Resources shared</h4><p>Past papers & notes</p></div>
          <div class="mini-stat">320</div>
        </div>
        <div class="mini-card">
          <div class="mini-icon"><i class="fas fa-clock"></i></div>
          <div class="mini-text"><h4>Time saved</h4><p>Per teacher / week</p></div>
          <div class="mini-stat">4 hrs</div>
        </div>
      </div>
    </div>

  </section>

  <!-- Highlights -->
  <section class="highlights">
    <h2 class="section-title">And there's more</h2>
    <p class="section-subtitle">Extra tools that make a big difference in day-to-day school life.</p>
    <div class="highlights-grid">
      <div class="highlight-card">
        <div class="highlight-icon"><i class="fas fa-wifi"></i></div>
        <h3>Offline mode</h3>
        <p>Keep working even without internet — perfect for rural schools. Data syncs automatically when back online.</p>
      </div>
      <div class="highlight-card">
        <div class="highlight-icon"><i class="fas fa-shield-alt"></i></div>
        <h3>Secure & private</h3>
        <p>Role-based access, encrypted data, and regular backups. Your school's data is safe with us.</p>
      </div>
      <div class="highlight-card">
        <div class="highlight-icon"><i class="fas fa-chart-pie"></i></div>
        <h3>Analytics dashboard</h3>
        <p>Get insights on enrolment, performance, attendance, and finances at a glance.</p>
      </div>
      <div class="highlight-card">
        <div class="highlight-icon"><i class="fas fa-language"></i></div>
        <h3>SiSwati & English</h3>
        <p>Full interface in both official languages, with support for local naming conventions.</p>
      </div>
      <div class="highlight-card">
        <div class="highlight-icon"><i class="fas fa-headset"></i></div>
        <h3>Local support</h3>
        <p>Our support team is based in Eswatini and understands your school's context.</p>
      </div>
      <div class="highlight-card">
        <div class="highlight-icon"><i class="fas fa-cloud-upload-alt"></i></div>
        <h3>Automatic updates</h3>
        <p>We continuously improve the platform — you get new features without any hassle.</p>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <div class="cta-section">
    <h2>See these features in action</h2>
    <p>Book a free, no-obligation demo. We'll show you how Eswatini SMS can work for your school.</p>
    <a href="#" class="cta-btn">
      <i class="fas fa-calendar-check" style="margin-right: 8px;"></i> Book a free demo
    </a>
  </div>

</div>

<?php include 'includes/footer.php'; ?>