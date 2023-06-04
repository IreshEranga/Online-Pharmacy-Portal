(function(){

    const fonts = ["cursive"];

    //create variable for captha values
    let captchaValue = "";

    //generate the captha
    function gencaptcha()
    {
        //encode the value
        let value = btoa(Math.random()*1000000000);

        //extract value
        value = value.substring(0,5 + Math.random()*5);
        captchaValue = value;
    }

    function setcaptcha()
    {
        let html = captchaValue.split("").map((char)=>{
            const rotate = -20 + Math.trunc(Math.random()*30);
            const font = Math.trunc(Math.random()*fonts.length);
            return`<span
            style="
            transform:rotate(${rotate}deg);
            font-family:${font[font]};
            "
           >${char} </span>`;
        }).join("");
        document.querySelector(".login_form #captcha .preview").innerHTML = html;
    }

    function initCaptcha()
    {
        document.querySelector(".login_form #captcha .captcha_refersh").addEventListener("click",function(){
            gencaptcha();
            setcaptcha();
        });

        gencaptcha();
        setcaptcha();
    }
    initCaptcha();

    document.querySelector(".login_form .form_button").addEventListener("click",function(){
        let inputcaptchavalue = document.querySelector(".login_form #captcha input").value;

        if (inputcaptchavalue === captchaValue) 
        {
            // alert for successful log in
            alert("Log in success");
        }
        else
        {
            // allert for invalid capthcha
            alert("Invalid Captcha");
        }
    });
})();