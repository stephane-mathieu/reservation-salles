
<body class="profilBody">
<main class="main_form">
    <section>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
                <div class="col-md-6 col-lg-3 d-none d-md-block">
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                    <form action="profil.php" method="POST">

                    <div class="d-flex align-items-center mb-3 pb-1">
                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                        <h2 class=" card-text sous-titre">Profil de <?php echo $recuper[0] ?> </h2>
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
                        <button class="btn btn-dark btn-lg btn-block"  name="validerlog" type="submit">Update</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>