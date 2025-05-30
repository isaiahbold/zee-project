<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
   
</head>

<body>
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
                <a class="nav-link active fw-bold" aria-current="page" href="contact.php">Contact us</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link active fw-bold" aria-current="page" href="Register.php">Apply now</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <style>
      body {
        background-image: url('images/looo.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        min-height: 100vh;
      }
      form {
        max-width: 900px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
      }
        
        h5 {
          margin-top: 20px;
          margin-bottom: 10px;
          font-weight: bold;
          color: #333;
        }
        
        label {
          display: block;
          margin-top: 10px;
          font-weight: normal;
          color: #555;
        }
        
        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="date"],
        input[type="file"] {
          width: 100%;
          padding: 8px 10px;
          margin-top: 5px;
          margin-bottom: 10px;
          border: 1px solid #ddd;
          border-radius: 5px;
          box-sizing: border-box;
          transition: border-color 0.3s, box-shadow 0.3s;
        }
        input[type="text"]:hover,
        input[type="tel"]:hover,
        input[type="email"]:hover,
        input[type="date"]:hover,
        input[type="file"]:hover,
        input[type="text"]:focus,
        input[type="tel"]:focus,
        input[type="email"]:focus,
        input[type="date"]:focus,
        input[type="file"]:focus {
          border-color: #0d6efd;
          box-shadow: 0 0 0 2px rgba(13,110,253,0.15);
          outline: none;
        }
        
        input[type="checkbox"] {
          margin-top: 10px;
          margin-right: 5px;
        }
        
        .inline-label {
          display: inline-block;
          margin-right: 15px;
          font-weight: normal;
        }
        
        p {
          margin-top: 10px;
          font-size: 0.9em;
          color: #666;
          line-height: 1.5;
        }
        
        .declaration {
          margin-top: 20px;
          padding: 15px;
          border: 1px solid #eee;
          border-radius: 5px;
          background-color: #f4f4f4;
        }
        
        .declaration p {
          margin-bottom: 10px;
        }
        
        .submit-button {
          margin-top: 20px;
          text-align: center;
        }
        h1 {
            text-align: center;
        }

        .fade-in-section{
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.8s ease, transform 0.8s ease;
}

