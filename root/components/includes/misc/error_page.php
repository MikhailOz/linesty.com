<!DOCTYPE html>
<html lang="en">
    <?php include_once '../components/includes/base_head.php' ?>    
    <body class="overflow-hidden bg-midnightBlack">
        <div class="flex flex-col min-h-screen">
            <div class="h-screen">    
                <header class="flex items-center min-h-[64px] px-5">
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="24" viewBox="0 0 150 24" fill="none">
                            <g clip-path="url(#clip0_74_2)">
                                <path d="M88.166 0.030168C83.9039 0.431386 81.0749 2.20344 80.1747 5.02869C79.7338 6.39952 79.8807 8.43905 80.487 9.65942C81.6628 11.9831 83.5549 13.0196 88.8824 14.2232C92.2444 14.9923 93.3098 15.4771 93.3098 16.2628C93.3098 18.0349 90.6094 18.7871 87.1739 17.9847C85.4838 17.6002 84.3816 17.0819 82.8752 15.9619L81.7546 15.1427L81.0381 16.0121C80.6523 16.4969 79.9727 17.3662 79.5317 17.9346L78.7234 18.9878L79.1827 19.4224C79.4215 19.6564 80.34 20.2917 81.2402 20.8434C86.1085 23.8024 93.7139 23.6352 97.2045 20.4589C99.7764 18.1184 99.7396 13.5044 97.1677 11.164C95.7164 9.84331 94.1182 9.19133 90.1684 8.28859C87.7251 7.72019 86.5861 7.35241 86.1085 6.98463C85.6309 6.61684 85.686 5.74753 86.2003 5.31288C87.0821 4.56059 88.3314 4.42685 90.6828 4.87823C92.2811 5.17914 93.5119 5.69738 94.8897 6.61684L95.8083 7.2521L97.4249 5.3296L99.0232 3.40709L98.3251 2.85542C97.1861 1.93595 95.1653 0.983062 93.4935 0.548408C91.9871 0.14719 89.4887 -0.086854 88.166 0.030168Z" fill="white"/>
                                <path d="M0 11.4783V22.9565H7.97872H15.9574V20.54V18.1235H10.9233H5.88905V9.06178V0H2.94453H0V11.4783Z" fill="white"/>
                                <path d="M30.8511 11.4783V22.9565H33.761H36.8211V19.8261V16.4666C36.8211 16.4666 36.746 9.85577 36.8211 9.90755C36.9149 9.95933 39.2991 12.9109 42.1339 16.4666L47.2779 22.9565H50.244H53.1915V11.4783V1.99027e-06H50.5319L47.0901 0V6.81791V13.6185L41.6459 6.81791L36.2015 0.0172616L33.5356 1.99027e-06H30.8511V11.4783Z" fill="white"/>
                                <path d="M57.4468 2.6087V5.21739H65.9484H74.4681V2.6087V0H70.2128H65.9165H57.4468V2.6087Z" fill="white"/>
                                <path d="M57.4468 11.4783V14.087H65.9484H74.4681V11.4783V8.86957H70.2128H65.9165H57.4468V11.4783Z" fill="white"/>
                                <path d="M57.4468 20.3478V22.9565H65.9484H74.4681V20.3478V17.7391H70.2128H65.9165H57.4468V20.3478Z" fill="white"/>
                                <path d="M103.224 0.0297199C103.151 0.0798723 103.225 1.51429 103.225 2.73467V5.2471H106.743H110.169V13.7849V22.9863H113.126H115.937V13.7849V5.2471H119.509H122.7L122.698 2.63436L122.7 0.0297199H117.913H113.126C107.835 0.0297199 103.279 -0.0371499 103.224 0.0297199Z" fill="white"/>
                                <path d="M126.596 0L130.876 6.85087L135.303 13.0196V17.7674V22.9565H138.298H140.998V17.7841V13.0865L145.499 6.75057C145.499 6.75057 150 0.0334349 150 0C150 0 148.572 0 146.809 0H143.617L140.962 4.1928C139.511 6.34936 138.261 8.08797 138.169 8.07125C138.078 8.03782 136.828 6.2992 135.396 4.1928L132.447 0H131.383H129.787C127.128 0 126.596 0 126.596 0Z" fill="white"/>
                                <path d="M23.3519 2.6087C25.068 4.03479 26.5748 5.21739 26.5957 5.21739C26.5957 5.21739 26.5957 4.03479 26.5957 2.6087V0H23.4147H20.2128L23.3519 2.6087Z" fill="#9075FF"/>
                                <path d="M20.2128 16.1739V22.9565H23.4043H26.5957V16.1739V9.3913H23.4043H20.2128V16.1739Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_74_2">
                                    <rect width="150" height="24" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </header>
                <main class="flex items-end h-[40%] mx-auto">
                    <div class="flex flex-col items-center w-full px-5">
                        <h1 class="font-poppins text-5xl font-semibold text-white" id="page_title"></h1>
                        <p class="max-w-lg text-center font-poppins text-lg font-normal text-white" id="page_subtitle"></p>
                        <a class="mt-5 px-3 py-1 transition-colors duration-150 font-poppins text-lg font-normal rounded-md text-white bg-lavenderIndigo hover:bg-electricViolet hover:text-white" href="/">Return to the homepage</a>
                    </div>
                </main>
            </div>
        </div>
        <script src="/components/js/configPageContent.js" id="self_config_content"></script>
    </body>
</html>