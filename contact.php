<?php 
include 'includes/templates/header.php';
?>

<!-- contact section starts  -->
<section class="contact" id="contact">

    <div class="fondo-contact">

        <h2 class="heading pagecontact"><span>contact</span>us</h2>
    
        <div class="correcto mensaje">Message sent correctly, we will contact you shortly</div>
        <div class="error mensaje"></div>

        <div class="row pageform">
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

    </div>

    <div class="icons-container">
        <div class="icons">
            <img src="build/img/tel.svg" alt="phone icon" loading="lazy">
            <h4>our number</h4>
            <p>(310) 605-0811 office<br>(323) 812-9435 cell</p>
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

    <div id="map" class="map-contact">
    </div>

</section>
<!-- contact section ends -->

<?php include 'includes/templates/footer.php';?>