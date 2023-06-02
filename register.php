<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-..." crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Registration Form</h4>
          </div>
          <div class="card-body">
            <form method="post" action="save.php">
              <div class="form-group mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
              </div>
              <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group mb-3">
                <label for="phone" class="form-label">Phone number</label>
                <input type="text" class="form-control" id="username" name="phone" required>
              </div>
              <div class="form-group mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>

               <label for="gender" class="gender">Select Gender</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="male">
                <label class="form-check-label" for="flexRadioDefault1">
                  Male
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female">
                <label class="form-check-label" for="flexRadioDefault2">
                  Female
                </label>
              </div>

              <label for="lang" class="lang">Known Language</label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="lang[]" value="english">
                <label class="form-check-label" for="flexCheckDefault">
                 English
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="flexCheckChecked" name="lang[]" value="tamil">
                <label class="form-check-label" for="flexCheckChecked">
                 Tamil
                </label>
              </div>
              

              <div class="form-group">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" cols="3" name="addr"></textarea>
                </div>
            
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="submit">Register</button>
              </div>
              <!-- <p class="mt-3">Already have an account? <a href="login.html" >Login here</a></p> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
</body>
</html>