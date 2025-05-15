<!DOCTYPE html>
<html>
<head>
    <title>Username Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        #submitBtn {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        #username {
            padding: 8px;
            font-size: 16px;
            width: 200px;
        }
        #result {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Username Verification</h2>
    <input type="text" id="username" placeholder="Enter username" />
    <button id="submitBtn">Submit</button>
    <p id="result"></p>

    <script src="verify_ajax.js"></script>
</body>
</html>
