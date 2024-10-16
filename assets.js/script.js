document.getElementById('LoginForm').addEventListener('submit', function(event){
    event.preventDefault();
  
    const correctUsername = "kania";
    const correctPassword = "kania";
  
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
  
  
  
    if (username === correctUsername && password === correctPassword){
      alert('Login Berhasil');
      window.location.href = 'index.html';
    }else{
      alert('Username atau password salah')
    }
  });