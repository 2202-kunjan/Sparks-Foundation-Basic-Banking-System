<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <section class="main">
    <nav>
      <i class="fa fa-bank" style="font-size:48px;color:white;margin-top: 20px;margin-right:80px;"><span style="font-family:Lucida Handwriting;font-size:20px;">BANK</span></i>

      <ul class="menu">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="history.php">Transaction History</a></li>
        <li><a href="#one">About </a></li>
        <li><a href="#two">Contact</a></li>
    </nav>
    <div class="main-heading">
      <h1>Switch to our <span style="font-family:Lucida Handwriting;">BANK</span> <br> <span style="color:yellow;font-weight:300;">let your dreams be </span><span style="font-family:Bradley Hand, cursive;color:#6cd5ff;">L</span>imitless</h1>
      <p>Your money is safe with us</p>
      <a class="main-btn" href="#">Know us more</a>
    </div>
  </section>
<br><br><br><br><br>
  <section class="features">
    <div class="feature-container">
      <div class="feature-box">
        <div class="f-img">
          <img src="images/customer.png"/>
        </div><br>
        <div class="f-text">
          <h4><a href="customers.php">Customers</a></h4>
          <p align="center">Registration for New account</p>
        </div>
      </div>
      <div class="feature-box">
        <div class="f-img">
          <img src="images/transaction.png"/>
        </div><br>
        <div class="f-text">
          <h4><a href="trans.php">Transactions</a></h4>
          <p align="center">Easy Money Transfer</p>
        </div>
      </div>
    </div>
  </section>

  <section id="one" class="about">
    <div class="about-img">
      <img src="images/money.jpg"/>
    </div>
    <div class="about-text">
      <h2>ABOUT US</h2>
      <p>Bank of India is an Indian nationalised bank. It is under the ownership of Ministry of Finance, Government of India with headquarters in Bandra Kurla Complex, Mumbai. Founded in 1906, it has been government-owned since nationalisation in 1969.Bank of India is an Indian nationalised bank. It is under the ownership of Ministry of Finance, Government of India with headquarters in Bandra Kurla Complex, Mumbai. Founded in 1906, it has been government-owned since nationalisation in 1969.</p>
      <button class="main-btn" href="#">Read More</button>
    </div>
  </section>

  <section id="two" class="contact">
    <div class="contact-heading">
      <h1>CONTACT US</h1>
      <p> 1800 103 1906 (Tollfree) / 1800 220 229 (Tollfree - Covid Support) / (022) – 40919191 (chargeable number) 24 X 7</p>
    </div>
    <form>
      <input type="text" name="user" placeholder="Your Full Name"/>
      <input type="email" name="email" placeholder="Your E-mail"/>
      <textarea name="message" placeholder="Type Your Message Here..."></textarea>
      <button class="main-btn">Submit</button>
    </form>
  </section>

  <footer class="footer-distributed">

			<div class="footer-center">

				<h3><span>Bank</span></h3>

				<p class="footer-links">
					<a href="#" class="link-1">Home</a>

					<a href="#">About</a>

					<a href="#">Faq</a>

					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name"> Bank 2021 All-rights reserved.</p>
			</div>

			<div class="footer-left">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Mumbai 700606 Road </span><span>JUHU Beach, Maharastra</span> </p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+91 12345678</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">help@bank.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Disclaimer |
                Privacy Policy |
                Screen Reader |
                Accessibility</span>

				</p>
			</div>
		</footer>
</body>
</html>
