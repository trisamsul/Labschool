<style>
    .galeri-caption{
        position: absolute; 
        bottom: 0;
        padding: 10px 10px 10px 10px;
        color: #fff;
        background: rgba(0,0,0,0.5);
        width: 100%;
        margin-bottom: 0px;
        font-size: 12px;
    }
</style>

<div class="custom_content clearfix">
    <div class="container">
        <div class="custom_title">
            <center>
                <h1>Galeri Foto</h1>
                <br>
            </center>
        </div><!--end custom_title-->
        <div class="photo_gallery custom">
            <ul class="gallery popup-gallery gallery-3col">
            <?php $index = 0; ?>
            <div class="row">
            <?php foreach($galeri as $i){ ?>
                <?php
                if($index % 3 == 0){
                    echo '</div>';
                    echo '<div class="row">';
                }
                ?>
                <li class="col-md-4" style="padding: 0px;">
                    <a href="<?php echo base_url(); ?>uploads/galeri/images/<?php echo $i['galeri_file']; ?>" title="<?php echo $i['galeri_caption']; ?>">
                        <img src="<?php echo base_url(); ?>uploads/galeri/images/<?php echo $i['galeri_file']; ?>" alt=""/>
                        <div class="overlay">
                            <span class="zoom">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                        <label class="galeri-caption"><?php echo $i['galeri_caption']; ?></label>
                    </a>
                </li>
            <?php 
                $index++;
                } 
            ?>
            </div>
            </ul>
        </div>

    </div>
</div>