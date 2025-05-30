<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
     <link rel="stylesheet" href="index.html">
    <title>Zeetech</title>
    <style>
      .nav-item {
        position: relative;
        overflow: hidden;
      }
      
      .nav-link {
        color: white;
        text-decoration: none;
        padding: 10px 15px;
        display: block;
        transition: color 0.3s ease, transform 0.3s ease;
      }
      
      .nav-link:hover {
        color: #ffdb58;
        transform: scale(1.1);
      }
      
      .nav-item::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #ffdb58;
        opacity: 0;
        transform: scale(0.8);
        transition: opacity 0.3s ease, transform 0.3s ease;
        z-index: -1;
      }
      
      .nav-item:hover::before {
        opacity: 0.2;
        transform: scale(1);
      }
      
      /* Animated background canvas styles */
      #bg-animation-canvas {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        z-index: 0;
        pointer-events: none;
      }
      body {
        position: relative;
        z-index: 1;
        /* Remove background-color here if you want the animation visible everywhere */
        /* background-color: #f4f4f4; */
      }
      /* Ensure main content is above the canvas */
      .main-content {
        position: relative;
        z-index: 1;
      }
      /* Fade-in animation for carousel captions */
      @keyframes fadeIn {
        from { opacity: 0; transform: translateY(30px);}
        to { opacity: 1; transform: translateY(0);}
      }
      .carousel-caption {
        opacity: 0;
        animation: fadeIn 1.2s ease forwards;
        animation-delay: 0.3s;
      }
      .carousel-item.active .carousel-caption {
        opacity: 1;
        /* animation is already set above, this ensures it's visible when active */
      }
      /* Optionally, stagger animation for child elements */
      .carousel-caption > * {
        opacity: 0;
        animation: fadeIn 1s ease forwards;
      }
      .carousel-caption > h1 { animation-delay: 0.4s; }
      .carousel-caption > h4 { animation-delay: 0.6s; }
      .carousel-caption > .text-center, 
      .carousel-caption > p { animation-delay: 0.8s; }
      .carousel-item.active .carousel-caption > * {
        opacity: 1;
      }
       /* Basic styling for the body to enable scrolling for demonstration */
        body {
            min-height: 150vh; /* Ensures there's enough content to scroll and trigger the animation */
            padding-top: 50px; /* Adds some top padding */
            font-family: 'Inter', sans-serif; /* Using Inter font as per instructions */
        }

        /* Styles for the fade-in animation */
        .fade-in-section {
            opacity: 0; /* Initially invisible */
            transform: translateY(30px); /* Starts slightly below its final position */
            transition: opacity 1s ease-out, transform 1s ease-out; /* Smooth transition over 1 second */
            border-radius: 8px; /* Rounded corners for elements */
            padding: 15px; /* Some padding for better appearance */
        }

        /* Class added when the section is visible in the viewport */
        .fade-in-section.is-visible {
            opacity: 1; /* Fully visible */
            transform: translateY(0); /* Moves to its original position */
        }
      
      </style>
      
      <nav class="navbar navbar-expand-lg bg-primary sticky-top" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="images/looo.png" alt="Logo" width="35" height="25" class="d-inline-block align-text-top">
            ZEETECH
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav justify-content-center">
              <li class="nav-item px-2">
                <a class="nav-link active fw-bold" aria-current="page" href="#"><i class='bx bxs-home-smile'></i>Home</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link active fw-bold" aria-current="page" href="contact.php">Contact us</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link active fw-bold" aria-current="page" href="Register.php">Apply now</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
    
    </head>
