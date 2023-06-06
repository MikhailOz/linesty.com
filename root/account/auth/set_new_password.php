<!DOCTYPE html>
<html lang="en" class="loading">
  <body class="h-screen overflow-x-hidden overflow-y-auto bg-midnightBlack">
    <div class="justify-between h-full flex flex-col">
        <?php include_once '../components/includes/authentication_header.php' ?>
        <main class="flex flex-col gap-y-4 w-full sm:w-[28rem] mx-auto mb-9 px-5 sm:px-0">
            <div class="mt-6">
                <h1 class="text-xl font-medium font-poppins text-white sm:text-2xl">Reset Password</h1>
                <p class="mt-1 font-poppins text-base font-normal leading-tight text-white sm:text-lg sm:leading-tight">Enter your new password below containing at least 8 characters</p>
            </div>  
            <form method="post" class="new-password-form flex flex-col gap-y-4" id="form">
                <input type="hidden" id="token_response" name="token_response">
                <div>
                  <label class="cursor-pointer transition-all duration-75 select-none font-poppins text-base font-medium leading-none text-white" for="password" id="password_title">Password</label>
                  <div class="flex relative">
                    <svg class="absolute h-full w-[22px] stroke-white fill-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 28" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" /></svg>          
                    <input class="w-full appearance-none py-2 px-[2rem] outline-none border-b-2 text-lg font-poppins font-normal leading-none transition-colors duration-[120ms] bg-transparent text-white border-white focus:border-electricViolet placeholder:text-white" type="password" name="password" id="password" oninput="InputBlocker.blockValues(['space'], this);" autocorrect="off" autocapitalize="off" autocomplete="off" maxlength="256" placeholder="Enter your password">
                    <svg class="absolute right-0 h-full w-[22px] cursor-pointer stroke-white fill-none" xmlns="http://www.w3.org/2000/svg" onclick="showPassword(this, 'password');" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" /></svg>
                  </div>   
                </div>
                <div>
                  <label class="cursor-pointer select-none font-poppins text-base font-medium leading-none text-white" for="confirmation_password" id="confirmation_password_title">Confirm Password</label>
                  <div class="flex relative">
                    <svg class="absolute h-full w-[22px] stroke-white fill-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 28" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" /></svg>          
                    <input class="w-full appearance-none py-2 px-[2rem] outline-none border-b-2 text-lg font-poppins font-normal leading-none transition-colors duration-[120ms] bg-transparent text-white border-white focus:border-electricViolet placeholder:text-white" type="password" name="confirmation_password" id="confirmation_password" oninput="InputBlocker.blockValues(['space'], this);" autocorrect="off" autocapitalize="off" autocomplete="off" maxlength="256" placeholder="Re-enter your password">
                    <svg class="absolute right-0 h-full w-[22px] cursor-pointer stroke-white fill-none" xmlns="http://www.w3.org/2000/svg" onclick="showPassword(this, 'confirmation_password');" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" /></svg>
                  </div>      
                </div>
                <div class="mt-4 w-full">
                  <button class="relative w-full py-2 rounded-full transition duration-150 cursor-pointer font-poppins text-base font-normal text-white bg-majorelleBlue hover:bg-electricViolet active:bg-majorelleBlue" id="submit_button" type="submit">
                    Confirm
                  </button>
                </div>
            </form>
        </main>
        <br>
        <?php include_once '../components/includes/authentication_footer.php' ?>
    </div>
    <div class="flex justify-center w-screen absolute top-8" id="alerts"></div>
    <script src="/components/js/createElement.js"></script>
    <script src="/components/js/alerts.js"></script>
    <script src="/components/js/input.js"></script>
    <script src="/components/js/authentication.js"></script>
    <style>.grecaptcha-badge {visibility: hidden;}</style>
    <?php include_once '../components/includes/misc/push_session_upper_alerts.php'?>
  </body>
</html>