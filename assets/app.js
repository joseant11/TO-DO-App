const themeSwitch = document.getElementById('theme');

document.addEventListener('DOMContentLoaded', () => {
    if (localStorage.getItem('dark')) {
        document.body.setAttribute('data-theme', 'dark');
    }
})

/* THEME SWITCH */
themeSwitch.addEventListener('click', () => {
    if (!document.body.attributes['data-theme']) {
        document.body.setAttribute('data-theme', 'dark');
        localStorage.setItem('dark', true);
    } else {
        document.body.removeAttribute('data-theme');
        localStorage.removeItem('dark');
    }
});