<!-- Breadcrumb section -->
<section class="section-space bg-image breadcrumb-overlay position-relative"
    style="background-image: url('<?=base_url()?>public/web/assets/images/iso.webp')">
    <div class="container position-relative z-1 py-md-5 py-0">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-area">
                    <h1 class="h1 mb-2 text-white">Certification</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-white"><a href="<?=base_url()?>" class="text-white">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Certification</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb section end -->
<section class="section-space">
    <div class="container">
        <div class="row g-4">
            <?php foreach($certificate_view as $row):?>
        <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url('uploads/').$row->image;?>" alt="">
                    <h3><a href="<?=base_url()?>certificates/<?=str_replace(' ','-',strtolower($row->slug));?>"><?=$row->name?></a></h3>
                    <p>Quality management system</p>
                </div>
            </div>
            <?php endforeach ?>
            <!-- <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/9001-1.jpg" alt="">
                    <h3><a href="">ISO 9001:2015</a></h3>
                    <p>Quality management system</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/10002-1.jpg" alt="">
                    <h3><a href="">ISO 10002:2014</a></h3>
                    <p>Complaint management system</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/14001.jpg" alt="">
                    <h3><a href="">ISO 14001:2015</a></h3>
                    <p>Environmental management system</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/45001.jpg" alt="">
                    <h3><a href="">ISO 45001:2018</a></h3>
                    <p>Occupational helath and safety management system</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/22000-1.jpg" alt="">
                    <h3><a href="">ISO 22000:2018</a></h3>
                    <p>Food safety management system</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/26000.jpg" alt="">
                    <h3><a href="">ISO 26000:2010</a></h3>
                    <p>social responsibility</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/19600-1.jpg" alt="">
                    <h3><a href="">ISO 19600:2014</a></h3>
                    <p>Compliance management system</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/13485-1.jpg" alt="">
                    <h3><a href="">ISO 13485:2016</a></h3>
                    <p>Medical devices quality management system</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/27001.jpg" alt="">
                    <h3><a href="">ISO 27001:2013
                    </a></h3>
                    <p>Information security management system</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/29993.jpg" alt="">
                    <h3><a href="">ISO 29993:2017
                    </a></h3>
                    <p>Learning services outside</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/22716.jpg" alt="">
                    <h3><a href="">ISO 22716:2007
                    </a></h3>
                    <p>Good manufacturing process for cosmetics (gmp)</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/17088.jpg" alt="">
                    <h3><a href="">ISO 17088:2008
                    </a></h3>
                    <p>Specification for the compostable plastics</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/8088.jpg" alt="">
                    <h3><a href="">ISO 8088:1994
                    </a></h3>
                    <p>Equipment for olive cultivation and olive oil production</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/16603-1.jpg" alt="">
                    <h3><a href="">ISO 16603:2004
                    </a></h3>
                    <p>Clothing for protection against contact with blood and body fluids</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/10377-1.jpg" alt="">
                    <h3><a href="">ISO 10377:2013
                    </a></h3>
                    <p>Consumer product safety</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/4064.jpg" alt="">
                    <h3><a href="">ISO 4064-1:2014
                    </a></h3>
                    <p>Water meter for cold potable water and hot water</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/14543-5-101-2019.jpg" alt="">
                    <h3><a href="">ISO/IEC 14543-5-101:2019
                    </a></h3>
                    <p>Home electronics system (it)</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/17020-2012.jpg" alt="">
                    <h3><a href="">ISO/IEC 17020:2012
                    </a></h3>
                    <p>Conformity assessment certification</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/17025-2017.jpg" alt="">
                    <h3><a href="">ISO/IEC 17025:2017
                    </a></h3>
                    <p>Competence of testing and caliberation laboratories</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/30406-2017.jpg" alt="">
                    <h3><a href="">ISO-TR 30406:2017
                    </a></h3>
                    <p>Human resource management</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/30406-2017.jpg" alt="">
                    <h3><a href="">FSSC 22000
                    </a></h3>
                    <p>Food safety system certification</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/FSSC-22000.jpg" alt="">
                    <h3><a href="">FSSC 22000
                    </a></h3>
                    <p>Food safety system certification</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/SA-8000-1.jpg" alt="">
                    <h3><a href="">SA 8000
                    </a></h3>
                    <p>Social accountability certification</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/BIFMA-1.jpg" alt="">
                    <h3><a href="">BIFMA
                    </a></h3>
                    <p>Bifma certification</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/CE-MARK.jpg" alt="">
                    <h3><a href="">CE MARK
                    </a></h3>
                    <p>CE mark certification</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/GST.jpg" alt="">
                    <h3><a href="">GST
                    </a></h3>
                    <p>GST registration</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/IMPORT-EXPORT-REGISTRATION.jpg" alt="">
                    <h3><a href="">IMPORT EXPORT
                    </a></h3>
                    <p>Import export registration</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/WHO-GMP.jpg" alt="">
                    <h3><a href="">WHO GMP
                    </a></h3>
                    <p>Who GMP certification</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/ROHS-2.jpg" alt="">
                    <h3><a href="">ROHS</a></h3>
                    <p>ROHS registration</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/REACH-1.jpg" alt="">
                    <h3><a href="">REACH</a></h3>
                    <p>REACH certification</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/GREENGUARD-1.jpg" alt="">
                    <h3><a href="">GREENGUARD</a></h3>
                    <p>GREENGUARD certification</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/BRC-CERTIFICATION.jpg" alt="">
                    <h3><a href="">BRC</a></h3>
                    <p>BRC certification</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/HALAL-2.jpg" alt="">
                    <h3><a href="">HALAL</a></h3>
                    <p>HALAL certification</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/KOSHER-1.jpg" alt="">
                    <h3><a href="">KOSHER</a></h3>
                    <p>KOSHER certification</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/HACCP-2.jpg" alt="">
                    <h3><a href="">HACCP</a></h3>
                    <p>HACCP certification</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificates-box">
                    <img src="<?=base_url()?>public/web/assets/images/certificates/CMMI-CERTIFICATION.jpg" alt="">
                    <h3><a href="">CMMI</a></h3>
                    <p>CMMI certification</p>
                </div>
            </div> -->
            </div>

        </div>
    </div>
</section>