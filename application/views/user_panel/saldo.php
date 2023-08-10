
        <div class="body uk-width-1-1 uk-padding-remove uk-margin-medium-top uk-margin-medium-bottom">
            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                <div class="uk-width-5-6@s">
                    <h3 class="uk-text-center open-sans-bold uk-margin-remove uk-padding-remove">Isi Saldo</h3>
                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-text-center"><span
                            class="line uk-display-block uk-padding-remove uk-margin-auto"></span></div>
                    <div class="content uk-width-1-1 uk-child-width-1-2@s uk-flex-center uk-padding-remove uk-margin-medium-top" uk-grid>
                        <div class="uk-padding-small">
                            <form class="uk-form-stacked" method="POST" action="<?php echo base_url(); ?>user_panel/dashboard/checkout_isi_saldo">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-select">Metode Pembayaran</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" id="form-stacked-select" name="metode" required>
                                            <option value="">-- Pilih Metode Pembayaran --</option>
                                            <?php 
                                            foreach ($channel['data'] as $a) {
                                                if($a['active'] != true)
                                                {
                                                    continue;
                                                }
                                            ?>
                                            <option value="<?php echo $a['code']; ?>"><?php echo $a['name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text">Nominal Top Up</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="number" name="nominal_topup" required>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-form-controls">
                                        <input class="uk-button uk-button-primary" id="form-stacked-text" type="submit" value="Top Up">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>