<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/landing_page.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    @vite(['resources/css/app.css'])
    <title>আমাদের সম্পর্কে - জলজোছনা</title>
</head>

<body>
    <section class="py-20 mt-20 min-h-screen flex space-x-4 items-center justify-center gap-4 lg:gap-0 my-4 lg:my-0">
        <div class="container mx-auto px-4">
                        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 w-full bg-red-500">
                <div class="lg:self-start w-[20%] max-w-[20%] h-full">
                    <h3 class="text-2xl font-semibold">আমাদের মিশন</h3>
                    <p class="p-0 m-0">আমরা গ্রাহকদের জন্য সেরা রিয়েল এস্টেট সমাধান প্রদান করি, যাতে তারা তাদের পছন্দের বাড়ি সহজেই
                        খুঁজে পান। আমাদের লক্ষ্য হলো গ্রাহকদের সাথে স্বচ্ছতা এবং বিশ্বাসের ভিত্তিতে কাজ করা।</p>
                </div>
                <div class="w-[60%]">
                    <img src="{{ asset('assets/images/nature.jpg') }}" alt="জলজোছনা"
                        class="rounded-md w-full h-64 object-cover">
                </div>
                <div class="lg:self-end w-[20%] max-w-[20%] h-full">
                    <h3 class="text-2xl font-semibold">আমাদের ভিশন</h3>
                    <p class="p-0 m-0">বাংলাদেশের শীর্ষ রিয়েল এস্টেট প্ল্যাটফর্ম হয়ে উঠা, যেখানে গ্রাহকের সন্তুষ্টি সর্বোচ্চ
                        অগ্রাধিকার। আমরা ভবিষ্যতে আরও উন্নত প্রযুক্তি এবং সেবা প্রদানের মাধ্যমে গ্রাহকদের জীবনকে সহজ
                        করতে চাই।</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
