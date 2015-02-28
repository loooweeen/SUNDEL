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

                <form class="form-horizontal" role="form">

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-5">Product Name and Description</label>

                        <div class="col-sm-9">
                            <div class="clearfix">
                                <input class="col-xs-5" type="text" id="productName" placeholder="Example: Hard Copy Short Substance 20" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-4">Product Code</label>

                        <div class="col-sm-9">
                            <input class="input-medium" type="text" id="form-field-4" placeholder="HDCPY-SB20-S " />

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-3">Category</label>

                        <div class="col-sm-9">
                            <select class="width-80 chosen-select" id="form-field-select-3" data-placeholder="Choose a Category...">
                                <option value="0">Not Specified</option>
                                <?php foreach ($categories as $c) : ?>
                                    <option value="<?php echo $c->categoryID; ?>"><?php echo $c->category ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn btn-info" type="submit">
                                <i class="icon-ok bigger-110"></i>
                                Submit
                            </button>

                            &nbsp; &nbsp; &nbsp;
                            <button class="btn" type="reset">
                                <i class="icon-undo bigger-110"></i>
                                Reset
                            </button>
                        </div>
                    </div>
                </form>

                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div><!-- /.main-content -->
