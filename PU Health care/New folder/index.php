<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://cdn.scaledrone.com/scaledrone.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background: #0098ff;
      display: flex;
      flex-direction: column;
      height: 100vh;
      margin: 0;
      align-items: center;
      justify-content: center;
      padding: 0 20px;
      font-family: Arial, sans-serif;
    }
    video {
      max-width: calc(50% - 100px);
      margin: 0 50px;
      box-sizing: border-box;
      border-radius: 5px;
      padding: 0;
      background: white;
    }
    textarea {
      margin-top: 20px;
      width: 100%;
      max-width: 500px;
      height: 100px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      box-sizing: border-box;
    }
    button {
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      background-color: #f44336;
      color: white;
    }
  </style>
  <title>Video Call with Feedback</title>
</head>
<body>
  <h1>Video Call</h1>
  <video id="localVideo" autoplay muted></video>
  <video id="remoteVideo" autoplay></video>
  <a href="/labaa/project/index.php" id="welcomeLink" target=_blank >
    <button id="welcomeBtn">Message</button>
  </a>
  <!-- <textarea id="commentBox" placeholder="Enter your feedback here..."></textarea> -->
  <!-- <button id="endCall">End Call</button> -->
  <!-- <button id="welcomeBtn">Message</button> -->

  <script src="script.js"></script>
  <script>
        // Redirects to a blank new page when "Welcome" button is clicked
    //     document.getElementById("welcomeBtn").addEventListener("click", () => {
    //   window.open('./labaa/projec/index.php', '_blank');
    // });
  </script>
</body>
</html>
