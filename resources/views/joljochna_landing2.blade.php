<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/landing_page.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>জলজোছনা - আপনার স্বপ্নের বাড়ি</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
        <div class="container-nav">
            <!-- Logo -->
            <div style="margin-left: 35px;">
                <a class="navbar-brand d-flex align-items-center" href="#home">
                    <i class="fas fa-home me-2 text-warning"></i>
                    <span class="brand-text">জলজোছনা</span>
                </a>
            </div>


            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">হোম</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">আমাদের সম্পর্কে</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">সুবিধা</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">মূল্য তালিকা</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">মন্তব্য</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#other-projects">অন্যান্য প্রকল্প</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">যোগাযোগ</a>
                    </li>
                </ul>

                <!-- CTA Button - Perfectly right aligned -->
                <div class="nav-actions ms-lg-2" style="margin-right: 35px;">
                    <a href="#contact" class="btn btn-warning btn-cta">
                        <i class="fas fa-calendar-check me-2"></i>
                        এখনই বুক করুন
                    </a>
                </div>
            </div>
        </div>
    </nav>


    <section id="home" class="hero">
        <div class="hero-content">
            <h1>মুলা বুদ্ধির আগে</h1>
            <h2>বাড়িং বুকিং করুন</h2>
            <p class="hero-subtitle">প্রকল্পের মূল্য তালিকা - বুকিং পরিমাণ: ১০,০০০ টাকা (কার্য প্রতি)</p>
            <div class="cta-buttons">
                <a href="#pricing" class="btn btn-primary">মূল্য দেখুন</a>
                <a href="#contact" class="btn btn-secondary">যোগাযোগ করুন</a>
            </div>
        </div>
        <div class="scroll-indicator">
            <span></span>
        </div>
    </section>

    <section id="features" class="features">
        <h2 class="section-title">আমাদের সুবিধাসমূহ</h2>
        <p class="section-subtitle">NEX Real Estate এর একটি প্রকল্প</p>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🏘️</div>
                <h3>প্রিমিয়াম লোকেশন</h3>
                <p>প্রকল্পের ঠিকানা: শুভনূর ৩৮৮ বাড়ি সিদ্ধার্থ এস আবাস, খুলনায় অবস্থিত</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📋</div>
                <h3>সহজ কিস্তি সুবিধা</h3>
                <p>০৩, ০৫, ১০, ও ২০ কিস্তির সুবিধা সহ নমনীয় পেমেন্ট প্ল্যান</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h3>বিভিন্ন প্লট সাইজ</h3>
                <p>২.৫ কাঠা থেকে ৫ কাঠা পর্যন্ত বিভিন্ন সাইজের প্লট উপলব্ধ</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">✅</div>
                <h3>আইনি নিশ্চয়তা</h3>
                <p>সম্পূর্ণ আইনি প্রক্রিয়া ও ডকুমেন্টেশন নিশ্চিত</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🚗</div>
                <h3>সহজ যোগাযোগ</h3>
                <p>প্রধান সড়কের সাথে সরাসরি সংযোগ ও উন্নত যোগাযোগ ব্যবস্থা</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🌳</div>
                <h3>সবুজ পরিবেশ</h3>
                <p>পরিকল্পিত সবুজায়ন এবং আধুনিক সুবিধা সম্বলিত</p>
            </div>
        </div>
    </section>

    <section id="pricing" class="pricing">
        <h2 class="section-title">মূল্য তালিকা</h2>
        <p class="section-subtitle">আপনার বাজেট অনুযায়ী নির্বাচন করুন</p>
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>২০ কুড়া মালা (২.৫ কাঠা)</h3>
                <div class="price">৮০,০০,০০০ টাকা</div>
                <p class="price-details">০৩% ডাউন পেমেন্ট: ৩৫,০০০০০ টাকা</p>
                <ul class="price-list">
                    <li>০৩ কিস্তি: ৪০,০০০০০ টাকা</li>
                    <li>০৫ কিস্তি: ৯,৪০,০০০০০ টাকা</li>
                    <li>১০ কিস্তি: ৯,৯৬,০০০০০ টাকা</li>
                    <li>২০ কিস্তি: ১,৩৮,০০০০০ টাকা</li>
                </ul>
                <a href="#contact" class="btn btn-primary">বুকিং করুন</a>
            </div>

            <div class="pricing-card featured">
                <h3>৩০ কুড়া মালা (৩.৭৫ কাঠা)</h3>
                <div class="price">৮৮,০০,০০০ টাকা</div>
                <p class="price-details">০৩% ডাউন পেমেন্ট: ৩৮,৪৯৯৯৯ টাকা</p>
                <ul class="price-list">
                    <li>০৩ কিস্তি: ১০,৮৮৯৯৯ টাকা</li>
                    <li>০৫ কিস্তি: ১,০৩,০০০০০ টাকা</li>
                    <li>১০ কিস্তি: ১,৮৮,০৯৯৯৯ টাকা</li>
                    <li>২০ কিস্তি: ১,২৮,৮০০০০ টাকা</li>
                </ul>
                <a href="#contact" class="btn btn-primary">জনপ্রিয়</a>
            </div>

            <div class="pricing-card">
                <h3>৪০ কুড়া মালা (৫ কাঠা)</h3>
                <div class="price">৮৬,০০,০০০ টাকা</div>
                <p class="price-details">০৩% ডাউন পেমেন্ট: ৩৭,৫০০০০ টাকা</p>
                <ul class="price-list">
                    <li>০৩ কিস্তি: ১৮,০০০০০ টাকা</li>
                    <li>০৫ কিস্তি: ৯,৭৮,০০০০০ টাকা</li>
                    <li>১০ কিস্তি: ৯,৭৮,০০০০০ টাকা</li>
                    <li>২০ কিস্তি: ১,২৭৮,০০০০০ টাকা</li>
                </ul>
                <a href="#contact" class="btn btn-primary">বুকিং করুন</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section (Now a Carousel) -->
    <section id="testimonials" class="testimonials">
        <h2 class="section-title" style="color: #1a7a4a;">বিনিয়োগকারী মন্তব্য</h2>
        <p class="section-subtitle">আমাদের গ্রাহকরা আমাদের প্রকল্প সম্পর্কে কী বলেন</p>

        <div class="carousel-wrapper">
            <button id="prevTestimonialBtn" class="carousel-btn prev-btn">❮</button>
            <div class="carousel-container">
                <div id="testimonialTrack" class="carousel-track">

                    <div class="testimonial-card">
                        <!-- Investor Info (LEFT Column) -->
                        <div class="investor-meta">
                            <div class="investor-avatar">FA</div>
                            <div>
                                <div class="investor-name">জনাব. ফারহান আহমেদ</div>
                                <div class="investor-title">ব্যবসায়ী, ঢাকা</div>
                            </div>
                        </div>
                        <!-- Quote Content (RIGHT Column) -->
                        <div class="quote-content-wrapper">
                            <span class="quote-icon">❝</span>
                            <p class="quote-text">জলজোছনা প্রকল্প দেখে আমি সত্যিই মুগ্ধ! দারুণ লোকেশন, আর পেমেন্ট
                                প্ল্যানগুলো খুবই নমনীয়। আমার বিনিয়োগের সেরা সিদ্ধান্ত ছিল।</p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="investor-meta">
                            <div class="investor-avatar">JF</div>
                            <div>
                                <div class="investor-name">মিসেস. জান্নাতুল ফেরদৌস</div>
                                <div class="investor-title">গৃহিণী, খুলনা</div>
                            </div>
                        </div>
                        <div class="quote-content-wrapper">
                            <span class="quote-icon">❝</span>
                            <p class="quote-text">নেক্স রিয়েল এস্টেট এর সাথে কাজ করা সহজ ছিল। সমস্ত আইনি ডকুমেন্টেশন
                                পরিষ্কার এবং দ্রুত সম্পন্ন হয়েছে। আমি অন্য প্রকল্পে বিনিয়োগের পরিকল্পনা করছি।</p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="investor-meta">
                            <div class="investor-avatar">SR</div>
                            <div>
                                <div class="investor-name">জনাব. শফিকুর রহমান</div>
                                <div class="investor-title">প্রকৌশলী, যুক্তরাজ্য</div>
                            </div>
                        </div>
                        <div class="quote-content-wrapper">
                            <span class="quote-icon">❝</span>
                            <p class="quote-text">পরিকল্পিত সবুজ পরিবেশ এবং যোগাযোগ ব্যবস্থা খুবই চমৎকার। ভবিষ্যতের
                                জন্য এটি একটি নিরাপদ ও লাভজনক বিনিয়োগ। আমি ১০০% সন্তুষ্ট।</p>
                        </div>
                    </div>

                    <!-- Added one more for effect -->
                    <div class="testimonial-card">
                        <div class="investor-meta">
                            <div class="investor-avatar">AK</div>
                            <div>
                                <div class="investor-name">মিসেস. আয়েশা খানম</div>
                                <div class="investor-title">শিক্ষিকা, চট্টগ্রাম</div>
                            </div>
                        </div>
                        <div class="quote-content-wrapper">
                            <span class="quote-icon">❝</span>
                            <p class="quote-text">প্রকল্পের অবস্থান ও উন্নত যোগাযোগ আমাকে আকর্ষণ করেছে। বুকিং
                                প্রক্রিয়া খুবই সহজ ছিল। আমি আমার বন্ধুদেরও এখানে বিনিয়োগ করতে উৎসাহিত করব।</p>
                        </div>
                    </div>

                </div>
            </div>
            <button id="nextTestimonialBtn" class="carousel-btn next-btn">❯</button>
        </div>

    </section>


