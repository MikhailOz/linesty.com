"use strict";

self_script = document.getElementById("self_config_content");
title_element = document.getElementById("page_title");
subtitle_element = document.getElementById("page_subtitle");

function title(title) {
    title_element.innerText = title;
    title_element = null;
}

function subtitle(subtitle) {
    subtitle_element.innerText = subtitle;
    subtitle_element = null;
}