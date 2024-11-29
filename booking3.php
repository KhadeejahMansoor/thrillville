<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book US</title>

    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <link type="text/css" rel="stylesheet" href="css/footer.css" />
    <link type="text/css" rel="stylesheet" href="css/booking3.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link type="text/css" rel="stylesheet" href="css/header.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,700;1,200;1,300;1,400&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.
4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqR
Kc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
  </head>

  <body>
    
    <div id="booking" class="section">
      <?php include('header.php'); ?>
      <div class="section-center">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <div class="booking-cta">
                <h1>BOOK WITH US YOUR <span> NEXT</span> ADVENTURE</h1>
              </div>
            </div>

            <div class="col-md-6 col-md-offset-1">
              <div class="booking-form">
                <form action="bookingf.php" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="text" name="name" />
                        <span class="form-label">Name</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="email" name="email" />
                        <span class="form-label">Email</span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="tel" name="phone"  />
                        <span class="form-label">Phone</span>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                      <div class="form-group">
                        <span class="form-label">Child</span>
                        <input
                          class="form-control"
                          type="number"
                          name="Child"
                          id="childTickets"
                          required
                          min="0"
                          max="20"
                        />
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                      <div class="form-group">
                        <span class="form-label">Adult</span>
                        <input
                        name="Adult"
                          class="form-control"
                          type="number"
                          id="adultTickets"
                          required
                          min="0"
                          max="20"
                        />
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input  name="date"   class="form-control" type="date" required />
                        <span class="form-label">Date</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-btn">
                    <button type="Submit" class="submit-btn" onclick="addToCartAndRedirect()">
                      Book Now
                    </button>
                  </div>
                </form>
              </div>
            </div>
         
          </div>
        </div>
      </div>
    </div>
    <section class="memories">
      <div class="section_container memories_container">
        <div class="memories__header">
          <h2 class="section__header">WHY BOOK ONLINE?</h2>
        </div>
        <div class="memories__grid">
          <div class="memories__card">
            <span><i class="ri-calendar-2-line"></i></span>
            <h4>Book & Relax</h4>
            <p>Dont Worry About The Queues With Our Fast Track</p>
          </div>
          <div class="memories__card">
            <span><i class="ri-shield-check-line"></i></span>
            <h4>Smart Checklist</h4>
            <p>Create Your Checklist With Rides You Want To Visit</p>
          </div>
          <div class="memories__card">
            <span><i class="ri-bookmark-2-line"></i></span>
            <h4>Save More</h4>
            <p>
              From discounted ticket prices to exclusive promotions and deals,
              we prioritize affordability .
            </p>
          </div>
        </div>
      </div>
    </section>

    <?php include('footer.php'); ?>

    <script src="js/jquery.min.js"></script>
    <script>
      $(".form-control").each(function () {
        floatedLabel($(this));
      });

      $(".form-control").on("input", function () {
        floatedLabel($(this));
      });

      function floatedLabel(input) {
        var $field = input.closest(".form-group");
        if (input.val()) {
          $field.addClass("input-not-empty");
        } else {
          $field.removeClass("input-not-empty");
        }
      }
    </script>
    
  </body>
</html>