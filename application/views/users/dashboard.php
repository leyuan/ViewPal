<div class='vp-user-dashboard'>
    <div>
        <h3><?php echo $username?> | Dashboard(<a href='<?php echo base_url()."index.php/user/logout";?>'>log out?</a>)</h3>
    </div>
    <div class='payment-history'>
        <h2 class="dashboard-title">Payment History</h2>
        <div class="dashboard-summary">
            <h4>Your current Balance: <?php echo $balance;?></h4>            
            <h4>Last Payment Date : <?php echo $lastdate;?></h4>
        </div>
        <form action="<?php echo base_url()."index.php/user/checkout";?>" method="POST">
            <script
              src="https://checkout.stripe.com/checkout.js" class="stripe-button"
              data-key="pk_test_az6rwZ1KIGPeJcjbprNKmIfv"
              data-amount="500"
              data-name="Demo Site"
              data-description="Everytime 5 bucks is good to go!"
              data-image="/128x128.png">
            </script>
      </form>
    </div>
    
    <div class='payment-details'>
        <h2 class="dashboard-title">Payment Details</h2>
        <table class="user-dashboard-table">
            <tr>
                <th>Date</th>
                <th>Amount</th>
                <th>Host</th>
                <th>URL</th>
            </tr>
            <?php foreach ($payment_details->result() as $payment_item){
            ?>
            <tr>
                <th><?php echo $payment_item->Date?></th>
                <th><?php echo $payment_item->Cost?></th>
                <th><a href="<?php echo $payment_item->Domain?>"><?php echo $payment_item->Domain?></a></th>
                <th><a href="<?php echo $payment_item->Url?>"><?php echo $payment_item->Url?></a></th>
            </tr>
            <?php
            }
            ?>           
        </table>
        
        
    </div>
    
    <div class=''>
    </div>
    
</div>