<section class="my-5" style="margin-left: 68px; margin-right: 68px;">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
         <button id="prevTestimonialBtn" class="carousel-btn prev-btn">❮</button>
      <div class="carousel-item active">
        <div class="d-flex justify-content-center flex-wrap gap-3">
          <div class="card" style="width: 18rem;">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="">
            <div class="card-body text-center">
              <h5 class="card-title">Card title 1</h5>
              <p class="card-text">Example content here.</p>
              <a href="#" class="btn btn-primary">View</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="">
            <div class="card-body text-center">
              <h5 class="card-title">Card title 2</h5>
              <p class="card-text">Example content here.</p>
              <a href="#" class="btn btn-primary">View</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="">
            <div class="card-body text-center">
              <h5 class="card-title">Card title 3</h5>
              <p class="card-text">Example content here.</p>
              <a href="#" class="btn btn-primary">View</a>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="d-flex justify-content-center flex-wrap gap-3">
          <div class="card" style="width: 18rem;">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="">
            <div class="card-body text-center">
              <h5 class="card-title">Card title 4</h5>
              <p class="card-text">Example content here.</p>
              <a href="#" class="btn btn-primary">View</a>
            </div>
          </div>
          <!-- more cards -->
        </div>
      </div>
       <button id="nextTestimonialBtn" class="carousel-btn next-btn">❯</button>
    </div>

    {{-- <!-- FIXED CONTROLS -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon " aria-hidden="true" style="background-color:#0a4d2e; border-radius:50%; padding:20px;"></span>
      <span class="visually-hidden btn-lg">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:#0a4d2e; border-radius:50%; padding:20px;"></span>
      <span class="visually-hidden">Next</span>
    </button> --}}
  </div>
