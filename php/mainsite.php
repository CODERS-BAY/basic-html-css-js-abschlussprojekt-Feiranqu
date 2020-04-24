<?php

if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "feiranqu1@gmx.at";
        $headers = "From: ".$mailFrom;
        $txt = "Du hast ein Email von" .$name. "bekommen. \n\n".$message;

        mail($mailTo, $subject, $txt, $headers );

        header("Location: index.php?mailsend");

}
?>
                            <div class="account">
                                <div class="form-box">
                                    <div class="button-box">
                                        <button type="button" class="toggle-btn" onclick="login()">Login</button>
                                        <button type="button" class="toggle-btn" onclick="register()">Register</button>
                                    </div>
                                    <div class="social-icons">
                                        <img scr="fb.png">
                                        <img scr="tw.png">
                                        <img scr="gp.png">
                                    </div>
                                    <form id="login" class="input-group">
                                        <input type="text" class="input-field" placeholder="User ID" required>
                                        <input type="text" class="input-field" placeholder="Enter Password" required>
                                        <input type="checkbox" class="chech-box"><span class="span_password">Remember
                                            Password</span>
                                        <button type="submit" class="submit-btn">Login</button>
                                    </form>
                                    <form id="register" class="input-group">
                                        <input type="text" class="input-field" placeholder="User ID" required>
                                        <input type="email" class="input-field" placeholder="Email ID" required>
                                        <input type="text" class="input-field" placeholder="Enter your Password"
                                            required>
                                        <button type="submit" class="submit-btn">Login</button>
                                    </form>
                                </div>
                            </div>