setInterval(() => {
  fetch('php/chat.php')
.then(res => res.text())
.then(data => document.getElementById('chat-box').innerHTML = data);
}, 3000);

document.getElementById('chat-form').onsubmit = e => {
  e.preventDefault();
  fetch('php/chat.php', {
    method: 'POST',
    body: new FormData(e.target)
}).then(() => e.target.reset());
};
