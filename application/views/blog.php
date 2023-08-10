
        <div class="body uk-width-1-1 uk-padding-remove uk-margin-remove">
            <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-flex-center" uk-grid>
                <div class="uk-width-5-6@m uk-padding-remove uk-margin-remove">
                    <div class="uk-hidden@s uk-width-1-1 uk-padding-remove uk-margin-remove">
                        <!-- SLIDESHOW -->
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="clsActivated: uk-transition-active; center: true">

                            <ul class="uk-slider-items uk-grid">
                                <?php
                                foreach($slideshow as $a) {
                                ?>
                                <li class="uk-width-3-4">
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-media-top">
                                            <img src="<?php echo base_url(); ?>assets/img/website/blog/<?php echo $a['thumbnail']; ?>" alt="">
                                        </div>
                                        <div class="uk-card-body uk-padding-small">
                                            <h3 class="uk-card-title"><?php echo $a['judul']; ?></h3>
                                            <p><?php echo strip_tags($a['content']); ?></p>
                                        </div>
                                    </div>
                                </li>
                                <?php
                                }
                                ?>
                            </ul>

                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                        <div class="news uk-width-2-3@m uk-padding-small">
                            <span class="opensans-semi-bold color-black head">Artikel Terbaru</span>
                            <!-- MOBILE -->
                            <div class="uk-hidden@s uk-margin-small-top uk-slider-container-offset" uk-slider>
                            
                                <div class="article uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                            
                                    <ul class="uk-slider-items uk-child-width-1-2 uk-grid">
                                        <?php
                                        foreach ($terbaru as $b) {
                                        ?>
                                        <li>
                                            <div class="uk-card uk-card-default">
                                                <div class="uk-card-media-top">
                                                    <div style="height: 100px; background-image: url('<?php echo base_url(); ?>assets/img/website/blog/<?php $b['thumbnail']; ?>');" class="img uk-background-cover">
                                                    </div>
                                                </div>
                                                <div class="uk-card-body uk-padding-remove uk-margin-small-top">
                                                    <h3 class="uk-card-title uk-padding-remove uk-margin-remove open-sans-semi-bold"><?php echo $b['judul']; ?></h3>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                            
                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                                        uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                                        uk-slider-item="next"></a>
                            
                                </div>
                            
                            
                            </div>
                            <!-- DEKSTOP -->
                            <div class="uk-visible@s uk-width-1-1 uk-child-width-1-2@m uk-padding-small uk-margin-remove" uk-grid>
                                <?php
                                foreach ($terbaru as $c) {
                                ?>
                                <div class="article uk-padding-small uk-margin-remove">
                                    <div class="uk-card uk-card-default">
                                        <a href="#">
                                            <div class="uk-card-media-top">
                                                <div style="height: 262px; background-image: url('<?php echo base_url(); ?>assets/img/website/blog/<?php echo $c['thumbnail']; ?>');" class="img uk-background-cover"></div>
                                            </div>
                                            <div class="uk-card-body">
                                                <small class="open-sans-semi-bold uk-padding-remove uk-margin-remove text-uppercase"><?php echo date('d/m/Y', strtotime($c['create_at'])); ?></small>
                                                <h5 class="uk-card-title open-sans-semi-bold uk-pading-remove uk-margin-remove"><?php echo $c['judul']; ?></h5>
                                                <p class="uk-padding-small uk-padding-remove-horizontal uk-padding-remove-top uk-margin-remove"><?php echo strip_tags($c['content']); ?></p>
                                                <a href="<?php echo base_url(); ?>blog/detail?id=<?php echo $c['id']; ?>" class="uk-button button-white uk-button-small uk-border-rounded">Baca Selengkapnya</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
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
                                                    <span class="uk-padding-remove uk-margin-right text-uppercase open-sans-regular"><?php echo date('d/m/Y', strtotime($d['create_at'])); ?></span><span class="text-uppercase open-sans-regular"><span class="iconify" data-icon="carbon:view" data-inline="false"></span> 120</span>
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