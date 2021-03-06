<?php $this->load->view('menu');?>
            <!-- page content -->
            <div class="right_col" role="main">
             <!--nav link--> 
                <header class="head">          
                    <div class="main-bar bg-light dker">
                        <i class="fa fa-users fa-jk"></i>
                        <a href="<?php echo site_url();?>/Utama">Home</a> /
                        <a href="<?php echo site_url();?>/Utama/adduser">Tambah User</a> /
                     <span class="active">
                        View User
                    </span>
                    </div><!-- /.main-bar -->
                </header><!-- /.head -->

                <!-- end nav link--> 
                <div class="">
                    <div class="page-title">
                      <div class="title_left">
                            <h3>Kelola Data User</h3>
                        </div>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <form action="<?php echo ('c_utama/cariPetugas');?>"> 
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">Go!</button>
                                     </span>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2> Tambah Data User</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                              </div>
                                <div class="x_content">
                                            <div class="col-md-0 col-sm-0 col-xs-0 col-md-offset-0">
                                            <form method="post" action="<?php echo site_url('/utama/adduser');?>">
                                                <button type="submit" class="btn btn-success">Tambah data user</button>
                                            </form>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                             <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>View <small> Data User</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <?php if(@$result):?>
                                    <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                              <thead>
                                <tr>
                                  <th width="6%">No</th>
                                  <th>ID Petugas</th>
                                  <th>Username</th>
                                  <th>Password</th>
                                  <th>Nama Pegawai</th>
                                  <th>Jabatan</th>
                                  <th>Hak Akses</th>
                                  <th>No Telp</th>
                                  <th width="12%">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php $i=1;?>
                                <?php foreach ($result as $rows): ?>
                                <tr>
                                  <td align="center"><?php echo $i++?></td>
                                  <td><?php echo $rows ['id_petugas'];?> </td>
                                  <td><?php echo $rows ['username'];?> </td>
                                  <td><?php echo $rows ['password'];?> </td>
                                  <td><?php echo $rows ['nama_petugas'];?> </td>
                                  <td><?php echo $rows ['jabatan'];?> </td>
                                  <td><?php echo $rows ['hak_akses'];?> </td>
                                  <td><?php echo $rows ['no_hp'];?> </td>
                                  <td align="left">
                                    <a  href="<?php echo site_url();?>/c_utama/updatedata/<?php echo $rows ['id_petugas'];?>"class="btn btn-xs btn-default"title="Edit" >
                                        <i class="fa fa-edit fa-fw"></i>
                                    </a>
                                    <a onclick="return confirm('Anda yakin akan menghapus  <?php echo $rows ['nama_petugas'];?> ?')" href="<?php echo site_url();?>/C_utama/deletedata/<?php echo $rows ['id_petugas'];?>" class="btn btn-xs btn-default" title="Hapus">
                                        <i class="fa fa-times fa-fw"></i>
                                    </a>
                                  </td>
                                </tr>
                                <?php endforeach; ?> 
                              </tbody>
                            </table>
                            <?php endif?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- /page content -->

                <!-- footer content -->
                <?php $this->load->view('footer');?>
                <!-- /footer content -->

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
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
        <script src="<?php echo base_url();?>assets/js/icheck/icheck.min.js"></script>
        <!-- tags -->
        <script src="<?php echo base_url();?>assets/js/tags/jquery.tagsinput.min.js"></script>
        <!-- switchery -->
        <script src="<?php echo base_url();?>assets/js/switchery/switchery.min.js"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/moment.min2.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/datepicker/daterangepicker.js"></script>
        <!-- richtext editor -->
        <script src="<?php echo base_url();?>assets/js/editor/bootstrap-wysiwyg.js"></script>
        <script src="<?php echo base_url();?>assets/js/editor/external/jquery.hotkeys.js"></script>
        <script src="<?php echo base_url();?>assets/js/editor/external/google-code-prettify/prettify.js"></script>
        <!-- select2 -->
        <script src="<?php echo base_url();?>assets/js/select/select2.full.js"></script>
        <!-- form validation -->
        <script type="<?php echo base_url();?>assets/text/javascript" src="js/parsley/parsley.min.js"></script>
        <!-- textarea resize -->
        <script src="<?php echo base_url();?>assets/js/textarea/autosize.min.js"></script>
        <script>
            autosize($('.resizable_textarea'));
        </script>
        <!-- Autocomplete -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/autocomplete/countries.js"></script>
        <script src="<?php echo base_url();?>assets/js/autocomplete/jquery.autocomplete.js"></script>
        <script type="text/javascript">
            $(function () {
                'use strict';
                var countriesArray = $.map(countries, function (value, key) {
                    return {
                        value: value,
                        data: key
                    };
                });
                // Initialize autocomplete with custom appendTo:
                $('#autocomplete-custom-append').autocomplete({
                    lookup: countriesArray,
                    appendTo: '#autocomplete-container'
                });
            });
        </script>
        <script src="<?php echo base_url();?>assets/js/custom.js"></script>


        <!-- select2 -->
        <script>
            $(document).ready(function () {
                $(".select2_single").select2({
                    placeholder: "Select a state",
                    allowClear: true
                });
                $(".select2_group").select2({});
                $(".select2_multiple").select2({
                    maximumSelectionLength: 4,
                    placeholder: "With Max Selection limit 4",
                    allowClear: true
                });
            });
        </script>
        <!-- /select2 -->
        <!-- input tags -->
        <script>
            function onAddTag(tag) {
                alert("Added a tag: " + tag);
            }

            function onRemoveTag(tag) {
                alert("Removed a tag: " + tag);
            }

            function onChangeTag(input, tag) {
                alert("Changed a tag: " + tag);
            }

            $(function () {
                $('#tags_1').tagsInput({
                    width: 'auto'
                });
            });
        </script>
        <!-- /input tags -->
        <!-- form validation -->
        <script type="text/javascript">
            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form .btn').on('click', function () {
                    $('#demo-form').parsley().validate();
                    validateFront();
                });
            });

            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form2 .btn').on('click', function () {
                    $('#demo-form2').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form2').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });
            try {
                hljs.initHighlightingOnLoad();
            } catch (err) {}
        </script>
        <!-- /form validation -->
        <!-- editor -->
        <script>
            $(document).ready(function () {
                $('.xcxc').click(function () {
                    $('#descr').val($('#editor').html());
                });
            });

            $(function () {
                function initToolbarBootstrapBindings() {
                    var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                'Times New Roman', 'Verdana'],
                        fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                    $.each(fonts, function (idx, fontName) {
                        fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                    });
                    $('a[title]').tooltip({
                        container: 'body'
                    });
                    $('.dropdown-menu input').click(function () {
                            return false;
                        })
                        .change(function () {
                            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                        })
                        .keydown('esc', function () {
                            this.value = '';
                            $(this).change();
                        });

                    $('[data-role=magic-overlay]').each(function () {
                        var overlay = $(this),
                            target = $(overlay.data('target'));
                        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                    });
                    if ("onwebkitspeechchange" in document.createElement("input")) {
                        var editorOffset = $('#editor').offset();
                        $('#voiceBtn').css('position', 'absolute').offset({
                            top: editorOffset.top,
                            left: editorOffset.left + $('#editor').innerWidth() - 35
                        });
                    } else {
                        $('#voiceBtn').hide();
                    }
                };

                function showErrorAlert(reason, detail) {
                    var msg = '';
                    if (reason === 'unsupported-file-type') {
                        msg = "Unsupported format " + detail;
                    } else {
                        console.log("error uploading file", reason, detail);
                    }
                    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
                };
                initToolbarBootstrapBindings();
                $('#editor').wysiwyg({
                    fileUploadError: showErrorAlert
                });
                window.prettyPrint && prettyPrint();
            });
        </script>
        <!-- /editor -->
</body>

</html>