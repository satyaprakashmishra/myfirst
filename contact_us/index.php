<?php 
$pagename="contact";
include('../header.php');?>
            <script src="../js/jquery-1.7.1.min.js"></script>
            <script src="../js/jquery.validate.min.js"></script>
            <script src="../js/jquery.validate.unobtrusive.min.js"></script>
            <div class="large-10 small-12 column two-column-content-mainbar">
                <div class="two-column-content-top">
                    <h2>Contact Us</h2>
                </div>
                <div class="row">
                    <div class="large-6 small-12 column">
                        <p>You can reach us by filling out the form below, <br/>this link <a href="#"><b>may offer</b></a>, or <a href="#" target="_blank">you can take the tweet</a>.</p>

<form action="/SendMessage" method="post">                            <div class="validation-summary-valid" data-valmsg-summary="true">

                                <ul>
                                    <li style="display: none"></li>
                                </ul>
                            </div>
                            <div>
                                <label>Project Type *</label>
                                <select id="ProjectType" name="ProjectType"><option value="">Select the Type of Project</option>
<option value="web">Web Application</option>
<option value="ecommerce">E-Commerce</option>
<option value="mobile">Android-iOS Apps</option>

<option value="Software">Software Project</option>
<option value="other">other</option>
</select>
                                
                            </div>
                            <div>
                                <label>Description *</label>
                                <span>
                                    <textarea class="input-validation-error placeholder" cols="20" data-val="true" data-val-required="" id="Description" name="Description" rows="2" title="Description *">
</textarea>
                                    
                                </span>
                            </div>
                            <div>
                                <label>Full Name *</label>
                                <span>
                                    <input class="input-validation-error placeholder" data-val="true" data-val-required="" id="FullName" name="FullName" title="FullName" type="text" value="" />
                                    
                                </span>
                            </div>
                            <div>
                                <label>E-Mail *</label>
                                <span>
                                    <input class="input-validation-error placeholder" data-val="true" data-val-required="Email" id="Mail" name="Mail" title="Email *" type="text" value="" />
                                    
                                </span>
                            </div>
                            <div>
                                <label>Phone </label>
                                <span>
                                    <input class="input-validation-error placeholder" data-val="true" data-val-required="" id="Telephone" name="Telephone" title="Phone *" type="text" value="" />
                                    
                                </span>
                            </div>
                            <div>
                                <label>Trade Name</label>
                                <span>
                                    <input class="input-validation-error placeholder" data-val="true" data-val-required="" id="CompanyName" name="CompanyName" title="Company Name" type="text" value="" />
                                   
                                </span>
                            </div>
                            <div>
                                <input type="submit" value="Submit" class="btn btn-large btn-secondary" />
                            </div>
</form>                    </div>
                    <div class="large-6 small-12 column">
                        <div class="row">
                            <div class="large-6 column">
                                <h4>ADDRESS</h4>
                                <p>
                                   303 & 304, Shalimar Titanium ,
                                    <br />
                                    Vibhuti Khand , Gomti Nagar ,<br />
                                     Lucknow-226010 , India (UP)
                                </p>
                            </div>
                            <div class="large-6 column">
                                <h4>CONTACT INFORMATION</h4>
                                <p>
                                    +91/(0522) 493 9100 <br />
                                    <a href="mailto:info@firemoonstudios.com "> info@firemoonstudios.com </a><br />
                                    <a href="https://twitter.com/Firemoonstudios" target="_blank">@Firemoonstudios</a>
                                </p>
                            </div>
                        </div>
                        <div class="hide-for-medium-down">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.1526746624572!2d81.009034!3d26.86689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be2be2810889d%3A0x32e041113e1190d7!2sFire+Moon+Studios%2C+software+development+company%2C+apps+development%2C+web+design%2C+seo+services!5e0!3m2!1sen!2sin!4v1419571335390" width="352" height="426" frameborder="0" style="border:0"></iframe>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

    

  <?php include('../footer.php');?>