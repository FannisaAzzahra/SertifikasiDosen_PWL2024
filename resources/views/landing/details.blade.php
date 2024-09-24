<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Professor Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    @include('components.navbar')
    <section class="professor-details pb-5">
        <div class="container">
            <div class="row align-items-center mb-30">
                <div class="col-lg-4">
                    <img src="images/hd1.png" class="img-fluid rounded-circle" alt="Professor Image">
                </div>
                <div class="col-lg-8">
                    <h1 class="display-4">Dr. John Doe</h1>
                    <p class="lead">Professor of Computer Science</p>
                    <p class="text-muted">Specializing in Artificial Intelligence, Machine Learning, and Data Science.</p>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <h3 class="small-header">
                                (4.8/5)
                            </h3>
                            <div class="rating">
                                <img src="images/ic_star.svg" height="28" alt="">
                                <img src="images/ic_star.svg" height="28" alt="">
                                <img src="images/ic_star.svg" height="28" alt="">
                                <img src="images/ic_star.svg" height="28" alt="">
                                <img src="images/ic_star_half.svg" height="28" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-8">
                    <h3 class="mb-3">About the Professor</h3>
                    <p>
                        Dr. John Doe is a renowned expert in the field of computer science with over 20 years of experience. His research primarily focuses on developing cutting-edge algorithms in AI and Machine Learning. Dr. Doe has published numerous papers in top-tier journals and has been invited to speak at international conferences.
                    </p>
                    <h3 class="mb-3">Courses Taught</h3>
                    <ul>
                        <li>Artificial Intelligence</li>
                        <li>Machine Learning</li>
                        <li>Data Structures and Algorithms</li>
                        <li>Deep Learning</li>
                    </ul>
                    <h3 class="mb-3">Research Interests</h3>
                    <ul>
                        <li>Artificial Intelligence</li>
                        <li>Machine Learning</li>
                        <li>Data Science</li>
                        <li>Natural Language Processing</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h3 class="mb-4">Contact Information</h3>
                        <p><strong>Email:</strong> johndoe@university.edu</p>
                        <p><strong>Office:</strong> Room 301, Science Building</p>
                        <p><strong>Office Hours:</strong> Mon - Wed, 2 PM - 4 PM</p>
                        <h3 class="mt-5 mb-4">Awards and Recognition</h3>
                        <ul>
                            <li>Best Research Paper Award 2023</li>
                            <li>AI Innovator of the Year 2021</li>
                            <li>Top 50 Influential Scientists in AI (2020)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
