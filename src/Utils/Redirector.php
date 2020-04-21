<?php

namespace App\Utils;

/**
 * Class Redirector
 */
class Redirector
{
    /**
     * @param $url
     *
     * @return bool
     */
    public function validate_url($url)
    {
        $pattern = '/(?:https?:\/\/)?(?:[a-zA-Z0-9.-]+?\.(?:[a-zA-Z])|\d+\.\d+\.\d+\.\d+)/';

        return ( preg_match($pattern, $url) ? true : false );
    }

    /**
     * @param $url
     *
     * @return mixed
     */
    function get_domain($url) {
        $pieces = parse_url($url);
        $domain = isset($pieces['host']) ? $pieces['host'] : '';

        if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
            $return = $regs['domain'];
            $return = str_replace('www.', '', $return);

            return $return;
        }
    }

    /**
     * @param        $url
     * @param        $data
     * @param string $tracker
     *
     * @return string
     */
    function monetize_link($url, $data, $tracker = '-covid-') {
        switch($data['network']){
            case 'cj' :
                //cj.com
                $redirect = 'http://www.anrdoezrs.net/links/8106588/type/dlg/sid/' . $tracker . '/' . $url;
                break;

            case 'awin' :
                //awin.com
                $redirect = 'http://www.awin1.com/cread.php?awinmid=' . $data['network_id'] . '&awinaffid=283879&clickref=' . $tracker . '&p=' . urlencode($url);
                break;

            case 'linkshare' :
                //linkshare
                $redirect = 'https://click.linksynergy.com/deeplink?id=XK9XruzkyUo&u1=' . $tracker . '&mid=' . $data['network_id'] . '&murl=' . urlencode($url);
                break;

            case 'ebay' :
                //ebay
                $redirect = 'http://rover.ebay.com/rover/1/' . $data['network_id'] . '/1?ff3=4&pub=5575312620&toolid=10001&campid=5338164459&customid=' . $tracker . '&mpre=' . urlencode($url);
                break;

            case 'tradetracker' :
                //tradetracker.com
                $parts = parse_url($url);
                if(strpos($data['network_id'], 'tc.tradetracker.net') !== false){
                    $redirect = $data['network_id'] . '&r=' . $tracker . '&u=' . urlencode($parts['path'] ?? '');
                }
                else{
                    $redirect = $data['network_id'] . $tracker . '&r=' . urlencode($parts['path'] ?? '');
                }
                break;

            case 'booking' :
                //booking.com
                if(substr($url, -5) == '.html' OR substr($url, -4) == '.com') { //if last 5 characters are ".html" or ".com"
                    $redirect = $url . '?aid=' . $data['network_id'] . '&label=' . $tracker;
                } else {
                    $redirect = str_replace('.html', '.html?aid=' . $data['network_id'] . '&label=' . $tracker . '&', $url);
                }
                break;

            case 'commissionfactory' :
                //commissionfactory.com
                $redirect = 'https://t.cfjump.com/50770/t/' . $data['network_id'] . '?Url=' . urlencode($url) . '&UniqueId=' . $tracker;
                break;
        }

        return $redirect;
    }
}
