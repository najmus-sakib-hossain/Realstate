<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>আমাদের সম্পর্কে</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Noto Sans Bengali', sans-serif;
            color: #222;
            overflow-x: hidden;
        }

        /* HERO SECTION */
        .hero {
            background: linear-gradient(to right, #0b4e2e, #187346);
            height: 75vh;
            /* half of viewport */
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            text-align: center;
        }

        .hero h5 {
            font-size: 1.5rem;
            font-weight: 700;
            text-align: center;
        }

        /* HISTORY SECTION */
        .history-section {
            padding: 60px 15px;
            background-color: #f9f9f9;
        }

        .history-title {
            font-size: 2rem;
            font-weight: 700;
            color: #0b4e2e;
            margin-bottom: 40px;
            text-align: center;
        }

        .history-card {
            background-color: #ffffff;
            border: 2px solid #0b4e2e;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .history-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        }

        .history-card h5 {
            color: #187346;
            font-weight: 700;
            margin-bottom: 15px;
        }

        /* FOUNDER SECTION */
        .founder-section {
            padding: 60px 15px;
            background-color: #e0f7fa;
            text-align: center;
        }

        .founder-title {
            font-size: 2rem;
            font-weight: 700;
            color: #0b4e2e;
            margin-bottom: 25px;
        }

        .founder-card {
            max-width: 300px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 15px;
            padding: 20px;
            border: 2px solid #187346;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .founder-card img {
            width: 100%;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .founder-card h5 {
            font-weight: 700;
            color: #0b4e2e;
            margin-bottom: 10px;
        }

        .founder-card p {
            font-size: 0.95rem;
            color: #333;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>

    <!-- HERO SECTION -->

    <!-- HERO SECTION -->
    <div class="hero d-flex flex-column justify-content-center align-items-center text-center gap-3">
        <h1>আমাদের সম্পর্কে</h1>
        <h5>“আমাদের লক্ষ্য শুধুই সেবা নয়, বরং সমাজের উন্নয়নে অবদান রাখা।”</h5>
        <h5>“প্রতিটি পদক্ষেপ আমরা বিশ্বাস ও মানের ভিত্তিতে এগিয়ে নিই, যাতে গ্রাহকরা পায় সেরা অভিজ্ঞতা।”</h5>
    </div>




    <!-- HISTORY SECTION -->
    <div class="history-section container">
        <h2 class="history-title">আমাদের ইতিহাস</h2>
        <div class="row align-items-center">

            <!-- LEFT: Text -->
            <div class="col-lg-6 col-md-12 mb-4">
                <p>
                    আমাদের সংস্থা ২০০৫ সালে শুরু হয়েছিল। ছোট একটি দল দিয়ে শুরু হলেও আমরা আজ একটি শক্তিশালী দল ও আধুনিক
                    প্রযুক্তির সাহায্যে সারা দেশের গ্রাহকদের সেবা দিচ্ছি। আমাদের মূল উদ্দেশ্য হলো মানসম্মত সেবা প্রদান
                    এবং সমাজে ইতিবাচক প্রভাব ফেলা।
                </p>
                <p>
                    সময়ের সঙ্গে সঙ্গে আমরা নতুন নতুন উদ্যোগ নিয়েছি, গ্রাহকদের চাহিদা অনুযায়ী সমাধান করেছি এবং আমাদের
                    সেবা সম্প্রসারণ করেছি। প্রতিটি চ্যালেঞ্জকে আমরা একটি নতুন সুযোগ হিসেবে গ্রহণ করেছি।
                </p>
            </div>

            <!-- RIGHT: Two Cards -->
            <div class="col-lg-6 col-md-12">
                <div class="history-card">
                    <h5>প্রথম সাফল্য</h5>
                    <p>২০০৭ সালে আমাদের প্রথম বড় প্রকল্প সম্পন্ন হয়, যা আমাদের জন্য একটি গুরুত্বপূর্ণ মাইলফলক।</p>
                </div>
                <div class="history-card">
                    <h5>প্রসারিত উদ্যোগ</h5>
                    <p>২০১৫ সালে আমরা নতুন শহরে সেবা শুরু করি, এবং গ্রাহকদের সঠিক সমাধান দিতে সক্ষম হই।</p>
                </div>
            </div>

        </div>
    </div>

    <!-- FOUNDER SECTION -->
    <div class="founder-section">
        <h2 class="founder-title">আমাদের প্রতিষ্ঠাতা</h2>
        <div class="founder-card">
            <img src="founder.jpg" alt="Founder">
            <h5>জনাব ................</h5>
            <p>জনাব........ একজন উদ্ভাবক ও সমাজসেবক, যিনি আমাদের সংস্থাকে তার দৃষ্টিভঙ্গি ও নেতৃত্বের মাধ্যমে গড়ে
                তুলেছেন।</p>
        </div>
    </div>

    <section class="min-h-screen flex space-x-4 items-center justify-center gap-4 lg:gap-0 my-4 lg:my-0">
        <div class="container mx-auto px-4 h-full">
            <div class="flex flex-col lg:flex-row items-stretch justify-between gap-8 w-full h-full">
                <div class="lg:self-start w-[25%] max-w-[25%] h-full">
                    <h3 class="text-2xl font-semibold">আমাদের মিশন</h3>
                    <p class="p-0 m-0">আমরা গ্রাহকদের জন্য সেরা রিয়েল এস্টেট সমাধান প্রদান করি, যাতে তারা তাদের পছন্দের বাড়ি সহজেই
                        খুঁজে পান। আমাদের লক্ষ্য হলো গ্রাহকদের সাথে স্বচ্ছতা এবং বিশ্বাসের ভিত্তিতে কাজ করা।</p>
                </div>
                <div class="w-[50%]">
                    <img src="/assets/images/nature.jpg" alt="জলজোছনা"
                        class="rounded-md w-full h-[750px] object-cover">
                </div>
                <div class="lg:self-end w-[25%] max-w-[25%] h-full">
                    <h3 class="text-2xl font-semibold">আমাদের ভিশন</h3>
                    <p class="p-0 m-0">বাংলাদেশের শীর্ষ রিয়েল এস্টেট প্ল্যাটফর্ম হয়ে উঠা, যেখানে গ্রাহকের সন্তুষ্টি সর্বোচ্চ
                        অগ্রাধিকার। আমরা ভবিষ্যতে আরও উন্নত প্রযুক্তি এবং সেবা প্রদানের মাধ্যমে গ্রাহকদের জীবনকে সহজ
                        করতে চাই।</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
