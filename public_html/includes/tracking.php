<?php
/**
 * Global Advertising and Web Analytics Tracking Integration
 */

require_once __DIR__ . '/config.php';

/**
 * Output tracking scripts that go in the HTML <head> section
 */
function renderTrackingHead() {
    ?>
    <!-- Google Search Console Verification -->
    <?php if (defined('TRACKING_GSC_VERIFICATION') && TRACKING_GSC_VERIFICATION !== 'google-site-verification-id'): ?>
    <meta name="google-site-verification" content="<?php echo escape(TRACKING_GSC_VERIFICATION); ?>" />
    <?php endif; ?>

    <!-- Google Tag Manager -->
    <?php if (defined('TRACKING_GTM') && !empty(TRACKING_GTM)): ?>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php echo escape(TRACKING_GTM); ?>');</script>
    <?php endif; ?>

    <!-- Global site tag (gtag.js) - Google Analytics & Ads -->
    <?php 
    $has_ga4 = (defined('TRACKING_GA4') && !empty(TRACKING_GA4) && TRACKING_GA4 !== 'G-XXXXXXXXXX');
    $has_ads = (defined('TRACKING_GOOGLE_ADS_CONVERSION') && !empty(TRACKING_GOOGLE_ADS_CONVERSION));
    if ($has_ga4 || $has_ads): 
        $gtag_id = $has_ga4 ? TRACKING_GA4 : TRACKING_GOOGLE_ADS_CONVERSION;
    ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo escape($gtag_id); ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      <?php if ($has_ga4): ?>
      gtag('config', '<?php echo escape(TRACKING_GA4); ?>');
      <?php endif; ?>
      <?php if ($has_ads): ?>
      gtag('config', '<?php echo escape(TRACKING_GOOGLE_ADS_CONVERSION); ?>');
      <?php endif; ?>
    </script>
    <?php endif; ?>

    <!-- Meta Pixel Code -->
    <?php if (defined('TRACKING_META_PIXEL') && !empty(TRACKING_META_PIXEL) && TRACKING_META_PIXEL !== 'XXXXXXXXXXXXXXX'): ?>
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '<?php echo escape(TRACKING_META_PIXEL); ?>');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo escape(TRACKING_META_PIXEL); ?>&ev=PageView&noscript=1"
    /></noscript>
    <?php endif; ?>

    <!-- Microsoft Clarity -->
    <?php if (defined('TRACKING_CLARITY_ID') && !empty(TRACKING_CLARITY_ID) && TRACKING_CLARITY_ID !== 'XXXXXXXXXX'): ?>
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "<?php echo escape(TRACKING_CLARITY_ID); ?>");
    </script>
    <?php endif; ?>
    <?php
}

/**
 * Output tracking scripts that go immediately after the opening <body> tag
 */
function renderTrackingBody() {
    ?>
    <!-- Google Tag Manager (noscript) -->
    <?php if (defined('TRACKING_GTM') && !empty(TRACKING_GTM)): ?>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo escape(TRACKING_GTM); ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <?php endif; ?>
    <?php
}

/**
 * Output Google Ads Lead Conversion Tracking (for Thank You page)
 */
function renderAdsConversionScript() {
    if (defined('TRACKING_GOOGLE_ADS_CONVERSION') && !empty(TRACKING_GOOGLE_ADS_CONVERSION)) {
        ?>
        <!-- Google Ads Conversion Tracking Event Script -->
        <script>
          if (typeof gtag === 'function') {
              gtag('event', 'conversion', {
                  'send_to': '<?php echo escape(TRACKING_GOOGLE_ADS_CONVERSION); ?>/lead-conversion-label', // Replace with active conversion label
                  'value': 1.0,
                  'currency': 'INR'
              });
          }
        </script>
        <?php
    }
}
?>
