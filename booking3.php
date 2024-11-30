<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Us</title>

    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      rel="stylesheet"
    />
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: "Jost", sans-serif;
        background-color: #f0f8ff; /* Light blue background */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        color: #333;
      }

      #booking {
        width: 100%;
        max-width: 800px;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .booking-cta h1 {
        font-size: 2em;
        text-align: center;
        color: #2185d0;
      }

      .booking-cta h1 span {
        color: #555;
      }

      .form-control {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      .form-label {
        font-size: 0.9em;
        margin-top: 5px;
        color: #666;
      }

      .form-btn {
        text-align: center;
        margin-top: 20px;
      }

      .submit-btn {
        background-color: #2185d0;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 1.2em;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      .submit-btn:hover {
        background-color: #1673a3;
      }

      .memories {
        text-align: center;
        margin-top: 30px;
      }

      .memories__header h2 {
        color: #2185d0;
      }

      .memories__grid {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
      }

      .memories__card {
        background: #fff;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 200px;
      }

      .memories__card h4 {
        color: #2185d0;
        margin: 10px 0;
      }

      .memories__card p {
        color: #555;
      }

      footer {
        margin-top: 30px;
        text-align: center;
        color: #333;
      }

      footer h4 {
        margin: 10px 0;
      }

      footer a {
        text-decoration: none;
        color: #2185d0;
      }

      footer .social-links {
        margin-top: 10px;
        display: flex;
        justify-content: center;
        gap: 15px;
      }

      footer .social-links a {
        color: #333;
        font-size: 1.2em;
        transition: color 0.3s;
      }

      footer .social-links a:hover {
        color: #2185d0;
      }
    </style>
  </head>

  <body>
    <div id="booking" class="section">
      <?php include("header.php"); ?>
      <div class="section-center">
        <div class="container">
          <div class="booking-cta">
            <h1>BOOK WITH US YOUR <span> NEXT</span> ADVENTURE</h1>
          </div>

          <div class="booking-form">
            <form action="bookingf.php" method="post">
              <div class="row">
                <div>
                  <input class="form-control" type="text" name="name" placeholder="Name" />
                </div>
                <div>
                  <input class="form-control" type="email" name="email" placeholder="Email" />
                </div>
              </div>
              <div class="row">
                <div>
                  <input class="form-control" type="tel" name="phone" placeholder="Phone" />
                </div>
                <div>
                  <input
                    class="form-control"
                    type="number"
                    name="Child"
                    id="childTickets"
                    placeholder="Number of Children"
                    min="0"
                    max="20"
                  />
                </div>
                <div>
                  <input
                    class="form-control"
                    type="number"
                    name="Adult"
                    id="adultTickets"
                    placeholder="Number of Adults"
                    min="0"
                    max="20"
                  />
                </div>
              </div>
              <div class="row">
                <div>
                  <input class="form-control" type="date" name="date" required />
                </div>
              </div>
              <div class="form-btn">
                <button type="submit" class="submit-btn" onclick="addToCartAndRedirect()">Book Now</button>
              </div>
            </form>
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
            <p>Don't Worry About The Queues With Our Fast Track</p>
          </div>
          <div class="memories__card">
            <span><i class="ri-shield-check-line"></i></span>
            <h4>Smart Checklist</h4>
            <p>Create Your Checklist With Rides You Want To Visit</p>
          </div>
          <div class="memories__card">
            <span><i class="ri-bookmark-2-line"></i></span>
            <h4>Save More</h4>
            <p>From discounted ticket prices to exclusive promotions and deals, we prioritize affordability.</p>
          </div>
        </div>
      </div>
    </section>

    <?php include("footer.php"); ?>
  </body>
</html>
