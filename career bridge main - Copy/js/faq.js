
// FAQ accordion functionality
function toggleAnswer(element) {
    element.classList.toggle('active');
    const answer = element.querySelector('.answer');
    if (element.classList.contains('active')) {
        answer.style.maxHeight = answer.scrollHeight + 'px';
    } else {
        answer.style.maxHeight = 0;
    }
}