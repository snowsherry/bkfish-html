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
    body {
      font-family: Plusjakartadisplay, sans-serif;
      color: #8a95ad;
      font-size: 14px;
      line-height: 24px;
    }
    .el-header{padding:0 20px;box-sizing:border-box;flex-shrink:0}
    .el-footer{padding:0 20px;box-sizing:border-box;flex-shrink:0}
    .myFooter[data-v-861321d8] {
  position: relative;
}
.myFooter .header .links p[data-v-861321d8] {
  flex: 0 0 50%;
  height: 19px;
  font-size: 16px;
  font-family: Montserrat-Regular, Montserrat;
  font-weight: 500;
  color: #6E6D7A;
  line-height: 19px;
  margin-bottom: 20px;
  cursor: pointer;
}

.myFooter .header span[data-v-861321d8] {
  height: 19px;
  font-size: 16px;
  font-family: Montserrat-Regular, Montserrat;
  font-weight: 500;
  color: #6E6D7A;
  line-height: 19px;
}
.myFooter .footer[data-v-861321d8] {
  height: 80px;
  background: #212121;
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: 16px;
  font-family: PingFangSC-Medium, PingFang SC;
  font-weight: 500;
  padding: 0 360px;
}


.btn[data-v-43ae59f4] {
  height: 80px;
}

.dropdown-item[data-v-be2991ac]{
  font-size: 12px!important;
}

.rotateDeg[data-v-be2991ac]::after{
  transform: rotate(180deg);
}
  </style>
  <style type="text/css">
    .self-drop-box[data-v-be2991ac] {
  display: flex;
  align-items: center;
}
.verifyBanner[data-v-be2991ac] {
  height: 60px;
  background: #f7f7f7;
  font-size: 16px;
  color: #ff0000;
  text-align: center;
  line-height: 60px;
  text-decoration: underline;
  cursor: pointer;
  width: 100%;
}

.btn[data-v-be2991ac] {
  height: 80px;
}
</style>
  <style type="text/css">
  .header-line{
    width: 100%;
    height: 0;
    border-bottom: 1px solid #eee;
    margin-top: 10px;
  }
  .navbar-light .navbar-nav .nav-link {
    color: #152c5b !important;
    white-space: nowrap;
  }
  .navbar {
    box-shadow: none !important;
    padding: 0 !important;
  }
  .dropdown-item{
    font-weight: 400!important;
    font-size: 16px!important;
  }
  .dropdown-item:hover{
    background-color: #fff!important;
    opacity: 1;
    color: #e94a1f!important;
  }
  .dropdown-active{
    color: #e94a1f!important;
  }
  .nav-item {
    margin-right: 20px;
    position: relative;
  }
  .self-nav {
    width: 100%;
    background-color: #fff;
    padding: 0 !important;
    box-shadow: 0 5px 30px 0 rgb(1 29 38 / 7%);
  }
  .line {
    display: inline-block;
    width: 100%;
    height: 4px;
    background-color: #ff8009;
    position: absolute;
    top: -15px;
  }
  .navbar-light .navbar-nav .active-color {
    color: #ff8009 !important;
  }
  .navbar-expand-lg .navbar-collapse {
    justify-content: space-around;
  }
  .register {
    color: #fff !important;
    font-weight: 500 !important;
    font-size: 14px!important;
  }
  .sign {
    padding-left: 0 !important;
    margin-left: 0 !important;
    font-size: 18px;
    font-weight: 500;
  }
  .dropdown-toggle {
    border: none !important;
    background-color: #fff !important;
  }
</style>
  <style type="text/css">
  .footer-logo-wrapper[data-v-b031ec96]{
    height: auto!important;
  }
  .footer-logo-wrapper img[data-v-b031ec96] {
    margin-top: -15px;
  }
  .myFooter[data-v-b031ec96] {
    position: relative;
  }
  .shadow[data-v-b031ec96]{
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
  }
</style>
  <style type="text/css">
  .navbar-toggler:focus{
    border: none!important;
  }
  .navbar-light .navbar-toggler {
    border: none !important;
  }
  .navbar-toggler-icon {
    width: 30px !important;
    height: 30px !important;
  }
</style>
  <style type="text/css">
  .verifyBanner[data-v-13877386] {
    height: 60px;
    background: #f7f7f7;
    font-size: 16px;
    color: #ff0000;
    text-align: center;
    line-height: 60px;
    text-decoration: underline;
    cursor: pointer;
    width: 100%;
  }
  .nav-item[data-v-13877386] {
    margin-bottom: 0 !important;
  }
  .el-header[data-v-13877386] {
    background: #fff;
    height: 80px !important;
    border-bottom: 1px solid #ececec;
    /* padding: 0 120px; */
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 2000;
    padding: 0;
  }
  .el-main[data-v-13877386] {
    background-color: #fff;
    color: #333;
    padding: 0;
    margin-top: 80px;
  }
  .el-footer[data-v-13877386] {
    /* min-height: 442px; */
    color: #bfbfbf;
    padding: 0;
  }
</style>
  <style type="text/css">
    .myTitle[data-v-150075d6] {
    font-size: 38px;
    font-family: Montserrat-Regular, Montserrat;
    font-weight: 400;
    color: #222222;
    padding: 120px 0 110px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;
  }
  .line[data-v-150075d6] {
    background-color: #222222;
    width: 70px;
    margin: 0 25px;
    height: 3px;
  }
  </style>
  <style type="text/css">
  .pageStyle[data-v-ad7c004a]{
    width: 100%;
    line-height: 0;
    text-align: right;
    margin-top: 20px;
  }
</style>
  <style type="text/css">
  html {
    font-family: sans-serif;
    /* 1 */
    -ms-text-size-adjust: 100%;
    /* 2 */
    -webkit-text-size-adjust: 100%;
    /* 2 */
  }
  /**
   * Remove default margin.
   */
  body {
    margin: 0;
  }
  /* HTML5 display definitions
     ========================================================================== */
  /**
   * Correct `block` display not defined for any HTML5 element in IE 8/9.
   * Correct `block` display not defined for `details` or `summary` in IE 10/11
   * and Firefox.
   * Correct `block` display not defined for `main` in IE 11.
   */
  article,
  aside,
  details,
  figcaption,
  figure,
  footer,
  header,
  hgroup,
  main,
  menu,
  nav,
  section,
  summary {
    display: block;
  }
  /**
   * 1. Correct `inline-block` display not defined in IE 8/9.
   * 2. Normalize vertical alignment of `progress` in Chrome, Firefox, and Opera.
   */
  audio,
  canvas,
  progress,
  video {
    display: inline-block;
    /* 1 */
    vertical-align: baseline;
    /* 2 */
  }
  /**
   * Prevent modern browsers from displaying `audio` without controls.
   * Remove excess height in iOS 5 devices.
   */
  audio:not([controls]) {
    display: none;
    height: 0;
  }
  /**
   * Address `[hidden]` styling not present in IE 8/9/10.
   * Hide the `template` element in IE 8/9/10/11, Safari, and Firefox < 22.
   */
  [hidden],
  template {
    display: none;
  }
  /* Links
     ========================================================================== */
  /**
   * Remove the gray background color from active links in IE 10.
   */
  a {
    background-color: transparent;
  }
  /**
   * Improve readability of focused elements when they are also in an
   * active/hover state.
   */
  a:active,
  a:hover {
    outline: 0;
  }
  /* Text-level semantics
     ========================================================================== */
  /**
   * Address styling not present in IE 8/9/10/11, Safari, and Chrome.
   */
  abbr[title] {
    border-bottom: 1px dotted;
  }
  /**
   * Address style set to `bolder` in Firefox 4+, Safari, and Chrome.
   */
  b,
  strong {
    font-weight: bold;
  }
  /**
   * Address styling not present in Safari and Chrome.
   */
  dfn {
    font-style: italic;
  }
  /**
   * Address variable `h1` font-size and margin within `section` and `article`
   * contexts in Firefox 4+, Safari, and Chrome.
   */
  h1 {
    font-size: 2em;
    margin: 0.67em 0;
  }
  /**
   * Address styling not present in IE 8/9.
   */
  mark {
    background: #ff0;
    color: #000;
  }
  /**
   * Address inconsistent and variable font size in all browsers.
   */
  small {
    font-size: 80%;
  }
  /**
   * Prevent `sub` and `sup` affecting `line-height` in all browsers.
   */
  sub,
  sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
  }
  sup {
    top: -0.5em;
  }
  sub {
    bottom: -0.25em;
  }
  /* Embedded content
     ========================================================================== */
  /**
   * Remove border when inside `a` element in IE 8/9/10.
   */
  img {
    border: 0;
  }
  /**
   * Correct overflow not hidden in IE 9/10/11.
   */
  svg:not(:root) {
    overflow: hidden;
  }
  /* Grouping content
     ========================================================================== */
  /**
   * Address margin not present in IE 8/9 and Safari.
   */
  figure {
    margin: 1em 40px;
  }
  /**
   * Address differences between Firefox and other browsers.
   */
  hr {
    box-sizing: content-box;
    height: 0;
  }
  /**
   * Contain overflow in all browsers.
   */
  pre {
    overflow: auto;
  }
  /**
   * Address odd `em`-unit font size rendering in all browsers.
   */
  code,
  kbd,
  pre,
  samp {
    font-family: monospace, monospace;
    font-size: 1em;
  }
  /* Forms
     ========================================================================== */
  /**
   * Known limitation: by default, Chrome and Safari on OS X allow very limited
   * styling of `select`, unless a `border` property is set.
   */
  /**
   * 1. Correct color not being inherited.
   *    Known issue: affects color of disabled elements.
   * 2. Correct font properties not being inherited.
   * 3. Address margins set differently in Firefox 4+, Safari, and Chrome.
   */
  button,
  input,
  optgroup,
  select,
  textarea {
    color: inherit;
    /* 1 */
    font: inherit;
    /* 2 */
    margin: 0;
    /* 3 */
  }
  /**
   * Address `overflow` set to `hidden` in IE 8/9/10/11.
   */
  button {
    overflow: visible;
  }
  /**
   * Address inconsistent `text-transform` inheritance for `button` and `select`.
   * All other form control elements do not inherit `text-transform` values.
   * Correct `button` style inheritance in Firefox, IE 8/9/10/11, and Opera.
   * Correct `select` style inheritance in Firefox.
   */
  button,
  select {
    text-transform: none;
  }
  /**
   * 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio`
   *    and `video` controls.
   * 2. Correct inability to style clickable `input` types in iOS.
   * 3. Improve usability and consistency of cursor style between image-type
   *    `input` and others.
   * 4. CUSTOM FOR WEBFLOW: Removed the input[type="submit"] selector to reduce
   *    specificity and defer to the .w-button selector
   */
  button,
  html input[type="button"],
  input[type="reset"] {
    -webkit-appearance: button;
    /* 2 */
    cursor: pointer;
    /* 3 */
  }
  /**
   * Re-set default cursor for disabled elements.
   */
  button[disabled],
  html input[disabled] {
    cursor: default;
  }
  /**
   * Remove inner padding and border in Firefox 4+.
   */
  button::-moz-focus-inner,
  input::-moz-focus-inner {
    border: 0;
    padding: 0;
  }
  /**
   * Address Firefox 4+ setting `line-height` on `input` using `!important` in
   * the UA stylesheet.
   */
  input {
    line-height: normal;
  }
  /**
   * It's recommended that you don't attempt to style these elements.
   * Firefox's implementation doesn't respect box-sizing, padding, or width.
   *
   * 1. Address box sizing set to `content-box` in IE 8/9/10.
   * 2. Remove excess padding in IE 8/9/10.
   */
  input[type="checkbox"],
  input[type="radio"] {
    box-sizing: border-box;
    /* 1 */
    padding: 0;
    /* 2 */
  }
  /**
   * Fix the cursor style for Chrome's increment/decrement buttons. For certain
   * `font-size` values of the `input`, it causes the cursor style of the
   * decrement button to change from `default` to `text`.
   */
  input[type="number"]::-webkit-inner-spin-button,
  input[type="number"]::-webkit-outer-spin-button {
    height: auto;
  }
  /**
   * 1. CUSTOM FOR WEBFLOW: changed from `textfield` to `none` to normalize iOS rounded input
   * 2. CUSTOM FOR WEBFLOW: box-sizing: content-box rule removed
   *    (similar to normalize.css >=4.0.0)
   */
  input[type="search"] {
    -webkit-appearance: none;
    /* 1 */
  }
  /**
   * Remove inner padding and search cancel button in Safari and Chrome on OS X.
   * Safari (but not Chrome) clips the cancel button when the search input has
   * padding (and `textfield` appearance).
   */
  input[type="search"]::-webkit-search-cancel-button,
  input[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
  }
  /**
   * Define consistent border, margin, and padding.
   */
  fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em;
  }
  /**
   * 1. Correct `color` not being inherited in IE 8/9/10/11.
   * 2. Remove padding so people aren't caught out if they zero out fieldsets.
   */
  legend {
    border: 0;
    /* 1 */
    padding: 0;
    /* 2 */
  }
  /**
   * Remove default vertical scrollbar in IE 8/9/10/11.
   */
  textarea {
    overflow: auto;
  }
  /**
   * Don't inherit the `font-weight` (applied by a rule above).
   * NOTE: the default cannot safely be changed in Chrome and Safari on OS X.
   */
  optgroup {
    font-weight: bold;
  }
  /* Tables
     ========================================================================== */
  /**
   * Remove most spacing between table cells.
   */
  table {
    border-collapse: collapse;
    border-spacing: 0;
  }
  td,
  th {
    padding: 0;
  }
  </style>
  <style type="text/css">
    @font-face {
  font-family: 'webflow-icons';
  src: url("data:application/x-font-ttf;charset=utf-8;base64,AAEAAAALAIAAAwAwT1MvMg8SBiUAAAC8AAAAYGNtYXDpP+a4AAABHAAAAFxnYXNwAAAAEAAAAXgAAAAIZ2x5ZmhS2XEAAAGAAAADHGhlYWQTFw3HAAAEnAAAADZoaGVhCXYFgQAABNQAAAAkaG10eCe4A1oAAAT4AAAAMGxvY2EDtALGAAAFKAAAABptYXhwABAAPgAABUQAAAAgbmFtZSoCsMsAAAVkAAABznBvc3QAAwAAAAAHNAAAACAAAwP4AZAABQAAApkCzAAAAI8CmQLMAAAB6wAzAQkAAAAAAAAAAAAAAAAAAAABEAAAAAAAAAAAAAAAAAAAAABAAADpAwPA/8AAQAPAAEAAAAABAAAAAAAAAAAAAAAgAAAAAAADAAAAAwAAABwAAQADAAAAHAADAAEAAAAcAAQAQAAAAAwACAACAAQAAQAg5gPpA//9//8AAAAAACDmAOkA//3//wAB/+MaBBcIAAMAAQAAAAAAAAAAAAAAAAABAAH//wAPAAEAAAAAAAAAAAACAAA3OQEAAAAAAQAAAAAAAAAAAAIAADc5AQAAAAABAAAAAAAAAAAAAgAANzkBAAAAAAEBIAAAAyADgAAFAAAJAQcJARcDIP5AQAGA/oBAAcABwED+gP6AQAABAOAAAALgA4AABQAAEwEXCQEH4AHAQP6AAYBAAcABwED+gP6AQAAAAwDAAOADQALAAA8AHwAvAAABISIGHQEUFjMhMjY9ATQmByEiBh0BFBYzITI2PQE0JgchIgYdARQWMyEyNj0BNCYDIP3ADRMTDQJADRMTDf3ADRMTDQJADRMTDf3ADRMTDQJADRMTAsATDSANExMNIA0TwBMNIA0TEw0gDRPAEw0gDRMTDSANEwAAAAABAJ0AtAOBApUABQAACQIHCQEDJP7r/upcAXEBcgKU/usBFVz+fAGEAAAAAAL//f+9BAMDwwAEAAkAABcBJwEXAwE3AQdpA5ps/GZsbAOabPxmbEMDmmz8ZmwDmvxmbAOabAAAAgAA/8AEAAPAAB0AOwAABSInLgEnJjU0Nz4BNzYzMTIXHgEXFhUUBw4BBwYjNTI3PgE3NjU0Jy4BJyYjMSIHDgEHBhUUFx4BFxYzAgBqXV6LKCgoKIteXWpqXV6LKCgoKIteXWpVSktvICEhIG9LSlVVSktvICEhIG9LSlVAKCiLXl1qal1eiygoKCiLXl1qal1eiygoZiEgb0tKVVVKS28gISEgb0tKVVVKS28gIQABAAABwAIAA8AAEgAAEzQ3PgE3NjMxFSIHDgEHBhUxIwAoKIteXWpVSktvICFmAcBqXV6LKChmISBvS0pVAAAAAgAA/8AFtgPAADIAOgAAARYXHgEXFhUUBw4BBwYHIxUhIicuAScmNTQ3PgE3NjMxOAExNDc+ATc2MzIXHgEXFhcVATMJATMVMzUEjD83NlAXFxYXTjU1PQL8kz01Nk8XFxcXTzY1PSIjd1BQWlJJSXInJw3+mdv+2/7c25MCUQYcHFg5OUA/ODlXHBwIAhcXTzY1PTw1Nk8XF1tQUHcjIhwcYUNDTgL+3QFt/pOTkwABAAAAAQAAmM7nP18PPPUACwQAAAAAANciZKUAAAAA1yJkpf/9/70FtgPDAAAACAACAAAAAAAAAAEAAAPA/8AAAAW3//3//QW2AAEAAAAAAAAAAAAAAAAAAAAMBAAAAAAAAAAAAAAAAgAAAAQAASAEAADgBAAAwAQAAJ0EAP/9BAAAAAQAAAAFtwAAAAAAAAAKABQAHgAyAEYAjACiAL4BFgE2AY4AAAABAAAADAA8AAMAAAAAAAIAAAAAAAAAAAAAAAAAAAAAAAAADgCuAAEAAAAAAAEADQAAAAEAAAAAAAIABwCWAAEAAAAAAAMADQBIAAEAAAAAAAQADQCrAAEAAAAAAAUACwAnAAEAAAAAAAYADQBvAAEAAAAAAAoAGgDSAAMAAQQJAAEAGgANAAMAAQQJAAIADgCdAAMAAQQJAAMAGgBVAAMAAQQJAAQAGgC4AAMAAQQJAAUAFgAyAAMAAQQJAAYAGgB8AAMAAQQJAAoANADsd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzVmVyc2lvbiAxLjAAVgBlAHIAcwBpAG8AbgAgADEALgAwd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzUmVndWxhcgBSAGUAZwB1AGwAYQByd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzRm9udCBnZW5lcmF0ZWQgYnkgSWNvTW9vbi4ARgBvAG4AdAAgAGcAZQBuAGUAcgBhAHQAZQBkACAAYgB5ACAASQBjAG8ATQBvAG8AbgAuAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA==") format('truetype');
  font-weight: normal;
  font-style: normal;
}
[class^="w-icon-"],
[class*=" w-icon-"] {
  /* use !important to prevent issues with browser extensions that change fonts */
  font-family: 'webflow-icons' !important;
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.w-icon-slider-right:before {
  content: "\e600";
}
.w-icon-slider-left:before {
  content: "\e601";
}
.w-icon-nav-menu:before {
  content: "\e602";
}
.w-icon-arrow-down:before,
.w-icon-dropdown-toggle:before {
  content: "\e603";
}
.w-icon-file-upload-remove:before {
  content: "\e900";
}
.w-icon-file-upload-icon:before {
  content: "\e903";
}
* {
  box-sizing: border-box;
}
html {
  height: 100%;
}
body {
  margin: 0;
  min-height: 100%;
  background-color: #fff;
  font-family: Arial, sans-serif;
  font-size: 14px;
  line-height: 20px;
  color: #333;
}
img {
  max-width: 100%;
  vertical-align: middle;
  display: inline-block;
}
html.w-mod-touch * {
  background-attachment: scroll !important;
}
.w-block {
  display: block;
}
.w-inline-block {
  max-width: 100%;
  display: inline-block;
}
.w-clearfix:before,
.w-clearfix:after {
  content: " ";
  display: table;
  grid-column-start: 1;
  grid-row-start: 1;
  grid-column-end: 2;
  grid-row-end: 2;
}
.w-clearfix:after {
  clear: both;
}
.w-hidden {
  display: none;
}
.w-button {
  display: inline-block;
  padding: 9px 15px;
  background-color: #3898EC;
  color: white;
  border: 0;
  line-height: inherit;
  text-decoration: none;
  cursor: pointer;
  border-radius: 0;
}
input.w-button {
  -webkit-appearance: button;
}
html[data-w-dynpage] [data-w-cloak] {
  color: transparent !important;
}
.w-webflow-badge,
.w-webflow-badge * {
  position: static;
  left: auto;
  top: auto;
  right: auto;
  bottom: auto;
  z-index: auto;
  display: block;
  visibility: visible;
  overflow: visible;
  overflow-x: visible;
  overflow-y: visible;
  box-sizing: border-box;
  width: auto;
  height: auto;
  max-height: none;
  max-width: none;
  min-height: 0;
  min-width: 0;
  margin: 0;
  padding: 0;
  float: none;
  clear: none;
  border: 0 none transparent;
  border-radius: 0;
  background: none;
  background-image: none;
  background-position: 0% 0%;
  background-size: auto auto;
  background-repeat: repeat;
  background-origin: padding-box;
  background-clip: border-box;
  background-attachment: scroll;
  background-color: transparent;
  box-shadow: none;
  opacity: 1.0;
  transform: none;
  transition: none;
  direction: ltr;
  font-family: inherit;
  font-weight: inherit;
  color: inherit;
  font-size: inherit;
  line-height: inherit;
  font-style: inherit;
  font-variant: inherit;
  text-align: inherit;
  letter-spacing: inherit;
  text-decoration: inherit;
  text-indent: 0;
  text-transform: inherit;
  list-style-type: disc;
  text-shadow: none;
  font-smoothing: auto;
  vertical-align: baseline;
  cursor: inherit;
  white-space: inherit;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
}
.w-webflow-badge {
  position: fixed !important;
  display: inline-block !important;
  visibility: visible !important;
  opacity: 1 !important;
  z-index: 2147483647 !important;
  top: auto !important;
  right: 12px !important;
  bottom: 12px !important;
  left: auto !important;
  color: #AAADB0 !important;
  background-color: #fff !important;
  border-radius: 3px !important;
  padding: 6px 8px 6px 6px !important;
  font-size: 12px !important;
  opacity: 1.0 !important;
  line-height: 14px !important;
  text-decoration: none !important;
  transform: none !important;
  margin: 0 !important;
  width: auto !important;
  height: auto !important;
  overflow: visible !important;
  white-space: nowrap;
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1), 0px 1px 3px rgba(0, 0, 0, 0.1);
  cursor: pointer;
}
.w-webflow-badge > img {
  display: inline-block !important;
  visibility: visible !important;
  opacity: 1 !important;
  vertical-align: middle !important;
}
  .sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
  }
