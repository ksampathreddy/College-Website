<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRK Institute of Science and Technology | Excellence Since 2004</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="icon" href="static/drk.png" type="image/x-icon">

    <style>
        :root {
            --maroon: #ae1617;
            --dark-maroon: #8b1212;
            --text-dark: #1e293b;
            --text-muted: #64748b;
            --bg-light: #f8fafc;
            --glass: rgba(255, 255, 255, 0.95);
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            background: #fff;
            overflow-x: hidden;
            margin-bottom: 0 !important;
            padding: 0;
        }

        /* Hero Viewport - Height Stabilized */
        .hero-viewport {
            min-height: calc(100vh - 130px);
            /* Subtracts header + ticker height */
            width: 100%;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            padding: 80px 0;
        }

        /* Typography DNA: Results Portal Style */
        .hero-content {
            text-align: center;
            position: relative;
            z-index: 10;
            width: 100%;
        }

        .hero-tagline {
            font-family: 'Poppins', sans-serif;
            color: #fff;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 4px;
            /* The Slick Caps spacing */
            font-size: 0.85rem;
            margin-bottom: 15px;
            display: inline-block;
            border-bottom: 2px solid var(--maroon);
            padding-bottom: 5px;
        }

        .hero-statement {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            /* Extra Heavy */
            text-transform: uppercase;
            /* Forced Caps */
            font-size: clamp(2.5rem, 8vw, 4.5rem);
            color: #fff;
            line-height: 1;
            letter-spacing: -1.5px;
            /* Tighter for heavy headers */
            margin-bottom: 30px;
            /* text-shadow: 0 4px 15px rgba(0, 0, 0, 0.5); */
        }

        .text-maroon-highlight {
            color: #ffdb00 !important;
        }

        /* Lightened Slider Backgrounds */
        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            animation: zoomFade 15s infinite;
        }

        /* Lighter Opacity Overlays as requested */
        .slide:nth-child(1) {
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)), url('static/5.jpeg');
            animation-delay: 0s;
        }

        .slide:nth-child(2) {
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)), url('static/2.jpg');
            animation-delay: 5s;
        }

        .slide:nth-child(3) {
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)), url('static/college1.jpg');
            animation-delay: 10s;
        }

        .bg-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .btn-main {
            background: var(--maroon);
            color: #ffffff !important;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: 2px solid var(--maroon);
            /* Initial border is maroon */
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(174, 22, 23, 0.3);
            text-decoration: none;
            display: inline-block;
        }

        .btn-main:hover {
            background: transparent;
            /* Makes the background clear so images show through */
            color: #ffffff !important;
            /* Keeps text white */
            border-color: #ffffff;
            /* Changes border to white */
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(255, 255, 255, 0.1);
        }

        @keyframes zoomFade {
            0% {
                opacity: 0;
                transform: scale(1);
            }

            10% {
                opacity: 1;
            }

            50% {
                transform: scale(1.1);
                opacity: 1;
            }

            60% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        /* Modern Flash News Ticker */
        .flash-news-ticker {
            background: #ffffff;
            /* White background as requested */
            height: 40px;
            border-bottom: 1px solid #f1f5f9;
            display: flex;
            align-items: center;
            overflow: hidden;
            position: relative;
            z-index: 100;
            margin-top: 130px;
        }

        .ticker-label {
            background: var(--maroon);
            color: #ffffff;
            padding: 0 30px 0 20px;
            height: 100%;
            display: flex;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size: 0.85rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            /* This creates the slick slanted edge */
            clip-path: polygon(0 0, 85% 0, 100% 100%, 0% 100%);
            white-space: nowrap;
        }

        .ticker-content{
            display: flex;
            align-items: center;
        }

        .ticker-content marquee {
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            color: var(--text-dark);
        }

        .ticker-new-badge {
            background: #fff1f1;
            color: var(--maroon);
            font-size: 10px;
            font-weight: 800;
            padding: 2px 8px;
            border-radius: 4px;
            border: 1px solid #fee2e2;
            text-transform: uppercase;
        }

        /* About Section Specifics */
        .section-caps-tagline {
            font-family: 'Poppins', sans-serif;
            color: var(--maroon);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 4px;
            /* Slick letter spacing */
            font-size: 0.85rem;
            display: block;
            margin-bottom: 10px;
        }

        .section-main-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            text-transform: uppercase;
            font-size: clamp(1.8rem, 4vw, 3rem);
            color: var(--text-dark);
            line-height: 1.2;
            margin-bottom: 25px;
        }

        .about-text {
            font-family: 'Inter', sans-serif;
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-muted);
        }

        /* Hover Button Logic for About Section */
        .btn-about {
            background: var(--maroon);
            color: #fff !important;
            border: 2px solid var(--maroon);
            transition: 0.3s;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .btn-about:hover {
            background: transparent;
            color: var(--maroon) !important;
            /* Since background is white, text should be maroon */
            border-color: var(--maroon);
        }

        /* Feature Card Redesign */
        .feature-card-modern {
            background: #ffffff;
            border-radius: 20px;
            padding: 40px 30px;
            border: 1px solid #f1f5f9;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .feature-card-modern:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            border-color: var(--maroon);
        }

        .icon-box-circle {
            width: 80px;
            height: 80px;
            background: #fff1f1;
            color: var(--maroon);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 25px;
            transition: 0.5s;
        }

        .feature-card-modern:hover .icon-box-circle {
            background: var(--maroon);
            color: #ffffff;
            transform: rotateY(180deg);
        }

        .card-title-caps {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 1.25rem;
            color: var(--text-dark);
            margin-bottom: 15px;
        }

        /* Department Card Redesign */
        .dept-card {
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            border: 1px solid #f1f5f9;
            position: relative;
            height: 100%;
        }

        .dept-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-color: var(--maroon);
        }

        .dept-img-container {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .dept-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .dept-card:hover img {
            transform: scale(1.1);
        }

        .dept-info {
            padding: 20px;
            text-align: center;
            background: #fff;
            border-top: 3px solid transparent;
            transition: 0.3s;
        }

        .dept-card:hover .dept-info {
            border-top-color: var(--maroon);
        }

        .dept-title-caps {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.95rem;
            color: var(--text-dark);
            letter-spacing: 0.5px;
        }

        /* Stats Banner Redesign */
        .stats-banner {
            background: var(--maroon);
            padding: 80px 0;
            color: #ffffff;
            position: relative;
        }

        .stat-item {
            border-right: 1px solid rgba(255, 255, 255, 0.15);
            transition: transform 0.3s ease;
        }

        .stat-item:last-child {
            border-right: none;
        }

        .stat-item i {
            font-size: 2.5rem;
            margin-bottom: 20px;
            opacity: 0.9;
            /* Subtle glow effect */
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.2));
        }

        .stat-number {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size: clamp(2.5rem, 5vw, 4rem);
            line-height: 1;
            margin-bottom: 5px;
            letter-spacing: -1px;
        }

        .stat-label {
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 2px;
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.8);
        }

        @media (max-width: 768px) {
            .stat-item {
                border-right: none;
                border-bottom: 1px solid rgba(255, 255, 255, 0.15);
                padding: 40px 0;
            }

            .stat-item:last-child {
                border-bottom: none;
            }

            .flash-news-ticker{
                margin-top: 120px;
            }
        }

        /* Founder Section Redesign */
        .founder-img-wrapper {
            position: relative;
            border-radius: 30px;
            overflow: hidden;
            /* This creates the maroon offset effect */
            box-shadow: 20px 20px 0px var(--maroon);
            transition: 0.4s ease;
        }

        .founder-img-wrapper:hover {
            transform: translate(5px, 5px);
            box-shadow: 10px 10px 0px var(--maroon);
        }

        .founder-img-wrapper img {
            border-radius: 30px;
            filter: grayscale(20%);
            transition: 0.4s;
        }

        .founder-img-wrapper:hover img {
            filter: grayscale(0%);
        }

        .quote-box {
            position: relative;
            padding: 30px;
            background: #ffffff;
            border-left: 5px solid var(--maroon);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border-radius: 0 20px 20px 0;
        }

        .founder-title-caps {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            text-transform: uppercase;
            font-size: clamp(1.5rem, 3vw, 2.5rem);
            color: var(--text-dark);
            line-height: 1.1;
        }

        /* Notice Section Styling */
        .notice-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 20px 25px;
            margin-bottom: 20px;
            border: 1px solid var(--maroon);
            display: flex;
            align-items: center;
            text-decoration: none !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
        }

        .notice-card:hover {
            transform: translateX(12px);
            border-color: var(--maroon);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        .notice-date {
            min-width: 75px;
            text-align: center;
            border-right: 2px solid #f1f5f9;
            padding-right: 20px;
            margin-right: 25px;
            transition: 0.3s;
        }

        .notice-card:hover .notice-date {
            border-right-color: var(--maroon);
        }

        .notice-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: var(--text-dark);
            font-size: 1.15rem;
            transition: 0.3s;
        }

        .notice-card:hover .notice-title {
            color: var(--maroon);
        }

        .notice-meta {
            font-family: 'Inter', sans-serif;
            font-size: 0.8rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }

        /* Corner Navigation Controls */
        .nav-corner-wrapper {
            position: absolute;
            left: 25px;
            /* Distance from the right edge */
            z-index: 100;
        }

        /* Vertical Placements */
        .nav-corner-top {
            top: 25px;
        }

        .nav-corner-bottom {
            bottom: 25px;
        }

        .nav-arrow {
            width: 42px;
            height: 42px;
            background: var(--maroon);
            color: var(--bg-light);
            /* border: 1px solid #eef2f6; */
            border-radius: 12px;
            /* Switched to a rounded-square for a modern look */
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none !important;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .nav-arrow:hover {
            background: #ffff;
            color: var(--maroon);
            border-color: var(--maroon);
            transform: translateY(var(--nudge));
            box-shadow: 0 8px 15px rgba(174, 22, 23, 0.2);
        }

        /* Nudge directions for hover */
        .nav-corner-top .nav-arrow:hover {
            --nudge: -3px;
        }

        .nav-corner-bottom .nav-arrow:hover {
            --nudge: 3px;
        }

        /* Ensure the section is the reference point */
        section {
            position: relative;
        }


        /* Bottom-Left Back to Top Button */
        .nav-corner-left {
            position: absolute;
            left: 25px;
            /* Anchored to the left */
            bottom: 25px;
            /* Anchored to the bottom */
            z-index: 100;
        }

        .btn-circle-up {
            width: 50px;
            height: 50px;
            background: var(--maroon);
            color: #ffffff !important;
            border-radius: 50%;
            /* Purely circular */
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none !important;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 10px 20px rgba(174, 22, 23, 0.3);
            border: 2px solid var(--maroon);
        }

        .btn-circle-up:hover {
            background: #ffffff;
            color: var(--maroon) !important;
            border-color: var(--maroon);
            transform: translateY(-8px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
        }

        /* Optional Pulse effect to draw attention in the footer area */
        .pulse-effect {
            animation: shadow-pulse 2s infinite;
            border-radius: 50%;
        }

        @keyframes shadow-pulse {
            0% {
                box-shadow: 0 0 0 0px rgba(174, 22, 23, 0.4);
            }

            70% {
                box-shadow: 0 0 0 15px rgba(174, 22, 23, 0);
            }

            100% {
                box-shadow: 0 0 0 0px rgba(174, 22, 23, 0);
            }
        }

        @media (max-width: 768px) {
            .hero-viewport {
                height: 70vh;
            }

            .stat-item {
                border-right: none;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }
        }

        .accreditation-section {
  background-color: #fff;
  padding: 60px 20px;
  text-align: center;
}

.accreditation-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 180px;
  align-items: center;
  max-width: 1000px;
  margin: 0 auto;
}

.accreditation-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.accreditation-card img {
  width: 120px;
  height: auto;
  margin-bottom: 15px;
  transition: transform 0.3s ease;
}

.accreditation-card p {
  font-size: 18px;
  font-weight: 600;
  color: #222;
  margin-top: 10px;
}

.accreditation-card:hover {
  transform: translateY(-5px);
}

.accreditation-card:hover img {
  transform: scale(1.05);
}

  /* news & updates */
    .news-section {
      text-align: center;
      padding: 40px 20px;
    }

    .news-section h2 {
      font-size: 36px;
      margin-bottom: 10px;
      color: #1a1a1a;
    }

    .news-section h3 {
      font-size: 24px;
      font-weight: 500;
       background: #a80406;
      color: #333;
      margin-bottom: 30px;
      position: relative;
      display: inline-block;
    }

    .news-section h3::after {
      content: "";
      width: 60%;
      height: 2px;
      background: #a80406;
      position: absolute;
      bottom: -8px;
      left: 50%;
      transform: translateX(-50%);
    }
    
    .calendar-buttons {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 15px;
      margin-top: 20px;
    }

    .calendar-buttons button {
      background-color: #a80406;
      color: white;
      border: none;
      padding: 12px 20px;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .calendar-buttons button:hover {
      background-color: #a80406;
    }
footer {
    margin-bottom: 0 !important;
}

    </style>
</head>

<body>
        <div id="header"></div>
    <?php
    error_reporting(0);
    include('db.php');
    $results = array();
    try {
        $sql = "SELECT * FROM tblnotice ORDER BY created_at DESC";
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $now = new DateTime();
    } catch (PDOException $e) {
        $error = $e->getMessage();
    }
    ?>




    <div class="flash-news-ticker" onclick="document.getElementById('notice').scrollIntoView({behavior: 'smooth'})" style="cursor: pointer;">
        <div class="ticker-label">
            <span class="animate__animated animate__flash animate__infinite">●</span>&nbsp; News Updates
        </div>

        <div class="ticker-content w-100">
            <marquee behavior="scroll" direction="left" scrollamount="6" onmouseover="this.stop();" onmouseout="this.start();">
                <?php if (!empty($results)):
                    foreach ($results as $index => $result):
                        $isNew = (new DateTime($result->created_at))->diff($now)->days < 2;
                ?>
                        <span class="mx-4 fw-semibold">
                            <?php if ($isNew): ?>
                                <span class="ticker-new-badge me-2">NEW</span>
                            <?php endif; ?>
                            <?php echo htmlspecialchars($result->noticeTitle); ?>
                            <span class="text-muted ms-4">|</span>
                        </span>
                    <?php endforeach;
                else: ?>
                    <span class="mx-4 fw-medium text-muted">Welcome to DRKIST - Excellence in Education Since 2004</span>
                <?php endif; ?>
            </marquee>
        </div>
    </div>

    <section class="hero-viewport" id="header">
        <div class="bg-slider">
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
        </div>

        <div class="container">
            <div class="hero-content animate__animated animate__fadeInUp">

                <span class="hero-tagline">Excellence in Engineering Since 2004</span>

                <h1 class="hero-statement">
                    Dream. Innovate. <br>
                    <span class="text-maroon-highlight">Achieve.</span>
                </h1>

                <p class="mb-5 text-white" style="font-size: 1.2rem; max-width: 700px; margin: 0 auto; opacity: 0.95; font-weight: 300;">
                    Empowering Students with Real-Time Academic Insights and <br>
                    Production-Ready Engineering Excellence.
                </p>

                <div class="d-flex justify-content-center mt-4">
                    <a href="pages/admissions.html" class="btn btn-main py-3 px-5 shadow-lg fw-bold" style="letter-spacing: 1px; border-radius: 50px;">
                        ENROLL AT DRKIST <i class="fa-solid fa-arrow-right-long ms-2"></i>
                    </a>
                </div>

            </div>
        </div>
       
    </section>


    

    <section id="about" class="py-5 bg-white">
      
        
        <div class="container py-5">
            <div class="row align-items-center">

                <div class="col-lg-7 mb-4 mb-lg-0">
                    <span class="section-caps-tagline">Welcome to Excellence</span>
                    <h2 class="section-main-title">
                        DRK Institute of <br>
                        <span style="color: var(--maroon);">Science & Technology</span>
                    </h2>

                    <div class="about-text pe-lg-5">
                        <p>The era of success of DRK Institute of Science & Technology has started way back in 2004 when it was established by <strong>Mr. D.B Chandra Sekhar Rao</strong> in the fond memory of his late father Sri Dasari Rama Kotaiah garu.</p>

                        <p>As a successful entrepreneur, Mr. Rao decided to focus on high quality education with a philanthropic motive, acting as a leader to promote the economic and industrial growth of the country.</p>
                    </div>

                    <div class="d-flex gap-4 mt-4 mb-2">
                        <div class="text-center">
                            <h4 class="fw-extrabold mb-0" style="color: var(--text-dark); font-family: 'Poppins';">2004</h4>
                            <small class="text-maroon fw-bold text-uppercase" style="font-size: 0.7rem; letter-spacing: 1px;">Established</small>
                        </div>
                        <div class="vr" style="width: 2px; opacity: 0.1;"></div>
                        <div class="text-center">
                            <h4 class="fw-extrabold mb-0" style="color: var(--text-dark); font-family: 'Poppins';">NAAC</h4>
                            <small class="text-maroon fw-bold text-uppercase" style="font-size: 0.7rem; letter-spacing: 1px;">Accredited</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="p-5 bg-light rounded-4 border-start border-danger border-5 shadow-sm">
                        <p class="fst-italic lead fw-medium mb-4" style="color: var(--text-dark);">
                            "A vibrant effort has been made to consciously invest to improve the conceptual and technical skill of the students."
                        </p>
                        <p class="small text-muted mb-4">DRKIST has envisaged significant investment in infrastructure and academic resources to shape the career development of every student.</p>

                        <a href="pages/about.html" class="btn btn-about rounded-pill px-5 py-3 shadow-sm">
                            Read Our Story
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 bg-light" id="values">
    
        <div class="container py-5">
            <div class="text-center mb-5">
                <span class="section-caps-tagline">Why Choose DRK</span>
                <h2 class="section-main-title">Our Core <span style="color: var(--maroon);">Values</span></h2>
                <div class="statement-underline"></div>
            </div>

            <div class="row g-4 mt-2">
                <div class="col-md-3">
                    <div class="feature-card-modern text-center">
                        <div class="icon-box-circle"><i class="fa-solid fa-eye"></i></div>
                        <h4 class="card-title-caps">Vision</h4>
                        <p class="text-muted small px-2">To be a Premier Institution with sky-scraping educational values and research built on communal trust.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-card-modern text-center">
                        <div class="icon-box-circle"><i class="fa-solid fa-bullseye"></i></div>
                        <h4 class="card-title-caps">Mission</h4>
                        <p class="text-muted small px-2">To implant in students the attitude values and vision that prepare them for personal integrity and civic responsibility.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-card-modern text-center">
                        <div class="icon-box-circle"><i class="fa-solid fa-award"></i></div>
                        <h4 class="card-title-caps">Quality</h4>
                        <p class="text-muted small px-2">Providing quality education in Engineering & Management to cater to the ever-challenging global needs.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-card-modern text-center">
                        <div class="icon-box-circle"><i class="fa-solid fa-briefcase"></i></div>
                        <h4 class="card-title-caps">Placements</h4>
                        <p class="text-muted small px-2">Strengthening technical fortes through exemplary expertise combined with industry-ready training.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="logo" class="py-5 bg-white">
        
  <section class="accreditation-section">
  <div class="accreditation-container">
    <div class="accreditation-card">
      <img src="static\accreditations\NAAC_LOGO.png" alt="NAAC Accredited">
      <p>NAAC Accredited</p>
    </div>

    <div class="accreditation-card">
      <img src="static\accreditations\JNTU_Hyderabad_logo.png" alt="Affiliated to JNTUH">
      <p>Affiliated to JNTUH</p>
    </div>

    <div class="accreditation-card">
      <img src="static\accreditations\All_India_Council_for_Technical_Education_logo.png" alt="Approved by AICTE">
      <p>Approved by AICTE</p>
    </div>
  </div>
</section>

 
  <!-- </section> -->

    <section class="py-5 bg-light" id="departments">

        <div class="container py-5">
            <div class="text-center mb-5">
                <span class="section-caps-tagline">Academic Programs</span>
                <h2 class="section-main-title">Studying at <span style="color: var(--maroon);">DRKIST</span></h2>
                <div class="statement-underline"></div>
                <p class="text-muted mt-3">Choose your path in our world-class departments</p>
            </div>

            <div class="row g-4">
                <?php
                $depts = [
                    ['Computer Science (CSE)', 'cse.jpg', 'pages/cse.html'],
                    ['AI & Machine Learning', 'aiml.jpg', 'pages/aiml.html'],
                    ['Data Science (DS)', 'ds.jpg', 'pages/ds.html'],
                    ['Electronics (ECE)', 'ece.jpg', 'pages/ece.html'],
                    ['Electrical (EEE)', 'eee.jpg', 'pages/eee.html'],
                    ['Mechanical (MECH)', 'mech.jpg', 'pages/mech.html'],
                    ['H & S Department', 'hs.jpg', 'pages/hs.html'],
                    ['Business Admin (MBA)', 'mba.jpg', 'pages/mba.html']
                ];
                foreach ($depts as $dept): ?>
                    <div class="col-md-3 col-sm-6 animate__animated animate__fadeInUp">
                        <a href="<?php echo $dept[2]; ?>" class="text-decoration-none">
                            <div class="dept-card shadow-sm">
                                <div class="dept-img-container">
                                    <img src="static/<?php echo $dept[1]; ?>" alt="<?php echo $dept[0]; ?>">
                                </div>
                                <div class="dept-info">
                                    <h6 class="dept-title-caps mb-0"><?php echo $dept[0]; ?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <section class="stats-banner overflow-hidden" id="stats">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 stat-item text-center animate__animated animate__fadeIn">
                    <i class="fas fa-book-open"></i>
                    <h2 class="stat-number">9</h2>
                    <p class="stat-label">Specialized Courses</p>
                </div>

                <div class="col-md-3 stat-item text-center animate__animated animate__fadeIn" style="animation-delay: 0.1s;">
                    <i class="fas fa-user-friends"></i>
                    <h2 class="stat-number">2,015</h2>
                    <p class="stat-label">Active Students</p>
                </div>

                <div class="col-md-3 stat-item text-center animate__animated animate__fadeIn" style="animation-delay: 0.2s;">
                    <i class="fas fa-building"></i>
                    <h2 class="stat-number">841</h2>
                    <p class="stat-label">Total Placements</p>
                </div>

                <div class="col-md-3 stat-item text-center animate__animated animate__fadeIn" style="animation-delay: 0.3s;">
                    <i class="fas fa-chart-line"></i>
                    <h2 class="stat-number">20+</h2>
                    <p class="stat-label">MNC Partners</p>
                </div>
            </div>
        </div>
    </section>
<section id="notice" class="py-5 bg-white">
            <div class="container py-5">
            <div class="text-center mb-5">
                <span class="section-caps-tagline">Institutional Updates</span>
                <h2 class="section-main-title"><span style="color: var(--maroon);">Notice Board</span></h2>
                <div class="statement-underline"></div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="notice-stack">
                        <?php if (!empty($results)):
                            foreach (array_slice($results, 0, 6) as $result):
                                $date = new DateTime($result->created_at);
                                $isNew = (time() - strtotime($result->created_at) < 172800); // 48 Hours
                        ?>
                                <a href="notice-details.php?nid=<?php echo $result->id; ?>" class="notice-card animate__animated animate__fadeInUp">
                                    <div class="notice-date">
                                        <span class="d-block h2 fw-extrabold mb-0" style="color: var(--text-dark); line-height: 1;"><?php echo $date->format('d'); ?></span>
                                        <small class="text-maroon fw-bold text-uppercase" style="font-size: 0.75rem;"><?php echo $date->format('M'); ?></small>
                                    </div>

                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center gap-2 mb-1">
                                            <span class="notice-meta">
                                                <i class="fa-regular fa-calendar-check me-1"></i> <?php echo $date->format('F j, Y'); ?>
                                            </span>
                                            <?php if ($isNew): ?>
                                                <span class="badge rounded-pill" style="background: #fff1f1; color: var(--maroon); border: 1px solid #fee2e2; font-size: 0.65rem;">NEW</span>
                                            <?php endif; ?>
                                        </div>
                                        <h5 class="notice-title mb-0"><?php echo htmlspecialchars($result->noticeTitle); ?></h5>
                                    </div>

                                    <div class="ms-3 text-muted opacity-25">
                                        <i class="fa-solid fa-chevron-right fs-4"></i>
                                    </div>
                                </a>
                            <?php endforeach;
                        else: ?>
                            <div class="text-center p-5 rounded-4" style="background: var(--bg-light); border: 2px dashed #e2e8f0;">
                                <i class="fa-solid fa-folder-open fs-1 text-muted mb-3"></i>
                                <p class="text-muted fw-bold">No active notices found at this moment.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
   </section>
        <section class="news-section">
    <h1>Academic Calendar</h1>
    <div class="calendar-buttons">
      <a href="academic-calender/1year.pdf" class="year-btn"><button>B.Tech I YEAR</button></a>
      <a href="academic-calender/2year.pdf" class="year-btn"><button>B.Tech II YEAR</button></a>
      <a href="academic-calender/3year.pdf" class="year-btn"><button>B.Tech III YEAR</button></a>
      <a href="academic-calender/4year.pdf" class="year-btn"><button>B.Tech IV YEAR</button></a>
    </div>
    </section>


    <section class="py-5 bg-white overflow-hidden" id="founder">
        
        <div class="container py-5">
            <div class="row align-items-center">

                <div class="col-lg-5 mb-5 mb-lg-0 pe-lg-5">
                    <div class="founder-img-wrapper animate__animated animate__fadeInLeft">
                        <img src="static/chairman.jpg" class="w-100" alt="Chairman Sri. D.B. Chandra Sekhar Rao">
                    </div>
                </div>

                <div class="col-lg-7 ps-lg-5">
                    <div class="animate__animated animate__fadeInRight">
                        <span class="section-caps-tagline">The Founder</span>
                        <h2 class="founder-title-caps mb-4">
                            Sri. D.B. <br>
                            <span style="color: var(--maroon);">Chandra Sekhar Rao</span>
                        </h2>

                        <div class="quote-box mb-4">
                            <p class="text-dark fw-medium mb-0" style="line-height: 1.8; font-size: 1.1rem; position: relative; z-index: 2;">
                                "At DRK group of Institutions, we believe that success comes from relentless focus on shared vision, innovation and execution. Our aim is to provide the finest environment for teaching, learning, and research with the support of our highly qualified faculty."
                            </p>
                        </div>

                        <p class="text-muted mb-4">
                            Learning should be based on doing new innovations and not merely knowing them. Until and unless learning solutions relate to real life and motivate the learner to apply knowledge, the whole fetched knowledge remains wasted. Our institution sets specific objectives for achieving excellence in all spheres.
                        </p>

                        <div class="d-flex align-items-center gap-3 p-4 bg-light rounded-4 border">
                            <div class="icon-box-modern bg-white text-maroon shadow-sm" style="width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                <i class="fa-solid fa-lightbulb"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0" style="font-family: 'Poppins';">Visionary Leadership</h6>
                                <small class="text-muted">Directing DRK Group towards academic excellence since 2004.</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div id="chatbot"></div>
    <div id="footer"></div>
<!-- <div class="scroll-to-top">
        <img src="../static/ar.png" alt="Scroll to top" id="scrollTopBtn">
  </div> -->
<div class="scroll-to-top" id="scrollTopBtn"></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>

    // --- ADD THIS TO YOUR INDEX.PHP SCRIPT ---

// Listen for clicks on the entire document
document.addEventListener('click', function(e) {
    // 1. Logic for Inner Submenus (Students Clubs, NAAC Criteria)
    const trigger = e.target.closest('.sports-trigger');
    
    if (trigger) {
        e.preventDefault();
        e.stopPropagation(); // Stops the main dropdown from closing accidentally
        
        const parent = trigger.parentElement;
        const isOpen = parent.classList.contains('inner-open');

        // Close other inner submenus in the same list to keep it clean
        const allInner = document.querySelectorAll('.sports-submenu');
        allInner.forEach(menu => menu.classList.remove('inner-open'));

        // If it wasn't open, open it
        if (!isOpen) {
            parent.classList.add('inner-open');
        }
    } else {
        // 2. Global Close: If clicking anywhere else, shut all inner submenus
        document.querySelectorAll('.sports-submenu').forEach(menu => {
            menu.classList.remove('inner-open');
        });
    }
});

    /* 1. GLOBAL FUNCTIONS (Fixed for Fetch) */
    // These must be outside the fetch logic to be seen by the HTML buttons
    window.toggleMobileQuickLinks = function() {
        const expandArea = document.getElementById("mobileExpandArea");
        const icon = document.getElementById("mobileChevron");
        const mainNav = document.getElementById("mobileMainNav");
        const burger = document.getElementById("mobileToggle");

        if (expandArea) {
            // Close main menu if Quick Links is opened
            if (mainNav && mainNav.classList.contains("active")) {
                mainNav.classList.remove("active");
                if (burger) burger.classList.remove("open");
            }
            expandArea.classList.toggle("active");
            if (icon) icon.style.transform = expandArea.classList.contains("active") ? "rotate(180deg)" : "rotate(0deg)";
        }
    };

window.toggleMobileMenu = function() {
    const mainNav = document.getElementById("mobileMainNav");
    const burger = document.getElementById("mobileToggle");
    
    if (mainNav) {
        mainNav.classList.toggle("active");
        burger.classList.toggle("open");

        // Select all top-level dropdown links in the mobile menu
        const dropdownLinks = mainNav.querySelectorAll('.dropdown > a');
        
        dropdownLinks.forEach(link => {
            // Remove existing listener to prevent double-triggering on re-opens
            link.onclick = null; 
            
            link.onclick = function(e) {
                e.preventDefault();
                const parent = this.parentElement;
                const isOpen = parent.classList.contains('active-mobile');

                // Close all other open dropdowns in the mobile menu
                dropdownLinks.forEach(otherLink => {
                    const otherParent = otherLink.parentElement;
                    otherParent.classList.remove('active-mobile');
                    const otherIcon = otherLink.querySelector('.fa-chevron-down');
                    if(otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                });

                // If the one we clicked wasn't open, open it now
                if (!isOpen) {
                    parent.classList.add('active-mobile');
                    const icon = this.querySelector('.fa-chevron-down');
                    if(icon) icon.style.transform = 'rotate(180deg)';
                }
            };
        });
    }
};



    // Modular Fetch Logic for Header/Footer/Chatbot
    const components = [
        { id: 'header', url: 'header.html', script: 'static/menu.js' },
        { id: 'footer', url: 'footer.html', script: null },
        { id: 'chatbot', url: 'chatbot.html', script: 'static/chatbot.js' }
    ];

    components.forEach(comp => {
        fetch(comp.url)
            .then(res => res.text())
            .then(data => {
                const container = document.getElementById(comp.id);
                if (container) {
                    container.innerHTML = data;
                    if (comp.script) {
                        const s = document.createElement('script');
                        s.src = comp.script;
                        document.body.appendChild(s);
                    }
                }
            })
            .catch(err => console.error('Error loading component:', err));
    });

    // Scroll shadow logic
    window.addEventListener("scroll", function () {
        const header = document.querySelector(".main-header");
        if (header) {
            if (window.scrollY > 50) {
                header.style.boxShadow = "0 10px 30px rgba(0,0,0,0.1)";
            } else {
                header.style.boxShadow = "none";
            }
        }
    });
    fetch('scroll.html')
    .then(response => response.text())
    .then(data => {
      document.getElementById('scrollTopBtn').innerHTML = data;

      // Load JS separately if needed
      const script = document.createElement('script');
      script.src = 'static/header.js';
      document.body.appendChild(script);
    });
    
</script>
</body>

</html>