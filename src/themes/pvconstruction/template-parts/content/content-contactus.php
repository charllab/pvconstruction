<div class="container">
    <div class="row justify-content-between">
        <div class="col-xl-5">
            <h2 class="text-capitalize">Contact Us</h2>
            <p><?php echo get_field('contactpage_text', 'option'); ?></p>
            <?php $removethese = array("(", " ", ")", "-"); ?>
            <ul class="list-unstyled">
                <li><strong>Phone:</strong> <a href="tel:+1<?php echo str_replace($removethese, "", get_field('primary_number', 'option')); ?>"><?php echo get_field('primary_number', 'option'); ?></a></li>
                <?php if(the_field('primary_email', 'option')) { ?>
                <li><strong>Email:</strong> <a href="mailto:<?php echo get_field('primary_email', 'option'); ?>"><?php echo get_field('primary_email', 'option'); ?></a></li>
                <?php }; ?>
            </ul>
        </div><!-- col -->
        <div class="col-xl-7 pl-xl-3">
            <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
        </div><!-- col -->
    </div><!-- row -->

</div><!-- container -->