h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: bold;
  margin-bottom: 10px;
}
h1 {
  font-size: 38px;
  line-height: 44px;
  margin-top: 20px;
}
h2 {
  font-size: 32px;
  line-height: 36px;
  margin-top: 20px;
}
h3 {
  font-size: 24px;
  line-height: 30px;
  margin-top: 20px;
}
h4 {
  font-size: 18px;
  line-height: 24px;
  margin-top: 10px;
}
h5 {
  font-size: 14px;
  line-height: 20px;
  margin-top: 10px;
}
h6 {
  font-size: 12px;
  line-height: 18px;
  margin-top: 10px;
}
p {
  margin-top: 0;
  margin-bottom: 10px;
}
blockquote {
  margin: 0 0 10px 0;
  padding: 10px 20px;
  border-left: 5px solid #E2E2E2;
  font-size: 18px;
  line-height: 22px;
}
figure {
  margin: 0;
  margin-bottom: 10px;
}
figcaption {
  margin-top: 5px;
  text-align: center;
}
ul,
ol {
  margin-top: 0px;
  margin-bottom: 10px;
  padding-left: 40px;
}
.w-list-unstyled {
  padding-left: 0;
  list-style: none;
}
.w-embed:before,
.w-embed:after {
  content: " ";
  display: table;
  grid-column-start: 1;
  grid-row-start: 1;
  grid-column-end: 2;
  grid-row-end: 2;
}
.w-embed:after {
  clear: both;
}
.w-video {
  width: 100%;
  position: relative;
  padding: 0;
}
.w-video iframe,
.w-video object,
.w-video embed {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
fieldset {
  padding: 0;
  margin: 0;
  border: 0;
}
button,
html input[type="button"],
input[type="reset"] {
  border: 0;
  cursor: pointer;
  -webkit-appearance: button;
}
.w-form {
  margin: 0 0 15px;
}
.w-form-done {
  display: none;
  padding: 20px;
  text-align: center;
  background-color: #dddddd;
}
.w-form-fail {
  display: none;
  margin-top: 10px;
  padding: 10px;
  background-color: #ffdede;
}
label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}
.w-input,
.w-select {
  display: block;
  width: 100%;
  height: 38px;
  padding: 8px 12px;
  margin-bottom: 10px;
  font-size: 14px;
  line-height: 1.428571429;
  color: #333333;
  vertical-align: middle;
  background-color: #ffffff;
  border: 1px solid #cccccc;
}
.w-input:-moz-placeholder,
.w-select:-moz-placeholder {
  color: #999;
}
.w-input::-moz-placeholder,
.w-select::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.w-input:-ms-input-placeholder,
.w-select:-ms-input-placeholder {
  color: #999;
}
.w-input::-webkit-input-placeholder,
.w-select::-webkit-input-placeholder {
  color: #999;
}
.w-input:focus,
.w-select:focus {
  border-color: #3898EC;
  outline: 0;
}
.w-input[disabled],
.w-select[disabled],
.w-input[readonly],
.w-select[readonly],
fieldset[disabled] .w-input,
fieldset[disabled] .w-select {
  cursor: not-allowed;
  background-color: #eeeeee;
}
textarea.w-input,
textarea.w-select {
  height: auto;
}
.w-select {
  background-color: #f3f3f3;
}
.w-select[multiple] {
  height: auto;
}
.w-form-label {
  display: inline-block;
  cursor: pointer;
  font-weight: normal;
  margin-bottom: 0px;
}
.w-radio {
  display: block;
  margin-bottom: 5px;
  padding-left: 20px;
}
.w-radio:before,
.w-radio:after {
  content: " ";
  display: table;
  grid-column-start: 1;
  grid-row-start: 1;
  grid-column-end: 2;
  grid-row-end: 2;
}
.w-radio:after {
  clear: both;
}
.w-radio-input {
  margin: 4px 0 0;
  margin-top: 1px \9;
  line-height: normal;
  float: left;
  margin-left: -20px;
}
.w-radio-input {
  margin-top: 3px;
}
.w-file-upload {
  display: block;
  margin-bottom: 10px;
}
.w-file-upload-input {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -100;
}
.w-file-upload-default,
.w-file-upload-uploading,
.w-file-upload-success {
  display: inline-block;
  color: #333333;
}
.w-file-upload-error {
  display: block;
  margin-top: 10px;
}
.w-file-upload-default.w-hidden,
.w-file-upload-uploading.w-hidden,
.w-file-upload-error.w-hidden,
.w-file-upload-success.w-hidden {
  display: none;
}
.w-file-upload-uploading-btn {
  display: flex;
  font-size: 14px;
  font-weight: normal;
  cursor: pointer;
  margin: 0;
  padding: 8px 12px;
  border: 1px solid #cccccc;
  background-color: #fafafa;
}
.w-file-upload-file {
  display: flex;
  flex-grow: 1;
  justify-content: space-between;
  margin: 0;
  padding: 8px 9px 8px 11px;
  border: 1px solid #cccccc;
  background-color: #fafafa;
}
.w-file-upload-file-name {
  font-size: 14px;
  font-weight: normal;
  display: block;
}
.w-file-remove-link {
  margin-top: 3px;
  margin-left: 10px;
  width: auto;
  height: auto;
  padding: 3px;
  display: block;
  cursor: pointer;
}
.w-icon-file-upload-remove {
  margin: auto;
  font-size: 10px;
}
.w-file-upload-error-msg {
  display: inline-block;
  color: #ea384c;
  padding: 2px 0;
}
.w-file-upload-info {
  display: inline-block;
  line-height: 38px;
  padding: 0 12px;
}
.w-file-upload-label {
  display: inline-block;
  font-size: 14px;
  font-weight: normal;
  cursor: pointer;
  margin: 0;
  padding: 8px 12px;
  border: 1px solid #cccccc;
  background-color: #fafafa;
}
.w-icon-file-upload-icon,
.w-icon-file-upload-uploading {
  display: inline-block;
  margin-right: 8px;
  width: 20px;
}
.w-icon-file-upload-uploading {
  height: 20px;
}
.w-container {
  margin-left: auto;
  margin-right: auto;
  max-width: 940px;
}
.w-container:before,
.w-container:after {
  content: " ";
  display: table;
  grid-column-start: 1;
  grid-row-start: 1;
  grid-column-end: 2;
  grid-row-end: 2;
}
.w-container:after {
  clear: both;
}
.w-container .w-row {
  margin-left: -10px;
  margin-right: -10px;
}
.w-row:before,
.w-row:after {
  content: " ";
  display: table;
  grid-column-start: 1;
  grid-row-start: 1;
  grid-column-end: 2;
  grid-row-end: 2;
}
.w-row:after {
  clear: both;
}
.w-row .w-row {
  margin-left: 0;
  margin-right: 0;
}
.w-col {
  position: relative;
  float: left;
  width: 100%;
  min-height: 1px;
  padding-left: 10px;
  padding-right: 10px;
}
.w-col .w-col {
  padding-left: 0;
  padding-right: 0;
}
.w-col-1 {
  width: 8.33333333%;
}
.w-col-2 {
  width: 16.66666667%;
}
.w-col-3 {
  width: 25%;
}
.w-col-4 {
  width: 33.33333333%;
}
.w-col-5 {
  width: 41.66666667%;
}
.w-col-6 {
  width: 50%;
}
.w-col-7 {
  width: 58.33333333%;
}
.w-col-8 {
  width: 66.66666667%;
}
.w-col-9 {
  width: 75%;
}
.w-col-10 {
  width: 83.33333333%;
}
.w-col-11 {
  width: 91.66666667%;
}
.w-col-12 {
  width: 100%;
}
.w-hidden-main {
  display: none !important;
}
@media screen and (max-width: 991px) {
  .w-container {
    max-width: 728px;
  }
  .w-hidden-main {
    display: inherit !important;
  }
  .w-hidden-medium {
    display: none !important;
  }
  .w-col-medium-1 {
    width: 8.33333333%;
  }
  .w-col-medium-2 {
    width: 16.66666667%;
  }
  .w-col-medium-3 {
    width: 25%;
  }
  .w-col-medium-4 {
    width: 33.33333333%;
  }
  .w-col-medium-5 {
    width: 41.66666667%;
  }
  .w-col-medium-6 {
    width: 50%;
  }
  .w-col-medium-7 {
    width: 58.33333333%;
  }
  .w-col-medium-8 {
    width: 66.66666667%;
  }
  .w-col-medium-9 {
    width: 75%;
  }
  .w-col-medium-10 {
    width: 83.33333333%;
  }
  .w-col-medium-11 {
    width: 91.66666667%;
  }
  .w-col-medium-12 {
    width: 100%;
  }
  .w-col-stack {
    width: 100%;
    left: auto;
    right: auto;
  }
}
@media screen and (max-width: 767px) {
  .w-hidden-main {
    display: inherit !important;
  }
  .w-hidden-medium {
    display: inherit !important;
  }
  .w-hidden-small {
    display: none !important;
  }
  .w-row,
  .w-container .w-row {
    margin-left: 0;
    margin-right: 0;
  }
  .w-col {
    width: 100%;
    left: auto;
    right: auto;
  }
  .w-col-small-1 {
    width: 8.33333333%;
  }
  .w-col-small-2 {
    width: 16.66666667%;
  }
  .w-col-small-3 {
    width: 25%;
  }
  .w-col-small-4 {
    width: 33.33333333%;
  }
  .w-col-small-5 {
    width: 41.66666667%;
  }
  .w-col-small-6 {
    width: 50%;
  }
  .w-col-small-7 {
    width: 58.33333333%;
  }
  .w-col-small-8 {
    width: 66.66666667%;
  }
  .w-col-small-9 {
    width: 75%;
  }
  .w-col-small-10 {
    width: 83.33333333%;
  }
  .w-col-small-11 {
    width: 91.66666667%;
  }
  .w-col-small-12 {
    width: 100%;
  }
}
@media screen and (max-width: 479px) {
  .w-container {
    max-width: none;
  }
  .w-hidden-main {
    display: inherit !important;
  }
  .w-hidden-medium {
    display: inherit !important;
  }
  .w-hidden-small {
    display: inherit !important;
  }
  .w-hidden-tiny {
    display: none !important;
  }
  .w-col {
    width: 100%;
  }
  .w-col-tiny-1 {
    width: 8.33333333%;
  }
  .w-col-tiny-2 {
    width: 16.66666667%;
  }
  .w-col-tiny-3 {
    width: 25%;
  }
  .w-col-tiny-4 {
    width: 33.33333333%;
  }
  .w-col-tiny-5 {
    width: 41.66666667%;
  }
  .w-col-tiny-6 {
    width: 50%;
  }
  .w-col-tiny-7 {
    width: 58.33333333%;
  }
  .w-col-tiny-8 {
    width: 66.66666667%;
  }
  .w-col-tiny-9 {
    width: 75%;
  }
  .w-col-tiny-10 {
    width: 83.33333333%;
  }
  .w-col-tiny-11 {
    width: 91.66666667%;
  }
  .w-col-tiny-12 {
    width: 100%;
  }
}
.w-widget {
  position: relative;
}
.w-widget-map {
  width: 100%;
  height: 400px;
}
.w-widget-map label {
  width: auto;
  display: inline;
}
.w-widget-map img {
  max-width: inherit;
}
.w-widget-map .gm-style-iw {
  text-align: center;
}
.w-widget-map .gm-style-iw > button {
  display: none !important;
}
.w-widget-twitter {
  overflow: hidden;
}
.w-widget-twitter-count-shim {
  display: inline-block;
  vertical-align: top;
  position: relative;
  width: 28px;
  height: 20px;
  text-align: center;
  background: white;
  border: #758696 solid 1px;
  border-radius: 3px;
}
.w-widget-twitter-count-shim * {
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.w-widget-twitter-count-shim .w-widget-twitter-count-inner {
  position: relative;
  font-size: 15px;
  line-height: 12px;
  text-align: center;
  color: #999;
  font-family: serif;
}
.w-widget-twitter-count-shim .w-widget-twitter-count-clear {
  position: relative;
  display: block;
}
.w-widget-twitter-count-shim.w--large {
  width: 36px;
  height: 28px;
}
.w-widget-twitter-count-shim.w--large .w-widget-twitter-count-inner {
  font-size: 18px;
  line-height: 18px;
}
.w-widget-twitter-count-shim:not(.w--vertical) {
  margin-left: 5px;
  margin-right: 8px;
}
.w-widget-twitter-count-shim:not(.w--vertical).w--large {
  margin-left: 6px;
}
.w-widget-twitter-count-shim:not(.w--vertical):before,
.w-widget-twitter-count-shim:not(.w--vertical):after {
  top: 50%;
  left: 0;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.w-widget-twitter-count-shim:not(.w--vertical):before {
  border-color: rgba(117, 134, 150, 0);
  border-right-color: #5d6c7b;
  border-width: 4px;
  margin-left: -9px;
  margin-top: -4px;
}
.w-widget-twitter-count-shim:not(.w--vertical).w--large:before {
  border-width: 5px;
  margin-left: -10px;
  margin-top: -5px;
}
.w-widget-twitter-count-shim:not(.w--vertical):after {
  border-color: rgba(255, 255, 255, 0);
  border-right-color: white;
  border-width: 4px;
  margin-left: -8px;
  margin-top: -4px;
}
.w-widget-twitter-count-shim:not(.w--vertical).w--large:after {
  border-width: 5px;
  margin-left: -9px;
  margin-top: -5px;
}
.w-widget-twitter-count-shim.w--vertical {
  width: 61px;
  height: 33px;
  margin-bottom: 8px;
}


/**
 * ## Note
 * Safari (on both iOS and OS X) does not handle viewport units (vh, vw) well.
 * For example percentage units do not work on descendants of elements that
 * have any dimensions expressed in viewport units. It also doesn’t handle them at
 * all in `calc()`.
 */
/**
 * Wrapper around all lightbox elements
 *
 * 1. Since the lightbox can receive focus, IE also gives it an outline.
 * 2. Fixes flickering on Chrome when a transition is in progress
 *    underneath the lightbox.
 */

/**
 * Neat trick to bind the rubberband effect to our canvas instead of the whole
 * document on iOS. It also prevents a bug that causes the document underneath to scroll.
 */
.w-lightbox-backdrop,
.w-lightbox-container {
  height: 100%;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
}
.w-lightbox-content {
  position: relative;
  height: 100vh;
  overflow: hidden;
}
.w-lightbox-view {
  position: absolute;
  width: 100vw;
  height: 100vh;
  opacity: 0;
}
.w-lightbox-view:before {
  content: "";
  height: 100vh;
}
/* .w-lightbox-content */
.w-lightbox-group,
.w-lightbox-group .w-lightbox-view,
.w-lightbox-group .w-lightbox-view:before {
  height: 86vh;
}
.w-lightbox-frame,
.w-lightbox-view:before {
  display: inline-block;
  vertical-align: middle;
}
/*
 * 1. Remove default margin set by user-agent on the <figure> element.
 */
.w-lightbox-figure {
  position: relative;
  margin: 0;
  /* 1 */
}
.w-lightbox-group .w-lightbox-figure {
  cursor: pointer;
}
/**
 * IE adds image dimensions as width and height attributes on the IMG tag,
 * but we need both width and height to be set to auto to enable scaling.
 */
.w-lightbox-img {
  width: auto;
  height: auto;
  max-width: none;
}
/**
 * 1. Reset if style is set by user on "All Images"
 */
.w-lightbox-image {
  display: block;
  float: none;
  /* 1 */
  max-width: 100vw;
  max-height: 100vh;
}
.w-lightbox-group .w-lightbox-image {
  max-height: 86vh;
}
.w-lightbox-caption {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: .5em 1em;
  background: rgba(0, 0, 0, 0.4);
  text-align: left;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
.w-lightbox-embed {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.w-lightbox-control {
  position: absolute;
  top: 0;
  width: 4em;
  background-size: 24px;
  background-repeat: no-repeat;
  background-position: center;
  cursor: pointer;
  transition: all .3s;
}
.w-lightbox-left {
  display: none;
  bottom: 0;
  left: 0;
  /* <svg xmlns="http://www.w3.org/2000/svg" viewBox="-20 0 24 40" width="24" height="40"><g transform="rotate(45)"><path d="m0 0h5v23h23v5h-28z" opacity=".4"/><path d="m1 1h3v23h23v3h-26z" fill="#fff"/></g></svg> */
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii0yMCAwIDI0IDQwIiB3aWR0aD0iMjQiIGhlaWdodD0iNDAiPjxnIHRyYW5zZm9ybT0icm90YXRlKDQ1KSI+PHBhdGggZD0ibTAgMGg1djIzaDIzdjVoLTI4eiIgb3BhY2l0eT0iLjQiLz48cGF0aCBkPSJtMSAxaDN2MjNoMjN2M2gtMjZ6IiBmaWxsPSIjZmZmIi8+PC9nPjwvc3ZnPg==");
}
.w-lightbox-right {
  display: none;
  right: 0;
  bottom: 0;
  /* <svg xmlns="http://www.w3.org/2000/svg" viewBox="-4 0 24 40" width="24" height="40"><g transform="rotate(45)"><path d="m0-0h28v28h-5v-23h-23z" opacity=".4"/><path d="m1 1h26v26h-3v-23h-23z" fill="#fff"/></g></svg> */
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00IDAgMjQgNDAiIHdpZHRoPSIyNCIgaGVpZ2h0PSI0MCI+PGcgdHJhbnNmb3JtPSJyb3RhdGUoNDUpIj48cGF0aCBkPSJtMC0waDI4djI4aC01di0yM2gtMjN6IiBvcGFjaXR5PSIuNCIvPjxwYXRoIGQ9Im0xIDFoMjZ2MjZoLTN2LTIzaC0yM3oiIGZpbGw9IiNmZmYiLz48L2c+PC9zdmc+");
}
/*
 * Without specifying the with and height inside the SVG, all versions of IE render the icon too small.
 * The bug does not seem to manifest itself if the elements are tall enough such as the above arrows.
 * (http://stackoverflow.com/questions/16092114/background-size-differs-in-internet-explorer)
 */
.w-lightbox-close {
  right: 0;
  height: 2.6em;
  /* <svg xmlns="http://www.w3.org/2000/svg" viewBox="-4 0 18 17" width="18" height="17"><g transform="rotate(45)"><path d="m0 0h7v-7h5v7h7v5h-7v7h-5v-7h-7z" opacity=".4"/><path d="m1 1h7v-7h3v7h7v3h-7v7h-3v-7h-7z" fill="#fff"/></g></svg> */
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00IDAgMTggMTciIHdpZHRoPSIxOCIgaGVpZ2h0PSIxNyI+PGcgdHJhbnNmb3JtPSJyb3RhdGUoNDUpIj48cGF0aCBkPSJtMCAwaDd2LTdoNXY3aDd2NWgtN3Y3aC01di03aC03eiIgb3BhY2l0eT0iLjQiLz48cGF0aCBkPSJtMSAxaDd2LTdoM3Y3aDd2M2gtN3Y3aC0zdi03aC03eiIgZmlsbD0iI2ZmZiIvPjwvZz48L3N2Zz4=");
  background-size: 18px;
}
/**
 * 1. All IE versions add extra space at the bottom without this.
 */
.w-lightbox-strip {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 0 1vh;
  line-height: 0;
  /* 1 */
  white-space: nowrap;
  overflow-x: auto;
  overflow-y: hidden;
}
/*
 * 1. We use content-box to avoid having to do `width: calc(10vh + 2vw)`
 *    which doesn’t work in Safari anyway.
 * 2. Chrome renders images pixelated when switching to GPU. Making sure
 *    the parent is also rendered on the GPU (by setting translate3d for
 *    example) fixes this behavior.
 */
.w-lightbox-item {
  display: inline-block;
  width: 10vh;
  padding: 2vh 1vh;
  box-sizing: content-box;
  /* 1 */
  cursor: pointer;
  -webkit-transform: translate3d(0, 0, 0);
  /* 2 */
}
.w-lightbox-active {
  opacity: .3;
}
.w-lightbox-thumbnail {
  position: relative;
  height: 10vh;
  background: #222;
  overflow: hidden;
}
.w-lightbox-thumbnail-image {
  position: absolute;
  top: 0;
  left: 0;
}
.w-lightbox-thumbnail .w-lightbox-tall {
  top: 50%;
  width: 100%;
  transform: translate(0, -50%);
}
.w-lightbox-thumbnail .w-lightbox-wide {
  left: 50%;
  height: 100%;
  transform: translate(-50%, 0);
}
/*
 * Spinner
 *
 * Absolute pixel values are used to avoid rounding errors that would cause
 * the white spinning element to be misaligned with the track.
 */
.w-lightbox-spinner {
  position: absolute;
  top: 50%;
  left: 50%;
  box-sizing: border-box;
  width: 40px;
  height: 40px;
  margin-top: -20px;
  margin-left: -20px;
  border: 5px solid rgba(0, 0, 0, 0.4);
  border-radius: 50%;
  -webkit-animation: spin .8s infinite linear;
  animation: spin .8s infinite linear;
}
.w-lightbox-spinner:after {
  content: "";
  position: absolute;
  top: -4px;
  right: -4px;
  bottom: -4px;
  left: -4px;
  border: 3px solid transparent;
  border-bottom-color: #fff;
  border-radius: 50%;
}
/*
 * Utility classes
 */
.w-lightbox-hide {
  display: none;
}
.w-lightbox-noscroll {
  overflow: hidden;
}
@media (min-width: 768px) {
  .w-lightbox-content {
    height: 96vh;
    margin-top: 2vh;
  }
  .w-lightbox-view,
  .w-lightbox-view:before {
    height: 96vh;
  }
  /* .w-lightbox-content */
  .w-lightbox-group,
  .w-lightbox-group .w-lightbox-view,
  .w-lightbox-group .w-lightbox-view:before {
    height: 84vh;
  }
  .w-lightbox-image {
    max-width: 96vw;
    max-height: 96vh;
  }
  .w-lightbox-group .w-lightbox-image {
    max-width: 82.3vw;
    max-height: 84vh;
  }
  .w-lightbox-left,
  .w-lightbox-right {
    display: block;
    opacity: .5;
  }
  .w-lightbox-close {
    opacity: .8;
  }
  .w-lightbox-control:hover {
    opacity: 1;
  }
}
.w-lightbox-inactive,
.w-lightbox-inactive:hover {
  opacity: 0;
}
.w-richtext:before,
.w-richtext:after {
  content: " ";
  display: table;
  grid-column-start: 1;
  grid-row-start: 1;
  grid-column-end: 2;
  grid-row-end: 2;
}
.w-richtext:after {
  clear: both;
}
.w-richtext[contenteditable="true"]:before,
.w-richtext[contenteditable="true"]:after {
  white-space: initial;
}
.w-richtext ol,
.w-richtext ul {
  overflow: hidden;
}
.w-richtext .w-richtext-figure-selected.w-richtext-figure-type-video div:after,
.w-richtext .w-richtext-figure-selected[data-rt-type="video"] div:after {
  outline: 2px solid #2895f7;
}
.w-richtext .w-richtext-figure-selected.w-richtext-figure-type-image div,
.w-richtext .w-richtext-figure-selected[data-rt-type="image"] div {
  outline: 2px solid #2895f7;
}
.w-richtext figure.w-richtext-figure-type-video > div:after,
.w-richtext figure[data-rt-type="video"] > div:after {
  content: '';
  position: absolute;
  display: none;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
}
.w-richtext figure {
  position: relative;
  max-width: 60%;
}
.w-richtext figure > div:before {
  cursor: default!important;
}
.w-richtext figure img {
  width: 100%;
}
.w-richtext figure figcaption.w-richtext-figcaption-placeholder {
  opacity: 0.6;
}
.w-richtext figure div {
  /* fix incorrectly sized selection border in the data manager */
  font-size: 0px;
  color: transparent;
}
.w-richtext figure.w-richtext-figure-type-image,
.w-richtext figure[data-rt-type="image"] {
  display: table;
}
.w-richtext figure.w-richtext-figure-type-image > div,
.w-richtext figure[data-rt-type="image"] > div {
  display: inline-block;
}
.w-richtext figure.w-richtext-figure-type-image > figcaption,
.w-richtext figure[data-rt-type="image"] > figcaption {
  display: table-caption;
  caption-side: bottom;
}
.w-richtext figure.w-richtext-figure-type-video,
.w-richtext figure[data-rt-type="video"] {
  width: 60%;
  height: 0;
}
.w-richtext figure.w-richtext-figure-type-video iframe,
.w-richtext figure[data-rt-type="video"] iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.w-richtext figure.w-richtext-figure-type-video > div,
.w-richtext figure[data-rt-type="video"] > div {
  width: 100%;
}
.w-richtext figure.w-richtext-align-center {
  margin-right: auto;
  margin-left: auto;
  clear: both;
}
.w-richtext figure.w-richtext-align-center.w-richtext-figure-type-image > div,
.w-richtext figure.w-richtext-align-center[data-rt-type="image"] > div {
  max-width: 100%;
}
.w-richtext figure.w-richtext-align-normal {
  clear: both;
}
.w-richtext figure.w-richtext-align-fullwidth {
  width: 100%;
  max-width: 100%;
  text-align: center;
  clear: both;
  display: block;
  margin-right: auto;
  margin-left: auto;
}
.w-richtext figure.w-richtext-align-fullwidth > div {
  display: inline-block;
  /* padding-bottom is used for aspect ratios in video figures
      we want the div to inherit that so hover/selection borders in the designer-canvas
      fit right*/
  padding-bottom: inherit;
}
.w-richtext figure.w-richtext-align-fullwidth > figcaption {
  display: block;
}
.w-richtext figure.w-richtext-align-floatleft {
  float: left;
  margin-right: 15px;
  clear: none;
}
.w-richtext figure.w-richtext-align-floatright {
  float: right;
  margin-left: 15px;
  clear: none;
}
.w-nav {
  position: relative;
  background: #dddddd;
  z-index: 1000;
}
.w-nav:before,
.w-nav:after {
  content: " ";
  display: table;
  grid-column-start: 1;
  grid-row-start: 1;
  grid-column-end: 2;
  grid-row-end: 2;
}
.w-nav:after {
  clear: both;
}
.w-nav-brand {
  position: relative;
  float: left;
  text-decoration: none;
  color: #333333;
}
.w-nav-link {
  position: relative;
  display: inline-block;
  vertical-align: top;
  text-decoration: none;
  color: #222222;
  padding: 20px;
  text-align: left;
  margin-left: auto;
  margin-right: auto;
}
.w-nav-link.w--current {
  color: #0082f3;
}
.w-nav-menu {
  position: relative;
  float: right;
}
[data-nav-menu-open] {
  display: block !important;
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  background: #C8C8C8;
  text-align: center;
  overflow: visible;
  min-width: 200px;
}
.w--nav-link-open {
  display: block;
  position: relative;
}
.w-nav-overlay {
  position: absolute;
  overflow: hidden;
  display: none;
  top: 100%;
  left: 0;
  right: 0;
  width: 100%;
}
.w-nav-overlay [data-nav-menu-open] {
  top: 0;
}
.w-nav[data-animation="over-left"] .w-nav-overlay {
  width: auto;
}
.w-nav[data-animation="over-left"] .w-nav-overlay,
.w-nav[data-animation="over-left"] [data-nav-menu-open] {
  right: auto;
  z-index: 1;
  top: 0;
}
.w-nav[data-animation="over-right"] .w-nav-overlay {
  width: auto;
}
.w-nav[data-animation="over-right"] .w-nav-overlay,
.w-nav[data-animation="over-right"] [data-nav-menu-open] {
  left: auto;
  z-index: 1;
  top: 0;
}
.w-nav-button {
  position: relative;
  float: right;
  padding: 18px;
  font-size: 24px;
  display: none;
  cursor: pointer;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  tap-highlight-color: rgba(0, 0, 0, 0);
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.w-nav-button:focus {
  outline: 0;
}
.w-nav-button.w--open {
  background-color: #C8C8C8;
  color: white;
}
.w-nav[data-collapse="all"] .w-nav-menu {
  display: none;
}
.w-nav[data-collapse="all"] .w-nav-button {
  display: block;
}
.w--nav-dropdown-open {
  display: block;
}
.w--nav-dropdown-toggle-open {
  display: block;
}
.w--nav-dropdown-list-open {
  position: static;
}
@media screen and (max-width: 991px) {
  .w-nav[data-collapse="medium"] .w-nav-menu {
    display: none;
  }
  .w-nav[data-collapse="medium"] .w-nav-button {
    display: block;
  }
}
@media screen and (max-width: 767px) {
  .w-nav[data-collapse="small"] .w-nav-menu {
    display: none;
  }
  .w-nav[data-collapse="small"] .w-nav-button {
    display: block;
  }
  .w-nav-brand {
    padding-left: 10px;
  }
}
@media screen and (max-width: 479px) {
  .w-nav[data-collapse="tiny"] .w-nav-menu {
    display: none;
  }
  .w-nav[data-collapse="tiny"] .w-nav-button {
    display: block;
  }
}
.w-tabs {
  position: relative;
}
.w-tabs:before,
.w-tabs:after {
  content: " ";
  display: table;
  grid-column-start: 1;
  grid-row-start: 1;
  grid-column-end: 2;
  grid-row-end: 2;
}
.w-tabs:after {
  clear: both;
}
.w-tab-menu {
  position: relative;
}
.w-tab-link {
  position: relative;
  display: inline-block;
  vertical-align: top;
  text-decoration: none;
  padding: 9px 30px;
  text-align: left;
  cursor: pointer;
  color: #222222;
  background-color: #dddddd;
}
.w-tab-link.w--current {
  background-color: #C8C8C8;
}
.w-tab-link:focus {
  outline: 0;
}
.w-tab-content {
  position: relative;
  display: block;
  overflow: hidden;
}
.w-tab-pane {
  position: relative;
  display: none;
}
.w--tab-active {
  display: block;
}
@media screen and (max-width: 479px) {
  .w-tab-link {
    display: block;
  }
}
.w-ix-emptyfix:after {
  content: "";
}
@-webkit-keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.w-dyn-empty {
  padding: 10px;
  background-color: #dddddd;
}
.w-dyn-hide {
  display: none !important;
}
.w-dyn-bind-empty {
  display: none !important;
}
.w-condition-invisible {
  display: none !important;
}
</style>
  <style type="text/css">



h1 {
  margin-top: 0px;
  margin-bottom: 0px;
  font-family: Plusjakartadisplay, sans-serif;
  color: #152c5b;
  font-size: 54px;
  line-height: 60px;
  font-weight: 700;
}

h2 {
  margin-top: 0px;
  margin-bottom: 0px;
  font-family: Plusjakartadisplay, sans-serif;
  color: #152c5b;
  font-size: 40px;
  line-height: 54px;
  font-weight: 500;
}

h3 {
  margin-top: 0px;
  margin-bottom: 0px;
  font-family: Plusjakartadisplay, sans-serif;
  color: #152c5b;
  font-size: 28px;
  line-height: 44px;
  font-weight: 500;
}

h4 {
  margin-top: 0px;
  margin-bottom: 0px;
  font-family: Plusjakartadisplay, sans-serif;
  color: #152c5b;
  font-size: 22px;
  line-height: 100%;
  font-weight: 500;
}

h5 {
  margin-top: 0px;
  margin-bottom: 0px;
  font-family: Plusjakartadisplay, sans-serif;
  color: #152c5b;
  font-size: 20px;
  line-height: 32px;
  font-weight: 500;
}

h6 {
  margin-top: 0px;
  margin-bottom: 10px;
  font-family: Plusjakartadisplay, sans-serif;
  color: #8a95ad;
  font-size: 12px;
  line-height: 24px;
  font-weight: 500;
  letter-spacing: 5px;
  text-transform: uppercase;
}

p {
  margin-bottom: 0px;
  font-family: Plusjakartadisplay, sans-serif;
  color: #8a95ad;
  font-size: 18px;
  line-height: 32px;
}

a {
  font-family: Plusjakartadisplay, sans-serif;
  color: #185cff;
  line-height: 28px;
  font-weight: 500;
  text-decoration: none;
}

ul {
  margin-top: 32px;
  margin-bottom: 56px;
  padding-left: 40px;
}

ol {
  margin-bottom: 58px;
  padding-left: 40px;
}

li {
  margin-bottom: 10px;
  color: #152c5b;
  font-size: 18px;
  line-height: 32px;
}

img {
  display: inline-block;
  max-width: 100%;
}

strong {
  font-weight: bold;
}

em {
  font-style: italic;
}

blockquote {
  margin-bottom: 10px;
  padding: 10px 20px;
  border-left: 5px solid #e2e2e2;
  font-size: 18px;
  line-height: 22px;
}

figure {
  margin-bottom: 10px;
}

figcaption {
  margin-top: 5px;
  text-align: center;
}

.white {
  color: #fff;
}



.wrapper {
  display: flex;
  width: 85%;
  max-width: 1170px;
  margin-right: auto;
  margin-left: auto;
  padding-top: 100px;
  padding-bottom: 100px;
  justify-content: space-between;
  align-items: center;
}
.wrapper.footer {
  padding-top: 100px;
  padding-bottom: 40px;
  flex-direction: column;
}

.image {
  width: auto;
  height: auto;
  -o-object-fit: cover;
  object-fit: cover;
}

.image.contain {
  overflow: visible;
  width: 400%;
  -o-object-fit: contain;
  object-fit: contain;
}

.footer {
  background-color: #ff8009;
}


.footer-links-container {
  display: flex;
  width: 100%;
  justify-content: space-between;
  align-items: flex-start;
}

.footer-logo-and-text-wrapper {
  width: 40%;
  max-width: 356px;
}

.footer-logo-wrapper {
  width: 127px;
  height: 70px;
}

.footer-logo-wrapper.w--current {
  width: 150px;
  height: 100px;
}

.footer-text-wrapper {
  width: 90%;
  margin-top: 16px;
}

.footer-links-card {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.footer-links-card.middle {
  margin-right: 2%;
  margin-left: 2%;
}

.footer-links-card.first {
  margin-right: 2%;
}

.footer-links-card.last {
  margin-left: 2%;
}

.footer-links-card-heading {
  margin-bottom: 32px;
  color: #fff;
  letter-spacing: 3px;
  text-transform: uppercase;
}

.footer-link {
  margin-bottom: 20px;
  transition: color 200ms ease;
  color: #fff;
  font-size: 16px;
}

.footer-link:hover {
  color: rgba(255, 255, 255, 0.7);
}


.email-link {
  color: #152c5b;
  line-height: 32px;
}

.email-link.white {
  color: #fff;
  text-decoration: none;
}

.navbar {
  position: fixed;
  width: 100%;
  margin-bottom: 0px;
  background-color: #fff;
  box-shadow: 0 5px 30px 0 rgba(1, 29, 38, 0.07);
}

.navbar-logo {
  width: 135px;
  padding-left: 0px;
}

.navbar-logo.logged {
  margin-right: 20px;
}

.navbar-wrapper {
  display: flex;
  width: 85%;
  max-width: 1170px;
  margin-right: auto;
  margin-left: auto;
  justify-content: space-between;
  align-items: center;
}

.navbar-wrapper.logged {
  justify-content: space-between;
}

.navbar-sign-in-and-button-wrapper {
  display: flex;
  margin-left: 0vw;
  justify-content: space-between;
  align-items: center;
}

.navbar-button {
  margin-left: 7px;
  border-radius: 4px;
  background-color: #ff8009;
  transition: background-color 200ms ease;
}

.navbar-button:hover {
  background-color: rgba(255, 128, 9, 0.8);
}

.navbar-menu {
  display: flex;
  width: 80%;
  max-width: 800px;
  margin-top: 0px;
  justify-content: space-between;
}

.navbar-menu.logged {
  width: 90%;
  max-width: none;
  align-items: center;
}

.navbar-link {
  margin-right: 16px;
  margin-left: 16px;
  padding: 26px 0px;
  border-top: 4px solid rgba(24, 92, 255, 0);
  transition: color 200ms ease;
  color: #152c5b;
  font-size: 16px;
  font-weight: 500;
}

.navbar-link:hover {
  color: rgba(21, 44, 91, 0.7);
}

.navbar-link.w--current {
  border-top: 4px solid #ff8009;
  color: #152c5b;
}

.navbar-link.logged {
  margin-right: 8px;
  margin-left: 10px;
}




  .navbar {
    position: relative;
  }

  .navbar-wrapper {
    position: static;
    width: 90%;
  }

  .navbar-sign-in-and-button-wrapper {
    margin-left: 0vw;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
  }

  .navbar-button {
    margin-top: 20px;
    margin-left: 5%;
  }

  .navbar-menu {
    z-index: 100;
    width: 100%;
    max-width: none;
    margin-top: 0px;
    padding-top: 5px;
    padding-bottom: 60px;
    padding-left: 0px;
    background-color: #fff;
    box-shadow: 0 10px 50px 0 rgba(0, 0, 0, 0.05);
  }

 /* .navbar-link {
    width: 90%;
    margin-right: auto;
    margin-left: auto;
    padding-top: 10px;
    padding-bottom: 10px;
  }*/

  .navbar-link.w--current {
    border-top-style: none;
    color: #185cff;
  }



  .navbar-logo {
    width: 40%;
    max-width: 135px;
  }

  .navbar-sign-in-and-button-wrapper {
    margin-top: 10px;
    margin-left: 0px;
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 10px;
    border-top: 1px solid #e5e5e5;
  }

  .navbar-menu {
    z-index: 130;
    align-items: flex-start;
  }

  .navbar-menu.logged {
    width: 100%;
    padding-bottom: 10px;
  }

  .navbar-link.w--current {
    color: #ff8009;
  }

@font-face {
  font-family: 'Plusjakartadisplay';
  src: url('data:font/ttf;charset=utf-8;base64,AAEAAAAPAIAAAwBwRkZUTYps+NoAAIucAAAAHEdERUYHNQg7AABtfAAAAEJHUE9Th8eLBgAAdGwAABcuR1NVQlbKuhQAAG3AAAAGqk9TLzJ+Zk0lAAABeAAAAGBjbWFwLl45sgAAB3wAAAPWZ2FzcP//AAMAAG10AAAACGdseWZ1H4YAAAAOLAAAT8BoZWFkGCUV6QAAAPwAAAA2aGhlYQhvAk0AAAE0AAAAJGhtdHjvSTbCAAAB2AAABaJsb2NhvDCpCgAAC1QAAALWbWF4cAF6AK0AAAFYAAAAIG5hbWXvDVSFAABd7AAACJRwb3N0gYy21wAAZoAAAAbxAAEAAAABAACBjY14Xw889QALA+gAAAAA2lIqgQAAAADadqdQ/5D/EAStBCMAAAAIAAIAAAAAAAAAAQAABC//IQAABNz/kPzoBK0AAQAAAAAAAAAAAAAAAAAAAWcAAQAAAWoAWAAHAFIABQABAAAAAAAAAAAAAAAAAAMAAgAEAj4B9AAFAAACigJYAAAASwKKAlgAAAFeAE8BQwAAAAAAAAAAAAAAAIAAAO9QACBbAAAAAAAAAABUT0tPAMAADfsCBC//IQAABC8A8CAAAAEAAAAAAhsC6QAAACAAAwKAADwAAAAAAU0AAAAAAAAAsAAAALAAAAESAEsB2QBQAxMABQKAACEEHQBYA2QAUwEPAFABdwBVAXcAFAHUACgCYgBTATMARgIpAEYBHABQAcn/+wKvAC0BqQAYAkcAJAJXACIClAAiAlwAIgJMACYCGAAYAncALwJMACYBHABQAUEAUAIzADkCgQBsAh8AOQIxACgDrgApAsQADQKlAEQC+wArAuMARAJgAEQCUgBEAxEAKwLQAEQBBgBEAWsAEgKYAEQCKwBEA2YARALWAEQDWwArAogARANbACsCqQBEAoAAIQIxABcCywBEArYADQQNABcClQAXApEADQJBABIBdwBVAcn/+wF3ACgCbQBTAc3/9gDeABQCFwAcAokAOgI0ABwCiQAcAj0AHAFwAAgCewAcAj8AOgDkADYA3v+/AhcAOgDrADoDeQA6Aj8AOgJtABwCiQA6AokAHAGAADoB7gAYAYYADgI/ADACJAAIA1sACAIkAA0COAAIAdoAEAFjACMBZwB2AWMAFAKrAGcAsAAAARIASwIzABwDDwBlAoYARAKRAA0BZwB2AnIAXQF7ABQDsQBYAY4AHAKaACgCbABYAikARgOxAFgBJgAUAfsAWAJiAFMBhAAjAZAAIgDeABQCNQAwAbYAKAEcAFABIgAUAVIAGAHGABwCmgA8A9cAGAOlABgEFQAiAjEAMgLEAA0CxAANAsQADQLEAA0CxAANAsQADQPtAA0C+wArAmAARAJgAEQCYABEAmAARAEG//0BBgBEAQb/2QEG/9oC4//RAtYARANbACsDWwArA1sAKwNbACsDWwArAlYAUwNbACsCywBEAssARALLAEQCywBEApEADQKIAEQCbABEAhcAHAIXABwCFwAcAhcAHAIXABwCFwAcA50AHAI0ABwCPQAcAj0AHAI9ABwCPQAcAQz//wEMAEoBDP/cAQz/3AJoABwCPwA6Am0AHAJtABwCbQAcAm0AHAJtABwCmwBYAm3/8AI/ADACPwAwAj8AMAI/ADACOAAIAokAOgI4AAgBDABKAiv/wADr/98E3AArA/UAHAKAACEB7gAYApEADQJBABIB2gAQAmYAEQF8ABQBfAAUAVUAFAC1ABQBCAAUASIAFAGfABQBgwAUAAAAFAAAABQAAAAUAAAAFAAAABQAAAAUAAAAFAAAABQAAAAUAAAAFAAAABQAAAAUAAAAFAAAABQAAAAUAAAAFAJuAA0DgAArAp4ADgJiAEYDewBGATMARgEzAEYBMwBGAfsARgH7AEYB+wBGAssAWALLAFgBzwBQA3QAUATVAFgBhQAoAYUAPADP/5ABxQAtAbcAIgGPACIBjAAmAWIAGAGqAC8BjAAmAcUALQFSABgBhAAjAZAAIgG3ACIBjwAiAYwAJgFiABgBqgAvAYwAJgMiAIEDJAAcAjkABwSAAFMDJQAcA8sAGAQJACIECAAiA9sAGAJRAA4DVQA3AiEALAKUAGwBuf/7Af8AUAMuAE4DQQBiAaYAEQLJAGwCgQBsAmMAOQJPADkClQA3AlgAMgJTAAgCWwAIAt4AGgK2AEQCogBEAxYAKwMmACsBzgAtAk4AEgK/AEQDZwAqArAARAKtAEQCKwAcAlEAHAFsAAgCewAcAi0AOgEPAA4A4P+/AhcAOgEvADoDeQA6A3kAOgI3ADoCLQA6ArEAEgKxABwBgAA6Ab4AEgGjAA4CLQAwAi0AMAIc//oCNwAIAlgADAGpABgCWAApAlgAKQJYACoCWAAjAlgADAJYACECWAAqAlgAMQJYACQCWAAqAcUALQFSABgBhAAjAZAAIgG3ACIBjwAiAYwAJgFiABgBqgAvAYwAJgHFAC0BUgAYAYQAIwGQACIBtwAiAY8AIgGMACYBYgAYAaoALwGMACYAAAAUABQAFAAUAAAAAAADAAAAAwAAABwAAQAAAAABzAADAAEAAAAcAAQBsAAAAGgAQAAFACgAAAANAH4A/wExAUIBUwFhAXgBfgGSAscC3QMEAwgDDAMoAzYDlAOpA8AgFCAaIB4gIiAmIDAgOiBEIHAgeSCJIKQgrCETISIhLiFeIgIiDyISIhUiGiIeIisiSCJgImUlyvj/+wL//wAAAAAADQAgAKABMQFBAVIBYAF4AX0BkgLGAtgDAAMGAwoDJgM1A5QDqQPAIBMgGCAcICAgJiAwIDkgRCBwIHQggCCkIKwhEyEiIS4hWyICIg8iESIVIhkiHiIrIkgiYCJkJcr4//sB//8AA//3/+X/xP+T/4T/df9p/1P/T/88/gn9+f3X/db91f28/bD9U/0//Sng1+DU4NPg0uDP4MbgvuC14Irgh+CB4GfgYN/63+zf4d+13xLfBt8F3wPfAN793vHe1d6+3rvbVwgjBiIAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAYCCgAAAAABAAADAAAAAAAAAAAAAAAAAAAAAQACAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAAABQAGAAcACAAJAAoACwAMAA0ADgAPABAAEQASABMAFAAVABYAFwAYABkAGgAbABwAHQAeAB8AIAAhACIAIwAkACUAJgAnACgAKQAqACsALAAtAC4ALwAwADEAMgAzADQANQA2ADcAOAA5ADoAOwA8AD0APgA/AEAAQQBCAEMARABFAEYARwBIAEkASgBLAEwATQBOAE8AUABRAFIAUwBUAFUAVgBXAFgAWQBaAFsAXABdAF4AXwBgAGEAYgBjAAAAiACJAIsAjQCVAJoAoAClAKQApgCoAKcAqQCrAK0ArACuAK8AsQCwALIAswC1ALcAtgC4ALoAuQC+AL0AvwDAAPIAdABmAGcAawD0AHoAowByAG0BDgB4AGwBHgCKAJwBGwB1AR8BIABpAHkBFAEWARUA6QEcAG4AfgDoAKoAvACDAGUAcAEaAM4BHQAAAG8AfwD1AGQAhACHAJkAxwDIAOoA6wDvAPAA7ADtALsBIQDDAMsA+QEMAPcA+AEjASQA8wB7AO4A8QD2AIYAjgCFAI8AjACRAJIAkwCQAJcAmAEiAJYAngCfAJ0AxADPANUAcwDRANIA0wB8ANYA1ADQAAAAAAAgACAAIAAgACAAIAA0AEgAeADIASQBegGIAZ4BtAHSAeYB9AIAAgwCGgJGAlYCgAKwAswC/gMwA0IDkAPCA9QD6AP8BBAEIgRYBL4E2AUKBT4FYgV6BY4FxgXeBeoGAgYcBiwGSAZgBpYGugb6ByIHZAd2B5oHrgfKB+YH/AgSCCQINAhGCFgIZAhsCKgI3gkQCUYJfAmgCeIKBAoYCjoKUgpeCpIKtArmCxwLVAtsC6oL0gv0DAYMIgw8DGQMegysDLoM7A0QDRANJA1eDYgNyg3uDgIOYA5oDsgO/g8YDygPNA+MD5QPwA/aEAIQLhA2EFgQcBB8EIQQlBDAENoQ6hD6EQoRQBFMEVgRZBFwEXwRiBGsEbgRxBHQEdwR6BH0EgASDBIYEkQSUBJcEmgSdBKAEowSphKyEr4SyhLWEuIS7hMSE0wTWBNkE3ATfBOIE5QT+hQGFBIUHhQqFDYUQhROFFoUZhSyFL4UyhTWFOIU7hT6FRQVIBUsFTgVRBVQFVwVkhWeFaoVxBXcFh4WehaGFpIWnhaqFrYW7hb2Fv4XBhcOFxYXHhcmFy4XPBdKF1wXgheOF6oXwBfmGAwYIBgyGEAYZBiIGJYYpBi8GPYZDBkYGSQZMhlAGU4ZZBl6GZAZphnEGeAZ9hp4GogamBqmGtIa7BsaG0obXBuiG9Ib/hwOHDYcYhx8HKoc2BzqHTAdXh2SHdgeJh5KHpgeqB64Hsge2B8YHy4fSB9WH2Qfgh+WH+IgCiBQIHAgiiCkIL4g6CD0IQAhHCE0IUohhCG+IdQh8iIYIlgihCKWIsQjAiMYI1QjaCN+I5QjriO8I9Qj8iQEJBwkVCSMJJwkuiTQJOIlBCUcJTIlXiVuJYQlmCXCJfQmECZCJnQmhibSJwQnDCcUJxwnJCcsJzQnPCdEJ0wnVCdc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eXBlIFN0dWRpbwAARwB1AG0AcABpAHQAYQAgAFIAYQBoAGEAeQB1AABHdW1waXRhIFJhaGF5dQAAVABoAGkAcwAgAGMAdQBzAHQAbwBtACAAZgBvAG4AdAAgAGgAYQBzACAAYgBlAGUAbgAgAGQAZQBzAGkAZwBuAGUAZAAgAGYAbwByACAAKwBKAGEAawBhAHIAdABhACAAQwBpAHQAeQAgAEIAcgBhAG4AZABpAG4AZwAgADIAMAAyADAALgAAVGhpcyBjdXN0b20gZm9udCBoYXMgYmVlbiBkZXNpZ25lZCBmb3IgK0pha2FydGEgQ2l0eSBCcmFuZGluZyAyMDIwLgAAaAB0AHQAcABzADoALwAvAHcAdwB3AC4AdABvAGsAbwB0AHkAcABlAGYAYQBjAGUAcwAuAGMAbwBtAABodHRwczovL3d3dy50b2tvdHlwZWZhY2VzLmNvbQAAaAB0AHQAcABzADoALwAvAHcAdwB3AC4AdABvAGsAbwB0AHkAcABlAGYAYQBjAGUAcwAuAGMAbwBtAABodHRwczovL3d3dy50b2tvdHlwZWZhY2VzLmNvbQAAVABoAGkAcwAgAEYAbwBuAHQAIABTAG8AZgB0AHcAYQByAGUAIABpAHMAIABsAGkAYwBlAG4AcwBlAGQAIAB1AG4AZABlAHIAIAB0AGgAZQAgAFMASQBMACAATwBwAGUAbgAgAEYAbwBuAHQAIABMAGkAYwBlAG4AcwBlACwAIABWAGUAcgBzAGkAbwBuACAAMQAuADEALgAgAFQAaABpAHMAIABsAGkAYwBlAG4AcwBlACAAaQBzACAAYQB2AGEAaQBsAGEAYgBsAGUAIAB3AGkAdABoACAAYQAgAEYAQQBRACAAYQB0ADoAIABoAHQAdABwADoALwAvAHMAYwByAGkAcAB0AHMALgBzAGkAbAAuAG8AcgBnAC8ATwBGAEwAAFRoaXMgRm9udCBTb2Z0d2FyZSBpcyBsaWNlbnNlZCB1bmRlciB0aGUgU0lMIE9wZW4gRm9udCBMaWNlbnNlLCBWZXJzaW9uIDEuMS4gVGhpcyBsaWNlbnNlIGlzIGF2YWlsYWJsZSB3aXRoIGEgRkFRIGF0OiBodHRwOi8vc2NyaXB0cy5zaWwub3JnL09GTAAAaAB0AHQAcAA6AC8ALwBzAGMAcgBpAHAAdABzAC4AcwBpAGwALgBvAHIAZwAvAE8ARgBMAABodHRwOi8vc2NyaXB0cy5zaWwub3JnL09GTAAAUABsAHUAcwAgAEoAYQBrAGEAcgB0AGEAIABEAGkAcwBwAGwAYQB5AABQbHVzIEpha2FydGEgRGlzcGxheQAATQBlAGQAaQB1AG0AAE1lZGl1bQAAAgAAAAAAAP7WAE8AAAAAAAAAAAAAAAAAAAAAAAAAAAFqAAAAAQACAQIBAwADAAQABQAGAAcACAAJAAoACwAMAA0ADgAPABAAEQASABMAFAAVABYAFwAYABkAGgAbABwAHQAeAB8AIAAhACIAIwAkACUAJgAnACgAKQAqACsALAAtAC4ALwAwADEAMgAzADQANQA2ADcAOAA5ADoAOwA8AD0APgA/AEAAQQBCAEMARABFAEYARwBIAEkASgBLAEwATQBOAE8AUABRAFIAUwBUAFUAVgBXAFgAWQBaAFsAXABdAF4AXwBgAGEBBACjAIQAhQC9AJYA6ACGAI4AiwCdAKkApAEFAIoA2gCDAJMBBgEHAI0BCACIAMMA3gEJAJ4AqgD1APQA9gCiAK0AyQDHAK4AYgBjAJAAZADLAGUAyADKAM8AzADNAM4A6QBmANMA0ADRAK8AZwDwAJEA1gDUANUAaADrAO0AiQBqAGkAawBtAGwAbgCgAG8AcQBwAHIAcwB1AHQAdgB3AOoAeAB6AHkAewB9AHwAuAChAH8AfgCAAIEA7ADuALoA1wDiAOMAsACxAOQA5QC7AOYA5wCmANgA4QDbANwA3QDgANkA3wEKAQsBDAENAQ4BDwEQAREBEgETARQBFQEWARcBGAEZARoBGwCbALIAswC2ALcAxAC0ALUAxQCCAMIAhwCrAMYAvgC/ALwBHAEdAR4BHwEgASEBIgEjASQBJQEmAScBKAEpASoBKwEsAS0BLgEvAIwBMAExATIBMwE0AJgAmgCZAO8BNQE2AKUAkgCcAKcAjwCUAJUAuQE3AMAAwQE4ATkBOgE7ATwBPQE+AT8BQAFBAUIBQwFEAUUBRgFHAUgBSQFKAUsBTAFNAU4BTwFQAVEBUgFTAVQBVQFWAVcBWAFZAVoBWwFcAV0BXgFfAWABYQFiAWMBZAFlAWYBZwFoAWkBagFrAWwBbQFuAW8BcAFxAXIBcwF0AXUBdgF3AXgBeQF6AXsBfAROVUxMAkNSB3VuaTAwQTAHdW5pMDBBRAd1bmkwMEIyB3VuaTAwQjMHdW5pMDBCNQd1bmkwMEI5CWdyYXZlY29tYglhY3V0ZWNvbWIHdW5pMDMwMgl0aWxkZWNvbWIHdW5pMDMwNAd1bmkwMzA2B3VuaTAzMDcHdW5pMDMwOAd1bmkwMzBBB3VuaTAzMEIHdW5pMDMwQwd1bmkwMzI2B3VuaTAzMjcHdW5pMDMyOAd1bmkwMzM1B3VuaTAzMzYHdW5pMDM5NAd1bmkwM0E5B3VuaTIwNzAHdW5pMjA3NAd1bmkyMDc1B3VuaTIwNzYHdW5pMjA3Nwd1bmkyMDc4B3VuaTIwNzkHdW5pMjA4MAd1bmkyMDgxB3VuaTIwODIHdW5pMjA4Mwd1bmkyMDg0B3VuaTIwODUHdW5pMjA4Ngd1bmkyMDg3B3VuaTIwODgHdW5pMjA4OQRsaXJhBEV1cm8HdW5pMjExMwllc3RpbWF0ZWQJb25lZWlnaHRoDHRocmVlZWlnaHRocwtmaXZlZWlnaHRocwxzZXZlbmVpZ2h0aHMHdW5pMjIxNQd1bmkyMjE5B3VuaUY4RkYGQS5zczAyBkUuc3MwMgZGLnNzMDIGRy5zczAyBkcuc3MwMwZJLnNzMDIGSi5zczAzBksuc3MwMwZRLnNzMDMGUi5zczAzBlUuc3MwMQZhLnNzMDEGYS5zczAyBmYuc3MwMQZnLnNzMDMGaC5zczAxBmkuc3MwMgZqLnNzMDEGay5zczAxBmwuc3MwMQZtLnNzMDIGbS5zczAzBm4uc3MwMQZuLnNzMDMGcC5zczAyBnEuc3MwMgZyLnNzMDEGci5zczAyBnQuc3MwMQZ1LnNzMDEGdS5zczAzBnkuc3MwMQZ5LnNzMDIHemVyby50ZghvbmUuc3MwMQtvbmUuc3MwMS50ZgZvbmUudGYGdHdvLnRmCHRocmVlLnRmB2ZvdXIudGYHZml2ZS50ZgZzaXgudGYIc2V2ZW4udGYIZWlnaHQudGYHbmluZS50Zgl6ZXJvLmRub20Ib25lLmRub20IdHdvLmRub20KdGhyZWUuZG5vbQlmb3VyLmRub20JZml2ZS5kbm9tCHNpeC5kbm9tCnNldmVuLmRub20KZWlnaHQuZG5vbQluaW5lLmRub20JemVyby5udW1yCG9uZS5udW1yCHR3by5udW1y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ACsAKwAXACwALAAMAC8ALwAWADAAMAAVADEAMQAUADUANQATADcANwASADgAOAARADkAOQAcADoAOgAHADwAPAAbAD4APgALAEYARgADAEcARwABAEgASAAKAEoASgAFAEsASwAQAE0ATQACAFAAUAAPAFIAUwACAFQAVQABAFcAVwAJAFkAWQAIAFsAWwAGAFwAXAAaAF4AXgAGAGYAZgAKAIQAiQAEAIsAiwAYAJ0AoAAHAKEAoQALAKIAogATAKMAowAZAKQAqQADAKoAqgAFAKsAqwAKAKwArwAFALQAtAABALUAtQACALYAugABALwAvAABAMEAwQAGAMMAwwAGAMUAxQAUAMgAyAAFAMkAyQARAMsAywALAOcA5wAEAOkA6QAIAOwA7AAOAO0A7QANAO8A7wAOAPAA8AANASUBJQAEAScBJwAXASgBKQAMASsBKwAWASwBLAAVAS4BLgASAS8BLwAHATABMQADATIBMgAQATQBNAACATcBNwAPATkBPAACAT0BPQABAT8BQAAJAUEBQQAIAUQBRQAGAAIARgARABEACQATABMACQAmACYABQAoACgAAgAsACwAAgAvAC8AFAA0ADQAAgA2ADYAAgA4ADgADwA5ADkAEwA6ADoABwA8ADwAEgA+AD4ADABGAEYABABIAEoAAQBLAEsACgBMAEwAAQBSAFMAAwBUAFQAAQBVAFUAAwBWAFYAAQBXAFcAAwBYAFgADgBZAFkACwBaAFoABgBbAFsAEQBcAFwAEABeAF4ACABfAF8ADQCEAIoABQCLAIsAAgCWAJoAAgCcAJwAAgCdAKAABwChAKEADACkAKoABACrAK8AAQC0ALQAAQC1ALUAAwC2ALoAAQC8ALwAAQC9AMAABgDBAMEACADDAMMACADHAMcAAgDIAMgAAQDJAMkADwDKAMoADgDLAMsADADNAM0ADQDnAOcABQDoAOgAAgDpAOkACwDuAO4ACQDxAPEACQD1APUACQEjASQACgElASUABQEoASkAAgEtAS0AAgEvAS8ABwEwATEABAEyATIACgEzATMAAQE5AT0AAwE+AT4AAQE/AUAAAwFBAUEACwFCAUMABgFEAUUACAABAHEAJgAnACgAKQArACwALwAwADEANAA1ADYANwA4ADkAOgA8AD4ARgBHAEgASgBLAE0AUABSAFMAVABVAFcAWQBbAFwAXgBmAIQAhQCGAIcAiACJAIsAlACWAJcAmACZAJoAnACdAJ4AnwCgAKEAogCjAKQApQCmAKcAqACpAKoAqwCsAK0ArgCvALQAtQC2ALcAuAC5ALoAvADBAMMAxQDIAMkAywDnAOgA6QDsAO0A7wDwASUBJwEoASkBKwEsAS0BLgEvATABMQEyATQBNwE5AToBOwE8AT0BPwFAAUEBRAFFAAEIIgdeAAMIMgAMAGECSAJOAAACVAJaAAACYAJmAmwCcgJ4AAACfgKEAAACigKQApYCnAKiAAACqAKuAAACtAK6AsACxgLMAAAC0gLYAt4C5ALqAvAC9gL8AAADAgMIAAADDgMUAAADGgMgAyYDLAMyAAADOAM+AAADRANKAAAAAAAAA1ADVgNcAAADYgNoA24DdAN6AAAAAAOAAAADhgOMAAADkgOYAAADngOkAAADqgOwA7YDvAPCAAADyAPOAAAD1APaAAAD4APmAAAD7APyAAAD+AP+AAAEBAQKAAAEEAQWAAAEHAQiAAAEKAQuAAAENAQ6AAAEQARGAAAETARSAAAEWAReAAAEZARqAAAEcAR2AAAEfASCBIgEjgSUBJoEoASmBKwEsgS4BL4ExATKBNAE1gTcBOIE6ATuAAAE9AT6AAAFAAUGAAAFDAUSAAAFGAUeAAAFJAUqAAAFMAU2AAAFPAVCAAAFSAVOAAAFVAVaAAAFYAVmAAAFbAVyAAAFeAV+AAAFhAWKAAAFkAWWAAAFnAWiAAAFqAWuAAAFtAW6AAAFwAXGAAAFzAXSAAAF2AXeAAAF5AXqBfAF9gX8BgIGCAYOBhQGGgYgBiYGLAYyBjgGPgZEBkoGUAZWAAAGXAZiAAAGaAZuAAAGdAZ6AAAGgAaGAAAGjAaSAAAGmAaeAAAGpAaqAAAGsAa2AAAGvAbCAAAGyAbOBtQG2gbgBuYG7AbyAAAG+Ab+AAAHBAcKAAAHEAcWAAAHHAciAAAHKAcuBzQHOgdAAAAHRgdMAAAAAQFjAukAAQFjAAAAAQGRAukAAQGeAAAAAQFyAukAAQFyAAAAAQCnAXUAAQEwAukAAQEwAAAAAQGrAsYAAQGrAAAAAQFeAsYAAQFeAAAAAQFeAikAAQCDAukAAQCDAAAAAQDvAsYAAQBOAAAAAQB/AsYAAQEdAAAAAQCCAWoAAQFrAukAAQFrAAAAAQGtAukAAQGtAAAAAQGtAXUAAQG0AsYAAQG0AAAAAQGwAWMAAQFAAukAAQFAAAAAAQFmAukAAQFmAAAAAQFJAukAAQFJAAAAAQEkAtwAAQEhAAAAAQEhAXUAAQESAhsAAQELAAAAAQEaAhsAAQExAAAAAQEnAhsAAQEvAAAAAQB2AWoAAQFEAhsAAQEgAAAAAQE3AhsAAQE3AAAAAQE3AQ0AAQD3AhsAAQD3AAAAAQEY//8AAQEgAhsAAQEgAAAAAQGuAg8AAQGuAAAAAQEcAhsAAQEcAAAAAQDuAhsAAQDuAAAAAQDuAQ0AAQFjAukAAQFjAAAAAQFjAukAAQFjAAAAAQFjAukAAQFjAAAAAQFjAukAAQFjAAAAAQFjAukAAQFjAAAAAQFjAukAAQFjAAAAAQGRAukAAQGeAAAAAQEwAukAAQEwAAAAAQEwAukAAQEwAAAAAQEwAukAAQEwAAAAAQEwAukAAQEwAAAAAQCDAukAAQCDAAAAAQCDAukAAQCDAAAAAQCDAukAAQCDAAAAAQCDAukAAQCDAAAAAQFrAukAAQFrAAAAAQGtAukAAQGtAAAAAQGtAXUAAQGtAukAAQGtAAAAAQGtAXUAAQGtAukAAQGtAAAAAQGtAXUAAQGtAukAAQGtAAAAAQGtAXUAAQGtAukAAQGtAAAAAQGtAXUAAQGtAukAAQGtAAAAAQGtAXUAAQFmAukAAQFmAAAAAQFmAukAAQFmAAAAAQFmAukAAQFmAAAAAQFmAukAAQFmAAAAAQFJAukAAQFJAAAAAQESAhsAAQELAAAAAQESAhsAAQELAAAAAQESAhsAAQELAAAAAQESAhsAAQELAAAAAQESAhsAAQELAAAAAQESAhsAAQELAAAAAQEaAhsAAQExAAAAAQEnAhsAAQEvAAAAAQEnAhsAAQEvAAAAAQEnAhsAAQEvAAAAAQEnAhsAAQEvAAAAAQCGAhsAAQCGAAAAAQCGAhsAAQCGAAAAAQCGAhsAAQCGAAAAAQCGAhsAAQCGAAAAAQFEAhsAAQEgAAAAAQE3AhsAAQE3AAAAAQE3AQ0AAQE3AhsAAQE3AAAAAQE3AQ0AAQE3AhsAAQE3AAAAAQE3AQ0AAQE3AhsAAQE3AAAAAQE3AQ0AAQE3AhsAAQE3AAAAAQE3AQ0AAQE3AhsAAQE3AAAAAQE3AQ0AAQEgAhsAAQEgAAAAAQEgAhsAAQEgAAAAAQEgAhsAAQEgAAAAAQEgAhsAAQEgAAAAAQEcAhsAAQEcAAAAAQEcAhsAAQEcAAAAAQCGAhsAAQCGAAAAAQFAAukAAQFAAAAAAQD3AhsAAQD3AAAAAQFJAukAAQFJAAAAAQEkAtwAAQEhAAAAAQEhAXUAAQDuAhsAAQDuAAAAAQDuAQ0AAQFgAukAAQJUAAAAAQGtAsYAAQGsAAAAAQGsAsYAAQGsAAAAAQEMAsYAAQEMAAAAAQHSAsYAAQExAAAAAQGzAsYAAQGzAAAAAQGwAWMAAQFMAsYAAQFMAAAAAQEgAf4AAQCvAAAAAgAgACYAJgAAACgAKgABACwALwAEADEAMQAIADMANAAJADYANgALADgAOAAMADoAOgANAD4APwAOAEYARgAQAEgASAARAEoASgASAFEAUQATAFMAVAAUAFgAWgAWAFwAXAAZAF4AXwAaAIQAiQAcAIsAkwAiAJUAmgArAJwAoQAxAKQAqQA3AKsAswA9ALUAugBGALwAwQBMAMMAxABSAMkAzQBUASUBJQBZASgBKwBaAS0BLQBeAS8BLwBfAUABQABgAAIAAgDXAOYAAAFnAWcAEAARAAAARgAAAEwAAABSAAAAWAAAAF4AAABkAAAAagAAAHAAAAB2AAAAfAAAAIIAAQCIAAEAjgABAJQAAgCaAAIAoAACAKYAAQCbAhoAAQBAAhoAAQC+AhoAAQDQAhoAAQCTAhoAAQCrAhoAAQBcAhoAAQC+AhoAAQCDAhoAAQCWAhoAAQC+AhoAAQCTAAAAAQCBAAAAAQCbAAQAAQDqAUQAAQFyAUQAAQC4AUQAAAAAAAEAAAAA1aQnCAAAAADaUiqBAAAAANp2p1A=') format('truetype');  font-weight:500;
  font-style: normal;
  font-display: swap;
}




@font-face {
  font-family: 'Plusjakartadisplay';
  src: url('data:font/ttf;charset=utf-8;base64,AAEAAAAPAIAAAwBwRkZUTYps+QIAAImkAAAAHEdERUYHNQg7AABryAAAAEJHUE9TCTsHEgAAcrgAABbsR1NVQlbKuhQAAGwMAAAGqk9TLzJ/M00bAAABeAAAAGBjbWFwLl45sgAAB3wAAAPWZ2FzcP//AAMAAGvAAAAACGdseWb0de7IAAAOLAAATsBoZWFkGBgWHQAAAPwAAAA2aGhlYQhhAkYAAAE0AAAAJGhtdHj1HSwdAAAB2AAABaJsb2Nhg/JxDgAAC1QAAALWbWF4cAF6AK4AAAFYAAAAIG5hbWVPLd7bAABc7AAAB+Bwb3N0gYC24gAAZMwAAAbxAAEAAAABAAAjQUEqXw889QALA+gAAAAA2lIqgQAAAADadqd4/4j/EASnBC8AAQAIAAIAAAAAAAAAAQAABC//IQAABOX/iPzYBKcAAQAAAAAAAAAAAAAAAAAAAWcAAQAAAWoAWAAHAFMABQABAAAAAAAAAAAAAAAAAAMAAgAEAkICvAAFAAACigJYAAAASwKKAlgAAAFeAFoBSAAAAAAAAAAAAAAAAIAAAO9QACBbAAAAAAAAAABUT0tPAKAADfsCBC//IQAABC8A8CAAAAEAAAAAAiIC6QAAACAAAwKAADwAAAAAAU0AAAAAAAAAtAAAALQAAAEOADwB4ABBAxz/9gKGABkEKABQA1sASwEEAEEBcwBGAXMABQHAABkCYgBLASgANwIwADcBGABBAcT/7AKXAB4BuAAUAjwAGQJSABkCnQAeAlEAGQJQAB4CHgAPAnYAKAJQAB4BGABBATgAQQIqACgCdgBkAhYAKAIrABkDqwAeAtMABQKpADwC+AAjAt8APAJZADwCTgA8Aw8AIwLQADwBEwA8AXcACgKfADwCOgA8A4QAPALaADwDXAAjAo8APANcACMCuAA8AoYAGQIxAA8C2gA8ArwABQQQAA8CqQAPApUABQI1AAoBdwBGAcT/7AF3ABkCewBLAcL/5wDvABQCIgAUAo4AMgI+ABQCjgAUAkEAFAF0AAAChAAUAk4AMgD6ADIA+P/KAjEAMgD6ADIDgAAyAk4AMgJwABQCjgAyAo4AFAGVADICAQAUAZIACgJOACgCLgAAA3sAAAI8AAUCQgAAAfsAFAFXABQBcgBuAVcABQKwAF8AtAAAAQ4APAI2ABQDDQBdAooAPAKVAAUBcgBuAnYAVQGcABQDogBQAYsAFAKvABkCbABQAjAANwOiAFABPAAUAfQAUAJiAEsBdwAZAYYAGQDvABQCRQAoAdQAGQEYAEEBNAAUAVUAFAG9ABQCrwAtA9QAFAOWABQEBQAZAisAIwLTAAUC0wAFAtMABQLTAAUC0wAFAtMABQP2AAUC+AAjAlkAPAJZADwCWQA8AlkAPAET//sBEwA8ARP/1AET/9AC3//LAtoAPANcACMDXAAjA1wAIwNcACMDXAAjAl4ASwNcACMC2gA8AtoAPALaADwC2gA8ApUABQKPADwCgwA8AiIAFAIiABQCIgAUAiIAFAIiABQCIgAUA50AFAI+ABQCQQAUAkEAFAJBABQCQQAUASIAAgEiAEYBIv/bASL/1wJoABQCTgAyAnAAFAJwABQCcAAUAnAAFAJwABQCnwBQAnD/6AJOACgCTgAoAk4AKAJOACgCQgAAAo4AMgJCAAABIgBGAjr/wAD6/94EzwAjA+YAFAKGABkCAQAUApUABQI1AAoB+wAUAlgACgGUABQBlAAUAWQAFADEABQBGQAUATQAFAHEABQBnwAUAAAAFAAAABQAAAAUAAAAFAAAABQAAAAUAAAAFAAAABQAAAAUAAAAFAAAABQAAAAUAAAAFAAAABQAAAAUAAAAFAJpAAUDcAAjArQACgJiADcDlAA3ASgANwEoADcBKAA3Af8ANwH/ADcB/wA3ArwAUAK8AFAB7QBBA3AAQQTlAFABgwAZAYMALQDK/4gBqgAeAbUAHgGCABkBiAAeAWAADwGjACgBiAAeAaoAHgFVABQBdwAZAYYAGQG1AB4BggAZAYgAHgFgAA8BowAoAYgAHgMjAI0DEQAUAloABQStAEsDFgAUA8IAFAPzABkD7wAZA80ADwJAAAADawAoAgoAGQKUAGQBuP/sAhEAQQMxAEYDMwBaAZgACgK6AGQCdgBkAlgAKAJEACgCgAAoAlgAMgJuAAACbgAAAv0AGgK8ADwCqAA8AxIAIwMmACMCCAAyAmEACgLEADwDdgAiArcAPAK8ADwCNgAUAmMAFAF0AAAChAAUAjwAMgEtAAoBAv/KAjEAMgFUADIDgAAyA4AAMgJGADICPAAyArsACgK7ABQBlQAyAeUACgG0AAoCPAAoAjwAKAIw//cCQgAAAlgACAG4ABQCWAAjAlgAIwJYACMCWAAbAlgABgJYABsCWAAhAlgAJAJYAB0CWAAhAaoAHgFVABQBdwAZAYYAGQG1AB4BggAZAYgAHgFgAA8BowAoAYgAHgGqAB4BVQAUAXcAGQGGABkBtQAeAYIAGQGIAB4BYAAPAaMAKAGIAB4AAAAUABQAFAAUAAAAAAADAAAAAwAAABwAAQAAAAABzAADAAEAAAAcAAQBsAAAAGgAQAAFACgAAAANAH4A/wExAUIBUwFhAXgBfgGSAscC3QMEAwgDDAMoAzYDlAOpA8AgFCAaIB4gIiAmIDAgOiBEIHAgeSCJIKQgrCETISIhLiFeIgIiDyISIhUiGiIeIisiSCJgImUlyvj/+wL//wAAAAAADQAgAKABMQFBAVIBYAF4AX0BkgLGAtgDAAMGAwoDJgM1A5QDqQPAIBMgGCAcICAgJiAwIDkgRCBwIHQggCCkIKwhEyEiIS4hWyICIg8iESIVIhkiHiIrIkgiYCJkJcr4//sB//8AA//3/+X/xP+T/4T/df9p/1P/T/88/gn9+f3X/db91f28/bD9U/0//Sng1+DU4NPg0uDP4MbgvuC14Irgh+CB4GfgYN/63+zf4d+13xLfBt8F3wPfAN793vHe1d6+3rvbVwgjBiIAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAYCCgAAAAABAAADAAAAAAAAAAAAAAAAAAAAAQACAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAAABQAGAAcACAAJAAoACwAMAA0ADgAPABAAEQASABMAFAAVABYAFwAYABkAGgAbABwAHQAeAB8AIAAhACIAIwAkACUAJgAnACgAKQAqACsALAAtAC4ALwAwADEAMgAzADQANQA2ADcAOAA5ADoAOwA8AD0APgA/AEAAQQBCAEMARABFAEYARwBIAEkASgBLAEwATQBOAE8AUABRAFIAUwBUAFUAVgBXAFgAWQBaAFsAXABdAF4AXwBgAGEAYgBjAAAAiACJAIsAjQCVAJoAoAClAKQApgCoAKcAqQCrAK0ArACuAK8AsQCwALIAswC1ALcAtgC4ALoAuQC+AL0AvwDAAPIAdABmAGcAawD0AHoAowByAG0BDgB4AGwBHgCKAJwBGwB1AR8BIABpAHkBFAEWARUA6QEcAG4AfgDoAKoAvACDAGUAcAEaAM4BHQAAAG8AfwD1AGQAhACHAJkAxwDIAOoA6wDvAPAA7ADtALsBIQDDAMsA+QEMAPcA+AEjASQA8wB7AO4A8QD2AIYAjgCFAI8AjACRAJIAkwCQAJcAmAEiAJYAngCfAJ0AxADPANUAcwDRANIA0wB8ANYA1ADQAAAAAAAgACAAIAAgACAAIAA0AEgAeADGASIBdAGCAZgBrgHMAeAB7gH6AgYCFAJAAlACegKmAsIC9gMoAzoDhAO0A8YD2gPuBAIEFARIBK4EyAT6BS4FUgVqBX4FtgXOBdoF8gYMBhwGOAZQBoYGqgbqBxIHVAdmB4gHmge2B9AH5gf8CA4IHggwCEIITghWCJAIvgjuCRwJUglyCbQJ1gnqCggKIAosCmAKggquCtwLDAskC2YLiAuqC7wL2AvyDBgMLgxeDGwMnAzCDMIM1g0QDToNeA2cDbAODA4UDnQOrA7GDtYO4g86D0IPbg+ID7AP2g/iEAYQHhAqEDIQQhBuEIgQmBCoELgQ7BD4EQQREBEcESgRNBFYEWQRcBF8EYgRlBGgEawRuBHEEfAR/BIIEhQSIBIsEjgSUhJeEmoSdhKCEo4SmhK+EvgTBBMQExwTKBM0E0ATphOyE74TyhPWE+IT7hP6FAYUEhReFGoUdhSCFI4UmhSmFMAUzBTYFOQU8BT8FQgVNhVCFU4VaBWAFcIWGBYkFjAWPBZIFlQWiBaQFpgWoBaoFrAWuBbAFsgW1hbkFvYXHBcqF0YXXBeCF6wXwBfSF+AYBBgoGDYYRBhcGJQYqhi2GMIY0BjeGOwZAhkYGS4ZRBliGX4ZlBoWGiYaNhpEGnAaihq4Guga+htCG3IbnhuuG9YcABwaHEgcdhyIHNAc/h0wHXYdwh3mHjQeRB5UHmQedB6yHsge4B7uHvwfGB8sH3gfmh/gIAAgGiA0IE4geCCEIJAgrCDEINohFiFQIWYhhCGoIegiFCImIlIijiKmIuAi9CMKIyAjOCNGI14jfCOOI6Yj2iQQJCAkQCRWJGgkiiSiJLgk5CT0JQolHiVIJXQlkCXEJfYmCCZUJoQmjCaUJpwmpCasJrQmvCbEJswm1Cbc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AGMAz///ADwAAAIxA+sSJgAqAAAQBwDeAF8Az/////sAAADXA/ESJgAuAAAQBwDX/+cAz///ADwAAAEcA/ESJgAuAAAQBwDYAEEAz////9QAAAFAA+8SJgAuAAAQBwDZ/8AAz////9AAAAFEA+sSJgAuAAAQBwDe/7wAzwAC/8sAAAK8AukADgAdAAAzESM1MxEzMh4BFRQOASMnMzI+ATU0LgErARUzFSM8cXHzebJiYrJ5WFxJajs7aklctLQBNIIBM2CobGypYIc7a0hJajqsggD//wA8AAACngPdEiYAMwAAEAcA2gCKAM///wAj//QDOQPxEiYANAAAEAcA1wELAM///wAj//QDOQPxEiYANAAAEAcA2AFlAM///wAj//QDOQPvEiYANAAAEAcA2QDkAM///wAj//QDOQPdEiYANAAAEAcA2gDLAM///wAj//QDOQPrEiYANAAAEAcA3gDgAM8AAQBLAH8CEwJHAAsAADcnNyc3FzcXBxcHJ6NYjIxZi4tZjIxYjH9ZjItYi4tYi4xZjAAA//8AI//qAzkC/xImADQAABAGAWkQeAAA//8APP/0Ap4D8RImADoAABAHANcAygDP//8APP/0Ap4D8RImADoAABAHANgBJADP//8APP/0Ap4D7xImADoAABAHANkAowDP//8APP/0Ap4D6xImADoAABAHAN4AnwDP//8ABQAAApAD8RImAD4AABAHANgBAgDPAAIAPAAAAnYC6QAOABcAADMRMxUzMh4BFRQOASsBFREzMjY1NCYrATybl013REV3TJeYMTs7MZgC6YI2ak5MajeMARM4Li84AAEAPP9gAmUC6QAoAAAXETQ+ATMyHgEVFAYHHgEVFAYrATUzMjY1NCYrATUzMjY1NCYjIgYVETxEelFMcT4ZHDIikoIqPC84OC88NSQrNSs1P6AClEpuPTZiQiJAGyJXMW56hzYrLDaHKSIiKT80/WwAAAD//wAU//QCBAMqEiYARgAAEAYA13gIAAD//wAU//QCBAMqEiYARgAAEAcA2ADSAAj//wAU//QCBAMoEiYARgAAEAYA2VEIAAD//wAU//QCBAMWEiYARgAAEAYA2jgIAAD//wAU//QCBAMkEiYARgAAEAYA3k0IAAD//wAU//QCBANoEiYARgAAEAcA3wCPAAgAAwAU//QDkwIuADIAOQBF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//kBXgG/EgYBBAAA//8AHgAAAaEBvxIGAQUAAP//ABn/+QFaAb8SBgEGAAD//wAe//kBagG/EgYBBwAA//8ADwAAAUwBwBIGAQgAAP//ACj/+QF7AcYSBgEJAAD//wAeAAABagHGEgYBCgAA//8AHgEjAYwC8BIGAPoAAP//ABQBKgDYAukSBgB9AAD//wAZASoBTwLwEgYAdgAA//8AGQEjAV4C6RIGAHcAAP//AB4BKgGhAukSBgD7AAD//wAZASMBWgLpEgYA/AAA//8AHgEjAWoC6RIGAP0AAP//AA8BKQFMAukSBgD+AAD//wAoASMBewLwEgYA/wAA//8AHgEqAWoC8BIGAQAAAAABABQBzQCyAukAAwAAEwMzAy8bnhsBzQEc/uQAAQAUAQIBcAGBAAMAABM1IRUUAVwBAn9/AAAAAAEAFP+9ArQCXQADAAABFwEnAlhc/bxcAl1c/bxcAAAAAQAU/3IDKAKHAAMAAAEXAScCzFz9SFwCh1z9R1wAAAAAABwBVgABAAAAAAAAAGUAzAABAAAAAAABABQBXAABAAAAAAACAAQBewABAAAAAAADACIBxgABAAAAAAAEABkCHQABAAAAAAAFAA0CUwABAAAAAAAGABcCkQABAAAAAAAIAA8CyQABAAAAAAAJAA4C9wABAAAAAAAKAEMDjgABAAAAAAALAB0EDgABAAAAAAAMAB0EaAABAAAAAAANAJAFqAABAAAAAAAOABoGbwADAAEECQAAAMoAAAADAAEECQABACgBMgADAAEECQACAAgBcQADAAEECQADAEQBgAADAAEECQAEADIB6QADAAEECQAFABoCNwADAAEECQAGAC4CYQADAAEECQAIAB4CqQADAAEECQAJABwC2QADAAEECQAKAIYDBgADAAEECQALADoD0gADAAEECQAMADoELAADAAEECQANASAEhgADAAEECQAOADQGOQBDAG8AcAB5AHIAaQBnAGgAdAAgADIAMAAyADAAIABUAGgAZQAgAFAAbAB1AHMAIABKAGEAawBhAHIAdABhACAARABpAHMAcABsAGEAeQAgAFAAcgBvAGoAZQBjAHQAIABBAHUAdABoAG8AcgBzACAAKABoAHQAdABwAHMAOgAvAC8AZwBpAHQAaAB1AGIALgBjAG8AbQAvAHQAbwBrAG8AdAB5AHAAZQAv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RjhGRgZBLnNzMDIGRS5zczAyBkYuc3MwMgZHLnNzMDIGRy5zczAzBkkuc3MwMgZKLnNzMDMGSy5zczAzBlEuc3MwMwZSLnNzMDMGVS5zczAxBmEuc3MwMQZhLnNzMDIGZi5zczAxBmcuc3MwMwZoLnNzMDEGaS5zczAyBmouc3MwMQZrLnNzMDEGbC5zczAxBm0uc3MwMgZtLnNzMDMGbi5zczAxBm4uc3MwMwZwLnNzMDIGcS5zczAyBnIuc3MwMQZyLnNzMDIGdC5zczAxBnUuc3MwMQZ1LnNzMDMGeS5zczAxBnkuc3MwMgd6ZXJvLnRmCG9uZS5zczAxC29uZS5zczAxLnRmBm9uZS50ZgZ0d28udGYIdGhyZWUudGYHZm91ci50ZgdmaXZlLnRmBnNpeC50ZghzZXZlbi50ZghlaWdodC50ZgduaW5lLnRmCXplcm8uZG5vbQhvbmUuZG5vbQh0d28uZG5vbQp0aHJlZS5kbm9tCWZvdXIuZG5vbQlmaXZlLmRub20Ic2l4LmRub20Kc2V2ZW4uZG5vbQplaWdodC5kbm9tCW5pbmUuZG5vbQl6ZXJvLm51bXIIb25lLm51bXIIdHdvLm51bXIKdGhyZWUubnVtcglmb3VyLm51bXIJZml2ZS5udW1yCHNpeC5udW1yCnNldmVuLm51bXIKZWlnaHQubnVtcgluaW5lLm51bXILdW5pMDMwQy5hbHQLdW5pMDMzNS5hbHQHdW5pMDMzOAx1bmkwMzM4LmNhc2UAAAAAAAAB//8AAgABAAAADAAAADoAAAACAAcAAwDWAAEA1wDmAAMA5wEiAAEBIwEkAAIBJQFlAAEBZgFnAAMBaAFpAAEABAAAAAIAAAAAAAEAAAAKADwBBAABREZMVAAIAAQAAAAA//8AEAAAAAEAAgADAAQABQAGAAcACAAJAAoACwAMAA0ADgAPABBhYWx0AGJjY21wAGpkbm9tAHBmcmFjAHZsaWdhAIBudW1yAIZvcmRuAIxwbnVtAJJzYWx0AJhzaW5mAJ5zczAxAKRzczAyAKpzczAzALBzdWJzALZzdXBzALx0bnVtAMIAAAACAAAAAQAAAAEAAgAAAAEACQAAAAMACgALAAwAAAABABMAAAABAAgAAAABAA8AAAABABEAAAABABQAAAABAAYAAAABABUAAAABABYAAAABABcAAAABAAUAAAABAAcAAAABABIAGAAyADoAQgBMAFQAXABkAGwAdAB8AIQAjACUAJ4ApgCuALgAwADIANAA2ADgAOgA8AABAAAAAQDGAAMAAAABAWAABgAAAAICVgJ4AAEAAAABApwAAQAAAAECoAABAAAAAQKkAAEAAAABAqwAAQAAAAECtAABAAAAAQLQAAEAAAABAtgAAQAAAAEC4AABAAAAAQLkAAYAAAACAuwDDgABAAAAAQMqAAEAAAABAzIABgAAAAIDOgNeAAEAAAABA3gAAQAAAAEDigABAAAAAQOuAAQACAABA9IAAQAAAAED6gABAAAAAQQgAAEAAAABBFYAAQAAAAEEiAACAFwAKwD5ASYBJwEqASsBLAB+AS0BLgEvATIBMwE0ATUBNgE3ATgAfgE9AT4BQQAVAUgBRwAWABcAGAAZABoAGwAcAB0AHgFSAVMBVAFVAVYBVwFYAVkBWgFbAAIACwAUABQAAAAqACsAAQAuADAAAwA0ADQABgA2ADcABwA6ADoACQBLAFEACgBUAFYAEQBZAFkAFAFGAVEAFQFcAWUAIQABANYAEgAqADYARABQAFwAaAB0AIAAjACYAKQAqgCwALgAvgDEAMoA0AAFAUYBAQFSAVwA+gAGAUcBSQECAVMBXQB9AAUBSgEDAVQBXgB2AAUBSwEEAVUBXwB3AAUBTAEFAVYBYAD7AAUBTQEGAVcBYQD8AAUBTgEHAVgBYgD9AAUBTwEIAVkBYwD+AAUBUAEJAVoBZAD/AAUBUQEKAVsBZQEAAAIBJQBuAAIBKAEpAAMBMAExAG4AAgE5AToAAgE7ATwAAgE/AUAAAgFCAUMAAgFEAUUAAQASABUAFgAXABgAGQAaABsAHAAdAB4AJgAsAEYAUgBTAFcAWgBeAAMAAAABABIAAQAYAAEAAAADAAEAAQBOAAIAAQDXAOEAAAADAAAAAQAUAAIAGgAkAAEAAAAEAAEAAQBOAAIAAQDjAOYAAAACAAEA1wDhAAAAAQAGAHYAAQABAE4AAQAGAHYAAQABAE4AAQAGAOwAAgABABUAHgAAAAEABgDsAAIAAQAVAB4AAAACABoACgD6AH0AdgB3APsA/AD9AP4A/wEAAAIAAQAVAB4AAAABAAYBRwACAAEAFQAeAAAAAQAGAT0AAgABABUAHgAAAAEABgDlAAEAAQAUAAEABgFHAAIAAQAVAB4AAAADAAEAHAABABIAAAABAAAADQACAAEBXAFlAAAAAQABAPkAAwABABwAAQASAAAAAQAAAA4AAgABAVwBZQAAAAIAAQFSAVsAAAABAAb/9gACAAEBXAFlAAAAAQAG//YAAgABAVwBZQAAAAMAAQAaAAEAEgAAAAEAAAAQAAEAAgAmAEYAAgABABUAHgAAAAMAAQAaAAEAEgAAAAEAAAAQAAEAAgA0AFQAAgABABUAHgAAAAIADgAEAG4AfgBuAH4AAQAEACYANABGAFQAAgAcAAsAFQFHABYAFwAYABkAGgAbABwAHQAeAAIAAgFGAUYAAAFIAVEAAQACABwACwFGAUkBSgFLAUwBTQFOAU8BUAFRAUgAAgACABUAHgAAAUcBRwAKAAEAGgABAAgAAgAGAAwBJAACAFEBIwACAE4AAQABAEsAAgAgAA0BRwEvATABMgE0ATYBNwE4ATsBPwFBAUIBRAABAA0AFgA6AEYASwBNAE8AUABRAFMAVwBZAFoAXgACACAADQFHAS8BMAEyATQBNgE3ATgBOwE/AUEBQgFEAAEADQAWADoARgBLAE0ATwBQAFEAUwBXAFkAWgBeAAIAHgAMASUBJgEnASgBKgExATUBOQE9AT4BQAFFAAEADAAmACoAKwAsAC4ARgBOAFIAVQBWAFcAXgACABgACQEpASsBLAEtAS4BMwE6ATwBQwABAAkALAAvADAANgA3AEwAUgBTAFoAAAABAAAACgAgADoAAURGTFQACAAEAAAAAP//AAIAAAABAAJrZXJuAA5tYXJrABQAAAABAAAAAAABAAEAAgAGABAAAgAIAAIAEgT8AAQAAAABDcQAAQRSAAQAAABKAJ4AqACuALQAwgDIAM4A3ADqAPQA+gEAANwBBgDcARABGgEgASoCqAKyA6gAngEaA7IDuAEaARoDygCeBEgAyADIAMgAyADIAMgA3ADcANwA3ADcANwA3AOoAQYAzgOyA7IDsgOyA7IBGgEaARoBGgEaARoBGgEAA7IBGgOoAMgA3ADIAOoA9AD0APoA3AEQA7gBGgACAE8AZAE2AGQAAQAb//YAAQAZ//YAAwAZ/84AGv/sABv/zgABABv/7AABADv/2AADADv/7AA9/+wAXf/2AAMAO//sAD3/4gBd/+wAAgBd/9gBK//EAAEAO//2AAEBK//2AAEAO/+6AAIAPf/sASv/fgACADv/7AEr/+wAAQBd/+wAAgBd/84BK/+wAF8AEf/OABP/zgAm/9gAKP/sACz/7AA0/+wANv/sAEb/2ABI/9gASf/YAEr/2ABL//YATP/YAFL/4gBT/+IAVP/YAFX/4gBW/9gAV//iAFj/zgBZ//YAWv/iAFv/7ABd/+wAX//sAIT/2ACF/9gAhv/YAIf/2ACI/9gAif/YAIr/2ACL/+wAlv/sAJf/7ACY/+wAmf/sAJr/7ACc/+wApP/YAKX/2ACm/9gAp//YAKj/2ACp/9gAqv/YAKv/2ACs/9gArf/YAK7/2ACv/9gAtP/YALX/4gC2/9gAt//YALj/2AC5/9gAuv/YALz/2AC9/+IAvv/iAL//4gDA/+IAx//sAMj/2ADK/84Azf/sAOf/2ADo/+wA6f/2AO7/zgDx/84A9f/OASP/9gEk//YBJf/YASj/7AEp/+wBK//EAS3/7AEw/9gBMf/YATL/9gEz/9gBOf/iATr/4gE7/+IBPP/iAT3/4gE+/9gBP//iAUD/4gFB//YBQv/iAUP/4gACAF3/9gEr/84APQAo/+IALP/iADT/4gA2/+IASP/sAEn/7ABK/+wAS//sAEz/7ABU/+wAVv/sAFj/7ABZ/+IAWv/iAFv/4gBc/9gAXv/iAIv/4gCW/+IAl//iAJj/4gCZ/+IAmv/iAJz/4gCr/+wArP/sAK3/7ACu/+wAr//sALT/7AC2/+wAt//sALj/7AC5/+wAuv/sALz/7AC9/+IAvv/iAL//4gDA/+IAwf/iAMP/4gDH/+IAyP/sAMr/7ADo/+IA6f/iASP/7AEk/+wBKP/iASn/4gEr/+IBLf/iATL/7AEz/+wBPv/sAUH/4gFC/+IBQ//iAUT/4gFF/+IAAgBd/8QBK/+SAAEAXf/2AAQADgBGACQAHgBCACgAYgBkAB8ARv/2AEj/7ABJ/+wASv/sAEz/7ABU/+wAVv/sAKT/9gCl//YApv/2AKf/9gCo//YAqf/2AKr/9gCr/+wArP/sAK3/7ACu/+wAr//sALT/7AC2/+wAt//sALj/7AC5/+wAuv/sALz/7ADI/+wBMP/2ATH/9gEz/+wBPv/sAAIATwBGATYARgABAEoADQAWABcAHAAeACYAJwApACsALAAwADEANAA1ADYANwA4ADkAOwA8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BRIAAAUYBR4AAAUkBSoAAAUwBTYAAAU8BUIAAAVIBU4AAAVUBVoAAAVgBWYAAAVsBXIAAAV4BX4AAAWEBYoAAAWQBZYAAAWcBaIAAAWoBa4AAAW0BboAAAXABcYAAAXMBdIAAAXYBd4AAAXkBeoF8AX2BfwGAgYIBg4GFAYaBiAGJgYsBjIGOAY+BkQGSgZQBlYAAAZcBmIAAAZoBm4AAAZ0BnoAAAaABoYAAAaMBpIAAAaYBp4AAAakBqoAAAawBrYAAAa8BsIAAAbIBs4G1AbaBuAG5gbsBvIAAAb4Bv4AAAcEBwoAAAcQBxYAAAccByIAAAcoBy4HNAc6B0AAAAdGB0wAAAABAWoC6QABAWoAAAABAZsC6QABAZwAAAABAXAC6QABAXAAAAABAKsBdQABAS0C6QABAS0AAAABAZcCxgABAZcAAAABAWYCxgABAWYAAAABAWYCMwABAIoC6QABAIoAAAABAPMCxgABAFQAAAABAJMCxgABAS0AAAABAIgBYwABAW0C6QABAW0AAAABAa4C6QABAa4AAAABAa4BdQABAZwCxgABAZwAAAABAZwBYwABAUMC6QABAUMAAAABAW0C6QABAW0AAAABAUsC6QABAUsAAAABARsC6QABARsAAAABARsBdQABARsCIgABAREAAAABAR8CIgABATUAAAABASgCIgABATAAAAABAH0BZwABAVcCIgABAScAAAABATgCIgABATgAAAABATgBEQABAQECIgABAQEAAAABAQ///gABAScCIgABAScAAAABAb4CIgABAb4AAAABASECIgABASEAAAABAP4CIgABAP4AAAABAP4BEQABAWoC6QABAWoAAAABAWoC6QABAWoAAAABAWoC6QABAWoAAAABAWoC6QABAWoAAAABAWoC6QABAWoAAAABAWoC6QABAWoAAAABAZsC6QABAZwAAAABAS0C6QABAS0AAAABAS0C6QABAS0AAAABAS0C6QABAS0AAAABAS0C6QABAS0AAAABAIoC6QABAIoAAAABAIoC6QABAIoAAAABAIoC6QABAIoAAAABAIoC6QABAIoAAAABAW0C6QABAW0AAAABAa4C6QABAa4AAAABAa4BdQABAa4C6QABAa4AAAABAa4BdQABAa4C6QABAa4AAAABAa4BdQABAa4C6QABAa4AAAABAa4BdQABAa4C6QABAa4AAAABAa4BdQABAa4C6QABAa4AAAABAa4BdQABAW0C6QABAW0AAAABAW0C6QABAW0AAAABAW0C6QABAW0AAAABAW0C6QABAW0AAAABAUsC6QABAUsAAAABARsCIgABAREAAAABARsCIgABAREAAAABARsCIgABAREAAAABARsCIgABAREAAAABARsCIgABAREAAAABARsCIgABAREAAAABAR8CIgABATUAAAABASgCIgABATAAAAABASgCIgABATAAAAABASgCIgABATAAAAABASgCIgABATAAAAABAJECIgABAJEAAAABAJECIgABAJEAAAABAJECIgABAJEAAAABAJECIgABAJEAAAABAVcCIgABAScAAAABATgCIgABATgAAAABATgBEQABATgCIgABATgAAAABATgBEQABATgCIgABATgAAAABATgBEQABATgCIgABATgAAAABATgBEQABATgCIgABATgAAAABATgBEQABATgCIgABATgAAAABATgBEQABAScCIgABAScAAAABAScCIgABAScAAAABAScCIgABAScAAAABAScCIgABAScAAAABASECIgABASEAAAABASECIgABASEAAAABAJECIgABAJEAAAABAUMC6QABAUMAAAABAQECIgABAQEAAAABAUsC6QABAUsAAAABARsC6QABARsAAAABARsBdQABAP4CIgABAP4AAAABAP4BEQABAXMC6QABAlwAAAABAZsCxgABAZoAAAABAZoCxgABAZoAAAABAT8CxgABAT8AAAABAd0CxgABAT4AAAABAZsCxgABAZsAAAABAZsBYwABAV4CxgABAV4AAAABAT8CCAABANUAAAACACAAJgAmAAAAKAAqAAEALAAvAAQAMQAxAAgAMwA0AAkANgA2AAsAOAA4AAwAOgA6AA0APgA/AA4ARgBGABAASABIABEASgBKABIAUQBRABMAUwBUABQAWABaABYAXABcABkAXgBfABoAhACJABwAiwCTACIAlQCaACsAnAChADEApACpADcAqwCzAD0AtQC6AEYAvADBAEwAwwDEAFIAyQDNAFQBJQElAFkBKAErAFoBLQEtAF4BLwEvAF8BQAFAAGAAAgACANcA5gAAAWcBZwAQABEAAABGAAAATAAAAFIAAABYAAAAXgAAAGQAAABqAAAAcAAAAHYAAAB8AAAAggABAIgAAQCOAAEAlAACAJoAAgCgAAIApgABAKMCGgABAEkCGgABAMoCGgABAOMCGgABAJ4CGgABALMCGgABAGQCGgABAM4CGgABAIwCGgABAKICGgABAMoCGgABAKAAAAABAIwAAAABAKEABgABAPQBQgABAX0BQgABAMIBQgAAAAEAAAAA1aQnCAAAAADaUiqBAAAAANp2p3g=') format('truetype');
  font-weight: 700;
  font-style: normal;
  font-display: swap;
}
@font-face {
  font-family: 'Plusjakartadisplay';
  src: url('data:font/ttf;charset=utf-8;base64,AAEAAAAPAIAAAwBwRkZUTYps+NgAAIwIAAAAHEdERUYHNQg7AABt6AAAAEJHUE9Tg6CHpgAAdNgAABcuR1NVQlbKuhQAAG4sAAAGqk9TLzJ9/U0KAAABeAAAAGBjbWFwLl45sgAAB3wAAAPWZ2FzcP//AAMAAG3gAAAACGdseWai0C02AAAOLAAAULxoZWFkGDMV2QAAAPwAAAA2aGhlYQh9Am4AAAE0AAAAJGhtdHjob0IPAAAB2AAABaJsb2Nh41bQAAAAC1QAAALWbWF4cAF6AK0AAAFYAAAAIG5hbWXbNqLqAABe6AAACARwb3N0gZi2ygAAZuwAAAbxAAEAAAABAAAWEUC+Xw889QALA+gAAAAA2lIqgQAAAADadqdO/5j/EASzBBUAAAAIAAIAAAAAAAAAAQAABC//IQAABOv/mPz6BLMAAQAAAAAAAAAAAAAAAAAAAWcAAQAAAWoAWAAHAFIABQABAAAAAAAAAAAAAAAAAAMAAgAEAjkBkAAFAAACigJYAAAASwKKAlgAAAFeAEIBPgAAAAAAAAAAAAAAAIAAAO9QACBbAAAAAAAAAABUT0tPAMAADfsCBC//IQAABC8A8CAAAAEAAAAAAhIC6QAAACAAAwKAADwAAAAAAU0AAAAAAAAArAAAAKwAAAEWAFwB0ABhAwkAFgJ5ACkEEABgA24AWwEcAGEBfABmAXwAJQHrADkCYgBbAT4AVwIgAFcBIABhAc4ADALLAD4BmAAcAlQALgJcAC0CigAmAmcALQJGAC4CEAAjAngAOAJGAC4BIABhAUwAYQI+AEsCjgB0AioASwI5ADkDsQA2ArMAFQKgAEwC/gAzAucATAJoAEwCVgBMAxIAMwLQAEwA9wBMAV4AGgKPAEwCGgBMA0QATALSAEwDWQAzAn8ATANZADMCmABMAnkAKQIxAB8CugBMAq4AFQQKAB8CfgAfAo0AFQJPABoBdwBmAc4ADAF3ADkCXQBbAdoABwDLABQCCgAkAoQAQgIoACQChAAkAjcAJAFrABACcQAkAi0AQgDKADoAwP+zAfkAQgDaAEIDcABCAi0AQgJqACQChABCAoQAJAFpAEIB2AAcAXkAEgItADgCGAAQAzYAEAIKABUCLAAQAbUADAFxADQBWgB+AXEAJQKmAG8ArAAAARYAXAIwACQDEABvAoAATAKNABUBWgB+Am0AZQFWABQDwQBgAZEAJAKDADkCbABgAiAAVwPBAGABDQAUAgIAYAJiAFsBkgAuAZwALQDLABQCIwA4AZQAOQEgAGEBDgAUAU8AHAHQACQCgwBNA9sAHAO1ABwEJwAtAjkAQwKzABUCswAVArMAFQKzABUCswAVArMAFQPjABUC/gAzAmgATAJoAEwCaABMAmgATAD3//4A9wBMAPf/3wD3/+UC5//XAtIATANZADMDWQAzA1kAMwNZADMDWQAzAkwAWwNZADMCugBMAroATAK6AEwCugBMAo0AFQJ/AEwCUgBMAgoAJAIKACQCCgAkAgoAJAIKACQCCgAkA54AJAIoACQCNwAkAjcAJAI3ACQCNwAkAPL//ADyAE4A8v/dAPL/4gJoACQCLQBCAmoAJAJqACQCagAkAmoAJAJqACQClgBgAmr/+QItADgCLQA4Ai0AOAItADgCLAAQAoQAQgIsABAA8gBOAhr/vwDa/+AE6wAzBAYAJAJ5ACkB2AAcAo0AFQJPABoBtQAMAnYAGQFiABQBYgAUAUMAFACjABQA9QAUAQ4AFAF1ABQBYgAUAAAAFAAAABQAAAAUAAAAFAAAABQAAAAUAAAAFAAAABQAAAAUAAAAFAAAABQAAAAUAAAAFAAAABQAAAAUAAAAFAJ0ABUDkgAzAoQAEgJiAFcDXwBXAT4AVwE+AFcBPgBXAfUAVwH1AFcB9QBXAtwAYALcAGABrgBhA3gAYQTDAGABhwA5AYcATQDU/5gB4wA+AbgAJgGeAC0BkQAuAWUAIwGyADgBkQAuAeMAPgFPABwBkgAuAZwALQG4ACYBngAtAZEALgFlACMBsgA4AZEALgMhAHQDOgAkAhQACQRNAFsDNgAkA9UAHAQhAC0EJAAtA+sAIwJlAB4DPQBIAjwAQQKUAHQBugAMAesAYQMrAFYDUABqAbYAGQLaAHQCjgB0Am4ASwJaAEsCrQBIAlgAMgI1ABACRQAQArsAGQKwAEwCnABMAxoAMwMmADMBiwAoAjgAHAK5AEwDVgAzAqcATAKcAEwCHgAkAj0AJAFjABACcQAkAhwAQgDsABIAuv+zAfkAQgEEAEIDcABCA3AAQgImAEICHABCAqUAGgKlACQBaQBCAZIAGgGPABICHAA4AhwAOAIG//4CKwAQAlgAEQGYABwCWAAvAlgALwJYAC8CWAArAlgAEwJYACcCWAA1AlgAPwJYACsCWAA1AeMAPgFPABwBkgAuAZwALQG4ACYBngAtAZEALgFlACMBsgA4AZEALgHjAD4BTwAcAZIALgGcAC0BuAAmAZ4ALQGRAC4BZQAjAbIAOAGRAC4AAAAUABQAFAAUAAAAAAADAAAAAwAAABwAAQAAAAABzAADAAEAAAAcAAQBsAAAAGgAQAAFACgAAAANAH4A/wExAUIBUwFhAXgBfgGSAscC3QMEAwgDDAMoAzYDlAOpA8AgFCAaIB4gIiAmIDAgOiBEIHAgeSCJIKQgrCETISIhLiFeIgIiDyISIhUiGiIeIisiSCJgImUlyvj/+wL//wAAAAAADQAgAKABMQFBAVIBYAF4AX0BkgLGAtgDAAMGAwoDJgM1A5QDqQPAIBMgGCAcICAgJiAwIDkgRCBwIHQggCCkIKwhEyEiIS4hWyICIg8iESIVIhkiHiIrIkgiYCJkJcr4//sB//8AA//3/+X/xP+T/4T/df9p/1P/T/88/gn9+f3X/db91f28/bD9U/0//Sng1+DU4NPg0uDP4MbgvuC14Irgh+CB4GfgYN/63+zf4d+13xLfBt8F3wPfAN793vHe1d6+3rvbVwgjBiIAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAYCCgAAAAABAAADAAAAAAAAAAAAAAAAAAAAAQACAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAAABQAGAAcACAAJAAoACwAMAA0ADgAPABAAEQASABMAFAAVABYAFwAYABkAGgAbABwAHQAeAB8AIAAhACIAIwAkACUAJgAnACgAKQAqACsALAAtAC4ALwAwADEAMgAzADQANQA2ADcAOAA5ADoAOwA8AD0APgA/AEAAQQBCAEMARABFAEYARwBIAEkASgBLAEwATQBOAE8AUABRAFIAUwBUAFUAVgBXAFgAWQBaAFsAXABdAF4AXwBgAGEAYgBjAAAAiACJAIsAjQCVAJoAoAClAKQApgCoAKcAqQCrAK0ArACuAK8AsQCwALIAswC1ALcAtgC4ALoAuQC+AL0AvwDAAPIAdABmAGcAawD0AHoAowByAG0BDgB4AGwBHgCKAJwBGwB1AR8BIABpAHkBFAEWARUA6QEcAG4AfgDoAKoAvACDAGUAcAEaAM4BHQAAAG8AfwD1AGQAhACHAJkAxwDIAOoA6wDvAPAA7ADtALsBIQDDAMsA+QEMAPcA+AEjASQA8wB7AO4A8QD2AIYAjgCFAI8AjACRAJIAkwCQAJcAmAEiAJYAngCfAJ0AxADPANUAcwDRANIA0wB8ANYA1ADQAAAAAAAgACAAIAAgACAAIAA0AEgAeADKASYBfgGMAaIBuAHWAeoB+AIEAhACHgJQAl4CiAK4AtQDBgM+A1ADogPaA+wEAAQUBCgEOgRwBNYE8AUiBVYFegWQBaQF3AX0BgAGFgYwBkAGXAZ0BqoGzgcOBzYHeAeKB64HwgfeB/oIEggoCDoISghcCG4IegiCCMAI9gkoCV4Jlgm8CgQKJgo6Cl4KdgqCCrYK2AsKC0ALeAuQC8wL9gwYDCoMRgxgDIgMngzQDN4NEA02DTYNSg2GDbAN/A4gDjQOiA6QDvAPKA9CD1IPXg+2D74P6hAGEC4QXhBmEIgQoBCsELQQxBDwEQoRGhEqEToRcBF8EYgRlBGgEawRuBHcEegR9BIAEgwSGBIkEjASPBJIEnQSgBKMEpgSpBKwErwS1hLiEu4S+hMGExITHhNCE3oThhOSE54TqhO2E8IULhQ6FEYUUhReFGoUdhSCFI4UmhTsFPgVBBUQFRwVKBU0FU4VWhVmFXIVfhWKFZYVzBXYFeQV/hYWFlgWuBbEFtAW3BboFvQXLBc0FzwXRBdMF1QXXBdkF2wXeheIF5oXvhfKF+YX/BgiGEgYXBhuGHwYnhi+GMwY2hjyGSwZQhlOGVoZaBl2GYQZmhmwGcYZ3Bn6GhAaJhqqGroayhrYGwQbHhtMG34bkBvWHAgcNBxCHGgcmByyHOAdEh0kHWodmh3OHhYeZB6IHtYe5h72HwYfFh9YH24fiB+WH6QfwB/WIC4gXCCgIMAg2iD0IRAhOiFGIVIhbiGGIZwh1iIQIiYiRiJuIrAi3iLwIx4jXiN0I7QjyCPeI/QkDiQcJDQkVCRmJIAkuCTyJQIlICU2JUglaiWCJZglyiXaJfAmBCYuJmAmfCawJugm+idMJ4IniieSJ5onoieqJ7InuifCJ8on0ifa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ASMAz///ABUAAAKeA+kSJgAmAAAQBwDZAKoAz///ABUAAAKeA7wSJgAmAAAQBwDaAKAAz///ABUAAAKeA8oSJgAmAAAQBwDeAK8Az///ABUAAAKeBBUSJgAmAAAQBwDfAOAAzwACABUAAAOrAukADwATAAAzASEVIRUhFSEVIRUhNSEHEzMRIxUBDgKI/nsBcf6PAYX+HP7wPlvzZgLpU/dT+VOysgEFAZEAAP//ADP/MQLQAvUSJgAoAAAQBwDjAS0AAP//AEwAAAIwA+kSJgAqAAAQBwDXAKMAz///AEwAAAIwA+kSJgAqAAAQBwDYAP4Az///AEwAAAIwA+kSJgAqAAAQBwDZAIQAz///AEwAAAIwA8oSJgAqAAAQBwDeAIkAz/////4AAACrA+kSJgAuAAAQBwDX/+oAz///AEwAAAD8A+kSJgAuAAAQBwDYAEUAz////98AAAEZA+kSJgAuAAAQBwDZ/8sAz////+UAAAETA8oSJgAuAAAQBwDe/9EAzwAC/9cAAAK0AukADgAdAAAzESM1MxEzMh4BFRQOASMnMzI+ATU0LgErARUzFSNMdXX1cKdcXKdwlpZTe0NEelOWw8MBTFIBS1yocHCoXVNIglhXgkj4UgD//wBMAAAChgO8EiYAMwAAEAcA2gCvAM///wAz//QDJgPpEiYANAAAEAcA1wEbAM///wAz//QDJgPpEiYANAAAEAcA2AF2AM///wAz//QDJgPpEiYANAAAEAcA2QD8AM///wAz//QDJgO8EiYANAAAEAcA2gDyAM///wAz//QDJgPKEiYANAAAEAcA3gECAM8AAQBbAKcB8QI9AAsAADcnNyc3FzcXBxcHJ5c8j448jo49j488j6c8j488j488j488jwAA//8AM//0AyYC9RImADQAABAGAWkfeAAA//8ATP/0Am4D6RImADoAABAHANcAzADP//8ATP/0Am4D6RImADoAABAHANgBJgDP//8ATP/0Am4D6RImADoAABAHANkArQDP//8ATP/0Am4DyhImADoAABAHAN4AsgDP//8AFQAAAngD6RImAD4AABAHANgBEADPAAIATAAAAlYC6QAOABcAADMRMxUzMh4BFRQOASsBFTUzMjY1NCYrAUxfq0x0QEB0TKurR1dXR6sC6Y05Z0ZGZziR5FBDQVEAAAEATP9gAiwC6QAn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cgAAUGx1cyBKYWthcnRhIERpc3BsYXkgUmVndWxhcgAAVgBlAHIAcwBpAG8AbgAgADEALgAwADAAMAAAVmVyc2lvbiAxLjAwMAAAUABsAHUAcwBKAGEAawBhAHIAdABhAEQAaQBzAHAAbABhAHkALQBSAGUAZwB1AGwAYQByAABQbHVzSmFrYXJ0YURpc3BsYXktUmVndWxhcgAAVABvAGsAbwB0AHkAcABlACAAUwB0AHUAZABpAG8AAFRva290eXBlIFN0dWRpbwAARwB1AG0AcABpAHQAYQAgAFIAYQBoAGEAeQB1AABHdW1waXRhIFJhaGF5dQAAVABoAGkAcwAgAGMAdQBzAHQAbwBtACAAZgBvAG4AdAAgAGgAYQBzACAAYgBlAGUAbgAgAGQAZQBzAGkAZwBuAGUAZAAgAGYAbwByACAAKwBKAGEAawBhAHIAdABhACAAQwBpAHQAeQAgAEIAcgBhAG4AZABpAG4AZwAgADIAMAAyADAALgAAVGhpcyBjdXN0b20gZm9udCBoYXMgYmVlbiBkZXNpZ25lZCBmb3IgK0pha2FydGEgQ2l0eSBCcmFuZGluZyAyMDIwLgAAaAB0AHQAcABzADoALwAvAHcAdwB3AC4AdABvAGsAbwB0AHkAcABlAGYAYQBjAGUAcwAuAGMAbwBtAABodHRwczovL3d3dy50b2tvdHlwZWZhY2VzLmNvbQAAaAB0AHQAcABzADoALwAvAHcAdwB3AC4AdABvAGsAbwB0AHkAcABlAGYAYQBjAGUAcwAuAGMAbwBtAABodHRwczovL3d3dy50b2tvdHlwZWZhY2VzLmNvbQAAVABoAGkAcwAgAEYAbwBuAHQAIABTAG8AZgB0AHcAYQByAGUAIABpAHMAIABsAGkAYwBlAG4AcwBlAGQAIAB1AG4AZABlAHIAIAB0AGgAZQAgAFMASQBMACAATwBwAGUAbgAgAEYAbwBuAHQAIABMAGkAYwBlAG4AcwBlACwAIABWAGUAcgBzAGkAbwBuACAAMQAuADEALgAgAFQAaABpAHMAIABsAGkAYwBlAG4AcwBlACAAaQBzACAAYQB2AGEAaQBsAGEAYgBsAGUAIAB3AGkAdABoACAAYQAgAEYAQQBRACAAYQB0ADoAIABoAHQAdABwADoALwAvAHMAYwByAGkAcAB0AHMALgBzAGkAbAAuAG8AcgBnAC8ATwBGAEwAAFRoaXMgRm9udCBTb2Z0d2FyZSBpcyBsaWNlbnNlZCB1bmRlciB0aGUgU0lMIE9wZW4gRm9udCBMaWNlbnNlLCBWZXJzaW9uIDEuMS4gVGhpcyBsaWNlbnNlIGlzIGF2YWlsYWJsZSB3aXRoIGEgRkFRIGF0OiBodHRwOi8vc2NyaXB0cy5zaWwub3JnL09GTAAAaAB0AHQAcAA6AC8ALwBzAGMAcgBpAHAAdABzAC4AcwBpAGwALgBvAHIAZwAvAE8ARgBMAABodHRwOi8vc2NyaXB0cy5zaWwub3JnL09GTAAAAgAAAAAAAP7iAEIAAAAAAAAAAAAAAAAAAAAAAAAAAAFqAAAAAQACAQIBAwADAAQABQAGAAcACAAJAAoACwAMAA0ADgAPABAAEQASABMAFAAVABYAFwAYABkAGgAbABwAHQAeAB8AIAAhACIAIwAkACUAJgAnACgAKQAqACsALAAtAC4ALwAwADEAMgAzADQANQA2ADcAOAA5ADoAOwA8AD0APgA/AEAAQQBCAEMARABFAEYARwBIAEkASgBLAEwATQBOAE8AUABRAFIAUwBUAFUAVgBXAFgAWQBaAFsAXABdAF4AXwBgAGEBBACjAIQAhQC9AJYA6ACGAI4AiwCdAKkApAEFAIoA2gCDAJMBBgEHAI0BCACIAMMA3gEJAJ4AqgD1APQA9gCiAK0AyQDHAK4AYgBjAJAAZADLAGUAyADKAM8AzADNAM4A6QBmANMA0ADRAK8AZwDwAJEA1gDUANUAaADrAO0AiQBqAGkAawBtAGwAbgCgAG8AcQBwAHIAcwB1AHQAdgB3AOoAeAB6AHkAewB9AHwAuAChAH8AfgCAAIEA7ADuALoA1wDiAOMAsACxAOQA5QC7AOYA5wCmANgA4QDbANwA3QDgANkA3wEKAQsBDAENAQ4BDwEQAREBEgETARQBFQEWARcBGAEZARoBGwCbALIAswC2ALcAxAC0ALUAxQCCAMIAhwCrAMYAvgC/ALwBHAEdAR4BHwEgASEBIgEjASQBJQEmAScBKAEpASoBKwEsAS0BLgEvAIwBMAExATIBMwE0AJgAmgCZAO8BNQE2AKUAkgCcAKcAjwCUAJUAuQE3AMAAwQE4ATkBOgE7ATwBPQE+AT8BQAFBAUIBQwFEAUUBRgFHAUgBSQFKAUsBTAFNAU4BTwFQAVEBUgFTAVQBVQFWAVcBWAFZAVoBWwFcAV0BXgFfAWABYQFiAWMBZAFlAWYBZwFoAWkBagFrAWwBbQFuAW8BcAFxAXIBcwF0AXUBdgF3AXgBeQF6AXsBfAROVUxMAkNSB3VuaTAwQTAHdW5pMDBBRAd1bmkwMEIyB3VuaTAwQjMHdW5pMDBCNQd1bmkwMEI5CWdyYXZlY29tYglhY3V0ZWNvbWIHdW5pMDMwMgl0aWxkZWNvbWIHdW5pMDMwNAd1bmkwMzA2B3VuaTAzMDcHdW5pMDMwOAd1bmkwMzBBB3VuaTAzMEIHdW5pMDMwQwd1bmkwMzI2B3VuaTAzMjcHdW5pMDMyOAd1bmkwMzM1B3VuaTAzMzYHdW5pMDM5NAd1bmkwM0E5B3VuaTIwNzAHdW5pMjA3NAd1bmkyMDc1B3VuaTIwNzYHdW5pMjA3Nwd1bmkyMDc4B3VuaTIwNzkHdW5pMjA4MAd1bmkyMDgxB3VuaTIwODIHdW5pMjA4Mwd1bmkyMDg0B3VuaTIwODUHdW5pMjA4Ngd1bmkyMDg3B3VuaTIwODgHdW5pMjA4OQRsaXJhBEV1cm8HdW5pMjExMwllc3RpbWF0ZWQJb25lZWlnaHRoDHRocmVlZWlnaHRocwtmaXZlZWlnaHRocwxzZXZlbmVpZ2h0aHMHdW5pMjIxNQd1bmkyMjE5B3VuaUY4RkYGQS5zczAyBkUuc3MwMgZGLnNzMDIGRy5zczAyBkcuc3MwMwZJLnNzMDIGSi5zczAzBksuc3MwMwZRLnNzMDMGUi5zczAzBlUuc3MwMQZhLnNzMDEGYS5zczAyBmYuc3MwMQZnLnNzMDMGaC5zczAxBmkuc3MwMgZqLnNzMDEGay5zczAxBmwuc3MwMQZtLnNzMDIGbS5zczAzBm4uc3MwMQZuLnNzMDMGcC5zczAyBnEuc3MwMgZyLnNzMDEGci5zczAyBnQuc3MwMQZ1LnNzMDEGdS5zczAzBnkuc3MwMQZ5LnNzMDIHemVyby50ZghvbmUuc3MwMQtvbmUuc3MwMS50ZgZvbmUudGYGdHdvLnRmCHRocmVlLnRmB2ZvdXIudGYHZml2ZS50ZgZzaXgudGYIc2V2ZW4udGYIZWlnaHQudGYHbmluZS50Zgl6ZXJvLmRub20Ib25lLmRub20I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AAAAAAAAAAAAAAAA//YAAAAAAAAAAP/2AAAAAP/sAAAAAAAAAAD/2AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/s/+wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/2AAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP+S/+L/uv+c/7r/xAAA/84AAP/i/+IAAP/O/5z/7P/E/84AAAAA/9gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/4gAAAAAAAAAAAAAAAP/2AAAAAAAAAAAAAAAA/9gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/9gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/2AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/mAAAAAAAAAAAAAAAAAAD/4gAAAA4AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/7AAAAAAAAAAAAAD/9gAAAAAAAP/i/+wAAP/sAAD/7AAA//YAAAAA/+z/2AAA/+wAAP/2/+z/9v/sAAAAAP/sAAAAAP/i/8QAAAAAAAD/sAAAAAD/7AAA/+wAAAAAAAAAAAAA/9gAAAAA/+wAAAAAAAAAAP/s/9gAAP/i/+L/pgAAAAAAAP/E/8T/uv+6AAAAAP/s/+IAAP/2AAAAAAAA/+IAAP/s/9gAAAAA//b/9v/O/9gAAAAAAAAAAAAAAAAAAAAA/+wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/2//b/4v/Y/87/4gAA/9j/2AAAAAAAAP/s/9gAAAAA/+IAAAAAAAAAAP/2AAAAAP/2//YAAAAAAAAAAAAAAAD/9gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/2AAAAAAAAAAA//b/9v/sAAAAAP/2AAAAAP/sAAAAAAAAAAD/2AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/i/+z/2P/Y/9j/4gAA//YAAP/2AAAAAP/s/87/9gAAAAAAAAAAAAAAAP+6/+L/xP+6/87/xAAA/9j/wP/i/+wAAP/O/7AAAP/E/84AAAAA/+IAAgBIACYAJgAEACcAJwAZACgAKAAYACsAKwAXACwALAAMAC8ALwAWADAAMAAVADEAMQAUADUANQATADcANwASADgAOAARADkAOQAcADoAOgAHADwAPAAbAD4APgALAEYARgADAEcARwABAEgASAAKAEoASgAFAEsASwAQAE0ATQACAFAAUAAPAFIAUwACAFQAVQABAFcAVwAJAFkAWQAIAFsAWwAGAFwAXAAaAF4AXgAGAGYAZgAKAIQAiQAEAIsAiwAYAJ0AoAAHAKEAoQALAKIAogATAKMAowAZAKQAqQADAKoAqgAFAKsAqwAKAKwArwAFALQAtAABALUAtQACALYAugABALwAvAABAMEAwQAGAMMAwwAGAMUAxQAUAMgAyAAFAMkAyQARAMsAywALAOcA5wAEAOkA6QAIAOwA7AAOAO0A7QANAO8A7wAOAPAA8AANASUBJQAEAScBJwAXASgBKQAMASsBKwAWASwBLAAVAS4BLgASAS8BLwAHATABMQADATIBMgAQATQBNAACATcBNwAPATkBPAACAT0BPQABAT8BQAAJAUEBQQAIAUQBRQAGAAIARgARABEACQATABMACQAmACYABQAoACgAAgAsACwAAgAvAC8AFAA0ADQAAgA2ADYAAgA4ADgADwA5ADkAEwA6ADoABwA8ADwAEgA+AD4ADABGAEYABABIAEoAAQBLAEsACgBMAEwAAQBSAFMAAwBUAFQAAQBVAFUAAwBWAFYAAQBXAFcAAwBYAFgADgBZAFkACwBaAFoABgBbAFsAEQBcAFwAEABeAF4ACABfAF8ADQCEAIoABQCLAIsAAgCWAJoAAgCcAJwAAgCdAKAABwChAKEADACkAKoABACrAK8AAQC0ALQAAQC1ALUAAwC2ALoAAQC8ALwAAQC9AMAABgDBAMEACADDAMMACADHAMcAAgDIAMgAAQDJAMkADwDKAMoADgDLAMsADADNAM0ADQDnAOcABQDoAOgAAgDpAOkACwDuAO4ACQDxAPEACQD1APUACQEjASQACgElASUABQEoASkAAgEtAS0AAgEvAS8ABwEwATEABAEy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') format('truetype');
  font-weight: 400;
  font-style: normal;
  font-display: swap;
}
</style>
  <style type="text/css">
*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block;
}



[tabindex="-1"]:focus:not(:focus-visible) {
  outline: 0 !important;
}

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
  -webkit-text-decoration-skip-ink: none;
  text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
}

a:hover {
  color: #0056b3;
  text-decoration: underline;
}

a:not([href]):not([class]) {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 1em;
}

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar;
}

figure {
  margin: 0 0 1rem;
}

img {
  vertical-align: middle;
  border-style: none;
}

svg {
  overflow: hidden;
  vertical-align: middle;
}

table {
  border-collapse: collapse;
}

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom;
}

th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}

label {
  display: inline-block;
  margin-bottom: 0.5rem;
}

button {
  border-radius: 0;
}

button:focus:not(:focus-visible) {
  outline: 0;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

[role="button"] {
  cursor: pointer;
}

select {
  word-wrap: normal;
}

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
  cursor: pointer;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0;
}

textarea {
  overflow: auto;
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}

progress {
  vertical-align: baseline;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

summary {
  display: list-item;
  cursor: pointer;
}

template {
  display: none;
}

[hidden] {
  display: none !important;
}

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2;
}

h1, .h1 {
  font-size: 2.5rem;
}

h2, .h2 {
  font-size: 2rem;
}

h3, .h3 {
  font-size: 1.75rem;
}

h4, .h4 {
  font-size: 1.5rem;
}

h5, .h5 {
  font-size: 1.25rem;
}

h6, .h6 {
  font-size: 1rem;
}

.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2;
}

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

