<div class="ace-settings-container" id="ace-settings-container">
    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
        <i class="icon-cog bigger-150"></i>
    </div>

    <div class="ace-settings-box" id="ace-settings-box">
        <div>
            <div class="pull-left">
                <select id="skin-colorpicker" class="hide">
                    <option data-skin="default" value="#438EB9">#438EB9</option>
                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                </select>
            </div>
            <span>&nbsp; Choose Skin</span>
        </div>

        <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
            <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
        </div>

        <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
            <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
        </div>

        <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
            <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
        </div>

        <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
            <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
        </div>

        <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
            <label class="lbl" for="ace-settings-add-container">
                Inside
                <b>.container</b>
            </label>
        </div>
    </div>
</div><!-- /#ace-settings-container -->
</div><!-- /.main-container-inner -->

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="icon-double-angle-up icon-only bigger-110"></i>
</a>
</div><!-- /.main-container -->




<!-- basic scripts -->

<!--[if !IE]> -->

<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if ("ontouchend" in document)
        document.write("<script src='<?php echo base_url(); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>



<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
  <script src="<?php echo base_url(); ?>assets/js/excanvas.min.js"></script>
<![endif]-->

<!-- ace scripts -->
<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ace.min.js"></script>
<!-- ace scripts -->

<script src="<?php echo base_url(); ?>assets/js/additional-methods.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-tag.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/typeahead-bs2.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/date-time/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/date-time/daterangepicker.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.resize.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/fuelux/fuelux.spinner.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/fuelux/fuelux.wizard.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/x-editable/bootstrap-editable.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/x-editable/ace-editable.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.knob.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.gritter.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.easy-pie-chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.hotkeys.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>



<!-- inline scripts related to this page -->

<script type="text/javascript">
    jQuery(function ($) {

        //start of inline scripts

        //START
        $('[data-rel=tooltip]').tooltip();
        //END


        //START
        $(".select2").css('width', '200px').select2({allowClear: true})
                .on('change', function () {
                    $(this).closest('form').validate().element($(this));
                });
        //END

        //START
        var $validation = false;
        $('#fuelux-wizard').ace_wizard().on('change', function (e, info) {
            if (info.step == 1 && $validation) {
                if (!$('#validation-form').valid())
                    return false;
            }
        }).on('finished', function (e) {
            bootbox.dialog({
                message: "Thank you! Your information was successfully saved!",
                buttons: {
                    "success": {
                        "label": "OK",
                        "className": "btn-sm btn-primary"
                    }
                }
            });
        }).on('stepclick', function (e) {
            //return false;//prevent clicking on steps
        });
        //END

        //START
        $('#skip-validation').on('click', function () {
            $validation = this.checked;
            if (this.checked) {
                $('#validation-form').removeClass('hide');
            }
            else {
                $('#validation-form').addClass('hide');
            }
        });
        //END

        //START
        $(".chosen-select").chosen();
        //END

        //documentation : http://docs.jquery.com/Plugins/Validation/validate

        //START

        $('#validation-form').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                },
                password2: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                name: {
                    required: true
                },
                phone: {
                    required: true,
                    phone: 'required'
                },
                url: {
                    required: true,
                    url: true
                },
                comment: {
                    required: true
                },
                state: {
                    required: true
                },
                platform: {
                    required: true
                },
                subscription: {
                    required: true
                },
                gender: 'required',
                agree: 'required'
            },
            messages: {
                email: {
                    required: "Please provide a valid email.",
                    email: "Please provide a valid email."
                },
                password: {
                    required: "Please specify a password.",
                    minlength: "Please specify a secure password."
                },
                subscription: "Please choose at least one option",
                gender: "Please choose gender",
                agree: "Please accept our policy"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit   
                $('.alert-danger', $('.login-form')).show();
            },
            highlight: function (e) {
                $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
            },
            success: function (e) {
                $(e).closest('.form-group').removeClass('has-error').addClass('has-info');
                $(e).remove();
            },
            errorPlacement: function (error, element) {
                if (element.is(':checkbox') || element.is(':radio')) {
                    var controls = element.closest('div[class*="col-"]');
                    if (controls.find(':checkbox,:radio').length > 1)
                        controls.append(error);
                    else
                        error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                }
                else if (element.is('.select2')) {
                    error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                }
                else if (element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else
                    error.insertAfter(element.parent());
            },
            submitHandler: function (form) {
            },
            invalidHandler: function (form) {
            }
        });

        //END

        //START

        //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
        var tag_input = $('#form-field-tags');
        if (!(/msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())))
        {
                categ = new Array();
                <?php 
                    $vars = $this->Category_model->category_list();
                ?>

                <?php foreach($vars as $v) : ?>
                    categ.push("<?php echo $v->category; ?>");
                <?php endforeach; ?>
            tag_input.tag(
                    {
                        placeholder: tag_input.attr('placeholder'),
                        //enable typeahead by specifying the source array
                        source: categ,//ace.variable_US_STATES, //defined in ace.js >> ace.enable_search_ahead
                        
                    }
            );
        }
        else {
            //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
            tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') + '" rows="3">' + tag_input.val() + '</textarea>').remove();
            //$('#form-field-tags').autosize({append: "\n"});
        }

        //END


        //START
        //$('#modal-wizard .modal-header').ace_wizard();
        //$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
        //END
        
        //end of form wizard inline script


        //START
        var orderTable = $('#order-table').dataTable({
            "aoColumns": [
                {"bSortable": false},
                null, null, null, null, null,
                {"bSortable": false}
            ]});

        var productTable = $('#product-table').dataTable({
            "aoColumns": [
                {"bSortable": false},
                null, null, null,
                {"bSortable": false}
            ]});

        var clientTable = $('#client-table').dataTable({
            "aoColumns": [
                {"bSortable": false},
                null, null, null, null,
                {"bSortable": false}
            ]});
        
       //END
