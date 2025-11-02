<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/landing_page.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>আমাদের সম্পর্কে - জলজোছনা</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
        <div class="container-nav">
            <div style="margin-left: 35px;">
                <a class="navbar-brand d-flex align-items-center" href="/">
                    <i class="fas fa-home me-2 text-warning"></i>
                    <span class="brand-text">জলজোছনা</span>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-auto" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item" style="margin-left: 7rem;">
                        <a class="nav-link" href="/">হোম</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/about">আমাদের সম্পর্কে</a>
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
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5 mt-5">
        <div class="container">
            <div class="row mt-5 align-items-center">
                <div class="col-lg-4 d-flex flex-column justify-content-start">
                    <div>
                        <h3>আমাদের মিশন</h3>
                        <p>আমরা গ্রাহকদের জন্য সেরা রিয়েল এস্টেট সমাধান প্রদান করি, যাতে তারা তাদের পছন্দের বাড়ি সহজেই খুঁজে পান। আমাদের লক্ষ্য হলো গ্রাহকদের সাথে স্বচ্ছতা এবং বিশ্বাসের ভিত্তিতে কাজ করা।</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="{{ asset('assets/images/realstate1.png') }}" alt="জলজোছনা" class="rounded-circle img-fluid">
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-end">
                    <div>
                        <h3>আমাদের ভিশন</h3>
                        <p>বাংলাদেশের শীর্ষ রিয়েল এস্টেট প্ল্যাটফর্ম হয়ে উঠা, যেখানে গ্রাহকের সন্তুষ্টি সর্বোচ্চ অগ্রাধিকার। আমরা ভবিষ্যতে আরও উন্নত প্রযুক্তি এবং সেবা প্রদানের মাধ্যমে গ্রাহকদের জীবনকে সহজ করতে চাই।</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>