small,
.small {
  font-size: 80%;
  font-weight: 400;
}

mark,


code {
  font-size: 87.5%;
  color: #e83e8c;
  word-wrap: break-word;
}

a > code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem;
}

kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: 700;
}

pre {
  display: block;
  font-size: 87.5%;
  color: #212529;
}

pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}









.order-first {
  order: -1;
}

.order-last {
  order: 13;
}

.order-0 {
  order: 0;
}

.order-1 {
  order: 1;
}

.order-2 {
  order: 2;
}

.order-3 {
  order: 3;
}

.order-4 {
  order: 4;
}

.order-5 {
  order: 5;
}

.order-6 {
  order: 6;
}

.order-7 {
  order: 7;
}

.order-8 {
  order: 8;
}

.order-9 {
  order: 9;
}

.order-10 {
  order: 10;
}

.order-11 {
  order: 11;
}

.order-12 {
  order: 12;
}

.offset-1 {
  margin-left: 8.333333%;
}

.offset-2 {
  margin-left: 16.666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.333333%;
}

.offset-5 {
  margin-left: 41.666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.333333%;
}

.offset-8 {
  margin-left: 66.666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.333333%;
}

.offset-11 {
  margin-left: 91.666667%;
}

@media (min-width: 576px) {
  .col-sm {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-sm-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-sm-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-sm-3 > * {
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .row-cols-sm-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-sm-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-sm-6 > * {
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-sm-1 {
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-sm-2 {
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-sm-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-sm-4 {
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-sm-5 {
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-sm-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-sm-7 {
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-sm-8 {
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-sm-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-sm-10 {
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-sm-11 {
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-sm-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-sm-first {
    order: -1;
  }
  .order-sm-last {
    order: 13;
  }
  .order-sm-0 {
    order: 0;
  }
  .order-sm-1 {
    order: 1;
  }
  .order-sm-2 {
    order: 2;
  }
  .order-sm-3 {
    order: 3;
  }
  .order-sm-4 {
    order: 4;
  }
  .order-sm-5 {
    order: 5;
  }
  .order-sm-6 {
    order: 6;
  }
  .order-sm-7 {
    order: 7;
  }
  .order-sm-8 {
    order: 8;
  }
  .order-sm-9 {
    order: 9;
  }
  .order-sm-10 {
    order: 10;
  }
  .order-sm-11 {
    order: 11;
  }
  .order-sm-12 {
    order: 12;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.333333%;
  }
  .offset-sm-2 {
    margin-left: 16.666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.333333%;
  }
  .offset-sm-5 {
    margin-left: 41.666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.333333%;
  }
  .offset-sm-8 {
    margin-left: 66.666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.333333%;
  }
  .offset-sm-11 {
    margin-left: 91.666667%;
  }
}






.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
}

.table th,
.table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}

.table tbody + tbody {
  border-top: 2px solid #dee2e6;
}

.table-sm th,
.table-sm td {
  padding: 0.3rem;
}

.table-bordered {
  border: 1px solid #dee2e6;
}

.table-bordered th,
.table-bordered td {
  border: 1px solid #dee2e6;
}

.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
  color: #212529;
  background-color: rgba(0, 0, 0, 0.075);
}

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #b8daff;
}

.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody + tbody {
  border-color: #7abaff;
}

.table-hover .table-primary:hover {
  background-color: #9fcdff;
}

.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
  background-color: #9fcdff;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #d6d8db;
}

.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody + tbody {
  border-color: #b3b7bb;
}

.table-hover .table-secondary:hover {
  background-color: #c8cbcf;
}

.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
  background-color: #c8cbcf;
}

.table-success,
.table-success > th,
.table-success > td {
  background-color: #c3e6cb;
}

.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody + tbody {
  border-color: #8fd19e;
}

.table-hover .table-success:hover {
  background-color: #b1dfbb;
}

.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
  background-color: #b1dfbb;
}

.table-info,
.table-info > th,
.table-info > td {
  background-color: #bee5eb;
}

.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody + tbody {
  border-color: #86cfda;
}

.table-hover .table-info:hover {
  background-color: #abdde5;
}

.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
  background-color: #abdde5;
}

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #ffeeba;
}

.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody + tbody {
  border-color: #ffdf7e;
}

.table-hover .table-warning:hover {
  background-color: #ffe8a1;
}

.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
  background-color: #ffe8a1;
}

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #f5c6cb;
}

