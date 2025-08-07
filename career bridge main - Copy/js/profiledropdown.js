
// profile dropown

document.addEventListener('DOMContentLoaded', () => {
  const profileAvatar = document.getElementById('profile-menu-toggle');
  const profileDropdown = document.getElementById('profile-dropdown');

  profileAvatar.addEventListener('click', () => {
      const isOpen = profileDropdown.classList.contains('show');
      profileDropdown.classList.toggle('show');

      if (isOpen) {
          // If closing, reset transition delays
          profileDropdown.querySelectorAll('.dropdown-item').forEach(item => {
              item.style.transitionDelay = '0s';
          });
      } else {
          // If opening, apply transition delays
          profileDropdown.querySelectorAll('.dropdown-item').forEach((item, index) => {
              item.style.transitionDelay = `${index * 0.1}s`;
          });
      }
  });

  document.addEventListener('click', (e) => {
      if (!profileDropdown.contains(e.target) && e.target !== profileAvatar) {
          profileDropdown.classList.remove('show');
          // Reset transition delays when closing
          profileDropdown.querySelectorAll('.dropdown-item').forEach(item => {
              item.style.transitionDelay = '0s';
          });
      }
  });
});