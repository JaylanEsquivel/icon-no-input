<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Com Icons</title>
        <style>
            #clickthrough_form, #login_form {
                position: absolute;
                left: 0;
                top: 100px;
            }
            .input-req-login {
                color: #293a4a;
                font-size: 12px;
                font-weight: bold;
                padding-bottom: 8px;
                padding-left: 4px;
                width: 100%;
            }
            html[dir="ltr"] #reset_form .input-group input.std_textbox, html[dir="ltr"] .input-field-login.icon {
                background-position: 6px 6px;
            }
            #reset_form .input-group input.std_textbox, .input-field-login.icon, .input-field-login.no-icon {
                display: block;
                height: 32px;
                -khtml-border-radius: 4px;
                border-radius: 4px;
                border: 2px solid #bebebe;
                background-color: #fff;
                background-repeat: no-repeat;
            }
            div.username-container, div.reset-pass-container {
                background-image: url('http://idcidades.com.br:2082/cPanel_magic_revision_1335423820/unprotected/cpanel/images/icon-username.png');
            }
            .input-req-login {
                color: #293a4a;
                font-size: 12px;
                font-weight: bold;
                padding-bottom: 8px;
                padding-left: 4px;
                width: 100%;
            }
            html[dir="ltr"] #reset_form .input-group input.std_textbox, html[dir="ltr"] .input-field-login.icon {
                background-position: 6px 6px;
            }
            #reset_form .input-group input.std_textbox, .input-field-login.icon, .input-field-login.no-icon {
                display: block;
                height: 32px;
                -khtml-border-radius: 4px;
                border-radius: 4px;
                border: 2px solid #bebebe;
                background-color: #fff;
                background-repeat: no-repeat;
            }
            div.password-container {
                background-image: url('http://idcidades.com.br:2082/cPanel_magic_revision_1335423820/unprotected/cpanel/images/icon-password.png');
            }
            div.controls {
                display: inline-block;
            }
            .controls {
                width: 285px;
            }
            .clear {
                clear: both;
            }
            html[dir="ltr"] div.icon input.std_textbox {
                margin-left: 30px;
            }
            .input-field-login.icon input.std_textbox, .input-field-login.no-icon input.std_textbox {
                border: 1px solid #fff;
                padding: 0 10px;
                margin: 4px 5px 0 5px;
                border-radius: 4px;
                -khtml-border-radius: 4px;
            }
            #reset_form .input-group input.std_textbox, div.icon input.std_textbox, div.no-icon input.std_textbox {
                width: 220px;
                background: transparent;
                border: 0;
                -khtml-border-radius: 0;
                border-radius: 0;
                box-shadow: none;
                outline: 0;
            }
            input.std_textbox {
                width: 254px;
                height: 22px;
                margin: 5px 0;
                -khtml-border-radius: 4px;
                border-radius: 4px;
                border: 2px solid #bebebe;
                background-color: #fff;
                color: #000;
                font-family: "Open Sans",sans-serif;
                font-size: 13px;
            }
            input[type="text"], input[type="password"] {
                -webkit-appearance: none;
            }
            user agent stylesheet
            input:not([type]), input[type="email" i], input[type="number" i], input[type="password" i], input[type="tel" i], input[type="url" i], input[type="text" i] {
                padding: 1px 0px;
            }
            html[dir="ltr"] div.icon input.std_textbox {
                margin-left: 30px;
            }
            html[dir="ltr"] #reset_form .input-group input.std_textbox, html[dir="ltr"] .input-field-login.icon {
    background-position: 10px 6px;
}
        </style>
    </head>
    <body>
                        <form novalidate="" id="login_form" action="/login/" method="post" target="_self">
                            <div class="input-req-login"><label for="user">Nome de usuário</label></div>
                            <div class="input-field-login icon username-container">
                                <input name="user" id="user" autofocus="autofocus" value="" placeholder="Digite seu nome de usuário." class="std_textbox" type="text" tabindex="1" required="" style="margin-left:12px;">
                            </div>
                            <div style="margin-top:30px;" class="input-req-login"><label for="pass">Senha</label></div>
                            <div class="input-field-login icon password-container">
                                <input name="pass" id="pass" placeholder="Digite a senha da conta." class="std_textbox" type="password" tabindex="2" required="" style="margin-left:12px;">
                            </div>
                            <div class="controls">
                                <div class="login-btn">
                                    <button name="login" type="submit" id="login_submit" tabindex="3">Login</button>
                                </div>

                                                            </div>
                            <div class="clear" id="push"></div>
                        </form>
    </body>
</html>
