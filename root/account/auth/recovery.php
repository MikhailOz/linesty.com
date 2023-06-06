<!DOCTYPE html>
<html lang="en" class="loading">
  <body class="h-screen overflow-x-hidden overflow-y-auto bg-midnightBlack">
    <div class="justify-between h-full flex flex-col">
        <?php include_once '../components/includes/authentication_header.php' ?>
        <main class="flex flex-col gap-y-4 w-full sm:w-[28rem] mx-auto px-5 sm:px-0">
            <div class="mt-6">
                <h1 class="text-xl font-medium font-poppins text-white sm:text-2xl">Recovery of Password</h1>
                <p class="mt-1 font-poppins text-base font-normal leading-tight text-white sm:text-lg sm:leading-tight">If you remember your password <br> You can <a class="transition-colors duration-100 font-semibold text-lavenderIndigo hover:text-electricViolet" href="/account"> Login</a></p>
            </div>  
            <form method="post" class="recovery-form flex flex-col gap-y-4" id="form">
                <input type="hidden" id="token_response" name="token_response">
                <div>
                  <label class="cursor-pointer transition-all duration-75 select-none font-poppins text-base font-medium leading-none text-white" for="email" id="email_title">Email</label>
                  <div class="flex relative">
                    <svg class="absolute h-full w-[22px] stroke-white fill-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 26" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>          
                    <input class="w-full py-2 px-[2rem] outline-none border-b-2 text-lg font-poppins font-normal leading-none transition-colors duration-[120ms] bg-transparent text-white border-white focus:border-electricViolet placeholder:text-white" type="text" name="email" id="email" oninput="InputBlocker.blockValues(['space'], this);" autocorrect="off" autocomplete="off" autocapitalize="off" <?php if (isset($_GET['email'])) {?> value="<?=htmlspecialchars($_GET['email'])?>" <?php } ?> placeholder="Enter your email">
                  </div>
                </div>
                <div class="mt-4 w-full">
                  <button class="relative w-full py-2 rounded-full transition duration-150 cursor-pointer font-poppins text-base font-normal text-white bg-majorelleBlue hover:bg-electricViolet active:bg-majorelleBlue" id="submit_button" type="submit">
                    Continue
                  </button>
                  <div class="text-center py-4">
                    <a class="transition-colors duration-100 px-2 py-1 rounded-md font-poppins text-base font-normal text-stoneGray hover:bg-midnightIndigo hover:text-mistyGray" href="/account/?signup">Create an account</a>
                  </div>
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