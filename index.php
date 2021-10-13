<?php include 'includes/templates/header.php';?>

<!-- home section starts  -->
<section class="home" id="home">

    <div class="content">
        <!-- <h1>Service to small businesses</h1> -->
        <h1>Professional accounting and tax service</h1>
        <a href="contact.php" class="btn">contact us</a>
    </div>

</section>
<!-- home section ends -->

<div class="consultation">
    <p>free consultation call: (310) 605-0811 or (323) 812-9435</p>
</div>

<!-- services section starts  -->

<section class="services" id="services">

    <h2 class="heading">our<span>services</span></h2>

    <div class="box-container">
        <div class="box">
            <img src="build/img/accounting.svg" alt="accounting services image" loading="lazy">
            <h3>accounting services</h3>
            <p>We can help you with accounting, payroll and bookkeeping support.</p>
            <a href="services.php" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="build/img/bookkeeping.svg" alt="bookkeeping service image" loading="lazy">
            <h3>bookkeeping service</h3>
            <p>We can provide comprehensive accounting services to ensure the proper functioning of the financial part of your company.</p>
            <a href="services.php" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="build/img/financial.svg" alt="financial statement image" loading="lazy">
            <h3>financial statement</h3>
            <p>Financial statements are an important tool for making management decisions.</p>
            <a href="services.php" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="build/img/tax.svg" alt="income tax service image" loading="lazy">
            <h3>tax service</h3>
            <p>Planning is important to successfully and legally reduce your tax liability.</p>
            <a href="services.php" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="build/img/sales.svg" alt="sales and payroll image" loading="lazy">
            <h3>sales & payroll tax</h3>
            <p>Avoid the time it takes to do payroll taxes and leave it to us.</p>
            <a href="services.php" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="build/img/e_file.svg" alt="e-file image" loading="lazy">
            <h3>Services of</h3>
            <p>Notary public, E-file, Car insurance and more.</p><br>
            <a href="services.php" class="btn">learn more</a>
        </div>
    </div>
</section>
<!-- services section ends -->

<div class="consultation">
    <p>free consultation call: (310) 605-0811 or (323) 812-9435</p>
</div>

<!-- about section starts  -->
<section class="about" id="about">

    <h2 class="heading"> <span>about</span> us </h2>
    
    <div class="row">
        <div class="content">
            <img src="build/img/about_us.svg" alt="about us icon" loading="lazy">
            <h3>About us</h3>
            <p>We are a company with 30 years of experience, dedicated to professional accounting and tax services. We speak English and Spanish. Offering our clients a personalized service that adapts to their needs.</p>
        </div>
        <div class="content">
            <img src="build/img/mission.svg" alt="mission icon" loading="lazy">
            <h3>Mission</h3>
            <p>We work hard focusing on empowering our clients to be more successful and productive in their professional lives and in their businesses through our knowledge, skills and experience.</p>
            <a href="about.php" class="btn">learn more</a>  
        </div>
        <div class="content">
            <img src="build/img/vision.svg" alt="vision icon" loading="lazy">
            <h3>Vision</h3>
            <p>Offer the best accounting and tax service, which manages to adapt to the needs of our clients so that they do not have to worry. We seek to help our clients with our services by following our values: professionalism, quality, precision and responsibility.</p>  
        </div>
    </div>
</section>
<!-- about section ends -->

<div class="consultation">
    <p>free consultation call: (310) 605-0811 or (323) 812-9435</p>
</div>

<!-- contact section starts  -->
<section class="contact" id="contact">

    <h2 class="heading"><span>contact</span>us</h2>

    <div class="icons-container">
        <div class="icons">
            <img src="build/img/tel.svg" alt="phone icon" loading="lazy">
            <h4>our number</h4>
            <p>(310) 605-0811 - Office<br>(323) 812-9435 - Cell phone</p>
        </div>
        <div class="icons">
            <img src="build/img/email.svg" alt="email icon" loading="lazy">
            <h4>our email</h4>
            <p>westerntaxservice@yahoo.com<br></p>
        </div>
        <div class="icons">
            <img src="build/img/location.svg" alt="location icon" loading="lazy">
            <h4>our location</h4>
            <p>400 N. Central Ave. Compton, Ca 90220,<br>EE. UU.</p>
        </div>
        <div class="icons">
            <img src="build/img/horario.svg" alt="location icon" loading="lazy">
            <h4>business hours</h4>
            <p>Monday & Wednesday: 12:00 p.m. to 15:00 p.m.<br>Friday & Saturday: 10:00 a.m. to 16:00 p.m.</p>
        </div>
    </div> 

    <div class="correcto mensaje">Message sent correctly, we will contact you shortly</div>
    <div class="error mensaje"></div>

    <div class="row">
        <div id="map" class="map">
        </div>

        <form class="formUser" id="formUser" novalidate>
            <h3>please fill out the contact form</h3>
            <label for="nameUser">Name:</label>
            <input type="text" name="contact[name]" id="nameUser" placeholder="name" class="box" value="" required> 

            <label for="emailUser">Email:</label>
            <input type="email" name="contact[email]" id="emailUser" placeholder="email" class="box" value="" required>

            <label for="numberUser">Telephone number</label>
            <input type="tel" name="contact[number]" id="numberUser" placeholder="telephone number" class="box" value="" required>

            <div class="user-a">
                <label for="serviceUser">How can we help you?</label>
                <select name="contact[service]" id="serviceUser" required>
                    <option value="" disabled selected >-- Select a service --</option>
                    <option value="accounting services">Accounting Services</option>
                    <option value="bookkeeping service">Bookkeeping Service</option>
                    <option value="financial statement">Financial Statement</option>
                    <option value="income tax service">Income Tax Service</option>
                    <option value="sales tax">Sales Tax</option>
                    <option value="payroll tax">Payroll Tax</option>
                    <option value="e-file services">E-file Services</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <label for="messageUser">Message:</label>
            <textarea name="contact[message]" placeholder="message" class="box" id="messageUser" cols="30" rows="10" value="" required></textarea>
            
            <input type="submit" value="send message" class="btn envia">
        </form>

    </div>
</section>
<!-- contact section ends -->

<?php include 'includes/templates/footer.php';?>