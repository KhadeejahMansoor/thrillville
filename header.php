<header style="
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #2185d0;
    padding: 10px 20px;
    color: white;
    font-family: 'Jost', sans-serif;">
  
  <!-- Logo -->
  <a href="land.php" class="name" style="
      font-size: 2em;
      font-weight: bold;
      color: white;
      text-decoration: none;">
    WONDERLAND
  </a>

  <!-- Navigation Menu -->
  <div class="items" style="
      display: flex;
      align-items: center;">
    <a href="index.php" style="
        margin: 0 15px;
        text-decoration: none;
        color: white;
        font-size: 1em;">
      Home
    </a>
    <a href="aboutus.php" style="
        margin: 0 15px;
        text-decoration: none;
        color: white;
        font-size: 1em;">
      About
    </a>
    <a href="booking3.php" style="
        margin: 0 15px;
        text-decoration: none;
        color: white;
        font-size: 1em;">
      Booking
    </a>
    <a href="rides.php" style="
        margin: 0 15px;
        text-decoration: none;
        color: white;
        font-size: 1em;">
      Attractions
    </a>
    <a href="shop.php" style="
        margin: 0 15px;
        text-decoration: none;
        color: white;
        font-size: 1em;">
      Shop
    </a>

    <!-- Cart Icon -->
    <div class="nav-icon" style="
        margin: 0 15px;">
      <a href="cart.php" style="
          text-decoration: none;
          color: white;
          font-size: 1.2em;">
        <i class='bx bxs-cart'></i>
      </a>
    </div>

    <!-- Profile Icon -->
    <div class="profile-icon" style="
        position: relative;
        margin-left: 15px;">
      <a href="#" style="
          text-decoration: none;
          color: white;
          font-size: 1.2em;">
        <i class="bx bxs-user"></i>
      </a>
      <!-- Dropdown Menu -->
      <div class="profile-options" style="
          display: none;
          position: absolute;
          top: 40px;
          right: 0;
          background-color: white;
          color: #2185d0;
          border-radius: 5px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          overflow: hidden;
          z-index: 10;">
        <a href="loginpage.php" style="
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: #2185d0;
            font-size: 1em;">
          Login
        </a>
        <a href="signup.php" style="
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: #2185d0;
            font-size: 1em;">
          Signup
        </a>
      </div>
    </div>
  </div>
</header>

<script>
  // Dropdown toggle logic for the profile icon
  const profileIcon = document.querySelector('.profile-icon');
  const profileOptions = document.querySelector('.profile-options');

  profileIcon.addEventListener('mouseenter', () => {
    profileOptions.style.display = 'block';
  });

  profileIcon.addEventListener('mouseleave', () => {
    profileOptions.style.display = 'none';
  });
</script>
