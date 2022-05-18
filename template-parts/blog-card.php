<div class="p-5 relative mb-10">
    <div class="grid grid-cols-4 gap-4">
        <!-- PICTURE -->
        <div class="col-span-2">
            <div class="novosti_Picture">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('medium'); ?>
                </a>
            </div>
        </div>
        <!-- TITLE -->
        <div class="col-span-2">
            <a href="<?php the_permalink(); ?>">
            <span class="text-xs font-kanit text-kategorije font-semibold"><?php echo the_category(); ?></span></a>
            <a href="<?php the_permalink(); ?>">
                <h1 class="text-2xl font-normal font-lovelace text-grayText py-5"><?php the_title(); ?></h1>
            </a>
        </div>
    </div>
    <!-- CONTENT -->
    <div class="mt-10 text-lg font-kanit font-light text-grayText">
        <a href="<?php the_permalink(); ?>">
            <?php 
                $blogKratkiText = get_field('kratki_text');         
            ?>
            <?php echo $blogKratkiText; ?>
         </a>
    </div>
    <!-- READ MORE BUTTON -->
    <div class="absolute bottom-0 right-3">
        <a href="<?php the_permalink(); ?>">
            <span class="text-xs font-kanit text-kategorije font-semibold uppercase">Pročitaj više</span>		
        </a>
    </div>
</div>
