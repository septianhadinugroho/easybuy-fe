document.addEventListener('DOMContentLoaded', () => {
    const signInButton = document.getElementById('signIn');
    const signUpButton = document.getElementById('signUp');
    const logoutBtn = document.getElementById('logoutBtn');
    const container = document.getElementById('container');

    signInButton.addEventListener('click', () => {
        container.classList.remove('right-panel-active');
    });

    signUpButton.addEventListener('click', () => {
        container.classList.add('right-panel-active');
    });

    logoutBtn.addEventListener('click', () => {
        localStorage.removeItem('isLoggedIn');
        localStorage.removeItem('userData');
        window.location.href = 'loginstyles.html';
    });
});