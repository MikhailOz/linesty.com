<div class="preloader flex items-center justify-center fixed w-full h-full pb-[70px] z-[9999] transition duration-150 bg-midnightBlack" id="preloader">
  <div class="preloader-anim">
    <div class="border out"></div>
    <div class="border in"></div>
  </div>
</div>
<script id="loading-script" type="text/javascript">let htmlDOM=document.querySelector("html"),loading_script=document.getElementById("loading-script"),preloader=document.getElementById("preloader"),bodyDOM=document.body,body_overflow=window.getComputedStyle(bodyDOM).getPropertyValue("overflow"),overflow_changed=!1;"hidden"!==body_overflow&&(overflow_changed=!0,bodyDOM.style.overflow="hidden"),window.addEventListener("load",function(){setTimeout(function(){htmlDOM.classList.remove("loading"),preloader.style.transition="opacity 0.3s",preloader.style.opacity="0",setTimeout(function(){overflow_changed&&(bodyDOM.style.overflow=body_overflow),preloader.remove(),loading_script.remove()},300)},75)});</script>
</div>