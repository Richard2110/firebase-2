<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LIST</title>
    <script type="module">

  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js";
  import { getAuth, createUserWithEmailAndPassword} from "https://www.gstatic.com/firebasejs/10.12.1/firebase-auth.js";                  
 
  const firebaseConfig = {
    apiKey: "AIzaSyDM8HWj7tYvBTncVby8kPppzKQYDWC6TjY",
    authDomain: "testeaula2110.firebaseapp.com",
    projectId: "testeaula2110",
    storageBucket: "testeaula2110.appspot.com",
    messagingSenderId: "531430995328",
    appId: "1:531430995328:web:e3f2c52df75552bb313d65",
    
  };

  // Initialize Firebase
  window.fbApp = initializeApp(firebaseConfig);
  window.fbAuth = getAuth(window.fbApp);
  console.log(window.fbAuth);

  const btnRegister = document.getElementById('btnRegister')
  btnRegister.addEventListener('click', async ()=> {
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      console.log(email);
      console.log(password);
      try{
        console.log(window.fbApp);
          const userCredential = await createUserWithEmailAndPassword(window.fbAuth, email, password);
          console.log(userCredential);
       } catch (error) {
            console.log(error);
        }
      
 });

</script>
</head>
<body>
    <h1>TODO LIST</h1>
    <?php
        //include 'main.php' ?>

        <label for="email">Email</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password"><br>
        <button id="btnRegister">Registrar-se</button>
        
</body>
</html>