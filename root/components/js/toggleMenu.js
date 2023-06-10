"use strict";

let nav = document.querySelector(".nav-container"),
togglers = document.getElementsByClassName("nav-interactor"),
open = !1;

function toggleMenu() {
    open ? (nav.style.left = "-100%", open = !1) : !1 === open && (nav.style.left = "0", open = !0)
}

togglers[0].addEventListener("click", toggleMenu), togglers[1].addEventListener("click", toggleMenu);