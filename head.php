<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$do_i_posle_temp = unserialize($lsidebar[0]['url_ext']);

if (!empty($page['teme'])){
  if (empty($page['teme_int']) or $page['teme_int'] == '' or $page['teme_int'] == 'Не используется') {
    $title_temp = $page['teme'];
    $desc_temp = $page['description'];
    $key_temp_head = $title_temp;
  } else {
    $temp_meta = explode('/', $page['teme_int']);
    $title_temp = $temp_meta[0];
    $desc_temp = $temp_meta[1];
    $key_temp_head = $temp_meta[2];
    $key_temp_head_2 = explode(',', $key_temp_head);
    for($value =0; $value<8;$value++) {
      if (empty($key_temp_head_2[$value]) or $key_temp_head_2[$value] == '') break;
     $do_i_posle_temp[$value][0] = $do_i_posle_temp[$value][0].' '.$key_temp_head_2[$value];
    }
  }
  $url_temp = $page['url'];
  $topnews[0]['text'] = $page['text'];
  $topnews[0]['description'] = $page['teme'];
  $lsidebar[0]['description'] = $page['url_int'];
  $lsidebar[0]['text'] = $page['description'];
}
?>
<title><?php echo $title_temp; ?></title>
<meta name="yandex-verification" content="5e7d4e52e183b4e1" />
<meta name="google-site-verification" content="dslTrccQ-TkCEjziEbkS2R0a2Qv5Ec_fv9agT-y2PhQ" />


<meta property="og:url" content="<?php echo $main_name.$url_temp; ?>">
<meta property="og:title" content="<?php echo $title_temp; ?>">
<meta property="og:description" content="<?php echo $desc_temp; ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo $main_name; ?>/picture<?php echo $url_temp; ?>img_1">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="<?php echo $desc_temp; ?>">
<meta name="keywords" content="<?php echo $key_temp_head; ?>">
<link rel="shortcut icon" href="<?php echo $site_url; ?>favicon.ico" type="image/x-icon">
<!-- Assets -->
<link rel="stylesheet" href="<?php echo $main_name; ?>/index/tilda-grid-3.0.min.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo $main_name; ?>/index/tilda-blocks-2.12.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo $main_name; ?>/index/tilda-animation-1.0.min.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo $main_name; ?>/index/tilda-slds-1.4.min.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo $main_name; ?>/index/tilda-zoom-2.0.min.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo $main_name; ?>/index/tilda-popup-1.1.min.css" type="text/css" media="all">


<script async="" id="tildastatscript" src="<?php echo $main_name; ?>/index/tildastat-0.2.min.js"></script>
<script async="" src="<?php echo $main_name; ?>/index/analytics.js"></script>
<script async="" src="<?php echo $main_name; ?>/index/watch.js"></script>
<script async="" src="<?php echo $main_name; ?>/index/gtm.js"></script>
<script async="" src="<?php echo $main_name; ?>/index/fbevents.js"></script>
<script src="<?php echo $main_name; ?>/index/jquery-1.10.2.min.js"></script>
<script src="<?php echo $main_name; ?>/index/tilda-scripts-2.8.min.js"></script>
<script src="<?php echo $main_name; ?>/index/tilda-blocks-2.7.js"></script>
<script src="<?php echo $main_name; ?>/index/lazyload-1.3.min.js"></script>
<script src="<?php echo $main_name; ?>/index/tilda-animation-1.0.min.js"></script>
<script src="<?php echo $main_name; ?>/index/tilda-slds-1.4.min.js"></script>
<script src="<?php echo $main_name; ?>/index/hammer.min.js"></script>
<script src="<?php echo $main_name; ?>/index/tilda-forms-1.0.min.js"></script>
<script src="<?php echo $main_name; ?>/index/tilda-map-1.0.min.js"></script>



<script >window.dataLayer = window.dataLayer || [];
</script>

<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Organization",
  "name" : "Студия Imagemaker",
  "url" : "https://imagemaker.by",
  "sameAs" : [
    "https://www.facebook.com/studioimagemaker/",
	"https://vk.com/studioimagemaker",
	"https://www.instagram.com/studioimagemaker/"
  ]
}
</script>



