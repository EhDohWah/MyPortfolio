<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home | My Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('import/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('import/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('import/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('import/assets/css/style.css') }}" rel="stylesheet">

  <style>
    /* ===== PROJECT SECTION REDESIGN ===== */
    .proj-grid { margin-top: 1.5rem; }
    .proj-item { padding: 0.85rem; }

    /* Full-bleed card */
    .proj-card {
      position: relative;
      border-radius: 14px;
      overflow: hidden;
      height: 420px;
      background: none;
      box-shadow: 0 4px 24px rgba(0,0,0,0.13);
      transition: transform 0.32s ease, box-shadow 0.32s ease;
    }
    .proj-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 18px 50px rgba(5,99,187,0.18);
    }

    /* Image fills the entire card */
    .proj-img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      transition: transform 0.55s ease;
    }
    .proj-card:hover .proj-img { transform: scale(1.06); }

    /* GitHub button — top-right, slides in on hover */
    .proj-gh-btn {
      position: absolute;
      top: 1.1rem;
      right: 1.1rem;
      z-index: 2;
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
      padding: 0.42rem 1rem;
      border-radius: 50px;
      font-size: 0.78rem;
      font-weight: 700;
      text-decoration: none;
      background: rgba(15,25,55,0.55);
      color: #fff;
      border: 1px solid rgba(255,255,255,0.28);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      opacity: 0;
      transform: translateY(-8px);
      transition: opacity 0.28s ease, transform 0.28s ease, background 0.2s ease;
    }
    .proj-card:hover .proj-gh-btn { opacity: 1; transform: translateY(0); }
    .proj-gh-btn:hover { background: rgba(255,255,255,0.2); color: #fff; border-color: rgba(255,255,255,0.55); }

    /* Bottom gradient panel — always visible */
    .proj-body {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: 1;
      padding: 2.4rem 1.5rem 1.4rem;
      background: linear-gradient(to top, rgba(8,18,46,0.97) 0%, rgba(8,18,46,0.80) 55%, transparent 100%);
    }

    .proj-meta {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 0.55rem;
    }

    .proj-tag {
      display: inline-block;
      padding: 0.18rem 0.65rem;
      border-radius: 50px;
      font-size: 0.65rem;
      font-weight: 700;
      letter-spacing: 0.09em;
      text-transform: uppercase;
    }
    .proj-tag--web     { background: rgba(5,99,187,0.35); color: #7eb8f7; border: 1px solid rgba(5,99,187,0.45); }
    .proj-tag--desktop { background: rgba(180,185,200,0.18); color: #c8cdd8; border: 1px solid rgba(180,185,200,0.28); }

    .proj-year { font-size: 0.71rem; color: rgba(255,255,255,0.4); font-weight: 500; }

    .proj-title {
      font-size: 1.08rem;
      font-weight: 700;
      color: #fff;
      margin-bottom: 0.45rem;
      line-height: 1.3;
    }

    .proj-desc {
      font-size: 0.81rem;
      color: rgba(255,255,255,0.68);
      line-height: 1.65;
      margin-bottom: 0.85rem;
    }

    .proj-stack { display: flex; flex-wrap: wrap; gap: 0.32rem; }
    .proj-stack span {
      display: inline-block;
      padding: 0.14rem 0.5rem;
      background: rgba(255,255,255,0.1);
      color: rgba(255,255,255,0.78);
      border: 1px solid rgba(255,255,255,0.14);
      border-radius: 4px;
      font-size: 0.68rem;
      font-weight: 600;
      font-family: 'Courier New', monospace;
      letter-spacing: 0.02em;
    }

  </style>

  <!-- =======================================================
  * Template Name: MyResume
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Projects</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Saw Eh Doh Wah</h1>
      <p>I'm <span class="typed" data-typed-items="Freelancer, Junior Developer, Linux Enthusiast"></span></p>
      <div class="social-links">
        <a href="https://www.facebook.com/eh.doh.1848816/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <!-- For Gmail -->
        <a href="https://mail.google.com/" class="gmail"><i class="bx bxl-google"></i></a>

        <!-- For GitHub -->
        <a href="https://github.com/EhDohWah" class="github"><i class="bx bxl-github"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="https://www.linkedin.com/in/saw-eh-253375189/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>Junior Information Technology graduate with a strong passion for software development. Eager to apply theoretical knowledge acquired during studies to real-world projects. Excited to embark on a career journey in May upon graduation, with a focus on honing skills and gaining practical experience in software development.</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="{{ asset('import/assets/img/profile-img.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Junior Programmer &amp; Web Developer.</h3>
            <p class="fst-italic">
             
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>October</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>this</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+66 63-941-3723</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Muaklek Saraburi, 18180 Thailand</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor of Science (in IT)</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Personal Email:</strong> <span>ehdohwah.mhep@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Professional Email:</strong> <span>----</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            
            <p> I bring a strong dedication to understanding and meeting user needs. My programming skills are proficient. I easily embrace new technologies and methodologies. Integrity, service, and dedication are values I uphold. I'm eager to innovate and simplify learning processes for both basic and advanced computer skills.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <p>As a new graduate, I possess proficient programming skills and a strong ability to adapt to new technologies quickly.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
            <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p>With hands-on experience gained through internships and a comprehensive education, I offer a fresh perspective and a strong foundation to excel in entry-level roles</p>
                </div>

                <div class="row">
                    <h3 class="resume-title">Work Experiences</h3>
                    <div class="col-lg-6">
                        <div class="resume-item">
                            <h4>Full-stack Developer — HRMS</h4>
                            <h5><em>Freelance / Contract — Thai-Myanmar Border NGOs, Thailand (2023 – Present)</em></h5>
                            <p>Solo Full-stack Developer</p>
                            <ul>
                                <li>Designed and built a custom HRMS from scratch for two healthcare NGOs operating along the Thai-Myanmar border, serving ~300 employees.</li>
                                <li>Architected a Laravel REST API backend with SPA cookie-based authentication (Sanctum), real-time WebSockets (Laravel Reverb), and encrypted salary fields with PHP-side aggregation.</li>
                                <li>Built a Vue 3 + Ant Design Vue 4 frontend covering Payroll, Leave Management, Personnel Actions, Training, Travel Requests, and Data Onboarding modules.</li>
                                <li>Implemented complex payroll logic including Thai PIT (ACM), SSF/PVD, acting position pay, 13th-month bonuses, probation rules, and grant funding allocation.</li>
                                <li>Deployed and maintained the system on an on-premise organization server within a local network environment, using MSSQL Server, Redis, Nginx proxying.</li>
                            </ul>
                            <p><strong>Stack:</strong> Laravel · Vue 3 · Ant Design Vue 4 · SQL Server · Redis · Laravel Reverb · Sanctum · DigitalOcean · GitHub Actions</p>
                        </div>
                        <div class="resume-item">
                            <h4>Internship at Asia-Pacific International University</h4>
                            <h5><em>Asia-Pacific International University (Thailand) (2023 - 2024)</em></h5>
                            <p>Web Application Developer</p>
                            <ul>
                                <li>Worked with the counselling team to create a Career-Database website.</li>
                                <li>Designed the website based on what users needed. Built the website, making sure it worked well. Deploy the website online so people could use it.</li>
                            </ul>
                            <p>
                                For more information, <a href="https://careerdatabase.kanyawitguys.tech/">click here</a>
                            </p>
                        </div>
                        <div class="resume-item">
                            <h4>Faculty of Information Technology Club officer</h4>
                            <h5><em>Asia-Pacific International University (Thailand) (2022 - 2023)</em></h5>
                            <p>President</p>
                            <ul>
                                <li>Served as an officer in the Faculty of Information Technology club, taking on the role of President.</li>
                                <li>Demonstrated strong leadership ability by closely collaborating with the club advisor, managing all events, and delegating tasks to ensure smooth coordination and successful execution.</li>
                            </ul>
                            <p>
                                For more information, <a href="https://www.apiu.edu/academics/faculty-of-information-technology/">click here</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="resume-item">
                            <h4>Teaching at Karen-GED Program</h4>
                            <h5><em>Karen General Educational Development (Thailand) (2018 - 2020)</em></h5>
                            <p>Computer Teacher</p>
                            <ul>
                                <li>Taught computer basics and web browsing to students at a migrant learning centre, emphasizing fundamental computer concepts.</li>
                                <li>In the second year, expanded curriculum to include science instruction to prepare students for the General Educational Development exam.</li>
                                
                            </ul>
                            <p>
                                For more information, <a href="https://www.facebook.com/karengedprogram">Click Here</a>
                            </p>
                        </div>
                        <div class="resume-item">
                            <h4>Supervising students at Minmahaw Higher Education Program (MHEP)</h4>
                            <h5><em>Minmahaw Higher Education Program (MHEP) (Thailand) (2018 - 2020)</em></h5>
                            <p>Student Supervisor</p>
                            <ul>
                                <li>Supervised students enrolled in the Minmahaw program, ensuring their wellbeing and addressing their daily needs.</li>
                                <li>Provided support to teachers and the program coordinator, assisting with various tasks to enhance the learning environment and program effectiveness.</li>
                                
                            </ul>
                            <p>
                               For more information, <a href="https://mhep.educationforfriendship.org/">Click here</a>
                            </p>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <div class="row">
                    <h3 class="resume-title">Education</h3>
                    <div class="col-lg-6">
                        <div class="resume-item pb-0">
                            <h4>Bachelor of Science (in Information Technology)</h4>
                            <h5>Asia-pacific International University (Faculty of Information Technology)</h5>
                            <p><em>2020 - 2024</em></p>

                        </div>
                        <div class="resume-item">
                            <h4>General Educational Development (GED)</h4>
                            <h5>Minmahaw Higher Educational Program</h5>
                            <p><em>2016 - 2017</em></p>
                            <p>The GED credential is recognized as the American equivalent of a high school diploma.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Resume Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Projects</h2>
          <p>I've completed projects for both web and desktop applications, showcasing my proficiency in various software environments and platforms.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-card">Desktop</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container proj-grid" data-aos="fade-up" data-aos-delay="200">

          {{-- ── Career-Database Platform (Web) ── --}}
          <div class="col-lg-6 col-md-6 portfolio-item filter-web proj-item">
            <div class="proj-card">
              <img src="{{ asset('import/assets/img/portfolio/portfolio-1-1.jpg') }}" alt="Career-Database Platform" class="proj-img">
              <a href="https://github.com/EhDohWah" target="_blank" class="proj-gh-btn">
                <i class="bx bxl-github"></i> GitHub
              </a>
              <div class="proj-body">
                <div class="proj-meta">
                  <span class="proj-tag proj-tag--web">Web</span>
                  <span class="proj-year">2023 – 2024</span>
                </div>
                <h4 class="proj-title">Career-Database Platform</h4>
                <p class="proj-desc">A job-listing platform built for APIU's counselling team — connecting students with career opportunities. Designed, built, and deployed end-to-end as part of my internship.</p>
                <div class="proj-stack">
                  <span>PHP</span>
                  <span>Laravel</span>
                  <span>MySQL</span>
                  <span>Bootstrap</span>
                </div>
              </div>
            </div>
          </div>

          {{-- ── Patient Identification System (Desktop) ── --}}
          <div class="col-lg-6 col-md-6 portfolio-item filter-card proj-item">
            <div class="proj-card">
              <img src="{{ asset('import/assets/img/portfolio/portfolio-2-1.jpg') }}" alt="Patient Identification System" class="proj-img">
              <a href="https://github.com/EhDohWah" target="_blank" class="proj-gh-btn">
                <i class="bx bxl-github"></i> GitHub
              </a>
              <div class="proj-body">
                <div class="proj-meta">
                  <span class="proj-tag proj-tag--desktop">Desktop</span>
                  <span class="proj-year">2022 – 2023</span>
                </div>
                <h4 class="proj-title">Patient Identification System</h4>
                <p class="proj-desc">A Windows desktop application for streamlined patient record management and identification in a healthcare setting, with role-based access and data entry workflows.</p>
                <div class="proj-stack">
                  <span>C#</span>
                  <span>.NET</span>
                  <span>WinForms</span>
                  <span>SQL Server</span>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Portfolio Section -->

   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">
        <div class="info">
          <div class="col-lg-4">
          
              <div class="Address">
                <i class="bi bi-geo-alt"></i>
                <h4>Address:</h4>
                <p>195 Moo 3 Muaklek Saraburi, 18180 Thailand</p>
              </div>
           
          </div>

          <div class="col-lg-4">
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>ehdohwah.mhep@gmail.com <br></p>
              </div>
          </div>

          <div class="col-lg-4">
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+66 63-941-3723</p>
              </div>
          </div>

        </div>



      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Saw Eh Doh Wah</h3>
      <p>"Talk is cheap. Show me the code." - Linus Torvalds</p>
      <div class="social-links">
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>2024</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('import/assets/vendor/purecounter/purecounter_vanilla.js')}} "></script>
  <script src="{{ asset('import/assets/vendor/aos/aos.js')}} "></script>
  <script src="{{ asset('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
  <script src="{{ asset('import/assets/vendor/glightbox/js/glightbox.min.js')}} "></script>
  <script src="{{ asset('import/assets/vendor/isotope-layout/isotope.pkgd.min.js')}} "></script>
  <script src="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.js')}} "></script>
  <script src="{{ asset('import/assets/vendor/typed.js/typed.umd.js')}} "></script>
  <script src="{{ asset('import/assets/vendor/waypoints/noframework.waypoints.js')}} "></script>
  <script src="{{ asset('import/assets/vendor/php-email-form/validate.js')}} "></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('import/assets/js/main.js')}} "></script>

</body>

</html>