<body>
    <canvas id="bg-animation-canvas"></canvas>
    <div class="main-content">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/11.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                  <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">ZEETECH COMPUTER AND GREEN ENERGY</h1>
                  <h4 class="text-center">Simple, Intuitive & Expertly Crafted!</h4>
                  <h1 class="text-center">New Skills</h1>
                  <p class="text-center">We are experienced professionals who understand that It services is charging, and are true partners who care about your success.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/13.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                  <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">ZEETECH COMPUTER AND GREEN ENERGY</h1>
                  <h4 class="text-center">Let us shape and build you a!</h4>
                  <h1 class="text-center">New Skills</h1>
                  <p class="text-center">We are experienced professionals who understand that It services is charging, and are true partners who care about your success.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/12.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                  <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">ZEETECH COMPUTER AND GREEN ENERGY</h1>
                  <h4 class="text-center">Learn Grow and Build a!</h4>
                  <h1 class="text-center">New Skills</h1>
                  <p class="text-center">We are experienced professionals who understand that It services is charging, and are true partners who care about your success.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <br>
          <div class="container-fluid fade-in-section" >
            <h2 style="color: #0d6efd; text-align: center; font-weight: bolder; font-family:Georgia, 'Times New Roman', Times, serif;">About us</h2>
            <br>
          <p align="justify" >Zeetech computer and green energy Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, tempore laudantium veritatis, atque numquam molestias nulla dolorum accusamus repellendus perspiciatis expedita soluta? Officia eos consequuntur, ex harum nostrum a nisi?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae non facilis tempore accusantium officiis ad exercitationem necessitatibus fugiat minus quo error, fugit magni quidem corrupti nihil totam, vel obcaecati delectus.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam velit enim consequuntur placeat numquam, saepe ab laudantium libero ad facere odio similique ea facilis magnam, labore rerum inventore et Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque distinctio ducimus nisi illo, inventore commodi suscipit numquam provident repellat aliquam molestias, totam facilis ea rerum error optio exercitationem veritatis. Porro.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas assumenda molestias illo consequatur molestiae, aliquam quae nostrum, voluptates a veritatis ipsam rem fuga hic architecto sit impedit animi incidunt? Deleniti.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi doloribus qui hic quia explicabo nobis at voluptatum ipsum incidunt! Mollitia hic consequatur animi aliquam aperiam, cupiditate alias deserunt! Ullam, atque.
          </p>
          </div>
          <br>
          <br>
          <center class="fade-in-section">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-md-4 mb-4 card-container">
                <div class="card card-hover" style="width: 18rem;">
                  <img src="images/Top 5 Tips to Make (and Keep) a New Year's Resolution.jpeg" class="card-img-top" alt="...">
                      <div class="card-img-overlay"></div>
                  <div class="card-body">
                    <p class="card-text">We keep abreast of the latest technologies and trends to ensure their training programs remain relevant and effective and Assisting students with job search strategies, resume preparation, and interview skills to make them stand out among other niche in the digital world and become what is of expected.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4 card-container">
                <div class="card card-hover" style="width: 18rem;">
                  <img src="images/428f28de525ea9384046d21634f81c9e.jpg" class="card-img-top" alt="...">
                      <div class="card-img-overlay"></div>
                  <div class="card-body">
                    <p class="card-text">Collaborating with local businesses and organizations to provide students with real-world experience and potential career opportunities,and moreover also Providing training programs tailored to the specific needs and demands of the local community  and maintaining relevant and effective curricula that align with industry standards and evolving technological trends in the digital world.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4 card-container">
                <div class="card card-hover" style="width: 18rem;">
                  <img src="images/L'intégration de l'IA dans Microsoft 365 change la….jpeg" class="card-img-top" alt="...">
                  <div class="card-img-overlay"></div>
                  <div class="card-body">
                    <p class="card-text">We are knowledgeable and experienced instructors who can effectively deliver the training and support with Implementing mechanisms to ensure the quality of their training programs and student outcomes. become a leading tech niche in the digital world.</p>
                  </div>
                </div>
              </div>
            </div>
            
            <style>
            .card-container {
              perspective: 1000px; /* Needed for 3D transform effects */
            }
            
            .card-hover {
              transition: transform 0.5s ease-in-out, box-shadow 0.3s ease-in-out;
              transform-style: preserve-3d;
            }
            
            .card-hover:hover {
              transform: translateZ(20px) scale(1.05); /* Move forward and scale on hover */
              box-shadow: 0 10px 20px#0d6efd;
            }

            
            </style>
            
          <br>
          <br>
          </div>
        </center>
        <center class="fade-in-section">
          <h2 style="color: #0d6efd;">what we do</h2>
          <h1><i>Our services</i></h1>
          <p>We offer various digital skills for services and also teach and mentor on how to become a pro at one of these skils</p>
        </center>
        <br>
        
        <style>
          .course-section {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border-radius: 10px;
            /* Add a subtle, light border */
            border: 1px solid rgba(255, 255, 255, 0.1);
            background-color: rgba(255, 255, 255, 0.05); /* Slightly transparent background */
            overflow: hidden; /* clip the pseudo-element */
            position: relative;
          }
          
          .course-section:hover {
            /* No scale or translate */
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            border-radius: 12px;
          }
          
          .course-section:hover h2{
              color: #1e88e5;
          }
          
          /* Create a pseudo-element for the gradient */
          .course-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
              to bottom,
              rgba(100, 149, 237, 0), /* transparent at the top (cornflowerblue) */
              rgba(100, 149, 237, 0.3) /* slightly opaque at the bottom */
            );
            opacity: 0; /* Start fully transparent */
            transition: opacity 0.3s ease-in-out; /* Smooth transition */
            z-index: 1;
          }
          
          /* Show the gradient on hover */
          .course-section:hover::before {
            opacity: 1;
          }
          </style>
          
          <div class="container-fluid fade-in-section">
            <div class="row course-section" style="background-color:#ffffff">
              <div class="col col-md-6" style="color:black">
                <h2>GRAPHIC DESIGNING</h2>
                <h6>Learn and know how to communicate effectively through visual element and applied art, and become a global talent</h6>
                <h4>course preview</h4>
                <ul>
                  <li>Windows Interface</li>
                  <li>Printing & Scanning</li>
                  <li>Paint</li>
                  <li>Adobe illustrator</li>
                  <li>Corel Draw</li>
                  <li>Corel photo-pain</li>
                  <li>Adobe photoshop</li>
                  <li>Mockup design</li>
                  <li>Graphic work(using phone)</li>
                  <li>3D Logo Design</li>
                  <li>Internet/media(graphics approach)</li>
                  <li>project/industrial training</li>
                </ul>
                <h4>Program duration: 4months</h4>
                <p>Monday-saturday</p>
                <p>morning  8:00am-11:00pm</p>
                <p>Afternoon  12:30pm-3:00pm</p>
                <p>Evening  4:00pm-6:00pm</p>
                <h2>40,000 Naira</h2>
              </div>
              <div class="col col-md-6">
                <img src="images/pg.jpg">
              </div>
            </div>
          </div>
          <br>
          <div class="container-fluid fade-in-section">
            <div class="row course-section" style="background-color:#ffffff">
              <div class="col col-md-6">
                <img src="images/pw.jpg">
              </div>
              <div class="col col-md-6" style="color: black">
                <h2>WEB DEVELOPMENT</h2>
                <p>front end development</p>
                <h6>Learn the process of building and creating the structure and functionality and deep side of web and a pro in few months to now</h6>
                <h4>course preview</h4>
                <ul>
                  <li>Introduction to web design</li>
                  <li>HTML</li>
                  <li>Introduction to HTML</li>
                  <li>First code</li>
                  <li>Links, e.t.c</li>
                  <li>CSS</li>
                  <li>Introduction</li>
                  <li>Basic CSS selectors</li>
                  <li>Hierarchy, e.t.c</li>
                  <li>JAVASCRIPT</li>
                  <li>Introduction to Javascript</li>
                  <li>Data types</li>
                  <li>Operators</li>
                  <li>Arrays, e.t.c</li>
                  <li>HOSTING</li>
                </ul>
                <h4>Program duration: 3months</h4>
                <p>Friday-saturday</p>
                <p>Friday  4:00pm-6:00pm</p>
                <p>Saturday  8:00am-11:00am</p>
          
                <h2>60,000</h2>
              </div>
            </div>
          </div>
          <br>
          <div class="container-fluid fade-in-section">
            <div class="row course-section" style="background-color:#ffffff">
              <div class="col col-md-6" style="color: black">
                <h2>COMPUTER ENGINEERING</h2>
                <h6>Learn the process of building and creating the structure and functionality and deep side of web and a pro in few months to now</h6>
                <h4>course preview</h4>
                <ul>
                  <li>Computing fundamentals</li>
                  <li>MS- disk operating system</li>
                  <li>Assessment Of Architecures</li>
                  <li>Motherboard</li>
                  <li>Assembly</li>
                  <li>System Files And Drivers</li>
                  <li>Hardware Installation</li>
                  <li>Software Installation</li>
                  <li>Trouble Shooting</li>
                  <li>Maintenance/Repair, and upgrading</li>
                  <li>Industrial training/project</li>
                  
                </ul>
                <h4>Program duration: 4months</h4>
                <p>Monday-saturday</p>
                <p>morning  8:00am-3:00pm</p>
                <p>or</p>
                <p>Afternoon  12:30pm-6:00pm</p>
                <p>Saturday  8:00am-11:00am</p>
                <h2>40,000 Naira</h2>
              </div>
              <div class="col col-md-6">
                <img src="images/pc.jpg">
              </div>
            </div>
          </div>
          <br>
          <div class="container-fluid fade-in-section">
            <div class="row course-section" style="background-color:#ffffff">
              <div class="col col-md-6">
                <img src="images/DTP Desktop Publishing.jpeg">
              </div>
              <div class="col col-md-6">
                <h2>DESKTOP Publishing</h2>
                <h6>Learn the process of building and creating the structure and functionality and deep side of web and a pro in few months to now</h6>
                <h4>course preview</h4>
                <ul>
                  <li>Computer Fundamental</li>
                  <li>Typical Skill</li>
                  <li>Microsoft word {Intermediate & Advance}</li>
                  <li>Printing & Scanning</li>
                  <li>MS Power Point {Intermediate & Advance}</li>
                  <li>Microsoft Excel { Intermediate & Advance}</li>
                  <li>Corel Draw { Intermediate & Advance}</li>
                  <li>Internet/ Media</li>
                  <li>Project/ Industral training</li>
                  <li></li>
                </ul>
                <h4>Program duration: 4months</h4>
                <p>Monday-saturday</p>
                <p>morning  8:00am-11:00pm</p>
                <p>Afternoon  12:30pm-3:00pm</p>
                <p>Evening  4:00pm-6:00pm</p>
                <h2>35,000 Naira</h2>
              </div>
            </div>
          </div>
          
             <br>
             <br>
             
             <style>
              .button-hover {
                transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
              }
              
              .button-hover:hover {
                transform: translateY(-2px) scale(1.05);
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
              }
              </style>
              
              <div style="display: flex; justify-content: center;" class="fade-in-section">
                <button class="btn btn-success button-hover">
                  <a href="Register.php" style="text-decoration: none; color: white;">Register Now</a>
                </button>
              </div>
              <br>
              <h1 style="text-align: center; color: #0d6efd;"><strong>Our  Gallery</strong></h1>
              <h4 style="text-align: center;"><strong>check out some of our great slides</strong></h4>
              <style>
                body {
                    font-family: Arial, Helvetica, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f4f4f4;
                }
        
                .gallery-container {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                    gap: 20px;
                    padding: 20px;
                }
        
                .gallery-item {
                    position: relative;
                    overflow: hidden;
                    border-radius: 5px;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                    cursor: pointer;
                }
        
                .gallery-item img {
                    width: 100%;
                    height: 200px;
                    object-fit: cover;
                    transition: transform 0.3s ease;
                }
        
                .gallery-item:hover img {
                    transform: scale(1.1);
                }
        
                .overlay {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.8);
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    visibility: hidden;
                    opacity: 0;
                    transition: visibility 0s, opacity 0.3s ease;
                }
        
                .overlay.show {
                    visibility: visible;
                    opacity: 1;
                }
        
                .overlay img {
                    max-width: 90%;
                    max-height: 90%;
                    border-radius: 5px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
                }
        
                .overlay .close-button {
                    position: absolute;
                    top: 20px;
                    right: 20px;
                    font-size: 30px;
                    color: white;
                    cursor: pointer;
                    opacity: 0.7;
                    transition: opacity 0.3s ease;
                }
        
                .overlay .close-button:hover {
                    opacity: 1;
                }
            </style>
        </head>
        <body>
            <div class="gallery-container fade-in-section">
                <div class="gallery-item" data-src="gallery/1.jpg">
                    <img src="gallery/1.jpg" alt="Image 1">
                </div>
                <div class="gallery-item" data-src="gallery/2.jpg">
                    <img src="gallery/2.jpg" alt="Image 2">
                </div>
                <div class="gallery-item" data-src="gallery/3.jpg">
                    <img src="gallery/3.jpg" alt="Image 3">
                </div>
                <div class="gallery-item" data-src="gallery/4.jpg">
                    <img src="gallery/4.jpg" alt="Image 4">
                </div>
                <div class="gallery-item" data-src="gallery/5.jpg">
                    <img src="gallery/5.jpg" alt="Image 5">
                </div>
                <div class="gallery-item" data-src="gallery/6.jpg">
                    <img src="gallery/6.jpg" alt="Image 6">
                </div>
                <div class="gallery-item" data-src="gallery/7.jpg">
                  <img src="gallery/7.jpg" alt="Image 7">
              </div>
              <div class="gallery-item" data-src="gallery/8.jpg">
                <img src="gallery/8.jpg" alt="Image 8">
            </div>
            <div class="gallery-item" data-src="gallery/9.jpg">
              <img src="gallery/9.jpg" alt="Image 9">
          </div>
          <div class="gallery-item" data-src="gallery/10.jpg">
            <img src="gallery/10.jpg" alt="Image 10">
        </div>
        <div class="gallery-item" data-src="gallery/11.jpg">
          <img src="gallery/11.jpg" alt="Image 6">
      </div>
      <div class="gallery-item" data-src="gallery/12.jpg">
        <img src="gallery/12.jpg" alt="Image 6">
    </div>
    <div class="gallery-item" data-src="gallery/13.jpg">
      <img src="gallery/13.jpg" alt="Image 6">
  </div>
  <div class="gallery-item" data-src="gallery/14.jpg">
    <img src="gallery/14.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/15.jpg">
  <img src="gallery/15.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/16.jpg">
  <img src="gallery/16.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/17.jpg">
  <img src="gallery/17.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/18.jpg">
  <img src="gallery/18.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/19.jpg">
  <img src="gallery/19.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/20.jpg">
  <img src="gallery/20.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/21.jpg">
  <img src="gallery/21.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/22.jpg">
  <img src="gallery/22.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/23.jpg">
  <img src="gallery/23.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/24.jpg">
  <img src="gallery/24.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/25.jpg">
  <img src="gallery/25.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/26.jpg">
  <img src="gallery/26.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/27.jpg">
  <img src="gallery/27.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/28.jpg">
  <img src="gallery/28.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/29.jpg">
  <img src="gallery/29.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/30.jpg">
  <img src="gallery/30.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/31.jpg">
  <img src="gallery/31.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/32.jpg">
  <img src="gallery/32.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/33.jpg">
  <img src="gallery/33.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/35.jpg">
  <img src="gallery/35.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/36.jpg">
  <img src="gallery/36.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/37.jpg">
  <img src="gallery/37.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/38.jpg">
  <img src="gallery/38.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/39.jpg">
  <img src="gallery/39.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/40.jpg">
  <img src="gallery/40.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/41.jpg">
  <img src="gallery/41.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/42.jpg">
  <img src="gallery/42.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/43.jpg">
  <img src="gallery/43.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/44.jpg">
  <img src="gallery/44.jpg" alt="Image 6">
