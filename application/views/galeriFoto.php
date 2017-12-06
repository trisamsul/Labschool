<div class="custom_content clearfix">
    <div class="container">

        <div class="photo_gallery custom">
            <div class="row">
                <?php foreach($galeri as $i){ ?>
                    <div class="col-xs-6 col-md-4">
                        <a href="<?php echo base_url(); ?>uploads/galeri/images/<?php echo $i['galeri_file']; ?>" title="<?php echo $i['galeri_caption']; ?>" class="thumbnail">
                            <img src="<?php echo base_url(); ?>uploads/galeri/images/<?php echo $i['galeri_file']; ?>" alt="..." class="img-responsive">
                        </a>
                        <label><?php echo $i['galeri_caption']; ?></label>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
</div>