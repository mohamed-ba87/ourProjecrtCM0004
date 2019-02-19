<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tradesman Aberdeen</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/unsemantic-grid-responsive-tablet.css">

</head>

<body >


<div class="headControl">

    <div class="control-logo">

        <div class="img-cont" >
            <img src="#">
        </div>

        <div class="login">
            <table>
                <tr>
                    <td>Username or Email</td>
                    <td>Password</td>
                </tr>
                <tr>
                    <td><input  class="login-txt" type="text" name="username" placeholder="USername/Email" ></td>
                    <td><input class="login-txt" type="password" name="pasword" placeholder="Enter Password"></td>
                    <td><input type="submit" name="login" value="Login" class="btn"></td>
                </tr>
                <tr>
                    <td>&nbsp</td>
                    <td><a href="#">forgotten password!</a></td>
                </tr>
            </table>

        </div>

    </div>

</div>

<main class = "grid-container">

    <h1> Tradesman Aberdeen - "Insert tag here" </h1>

    <section class = grid-50>

    <form>
        <?php include('error.php');?>

        <h2>Create a User Account</h2>
        <h3>I need help!</h3>
        <div class="input">
            <label>First Name</label>
            <input type="text" name="1name" placeholder="First Name">
        </div>
        <div class="input">
            <label>Last Name</label>
            <input type="text" name="2name" placeholder="last name">
        </div>
        <div class="input">
            <label>Address</label>
            <input type="text" name="add1" placeholder="first line "><br>
            <input type="text" name="add2" placeholder="2end add line"><br>
            <input type="text" name="city" placeholder=" City Name"><br>
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
    </section>

    <section class = grid-50>
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
                    <select multiple id = "prof" placeholder = "Select Specialisations">
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
                <textarea id="aboutYou">
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
    </section>

</main>

</body>

</html>


