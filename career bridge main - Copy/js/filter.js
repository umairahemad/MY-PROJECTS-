// JavaScript for filter functionality
const filterButton = document.querySelector('.filter-bar button');
const jobBoxes = document.querySelectorAll('.job-listing');

filterButton.addEventListener('click', () => {
    const searchText = document.querySelector('.filter-bar input').value.toLowerCase();
    const selectedLocation = document.querySelector('.filter-bar select').value.toLowerCase();

    jobBoxes.forEach(jobBox => {
        const jobTitle = jobBox.querySelector('.job-title').textContent.toLowerCase();
        const jobLocation = jobBox.querySelector('.job-location').textContent.toLowerCase();

        if (jobTitle.includes(searchText) && (selectedLocation === '' || jobLocation.includes(selectedLocation))) {
            jobBox.style.display = 'block';
        } else {
            jobBox.style.display = 'none';
        }
    });
});