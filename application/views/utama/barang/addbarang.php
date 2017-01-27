<?php $this->load->view('menu');?>
             <!-- page content -->
            <div class="right_col" role="main">
                <!--nav link--> 
                <header class="head">          
                    <div class="main-bar bg-light dker">
                        <i class="fa fa-users fa-jk"></i>
                        <a href="<?php echo site_url();?>/Utama">Home</a> /
                        <a href="<?php echo site_url();?>/Barang/viewbarang">Daftar Barang</a> /
                     <span class="active">
                            Entry data Barang
                    </span>
                    </div><!-- /.main-bar -->
                </header><!-- /.head -->

                <!-- end nav link--> 
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                            Form Entry Barang
                            </h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Input Entry Barang</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/ruangan/addruangan" enctype="multipart/form-data">
                                      <div class="form-group">
                                        <label for="Kode Barang" class="control-label col-lg-3">Kode Barang </label>
                                        <div class=" col-lg-9">
                                          <input class="form-control col-lg-6" type="text" name="kd_barang" id="kd_barang" value="<?php echo set_value('kd_barang'); ?>" placeholder="Kode Barang" maxlength="10" required="required" />
                                        </div>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="nama" class="control-label col-lg-3">Nama Barang</label>
                                        <div class="col-lg-9">
                                          <input type="text" class="form-control col-lg-6" name="nama_barang" id="nama_barang" value="<?php echo set_value('nama_barang'); ?>" placeholder="Nama Barang" maxlength="40" required="required" />
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="kd_kategori" class="control-label col-lg-3">Jenis Barang</label>
                                        <div class="col-lg-9">
                                            <select class="form-control col-lg-2" id="kd_kategori" name="kd_kategori" required="required">
                                                <option value="">Pilih Jenis Barang</option>
                                                <?php if(@$result):?>
                                                <?php foreach( $result as $rows):?>
                                                <option value="<?php echo $rows['kd_kategori']?>" <?php echo set_select('kategori', $rows['kd_kategori']);?>><?php echo $rows['nama_kategori'];?> </option>
                                                <?php endforeach?>
                                                <?php endif?>
                                            </select>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="merk" class="control-label col-lg-3">Merek</label>
                                        <div class="col-lg-9">
                                          <input type="text" class="form-control col-lg-6" name="merk" id="merk" value="<?php echo set_value('merk'); ?>" placeholder="Nama Barang" maxlength="40" required="required" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kondisi<span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control">
                                                    <option value="">Pilih Kondisi</option>
                                                    <option value="Baru" <?php echo set_select('kondisi', 'Baru');?>>Baru </option>
                                                    <option value="Bekas" <?php echo set_select('kondisi', 'Bekas');?>>Bekas </option>
                                                </select>
                                            </div>
                                        </div>
                                      <div class="form-group">
                                        <label for="tgl_perolehan" class="control-label col-lg-3">Tanggal Perolehan</label>
                                        <div class="col-lg-9">
                                          <input class="form-control col-lg-2" type="date" data-date-format="yyyy-mm-dd" name="tgl_perolehan" id="tgl_perolehan" value="<?php echo set_value('tgl_perolehan'); ?>" placeholder="YYYY-MM-DD" required="required">
                                        </div>
                                      </div>
                                    
                                      <div class="form-group">
                                        <label for="alamat" class="control-label col-lg-3">Sumber Perolehan</label>
                                        <div class="col-lg-9">
                                            <div class="col-lg-6" style="padding:0px;">
                                                <textarea class="form-control" style="max-width:100%;min-width:100%;max-height:120px;min-height:120px" name="alamat" id="alamat"><?php echo set_value('alamat'); ?></textarea>
                                            </div>
                                        </div>
                                      </div>
                                       <div class="form-group">
                                        <label for="masa_pakai" class="control-label col-lg-3">Masa Pakai Barang</label>
                                        <div class="col-lg-9">
                                          <input class="form-control col-lg-2" type="date" data-date-format="yyyy-mm-dd" name="masa_pakai" id="masa_pakai" value="<?php echo set_value('masa_pakai'); ?>" placeholder="YYYY-MM-DD" required="required">
                                        </div>
                                      </div>
                                      
                                      <div class="form-actions no-margin-bottom" align="right">
                                        <input type="submit" name="submit" id="submit" value="Simpan" class="btn btn-primary">
                                        <a href="<?php echo site_url();?>/admin/listSiswa" class="btn btn-default">Batal</a>
                                      </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- footer content -->
                    <?php $this->load->view('footer');?>
                <!-- /footer content -->
                
            </div>
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="<?php echo base_url();?>assets/js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="<?php echo base_url();?>assets/js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="<?php echo base_url();?>assets/s/icheck/icheck.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
    <!-- form validation -->
    <script src="<?php echo base_url();?>assets/js/validator/validator.js"></script>
    <script>
        // initialize the validator function
        validator.message['date'] = 'not a real date';

        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

        $('.multi.required')
            .on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });

        // bind the validation to the form submit event
        //$('#send').click('submit');//.prop('disabled', true);

        $('form').submit(function (e) {
            e.preventDefault();
            var submit = true;
            // evaluate the form using generic validaing
            if (!validator.checkAll($(this))) {
                submit = false;
            }

            if (submit)
                this.submit();
            return false;
        });

        /* FOR DEMO ONLY */
        $('#vfields').change(function () {
            $('form').toggleClass('mode2');
        }).prop('checked', false);

        $('#alerts').change(function () {
            validator.defaults.alerts = (this.checked) ? false : true;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);
    </script>

</body>

</html>