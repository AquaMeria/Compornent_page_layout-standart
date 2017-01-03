<?php get_header(); ?>
   
    <!-- 左右分割レイアウト -->
    <div class="container about">
        <div class="row">
            <section class="col-md-12 col-sm-12 panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <h3>タイトル</h3>
                            <p>
                                説明文をここに記載。
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/xxx.png" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-push-6">
                            <h3>タイトル</h3>
                            <p>
                                説明文をここに記載。
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-pull-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/xxx.png" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /左右分割レイアウト -->

<?php get_footer(); ?>