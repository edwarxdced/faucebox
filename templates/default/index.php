<!DOCTYPE html>
<html>
<head>
<?php require_once("head.php"); ?>
</head>

<body>
   <?php require_once("navbar.php"); ?>

    <?php if(!empty($data["user_pages"])): ?>
    <nav class="navbar navbar-fixed navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./">
                    <?php echo $data["name"]; ?>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <?php foreach($data["user_pages"] as $page): ?>
                    <li><a href="?p=<?php echo $page["url_name"]; ?>"><?php echo $page["name"]; ?></a></li>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php endif; ?>


    <div class="container">
    
        <div class="row">
            <div class="col-xs-12 <?php echo $data["custom_box_top_bg"] . ' ' . $data["custom_box_top_tx"]; ?>"><?php echo $data["custom_box_top"]; ?>
                
            </div>
        </div>

        QUE ES FAUCETBOX (Y LISTA DE FAUCETS QUE PAGAN POR FAUCETBOX)Dinero por clic  4 enero, 2016  18  Dinerop 

 
        Si eres una persona emprendedora quizá te interese crear tu propia faucet (apenas 2$ para tenerlo listo)…

        que-es-faucetbox-bitcoins

        ¿Qué es FaucetBOX? Hola amigos, varias veces me habréis oído hablar sobre FaucetBOX y os habréis preguntado qué es FaucetBOX, pues estáis de suerte, hoy sabréis lo que es esta página y para qué sirve. Si no sabes lo que es una Faucet, te recomiendo que antes de leer esta entrada te pases por este enlace. También te dejo una buena lista de faucets que pagan por FaucetBOX
    
        <div class="row mb-3">  
            
            <iframe data-aa='935470' src='//ad.a-ads.com/935470?size=468x60' scrolling='no' style='width:468px; height:60px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
            <iframe data-aa='935470' src='//ad.a-ads.com/935470?size=468x60' scrolling='no' style='width:468px; height:60px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>

        </div>
           
        <div class="row">
                <?php if($data["page"] != 'user_page'): ?>

                <?php endif;    if($data["error"]) echo $data["error"]; ?>
                <?php if($data["safety_limits_end_time"]): ?>
                
                <p class="alert alert-warning">This faucet exceeded it's safety limits and may not payout now!</p>

                <?php endif; ?>
                <?php switch($data["page"]):
                        case "disabled": ?>
                    <p class="alert alert-danger">FAUCET DISABLED. Go to <a href="admin.php">admin page</a> and fill all required data!</p>
                <?php break; 
                case "eligible": ?>
                <div class="bs-callout bs-callout-info col-12">
        
                        <form method="POST" class="form-horizontal mt-3" role="form">
                            <div class="form-group">

                                <input type="text" name="address" class="form-control" style="position: absolute; position: fixed; left: -99999px; top: -99999px; opacity: 0; width: 1px; height: 1px">
                                <input type="checkbox" name="honeypot" style="position: absolute; position: fixed; left: -99999px; top: -99999px; opacity: 0; width: 1px; height: 1px">
                                
                                
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Your address" aria-label="Your address" name="<?php echo $data["address_input_name"]; ?>" value="<?php echo $data["address"]; ?>" required>
                                </div>
                                    
                            </div>
                            <center>
                                <div class="align-items-center">
                                    <div class="form-group">
                                        <?php echo $data["captcha"]; ?>
                                        <div class="text-center">
                                            <?php
                                            if (count($data['captcha_info']['available']) > 1) {
                                                foreach ($data['captcha_info']['available'] as $c) {
                                                    if ($c == $data['captcha_info']['selected']) {
                                                        echo '<b>' .$c. '</b> ';
                                                    } else {
                                                        echo '<a href="?cc='.$c.'">'.$c.'</a> ';
                                                    }
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-4">
                                        <input type="submit" class="btn btn-primary btn-lg claim-button" value="Get reward!">
                                    </div>
                                </div>
                            </center>
                        </form>
                 </div>

                <?php break; case "visit_later": ?>
                    <p class="alert alert-info">You have to wait <?php echo $data["time_left"]; ?></p>
                <?php break; case "user_page": ?>
                <?php echo $data["user_page"]["html"]; ?>
                <?php break; endswitch; ?>
        </div>

        <div class="row">
            <div class="col-2">
                <?php echo $data["custom_box_left"]; ?>
                <iframe data-aa='935468' src='//ad.a-ads.com/935468?size=120x600' scrolling='no' style='width:120px; height:600px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>

            
            </div>
            <div class="col-8">
                <div class="text-center">
                    <h1>Content</h1>
                </div>   
            </div>
            <div class="col-2">
                <?php echo $data["custom_box_right"]; ?>
                 <iframe data-aa='935468' src='//ad.a-ads.com/935468?size=120x600' scrolling='no' style='width:120px; height:600px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
            </div>
        </div>

        <?php require_once("referral.php"); ?>
    </div>
    
    

    <div class="row">
            <div class="col-xs-12 <?php echo $data["custom_box_bottom_bg"] . ' ' . $data["custom_box_bottom_tx"]; ?>"><?php echo $data["custom_box_bottom"]; ?></div>
            <?php if(!$data['disable_admin_panel'] && $data["custom_admin_link"] == 'true'): ?>
            <div class="admin_link"><a href="admin.php">Admin Panel</a></div>
            <?php endif; ?>
        </div>
    <div class="footer text-center col-xs-12 <?php echo $data["custom_footer_bg"] . ' ' . $data["custom_footer_tx"]; ?>">
        <?php echo $data["custom_footer"]; ?>
    </div>


    <?php if($data['button_timer']): ?>
        <script type="text/javascript" src="libs/button-timer.js"></script>
        <script> startTimer(<?php echo $data['button_timer']; ?>); </script>
    <?php endif; ?>
   
    
    <?php if($data['block_adblock'] == 'on'): ?>
        <script type="text/javascript" src="libs/advertisement.js"></script>
        <script type="text/javascript" src="libs/check.js"></script>
    <?php endif; ?>


<?php require_once("script.php"); ?>
</body>
</html>
