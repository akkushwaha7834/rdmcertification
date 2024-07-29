<!-- Breadcrumb section -->
 <?php foreach($certificate as $row):?>
<section class="section-space bg-image breadcrumb-overlay position-relative"
    style="background-image: url('<?=base_url()?>public/web/assets/images/certificate-single.webp')">
    <div class="container position-relative z-1 py-md-5 py-0">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-area">
                    <h1 class="h1 mb-2 text-white"><?=$row->name?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-white"><a href="<?=base_url()?>" class="text-white">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page"><?=$row->name?></li>
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
        <div class="row">
            <div class="col-lg-8">
                <h4 class="fw-semibold theme-primary"><?=$row->name?></h4>
                <p><?=$row->description?></p>
            </div>
            <div class="col-lg-4">
                <div class="other-certificate">
                    <div class="certificate-head"> <h3 class="text-white">Other Certificates</h3></div>
                    <?php foreach($certificate_view as $row):?>
                    <ul>
                        <li><a href="<?=base_url()?>certificates/<?=str_replace(' ','-',strtolower($row->slug));?>"><i class="ri-arrow-right-double-fill"></i> <?=$row->name?></a></li>
                    </ul>
                    <?php endforeach?>
                </div>
            </div>
        </div>

    </div>
</section>
<?php endforeach?>