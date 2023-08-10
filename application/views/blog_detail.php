<div class="body uk-width-1-1 uk-padding-remove uk-margin-remove">
            <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-flex-center" uk-grid>
                <div class="uk-width-5-6@m uk-padding-remove uk-margin-remove">
                    
                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                        <div class="content uk-width-2-3@m uk-padding-small">
                            <span class="opensans-semi-bold color-black"><a href="<?php echo base_url(); ?>blog" class="uk-button uk-button-text">Blog</a> > <?php echo $blog['judul']; ?></span>
                            <div class="artikel uk-width-1-1 uk-padding-remove uk-margin-small-top">
                                <img class="uk-width-1-1 uk-padding-remove uk-margin-remove" src="<?php echo base_url(); ?>assets/img/website/blog/<?php echo $blog['thumbnail']; ?>">
                                <h3 class="poppins-medium uk-padding-remove uk-margin-remove-bottom uk-margin-medium-top"><?php echo $blog['judul']; ?></h3>
                                <small class="uk-padding uk-padding-remove-horizontal uk-padding-remove-left"><?php echo $blog['create_at']; ?></small>
                                <div class="uk-width-1-1 uk-padding-remove uk-margin-small-top">
                                    <?php echo $blog['content']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="populer uk-width-1-3@m uk-margin-remove uk-padding-small">
                            <span class="opensans-semi-bold color-black head">Populer</span>
                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove">
                                <?php
                                foreach ($populer as $d) {
                                ?>
                                <div class="uk-width-1-1 article uk-padding-small uk-padding-remove-horizontal uk-margin-remove">
                                    <a href="<?php echo base_url(); ?>blog/detail?id=<?php echo $d['id']; ?>">
                                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                            <div class="img uk-width-auto uk-padding-remove uk-margin-remove">
                                                <div style="height: 70px; width: 70px; background-image: url('<?php echo base_url(); ?>assets/img/website/blog/<?php echo $d['thumbnail']; ?>');"
                                                class="uk-background-cover"></div>
                                            </div>
                                            <div class="uk-width-expand uk-padding-small uk-padding-remove-right uk-padding-remove-vertical uk-margin-remove">
                                                <h4 class="color-black uk-padding-remove uk-margin-remove open-sans-semi-bold"><?php echo $d['judul']; ?></h4>
                                                <div class="uk-width-1-1 uk-padding-remove uk-margin-small-top">
                                                    <span class="uk-padding-remove uk-margin-right text-uppercase open-sans-regular"><?php echo date('d/m/Y', strtotime($d['create_at'])); ?></span><span class="text-uppercase open-sans-regular"><span class="iconify" data-icon="carbon:view" data-inline="false"></span> <?php echo $d['view']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>