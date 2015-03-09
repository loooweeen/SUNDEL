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
                <a href="<?php echo base_url() . 'orders'; ?>">Orders</a>
            </li>
            <li class="active">Invoice</li>
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
        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->

                <div class="space-6"></div>

                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="widget-box transparent invoice-box">
                            <div class="widget-header widget-header-large">
                                <h3 class="grey lighter pull-left position-relative">
                                    <i class="icon-leaf green"></i>
                                    Customer Invoice
                                </h3>

                                <div class="widget-toolbar no-border invoice-info">
                                    <span class="invoice-info-label">Transaction:</span>
                                    <span class="red"><?php echo '#' . $transaction->transactionID; ?></span>

                                    <br />
                                    <span class="invoice-info-label">Date:</span>
                                    <span class="blue"><?php echo $transaction->date; ?></span>
                                </div>

                                <div class="widget-toolbar hidden-480">
                                    <a href="#">
                                        <i class="icon-print"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main padding-24">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
                                                    <b>Company Info</b>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <ul class="list-unstyled spaced">
                                                    <li>
                                                        <i class="icon-caret-right blue"></i>
                                                        Street, City
                                                    </li>

                                                    <li>
                                                        <i class="icon-caret-right blue"></i>
                                                        Zip Code
                                                    </li>

                                                    <li>
                                                        <i class="icon-caret-right blue"></i>
                                                        State, Country
                                                    </li>

                                                    <li>
                                                        <i class="icon-caret-right blue"></i>
                                                        Phone:
                                                        <b class="red">111-111-111</b>
                                                    </li>

                                                    <li class="divider"></li>

                                                    <li>
                                                        <i class="icon-caret-right blue"></i>
                                                        Paymant Info
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /span -->

                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
                                                    <b>Customer Info</b>
                                                </div>
                                            </div>

                                            <div>
                                                <ul class="list-unstyled  spaced">
                                                    <li>
                                                        <i class="icon-caret-right green"></i>
                                                        Street, City
                                                    </li>

                                                    <li>
                                                        <i class="icon-caret-right green"></i>
                                                        Zip Code
                                                    </li>

                                                    <li>
                                                        <i class="icon-caret-right green"></i>
                                                        State, Country
                                                    </li>

                                                    <li class="divider"></li>

                                                    <li>
                                                        <i class="icon-caret-right green"></i>
                                                        Contact Info
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /span -->
                                    </div><!-- row -->

                                    <div class="space"></div>

                                    <div>
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="center">Quantity</th>
                                                    <th>Unit</th>
                                                    <th class="hidden-xs">Item</th>
                                                    <th class="hidden-480">Discount</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php $total = 0; ?>
                                                <?php foreach ($orders as $order): ?>
                                                    <tr>
                                                        <td class="center"><?php echo $order->quantity; ?></td>

                                                        <td>
                                                            <?php echo $this->Product_model->order_product($order->priceID)->unit; ?>
                                                        </td>
                                                        <td class="hidden-xs">
                                                            <a href="#"><?php echo $this->Product_model->order_product($order->priceID)->name; ?></a>
                                                        </td>
                                                        <td class="hidden-480"> --- </td>
                                                        <td>₱<?php echo $this->Product_model->order_product($order->priceID)->price; ?></td>
                                                        <?php $total = $total + $this->Product_model->order_product($order->priceID)->price; ?>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="hr hr8 hr-double hr-dotted"></div>

                                    <div class="row">
                                        <div class="col-sm-5 pull-right">
                                            <h4 class="pull-right">
                                                Total amount :
                                                <span class="red">₱<?php echo $total; ?></span>
                                            </h4>
                                        </div>
                                        <div class="col-sm-7 pull-left"> Extra Information </div>
                                    </div>

                                    <div class="space-6"></div>
                                    <div class="well">
                                        Thank you for choosing Ace Company products.
                                        We believe you will be satisfied by our services.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div><!-- /.main-content -->