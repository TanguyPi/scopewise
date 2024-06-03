import './bootstrap';


// Scroll down Learn More
document.getElementById('learnMore').addEventListener('click', () => {
    const targetDiv = document.getElementById('ScrollToLearnMore');
    targetDiv.scrollIntoView({ behavior: 'smooth', block: 'start' });
});

// Scroll down Get started
document.getElementById('getStarted').addEventListener('click', () => {
    const targetId = document.getElementById('ScrollGetStarted');
    targetId.scrollIntoView({ behavior: 'smooth', block: 'start' });
});