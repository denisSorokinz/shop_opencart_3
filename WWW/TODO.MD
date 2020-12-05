[x] Make a backup of catalog/controller/checkout/checkout.php
[ ] ??Fill in $totals in catalog/controller/checkout/
/catalog/controller/extension/payment/liqpay.php->server()->addOrderHistory
1) on "Pay" click call catalog/controller/checkout/confirm.php
2) create custom script, fill in empty and entered fields, addOrder(),
    addOrderHistory()
[ ] checkout.php -> data['totalPrice'] (example in confirm.php, call to model)
[ ] Fill unnecessary fields from catalog/controller/checkout/confirm.php with an
    empty string
[ ] Add necessary fields to 1st step form
[ ] Add pay button {{ payment }} to 2nd step form
    [ ] Pass from .php to .twig
        $data['payment'] = $this->load->controller('extension/payment/liqpay');
[ ] Display all order info on 2nd step form
[ ] Remove unnecessary forms