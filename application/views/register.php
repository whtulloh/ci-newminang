<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Registerasi </title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo base_url();?>/asset/layout/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>/asset/layout/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/asset/layout/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url();?>/asset/layout/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/asset/layout/css/icheck/flat/green.css" rel="stylesheet">
    <!-- editor -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/asset/layout/css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/asset/layout/css/editor/index.css" rel="stylesheet">
    <!-- select2 -->
    <link href="<?php echo base_url();?>/asset/layout/css/select/select2.min.css" rel="stylesheet">
    <!-- switchery -->
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/layout/css/switchery/switchery.min.css" />

    <script src="<?php echo base_url();?>/asset/layout/js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../asset/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">

                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_content">
                                <br />
                                <?php
                                    if( isset($flashdata) ) {
                                ?>
                                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                        <strong>Registraion</strong><?php echo $flashdata; ?>
                                    </div>
                                <?php } ?>
                                <br />
                                <?php if(isset($error) ) { echo $error; } ?>
                                <?php echo form_open_multipart('register/api_reg', array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left') ) ?>
                                <!-- <form method="POST" action="<?php echo site_url('register/api_reg') ;?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> -->

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Suami <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="first-name" name="nama_suami"  class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Istri <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="nama_istri"  class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jumlah Anak <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="jml_anak"  class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3"></div>
                                        <label class="control-label col-md-1 col-sm-1" for="last-name">Anak 1<span class="required">*</span>
                                        </label>
                                        <div class="col-md-5 col-sm-5">
                                            <input type="text" id="last-name" name="anak1"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3"></div>
                                        <label class="control-label col-md-1 col-sm-1" for="last-name">Anak 2<span class="required">*</span>
                                        </label>
                                        <div class="col-md-5 col-sm-5">
                                            <input type="text" id="last-name" name="anak2"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3"></div>
                                        <label class="control-label col-md-1 col-sm-1" for="last-name">Anak 3<span class="required">*</span>
                                        </label>
                                        <div class="col-md-5 col-sm-5">
                                            <input type="text" id="last-name" name="anak3"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3"></div>
                                        <label class="control-label col-md-1 col-sm-1" for="last-name">Anak 4<span class="required">*</span>
                                        </label>
                                        <div class="col-md-5 col-sm-5">
                                            <input type="text" id="last-name" name="anak4"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3"></div>
                                        <label class="control-label col-md-1 col-sm-1" for="last-name">Anak 5<span class="required">*</span>
                                        </label>
                                        <div class="col-md-5 col-sm-5">
                                            <input type="text" id="last-name" name="anak5"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="alamat"  class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No Telephone <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="no_telp"  class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Bapak Dari Suami <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="bapak_suami"  class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ibu Dari Suami <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="ibu_suami"  class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Bapak Dari Istri <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="bapak_istri"  class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Bapak Dari Istri <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="ibu_istri"  class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jorong Suami <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="jorong_suami" value="Koto Alam"> Koto Alam
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="jorong_suami" value="Koto Gadang"> Koto Gadang
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="jorong_suami" value="Koto Gadang Hilir"> Koto Gadang Hilir
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="jorong_suami" value=""> Rajo Dani
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <div class="col-md-1"><input type="radio" class="flat" name="jorong_suami" value="other_this" ></div>
                                                    <div class="col-md-11">
                                                        <input type="text" id="last-name" name="jorong_suami_other"  class="form-control col-md-7 col-xs-12" >
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jorong Istri <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="jorong_istri" value="Koto Alam"> Koto Alam
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="jorong_istri" value="Koto Gadang"> Koto Gadang
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="jorong_istri" value="Koto Gadang Hilir"> Koto Gadang Hilir
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="jorong_istri" value="Rajo Dani"> Rajo Dani
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <div class="col-md-1"><input type="radio" class="flat" name="jorong_istri" value="other_this"></div>
                                                    <div class="col-md-11">
                                                        <input type="text" id="last-name" name="jorong_istri_other"  class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Suku Suami <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="suku_suami" value="Chaniago"> Chaniago
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="suku_suami" value="Sembilan"> Sembilan
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="suku_suami" value="Kutianyir"> Kutianyir
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="suku_suami" value="Tujuh"> Tujuh
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="suku_suami" value="Rajo Dani"> Rajo Dani
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <div class="col-md-1"><input type="radio" class="flat" name="suku_suami" value="other_this"></div>
                                                    <div class="col-md-11">
                                                        <input type="text" id="last-name" name="suku_suami_other"  class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Suku Istri <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="suku_istri" value="Chaniago"> Chaniago
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="suku_istri" value="Sembilan"> Sembilan
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="suku_istri" value="Kutianyir"> Kutianyir
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="suku_istri" value="Tujuh"> Tujuh
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="suku_istri" value="Rajo Dani"> Rajo Dani
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <div class="col-md-1"><input type="radio" class="flat" name="suku_istri" value="other_this"></div>
                                                    <div class="col-md-11">
                                                        <input type="text" id="last-name" name="suku_istri_other"  class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Foto <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="file" id="last-name" name="userfile"  >
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <input type="submit" name="submiten" class="btn btn-success" value="Submit">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#birthday').daterangepicker({
                                singleDatePicker: true,
                                calender_style: "picker_4"
                            }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                        });
                    </script>
                </div>
                <!-- /page content -->

            </div>

        </div>
    </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="<?php echo base_url();?>/asset/layout/js/bootstrap.min.js"></script>

        <!-- chart js -->
        <script src="<?php echo base_url();?>/asset/layout/js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="<?php echo base_url();?>/asset/layout/js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="<?php echo base_url();?>/asset/layout/js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="<?php echo base_url();?>/asset/layout/js/icheck/icheck.min.js"></script>
        <!-- tags -->
        <script src="<?php echo base_url();?>/asset/layout/js/tags/jquery.tagsinput.min.js"></script>
        <!-- switchery -->
        <script src="<?php echo base_url();?>/asset/layout/js/switchery/switchery.min.js"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="<?php echo base_url();?>/asset/layout/js/moment.min2.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/asset/layout/js/datepicker/daterangepicker.js"></script>
        <!-- richtext editor -->
        <script src="<?php echo base_url();?>/asset/layout/js/editor/bootstrap-wysiwyg.js"></script>
        <script src="<?php echo base_url();?>/asset/layout/js/editor/external/jquery.hotkeys.js"></script>
        <script src="<?php echo base_url();?>/asset/layout/js/editor/external/google-code-prettify/prettify.js"></script>
        <!-- select2 -->
        <script src="<?php echo base_url();?>/asset/layout/js/select/select2.full.js"></script>
        <!-- form validation -->
        <script type="text/javascript" src="<?php echo base_url();?>/asset/layout/js/parsley/parsley.min.js"></script>
        <!-- textarea resize -->
        <script src="<?php echo base_url();?>/asset/layout/js/textarea/autosize.min.js"></script>
        <script>
            autosize($('.resizable_textarea'));
        </script>
        <!-- Autocomplete -->
        <script type="text/javascript" src="<?php echo base_url();?>/asset/layout/js/autocomplete/countries.js"></script>
        <script src="<?php echo base_url();?>/asset/layout/js/autocomplete/jquery.autocomplete.js"></script>
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
        <script src="<?php echo base_url();?>/asset/layout/js/custom.js"></script>


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
                var validateFront = function () {
                    if (true === $('#demo-form').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
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