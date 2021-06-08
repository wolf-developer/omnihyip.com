<div class="email_outer">
<div class="container">
<div class="row">
<div class="col-lg-6 col-lg-offset-3 col-sm-6 col-ms-6">
<div class="mail-wraper">
    <div class="mail-wraper-content text-center">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="131.5px" height="84px" viewBox="0 0 131.5 84" enable-background="new 0 0 131.5 84" xml:space="preserve">
        <g>
            <path fill="#662d91" d="M128.255,80.67c1.564-1.852,1.683-4.545,1.683-4.545s0-64.75,0-69.25c0-1.606-0.705-2.664-1.605-3.369
                L84.318,47.678L128.255,80.67z"></path>
            <path fill="#662d91" d="M3.6,3.339C1.946,4.747,1.937,6.875,1.937,6.875s0,64,0,69.25c0,2.079,0.865,3.483,1.907,4.432
                l43.759-32.898L3.6,3.339z"></path>
            <path fill="#662d91" d="M124.438,82.375c1.8,0,3.002-0.74,3.817-1.705L84.318,47.678L65.938,66.125L47.603,47.658L3.844,80.557
                c1.589,1.445,3.593,1.818,3.593,1.818S119.188,82.375,124.438,82.375z"></path>
            <path opacity="0.3" fill="#ccc" d="M3.488,3.227L3.6,3.339c0.005-0.005,0.011-0.01,0.017-0.015L3.488,3.227z"></path>
            <path fill="#662d91" d="M54.851,42.21L3.617,3.324C3.611,3.329,3.605,3.334,3.6,3.339l44.003,44.319L54.851,42.21z"></path>
            <path opacity="0.3" fill="#444444" d="M54.851,42.21L3.617,3.324C3.611,3.329,3.605,3.334,3.6,3.339l44.003,44.319L54.851,42.21z"></path>
            <path fill="#662d91" d="M77.02,42.196l7.299,5.481l44.014-44.172c-0.074-0.058-0.146-0.115-0.222-0.167L77.02,42.196z"></path>
            <path opacity="0.3" fill="#444444" d="M77.02,42.196l7.299,5.481l44.014-44.172c-0.074-0.058-0.146-0.115-0.222-0.167L77.02,42.196
                z"></path>
            <polygon fill="#662d91" points="65.938,50.625 54.851,42.21 47.603,47.658 65.938,66.125 84.318,47.678 77.02,42.196   "></polygon>
            <polygon opacity="0.3" fill="#444444" points="65.938,50.625 54.851,42.21 47.603,47.658 65.938,66.125 84.318,47.678
                77.02,42.196    "></polygon>
            <path fill="#ddd" d="M77.02,42.196L128.11,3.338c-1.601-1.115-3.673-1.213-3.673-1.213s-111.5,0-117,0
                c-1.802,0-3.006,0.513-3.82,1.199L54.851,42.21l11.087-8.335L77.02,42.196z"></path>
            <polygon fill="#662d91" points="77.02,42.196 65.938,33.875 54.851,42.21 65.938,50.625   "></polygon>
        </g>
        </svg>
        <h2>Verify your <span>email!</span></h2>
        <?php echo $__env->make('notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <p>Your registration is successful verify your email before proceeding by clicking the link provided in the email. It is most likely that your email will be sent to your spam inbox so please check it. If you didn't receive a mail click on the button to get the verification mail again.</p>
        <br>
        <a class="btn btn-danger" href="<?php echo e(guard_url('verify/send')); ?>">Re-send verification email</a>

    </div>
</div>
</div>
</div>
</div>
</div>

<style>
.email_outer {
    width: 100%;
    padding: 50px 0;
    margin: 0px;
    background: #f3f3f5;
}

.mail-wraper {
    background: #fff;
    padding: 10%;
    box-shadow: 0 0 4px #d6cece;
    border-radius: 4px; -webkit-border-radius: 4px;  -moz-border-radius: 4px;
}
.mail-wraper h2 {
    color: #392c96;
    font-weight: 600;
    margin: 17px 0;
}
.mail-wraper .btn-danger {
    background: #662d91;
    border-color: #662d91;
    padding: 9px 21px;
}
.mail-wraper p {
    line-height: 22px;
    font-weight: 500;
    font-size: 14px;
    color: black;
}
.mail-wraper .btn-danger:focus {
    background: #0f383f;
    border-color: #0f383f;
    
}


</style>


