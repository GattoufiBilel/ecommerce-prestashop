{*
 * Carts Guru
 *
 * @author    LINKT IT
 * @copyright Copyright (c) LINKT IT 2016
 * @license   Commercial license
 *}

<script>
  var cgTrkParams = window.cgTrkParams || {
    trackerUrl: '{$trackerUrl|escape:'javascript':'UTF-8'}',
    currency: '{$currency|escape:'javascript':'UTF-8'}',
    platform: 'prestashop',
    siteId: '{$siteId|escape:'htmlall':'UTF-8'}',
    features: {
      ci: !!'{$ci|escape:'javascript':'UTF-8'}',
      fbm: !!'{$fbm|escape:'javascript':'UTF-8'}',
      fbAds: !!'{$fbAds|escape:'javascript':'UTF-8'}',
      scoring: false,
      widgets: JSON.parse("{$widgets|escape:'javascript':'UTF-8' nofilter}")
    },
    fbSettings: {
      app_id:  '{$appId|escape:'htmlall':'UTF-8'}',
      page_id: '{$pageId|escape:'htmlall':'UTF-8'}' // ID of the page connected to FBM Application
    },
    data: JSON.parse("{$data|escape:'javascript':'UTF-8' nofilter}")
  },

  cgtrkStart = function () {
    CgTracker('init', cgTrkParams);

    CgTracker('track', {
      what:   'event',
      ofType: 'visit'
    });
    // Track quit event
    window.onbeforeunload = function noop () {
      setTimeout(function () {
        CgTracker('track', {
          what:    'event',
          ofType:  'quit'
        });
      }, 0);
    };
  };

  (function(d, s, id) {
    var cgs, cgt = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    cgs = d.createElement(s); cgs.id = id;
    cgs.src = '{$trackerUrl|escape:'javascript':'UTF-8'}/dist/tracker.build.min.js';
    cgt.parentNode.insertBefore(cgs, cgt);
    cgs.onload = cgtrkStart;
  }(document, 'script', 'cg-trk'));

  (function(d, s, id) {
    var cgs, cgt = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    cgs = d.createElement(s); cgs.id = id;
    cgs.src = '{$trackerUrl|escape:'javascript':'UTF-8'}/dist/platform/' + cgTrkParams.platform + '.min.js';
    cgt.parentNode.insertBefore(cgs, cgt);
  }(document, 'script', 'cg-evt'));

</script>
