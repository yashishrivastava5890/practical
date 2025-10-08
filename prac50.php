<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Switcher</title>
    <style>
        /* Default light theme */
        body {
            background-color: #ffffff;
            color: #000000;
            font-family: Arial, sans-serif;
            transition: all 0.3s ease;
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }

        button {
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Dark Theme */
        body.dark-mode {
            background-color: #121212;
            color: #f1f1f1;
        }

        button#lightBtn {
            background-color: #f1f1f1;
            color: #000;
        }

        button#darkBtn {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Theme Preference Example</h1>
        <button id="lightBtn">Light Mode</button>
        <button id="darkBtn">Dark Mode</button>
        <p>This is a sample text to show theme effect.</p>
    </div>

    <script>
        // Function to set cookie
        function setCookie(name, value, days) {
            const d = new Date();
            d.setTime(d.getTime() + (days*24*60*60*1000));
            const expires = "expires="+ d.toUTCString();
            document.cookie = name + "=" + value + ";" + expires + ";path=/";
        }

        // Function to get cookie
        function getCookie(name) {
            const cname = name + "=";
            const decodedCookie = decodeURIComponent(document.cookie);
            const ca = decodedCookie.split(';');
            for(let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(cname) == 0) {
                    return c.substring(cname.length, c.length);
                }
            }
            return "";
        }

        // Apply theme based on cookie
        function applyTheme(theme) {
            if(theme === "dark") {
                document.body.classList.add("dark-mode");
            } else {
                document.body.classList.remove("dark-mode");
            }
        }

        // On page load, check cookie
        window.onload = function() {
            const theme = getCookie("theme");
            if(theme) {
                applyTheme(theme);
            }
        }

        // Event listeners for buttons
        document.getElementById("lightBtn").addEventListener("click", function() {
            applyTheme("light");
            setCookie("theme", "light", 30); // remember for 30 days
        });

        document.getElementById("darkBtn").addEventListener("click", function() {
            applyTheme("dark");
            setCookie("theme", "dark", 30); // remember for 30 days
        });
    </script>
</body>
</html>