.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody + tbody {
  border-color: #ed969e;
}

.table-hover .table-danger:hover {
  background-color: #f1b0b7;
}

.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
  background-color: #f1b0b7;
}

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe;
}

.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody + tbody {
  border-color: #fbfcfc;
}

.table-hover .table-light:hover {
  background-color: #ececf6;
}

.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
  background-color: #ececf6;
}

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c6c8ca;
}

.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody + tbody {
  border-color: #95999c;
}

.table-hover .table-dark:hover {
  background-color: #b9bbbe;
}

.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
  background-color: #b9bbbe;
}

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
  background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th {
  color: #fff;
  background-color: #343a40;
  border-color: #454d55;
}

.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.table-dark {
  color: #fff;
  background-color: #343a40;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #454d55;
}

.table-dark.table-bordered {
  border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-sm > .table-bordered {
    border: 0;
  }
}

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-md > .table-bordered {
    border: 0;
  }
}

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-lg > .table-bordered {
    border: 0;
  }
}

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-xl > .table-bordered {
    border: 0;
  }
}

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

.table-responsive > .table-bordered {
  border: 0;
}

.form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}

.form-control:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #495057;
}

.form-control:focus {
  color: #495057;
  background-color: #fff;
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.form-control::-moz-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control:-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control:disabled, .form-control[readonly] {
  background-color: #e9ecef;
  opacity: 1;
}

input[type="date"].form-control,
input[type="time"].form-control,
input[type="datetime-local"].form-control,
input[type="month"].form-control {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

select.form-control:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}

.form-control-file,
.form-control-range {
  display: block;
  width: 100%;
}

.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5;
}

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.375rem 0;
  margin-bottom: 0;
  font-size: 1rem;
  line-height: 1.5;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}

