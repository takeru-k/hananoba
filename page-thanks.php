<?php
/*
Template Name: 送信完了画面
*/
?>

<?php get_header(); ?>
  <div class="l-pageHeader">
    <div class="l-pageHeader__heading">
      <span>confirmation</span>
      <h1>送信完了</h1>
    </div><!-- /.l-pageHeader__heading -->
    <div class="l-pageHeader__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/pageHeader.jpg" alt="">
    </div><!-- /.l-pageHeader__img -->
  </div><!-- /.l-pageHeader -->

  <div class="p-thanks">
  <div class="l-inner">
    <div class="p-thanks__wrapper">
      <h2 class="p-thanks__heading">お問い合わせの送信を完了しました</h2><!-- /.p-thanks__heading -->

      <div class="p-thanks__texts">
        <p>この度はお問い合わせいただき、誠にありがとうございます。</p>
        <p>内容を確認次第、担当者より折返しご連絡させていただきます。今しばらくお待ちくださいませ。</p>
      </div><!-- /.p-thanks__texts -->

      <div class="p-thanks__alert">
        <p>内容の確認メールをお送りしております。</p>
        <p>ご確認メールが届かない場合は、お手数ですが再度送信下さいますか、お電話にてお問い合わせくださいますようお願い申し上げます。</p>
        <p>また、まれに迷惑メールフォルダへ入っている場合がございますので、合わせてご確認ください。</p>
      </div><!-- /.p-thanks__alert -->
    </div><!-- /.p-thanks__wrapper -->

  </div><!-- /.l-inner -->
</div><!-- /.p-thanks -->

<?php get_footer(); ?>