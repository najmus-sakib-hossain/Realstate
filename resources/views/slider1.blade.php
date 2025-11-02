<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>জলজোছনা প্রজেক্ট</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #004d25, #006b33);
      font-family: 'Noto Sans Bengali', sans-serif;
      color: white;
      overflow-x: hidden;
    }

    .main-section {
      padding: 50px 15px;
    }

    /* ---------- CARD (LEFT OFFER) ---------- */
    .offer-card {
      background-color: #004e25;
      border: none;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      padding: 30px 20px;
    }

    .offer-title {
      font-size: 1.6rem;
      font-weight: 700;
      color: #ffd700;
      margin-bottom: 25px;
      text-align: center;
    }

    .plot-box {
      background-color: #125c38;
      color: #fff;
      border: 2px solid #f9b233;
      border-radius: 12px;
      padding: 15px;
      transition: transform 0.3s ease;
    }

    .plot-box:hover {
      transform: translateY(-5px);
    }

    .plot-size {
      font-size: 1.3rem;
      font-weight: 700;
      color: #ffcc33;
    }

    .category-label {
      background-color: #f9b233;
      color: #004d25;
      padding: 4px 12px;
      border-radius: 20px;
      font-weight: 700;
      font-size: 0.85rem;
      display: inline-block;
      margin-top: 6px;
    }

    .special-offer {
      margin-top: 30px;
      text-align: center;
    }

    .special-card {
      background-color: #125c38;
      border-radius: 15px;
      padding: 20px;
      border: 2px dashed #ffc107;
      display: inline-block;
    }

    .footer-note {
      margin-top: 25px;
      font-size: 0.9rem;
      line-height: 1.6;
      text-align: center;
    }

    .cta-bar {
      background-color: #ff8800;
      color: white;
      font-weight: 700;
      padding: 12px;
      margin-top: 30px;
      border-radius: 5px;
      font-size: 1rem;
      text-align: center;
    }

    /* ---------- RIGHT (MAP) ---------- */
    .map-section {
      text-align: center;
      background: rgba(0, 0, 0, 0.15);
      border-radius: 15px;
      padding: 20px;
      height: 100%;
    }

    .map-section img {
      width: 100%;
      height:450px;
      border-radius: 10px;
      border: 2px solid #ffc107;
    }

    .map-title {
      font-size: 1.4rem;
      font-weight: 700;
      color: #ffd700;
      margin-bottom: 15px;
    }

    /* ---------- RESPONSIVE ---------- */
    @media (max-width: 992px) {
      .offer-title {
        font-size: 1.4rem;
      }
      .plot-box {
        margin-bottom: 15px;
      }
    }

    @media (max-width: 768px) {
      .map-section {
        margin-top: 25px;
      }
    }
  </style>
</head>

<body>

  <div class="container main-section">
    <div class="row align-items-start">

      <!-- LEFT SIDE - OFFER DETAILS IN CARD -->
      <div class="col-lg-6 col-md-12 mb-4">
        <div class="offer-card">
          <h2 class="offer-title">বেছে নিন আপনার পছন্দের প্লট</h2>

          <div class="row g-3 justify-content-center">
            <div class="col-md-6 col-6">
              <div class="plot-box">
                <div class="plot-size">৮ কাঠা</div>
                <div class="category-label">প্রিমিয়াম প্লট</div>
              </div>
            </div>

            <div class="col-md-6 col-6">
              <div class="plot-box">
                <div class="plot-size">১০ কাঠা</div>
                <div class="category-label">ডিলাক্স প্লট</div>
              </div>
            </div>

            <div class="col-md-6 col-6">
              <div class="plot-box">
                <div class="plot-size">৩০ কাঠা</div>
                <div class="category-label">এক্সিকিউটিভ প্লট</div>
              </div>
            </div>

            <div class="col-md-6 col-6">
              <div class="plot-box">
                <div class="plot-size">২০ কাঠা</div>
                <div class="category-label">কর্পোরেট প্লট</div>
              </div>
            </div>
          </div>

          <div class="mt-4 text-center">
            <span class="category-label bg-success text-white">ক্লাব হাউজ</span>
            <span class="category-label bg-success text-white">জিম</span>
            <span class="category-label bg-success text-white">মসজিদ</span>
            <span class="category-label bg-success text-white">শপিং এরিয়া</span>
          </div>

          <div class="special-offer">
            <div class="special-card">
              <h4 class="text-warning mb-3">স্পেশাল অফার</h4>
              <p class="mb-2">🏠 প্লট বুকিং এ পাচ্ছেন ৫০% পর্যন্ত ছাড়</p>
              <p class="mb-2">💰 বুকিং মানি মাত্র ২০,০০০ টাকা</p>
              <p class="mb-2">📅 ৩০ দিনের মধ্যে কনফার্মেশন</p>
            </div>
          </div>

          <div class="footer-note">
            <p>
              সবুজ প্রকৃতি, নীরব কলকল ধারা আর নির্মল আবহাওয়া — এই জায়গাটি হতে পারে আপনার স্বপ্নের ঠিকানা!
              এখানে আছে আধুনিক রাস্তাঘাট, বিদ্যুৎ, পানি, গ্যাস, ও নিরাপত্তার নিশ্চয়তা।
            </p>
            <p>মূল্য বৃদ্ধির আগে, আজই বুকিং করুন।</p>
          </div>

          <div class="cta-bar">
            📞 এখনই যোগাযোগ করুন — সীমিত সময়ের অফার
          </div>
        </div>
      </div>

      <!-- RIGHT SIDE - MAP -->
      <div class="col-lg-6 col-md-12 " style="margin-top:10%;">
        <div class="map-section">
          <h3 class="map-title">প্রকল্পের রোডম্যাপ</h3>
          <img src="assets/images/realstate3.PNG" alt="Project Map">
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
