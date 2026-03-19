 <?php
    $page_title = "Contact Us | Get in Touch for Business & Networking Support";
    $meta_description = "Contact us for business inquiries, company formation, buying or selling businesses, and networking support. Our team is here to assist you quickly and professionally.";
    $meta_keywords = "contact us, business support, get in touch, customer support, business inquiry, contact company, help center, networking support, company services contact, business consultation, support team, contact page";
 ?>

 <?php include 'includes/header.php'; ?>

 <?php include 'includes/navbar.php'; ?>

 <main class="vlo-main">
     <div class="vlo-title-bar-1 tarvel-titlebar-bg">
         <h1>Contact Me</h1>
     </div>
     <div class="vlo-contact">
         <div class="container">
             <p class="contact-desc">Need to contact us? Use one of the options below. Our team are always happy to help...</p>
             <div class="row gx-5">
                 <div class="col-lg-6">
                     <div class="contact-from">
                         <h2>Get In Touch</h2>
                         <p>Drop us an email and we'll get back to you within 48hrs...</p>
                         <div class="row">
                             <div class="col-lg-6">
                                 <div class="form-field">
                                     <label for="name_12">Name:</label>
                                     <input type="text" name="name_12" id="name_12" placeholder="Your Name" required="">
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-field">
                                     <label for="email_12">Email:</label>
                                     <input type="email" name="email_12" id="email_12" placeholder="Email Address" required="">
                                 </div>
                             </div>
                         </div>
                         <div class="form-field">
                             <label for="subject_12">Subject</label>
                             <input type="text" name="subject_12" id="subject_12" placeholder="Subject">
                         </div>
                         <div class="form-field">
                             <label for="message_12">Message</label>
                             <textarea name="message_12" id="message_12" placeholder="Your Message Here" rows="7"></textarea>
                         </div>
                         <div class="form-button">
                             <button type="submit">Confirm & Submit</button>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="contact-img">
                         <img src="assets/images/contact/contact.jpg" alt="contact">
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </main>

 <?php include 'includes/footer.php'; ?>