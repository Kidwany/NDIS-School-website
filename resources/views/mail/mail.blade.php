<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <style>
        {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        .main-color
        {
            color: #515365;
        }

        .app-color
        {
            color: #663399;
        }



        .email-container
        {
            background-color: #edf2f6;
            height: auto;
            margin:  20px auto;
        }

        .email-logo
        {
            margin: 50px auto 30px;
        }

        .username h4
        {
            margin: auto;
            color: #515365;
            font-size: 30px;
            font-weight: lighter;
        }

        .username strong
        {
            font-weight: bold;
        }

        .approve p
        {
            font-size: 16px;
        }

        .email-white-space
        {
            width: 90%;
            margin: auto;
            height: auto;
            background-color: white;
            margin-bottom: 15px;
        }

        .email-img
        {
            width: 15%;
            margin: auto;
        }

        .email-desc
        {
            width: 80%;
            text-align: center;
            font-weight: 300;
            margin: auto;
        }

        .email-img img
        {
            width: 100%;
            margin: 15px auto;

        }

        .code p
        {
            margin-bottom: 0;
            font-weight: 400;
            font-size: 30px;
        }

        hr
        {
            width: 90%;
            background-color: #e4e4e4;
            border: 1px solid #e4e4e4;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .code strong
        {
            font-size: 30px;
            font-weight: 400;
        }

        .verify-btn a
        {
            background-color: #663399;
            margin-bottom: 40px;
            margin-top: 10px;
            color: white;
            padding: 7px 50px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            text-decoration: none;
        }


        .download-section h4
        {
            margin-top: 26px;
            margin-bottom: 30px;
            font-size: 24px;
        }

        .download-text
        {
            margin-bottom: 20px;
            width: 80%;
            margin: auto;
            font-weight: 300;
        }

        .download-text p
        {
            margin-bottom: 50px;
        }
        .download-links  img
        {
            margin-bottom: 50px;
        }

        .download-links a:first-of-type img
        {
            margin-right: 10px;
        }

        /*============================== Bootstrap Style ========================*/

        .row
        {
            display: flex;
            width: 100%;
        }

        .container
        {
            width: 95%;
            margin: auto;
            display: flex;
        }

        .text-center
        {
            text-align: center;
        }

        .d-flex
        {
            display: flex;
        }

        .flex-row
        {
            flex-direction: row;
            -ms-flex-direction: row;
            -webkit-flex-direction: row;
        }

        .justify-content-center
        {
            justify-content: center;
        }

        /*============================================================================*/

        /************************************Large size*************************/
        @media only screen
        and (min-width: 1201px)
        {

        }

        /************************************Large size*************************/
        @media only screen
        and (min-width: 992px)
        and (max-width: 1200px)
        {

        }

        /****************************************medium size************************/
        @media only screen
        and (min-width: 768px)
        and (max-width: 991px)
        {

        }

        /*****************************************small size***************************/
        @media only screen
        and (min-width: 576px)
        and (max-width: 767px)
        {

        }

        /****************************************extra small size*****************************/
        @media only screen
        and (max-width: 576px)
        {


        }




    </style>
    <title>Title</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="email-container">
            <div class="row">
                <img src="{{asset('Group130.png')}}" class="email-logo">
            </div>
            <div class="row username">
                <h4>Hello <strong>{{$username}}</strong></h4>
            </div>
            <div class="row approve d-flex flex-row justify-content-center">
                <div class="col-md-10">
                    <p class="text-center font-weight-light main-color">Your <span class="app-color">Wzzaa</span>  account has been created successfully </p>
                </div>
            </div>

            <div class="">
                <div class="email-white-space">
                    <div class="email-img">
                        <div class="">
                            <img src="{{asset('img/assets/auth/email.png')}}">
                        </div>
                    </div>

                    <div class="email-desc">
                        <div class="col-md-10">
                            <p class="main-color font-weight-light text-center">
                                You can copy this following code and paste it in verification form or you can use smart link by click on the verify button
                            </p>
                        </div>
                    </div>

                    <div class="code">
                        <p class="main-color text-center">
                            <strong>{{$email_code}}</strong>
                        </p>
                    </div>

                    <hr>

                    <div class="verify-btn">
                        <div class="col-md-5 d-flex justify-content-center">
                            <a href="{{url('/verifyemail/'.$email_token.'/'.$email_code.'/'.$user_id)}}" class="btn">Verify</a>
                        </div>
                    </div>
                </div>

                <div class="email-white-space">
                    <div class="download-section">
                        <div class="col-sm-8 d-flex justify-content-center">
                            <h4 class="main-color text-center">Download Wzzaa App Now !!</h4>
                        </div>
                    </div>

                    <div class="download-text">
                        <div class="col-sm-10 ">
                            <p class="main-color font-weight-light text-center">
                                download mobile application of wzzaa the best social platform ever and connect with more tahn 500,000 active users
                            </p>
                        </div>
                    </div>

                    <div class=" download-links">
                        <div class="d-flex flex-row justify-content-center">
                            <a href="https://play.google.com/store/apps/details?id=com.smart.deals.wwzzaa"><img src="{{asset('img/download-google.png')}}"></a>
                            <a href="#"><img src="{{asset('img/download-apple.png')}}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>