</div>
<div class="gallery-item" data-src="gallery/45.jpg">
  <img src="gallery/45.jpg" alt="Image 6">
</div>
            </div>
        
            <div class="overlay">
                <span class="close-button">&times;</span>
                <img src="" alt="Full Image">
            </div>
            
        
            <script>
                const galleryItems = document.querySelectorAll('.gallery-item');
                const overlay = document.querySelector('.overlay');
                const overlayImg = overlay.querySelector('img');
                const closeButton = overlay.querySelector('.close-button');
        
                galleryItems.forEach(item => {
                    item.addEventListener('click', () => {
                        const largeImgSrc = item.getAttribute('data-src');
                        overlayImg.src = largeImgSrc;
                        overlay.classList.add('show');
                    });
                });
        
                closeButton.addEventListener('click', () => {
                    overlay.classList.remove('show');
                });
        
                overlay.addEventListener('click', (event) => {
                    if (event.target === overlay) {
                        overlay.classList.remove('show');
                    }
                });
            </script>
             <footer>
        <footer style="background-color: #0d6efd; color: white; padding: 20px 0; text-align: center;" class="fade-in-section">
    <div class="container">
        <div class="footer-content" style="display: flex; flex-wrap: wrap; justify-content: space-around; align-items: flex-start; margin-bottom: 20px;">
            <div class="contact-info" style="margin-bottom: 20px;">
                <h3 style="color: white;">Contact</h3>
                <p><a href="mailto:zeetechcitadel@gmail.com" style="color: white; text-decoration: none;">Email us: zeetechcitadel@gmail.com</a></p>
                <p style="color: white;">Phone: 0802 360 4988</p>
                <p style="color: white;">Address: 9 Oloruntobi street, opposite okoafo secondary school. Okoafo busstop. Badagry.</p>
            </div>
            
            <div class="social-links" style="margin-bottom: 20px;">
                <h3 style="color: white;">Follow us on</h3>
                <ul style="list-style: none; padding: 0; display: flex; gap: 15px; justify-content: center;">
                    <li><a href="https://www.facebook.com/aderinto isaiah" style="color: white; text-decoration: none;"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="https://www.twitter.com/" style="color: white; text-decoration: none;"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/" style="color: white; text-decoration: none;"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin-in.com/" style="color: white; text-decoration: none;"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="copyright" style="border-top: 1px solid rgba(255, 255, 255, 0.3); padding-top: 10px; margin-top: 10px;">
            &copy; 2025 Zeetech computer and green energy. All rights reserved.
        </div>
    </div>
