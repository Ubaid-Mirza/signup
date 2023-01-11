<div class="container mt-2">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
  <div class="mb-3">
    <label for="username" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your name" name="username" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your E-mail Address" name="email" required>
  </div>
  <div class="mb-3">
    <label for="mobile" class="form-label">Mobile</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Mobile Number" name="mobile" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Choose Password" name="password" required>
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="cpassword" required>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Create Account</button>
</form>
</div>