.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.form-control-lg {
  height: calc(1.5em + 1rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

select.form-control[size], select.form-control[multiple] {
  height: auto;
}

textarea.form-control {
  height: auto;
}

.form-group {
  margin-bottom: 1rem;
}

.form-text {
  display: block;
  margin-top: 0.25rem;
}

.form-row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}

.form-row > .col,
.form-row > [class*="col-"] {
  padding-right: 5px;
  padding-left: 5px;
}

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem;
}

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem;
}

.form-check-input[disabled] ~ .form-check-label,
.form-check-input:disabled ~ .form-check-label {
  color: #6c757d;
}

.form-check-label {
  margin-bottom: 0;
}

.form-check-inline {
  display: inline-flex;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #28a745;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(40, 167, 69, 0.9);
  border-radius: 0.25rem;
}

.form-row > .col > .valid-tooltip,
.form-row > [class*="col-"] > .valid-tooltip {
  left: 5px;
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control:valid, .form-control.is-valid {
  border-color: #28a745;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:valid:focus, .form-control.is-valid:focus {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .custom-select:valid, .custom-select.is-valid {
  border-color: #28a745;
  padding-right: calc(0.75em + 2.3125rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 0.75rem center/8px 10px no-repeat, #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem) no-repeat;
}

.was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #28a745;
}

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #28a745;
}

