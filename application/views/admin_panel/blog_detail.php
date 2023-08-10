                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                            <div class="uk-width-5-6@s uk-text-center uk-border-rounded uk-card uk-card-default uk-border-rounded uk-padding-small uk-margin-remove">
                                <h4 class="poppins-medium uk-padding-remove uk-margin-remove"><?php echo $blog['judul']; ?></h4>
                                <small class="uk-width-1-1 uk-display-block uk-padding-remove uk-margin-medium-bottom"><?php echo date('d F Y H:i:s', strtotime($blog['create_at'])); ?></small>
                                <img style="height: 200px" src="<?php echo base_url(); ?>assets/img/website/blog/<?php echo $blog['thumbnail']; ?>">
                                <div class="uk-width-1-1 uk-text-left uk-padding-remove uk-margin-small-top">
                                    <?php echo $blog['content']; ?>
                                </div>
                                <div class="uk-width-1-1 uk-text-left uk-text-small uk-padding-remove uk-margin-remove">
                                    Kategori: 
                                    <?php
                                    $kategori = $blog['kategori'];

                                    switch ($kategori) {
                                        case 1:
                                            echo 'Entertainment';
                                            break;
                                        case 2:
                                            echo 'New Update';
                                            break;
                                        case 3:
                                            echo 'Politik';
                                            break;
                                        case 4:
                                            echo 'Teknologi';
                                            break;
                                        case 5:
                                            echo 'Bencana';
                                            break;
                                        case 6:
                                            echo 'Kesehatan';
                                            break;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>