</footer>


              
<script src="js/bootstrap.js"></script>
<script src="popper.min.js"></script>
<script src="js/all.js"></script>
<script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>

 <script>
document.addEventListener("DOMContentLoaded", function() {
    const fadeEls = document.querySelectorAll(".fade-in-section");
    const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 0.2 // Trigger when 20% is visible
    };
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    fadeEls.forEach(el => observer.observe(el));
});
</script>


<script>
// Animated background: interactive particles
const canvas = document.getElementById('bg-animation-canvas');
const ctx = canvas.getContext('2d');
let particles = [];
const PARTICLE_COUNT = 60;
const colors = ['#0d6efd', '#ffdb58', '#ffffff', '#006498'];

function resizeCanvas() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
}
window.addEventListener('resize', resizeCanvas);
resizeCanvas();

function randomBetween(a, b) {
  return a + Math.random() * (b - a);
}

function createParticle() {
  return {
    x: randomBetween(0, canvas.width),
    y: randomBetween(0, canvas.height),
    vx: randomBetween(-0.5, 0.5),
    vy: randomBetween(-0.5, 0.5),
    radius: randomBetween(1.5, 3.5),
    color: colors[Math.floor(Math.random() * colors.length)]
  };
}

function initParticles() {
  particles = [];
  for (let i = 0; i < PARTICLE_COUNT; i++) {
    particles.push(createParticle());
  }
}
initParticles();

