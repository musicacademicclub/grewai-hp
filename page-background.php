<?php
/* Template: Background Page */
get_header();
?>
<section class="page-hero">
  <div class="container">
    <div class="section-card alt-blue">
      <h1>実践者としての背景</h1>
      <p>控えめなプロフィールと導線をまとめるページです。</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-card alt-beige">
      <div class="profile">
        <div class="avatar">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/profile.svg" alt="運営者プロフィール">
        </div>
        <div>
          <h2 class="section-title">運営者について</h2>
          <p>複数業界でのAI導入支援の経験を活かし、現場で使える生成AI研修を提供しています。</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-card alt-mint">
      <h2 class="section-title">ブログ / 資料</h2>
      <div class="cards">
        <div class="card">
          <h3>ブログ</h3>
          <p>現場に近い導入ストーリーや思考整理を発信します。</p>
          <a class="link" href="#">ブログ一覧を見る</a>
        </div>
        <div class="card">
          <h3>資料</h3>
          <p>研修概要や導入フローをまとめた資料を用意しています。</p>
          <a class="link" href="#">資料をダウンロード</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>
