<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Niche</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('stylesheet')

</head>

<body>
@yield('content')
    <script>
        
        document.getElementById("buttonSignup").addEventListener("click", function (event) {
             event.preventDefault();
            document.getElementById("buttonSignup").innerHTML = "signing you up...";
            var formdata = {
                email: document.getElementById("InputEmail").value,
                password: document.getElementById("InputPassword").value,

            }
            console.log(formdata);

            postData("https://niche-vendor.herokuapp.com/register", formdata)
                .then(data => {
                    console.log(data)
                    document.getElementById("buttonSignup").innerHTML = "success";

                    if (data.status == 200) {
                        alert("Registration Successful")
                        window.location.replace("index.html");
                    }
                    // else if (data.status == 202) {
                    //     window.location.replace("vendor.html");
                    // }
                    // else if (data.status == 203) {
                    //     window.location.replace("courier.html");
                    // }
                    // else if (data.status == 200) {
                    //     window.location.replace("visitor.html");
                    // }

                    else if (data.status >= 400) {
                        alert("Please check the provided data and try again");
                        document.getElementById("buttonSignup").innerHTML = "try again";

                    }
                })
                .catch(err => {
                    console.log(err);
                    document.getElementById("buttonSignup").innerHTML = "try again";

                })

            });

            function postData(url, data) {
                // Default options are marked with *
                return fetch(url, {
                    body: JSON.stringify(data), // must match 'Content-Type' header
                    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
                    credentials: 'same-origin', // include, same-origin, *omit
                    headers: {
                        'user-agent': 'Mozilla/4.0 MDN Example',
                        'content-type': 'application/json'
                    },
                    method: 'POST', // *GET, POST, PUT, DELETE, etc.
                    mode: 'cors', // no-cors, cors, *same-origin
                    redirect: 'follow', // *manual, follow, error
                    referrer: 'no-referrer', // *client, no-referrer
                })
                    .then(response => response.json()) // parses response to JSON
            }

        

//========================================================================================

document.getElementById("buttonSignin").addEventListener("click", function (event) {
            event.preventDefault();
            document.getElementById("buttonSignin").innerHTML = "signing you in...";
            var formdata = {
                email: document.getElementById("Email").value,
                password: document.getElementById("Password").value,

            }
            console.log(formdata);

            postData("https://niche-vendor.herokuapp.com/login", formdata)
                .then(data => {
                    console.log(data)
                    document.getElementById("buttonSignin").innerHTML = "success";

                    if (data.status == 201) {
                        window.location.replace("custmer.html");
                    }
                    else if (data.status == 202) {
                        window.location.replace("vendor.html");
                    }
                    else if (data.status == 203) {
                        window.location.replace("courier.html");
                    }
                    else if (data.status == 200) {
                        window.location.replace("vistors.html");
                    }

                    else if (data.status >= 400) {
                        alert("Please check the provided data and try again");
                        document.getElementById("buttonSignin").innerHTML = "try again";

                    }
                })
                .catch(err => {
                    console.log(err);
                    document.getElementById("buttonSignin").innerHTML = "try again";

                })


        });
        function postData(url, data) {
            // Default options are marked with *
            return fetch(url, {
                body: JSON.stringify(data), // must match 'Content-Type' header
                cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
                credentials: 'same-origin', // include, same-origin, *omit
                headers: {
                    'user-agent': 'Mozilla/4.0 MDN Example',
                    'content-type': 'application/json'
                },
                method: 'POST', // *GET, POST, PUT, DELETE, etc.
                mode: 'cors', // no-cors, cors, *same-origin
                redirect: 'follow', // *manual, follow, error
                referrer: 'no-referrer', // *client, no-referrer
            })
                .then(response => response.json()) // parses response to JSON
        }


//============================================================================================

        document.getElementById("mVendor").addEventListener("click", function (event) {
            event.preventDefault();
            document.getElementById("mVendor").innerHTML = "upgrading to vendor...";
            var formdata = {
                shopAddress: document.getElementById("inputAddress").value,
                shopName: document.getElementById("inputShop").value,
                idType: document.getElementById("inputType").value,
                idNum: document.getElementById("inputNum").value,
                // access: document.getElementById("access").value
            }
            console.log(formdata);
            postData("https://niche-vendor.herokuapp.com/upgradeUserToVendor", formdata)
                .then(data => {
                    console.log(data)
                    document.getElementById("mVendor").innerHTML = "success";
                    if (data.status == 200) {
                        alert("Profile successfully Updated")
                        window.location.replace("vendor.html");
                    }
                    else if (data.status >= 400) {
                        alert("failed to complete, Please Try Again");
                        window.location.replace("index.html");
                    }

                    else if (data.status >= 400) {
                        alert("Please check the provided data and try again");
                        document.getElementById("mVendor").innerHTML = "try again";

                    }
                })
                .catch(err => {
                    console.log(err);
                    document.getElementById("mVendor").innerHTML = "try again";

                })
        });
        function postData(url, data) {
            // Default options are marked with *
            return fetch(url, {
                body: JSON.stringify(data), // must match 'Content-Type' header
                cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
                credentials: 'same-origin', // include, same-origin, *omit
                headers: {
                    'user-agent': 'Mozilla/4.0 MDN Example',
                    'content-type': 'application/json'
                },
                method: 'POST', // *GET, POST, PUT, DELETE, etc.
                mode: 'cors', // no-cors, cors, *same-origin
                redirect: 'follow', // *manual, follow, error
                referrer: 'no-referrer', // *client, no-referrer
            })
                .then(response => response.json()) // parses response to JSON
        }
    </script>
</body>

</html>