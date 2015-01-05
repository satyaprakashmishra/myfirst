<?php 
$pagename="portfolio";
include('../header.php');?>
           <div class="large-10 small-12 column two-column-content-mainbar">
                <div class="two-column-content-top">
                    <h2>Our Portfolio</h2>
                    <p>You can view our references below to filter that date. If you want to get more information and to see our entire reference, please contact us</p>
                </div>
            <div class="row">
                <section id="cont">
    <div class="row">
        <section id="options" class="clearfix">

            <ul id="filters" class="option-set clearfix" data-option-key="filter">
                <li><a href="#filter" data-option-value="*">Show All</a></li>
                <li><a href="#filter" data-option-value=".web"  class="selected">Web Applications</a></li>
                <li><a href="#filter" data-option-value=".mobil">Mobile Applications</a></li>
                <li><a href="#filter" data-option-value=".eticaret">E-Commerce</a></li>
                <li><a href="#filter" data-option-value=".ds">Digital Signage</a></li>
                <li><a href="#filter" data-option-value=".yazilim">Company Practises</a></li>
                <li><a href="#filter" data-option-value=".diger">Other</a></li>
            </ul>
        </section>
        <!-- #options -->
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
 <div id="container" class="clearfix">
            <div class="element web view third-effect" data-symbol="Hg" data-category="web">
                <a href="#">
                    <img src="../images/3m-incognito-web.jpg" alt="3m Incognito" width="210" height="210" /></a>
                <div class="mask">
                    <a href="#" class="info">3M  Web Project<br/><br/>&rarr; Details</a>
                </div>
            </div>

           

            <div class="element web view third-effect" data-symbol="Bi" data-category="web">
                <a href="#">
                    <img src="../images/star-royal.jpg" alt="Star Royal" width="210" height="210" /></a>
                <div class="mask">
                    <a href="#" class="info">Star Royal Hotel<br/><br/>&rarr; Detay</a>
                </div>
            </div>

            <div class="element yazilim view third-effect" data-symbol="Cd" data-category="yazilim">
                <img src="../images/firemoon-project.jpg" alt="Özel Yazılım" width="210" height="210" />
                
            </div>

            <div class="element web view third-effect" data-symbol="Ca" data-category="web">
                <img src="../images/college-production.jpg" alt="College Production Web Sitesi" width="210" height="210" />
               
            </div>

            <div class="element mobil view third-effect" data-symbol="Re" data-category="mobil">
                <img src="../images/3m-incognito-mobile.jpg" alt="3m Mobil Uygulamalar" width="210" height="210" />
               
            </div>

            

            <div class="element web view third-effect" data-symbol="Lu" data-category="web">
                <a href="#">
                    <img src="../images/microsoft-ofis-365.jpg" alt="Microsoft Office 365 Web" width="210" height="210" /></a>
                <div class="mask">
                    <a href="#" class="info">Microsoft Office 365<br/><br/>&rarr; Detay</a>
                </div>
            </div>

            <div class="element yazilim view third-effect" data-symbol="Ar" data-category="yazilim">
                <img src="../images/crm-entegrasyonu.jpg" alt="CRM Entegrasyonu" width="210" height="210" />
                
            </div>

            <div class="element ds view third-effect" data-symbol="Rb" data-category="ds">
                <img src="../images/digital-signage-istanbul.jpg" alt="Digital Signage İstanbul" width="210" height="210" />
               
            </div>

            <div class="element diger view third-effect" data-symbol="N" data-category="diger">
                <img src="../images/seo-raporu.jpg" alt="Seo Hizmeti" width="210" height="210" />
               
            </div>

            <div class="element yazilim ds view third-effect" data-symbol="Np" data-category="yazilim">
                <img src="../images/cumhurbaskalnligi-hareketli-masa-yazilimlari.jpg" alt="Cumhurbaşkanlığı Hareketli Masa Yazılımları" width="210" height="210" />
               
            </div>

            <div class="element yazilim view third-effect" data-symbol="Ac" data-category="yazilim">
                <img src="../images/plu-akilli-ev-sistemleri.jpg" alt="Akıllı Ev Sistemleri" width="210" height="210" />
               
            </div>

            <div class="element mobil view third-effect" data-symbol="Rb" data-category="mobil">
                <img src="../images/mobile-crm.jpg" alt="" width="210" height="210" />
               
            </div>

            <div class="element web view third-effect" data-symbol="N" data-category="web">
                <img src="../images/mobile-crm.jpg" alt="" width="210" height="210" />
               
            </div>

            <div class="element eticaret view third-effect" data-symbol="Np" data-category="eticaret">
                <a href="#">
                    <img src="../images/trakya-cicek-e-commerce.jpg" alt="" width="210" height="210" /></a>
                <div class="mask">
                    <a href="#" class="info">Check  This<br/><br/>&rarr; Details</a>
                </div>
            </div>

            <div class="element eticaret view third-effect" data-symbol="Ac" data-category="eticaret">
                <a href="#">
                    <img src="../images/e-coomerce.jpg" alt="E-Ticaret Mobil Uygulama" width="210" height="210" /></a>
                <div class="mask">
                    <a href="#" class="info">Check  This<br/><br/>&rarr; Details</a>
                </div>
            </div>

            <div class="element web view third-effect" data-symbol="Ac" data-category="web">
                <img src="../images/red-villas.jpg" alt="" width="210" height="210" />
                
            </div>

        </div>
</div>
</section>
</div>
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
    jQuery(function () {

        var $container = $('#container');

        $container.isotope({
            itemSelector: '.element'
        });


        var $optionSets = $('#options .option-set'),
            $optionLinks = $optionSets.find('a');

        $optionLinks.click(function () {
            var $this = $(this);
            // don't proceed if already selected
            if ($this.hasClass('selected')) {
                return false;
            }
            var $optionSet = $this.parents('.option-set');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');

            // make option object dynamically, i.e. { filter: '.my-filter-class' }
            var options = {},
                key = $optionSet.attr('data-option-key'),
                value = $this.attr('data-option-value');
            // parse 'false' as false boolean
            value = value === 'false' ? false : value;
            options[key] = value;
            if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
                // changes in layout modes need extra logic
                changeLayoutMode($this, options)
            } else {
                // otherwise, apply new options
                $container.isotope(options);
            }

            return false;
        });


    });
</script>

  <?php include('../footer.php');?>