.fade-in-section.is-visible {
  opacity: 1;
  transform: none;
}
        </style>
        
       <form method="post" action="process.php" enctype="multipart/form-data" class="fade-in-section">
    <div class="d-flex align-items-center mb-2">
        <img src="images/looo.png" alt="ZEETECH Logo" style="height:48px;width:auto;" class="me-3">
        <h1 class="mb-0 flex-grow-1" style="text-align:left;">
            ZEETECH COMPUTER AND GREEN <br>
            <span style="display:block; text-align:center;">ENERGY</span>
        </h1>
    </div>
    <div class="mt-3 mb-2 text-center" style="font-size:1.05rem;">
        9, Oloruntobi Street, Opposite Oko-Afo Secondary School, Along Ilogbo-Eremi, Badagry Expressway, Lagos, Nigeria &nbsp; | &nbsp;
        <strong>Email:</strong> <a href="mailto:zeetechcitadel@gmail.com" class="text-decoration-none">zeetechcitadel@gmail.com</a> &nbsp; | &nbsp;
        <strong>Phone:</strong> <a href="tel:+2348023604988" class="text-decoration-none">+234-802-360-4988</a>, <a href="tel:+2349164546951" class="text-decoration-none">+234-916-454-6951</a>
    </div>
    <h3 style="text-align: center;">STUDENTSHIP FORM</h3>
    <h5>PERSONAL PROFILE(A)</h5>
     
    <div class="row">
        <div class="col-md-6">
            <label for="surname">SURNAME</label>
            <input type="text" id="surname" name="sname">
        </div>
        <div class="col-md-6">
            <label for="firstname">FIRST NAME</label>
            <input type="text" id="firstname" name="fname">
        </div>
        <div class="col-md-6">
            <label for="othernames">OTHER NAMES</label>
            <input type="text" id="othernames" name="other_name">
        </div>
        <div class="col-md-6">
            <label for="passport">Passport Photograph</label>
            <input type="file" id="passport" name="pass_port" accept="image/*" class="form-control">
        </div>
    </div>

    <h5>COURSE OF STUDY</h5>
    <div class="row">
        <div class="col-md-6">
            <label class="inline-label">DESKTOP PUBLISHING</label>
            <input type="checkbox" name="desktop" >
            <label class="inline-label">GRAPHIC DESIGN</label>
            <input type="checkbox" name="graphic" >
        </div>
        <div class="col-md-6">
            <label class="inline-label">COMPUTER ENGINEERING</label>
            <input type="checkbox" name="computer" >
            <label class="inline-label">WEB DEVELOPMENT</label>
            <input type="checkbox" name="web" >
        </div>
    </div>

    <h5>PERIOD OF TRAINING</h5>
    <div class="row">
        <div class="col-md-4">
            <label class="inline-label">MORNING 8:00AM-11:00AM</label>
            <input type="checkbox" name="morning" >
        </div>
        <div class="col-md-4">
            <label class="inline-label">AFTERNOON 12:30PM-3:00PM</label>
            <input type="checkbox" name="afternoon" >
        </div>
        <div class="col-md-4">
            <label class="inline-label">EVENING 4:00PM-6:00PM</label>
            <input type="checkbox" name="evening" >
        </div>
    </div>
    <p>Friday; 3-6pm, Saturday; 8-11am</p>

    <h5>PERSONAL PROFILE(B)</h5>
    <div class="row">
        <div class="col-md-6">
            <label for="contactaddress">CONTACT ADDRESS (PRESENT)</label>
            <input type="text" id="contactaddress" name="address">
        </div>
        <div class="col-md-6">
            <label for="studentphone">STUDENT PHONE NUMBER</label>
            <input type="tel" id="studentphone" name="phoneno">
        </div>
        <div class="col-md-6">
            <label for="email">E-MAIL</label>
            <input type="email" id="email" name="mail">
        </div>
        <div class="col-md-6">
            <label for="gender">GENDER</label>
            <input type="text" id="gender" name="gender">
        </div>
        <div class="col-md-6">
            <label for="nationality">NATIONALITY</label>
            <input type="text" id="nationality" name="nationality">
        </div>
        <div class="col-md-6">
            <label for="localgov">LOCAL GOVERNMENT OF ORIGIN</label>
            <input type="text" id="localgov" name="lga">
        </div>
        <div class="col-md-6">
            <label for="state">STATE OF ORIGIN</label>
            <input type="text" id="state" name="origin">
        </div>
        <div class="col-md-6">
            <label for="maritalstatus">MARITAL STATUS</label>
            <input type="text" id="maritalstatus" name="marital_status">
        </div>
        <div class="col-md-6">
            <label for="dateofbirth">DATE OF BIRTH</label>
            <input type="date" id="dateofbirth" name="dob">
        </div>
        <div class="col-md-6">
            <label for="parentphone">PARENT AND GUARDIAN PHONE NUMBER</label>
            <input type="tel" id="parentphone" name="parent_no">
        </div>
        <div class="col-md-6">
            <label for="religion">RELIGION</label>
            <input type="text" id="religion" name="religion">
        </div>
        <div class="col-md-6">
            <label for="education">EDUCATIONAL QUALIFICATION</label>
            <input type="text" id="education" name="education_qualification">
        </div>
        <div class="col-md-12">
            <label for="sickness">HAVE YOU HAD ANY SICKNESS? (if yes describe)</label>
            <input type="text" id="sickness" name="sickness">
        </div>
    </div>

    <label>PLEASE HOW DID YOU GET TO KNOW ABOUT THIS INSTITUTION? (tick a box)</label>
    <div class="row">
      <div id="audience-group" class="d-flex flex-wrap align-items-center mb-2">
        <div class="col-md-2 col-6">
            <label class="inline-label">an ex Zeetechite</label>
            <input type="checkbox" name="audience">            <input type="file" id="passport" name="pass_port" accept="image/*" class="form-control">            <input type="file" id="passport" name="pass_port" accept="image/*" class="form-control">

        </div>
        <div class="col-md-2 col-6">
            <label class="inline-label">bulk sms</label>
            <input type="checkbox" name="audience" >
        </div>
        <div class="col-md-2 col-6">
            <label class="inline-label">banner</label>
            <input type="checkbox" name="audience" value="banner">
        </div>
        <div class="col-md-2 col-6">
            <label class="inline-label">flier/handbill</label>
            <input type="checkbox" name="audience">
        </div>
        <div class="col-md-2 col-6">
            <label class="inline-label">social media</label>
            <input type="checkbox" name="audience" >
        </div>
          </div>
        <div class="col-md-2 col-6">
            <label class="inline-label">others</label>
            <input type="text" placeholder="specify" name="others">
        </div>
    
    </div>

    <h5 class="declaration">DECLARATION</h5>
    <p>-zero tolerant to observation</p>
    <p>-lateness to class is not pardonable</p>
    <p>-fighting or stealing will lead to dismissal</p>
    <div class="row">
        <div class="col-md-3 col-6">
            <label for="declaration_name">I</label>
            <input type="text" id="declaration_name" name="declaration">
        </div>
        <div class="col-md-9 col-12">
            <label for="declaration_text">declare that all information provided above is true and correct. I pledge to abide by the rules and regulations of this institution.</label>
        </div>
    </div>
    <div class="submit-button">
        <input  class="btn btn-success" type="submit" name="submit">
    </div>
</form>

        



        

    </form>
    
<script>
document.querySelectorAll('#audience-group input[type="checkbox"]').forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            document.querySelectorAll('#audience-group input[type="checkbox"]').forEach(function(box) {
                if (box !== checkbox) box.checked = false;
            });
        }
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
  document.querySelectorAll('.fade-in-section').forEach(function(el) {
    setTimeout(function() {
      el.classList.add('is-visible');
    }, 200); // Delay for smoothness
  });
});
</script>

   <script src="js/bootstrap.js"></script>
<script src="popper.min.js"></script>  
</body>
</html>