<?php

/**
 * Block Name: statistics
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<div class="statistics__section">
    <div class="statistics__container">
      <div class="statistics__block">
        <div class="statistics__box">
          <div class="statistics__box-circle">
            <svg class="statistics__box-circle-item" id="svg1" version="1.1" xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMin" width="150" height="150" viewBox="10 10 110 110">
              <defs>
                <linearGradient id="lgrad" x1="0%" y1="50%" x2="100%" y2="50%">
                  <stop offset="0%" style="stop-color:rgb(51,105,231);stop-opacity:1.00" />
                  <stop offset="100%" style="stop-color:rgb(142,67,231);stop-opacity:1.00" />
                </linearGradient>
              </defs>
              <g transform="rotate(180 60 60)">
                <circle stroke-linecap="butt" cx="50%" cy="50%" r="50" fill="#ffffff" stroke-dasharray="400"
                  stroke="#EEEEEE" stroke-width="9">
                </circle>
                <circle class="svgCircle" stroke-linecap="butt" cx="50%" cy="50%" r="50" fill="none"
                  stroke-dashoffset="0" stroke-dasharray="0,314" stroke="url(#lgrad)" stroke-width="9">
                  <animate attributeName="stroke-dasharray" begin="forward.begin" dur="2s" values="0,314;180,270"
                    fill="freeze" />
                </circle>
                <circle id="circle2" cx="0" cy="0" r="0">
                  <animateMotion id="forward" dur="2s" begin="indefinite" repeatCount="1" keyPoints="0;1" keyTimes="0;1"
                    calcMode="linear" fill="freeze">
                    <mpath href="#pathID" />
                  </animateMotion>
                </circle>
              </g>
            </svg>
            <div class="statistics__box-value"><span id="value1">250</span><span>+</span></div>
            <span class="statistics__box-label">проектов</span>
          </div>
          <p class="statistics__box-subtitle"><?php the_field('value-1');?></p>
        </div>
        <div class="statistics__box">
          <div class="statistics__box-circle">
            <svg class="statistics__box-circle-item" id="svg1" version="1.1" xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMin" width="150" height="150" viewBox="10 10 110 110">
              <defs>
                <linearGradient id="lgrad" x1="0%" y1="50%" x2="100%" y2="50%">
                  <stop offset="0%" style="stop-color:rgb(51,105,231);stop-opacity:1.00" />
                  <stop offset="100%" style="stop-color:rgb(142,67,231);stop-opacity:1.00" />
                </linearGradient>
              </defs>
              <g transform="rotate(180 60 60)">
                <circle stroke-linecap="butt" cx="50%" cy="50%" r="50" fill="#ffffff" stroke-dasharray="400"
                  stroke="#EEEEEE" stroke-width="9">
                </circle>
                <circle class="svgCircle" stroke-linecap="butt" cx="50%" cy="50%" r="50" fill="none"
                  stroke-dashoffset="0" stroke-dasharray="0,314" stroke="url(#lgrad)" stroke-width="9">
                  <animate attributeName="stroke-dasharray" begin="forward.begin" dur="2s" values="0,314;250,270"
                    fill="freeze" />
                </circle>
                <circle id="circle2" cx="0" cy="0" r="0">
                  <animateMotion id="forward" dur="2s" begin="indefinite" repeatCount="1" keyPoints="0;1" keyTimes="0;1"
                    calcMode="linear" fill="freeze">
                    <mpath href="#pathID" />
                  </animateMotion>
                </circle>
              </g>
            </svg>
            <div class="statistics__box-value"><span id="value2">20</span><span>+</span></div>
            <span class="statistics__box-label">человек</span>
          </div>
          <p class="statistics__box-subtitle"><?php the_field('value-2');?></p>
        </div>
        <div class="statistics__box">
          <div class="statistics__box-circle">
            <svg class="statistics__box-circle-item" id="svg1" version="1.1" xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMin" width="150" height="150" viewBox="10 10 110 110">
              <defs>
                <linearGradient id="lgrad" x1="0%" y1="50%" x2="100%" y2="50%">
                  <stop offset="0%" style="stop-color:rgb(51,105,231);stop-opacity:1.00" />
                  <stop offset="100%" style="stop-color:rgb(142,67,231);stop-opacity:1.00" />
                </linearGradient>
              </defs>
              <g transform="rotate(180 60 60)">
                <circle stroke-linecap="butt" cx="50%" cy="50%" r="50" fill="#ffffff" stroke-dasharray="400"
                  stroke="#EEEEEE" stroke-width="9">
                </circle>
                <circle class="svgCircle" stroke-linecap="butt" cx="50%" cy="50%" r="50" fill="none"
                  stroke-dashoffset="0" stroke-dasharray="0,314" stroke="url(#lgrad)" stroke-width="9">
                  <animate attributeName="stroke-dasharray" begin="forward.begin" dur="2s" values="0,314;160,270"
                    fill="freeze" />
                </circle>
                <circle id="circle2" cx="0" cy="0" r="0">
                  <animateMotion id="forward" dur="2s" begin="indefinite" repeatCount="1" keyPoints="0;1" keyTimes="0;1"
                    calcMode="linear" fill="freeze">
                    <mpath href="#pathID" />
                  </animateMotion>
                </circle>
              </g>
            </svg>
            <div class="statistics__box-value"><span id="value1">14</span></div>
            <span class="statistics__box-label">дней</span>
          </div>
          <p class="statistics__box-subtitle"><?php the_field('value-3');?></p>
        </div>
        <div class="statistics__box">
          <div class="statistics__box-circle">
            <svg class="statistics__box-circle-item" id="svg1" version="1.1" xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMin" width="150" height="150" viewBox="10 10 110 110">
              <defs>
                <linearGradient id="lgrad" x1="0%" y1="50%" x2="100%" y2="50%">
                  <stop offset="0%" style="stop-color:rgb(51,105,231);stop-opacity:1.00" />
                  <stop offset="100%" style="stop-color:rgb(142,67,231);stop-opacity:1.00" />
                </linearGradient>
              </defs>
              <g transform="rotate(180 60 60)">
                <circle stroke-linecap="butt" cx="50%" cy="50%" r="50" fill="#ffffff" stroke-dasharray="400"
                  stroke="#EEEEEE" stroke-width="9">
                </circle>
                <circle class="svgCircle" stroke-linecap="butt" cx="50%" cy="50%" r="50" fill="none"
                  stroke-dashoffset="0" stroke-dasharray="0,314" stroke="url(#lgrad)" stroke-width="9">
                  <animate attributeName="stroke-dasharray" begin="forward.begin" dur="2s" values="0,314;270,270"
                    fill="freeze" />
                </circle>
                <circle id="circle2" cx="0" cy="0" r="0">
                  <animateMotion id="forward" dur="2s" begin="indefinite" repeatCount="1" keyPoints="0;1" keyTimes="0;1"
                    calcMode="linear" fill="freeze">
                    <mpath href="#pathID" />
                  </animateMotion>
                </circle>
              </g>
            </svg>
            <div class="statistics__box-value"><span id="value1">6</span></div>
            <span class="statistics__box-label">лет</span>
          </div>
          <p class="statistics__box-subtitle"><?php the_field('value-4');?></p>
        </div>
      </div>
    </div>
  </div>