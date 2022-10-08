<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" placeholder="Enter your First Name">
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" placeholder="Enter your Last Name">
                    </div>
                </div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="email" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" placeholder="Enter your Password">
                        <i class="fa fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Upload Image</label>
                        <input type="file" >
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to chat">
                    </div>
                    <div class="link">Already signed up? <a href="#">Login now</a></div>
            </form>
        </section>
    </div>
    
    <script src="javascript/pass-show-hide.js"></script>
</body>
</html>