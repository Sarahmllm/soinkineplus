<?php
if (!defined('ABSPATH')) {
    exit;
}

$allowed_html = array(
    "strong" => array(),
    "i" => array(),
    "a" => array(
        "href" => array(),
        "id" => array(),
        "title" => array(),
        "target" => array(),
    ),
    "div" => array(
        "class" => array(),
    ),
    "p" => array(),
    "br" => array(),
    "ul" => array(),
    "ol" => array(),
    "li" => array(),
    "h1" => array(),
    "h2" => array(),
    "h3" => array(),
    "h4" => array(),
    "h5" => array(),
    "h6" => array(),
    "hr" => array());
?>
<div class="wrap">

<script>
    const nscBarConsentType = `<?php echo $exposeJSConsentType ?>`; const nscBarCookieTypes =<?php echo $exposeJSCookieTypes ?>
</script>

<div id="nsc_bar_upper_area">
<h1 id="nsc_bar_admin_title"><?php echo esc_html($objSettings->settings_page_configs->page_title) ?></h1>
<p><?php echo wp_kses($objSettings->settings_page_configs->description, $allowed_html) ?></p>
</div>
<?php if (defined("NSC_BARA_FEATURE_ENABLE_NEW_BANNER") && NSC_BARA_FEATURE_ENABLE_NEW_BANNER === true) {?>
    <div class="nsc-bar-selector-new-banner">
    <label for="nsc_bar_new_banner_selector" id="nsc_bar_new_banner_selector-label">
        <span class="nsc_bar_new_banner_selector-text">Banner in use is: </span>
    </label>
    <select name="nsc_bar_new_banner_selector" id="nsc_bar_new_banner_selector">
        <option <?php echo $newBannerEnabled === true ? '' : 'selected' ?> value="classic">Classic</option>
        <option <?php echo $newBannerEnabled === true ? 'selected' : '' ?> value="modern">Modern</option>
    </select>
    </div>
<?php }?>

<h2 class="nav-tab-wrapper">
<?php
//tabs are created
foreach ($objSettings->setting_page_fields->tabs as $tab) {
    if ($newBannerEnabled === true && $tab->newBanner === false) {
        continue;
    }

    if (defined("NSC_BARA_FEATURE_ENABLE_NEW_BANNER") === false && $tab->tab_slug === "new_banner") {
        continue;
    }

    if (defined("NSC_BARA_FEATURE_ENABLE_NEW_BANNER") === true && NSC_BARA_FEATURE_ENABLE_NEW_BANNER === false && $tab->tab_slug === "new_banner") {
        continue;
    }

    $activeTab = "";
    if ($tab->active === true) {
        $activeTab = 'nav-tab-active';
    }
    echo '<a href="?page=' . esc_attr($objSettings->plugin_slug) . '&tab=' . esc_attr($tab->tab_slug) . '&' . esc_attr($objSettings->additional_tab_link_parameter) . '" class="nav-tab ' . esc_attr($activeTab) . '" >' . esc_html($tab->tabname) . '</a>';
}
$active_tab_index = $objSettings->setting_page_fields->active_tab_index;
?>
</h2>
<?php
if (empty($_GET["tab"]) || $_GET["tab"] !== "new_banner") {
    require NSC_BAR_PLUGIN_DIR . "/admin/tpl/legacy.php";
}

if (empty($_GET["tab"]) === false && $_GET["tab"] === "new_banner" && defined("NSC_BARA_FEATURE_ENABLE_NEW_BANNER") && NSC_BARA_FEATURE_ENABLE_NEW_BANNER === true) {
    $rest_url = urlencode(get_rest_url());
    $nonce = wp_create_nonce('wp_rest');
    echo wp_kses($objSettings->setting_page_fields->tabs[$active_tab_index]->tab_description, $allowed_html);
    echo '<script>addEventListener("load", (event) => {iFrameResize({ log: false, minHeight: 500 }, "#nsc_bar_new_banner");}); </script><iframe width="100%" id="nsc_bar_new_banner" src="' . NSC_BAR_PLUGIN_URL . 'admin/new-banner/index.html?plugin_url_encoded=' . urlencode(NSC_BAR_PLUGIN_URL) . '&rest_url_encoded=' . $rest_url . '&wp_nonce=' . $nonce . '&cb=' . NSC_BAR_VERSION . '"></iframe>';
}

?>
