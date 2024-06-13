<!-- Header -->
<?php
$setting = $this->m_setting->detail();
?>

<header class="header">
			
            <!-- Top Bar -->
            <div class="top_bar">
                <div class="top_bar_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                    <ul class="top_bar_contact_list">
                                        <li><div class="question">Ada Pertanyaan? </div></li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <div><?= $setting->no_telepon ?></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                            <div>sman1takisung</div>
                                        </li>
                                    </ul>
                                    <div class="top_bar_login ml-auto">
                                        <div class="login_button"><a href="<?= base_url ('login')?>">Login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>				
            </div>
    
           