<!-- <link href="./Style/style.css" rel="stylesheet"> -->
<body>
    <main class="main_form">
        <!-- Parcoure les potentielles erreurs -->
    <?php if(!empty($errors)): ?>
            <div class="errors">
                <p>You have not completed the form correctly.</p>
                </ul>
                    <?php foreach($errors as $error): ?>
                        <li><?= $error; ?></li>

                    <?php endforeach; ?>
                </ul>
            </div>
    <?php endif; ?>
<section>
  <div class="container py-5 h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-3 d-none d-md-block">
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="connexion.php" method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Login</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17"  name="login" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Login</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" name="password" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block"  name="submit" type="submit">Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p  style="color: #393f81;">Don't have an account? <a href="inscription.php" style="color: #393f81;">Register here</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>