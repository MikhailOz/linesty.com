<!DOCTYPE html>
<html lang="en" class="loading">
  <?php include_once '../components/includes/head.php' ?>
  <body class="flex h-screen overflow-hidden bg-midnightBlack">
    <?php include_once '../components/includes/preloader.php' ?>
    <nav class="flex flex-col min-w-[250px] max-w-[250px] transition-transform duration-200 z-10 overflow-overlay border border-r-slateGray bg-midnightBlack">
      <div class="flex items-center justify-between min-h-[80px] px-5">
        <a href="/">
          <svg xmlns="http://www.w3.org/2000/svg" width="150" height="24" viewBox="0 0 150 24" fill="none"><g clip-path="url(#clip0_74_2)"><path d="M88.166 0.030168C83.9039 0.431386 81.0749 2.20344 80.1747 5.02869C79.7338 6.39952 79.8807 8.43905 80.487 9.65942C81.6628 11.9831 83.5549 13.0196 88.8824 14.2232C92.2444 14.9923 93.3098 15.4771 93.3098 16.2628C93.3098 18.0349 90.6094 18.7871 87.1739 17.9847C85.4838 17.6002 84.3816 17.0819 82.8752 15.9619L81.7546 15.1427L81.0381 16.0121C80.6523 16.4969 79.9727 17.3662 79.5317 17.9346L78.7234 18.9878L79.1827 19.4224C79.4215 19.6564 80.34 20.2917 81.2402 20.8434C86.1085 23.8024 93.7139 23.6352 97.2045 20.4589C99.7764 18.1184 99.7396 13.5044 97.1677 11.164C95.7164 9.84331 94.1182 9.19133 90.1684 8.28859C87.7251 7.72019 86.5861 7.35241 86.1085 6.98463C85.6309 6.61684 85.686 5.74753 86.2003 5.31288C87.0821 4.56059 88.3314 4.42685 90.6828 4.87823C92.2811 5.17914 93.5119 5.69738 94.8897 6.61684L95.8083 7.2521L97.4249 5.3296L99.0232 3.40709L98.3251 2.85542C97.1861 1.93595 95.1653 0.983062 93.4935 0.548408C91.9871 0.14719 89.4887 -0.086854 88.166 0.030168Z" fill="white"/><path d="M0 11.4783V22.9565H7.97872H15.9574V20.54V18.1235H10.9233H5.88905V9.06178V0H2.94453H0V11.4783Z" fill="white"/><path d="M30.8511 11.4783V22.9565H33.761H36.8211V19.8261V16.4666C36.8211 16.4666 36.746 9.85577 36.8211 9.90755C36.9149 9.95933 39.2991 12.9109 42.1339 16.4666L47.2779 22.9565H50.244H53.1915V11.4783V1.99027e-06H50.5319L47.0901 0V6.81791V13.6185L41.6459 6.81791L36.2015 0.0172616L33.5356 1.99027e-06H30.8511V11.4783Z" fill="white"/><path d="M57.4468 2.6087V5.21739H65.9484H74.4681V2.6087V0H70.2128H65.9165H57.4468V2.6087Z" fill="white"/><path d="M57.4468 11.4783V14.087H65.9484H74.4681V11.4783V8.86957H70.2128H65.9165H57.4468V11.4783Z" fill="white"/><path d="M57.4468 20.3478V22.9565H65.9484H74.4681V20.3478V17.7391H70.2128H65.9165H57.4468V20.3478Z" fill="white"/><path d="M103.224 0.0297199C103.151 0.0798723 103.225 1.51429 103.225 2.73467V5.2471H106.743H110.169V13.7849V22.9863H113.126H115.937V13.7849V5.2471H119.509H122.7L122.698 2.63436L122.7 0.0297199H117.913H113.126C107.835 0.0297199 103.279 -0.0371499 103.224 0.0297199Z" fill="white"/><path d="M126.596 0L130.876 6.85087L135.303 13.0196V17.7674V22.9565H138.298H140.998V17.7841V13.0865L145.499 6.75057C145.499 6.75057 150 0.0334349 150 0C150 0 148.572 0 146.809 0H143.617L140.962 4.1928C139.511 6.34936 138.261 8.08797 138.169 8.07125C138.078 8.03782 136.828 6.2992 135.396 4.1928L132.447 0H131.383H129.787C127.128 0 126.596 0 126.596 0Z" fill="white"/><path d="M23.3519 2.6087C25.068 4.03479 26.5748 5.21739 26.5957 5.21739C26.5957 5.21739 26.5957 4.03479 26.5957 2.6087V0H23.4147H20.2128L23.3519 2.6087Z" fill="#9075FF"/><path d="M20.2128 16.1739V22.9565H23.4043H26.5957V16.1739V9.3913H23.4043H20.2128V16.1739Z" fill="white"/></g><defs><clipPath id="clip0_74_2"><rect width="150" height="24" fill="white"/></clipPath></defs></svg>
        </a>
        <svg class="hidden transition-colors duration-100 cursor-pointer stroke-white hover:stroke-electricViolet" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </div>
      <ul class="flex flex-col justify-start gap-y-11 h-[80%] px-5">
        <li>
          <h2 class="uppercase font-poppins text-sm font-medium text-stoneGray">Resources</h2>
          <ul class="flex flex-col gap-y-[0.3em] mt-3">
            <li>
              <a class="flex gap-x-2 relative py-1 px-2 rounded-md hover:bg-obsidianBlack" id="nav-menu-link-academy" href="#">
                <svg class="fill-none stroke-stoneGray" xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                </svg>
                <span class="self-center pt-[1px] capitalize leading-none font-poppins text-base font-normal text-white">Academy</span>
              </a>
            </li> 
            <li>
              <a class="flex gap-x-2 relative py-1 px-2 rounded-md hover:bg-obsidianBlack" id="nav-menu-link-tools" href="#">
                <svg class="fill-none stroke-stoneGray" xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewbox="0 0 24 24" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 01-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 11-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 016.336-4.486l-3.276 3.276a3.004 3.004 0 002.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.867 19.125h.008v.008h-.008v-.008z"></path>
                </svg>
                <span class="self-center pt-[1px] capitalize leading-none font-poppins text-base font-normal text-white">Tools</span>
              </a>
            </li> 
            <li>
              <a class="flex gap-x-2 relative py-1 px-2 rounded-md hover:bg-obsidianBlack" id="nav-menu-link-blog" href="#">
                <svg class="fill-none stroke-stoneGray" xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                </svg>
                <span class="self-center pt-[1px] capitalize leading-none font-poppins text-base font-normal text-white">Blog</span>
              </a>
            </li>   
          </ul>
        </li>
        <li>
          <h2 class="uppercase font-poppins text-sm font-medium text-stoneGray">News</h2>
          <a href="https://blog.monetory.io/en/maximise-your-trading-speed-and-profit-with-usdt-price-chrome-extension-from-monetory/">
            <img class="nav-menu-image mt-3 w-full rounded-md" src="/components/images/news.png" alt="News Image">
            <section class>
              <h3 class="mt-1 capitalize font-poppins font-normal text-xs leading-tight text-white">Maximise Your Trading Speed and Profit with USDT Price...</h3>
              <p class="capitalize font-poppins font-normal text-xs leading-none text-stoneGray">February 7, 2023</p>
            </section>
          </a>
        </li>
        <li>
          <h2 class="uppercase font-poppins text-sm font-medium text-stoneGray">Scanners</h2>
          <ul class="flex flex-col gap-y-[0.3em] mt-3">
            <li>
              <a class="flex gap-x-2 relative py-1 px-2 rounded-md hover:bg-obsidianBlack" id="nav-menu-link-arbitrage" href="/tools/arbitrage">
                <svg class="fill-none stroke-stoneGray" xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewbox="0 0 24 24" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z"></path>
                </svg>
                <span class="self-center pt-[1px] capitalize leading-none font-poppins text-base font-normal text-white">Arbitrage</span>
              </a>
            </li>
            <li>
              <a class="flex gap-x-2 relative py-1 px-2 rounded-md hover:bg-obsidianBlack" id="nav-menu-link-p2p" href="/tools/p2p">
                <svg class="fill-none stroke-stoneGray" xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewbox="0 0 24 24" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span class="self-center pt-[1px] capitalize leading-none font-poppins text-base font-normal text-white">P2P</span>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <h2 class="uppercase font-poppins text-sm font-medium text-stoneGray">Screeners</h2>
          <ul class="flex flex-col gap-y-[0.3em] mt-3">
            <li>
              <a class="flex gap-x-2 relative py-1 px-2 rounded-md hover:bg-obsidianBlack" id="nav-menu-link-liquidation" href="/tools/liquidation">
                <svg class="fill-none stroke-stoneGray" xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewbox="0 0 24 24" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"></path>
                </svg>
                <span class="self-center pt-[1px] capitalize leading-none font-poppins text-base font-normal text-white">Liquidation</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <main class="flex flex-col w-full z-1">
      <header class="flex items-center justify-between min-h-[80px] px-5">
        <div class="flex gap-x-10">
          <svg class="hidden" id="menu-interactor" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 22 24" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <span class="font-poppins text-xl font-medium text-white" id="page-title"></span>
          <a href="#" class="self-center transition-colors duration-100 font-poppins text-lg font-normal text-white">FAQ</a>
          <a href="#" class="self-center transition-colors duration-100 font-poppins text-lg font-normal text-white">Report Bug</a>
        </div>
        <div class="flex gap-x-7">
          <a href="#">
            <svg class="fill-none stroke-white" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
            </svg>
          </a>
          <a href="../authentication/signin.html">
            <svg class="fill-none stroke-white" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewbox="0 0 22 22" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
          </a>
        </div>
      </header>
      <div class="flex justify-between px-5">
        <div class="relative">
          <input type="text" class="pr-6 pl-2 py-1 font-poppins text-base font-normal rounded-sm bg-transparent outline-none outline-1 outline-darkSteelGray text-white focus:outline-2 focus:outline-electricViolet placeholder:text-graphiteGray" name="deposit" placeholder="Insert your bank" oninput="blockValues(['space', 'str'], this)" maxlength="8">
          <svg class="absolute right-1 top-[6px] fill-none stroke-graphiteGray" xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24" stroke-width="1.2"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" /></svg>
        </div>
        <button class="color-text-norm filter-refresh background-accent-static flex flex-align-y transition-fast text-base font-normal rounded-md cursor-pointer flex-align-y">
          Refresh offers
        </button>
      </div>
      <div class="table-container mt-8 flex px-5 overflow-overlay">
        <table class="table w-full">
          <thead class="table-head">
            <tr>
              <th class="color-text-norm font text-center capitalize text-base font-medium">Trading Pair</th>
              <th class="color-text-norm font text-center capitalize text-base font-medium">Buy at</th>
              <th class="color-text-norm font text-center capitalize text-base font-medium">Sell at</th>
              <th class="color-text-norm font text-center capitalize text-base font-medium">Spread</th>
              <th class="color-text-norm font text-center capitalize text-base font-medium">Profit</th>
              <th class="color-text-norm font text-center capitalize text-base font-medium">Fees</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="color-text-norm font-normal text-base text-center relative font" data-label="Trading Pair">BTC/USDT</td>
              <td class="color-text-norm font-normal text-base text-center relative font" data-label="Buy At">
                <a href="#" class="color-accent-static text-base font-medium leading-none">Binance</a>
                <br>
                <span class="color-text-norm text-sm font-light leading-none">24324.42$ - 33.23</span>
              </td>
              <td class="color-text-norm font-normal text-base text-center relative font" data-label="Sell At">
                <a href="#" class="color-accent-static text-base font-medium leading-none">KuCoin</a>
                <br>
                <span class="color-text-norm text-sm font-light leading-none">24562.18$ - 22.09</span>
              </td>
              <td class="color-text-norm font-normal text-base text-center relative font" data-label="Spread">24.1%</td>
              <td class="color-text-norm font-normal text-base text-center relative font" id="color-text-norm--success" data-label="Profit">421.12$</td>
              <td class="color-text-norm font-normal text-base text-center relative font" data-label="Fees">1.04BTC</td>
            </tr>      
          </tbody>
        </table>
      </div>
    </main>
    <div class="background-blur left-0 absolute"></div>
    <script defer src="/components/js/blockValues.js"></script>
    <script src="/components/js/configureClientPage.js"></script>
    <script src="/components/js/toggleMenu.js"></script>
    <script type="text/javascript">selectLinks(["nav-menu-link-arbitrage", "nav-menu-link-tools"]);titlePage("Arbitrage Scanner");</script>
  </body>
</html>