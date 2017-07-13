(function() {
    var host = "https://www.oanda.com";
    var url_prefix = "/embed/";




    var link_available = verify_link();
    function verify_link() {
        var fxtrade_tool_link = document.getElementById('historical_position_ratios_fxtrade_tool_link');
        var fxtrade_link = document.getElementById('historical_position_ratios_fxtrade_link');

        if ((typeof fxtrade_tool_link === "undefined")
            || (fxtrade_tool_link === null)
            || (host + "/forex-trading/analysis/historical-positions" !== fxtrade_tool_link.href)
            || typeof fxtrade_link === "undefined"
            || (fxtrade_link === null)
            || (host + "/" !== fxtrade_link.href)) {

            return 0;
        } else {
            return 1;
        }
    }


    var script_tags = document.getElementsByTagName("script");
    var container = null;
    var check_url = '';
    for (var i = 0; i < script_tags.length; i++) {
        var src = script_tags[i].getAttribute('src');
        var is_relative = (src !== null && src[0] === "/");
        check_url = url_prefix;
        if (!is_relative) {
            check_url = host + url_prefix;
        }

        if ( (src === check_url + 'get/historical_position_ratios/?') ||
             (src === check_url + 'get/historical_position_ratios/') ){
            container = script_tags[i].parentNode;
        }
    }

    var frame_source = check_url + "show/historical_position_ratios" + "/" + link_available+"/?";

    var frame_style = "width: 1500px; height: 230px; border:0px solid #ffffff; display:block; margin: 3px";
    var iframe = document.createElement('iframe');
    iframe.setAttribute('style', frame_style);
    iframe.setAttribute('src', frame_source);
    iframe.setAttribute('height', '230');
    iframe.setAttribute('width', '1500');
    iframe.setAttribute('scrolling', 'no');
    iframe.setAttribute('frameBorder', '0');
    iframe.setAttribute('allowTransparency', 'true');

    var fxtrade_tool_link = document.getElementById('historical_position_ratios_fxtrade_tool_link');
    if (fxtrade_tool_link) {
        container.insertBefore(iframe, container.firstChild);
    } else {
        container.appendChild(iframe);
    }
})();
