<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Tradesman</title>
    <link rel="stylesheet" href="CSS/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<main class = "grid-container">
    <div class = "grid-100">

        <div class = "headControl">
            <div  class="control-logo">

                <header >
                    <div class = "logo">
                        <img src = "#">
                    </div>

                    <div class = "login">
                        <table >
                            <tr>
                                <td>Username or Email</td>
                                <td>Password</td>
                            </tr>
                            <tr>
                                <td><input  class="login-txt" type="email" name="username5" placeholder="Email" ></td>
                                <td><input class="login-txt" type="password" name="password5" placeholder="Enter Password"></td>
                                <td><input type="submit" name="login" value="Login" class="btn"></td>
                            </tr>
                            <tr>
                                <td>&nbsp</td>
                                <td><a href="#">forgotten password!</a></td>
                            </tr>
                        </table>
                    </div>
                </header>
            </div>
        </div>
    </div>


    <div id = "title">
        <h1>Tradesman Aberdeen </h1>
        <h2>Connecting  tradesmen to the people who need them.</h2>
    </div>

    <section class = grid-50>
        <div id = "userForm">
            <form method="post" action="server.php">
                <h2>Create a User Account</h2>
                <h3>I need help!</h3>
                <div class="input">
                    <label>First Name</label>
                    <input type="text" name="1name" placeholder="First Name">
                </div>
                <div class="input">
                    <label>Last Name</label>
                    <input type="text" name="u2name" placeholder="last name">
                </div>
                <div class="input">
                    <label>Address</label>
                    <input type="text" name="add1" placeholder=""><br>
                    <input type="text" name="add2" placeholder=""><br>
                    <input type="text" name="city" placeholder=""><br>
                    <label>Post Code</label>
                    <input type="text" name="postcode" placeholder="postcode">
                </div>
                <div class="input">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="input">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="email">
                </div>
                <div class="input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="password">
                </div>
                <div class="input">
                    <label>Confirm Password</label>
                    <input type="password" name="password1" placeholder="confirm password">
                </div>
                <div class="input">
                    <button type="submit" name="userRej" class="btn">Register as User</button>
                </div>
            </form>
        </div>
    </section>

    <section class = grid-50>
        <div id = "tradeForm">
            <form>
                <h2>Create a Tradesman Account</h2>
                <h3>I can help!</h3>
                <div class="input">
                    <label>First Name</label>
                    <input type="text" name="1name" placeholder="First Name">
                </div>
                <div class="input">
                    <label>Last Name</label>
                    <input type="text" name="u2name" placeholder="last name">
                </div>
                <div class="input">
                    <label>Address</label>
                    <input type="text" name="num" placeholder=""><br>
                    <input type="text" name="1num" placeholder=""><br>
                    <input type="text" name="2num" placeholder=""><br>
                    <label>Post Code</label>
                    <input type="text" name="postcode" placeholder="postcode">
                </div>
                <div class="input">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="input">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="email">
                </div>
                <div class="input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="password">
                </div>
                <div class="input">
                    <label>Confirm Password</label>
                    <input type="password" name="password1" placeholder="confirm password">
                </div>
                <div class="input" id = "profSelect">
                    <div class="input">
                        <label>Profession</label>
                        <select multiple name = "profession" id = "prof">
                            <option value = "Builder" selected>Builder</option>
                            <option value = "Plumber">Plumber</option>
                            <option value = "Electrician">Electrician</option>
                            <option value = "Stone Mason">Stone Mason</option>
                            <option value = "Welder">Welder</option>
                            <option value = "Carpenter">Carpenter</option>
                            <option value = "Painter/Decorator">Painter/Decorator</option>
                            <option value = "Handyman">Handyman</option>
                        </select>
                        <p>Press ctrl to select multiple</p>
                    </div>
                </div>
                <div class="input">
                    <label>About you</label>
                    <textarea name = "About You" id="aboutYou">
                    Please enter a brief description of yourself and the work you do.
                </textarea>
                </div>
                <div class="input">
                    <label>Qualifications</label>
                    <textarea id = "qualification">
                    Please list any qualifications you have here.
                </textarea>
                </div>
                <div class="input">
                    <button type="submit" name="tradesRej" class="btn">Register as Tradesman </button>
                </div>
            </form>
        </div>
    </section>
    </div>
</main>

</body>
</html>