.was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
  border-color: #28a745;
}

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  border-color: #34ce57;
  background-color: #34ce57;
}

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #28a745;
}

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #28a745;
}

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #dc3545;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(220, 53, 69, 0.9);
  border-radius: 0.25rem;
}

.form-row > .col > .invalid-tooltip,
.form-row > [class*="col-"] > .invalid-tooltip {
  left: 5px;
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: #dc3545;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .custom-select:invalid, .custom-select.is-invalid {
  border-color: #dc3545;
  padding-right: calc(0.75em + 2.3125rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 0.75rem center/8px 10px no-repeat, #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e") center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem) no-repeat;
}

.was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545;
}

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #dc3545;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
  border-color: #dc3545;
}

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  border-color: #e4606d;
  background-color: #e4606d;
}

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #dc3545;
}

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #dc3545;
}

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline .form-check {
  width: 100%;
}

@media (min-width: 576px) {
  .form-inline label {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 0;
  }
  .form-inline .form-group {
    display: flex;
    flex: 0 0 auto;
    flex-flow: row wrap;
    align-items: center;
    margin-bottom: 0;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-plaintext {
    display: inline-block;
  }
  .form-inline .input-group,
  .form-inline .custom-select {
    width: auto;
  }
  .form-inline .form-check {
    display: flex;
    align-items: center;
    justify-content: center;
    width: auto;
    padding-left: 0;
  }
  .form-inline .form-check-input {
    position: relative;
    flex-shrink: 0;
    margin-top: 0;
    margin-right: 0.25rem;
    margin-left: 0;
  }
  .form-inline .custom-control {
    align-items: center;
    justify-content: center;
  }
  .form-inline .custom-control-label {
    margin-bottom: 0;
  }
}

.btn {
  display: inline-block;
  font-weight: 400;
  color: #212529;
  text-align: center;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}

.btn:hover {
  color: #212529;
  text-decoration: none;
}

.btn:focus, .btn.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.btn.disabled, .btn:disabled {
  opacity: 0.65;
}

.btn:not(:disabled):not(.disabled) {
  cursor: pointer;
}

a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none;
}

.btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
}

.btn-primary:focus, .btn-primary.focus {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #0062cc;
  border-color: #005cbf;
}

.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}

.btn-secondary {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-secondary:hover {
  color: #fff;
  background-color: #5a6268;
  border-color: #545b62;
}

.btn-secondary:focus, .btn-secondary.focus {
  color: #fff;
  background-color: #5a6268;
  border-color: #545b62;
  box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
}

.btn-secondary.disabled, .btn-secondary:disabled {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
.show > .btn-secondary.dropdown-toggle {
  color: #fff;
  background-color: #545b62;
  border-color: #4e555b;
}

.btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
}

.btn-success {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-success:hover {
  color: #fff;
  background-color: #218838;
  border-color: #1e7e34;
}

.btn-success:focus, .btn-success.focus {
  color: #fff;
  background-color: #218838;
  border-color: #1e7e34;
  box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
}

.btn-success.disabled, .btn-success:disabled {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}






.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}

.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}

.dropdown-menu-left {
  right: auto;
  left: 0;
}

.dropdown-menu-right {
  right: 0;
  left: auto;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 768px) {
  .dropdown-menu-md-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 992px) {
  .dropdown-menu-lg-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 1200px) {
  .dropdown-menu-xl-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-right {
    right: 0;
    left: auto;
  }
}

.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem;
}

.dropright .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}

.dropright .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-toggle::after {
  vertical-align: 0;
}

.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem;
}

.dropleft .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}

.dropleft .dropdown-toggle::after {
  display: none;
}

.dropleft .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
  right: auto;
  bottom: auto;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}

.dropdown-item:hover, .dropdown-item:focus {
  color: #16181b;
  text-decoration: none;
  background-color: #e9ecef;
}

.dropdown-item.active, .dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #007bff;
}

.dropdown-item.disabled, .dropdown-item:disabled {
  color: #adb5bd;
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #6c757d;
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #212529;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle;
}

.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  flex: 1 1 auto;
}

.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover {
  z-index: 1;
}

.btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
  z-index: 1;
}

.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}

.btn-toolbar .input-group {
  width: auto;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px;
}

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 0.5625rem;
  padding-left: 0.5625rem;
}

.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropright .dropdown-toggle-split::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}

.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
  width: 100%;
}

.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: -1px;
}

.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
  margin-bottom: 0;
}

.btn-group-toggle > .btn input[type="radio"],
.btn-group-toggle > .btn input[type="checkbox"],
.btn-group-toggle > .btn-group > .btn input[type="radio"],
.btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}

.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}

.input-group > .form-control,
.input-group > .form-control-plaintext,
.input-group > .custom-select,
.input-group > .custom-file {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
  margin-bottom: 0;
}

.input-group > .form-control + .form-control,
.input-group > .form-control + .custom-select,
.input-group > .form-control + .custom-file,
.input-group > .form-control-plaintext + .form-control,
.input-group > .form-control-plaintext + .custom-select,
.input-group > .form-control-plaintext + .custom-file,
.input-group > .custom-select + .form-control,
.input-group > .custom-select + .custom-select,
.input-group > .custom-select + .custom-file,
.input-group > .custom-file + .form-control,
.input-group > .custom-file + .custom-select,
.input-group > .custom-file + .custom-file {
  margin-left: -1px;
}

.input-group > .form-control:focus,
.input-group > .custom-select:focus,
.input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
  z-index: 3;
}

.input-group > .custom-file .custom-file-input:focus {
  z-index: 4;
}

.input-group > .form-control:not(:first-child),
.input-group > .custom-select:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group > .custom-file {
  display: flex;
  align-items: center;
}

.input-group > .custom-file:not(:last-child) .custom-file-label,
.input-group > .custom-file:not(:first-child) .custom-file-label {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group:not(.has-validation) > .form-control:not(:last-child),
.input-group:not(.has-validation) > .custom-select:not(:last-child),
.input-group:not(.has-validation) > .custom-file:not(:last-child) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group.has-validation > .form-control:nth-last-child(n + 3),
.input-group.has-validation > .custom-select:nth-last-child(n + 3),
.input-group.has-validation > .custom-file:nth-last-child(n + 3) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group-prepend,
.input-group-append {
  display: flex;
}

.input-group-prepend .btn,
.input-group-append .btn {
  position: relative;
  z-index: 2;
}

.input-group-prepend .btn:focus,
.input-group-append .btn:focus {
  z-index: 3;
}

.input-group-prepend .btn + .btn,
.input-group-prepend .btn + .input-group-text,
.input-group-prepend .input-group-text + .input-group-text,
.input-group-prepend .input-group-text + .btn,
.input-group-append .btn + .btn,
.input-group-append .btn + .input-group-text,
.input-group-append .input-group-text + .input-group-text,
.input-group-append .input-group-text + .btn {
  margin-left: -1px;
}

.input-group-prepend {
  margin-right: -1px;
}

.input-group-append {
  margin-left: -1px;
}

.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.375rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.input-group-text input[type="radio"],
.input-group-text input[type="checkbox"] {
  margin-top: 0;
}

.input-group-lg > .form-control:not(textarea),
.input-group-lg > .custom-select {
  height: calc(1.5em + 1rem + 2px);
}

.input-group-lg > .form-control,
.input-group-lg > .custom-select,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

.input-group-sm > .form-control:not(textarea),
.input-group-sm > .custom-select {
  height: calc(1.5em + 0.5rem + 2px);
}

.input-group-sm > .form-control,
.input-group-sm > .custom-select,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.input-group-lg > .custom-select,
.input-group-sm > .custom-select {
  padding-right: 1.75rem;
}

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group:not(.has-validation) > .input-group-append:not(:last-child) > .btn,
.input-group:not(.has-validation) > .input-group-append:not(:last-child) > .input-group-text,
.input-group.has-validation > .input-group-append:nth-last-child(n + 3) > .btn,
.input-group.has-validation > .input-group-append:nth-last-child(n + 3) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.custom-control {
  position: relative;
  z-index: 1;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem;
  -webkit-print-color-adjust: exact;
  color-adjust: exact;
}

.custom-control-inline {
  display: inline-flex;
  margin-right: 1rem;
}

.custom-control-input {
  position: absolute;
  left: 0;
  z-index: -1;
  width: 1rem;
  height: 1.25rem;
  opacity: 0;
}

.custom-control-input:checked ~ .custom-control-label::before {
  color: #fff;
  border-color: #007bff;
  background-color: #007bff;
}

.custom-control-input:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #80bdff;
}

.custom-control-input:not(:disabled):active ~ .custom-control-label::before {
  color: #fff;
  background-color: #b3d7ff;
  border-color: #b3d7ff;
}

.custom-control-input[disabled] ~ .custom-control-label, .custom-control-input:disabled ~ .custom-control-label {
  color: #6c757d;
}

.custom-control-input[disabled] ~ .custom-control-label::before, .custom-control-input:disabled ~ .custom-control-label::before {
  background-color: #e9ecef;
}

.custom-control-label {
  position: relative;
  margin-bottom: 0;
  vertical-align: top;
}

.custom-control-label::before {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  pointer-events: none;
  content: "";
  background-color: #fff;
  border: #adb5bd solid 1px;
}

.custom-control-label::after {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  content: "";
  background: 50% / 50% 50% no-repeat;
}

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  border-color: #007bff;
  background-color: #007bff;
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-radio .custom-control-label::before {
  border-radius: 50%;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-switch {
  padding-left: 2.25rem;
}

.custom-switch .custom-control-label::before {
  left: -2.25rem;
  width: 1.75rem;
  pointer-events: all;
  border-radius: 0.5rem;
}

.custom-switch .custom-control-label::after {
  top: calc(0.25rem + 2px);
  left: calc(-2.25rem + 2px);
  width: calc(1rem - 4px);
  height: calc(1rem - 4px);
  background-color: #adb5bd;
  border-radius: 0.5rem;
  transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .custom-switch .custom-control-label::after {
    transition: none;
  }
}

.custom-switch .custom-control-input:checked ~ .custom-control-label::after {
  background-color: #fff;
  transform: translateX(0.75rem);
}

.custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 0.75rem center/8px 10px no-repeat;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.custom-select:focus {
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-select:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}

.custom-select[multiple], .custom-select[size]:not([size="1"]) {
  height: auto;
  padding-right: 0.75rem;
  background-image: none;
}

.custom-select:disabled {
  color: #6c757d;
  background-color: #e9ecef;
}

.custom-select::-ms-expand {
  display: none;
}

.custom-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #495057;
}

.custom-select-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.875rem;
}

.custom-select-lg {
  height: calc(1.5em + 1rem + 2px);
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1.25rem;
}

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin-bottom: 0;
}

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin: 0;
  overflow: hidden;
  opacity: 0;
}

.custom-file-input:focus ~ .custom-file-label {
  border-color: #80bdff;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-file-input[disabled] ~ .custom-file-label,
.custom-file-input:disabled ~ .custom-file-label {
  background-color: #e9ecef;
}

.custom-file-input:lang(en) ~ .custom-file-label::after {
  content: "Browse";
}

.custom-file-input ~ .custom-file-label[data-browse]::after {
  content: attr(data-browse);
}

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  overflow: hidden;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.custom-file-label::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  display: block;
  height: calc(1.5em + 0.75rem);
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  content: "Browse";
  background-color: #e9ecef;
  border-left: inherit;
  border-radius: 0 0.25rem 0.25rem 0;
}

.custom-range {
  width: 100%;
  height: 1.4rem;
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.custom-range:focus {
  outline: 0;
}

.custom-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range:focus::-ms-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range::-moz-focus-outer {
  border: 0;
}

.custom-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .custom-range::-webkit-slider-thumb {
    -webkit-transition: none;
    transition: none;
  }
}

.custom-range::-webkit-slider-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.custom-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -moz-appearance: none;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .custom-range::-moz-range-thumb {
    -moz-transition: none;
    transition: none;
  }
}

.custom-range::-moz-range-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.custom-range::-ms-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: 0;
  margin-right: 0.2rem;
  margin-left: 0.2rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  -ms-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .custom-range::-ms-thumb {
    -ms-transition: none;
    transition: none;
  }
}

.custom-range::-ms-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-ms-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: transparent;
  border-color: transparent;
  border-width: 0.5rem;
}

.custom-range::-ms-fill-lower {
  background-color: #dee2e6;
  border-radius: 1rem;
}

.custom-range::-ms-fill-upper {
  margin-right: 15px;
  background-color: #dee2e6;
  border-radius: 1rem;
}

.custom-range:disabled::-webkit-slider-thumb {
  background-color: #adb5bd;
}

.custom-range:disabled::-webkit-slider-runnable-track {
  cursor: default;
}

.custom-range:disabled::-moz-range-thumb {
  background-color: #adb5bd;
}

.custom-range:disabled::-moz-range-track {
  cursor: default;
}

.custom-range:disabled::-ms-thumb {
  background-color: #adb5bd;
}

.custom-control-label::before,
.custom-file-label,
.custom-select {
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}



.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
}

.nav-link:hover, .nav-link:focus {
  text-decoration: none;
}

.nav-link.disabled {
  color: #6c757d;
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  border-bottom: 1px solid #dee2e6;
}

.nav-tabs .nav-link {
  margin-bottom: -1px;
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  border-color: #e9ecef #e9ecef #dee2e6;
}

.nav-tabs .nav-link.disabled {
  color: #6c757d;
  background-color: transparent;
  border-color: transparent;
}

.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #495057;
  background-color: #fff;
  border-color: #dee2e6 #dee2e6 #fff;
}

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  border-radius: 0.25rem;
}

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #007bff;
}

.nav-fill > .nav-link,
.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified > .nav-link,
.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center;
}

.tab-content > .tab-pane {
  display: none;
}

.tab-content > .active {
  display: block;
}

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 0.5rem 1rem;
}

.navbar .container,
.navbar .container-fluid, .navbar .container-sm, .navbar .container-md, .navbar .container-lg, .navbar .container-xl {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}

.navbar-brand {
  display: inline-block;
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap;
}

.navbar-brand:hover, .navbar-brand:focus {
  text-decoration: none;
}

.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}

.navbar-nav .dropdown-menu {
  position: static;
  float: none;
}

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.navbar-toggler:hover, .navbar-toggler:focus {
  text-decoration: none;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: 50% / 100% 100% no-repeat;
}

.navbar-nav-scroll {
  max-height: 75vh;
  overflow-y: auto;
}

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
}

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 768px) {
  .navbar-expand-md {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
}

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
}

@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
}

.navbar-expand {
  flex-flow: row nowrap;
  justify-content: flex-start;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
  padding-right: 0;
  padding-left: 0;
}

.navbar-expand .navbar-nav {
  flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}
.dropdown-menu.show{
  display: block;
}
.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
  flex-wrap: nowrap;
}

.navbar-expand .navbar-nav-scroll {
  overflow: visible;
}

.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}

.navbar-expand .navbar-toggler {
  display: none;
}

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}

.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1);
}

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-text a {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
  color: #fff;
}

.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
  color: #fff;
}

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff;
}

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-text a {
  color: #fff;
}

.navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
  color: #fff;
}





.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}


@media (min-width: 992px) {
  .my-lg-0 {
    margin: 0 !important;
  }
}

