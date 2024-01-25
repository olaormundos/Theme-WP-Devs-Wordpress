    <section class="services">
        <h2>Services</h2>
        <div class="container">
            <div class="service-item">
                <?php 
                    if(is_active_sidebar( 'services-1' )){
                        dynamic_sidebar( 'services-1' );
                    }
                ?>
            </div>
            <div class="service-item">
                <?php 
                    if(is_active_sidebar( 'services-2' )){
                        dynamic_sidebar( 'services-2' );
                    }
                ?>
            </div>
            <div class="service-item">
                <?php 
                    if(is_active_sidebar( 'services-3' )){
                        dynamic_sidebar( 'services-3' );
                    }
                ?>
            </div>
        </div>
    </section>