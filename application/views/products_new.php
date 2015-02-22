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

                                <div class="widget-toolbar">
                                    <label>
                                        <small class="green">
                                            <b>Validation</b>
                                        </small>

                                        <input id="skip-validation" type="checkbox" class="ace ace-switch ace-switch-4" checked=""/>
                                        <span class="lbl"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <div id="fuelux-wizard" class="row-fluid" data-target="#step-container">
                                        <ul class="wizard-steps">
                                            <li data-target="#step1" class="active">
                                                <span class="step">1</span>
                                                <span class="title">Item Information</span>
                                            </li>

                                            <li data-target="#step2">
                                                <span class="step">2</span>
                                                <span class="title">Units of measurements</span>
                                            </li>

                                            <li data-target="#step3">
                                                <span class="step">3</span>
                                                <span class="title">Category</span>
                                            </li>

                                            <li data-target="#step4">
                                                <span class="step">4</span>
                                                <span class="title">Other Info</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <hr />
                                    <div class="step-content row-fluid position-relative" id="step-container">
                                        <div class="step-pane active" id="step1">
                                            <h3 class="lighter block green">Enter the following information</h3>

                                            <form class="form-horizontal" id="validation-form" method="get">
                                                <div class="form-group">
                                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Name:</label>

                                                    <div class="col-xs-12 col-sm-9">
                                                        <div class="clearfix">
                                                            <input type="text" name="name" id="email" class="col-xs-12 col-sm-6" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="space-2"></div>

                                                <div class="form-group">
                                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right">Unit of Measurements</label>

                                                    <div class="col-xs-12 col-sm-9">
                                                        <div>
                                                            <label>
                                                                <input name="subscription" value="1" type="checkbox" class="ace" />
                                                                <span class="lbl"> Pieces</span>
                                                            </label>
                                                        </div>

                                                        <div>
                                                            <label>
                                                                <input name="subscription" value="12" type="checkbox" class="ace" />
                                                                <span class="lbl"> Dozen</span>
                                                            </label>
                                                        </div>
                                                        
                                                        <div>
                                                            <label>
                                                                <input name="subscription" value="2" type="checkbox" class="ace" />
                                                                <span class="lbl"> Dozen</span>
                                                            </label>
                                                        </div>
                                                        
                                                        <div>
                                                            <label>
                                                                <input name="subscription" value="2" type="checkbox" class="ace" />
                                                                <span class="lbl"> Dozen</span>
                                                            </label>
                                                        </div>
                                                        
                                                        <div>
                                                            <label>
                                                                <input name="subscription" value="2" type="checkbox" class="ace" />
                                                                <span class="lbl"> Dozen</span>
                                                            </label>
                                                        </div>
                                                        
                                                        <div>
                                                            <label>
                                                                <input name="subscription" value="2" type="checkbox" class="ace" />
                                                                <span class="lbl"> Dozen</span>
                                                            </label>
                                                        </div>
                                                        
                                                        <div>
                                                            <label>
                                                                <input name="subscription" value="2" type="checkbox" class="ace" />
                                                                <span class="lbl"> Dozen</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="space-2"></div>

                                                <div class="form-group">
                                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2">Confirm Password:</label>

                                                    <div class="col-xs-12 col-sm-9">
                                                        <div class="clearfix">
                                                            <input type="text" id="category" name="url" class="col-xs-12 col-sm-8" />
                                                            <input type="text" name="password2" id="password2" class="col-xs-12 col-sm-4" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="hr hr-dotted"></div>


                                            </form>
                                        </div>

                                        <div class="step-pane" id="step2">
                                            <div class="row-fluid">
                                                <div class="alert alert-success">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <i class="icon-remove"></i>
                                                    </button>

                                                    <strong>
                                                        <i class="icon-ok"></i>
                                                        Well done!
                                                    </strong>

                                                    You successfully read this important alert message.
                                                    <br />
                                                </div>

                                                <div class="alert alert-danger">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <i class="icon-remove"></i>
                                                    </button>

                                                    <strong>
                                                        <i class="icon-remove"></i>
                                                        Oh snap!
                                                    </strong>

                                                    Change a few things up and try submitting again.
                                                    <br />
                                                </div>

                                                <div class="alert alert-warning">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <i class="icon-remove"></i>
                                                    </button>
                                                    <strong>Warning!</strong>

                                                    Best check yo self, you're not looking too good.
                                                    <br />
                                                </div>

                                                <div class="alert alert-info">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <i class="icon-remove"></i>
                                                    </button>
                                                    <strong>Heads up!</strong>

                                                    This alert needs your attention, but it's not super important.
                                                    <br />
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