</section>



    <!-- Other Projects Section - Updated to Carousel -->
    <section id="other-projects" class="other-projects">
        <h2 class="section-title">অন্যান্য প্রকল্প</h2>
        <p class="section-subtitle">NEX Real Estate-এর সফল প্রকল্পগুলো দেখুন</p>

        <div class="carousel-wrapper">
            <button id="prevBtn" class="carousel-btn prev-btn">❮</button>
            <div class="carousel-container">
                <div id="projectTrack" class="carousel-track">

                    <div class="project-card">
                        <div class="project-image">🏙️</div>
                        <div class="project-content">
                            <h3>শান্তি নিবাস</h3>
                            <p>শহরের ঠিক মাঝে আপনার শান্তির ঠিকানা। সব আধুনিক সুবিধা নিয়ে, ঢাকায় এক নতুন, বিলাসবহুল
                                জীবন শুরু করুন।</p>
                            <a href="#contact" class="btn btn-primary"
                                style="padding: 0.8rem 2rem; font-size: 1rem;">বিস্তারিত জানুন</a>
                        </div>
                    </div>

                    <div class="project-card">
                        <div class="project-image">🏡</div>
                        <div class="project-content">
                            <h3>সবুজ ভিটা</h3>
                            <p>নদীর একদম পাশে, যেখানে আপনি পাবেন নির্মল শান্তি। প্রকৃতির কাছাকাছি একটি নির্ভেজাল ও
                                সুন্দর জীবন।</p>
                            <a href="#contact" class="btn btn-primary"
                                style="padding: 0.8rem 2rem; font-size: 1rem;">বিস্তারিত জানুন</a>
                        </div>
                    </div>

                    <div class="project-card">
                        <div class="project-image">🏢</div>
                        <div class="project-content">
                            <h3>প্রত্যাশা টাওয়ার</h3>
                            <p>খুলনার সেরা লোকেশনে আপনার ব্যবসার জন্য সেরা অফিস স্পেস। এখানে বিনিয়োগ মানেই উজ্জ্বল
                                ভবিষ্যৎ!</p>
                            <a href="#contact" class="btn btn-primary"
                                style="padding: 0.8rem 2rem; font-size: 1rem;">বিস্তারিত জানুন</a>
                        </div>
                    </div>

                    <div class="project-card">
                        <div class="project-image">🏗️</div>
                        <div class="project-content">
                            <h3>নির্মাণ প্লাজা</h3>
                            <p>ব্যস্ত শহরের কেন্দ্রে আধুনিক এবং পরিবেশ-বান্ধব বাণিজ্যিক স্থান। ব্যবসা বাড়ানোর জন্য
                                আদর্শ বিনিয়োগ।</p>
                            <a href="#contact" class="btn btn-primary"
                                style="padding: 0.8rem 2rem; font-size: 1rem;">বিস্তারিত জানুন</a>
                        </div>
                    </div>

                </div>
            </div>
            <button id="nextBtn" class="carousel-btn next-btn">❯</button>
        </div>

        <!-- See More Button Kept -->
        <div style="text-align: center; margin-top: 3rem;">
            <a href="#contact" class="btn btn-primary">আরও দেখুন</a>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2 class="section-title">যোগাযোগ করুন</h2>
        <p class="section-subtitle">আমরা আপনার সেবায় প্রস্তুত</p>
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <div class="contact-details">
                        <h3>ফোন</h3>
                        <p>+880 1991 995 995<br>+880 1991 994 994<br>+880 1997 995 995<br>+880 1677 600 000</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📧</div>
                    <div class="contact-details">
                        <h3>ইমেইল</h3>
                        <p>hello.nexgroup@gmail.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">🌐</div>
                    <div class="contact-details">
                        <h3>ওয়েবসাইট</h3>
                        <p>www.joljochna.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <div class="contact-details">
                        <h3>ঠিকানা</h3>
                        <p>শুভনূর ৩৮৮ বাড়ি সিদ্ধার্থ এস আবাস<br>খুলনা, বাংলাদেশ</p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <h3 style="margin-bottom: 2rem;">বুকিং তথ্য পাঠান</h3>
                <form>
                    <div class="form-group">
                        <label>নাম</label>
                        <input type="text" placeholder="আপনার নাম লিখুন" required>
                    </div>
                    <div class="form-group">
                        <label>ফোন নম্বর</label>
                        <input type="tel" placeholder="আপনার ফোন নম্বর" required>
                    </div>
                    <div class="form-group">
                        <label>ইমেইল</label>
                        <input type="email" placeholder="আপনার ইমেইল ঠিকানা" required>
                    </div>
                    <div class="form-group">
                        <label>আগ্রহের প্লট সাইজ</label>
                        <input type="text" placeholder="যেমন: ৩০ কুড়া মালা">
                    </div>
                    <div class="form-group">
                        <label>বার্তা</label>
                        <textarea rows="4" placeholder="আপনার প্রশ্ন বা মন্তব্য"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">পাঠান</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <div class="footer-logo">
                    <i class="fas fa-home"></i>
                    <h2>জলজোছনা</h2>
                </div>
                <p>NEX Real Estate এর একটি প্রকল্প। আপনার স্বপ্নের বাড়ি নির্মাণের জন্য প্রিমিয়াম লোকেশনে সবুজ পরিবেশে
                    গড়ে উঠেছে জলজোছনা।</p>

                <div class="contact-info">
                    <div class="contact-item" style="background-color: #ffd700">
                        <i class="fas fa-phone-alt" style="color: #0a4d2e"></i>
                        <div class="phone-no" style="color: #0a4d2e">
                            <strong style="color: #0a4d2e">ফোন নম্বর</strong><br>
                            +880 1991 995 995<br>
                            +880 1991 994 994
                        </div>
                    </div>
                    <div class="contact-item" style="background-color: #ffd700">
                        <i class="fas fa-envelope" style="color: #0a4d2e"></i>
                        <div class="email" style="color: #0a4d2e">
                            <strong style="color: #0a4d2e">ইমেইল</strong><br>
                            hello.nexup@gmail.com
                        </div>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-section" style="margin-left: 110px">
                <h3>প্রকল্পের ঠিকানা</h3>
                <p>শুভনূর ৩৮৮ বাড়ি সিদ্ধার্থ এস আবাস, খুলনা, বাংলাদেশ</p>

                <h3>যোগাযোগের ঠিকানা</h3>
                <p>NEX Real Estate, Century Trade Center, House-23/C, Road-17, Kamal Ataturk Ave, Banani C/A, Dhaka</p>

                <h3>পেমেন্ট মাধ্যম</h3>
                <div class="payment-methods text-sm" style="width:220px;">
                    <span class="payment-method text-sm">
                        <i class="fas fa-mobile-alt text-sm"></i> বিকাশ
                    </span>
                    <span class="payment-method text-sm">
                        <i class="fas fa-money-bill-wave text-sm"></i> নগদ
                    </span>

                    <div style="width:220px;">
                        <span class="payment-method text-sm">
                            <i class="fas fa-university text-sm"></i> ব্যাংক ট্রান্সফার
                        </span>
                        <span class="payment-method text-sm ms-2">
                            <i class="fas fa-credit-card text-sm"></i> কার্ড
                        </span>
                    </div>

                </div>
            </div>

            <div class="footer-section" style="margin-left:110px">
                <h3>দ্রুত লিংক</h3>
                <ul class="footer-links">
                    <li><a href="#home"><i class="fas fa-chevron-right"></i> হোম</a></li>
                    <li><a href="#features"><i class="fas fa-chevron-right"></i> সুবিধাসমূহ</a></li>
                    <li><a href="#pricing"><i class="fas fa-chevron-right"></i> মূল্য তালিকা</a></li>
                    <li><a href="#contact"><i class="fas fa-chevron-right"></i> যোগাযোগ</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> গ্যালারি</a></li>
                </ul>

                <h3>আইনি তথ্য</h3>
                <ul class="footer-links">
                    <li><a href="#"><i class="fas fa-chevron-right"></i> গোপনীয়তা নীতি</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> সেবার শর্তাবলী</a></li>
                </ul>
            </div>

            <div class="footer-section qr-section">
                <h3 class="text-center">অবস্থান দেখুন</h3>
                <div class="qr-container">
                    <div id="qr-reader"></div>
                    <div id="qr-reader-results"></div>
                    <a href="https://maps.google.com/?q=শুভনূর+৩৮৮+বাড়ি+সিদ্ধার্থ+এস+আবাস,+খুলনা" target="_blank"
                        class="map-btn">
                        <i class="fas fa-map-marker-alt"></i> গুগল ম্যাপে দেখুন
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© ২০২৫ জলজোছনা। সর্বস্বত্ব সংরক্ষিত। | NEX Real Estate এর একটি প্রকল্প</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/html5-qrcode/minified/html5-qrcode.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
