<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
      
      /* Contact card hover effect */
      .contact-card-hover {
        transition:
          transform 0.3s cubic-bezier(.4,2,.6,1),
          box-shadow 0.5s cubic-bezier(.4,2,.6,1);
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.22);
        position: relative;
        z-index: 1;
        overflow: visible;
      }
      
      .contact-card-hover::after {
        content: "";
        position: absolute;
        inset: -8px;
        border-radius: 1.2rem;
        pointer-events: none;
        z-index: 3;
        box-shadow: none;
        opacity: 0;
        transition: opacity 0.3s;
      }
      
      .contact-card-hover:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 1.5rem 3rem rgba(0,0,0,0.45), 0 0.5rem 2rem rgba(0,0,0,0.22);
        z-index: 2;
      }
      
      .contact-card-hover:hover::after {
        opacity: 1;
        animation: card-glow-rotate 1.2s linear infinite;
      }
      
      /* Professional animated border using blue and subtle gray */
      @keyframes card-glow-rotate {
        0% {
          box-shadow:
            0 0 0 8px rgba(13,110,253,0.35), /* Bootstrap blue */
            0 0 24px 8px rgba(108,117,125,0.18); /* Bootstrap gray-600 */
          filter: none;
        }
        50% {
          box-shadow:
            0 0 0 12px rgba(13,110,253,0.50),
            0 0 48px 24px rgba(108,117,125,0.22);
          filter: none;
        }
        100% {
          box-shadow:
            0 0 0 8px rgba(13,110,253,0.35),
            0 0 24px 8px rgba(108,117,125,0.18);
          filter: none;
        }
      }
      /* Fade-in animation for address */
      .fade-in-address {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 1.2s ease-out forwards;
        animation-delay: 0.3s;
      }
      @keyframes fadeInUp {
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
      .interactive-contact .address-hover:hover {
        color: #ffdb58;
        text-shadow: 0 2px 8px rgba(0,0,0,0.15);
        transition: color 0.2s, text-shadow 0.2s;
        text-decoration: none;
      }
      .interactive-link {
        text-decoration: none !important;
      }
      .interactive-link:hover {
        color: #ffdb58 !important;
        text-decoration: none !important;
        transition: color 0.2s;
      }
      .btn-light.btn-sm {
        font-size: 0.95rem;
        padding: 0.25rem 0.75rem;
        border-radius: 0.5rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.07);
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
                <a class="nav-link active fw-bold" aria-current="page" href="index.php"><i class='bx bxs-home-smile'></i>Home</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link active fw-bold" aria-current="page" href="#">Contact us</a>
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
  <div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card shadow-lg border-0 contact-card-hover">
        <div class="row g-0">
          <div class="col-md-5 d-flex align-items-center justify-content-center bg-primary text-white rounded-start">
            <div class="p-4 w-100 fade-in-address interactive-contact">
              <h4 class="mb-4 text-center">Contact Information</h4>
              <div class="mb-3 text-center">
                <i class="bi bi-geo-alt-fill fs-3"></i>
                <p class="mb-0">
                  <span class="address-hover" title="Open in Google Maps"
                    onclick="window.open('https://www.google.com/maps?q=9+Oloruntobi+Street,+Oko-Afo,+Badagry,+Lagos,+Nigeria', '_blank')"
                    style="cursor:pointer;">
                    9, Oloruntobi Street,<br>
                    Opposite Oko-Afo Secondary School,<br>
                    Along Ilogbo-Eremi, Badagry Expressway,<br>
                    Lagos, Nigeria
                  </span>
                </p>
              </div>
              <div class="mb-3 text-center">
                <i class="bi bi-envelope-fill fs-3"></i>
                <p class="mb-0">
                  <a href="mailto:zeetechcitadel@gmail.com" class="text-white interactive-link" style="text-decoration:none;">zeetechcitadel@gmail.com</a>
                </p>
              </div>
              <div class="text-center">
                <i class="bi bi-telephone-fill fs-3"></i>
                <p class="mb-0">
                  <a href="tel:+2348023604988" class="text-white interactive-link" style="text-decoration:none;">+234-802-360-4988</a><br>
                  <a href="tel:+2349164546951" class="text-white interactive-link" style="text-decoration:none;">+234-916-454-6951</a>
                </p>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-light btn-sm" onclick="copyContactInfo()" title="Copy all contact info">
                  <i class="bi bi-clipboard"></i> Copy Info
                </button>
                <span id="copyMsg" class="text-success ms-2" style="display:none;">Copied!</span>
              </div>
            </div>
          </div>
          <div class="col-md-7 d-flex align-items-center justify-content-center">
            <div class="p-4 w-100">
              <h2 class="card-title text-center mb-4">Get in Touch</h2>
              <p class="text-center mb-4">For inquiries, partnership, or more information about ZEETECH, kindly use the contact details or visit our head office.</p>
              <!-- Interactive Google Map with Directions -->
              <div class="mb-3 ratio ratio-16x9 rounded-3 overflow-hidden shadow-sm">
                <iframe
                  src="https://www.google.com/maps?q=9+Oloruntobi+Street,+Oko-Afo,+Badagry,+Lagos,+Nigeria&hl=en&z=16&output=embed"
                  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                  title="ZEETECH Location Map"></iframe>
              </div>
              <div class="text-center">
                <button id="getDirectionsBtn" class="btn btn-outline-primary mt-2">
                  <i class="bi bi-geo-alt"></i> Get Directions
                </button>
              </div>
              <script>
                document.addEventListener('DOMContentLoaded', function() {
                  var btn = document.getElementById('getDirectionsBtn');
                  btn.addEventListener('click', function() {
                    if (navigator.geolocation) {
                      btn.disabled = true;
                      btn.textContent = "Getting your location...";
                      navigator.geolocation.getCurrentPosition(function(position) {
                        var lat = position.coords.latitude;
                        var lng = position.coords.longitude;
                        var destination = encodeURIComponent("9 Oloruntobi Street Oko-Afo Badagry Lagos Nigeria");
                        var url = `https://www.google.com/maps/dir/?api=1&origin=${lat},${lng}&destination=${destination}`;
                        window.open(url, '_blank');
                        btn.disabled = false;
                        btn.textContent = "Get Directions";
                      }, function() {
                        // If user denies or error, fallback to default directions
                        var destination = encodeURIComponent("9 Oloruntobi Street Oko-Afo Badagry Lagos Nigeria");
                        var url = `https://www.google.com/maps/dir/?api=1&destination=${destination}`;
                        window.open(url, '_blank');
                        btn.disabled = false;
                        btn.textContent = "Get Directions";
                      });
                    } else {
                      // Geolocation not supported
                      var destination = encodeURIComponent("9 Oloruntobi Street Oko-Afo Badagry Lagos Nigeria");
                      var url = `https://www.google.com/maps/dir/?api=1&destination=${destination}`;
                      window.open(url, '_blank');
                    }
                  });
                });
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Bootstrap Icons CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="js/bootstrap.js"></script>
<script src="popper.min.js"></script>  
<script>
  function copyContactInfo() {
    const text = `9, Oloruntobi Street,
Opposite Oko-Afo Secondary School,
Along Ilogbo-Eremi, Badagry Expressway,
Lagos, Nigeria
Email: zeetechcitadel@gmail.com
Phone: +234-802-360-4988, +234-916-454-6951`;
    navigator.clipboard.writeText(text).then(function() {
      document.getElementById('copyMsg').style.display = 'inline';
      setTimeout(() => {
        document.getElementById('copyMsg').style.display = 'none';
      }, 2000);
    });
  }
</script>
</body>
</html>