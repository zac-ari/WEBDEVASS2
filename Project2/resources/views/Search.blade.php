<!DOCTYPE html>
<html lang="en">
<head>
<title>Recipe Search</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Below is the bootstrap and Css used in labs it may need refinement/not sure what is needed -->

<!--Bootstrap CSS-->
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1
T" crossorigin="anonymous">

<!--Custom CSS-->
<style>
    body {
        margin: 0;
        padding: 0;
    }

    .text-container1 {
        width: 25%;
        border-radius: 20px;
        background-color: rgba(255, 255, 255, 0.6);
        padding: 10px;
        position: absolute;
        top: 16%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .text-container1 h1,
    .text-container1 p {
        color: #000000;
    }

    .text-container2 {
        background-color: rgba(193, 233, 201, 0.8);
        padding: 10px;
        position: absolute;
        top: 45%;
        left: 17.5%;
        width: 25%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .text-container2:hover {
        background-color: rgba(193, 233, 201, 1);
    }

    .text-container2 p {
        color: #333333;
    }

    .text-container2a {
        background-color: rgba(193, 233, 201, 0.8);
        padding: 10px;
        position: absolute;
        top: 67%;
        left: 17.5%;
        width: 25%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .text-container2a:hover {
        background-color: rgba(193, 233, 201, 1);
    }

    .text-container2a p {
        color: #333333;
    }

    .text-container2b {
        background-color: rgba(193, 233, 201, 0.8);
        padding: 10px;
        position: absolute;
        top: 89%;
        left: 17.5%;
        width: 25%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .text-container2b:hover {
        background-color: rgba(193, 233, 201, 1);
    }

    .text-container2b p {
        color: #333333;
    }

    .text-container3 {
        background-color: rgba(243, 202, 174, 0.8);
        padding: 10px;
        position: absolute;
        top: 45%;
        left: 50%;
        width: 25%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .text-container3:hover {
        background-color: rgba(243, 202, 174, 1);
    }

    .text-container3 p {
        color: #333333;
    }

    .text-container3a {
        background-color: rgba(243, 202, 174, 0.8);
        padding: 10px;
        position: absolute;
        top: 67%;
        left: 50%;
        width: 25%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .text-container3a:hover {
        background-color: rgba(243, 202, 174, 1);
    }

    .text-container3a p {
        color: #333333;
    }

    .text-container3b {
        background-color: rgba(243, 202, 174, 0.8);
        padding: 10px;
        position: absolute;
        top: 89%;
        left: 50%;
        width: 25%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .text-container3b:hover {
        background-color: rgba(243, 202, 174, 1);
    }

    .text-container3b p {
        color: #333333;
    }

    .text-container4 {
        background-color: rgba(196, 195, 219, 0.8);
        padding: 10px;
        position: absolute;
        top: 45%;
        left: 82.5%;
        width: 25%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .text-container4:hover {
        background-color: rgba(196, 195, 219, 1);
    }

    .text-container4 p {
        color: #333333;
    }

    .text-container4a {
        background-color: rgba(196, 195, 219, 0.8);
        padding: 10px;
        position: absolute;
        top: 67%;
        left: 82.5%;
        width: 25%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .text-container4a:hover {
        background-color: rgba(196, 195, 219, 1);
    }

    .text-container4a p {
        color: #333333;
    }

    .text-container4b {
        background-color: rgba(196, 195, 219, 0.8);
        padding: 10px;
        position: absolute;
        top: 89%;
        left: 82.5%;
        width: 25%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .text-container4b:hover {
        background-color: rgba(196, 195, 219, 1);
    }

    .text-container4b p {
        color: #333333;
    }
    
    img {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0.6;
    }

    .login-button {
        background-color: rgba(197, 62, 8, 0.8);
        padding: 10px 20px;
        position: absolute;
        top: 4%;
        left: 3.5%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        color: #000000;
    }

    .login-button:hover {
        background-color: rgba(197, 62, 8, 1);
    }

    a {
        text-decoration: none;
    }
    
</style>
</head>
<body>

    <div class="container-fluid p-0">
        
        <!--Background image-->
        <img src="Images/pastafull.jpg">
        
        <!--Button to return to user home page-->
        <a href="UserHomepage" class="login-button">Home</a>
        
        <!--Instructions-->
        <div class="text-container1">   
            <h1 class="display-4 text-center">Find a Recipe</h1>
            <hr class="my-4">
            <p>
                <!--Search bar will require action on search to look at SQL database-->
                <form>
                    <div class="form-group">
                      <input type="text" class="form-control" id="search" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </p>
        </div>
        
        <!--All below containers require action based on search to display results should only show if enough reslts i.e id only 3 results only 3 containers appear, also require action on click to pull information from SQL database-->
        <div class="text-container2">
            <a href="DummyDataBase">
            <p class="display-4 text-center"><b>Result 1</b></p>
            <p class="lead text-center">Summary from <br> database infomation</p>
        </div>

        <div class="text-container2a">
            <a href="DummyDataBase">
            <p class="display-4 text-center"><b>Result 2</b></p>
            <p class="lead text-center">Summary from <br> database infomation</p>
        </div>

        <div class="text-container2b">
            <a href="DummyDataBase">
            <p class="display-4 text-center"><b>Result 3</b></p>
            <p class="lead text-center">Summary from <br> database infomation</p>
        </div>
        
        <div class="text-container3">
            <a href="DummyDataBase">
                <p class="display-4 text-center"><b>Result 4</b></p>
                <p class="lead text-center">Summary from <br> database infomation</p>
        </div>

        <div class="text-container3a">
            <a href="DummyDataBase">
            <p class="display-4 text-center"><b>Result 5</b></p>
            <p class="lead text-center">Summary from <br> database infomation</p>
        </div>

        <div class="text-container3b">
            <a href="DummyDataBase">
            <p class="display-4 text-center"><b>Result 6</b></p>
            <p class="lead text-center">Summary from <br> database infomation</p>
        </div>
        
        <div class="text-container4">
            <a href="DummyDataBase">
            <p class="display-4 text-center"><b>Result 7</b></p>
            <p class="lead text-center">Summary from <br> database infomation</p>
        </div>

        <div class="text-container4a">
            <a href="DummyDataBase">
            <p class="display-4 text-center"><b>Result 8</b></p>
            <p class="lead text-center">Summary from <br> database infomation</p>
        </div>

        <div class="text-container4b">
            <a href="DummyDataBase">
            <p class="display-4 text-center"><b>Result 9</b></p>
            <p class="lead text-center">Summary from <br> database infomation</p>
        </div>

    </div>

</body>
</html>