function drawParticles() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  for (let p of particles) {
    ctx.beginPath();
    ctx.arc(p.x, p.y, p.radius, 0, 2 * Math.PI);
    ctx.fillStyle = p.color;
    ctx.globalAlpha = 0.5;
    ctx.fill();
    ctx.globalAlpha = 1;
  }
  // Draw lines between close particles
  for (let i = 0; i < particles.length; i++) {
    for (let j = i + 1; j < particles.length; j++) {
      let a = particles[i], b = particles[j];
      let dist = Math.hypot(a.x - b.x, a.y - b.y);
      if (dist < 100) {
        ctx.beginPath();
        ctx.moveTo(a.x, a.y);
        ctx.lineTo(b.x, b.y);
        ctx.strokeStyle = "#0d6efd33";
        ctx.lineWidth = 1;
        ctx.globalAlpha = 0.3;
        ctx.stroke();
        ctx.globalAlpha = 1;
      }
    }
  }
}

function updateParticles() {
  for (let p of particles) {
    p.x += p.vx;
    p.y += p.vy;
    // Bounce off edges
    if (p.x < 0 || p.x > canvas.width) p.vx *= -1;
    if (p.y < 0 || p.y > canvas.height) p.vy *= -1;
  }
}

function animate() {
  updateParticles();
  drawParticles();
  requestAnimationFrame(animate);
}
animate();

// Interactivity: particles gravitate toward mouse
canvas.addEventListener('mousemove', function(e) {
  const rect = canvas.getBoundingClientRect();
  const mx = e.clientX - rect.left;
  const my = e.clientY - rect.top;
  for (let p of particles) {
    let dx = mx - p.x, dy = my - p.y;
    let dist = Math.sqrt(dx*dx + dy*dy);
    if (dist < 120) {
      p.vx += dx / dist * 0.03;
      p.vy += dy / dist * 0.03;
    }
  }
});
</script>
</body>
</html>