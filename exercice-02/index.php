<?php

/*
    Exercice réalisé dans le cadre du recrutement de Hono Agency
    https://hono.agency/
*/


/**
 * each parameters are the urls of your social networks
 *
 * @param $params
 * @return string
 */

function showList($params)
{
    extract(
        shortcode_atts(
            array(
                'facebook' => '',
                'instagram' => '',
                'linkedin' => '',
                'github' => ''
            ),
            $params
        )
    );

    $list = '   
              <li>
                 <ul><a href="' . $facebook . '" >' . $facebook . '</a></ul> 
                 <ul><a href="' . $instagram . '" >' . $instagram . '</a></ul> 
                 <ul><a href="' . $linkedin . '" >' . $linkedin . '</a></ul> 
                 <ul><a href="' . $github . '" >' . $github . '</a></ul> 
               </li>
             ';

    return $list;
}

;
add_shortcode('show_social_network', 'showList');

