<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">
        <script type="text/javascript">
            try {
                ace.settings.check('breadcrumbs', 'fixed')
            } catch (e) {
            }
        </script>

        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="#">Home</a>
            </li>

            <li>
                <a href="<?php echo base_url() . 'products'; ?>">Products</a>
            </li>
            <li class="active">New Product</li>
        </ul><!-- .breadcrumb -->

        <div class="nav-search" id="nav-search">
            <form class="form-search">
                <span class="input-icon">
                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                    <i class="icon-search nav-search-icon"></i>
                </span>
            </form>
        </div><!-- #nav-search -->
    </div>
    <div class="page-content">
        <div class="page-header">
            <h1>
                New Product
                <small>
                    <i class="icon-double-angle-right"></i>
                    New Item
                </small>
            </h1>
        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->


                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-header widget-header-blue widget-header-flat">
                                <h4 class="lighter">New Item Wizard</h4>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <div id="fuelux-wizard" class="row-fluid" data-target="#step-container">
                                        <ul class="wizard-steps">
                                            <li data-target="#step1" class="active">
                                                <span class="step">1</span>
                                                <span class="title">Product Info</span>
                                            </li>

                                            <li data-target="#step2">
                                                <span class="step">2</span>
                                                <span class="title">Unit Prices</span>
                                            </li>

                                            <li data-target="#step3">
                                                <span class="step">3</span>
                                                <span class="title">Inventory</span>
                                            </li>

                                            <li data-target="#step4">
                                                <span class="step">4</span>
                                                <span class="title">Supplier</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <hr />
                                    <div class="step-content row-fluid position-relative" id="step-container">
                                        <div class="step-pane active" id="step1">
                                            <h3 class="lighter block green">Enter the following information</h3>
                                            <form class="form-horizontal" id="validation-form" method="get">

                                                <div class="form-group">
                                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Product Name:</label>

                                                    <div class="col-xs-12 col-sm-9">
                                                        <div class="clearfix">
                                                            <input type="text" id="name" name="name" class="col-xs-12 col-sm-5" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="space-2"></div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Category</label>

                                                    <div class="col-sm-9">
                                                        <div class="clearfix">
                                                            <input type="text" name="tags" id="form-field-tags" value="" placeholder="Enter tags ..." />
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                        <div class="step-pane" id="step2">
                                            <div class="row-fluid">
                                                <div class="widget-box">
                                                    <div class="widget-header header-color-blue">
                                                        <h5 class="bigger lighter">
                                                            <i class="icon-table"></i>
                                                            Tables & Colors
                                                        </h5>

                                                        <div class="widget-toolbar widget-toolbar-light no-border">
                                                            <select id="simple-colorpicker-1" class="hide">
                                                                <option selected="" data-class="blue" value="#307ECC">#307ECC</option>
                                                                <option data-class="blue2" value="#5090C1">#5090C1</option>
                                                                <option data-class="blue3" value="#6379AA">#6379AA</option>
                                                                <option data-class="green" value="#82AF6F">#82AF6F</option>
                                                                <option data-class="green2" value="#2E8965">#2E8965</option>
                                                                <option data-class="green3" value="#5FBC47">#5FBC47</option>
                                                                <option data-class="red" value="#E2755F">#E2755F</option>
                                                                <option data-class="red2" value="#E04141">#E04141</option>
                                                                <option data-class="red3" value="#D15B47">#D15B47</option>
                                                                <option data-class="orange" value="#FFC657">#FFC657</option>
                                                                <option data-class="purple" value="#7E6EB0">#7E6EB0</option>
                                                                <option data-class="pink" value="#CE6F9E">#CE6F9E</option>
                                                                <option data-class="dark" value="#404040">#404040</option>
                                                                <option data-class="grey" value="#848484">#848484</option>
                                                                <option data-class="default" value="#EEE">#EEE</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="widget-body">
                                                        <div class="widget-main no-padding">
                                                            <table class="table table-striped table-bordered table-hover">
                                                                <thead class="thin-border-bottom">
                                                                    <tr>
                                                                        <th>
                                                                            Quantity
                                                                        </th>

                                                                        <th>
                                                                            Unit
                                                                        </th>
                                                                        <th class="hidden-480">Price</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr>
                                                                        <td class="">1</td>

                                                                        <td>
                                                                            <a href="#">Piece</a>
                                                                        </td>

                                                                        <td class="hidden-480">
                                                                            20.00
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="">12</td>

                                                                        <td>
                                                                            <a href="#">dozen</a>
                                                                        </td>

                                                                        <td class="hidden-480">
                                                                            230.00
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="">144</td>

                                                                        <td>
                                                                            <a href="#">gross</a>
                                                                        </td>

                                                                        <td class="hidden-480">
                                                                            2500.00
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="">2280</td>

                                                                        <td>
                                                                            <a href="#">case</a>
                                                                        </td>

                                                                        <td class="hidden-480">
                                                                            45000.00
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="step-pane" id="step3">
                                            <div class="center">
                                                <h3 class="blue lighter">This is step 3</h3>
                                            </div>
                                        </div>

                                        <div class="step-pane" id="step4">
                                            <div class="center">
                                                <h3 class="green">Congrats!</h3>
                                                Your product is ready to ship! Click finish to continue!
                                            </div>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="row-fluid wizard-actions">
                                        <button class="btn btn-prev">
                                            <i class="icon-arrow-left"></i>
                                            Prev
                                        </button>

                                        <button class="btn btn-success btn-next" data-last="Finish ">
                                            Next
                                            <i class="icon-arrow-right icon-on-right"></i>
                                        </button>
                                    </div>
                                </div><!-- /widget-main -->
                            </div><!-- /widget-body -->
                        </div>
                    </div>
                </div>

                <div id="modal-wizard" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" data-target="#modal-step-contents">
                                <ul class="wizard-steps">
                                    <li data-target="#modal-step1" class="active">
                                        <span class="step">1</span>
                                        <span class="title">Validation states</span>
                                    </li>

                                    <li data-target="#modal-step2">
                                        <span class="step">2</span>
                                        <span class="title">Alerts</span>
                                    </li>

                                    <li data-target="#modal-step3">
                                        <span class="step">3</span>
                                        <span class="title">Payment Info</span>
                                    </li>

                                    <li data-target="#modal-step4">
                                        <span class="step">4</span>
                                        <span class="title">Other Info</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="modal-body step-content" id="modal-step-contents">
                                <div class="step-pane active" id="modal-step1">
                                    <div class="center">
                                        <h4 class="blue">Step 1</h4>
                                    </div>
                                </div>

                                <div class="step-pane" id="modal-step2">
                                    <div class="center">
                                        <h4 class="blue">Step 2</h4>
                                    </div>
                                </div>

                                <div class="step-pane" id="modal-step3">
                                    <div class="center">
                                        <h4 class="blue">Step 3</h4>
                                    </div>
                                </div>

                                <div class="step-pane" id="modal-step4">
                                    <div class="center">
                                        <h4 class="blue">Step 4</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer wizard-actions">
                                <button class="btn btn-sm btn-prev">
                                    <i class="icon-arrow-left"></i>
                                    Prev
                                </button>

                                <button class="btn btn-success btn-sm btn-next" data-last="Finish ">
                                    Next
                                    <i class="icon-arrow-right icon-on-right"></i>
                                </button>

                                <button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
                                    <i class="icon-remove"></i>
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div><!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div><!-- /.main-content -->