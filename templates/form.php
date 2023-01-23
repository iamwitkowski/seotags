<div class="hcf_box">
    <style scoped>
        p {
            display: block;
        }
        input {
            width: 100%;
        }
    </style>
    <p>
        SEO Tags plugin adds to your pages and post necessary tags automaticaly - your meta keywords are your Wordpress tags. In the field below you can add your own meta description.
    </p>
    <div class="meta-options">
        <p class="meta-options">
            <label for="metadesc">Meta description</label>
            <input id="metadesc" type="text" name="metadesc"
                   value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'metadesc', true ) ); ?>">
        </p>
    </div>
</div>