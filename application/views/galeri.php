<div class="custom_content clearfix">
    <div class="container">

        <div class="photo_gallery custom">
            <ul class="gallery popup-gallery gallery-3col">
            <?php foreach($galeri as $i){ ?>
                <li class="col-md-4">
                    <a href="<?php echo base_url(); ?>uploads/galeri/images/<?php echo $i['galeri_file']; ?>" title="Photo 2">
                        <img src="<?php echo base_url(); ?>uploads/galeri/images/<?php echo $i['galeri_file']; ?>" alt="" class="img-responsive"/>
                        <div class="overlay">
                            <span class="zoom">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                        <h4 style="margin-top: 10px;"><?php echo $i['galeri_caption']; ?></h4>
                    </a>
                </li>
            <?php } ?>
            </ul>
        </div>

    </div>
</div>