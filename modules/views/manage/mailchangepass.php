<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>

<!DOCTYPE html>
<html class="login-bg">
<head>
	<title>后台管理--修改密码</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <!-- bootstrap -->
    <link href="assets/admin/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/admin/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="assets/admin/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="assets/admin/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="assets/admin/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="assets/admin/css/icons.css" />

    <!-- libraries -->
    <link rel="stylesheet" type="text/css" href="assets/admin/css/lib/font-awesome.css" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="assets/admin/css/compiled/signin.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>


    <div class="row-fluid login-wrapper">
        <a class="brand" href="index.html"></a>
<?php $form =ActiveForm::begin([
    'fieldConfig'=>[
        'template'=>'{input}{error}',
    ]
]);?>
        <div class="span4 box">
            <div class="content-wrap">
                <h6>后台管理--修改密码</h6>
                <?php
                    if(Yii::$app->session->hasFlash('info')){
                        echo Yii::$app->session->getFlash('info');
                    }
                ?>
                <?php echo $form->field($model,'adminuser')->textInput(['class'=>"span12",'placeholder'=>'用户账号'])?>
                <?php echo $form->field($model,'adminpass')->passwordInput(['class'=>"span12",'placeholder'=>'用户新密码'])?>
                <?php echo $form->field($model,'repass')->passwordInput(['class'=>"span12",'placeholder'=>'再次确认密码'])?>
                <a href="<?php echo \yii\helpers\Url::to(['public/login'])?>" class="forgot">返回登录?</a>
                <?php echo Html::submitButton('确认修改',[
                    'class'=>'btn-glow primary login'
                ])?>
            </div>
        </div>
<?php ActiveForm::end(); ?>
        <div class="span4 no-account">
            <p>没有账户?</p>
            <a href="signup.html">注册</a>
        </div>
    </div>

	<!-- scripts -->
    <script src="assets/admin/js/jquery-latest.js"></script>
    <script src="assets/admin/js/bootstrap.min.js"></script>
    <script src="assets/admin/js/theme.js"></script>

    <!-- pre load bg imgs -->
    <script type="text/javascript">
        $(function () {
            // bg switcher
            var $btns = $(".bg-switch .bg");
            $btns.click(function (e) {
                e.preventDefault();
                $btns.removeClass("active");
                $(this).addClass("active");
                var bg = $(this).data("img");

                $("html").css("background-image", "url('assets/admin/img/bgs/" + bg + "')");
            });

        });
    </script>

</body>
</html>