</style>
  <style type="text/css">
    .itemLogo[data-v-37dfd6fc] {
    width: 100%;
    text-align: left;
    /* padding-left: 45px; */
  }
  .myLogin[data-v-37dfd6fc] {
    display: flex;
    flex-wrap: wrap;
    background-color: #fff;
  }
  .myLogin .mt_3[data-v-37dfd6fc] {
    margin-top: 30px;
  }
  .myLogin .body[data-v-37dfd6fc] {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .myLogin .body .logoImg[data-v-37dfd6fc] {
    width: 135px;
  }
  .myLogin .body .item[data-v-37dfd6fc] {
    margin-bottom: 36px;
    display: flex;
    align-items: center;
  }
  .myLogin .body .item img[data-v-37dfd6fc] {
    width: 44px;
    height: 44px;
  }
  .myLogin .body .item span[data-v-37dfd6fc] {
    height: 21px;
    font-size: 18px;
    font-family: Montserrat-Regular, Montserrat;
    color: #ffffff;
    line-height: 22px;
  }
  .myLogin .body .centers[data-v-37dfd6fc] {
    text-align: center;
  }
  .myLogin .body .successBox[data-v-37dfd6fc] {
    padding: 90px 86px 101px;
    background: #ffffff;
    border-radius: 4px;
    position: relative;
    font-size: 16px;
  }
  .myLogin .body .successBox .sendIcon[data-v-37dfd6fc] {
    width: 100px;
    height: 100px;
  }
  .myLogin .body .successBox .sendTitle[data-v-37dfd6fc] {
    font-size: 36px;
    font-family: Montserrat-Regular, Montserrat;
    font-weight: 500;
    color: #111111;
    margin: 0 0 18px;
  }
  .myLogin .body .successBox .sendText[data-v-37dfd6fc] {
    width: 349px;
    height: 42px;
    font-size: 18px;
    font-family: Montserrat-Regular, Montserrat;
    color: #111111;
    line-height: 22px;
  }
  .myLogin .body .successBox .setTime[data-v-37dfd6fc] {
    width: 36px;
    height: 36px;
    text-align: center;
    line-height: 36px;
    background: rgba(0, 0, 0, 0.4);
    border-radius: 4px;
    position: absolute;
    top: 30px;
    right: 30px;
    font-size: 16px;
    font-family: Montserrat-Regular, Montserrat;
    font-weight: 400;
    color: #FFFFFF;
  }
  .myLogin .body .loginBox[data-v-37dfd6fc] {
    width: 100%;
    background: #ffffff;
    border-radius: 4px;
    position: relative;
  }
  .myLogin .body .loginBox .title[data-v-37dfd6fc] {
    height: 44px;
    font-size: 36px;
    font-family: Montserrat-Regular, Montserrat;
    font-weight: 600;
    color: #222222;
    line-height: 44px;
  }
  .myLogin .body .loginBox .newUser[data-v-37dfd6fc] {
    font-size: 16px;
    font-family: Montserrat-Regular, Montserrat;
    color: #222222;
    margin-bottom: 50px;
    margin-top: 12px;
  }
  .myLogin .body .loginBox .linkText[data-v-37dfd6fc] {
    height: 46px;
    font-size: 20px;
    font-family: Montserrat-Regular, Montserrat;
    color: #111111;
    line-height: 24px;
    margin: 50px 0 30px;
  }
  .myLogin .body .loginBox .forgot[data-v-37dfd6fc] {
    font-size: 16px;
    font-family: Montserrat-Regular, Montserrat;
    color: #222222;
    text-align: right;
    margin-bottom: 12px;
  }
  .myLogin .body .loginBox .orange[data-v-37dfd6fc] {
    color: #ff800c;
  }
  .myLogin .body .loginBox .login-from .login-btn[data-v-37dfd6fc] {
    width: 100%;
  }
  </style>
<style type="text/css">
  .popupBox[data-v-734ea018] {
  position: relative;
  z-index: 2005;
  font-size: 16px;
}
.popupBox .shadow[data-v-734ea018] {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #000000;
  opacity: 0.6;
}
.popupBox .content[data-v-734ea018] {
  position: fixed;
  width: 900px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: #ffffff;
  box-shadow: 0px 2px 8px 0px rgba(96, 96, 96, 0.34);
}
.popupBox .content .title[data-v-734ea018] {
  padding: 38px 35px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-radius: 4px 4px 0px 0px;
  font-size: 16px;
  font-weight: 700;
  color: #404040;
  line-height: 24px;
}
.popupBox .content .title .closeIcon[data-v-734ea018] {
  cursor: pointer;
  width: 26px;
  height: 26px;
}
.popupBox .content .body[data-v-734ea018] {
  margin: 0 50px;
  padding: 20px 0 60px;
}
.popupBox .content .body .info[data-v-734ea018] {
  display: flex;
  align-items: center;
  margin-bottom: 40px;
}
.popupBox .content .body .info .phone[data-v-734ea018] {
  width: 64px;
  height: 64px;
}
.popupBox .content .body .info .right[data-v-734ea018] {
  line-height: 30px;
  margin-left: 20px;
}
.popupBox .content .body .info .right .p1[data-v-734ea018] {
  font-weight: 700;
  font-size: 24px;
  color: #111111;
}
.popupBox .content .body .info .right .p1 em[data-v-734ea018] {
  color: #ff800c;
  font-style: normal;
}
.popupBox .content .body .info .right .p2[data-v-734ea018] {
  color: #666666;
  font-size: 16px;
}
.popupBox .content .body .helpIcon[data-v-734ea018] {
  position: absolute;
  right: 20px;
  bottom: 20px;
  height: 30px;
  width: 30px;
}
.popupBox .content .body .file-link[data-v-734ea018] {
  margin-top: 30px;
  text-align: center;
  font-size: 14px;
  color: #404040;
  cursor: pointer;
  display: block;
}
.popupBox .content .body .file-link .file[data-v-734ea018] {
  position: relative;
  top: 2px;
  width: 16px;
  height: 16px;
}
.popupBox .content .body .card-list[data-v-734ea018] {
  display: flex;
  justify-content: space-between;
}
.popupBox .content .body .card-list .card[data-v-734ea018] {
  box-sizing: border-box;
  text-align: center;
  width: 230px;
  background: #ffffff;
  border-radius: 5px;
  border: 2px solid #ff800c;
  padding: 15px;
  position: relative;
}
.popupBox .content .body .card-list .card .tag[data-v-734ea018] {
  position: absolute;
  left: -4px;
  bottom: -2px;
  height: 59px;
  width: 56px;
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHAAAAB2CAYAAAAQuRdWAAAAAXNSR0IArs4c6QAAA5pJREFUeF7t3b2O00AQB/D/RqJLoEICWiQeAKgp6JHukGgokXgEauyr0AEPAD0FFBS0PAg6noASwQnRDYqVC7kkjr/2Y2b37yaFrWR2fp7dtb1WHFabiDicXH0GwWNA7rrq/ObFPn7qzYBbhian12/gz9+PgDy4CNVV580+broz4ESqGeo3XwE83AyVgLrh1oUm9eI5RN5vh0tAO4BfIPKIgDbAdpykXvyEyDUCWgWs5rIvdHahNkCdENCGVEuUBDTNBxCQgMYzYDx8VmCugHCz2r38VRlvX/bht1Zg03Iiqj8BDgMSMQNAIqpG7K7A9W1vjokaJfsDshI1+rVfyLdGy4mNKshhFcjuVBVe0ym23czujJSV2JmiGAeMB+SYGMOn8zemARKxM8GhD5gOSMTQRge/3w8gEZMh+gMkYhJEv4BEjI7oH5CIURHDABIxGmI4QCJGQQwLSMTgiOEBiRgUMQ4gEYMhxgMkYhDEuIBE9I4YH5CIXhHTABLRG2I6QCJ6QUwLSMTJiOkBiTgJUQcgEUcj6gEk4ihEXYBEHIyoD5CIgxB1AhKxN6JeQCL2QtQNSMRORP2ARDyIaAOQiK2IdgCJuBfRFiARdxDtARLxEqJNQCKuEe0CErFBtA1IxAwAC0e0X4EXo0Gh7+znA1hoJeYFWCBifoCFIeYJWBBivoCFIOYNWABi/oCZI5YBmDFiOYCZIpYFmCFieYCZIZYJmBFiuYCZIJYNmAEiAY0jEtD480QCbq7xMvhQmIDbKy2NIRJw33pnQ4gE3Ltg3c5f7xGwDdDI7JSAhwANIBKwC1A5IgH7ACpGJGBfQKWIBBwCqBCRgEMBlSEScAygIkQCjgVUgkjAKYAKEAk4FTAxIgF9ACZEJKAvwESIBPQJmACRgL4BIyMSMARgREQChgKMhEjAkIAREAkYGjAwIgFjAAZEJGAswECIBIwJGACRgLEBPSMSMAWgR0QCpgL0hEjAlIAeEAmYGnAiIgE1AE5AJKAWwJGIBNQEOAKRgNoAByI6qRa/AZlrbEfRMfV8yXQJeAbInaKTpbXxPRCXXegHAE+1tqH4uDoQndTzJxB8Kj5RmhNwANHJu3tX8OP7N4jc1tyG4mNrQXTLxEi9OIbI5+KTpD0BexAbwBXiKUReaG9D8fFtIf4HlGqGk7eviGjgFNlAXANuVOIxgNccE5VDrhB3AJvutJnYnB1BcAS4+wBu8WJfIaib1f8ASWxko7EciKQAAAAASUVORK5CYII=) no-repeat;
  background-size: 100%;
}
.popupBox .content .body .card-list .card .tag span[data-v-734ea018] {
  position: absolute;
  left: 8px;
  bottom: 3px;
  font-size: 24px;
  font-family: Montserrat-Bold, Montserrat;
  font-weight: bold;
  color: #ffffff;
}
.popupBox .content .body .card-list .card .card-title[data-v-734ea018] {
  margin-bottom: 5px;
  font-size: 14px;
  color: #111111;
  font-weight: 700;
  padding-bottom: 15px;
  border-bottom: 1px solid #f6f6f6;
}
.popupBox .content .body .card-list .card .card-title span[data-v-734ea018] {
  color: #ff800c;
}
.popupBox .content .body .card-list .card .num-row .cur[data-v-734ea018] {
  color: #ff800c;
}
.popupBox .content .body .card-list .card .num-row .cur em[data-v-734ea018] {
  font-size: 38px;
  font-style: normal;
}
.popupBox .content .body .card-list .card .num-row .limit[data-v-734ea018] {
  margin-left: 5px;
  color: #999999;
  font-size: 18px;
}
.popupBox .content .body .card-list .card .desc[data-v-734ea018] {
  font-size: 14px;
  color: #d9d9d9;
  margin-bottom: 20px;
}
.popupBox .content .body .card-list .lock[data-v-734ea018] {
  margin-right: 3px;
  display: inline-block;
  height: 16px;
  width: 16px;
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAAXNSR0IArs4c6QAAAMZQTFRF/4AM/4EN/4EO/4IP/4MR/4MS/4QT/4UW/4YX/4YY/4ca/4kd/4of/4wj/40l/44m/44n/5Ar/5Iu/5Iv/5Qy/5U1/5Y1/5Y2/5k8/5s//6BJ/6JM/6RQ/6RR/6pd/7Fp/7Nt/7Nu/7h3/8GH/8WQ/9St/9av/9q4/92+/9/B/+LH/+PJ/+XN/+bO/+zZ/+3c/+/g//Dh//Hk//Lm//Tp//Xr//fv//jw//nz//r1//v2//v3//z4//z5//36//78///+////Qcvv6gAAAL5JREFUOMvt08cOglAQheEB7F0s2BUVe++9vP9LOQi5XJlJXLnzrP4M34YE4Clt3MxFooX2Ur6Bl3tTgffC3TsHdlkQqz0Y0ABpHQos+270N4teHkOdElDHc/5i16WAaRKQxKvlZB+zRICG17mTW8wMAfYrntwOAqQIUBGc3Q79BhxwUh994Ep3k8AwDcz0iQA6sCsLoPEg8Qc+oH4DcR4YAlR50BJgpHDPY2vvexgUCQlUZh9f1GHl25X+3fxedmOJJ6LpcKIAAAAASUVORK5CYII=) no-repeat;
  background-size: 100%;
}
.popupBox .content .body .card-list .unlock[data-v-734ea018] {
  border: 2px solid #d9d9d9;
}
.popupBox .content .body .card-list .unlock .card-title[data-v-734ea018] {
  color: #d9d9d9;
}
.popupBox .content .body .card-list .unlock .card-title span[data-v-734ea018] {
  color: #d9d9d9;
}
.popupBox .content .body .card-list .unlock .num-row .cur[data-v-734ea018],
.popupBox .content .body .card-list .unlock .num-row .limit[data-v-734ea018] {
  color: #d9d9d9;
}
.popupBox .content .body .card-list .unlock .card-title[data-v-734ea018] {
  color: #d9d9d9;
}
.popupBox .content .body .card-list .unlock .lock[data-v-734ea018] {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAAXNSR0IArs4c6QAAAMZQTFRFV6o/WatBWatCXq5HX65IX65JYK9JYa9KYrBMY7BMZbFPaLNSabNTarRVa7RWbLVXb7Zab7Zbcbdcc7hfdLlgdLlhdblherxnfr5riMN3jMV7j8d/ksiDlcqGmMuJmcuKm82Nnc2Pnc6PodCUrtajs9mowuC5zOXFzubH0ejK1erP2+3W3O3X3+/a4/He5/Pk6/Xo7vbr7vfs7/ft8Pju8/nx9Pny9Prz9vr09/v2+Pv2+Pz3+fz4+vz5+v35/P37/f78////a2tyiwAAAL1JREFUOMvt0scSgkAQRdFWMKGoCGLOESMYMGDi/3/KRnCwnK6yXLjzrW71HHaAS2zaUsSY2jO9Bv55343AY8LgRoGDAmwVCjTgZX0ejL170diuRhpGdM6BGp7zF6+uOmaHAwW8Dv00MEscSOF14aeNmeVAEq920AKATIJd0OJvwNqyrGefHOeMwDnyCz+AWQ6IpScMlIGcxoBMg8QffAt0GqgMNGnQZsCMU+/ShgF3WZXenzN1K/wf3A/7CO68lIpF6y3UNgAAAABJRU5ErkJggg==) no-repeat;
  background-size: 100%;
}
.popupBox .content .body .card-list .unlock .tag[data-v-734ea018] {
  background: url(data:image/png;base64,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) no-repeat;
  background-size: 100%;
}
.popupBox .content .btns .poupFooterBtn[data-v-734ea018] {
  margin: 0 auto;
  font-size: 14px;
  width: 102px;
}
</style>
  <style type="text/css">
    a[data-v-31882f76] {
  text-decoration: none !important;
}
.funds-subheading[data-v-31882f76] {
  width: auto !important;
}
.OverviewIndex .arrowIcon[data-v-31882f76] {
  cursor: pointer;
  width: 30px;
  height: 30px;
}
.OverviewIndex .up[data-v-31882f76] {
  transform: rotate(180deg);
}
.OverviewIndex .header[data-v-31882f76] {
  background-image: url(https://www.mocasa.eu/v1/file/image/overview_bg@2x.png);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center 0;
  height: 220px;
  padding: 0 400px;
  display: flex;
  align-items: center;
}
.OverviewIndex .header .headerTitle[data-v-31882f76] {
  width: 56%;
  height: 96px;
  font-size: 40px;
  font-family: Montserrat-Regular, Montserrat;
  font-weight: bold;
  color: #ffffff;
  line-height: 49px;
}
.OverviewIndex .main[data-v-31882f76] {
  padding: 0 120px 60px;
  background: #ffffff;
}
.OverviewIndex .main .mainTitle[data-v-31882f76] {
  font-size: 34px;
  font-family: Montserrat-Regular, Montserrat;
  font-weight: bold;
  color: #222222;
  text-align: center;
  margin-bottom: 62px;
}
.OverviewIndex .main .overviewItem[data-v-31882f76] {
  width: 500px;
  height: 593px;
  background: #ffffff;
  box-shadow: 0px 2px 8px 0px rgba(77, 77, 77, 0.25);
  position: relative;
}
.OverviewIndex .main .overviewItem .title[data-v-31882f76] {
  border-bottom: 1px solid #e1e1e1;
  padding: 20px;
}
.OverviewIndex .main .overviewItem .title .label[data-v-31882f76] {
  height: 30px;
  font-size: 20px;
  font-family: Montserrat-Regular, Montserrat;
  font-weight: 500;
  color: #111111;
  line-height: 30px;
}
.OverviewIndex .main .overviewItem .title .amount[data-v-31882f76] {
  font-size: 24px;
  font-family: Montserrat-SemiBold, Montserrat;
  font-weight: 600;
  color: #ff800c;
}
.OverviewIndex .main .overviewItem .title .amount .des[data-v-31882f76] {
  height: 30px;
  font-size: 14px;
  font-family: Montserrat-Regular, Montserrat;
  color: #222222;
  line-height: 30px;
  margin-left: 10px;
  font-weight: 400;
}
.OverviewIndex .main .overviewItem .title .location[data-v-31882f76] {
  position: absolute;
  top: 15px;
  right: 15px;
}
.OverviewIndex .main .overviewItem .fund[data-v-31882f76] {
  padding: 30px 20px 0;
}
.OverviewIndex .main .overviewItem .fund .inner-block[data-v-31882f76] {
  padding: 10px 15px;
  margin-bottom: 15px;
  margin-top: -15px;
  background: #f9f9f9;
  border-radius: 3px;
}
.OverviewIndex .main .overviewItem .fund .inner-block .fundItem[data-v-31882f76] {
  margin-bottom: 5px;
}
.OverviewIndex .main .overviewItem .fund .inner-block .warn[data-v-31882f76] {
  color: #ff800c;
  font-size: 14px;
  line-height: 20px;
}
.OverviewIndex .main .overviewItem .fund .inner-block .warn span[data-v-31882f76] {
  text-decoration: underline;
  font-weight: 700;
  cursor: pointer;
}
.OverviewIndex .main .overviewItem .fund .inner-block .info[data-v-31882f76] {
  color: #404040;
}
.OverviewIndex .main .overviewItem .fund .invertBtn[data-v-31882f76] {
  width: 240px;
  height: 56px;
  position: absolute;
  bottom: 73px;
  left: 50%;
  transform: translateX(-50%);
}
.OverviewIndex .main .overviewItem .fund .fundItem[data-v-31882f76] {
  margin-bottom: 20px;
  font-size: 16px;
  font-family: Montserrat-Light, Montserrat;
}
.OverviewIndex .main .overviewItem .fund .fundItem .invert[data-v-31882f76] {
  margin-left: 20px;
}
.OverviewIndex .main .overviewItem .fund .fundItem p[data-v-31882f76] {
  height: 30px;
  color: #666666;
  line-height: 30px;
}
.OverviewIndex .main .overviewItem .fund .fundItem span[data-v-31882f76] {
  font-weight: 300;
  color: #111111;
}
.OverviewIndex .main .overviewItem .fund .fundItem-desc[data-v-31882f76] {
  margin-top: -15px;
  font-size: 14px;
}
.OverviewIndex .main .overviewItem .fund .fundItem-desc p[data-v-31882f76],
.OverviewIndex .main .overviewItem .fund .fundItem-desc span[data-v-31882f76] {
  color: #cccccc;
}
.OverviewIndex .main .overviewItem .fund .line[data-v-31882f76] {
  border-bottom: 1px solid #e1e1e1;
}
.OverviewIndex .main .overviewItem .fund .fundItemLast[data-v-31882f76] {
  margin: 20px 0 40px;
}
.OverviewIndex .main .overviewItem .fund .fundItemLast .total[data-v-31882f76] {
  height: 30px;
  font-size: 16px;
  font-family: Montserrat-Regular, Montserrat;
  font-weight: 600;
  color: #111111;
  line-height: 30px;
}
.OverviewIndex .main .overviewItem .fund .fundItemLast .amount[data-v-31882f76] {
  height: 30px;
  font-size: 16px;
  font-family: Montserrat-SemiBold, Montserrat;
  font-weight: 600;
  color: #111111;
  line-height: 30px;
}
.OverviewIndex .main .overviewItem .fund .myBtn[data-v-31882f76] {
  width: 240px;
  height: 56px;
  line-height: 56px;
  background: #ff800c;
  border-radius: 2px;
  font-size: 18px;
  font-family: Montserrat-Regular, Montserrat;
  font-weight: 500;
  color: #ffffff;
  text-align: center;
  position: absolute;
  bottom: 73px;
  left: 50%;
  transform: translateX(-50%);
}
.OverviewIndex .helpIcon[data-v-31882f76] {
  height: 30px;
  width: 30px;
}

  .nav-link{
     cursor: pointer;
  }
.dropdown-menu.show {
  display: block;
}
  .primaryColor {
    color: #FF800C !important;
  }
    .el-avatar {
      display: inline-block;
      box-sizing: border-box;
      text-align: center;
      overflow: hidden;
      color: #fff;
      background: #C0C4CC;
      width: 40px;
      height: 40px;
      line-height: 40px;
      font-size: 14px;
    }
  .el-avatar--circle {
    border-radius: 50%;
  }
  .el-avatar--icon {
    font-size: 18px;
  }
  .footer-subtext {
    font-size: 18px;
    line-height: 26px;
  }
  .block-footer-down {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
  }
  .w-inline-block {
    max-width: 100%;
    display: inline-block;
  }
  .link-social-2 {
    display: inline-block;
    margin-right: 4px;
    margin-left: 4px;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    border: 2px solid transparent;
    border-radius: 8px;
    background-color: hsla(0, 0%, 100%, 0.2);
    transition: transform 150ms ease-out, border-color 150ms ease-out, background-color 150ms ease-out;
  }
  .icon-link-social {
    width: 15px;
    height: 15px;
    margin: 10px;
  }

  a{ text-decoration: none !important;}
#userForm{ display: none;}

  @media (min-width: 992px){
  .mt-lg-0, .my-lg-0 {
           margin-top: 0 !important;
     }
  }

  @media (min-width: 992px){
  .mb-lg-0, .my-lg-0 {
    margin-bottom: 0 !important;
    }
  }

  .register {
    color: #fff !important;
    font-weight: 500 !important;
    font-size: 14px!important;
  }
  .global-color {
    background-color: #ff8009 !important;
  }
  .collapse:not(.show) {
    display: none !important;
  }
    article{
      word-break: break-word;
    }
	  #wpadminbar{ display: none;}
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  const host='http://34.96.200.93:8014/'||window.host; //测试环境 http://34.96.200.93:8014/
  const token=localStorage.getItem('token2');
  function initUser(){
      $.ajax({
        url:host+'manager/v1/user/balance/query',
        type:"post",
        data:JSON.stringify({token:token}),
        contentType:'application/json',
        dataType: "json",
        success:function(data,status){
          console.log('data',data,status)
          if(data.code==0&&data.msg=='success'){//调用成功
              let {availableAmount,totalEarnedAmount}=data.data;
              console.log('totalEarnedAmount',totalEarnedAmount)
              $(".TotalBalance").text(`€ ${availableAmount}`);
              $(".TotalNum").text(`€ ${totalEarnedAmount}`);
            $("#loginForm").hide();
              $("#userForm").show()
          }
        }
      })
  }
  function logout(){
    //manager/v1/user/logout
    $.ajax({
      url:host+'manager/v1/user/logout',
      type:"post",
      data:JSON.stringify({token:token}),
      contentType:'application/json',
      dataType: "json",
      success:function(data,status){
        goJump('logout')
      }
    })
  }
  function goJump(path,blank=false){
    let url=host+path;
        goUrl(url,blank)
  }
  function goUrl(url,blank=false){
    if(blank){
        window.open(url)
    }else{
      window.location.href=url;
    }
  }
  function checkNavShow(){
    let width=document.body.scrollWidth;
    console.log('width',width)
    if(width>992){
      $("#navbarNavDropdown").addClass('show');
    }else{
      $("#navbarNavDropdown").removeClass('show');
    }
  }
  function tripSpace(_dom){
    let dom=_dom;
    if(!dom) return;
    console.log('html',dom.innerHTML)
    let str=dom.innerHTML.replace(/&nbsp;/g,' ')
    dom.innerHTML=str;
  }
  $(function(){
    initUser();
    checkNavShow(document.getElementsByTagName('article')[0]);
    tripSpace();
    $('.dropdown').on("click",function(){
      $(this).find('.dropdown-toggle').toggleClass('rotateDeg');
      $(this).find('.dropdown-menu').toggleClass('show');
    })
    $(".navbar-toggler").on("click",function() {
      $("#navbarNavDropdown").toggleClass('show');
    })
    $(window).on('resize',function(){
      checkNavShow();
    })
  })
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

			<div class="header-main  clearfix el-header">
<header data-v-13877386="" class="el-header" style="height: 60px;">
  <div data-v-be2991ac="" data-v-13877386="" class="self-nav">
    <div data-v-be2991ac="" style="width: 85%; margin: 0px auto;">
      <nav data-v-be2991ac="" class="navbar navbar-expand-lg navbar-light">
				<span data-v-be2991ac="" class="navbar-brand navbar-logo">
					<img data-v-be2991ac="" src="data:image/png;base64,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" loading="lazy"
               alt="" class="image contain">
				</span>
        <div data-v-be2991ac="" data-toggle="collapse" data-target="#navbarNavDropdown"
             aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"
             class="navbar-toggler">
					<span data-v-be2991ac="" class="navbar-toggler-icon">
					</span>
        </div>
        <div data-v-be2991ac="" id="navbarNavDropdown" class="collapse navbar-collapse show"
             style="margin-top: 0px;">
          <ul data-v-be2991ac="" class="navbar-nav">
            <li data-v-be2991ac="" class="nav-item" onclick="goJump('overview')">
              <a data-v-be2991ac="" class="nav-link">
                Overview
                <span data-v-be2991ac="" class="sr-only">
									(current)
								</span>
              </a>
            </li>
            <li data-v-be2991ac="" class="nav-item" onclick="goJump('porfoliosummary')">
              <!---->
              <a data-v-be2991ac="" class="nav-link">
                Invest
                <span data-v-be2991ac="" class="sr-only">
									(current)
								</span>
              </a>
            </li>
            <li data-v-be2991ac="" class="nav-item" onclick="goJump('myInvestment')">
              <!---->
              <a data-v-be2991ac="" class="nav-link">
                My Investment
                <span data-v-be2991ac="" class="sr-only">
									(current)
								</span>
              </a>
            </li>
            <li data-v-be2991ac="" class="nav-item" onclick="goJump('faq')">
              <!---->
              <a data-v-be2991ac="" class="nav-link">
                FAQ
                <span data-v-be2991ac="" class="sr-only">
									(current)
								</span>
              </a>
            </li>
           <!-- <li data-v-be2991ac="" class="nav-item">
              &lt;!&ndash;&ndash;&gt;
              <span data-v-be2991ac="" class="line"></span>
              <a data-v-be2991ac="" class="nav-link">
                Blog
                <span data-v-be2991ac="" class="sr-only">
									(current)
								</span>
              </a>
            </li>-->
            <li data-v-be2991ac="" class="nav-item">
              <!---->
              <a data-v-be2991ac="" class="nav-link"  onclick="goJump('refer')">
                Refer
                <span data-v-be2991ac="" class="sr-only">
									(current)
								</span>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="true"
                 class="nav-link dropdown-toggle">
                Bonus Programs
              </a>
              <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">
                <a class="dropdown-item" onclick="goJump('refer')">
                  Refer a Friend
                </a>
                <a class="dropdown-item" onclick="goJump('cashback')">
                  Cashback
                </a>
                <a class="dropdown-item" onclick="goUrl('https://www.mocasa.eu/affiliate')">
                  Affiliate Program
                </a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false"
                 class="nav-link dropdown-toggle">
                More
              </a>
              <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">
                <a class="dropdown-item" onclick="goJump('Documents')">
                  Documents
                </a>
              </div>
            </li>

          </ul>
          <form class="form-inline my-2 my-lg-0" id="loginForm">
            <a href="javascript:void(0) " class="navbar-link nav-link sign" onclick="goJump('login')">
              Sign In
            </a>
            <a href="javascript:void(0)" class="btn global-color my-2 my-sm-0 register" onclick="goJump('register')">
              Register
            </a>
          </form>
          <form data-v-be2991ac="" class="form-inline my-2 my-lg-0" id="userForm">
            <ul data-v-be2991ac="" class="navbar-nav" style="width: 100%;">
              <li data-v-be2991ac="" class="nav-item dropdown" style="display: flex; align-items: center;">
                <a data-v-be2991ac="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                   aria-expanded="false" class="nav-link dropdown-toggle self-drop-box">
                  <div data-v-be2991ac="">
										<span data-v-be2991ac="">
											Available Balance
										</span>
                    <br data-v-be2991ac="">
                    <span data-v-be2991ac="" class="TotalBalance">

										</span>
                  </div>
                </a>
                <div data-v-be2991ac="" aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">
                  <a data-v-be2991ac="" class="dropdown-item" onclick="goJump('addfund')">
                    Add Funds
                  </a>
                  <a data-v-be2991ac="" class="dropdown-item" onclick="goJump('withdraw')">
                    Withdraw
                  </a>
                </div>
              </li>
              <li data-v-be2991ac="" class="nav-item dropdown">
                <a data-v-be2991ac="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                   aria-expanded="false" class="nav-link dropdown-toggle self-drop-box show">
                  <div data-v-be2991ac="">
										<span data-v-be2991ac="">
											Total Earned
										</span>
                    <br data-v-be2991ac="">
                    <span data-v-be2991ac="" class="TotalNum primaryColor">

										</span>
                  </div>
                  <span data-v-be2991ac="" class="el-avatar el-avatar--icon el-avatar--circle"
                        style="margin-left: 30px;">
										<i class="el-icon-user-solid"></i>
									</span>
                </a>
                <div data-v-be2991ac="" aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">
                  <a data-v-be2991ac="" class="dropdown-item" onclick="goJump('person')">
                    My Profile
                  </a>
                  <a data-v-be2991ac="" class="dropdown-item" onclick="goJump('accountstatement')">
                    Account Statement
                  </a>
                  <a data-v-be2991ac="" class="dropdown-item" onclick="logout()">
                    Logout
                  </a>
                  <a data-v-be2991ac="" class="dropdown-item" onclick="goJump('login?changepwd=changepwd')">
                    Change Password
                  </a>
                </div>
              </li>
            </ul>
          </form>
        </div>
      </nav>
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
