<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Maxwell
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	  <style type="text/css">

		   @font-face {
      font-family:Montserrat-SemiBold;
      src:url("http://www.mocasa.eu/fonts/Montserrat Semi Bold.cbdf3ab9.otf")
    }
    @font-face {
      font-family:Montserrat-Regular;
      src:url(http://www.mocasa.eu/fonts/Montserrat-Regular.07689d4e.ttf)
    }
    * {
      padding:0;
      margin:0;

    }
    html {
      font-family:system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial,sans-serif;
      -webkit-text-size-adjust:100%;
      -webkit-tap-highlight-color:rgba(0,0,0,0);
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
			font-size:120px;
    }
		  @media  screen and (min-width:1200px){
			  html{ font-size:calc( 100vw / 10)}
		  }
    body {
      background-color:#e9eef3;
		font-size:16px;
    }
    body,p {
      margin:0
    }
    @font-face {
      font-family:element-icons;
      src:url(http://www.mocasa.eu/fonts/element-icons.535877f5.woff) format("woff"),url(http://www.mocasa.eu/fonts/element-icons.732389de.ttf) format("truetype");
      font-weight:400;
      font-display:"auto";
      font-style:normal
    }
    [class*=" el-icon-"],[class^=el-icon-] {
      font-family:element-icons!important;
      speak:none;
      font-style:normal;
      font-weight:400;
      font-variant:normal;
      text-transform:none;
      line-height:1;
      vertical-align:baseline;
      display:inline-block;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale
    }

		  *{ font-size:16px;}
		  .router-link-active,a {
      text-decoration:none
    }
    .myFooter[data-v-ea32b1fa] {
      position:relative
    }

    .myFooter .header[data-v-ea32b1fa] {
      background:#f5f5f7;
      display:flex;
      justify-content:space-between;
      padding:.20833rem .625rem .28646rem
    }
    .myFooter .header .flex_1[data-v-ea32b1fa] {
      flex:0 0 45%
    }
    .myFooter .header .copying[data-v-ea32b1fa] {
      height:.11458rem;
      font-size:.08333rem;
      font-family:PingFangSC-Medium,PingFang SC;
      font-weight:500;
      color:#6e6d7a;
      line-height:.11458rem;
      margin-top:.26042rem
    }
    .myFooter .header .title[data-v-ea32b1fa] {
      height:.125rem;
      font-size:.10417rem;
      font-family:Montserrat-Regular,Montserrat;
      color:#1d1d1f;
      line-height:.125rem;
      margin-bottom:.10417rem;
		background:none;
    }
		  .links p{ background:none;}
    .myFooter .header .contact[data-v-ea32b1fa] {
      display:flex;
      margin-bottom:.10417rem
    }
    .myFooter .header .contact img[data-v-ea32b1fa] {
      height:.09896rem;
      widows:.09896rem;
      margin-right:.04167rem
    }
    .myFooter .header .contactIcon[data-v-ea32b1fa] {
      margin-top:.41667rem;
      font-size:.08333rem
    }
    .myFooter .header .contactIcon img[data-v-ea32b1fa] {
      width:.125rem;
      height:.125rem;
      margin-right:.07813rem;
      cursor:pointer
    }
    .myFooter .header .myLink[data-v-ea32b1fa] {
      display:flex;
      justify-content:space-between
    }
    .myFooter .header .links p[data-v-ea32b1fa] {
      flex:0 0 50%
    }
    .myFooter .header .blogLink[data-v-ea32b1fa],.myFooter .header .links p[data-v-ea32b1fa] {
      margin-bottom:.10417rem;
      cursor:pointer
    }
    .myFooter .header .blogLink[data-v-ea32b1fa],.myFooter .header .links p[data-v-ea32b1fa],.myFooter .header span[data-v-ea32b1fa] {
      height:.09896rem;
      font-size:.08333rem;
      font-family:Montserrat-Regular,Montserrat;
      font-weight:500;
      color:#6e6d7a;
      line-height:.09896rem
    }
    .myFooter .footer[data-v-ea32b1fa] {
      height:.41667rem;
      background:#212121;
      display:flex;
      align-items:center;
      justify-content:space-between;
      font-size:.08333rem;
      font-family:PingFangSC-Medium,PingFang SC;
      font-weight:500;
      padding:0 1.875rem
    }
    .myHeader[data-v-6887df77] {
      box-sizing:border-box;
      height:.41667rem;
      background:#fff;
      border-bottom:.00521rem solid #ececec
    }
    .paddingStyle[data-v-6887df77] {
      padding:0 .625rem
    }
    .logoImg[data-v-6887df77] {
      width:.66146rem;
      height:.35938rem
    }
    .myLi[data-v-6887df77] {
      cursor:pointer;
      margin-right:.20833rem
    }
    .more[data-v-6887df77],.myLi[data-v-6887df77] {
      height:.41667rem;
      line-height:.41667rem;
      font-size:.09375rem;
      font-family:Montserrat-Regular,Montserrat
    }
    .no_height{
      line-height:.41667rem;
      font-size:.09375rem;
      font-family:Montserrat-Regular,Montserrat
      cursor: pointer;
      margin-right: .20833rem;
    }
    .more[data-v-6887df77] {
      color:#404040;
      display:flex;
      align-items:center
    }
    .more img[data-v-6887df77] {
      width:.07292rem;
      height:.07292rem;
      margin-left:.02083rem
    }
    .btn[data-v-6887df77] {
      height:.41667rem
    }
    .language[data-v-6887df77] {
      width:.21875rem;
      height:.21875rem;
      line-height:.21875rem;
      text-align:center;
      border:.00521rem solid #cfcfcf;
      font-size:.08333rem;
      font-family:Montserrat-Regular,Montserrat;
      font-weight:500;
      color:#999;
      border-radius:50%
    }
    .flexRight[data-v-6887df77] {
      display:flex;
      align-items:center;
      justify-content:space-between
    }

    .paddingStyle[data-v-ceaafd02] {
      padding:0 .625rem
    }
    .myHeader[data-v-ceaafd02] {
      box-sizing:border-box;
      height:.41667rem;
      background:#fff;
      border-bottom:.00521rem solid #ececec
    }
    .logoImg[data-v-ceaafd02] {
      width:.66146rem;
      height:.35938rem
    }
    .myLi[data-v-ceaafd02] {
      height:.41667rem;
      line-height:.41667rem;
      font-size:.08333rem;
      font-family:Montserrat-Regular,Montserrat;
      font-weight:500;
      cursor:pointer;
      margin-right:.20833rem
    }

    .flexRight[data-v-ceaafd02] {
      display:flex;
      align-items:center;
      justify-content:space-between
    }


    .el-header[data-v-5e350056] {
      background:#fff;
      height:.41667rem!important;
      border-bottom:.00521rem solid #ececec;
      position:fixed;
      top:0;
      width:100%;
      z-index:200000;
      padding:0
    }

    .el-footer[data-v-5e350056] {
      color:#bfbfbf;
      padding:0
    }

    .aboutUs .aboutUsImg img[data-v-1e059af0] {
      width:1.53125rem;
      height:.64583rem;
      cursor:pointer
    }
    .aboutUs .aboutUsImg img[data-v-1e059af0]:hover {
      box-shadow:0 0 .04688rem 0 rgba(255,128,12,.7);
      border:.00521rem solid #fc9d46
    }


    .homeIndex .header[data-v-039dabb8] {
      background-image:url(https://www.mocasa.eu/v1/file/image/banner@2x.png);
      background-repeat:no-repeat;
      background-size:cover;
      height:3.90625rem;
      position:relative
    }

    .homeIndex .header .headerFooter .flex_center img[data-v-039dabb8] {
      width:.25rem;
      height:.25rem;
      margin-right:.08333rem
    }

    .homeIndex .main .pointItem img[data-v-039dabb8] {
      width:.44792rem;
      height:.44792rem
    }


    @keyframes rotating {
      0% {
        transform:rotate(0deg)
      }
      to {
        transform:rotate(1turn)
      }
    }
    .el-header {
      padding:0 .10417rem
    }

    .el-footer,.el-main {
      box-sizing:border-box
    }
    .el-footer {
      padding:0 .10417rem;
      flex-shrink:0;
      margin-top:100px;
    }

    .el-button {
      display: inline-block;
      line-height: 1;
      white-space: nowrap;
      cursor: pointer;
      background: #fff;
      border: .00521rem solid #dcdfe6;
      border-color: #dcdfe6;
      color: #606266;
      -webkit-appearance: none;
      text-align: center;
      box-sizing: border-box;
      outline: none;
      margin: 0;
      transition: .1s;
      font-weight: 500;
      -moz-user-select: none;
      -webkit-user-select: none;
      -ms-user-select: none;
      padding: .0625rem .10417rem;
      font-size: .07292rem;
      border-radius: .02083rem;
      font-weight: 700;
    }
    .el-button--primary {
      color: #fff;
      background-color: #ff800c !important;
      border-color: #ff800c;
    }

    .center {
      justify-content:center
    }
    .between,.center {
      display:flex;
      align-items:center
    }

    .flex {
      display:flex
    }

    .flex_1 {
      flex:1
    }

    .el-dropdown{ position: relative;}
    .el-dropdown-menu {
      display: none;
      position: absolute;
      top: 36px;
      left: 0;
      z-index: 10;
      padding: .05208rem 0;
      margin: .02604rem 0;
      background-color: #fff;
      border: .00521rem solid #ebeef5;
      border-radius: .02083rem;
      box-shadow: 0 0.01042rem 0.0625rem 0 rgb(0 0 0 / 10%);
      top:42px;
      left: 50%;
      transform: translateX(-50%);

      white-space: nowrap;
    }
    .el-dropdown:hover  .el-dropdown-menu{ display: block;}


    .el-dropdown-menu__item {
      list-style: none;
      line-height: .1875rem;
      padding: 0 .10417rem;
      margin: 0;
      font-size: .07292rem;
      color: #606266;
      cursor: pointer;
      outline: none;
    }
    .el-dropdown-menu__item:hover {
      background-color: #fff2e7;
      color: #ff993d;
    }
	.footer-wrap{ display:block !important; border-top:none !important;}

  </style>
	<script>
  let baseUrl="https://www.mocasa.eu/";
  function jumpUrl(path){
    path=path||'';
    window.location.href=baseUrl+path;
  }
  //https://www.facebook.com/Mocasa-100377122364826
  //https://twitter.com/Mocasa_invest
  const linkUrls=['https://www.facebook.com/Mocasa-100377122364826','https://twitter.com/Mocasa_invest'];
  function openUrl(_index){
     window.open(linkUrls[_index])
  }
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

	<?php do_action( 'maxwell_header_bar' ); ?>

	<?php do_action( 'maxwell_before_site' ); ?>

	<div id="page" class="hfeed site" style="padding-top:60px;">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'maxwell' ); ?></a>

		<?php do_action( 'maxwell_before_header' ); ?>

		<header id="masthead" class="site-header clearfix" role="banner">

			<div class="header-main container clearfix">
				<header data-v-5e350056="" class="el-header" style="height: 60px;">
  <div data-v-6887df77="" data-v-5e350056="" class="myHeader flexRight paddingStyle">
    <div data-v-6887df77="" class="flex">
      <div data-v-6887df77="" class="myLi center">
        <img data-v-6887df77="" src="https://www.mocasa.eu/img/LOGO@2x.aefedf2d.png" alt="" class="logoImg" onclick="jumpUrl('')" />
      </div>
      <div data-v-6887df77="" class="myLi" onclick="jumpUrl('company')">
        Company
      </div>
      <div data-v-6887df77="" class="myLi" onclick="jumpUrl('loanorigina')">
        Loan Originators
      </div>
      <div data-v-6887df77="" class="myLi" onclick="jumpUrl('faq')">
        FAQ
      </div>
      <div data-v-6887df77="" class="el-dropdown" style="margin-right: 20px;">
        <div data-v-6887df77="" class="more el-dropdown-selfdefine" aria-haspopup="list" aria-controls="dropdown-menu-7816" role="button" tabindex="0">
          Bonus Programs
          <img data-v-6887df77="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAMAAADW3miqAAAA21BMVEUAAAAAAAB/f3+ZmZnMzMzb29u/v7+2tra7u7u/v7/GxsbCwsK6urrExMS7u7u9vb2/v7+6urq/v7++vr7BwcG8vLzBwcG+vr6/v7++vr69vb2+vr7BwcG+vr6+vr7AwMC/v7+/v7++vr7AwMC9vb2/v7/AwMC+vr6/v7++vr6+vr6+vr6+vr6/v7++vr6+vr6/v7+/v7++vr6+vr6/v7++vr6+vr6+vr6+vr6/v7++vr6+vr6+vr6+vr6+vr6+vr6+vr6+vr69vb2+vr6+vr6+vr6+vr6+vr6+vr6uInpFAAAASHRSTlMAAQIFBQcIDg8QEhUaGh4fICUoKy0uMTM0Nzo/Rk5PWVtcXmFpb3V6fH2Gkp6foq27vMTQ09XX2eHi5ufq7O3y8/T1+Pr8/f4tZd4nAAAAnElEQVQYGe3B1w7BAAAF0Ivae29q7733qHL//4sQIkpbryTOwd83Ewt4kaiYoeQ8sgSF6JY5KAkTyhk88cwphfHCv+QuhgfbkMcs3sT3XHhxZ+qSZahIyxzZcdMkG1BVJHsCrqpkxwh1dbKFC/HEvgUaDG2yBiQljh3QJHR5EgNrzn3QYR1QmnETgS73lDyk8EFwJefxkSuEv99wBhraFCxTdBxaAAAAAElFTkSuQmCC" alt="" />
        </div>
        <ul data-v-6887df77="" class="el-dropdown-menu el-popper" id="dropdown-menu-6644"
            style="/* display: none; */">
          <li data-v-6887df77="" tabindex="-1" class="el-dropdown-menu__item" onclick="jumpUrl('refer')" >
            <!---->
            Refer A Friend
          </li>
          <li data-v-6887df77="" tabindex="-1" class="el-dropdown-menu__item" onclick="jumpUrl('cashback')" >
            <!---->
            Cashback
          </li>
        </ul>
      </div>
      <div data-v-6887df77="" class="el-dropdown">
        <div data-v-6887df77="" class="more el-dropdown-selfdefine" aria-haspopup="list" aria-controls="dropdown-menu-5051" role="button" tabindex="0">
          More
          <img data-v-6887df77="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAMAAADW3miqAAAA21BMVEUAAAAAAAB/f3+ZmZnMzMzb29u/v7+2tra7u7u/v7/GxsbCwsK6urrExMS7u7u9vb2/v7+6urq/v7++vr7BwcG8vLzBwcG+vr6/v7++vr69vb2+vr7BwcG+vr6+vr7AwMC/v7+/v7++vr7AwMC9vb2/v7/AwMC+vr6/v7++vr6+vr6+vr6+vr6/v7++vr6+vr6/v7+/v7++vr6+vr6/v7++vr6+vr6+vr6+vr6/v7++vr6+vr6+vr6+vr6+vr6+vr6+vr6+vr69vb2+vr6+vr6+vr6+vr6+vr6+vr6uInpFAAAASHRSTlMAAQIFBQcIDg8QEhUaGh4fICUoKy0uMTM0Nzo/Rk5PWVtcXmFpb3V6fH2Gkp6foq27vMTQ09XX2eHi5ufq7O3y8/T1+Pr8/f4tZd4nAAAAnElEQVQYGe3B1w7BAAAF0Ivae29q7733qHL//4sQIkpbryTOwd83Ewt4kaiYoeQ8sgSF6JY5KAkTyhk88cwphfHCv+QuhgfbkMcs3sT3XHhxZ+qSZahIyxzZcdMkG1BVJHsCrqpkxwh1dbKFC/HEvgUaDG2yBiQljh3QJHR5EgNrzn3QYR1QmnETgS73lDyk8EFwJefxkSuEv99wBhraFCxTdBxaAAAAAElFTkSuQmCC" alt="" />
        </div>
        <ul data-v-6887df77="" class="el-dropdown-menu el-popper" id="dropdown-menu-5051" >
          <li data-v-6887df77="" tabindex="-1" class="el-dropdown-menu__item" onclick="jumpUrl('legal')" >
            <!---->Legal</li>
        </ul>
      </div>
    </div>
    <div data-v-6887df77="" class="flexRight">
      <div data-v-6887df77="" class="myLi" onclick="jumpUrl('login')" >
        Login
      </div>
      <div data-v-6887df77="" class="no_height">
        <a data-v-6887df77="" class=""><button data-v-6887df77="" type="button" class="el-button el-button--primary" onclick="jumpUrl('register')" >
          <!---->
          <!----><span>Register</span></button></a>
      </div>
    </div>
  </div>
</header>
				<div id="logo" class="site-branding clearfix">

					<?php maxwell_site_logo(); ?>
					<?php maxwell_site_title(); ?>
					<?php maxwell_site_description(); ?>

				</div><!-- .site-branding -->

				<div class="header-widgets clearfix">

					<?php // Display Header Widgets.
					if ( is_active_sidebar( 'header' ) ) :

						dynamic_sidebar( 'header' );

					endif; ?>

				</div><!-- .header-widgets -->

			</div><!-- .header-main -->

			<?php get_template_part( 'template-parts/header/site', 'navigation' ); ?>

		</header><!-- #masthead -->

		<?php do_action( 'maxwell_after_header' ); ?>

		<?php maxwell_header_image(); ?>

		<div id="content" class="site-content container clearfix">

			<?php maxwell_breadcrumbs(); ?>
