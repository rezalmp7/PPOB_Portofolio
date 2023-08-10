
        <div class="body uk-width-1-1 uk-padding-remove uk-margin-medium-top uk-margin-medium-bottom">
            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                <div class="uk-width-3-5@s">
                    <h3 class="uk-text-center open-sans-bold uk-margin-remove uk-padding-remove">Riwayat Transaksi</h3>
                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-text-center"><span class="line uk-display-block uk-padding-remove uk-margin-auto"></span></div>

                    <div class="form uk-width-1-1 uk-padding-remove uk-margin-medium-top">
                        <div uk-filter="target: .js-filter">
                        
                            <ul class="uk-subnav uk-subnav-pill uk-margin-auto uk-flex-center">
                                <li class="uk-active" uk-filter-control><a href="#">Semua</a></li>
                                <li uk-filter-control="[data-color='proses']"><a href="#">Dalam Proses</a></li>
                                <li uk-filter-control="[data-color='selesai']"><a href="#">Selesai</a></li>
                            </ul>

                            <form class="uk-grid-small uk-flex-center uk-border-rounded" id="form-search" method="POST" action="#" uk-grid>
                                <div class="uk-width-1-4@s">
                                    <div class="uk-margin">
                                        <select class="uk-select">
                                            <option selected>Semua Produk</option>
                                            <option>Pulsa</option>
                                            <option>Voucher</option>
                                            <option>E- Money</option>
                                            <option>Pembayaran</option>
                                            <option>Spesial</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <a class="uk-form-icon uk-form-icon-flip" href="#" onclick="document.getElementById('form-search').submit();" uk-icon="icon: search"></a>
                                            <input class="uk-input" type="text" placeholder="nominal, layanan, nomor tujuan">
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <ul class="isi-laporan js-filter uk-child-width-1-1 uk-text-center" uk-grid>
                                <li class="uk-padding-small uk-border-rounded" data-color="selesai">
                                    <div class="uk-card uk-card-body uk-width-1-1 uk-text-left uk-padding-remove uk-margin-remove color-black" uk-grid>
                                        <div class="uk-width-expand uk-padding-remove uk-margin-remove">
                                            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove poppins-semi-bold">Pulsa all operator</div>
                                            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove poppins-regular">628123456781</div>
                                            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove poppins-regular">Rp.5.000 <span class="iconify" data-icon="ion:ellipse" data-width="5" data-inline="false"></span> <span class="tanggal">10 Mei 2021</span></div>
                                        </div>
                                        <div class="uk-width-auto uk-padding-remove uk-margin-remove">
                                            Success
                                        </div>
                                    </div>
                                </li>
                                <li class="uk-padding-small uk-border-rounded" data-color="proses">
                                    <div class="uk-card uk-card-body uk-width-1-1 uk-text-left uk-padding-remove uk-margin-remove color-black" uk-grid>
                                        <div class="uk-width-expand uk-padding-remove uk-margin-remove">
                                            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove poppins-semi-bold">Pulsa all operator</div>
                                            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove poppins-regular">628123456781</div>
                                            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove poppins-regular">Rp.5.000 <span class="iconify"
                                                    data-icon="ion:ellipse" data-width="5" data-inline="false"></span> <span class="tanggal">10 Mei
                                                    2021</span></div>
                                        </div>
                                        <div class="uk-width-auto uk-padding-remove uk-margin-remove">
                                            Proses
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>