
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

                <form action="reservation-form.php" method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Réservez</span>
                    <!-- <p class="card-text">Book your schedule for the week from 8 a.m. to 7 p.m.</p> -->
                  </div>
                  
                  <span class="h5 fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Book your schedule for the week from 8 a.m. to 7 p.m</span>
                  
                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17"  name="title" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Your Title</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example27" name="description"  />
                    <label class="form-label" for="form2Example27">Your description</label>
                  </div>

                  <div class="form-outline mb-4">
                  <input type="datetime-local"  name="date-start" class="form-control form-control-lg" step="3600">
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block"  name="submit" type="submit">Login</button>
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