//        
//        $('table th input:checkbox').on('click', function() {
//            var that = this;
//            $(this).closest('table').find('tr > td:first-child input:checkbox')
//                    .each(function() {
//                        this.checked = that.checked;
//                        $(this).closest('tr').toggleClass('selected');
//                        console.log('click');
//                    });
//
//        });
//
//
//        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
//        function tooltip_placement(context, source) {
//            var $source = $(source);
//            var $parent = $source.closest('table')
//            var off1 = $parent.offset();
//            var w1 = $parent.width();
//
//            var off2 = $source.offset();
//            var w2 = $source.width();
//
//            console.log('click');
//
//            if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
//                return 'right';
//            return 'left';
//        }
//
//        $('.easy-pie-chart.percentage').each(function() {
//            var $box = $(this).closest('.infobox');
//            var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
//            var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
//            var size = parseInt($(this).data('size')) || 50;
//            $(this).easyPieChart({
//                barColor: barColor,
//                trackColor: trackColor,
//                scaleColor: false,
//                lineCap: 'butt',
//                lineWidth: parseInt(size / 10),
//                animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
//                size: size
//            });
//        })
//
//        $('.sparkline').each(function() {
//            var $box = $(this).closest('.infobox');
//            var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
//            $(this).sparkline('html', {tagValuesAttribute: 'data-values', type: 'bar', barColor: barColor, chartRangeMin: $(this).data('min') || 0});
//        });
//
//        var placeholder = $('#piechart-placeholder').css({'width': '90%', 'min-height': '150px'});
//        var data = [
//            {label: "social networks", data: 38.7, color: "#68BC31"},
//            {label: "search engines", data: 24.5, color: "#2091CF"},
//            {label: "ad campaigns", data: 8.2, color: "#AF4E96"},
//            {label: "direct traffic", data: 18.6, color: "#DA5430"},
//            {label: "other", data: 10, color: "#FEE074"}
//        ]
//        function drawPieChart(placeholder, data, position) {
//            $.plot(placeholder, data, {
//                series: {
//                    pie: {
//                        show: true,
//                        tilt: 0.8,
//                        highlight: {
//                            opacity: 0.25
//                        },
//                        stroke: {
//                            color: '#fff',
//                            width: 2
//                        },
//                        startAngle: 2
//                    }
//                },
//                legend: {
//                    show: true,
//                    position: position || "ne",
//                    labelBoxBorderColor: null,
//                    margin: [-30, 15]
//                }
//                ,
//                grid: {
//                    hoverable: true,
//                    clickable: true
//                }
//            })
//        }
//        drawPieChart(placeholder, data);
//
//        /**
//         we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
//         so that's not needed actually.
//         */
//        placeholder.data('chart', data);
//        placeholder.data('draw', drawPieChart);
//
//
//
//        var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
//        var previousPoint = null;
//
//        placeholder.on('plothover', function(event, pos, item) {
//            if (item) {
//                if (previousPoint != item.seriesIndex) {
//                    previousPoint = item.seriesIndex;
//                    var tip = item.series['label'] + " : " + item.series['percent'] + '%';
//                    $tooltip.show().children(0).text(tip);
//                }
//                $tooltip.css({top: pos.pageY + 10, left: pos.pageX + 10});
//            } else {
//                $tooltip.hide();
//                previousPoint = null;
//            }
//
//        });
//
//        var d1 = [];
//        for (var i = 0; i < Math.PI * 2; i += 0.5) {
//            d1.push([i, Math.sin(i)]);
//        }
//
//        var d2 = [];
//        for (var i = 0; i < Math.PI * 2; i += 0.5) {
//            d2.push([i, Math.cos(i)]);
//        }
//
//        var d3 = [];
//        for (var i = 0; i < Math.PI * 2; i += 0.2) {
//            d3.push([i, Math.tan(i)]);
//        }
//
//        var sales_charts = $('#sales-charts').css({'width': '100%', 'height': '220px'});
//        $.plot("#sales-charts", [
//            {label: "Domains", data: d1},
//            {label: "Hosting", data: d2},
//            {label: "Services", data: d3}
//        ], {
//            hoverable: true,
//            shadowSize: 0,
//            series: {
//                lines: {show: true},
//                points: {show: true}
//            },
//            xaxis: {
//                tickLength: 0
//            },
//            yaxis: {
//                ticks: 10,
//                min: -2,
//                max: 2,
//                tickDecimals: 3
//            },
//            grid: {
//                backgroundColor: {colors: ["#fff", "#fff"]},
//                borderWidth: 1,
//                borderColor: '#555'
//            }
//        });
//
//
//        $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
//        function tooltip_placement(context, source) {
//            var $source = $(source);
//            var $parent = $source.closest('.tab-content');
//            var off1 = $parent.offset();
//            var w1 = $parent.width();
//
//            var off2 = $source.offset();
//            var w2 = $source.width();
//
//            if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
//                return 'right';
//            return 'left';
//        }
//
//
//        $('.dialogs,.comments').slimScroll({
//            height: '300px'
//        });
//
//
//        //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
//        //so disable dragging when clicking on label
//        var agent = navigator.userAgent.toLowerCase();
//        if ("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
//            $('#tasks').on('touchstart', function(e) {
//                var li = $(e.target).closest('#tasks li');
//                if (li.length == 0)
//                    return;
//                var label = li.find('label.inline').get(0);
//                if (label == e.target || $.contains(label, e.target))
//                    e.stopImmediatePropagation();
//            });
//
//        $('#tasks').sortable({
//            opacity: 0.8,
//            revert: true,
//            forceHelperSize: true,
//            placeholder: 'draggable-placeholder',
//            forcePlaceholderSize: true,
//            tolerance: 'pointer',
//            stop: function(event, ui) {//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
//                $(ui.item).css('z-index', 'auto');
//            }
//        }
//        );
//        $('#tasks').disableSelection();
//        $('#tasks input:checkbox').removeAttr('checked').on('click', function() {
//            if (this.checked)
//                $(this).closest('li').addClass('selected');
//            else
//                $(this).closest('li').removeClass('selected');
//        });

    })
</script>
</body>
</html>
