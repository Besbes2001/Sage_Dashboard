const searchContainer = document.querySelector('.search-container');
      const searchIcon = document.querySelector('.search-icon');
      
      searchIcon.addEventListener('click', function() {
        if (searchContainer.style.display === 'none') {
          searchContainer.style.display = 'block';
        } else {
          searchContainer.style.display = 'none';
        }
      });