document.addEventListener('DOMContentLoaded', () => {
    const words = ['Encouraged', 'Blessed', 'Loved'];
    const navbar = document.querySelector('.navbar');
    const wordsContainer = document.querySelector('.words-container');
    let i = -1;

    window.addEventListener('scroll', () => {
        navbar.offsetTop;
    });

    const wordChanger = (text) => {
        setInterval(() => {
            if (i <= text.length - 2) {
                i += 1;
                wordsContainer.innerText = `${text[i].toUpperCase()}`;
            } else if (i === -1) {
                i += 1;
                wordsContainer.innerText = 'BE <span class="words-container">FAITHFUL</span>';
            } else {
                i = -1;
                wordsContainer.parentNode.innerHTML = 'A.C.T.I.O.N.<small>A Christian Team Inspiring Our Nation</small>';
            }
        }, 4000);
    };

    wordChanger(words);
});
