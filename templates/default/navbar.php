<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">
        <img src="<?php echo ROUTE_IMG ?>bitcoin.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <?php echo $data["name"]; ?>
    </a>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <?php if (isset($data["balance"]) && $data["balance"] > 0): ?>
            <li class="nav-item active">
                <a class="nav-link" href="#"> 
                    Balance: <?php echo $data["balance"]; ?>
                </a>
            </li> 
        <?php endif; ?>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                List faucets
            </a>
        <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">FreeBitCoin</a>
          <a class="dropdown-item" href="#">FreeBTC</a>
          <a class="dropdown-item" href="#">Btc</a>
        </div>
      </li>
    </ul>
</nav>

<main role="main" class="container">
    <div class="jumbotron text-center">

        <h1>
            <?php echo $data["name"]; ?>   
        </h1>
        <p class="lead"><?php echo $data["short"]; ?></p>

        <div class="row">
            <div class="col-4">
                <div class="col-12 mb-2">
                   
                   <img src="<?php echo ROUTE_IMG ?>hierarchical-structure.png" height="140" alt="">

                    <!--<span class="fa fa-users text-info fa-5x mb-1"></span>-->
                </div>
               <div class="col-12">
                   <span>
                        Recommend our website with your link and earn an extra <strong>15%</strong> for each referral.
                    </span>
               </div>
            </div>

            <div class="col-4">
                <div class="col-12 mb-3">
                    <img src="<?php echo ROUTE_IMG ?>wallet.png"  height="140" alt="">
                    <!--<span class="fa fa-university text-info fa-5x"></span>-->
                </div>
                <div class="col-12">
                    <span>
                        Win directly to your <strong>FaucetHub.io</strong> account.
                    </span>
                </div>
                
            </div>
            <div class="col-4">
                <div class="col-12 mb-2">
                     <img src="<?php echo ROUTE_IMG ?>clock.png" height="140" alt="">

                    <!--<span class="fa fa-clock-o text-info fa-5x"></span>-->

                </div>
                <div class="col-12">
                    <span>
                        Do not wait more! Win at every moment between <strong>3 and 5 satoshis.</strong>
                    </span>
                </div>
            </div>
        </div>
    </div>
</main>