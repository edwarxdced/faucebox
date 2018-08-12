<?php if ($data["reflink"]): ?>
    <div class="row">
        <div class="col-12">
            <div class="bs-callout bs-callout-info">
                <p>
                    Reflink: <code><?php echo $data["reflink"]; ?></code>
                </p>
                <footer>Share this link with your friends and earn <?php echo $data["referral"]; ?>% referral commission</footer>
            </div>
        </div>
    </div>
<?php endif; ?>