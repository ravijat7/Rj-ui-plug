document.addEventListener('DOMContentLoaded', function() {
    const animatedElements = document.querySelectorAll('.animated');

        function isElementInViewport(el) {
                const rect = el.getBoundingClientRect();
                        return (
                                    rect.top <= window.innerHeight &&
                                                rect.bottom >= 0
                                                        );
                                                            }

                                                                function handleScroll() {
                                                                        animatedElements.forEach(element => {
                                                                                    if (isElementInViewport(element)) {
                                                                                                    element.classList.add('visible');
                                                                                                                }
                                                                                                                        });
                                                                                                                            }

                                                                                                                                window.addEventListener('scroll', handleScroll);
                                                                                                                                    handleScroll(); // Initial check on page load
                                                                                                                                    });
                                                                                    
// auto 
   document.addEventListener('DOMContentLoaded', function() {
      const animatedElements = document.querySelectorAll('h1, h2, img');

      function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
          rect.top <= window.innerHeight &&
          rect.bottom >= 0
        );
      }

      function handleScroll() {
        animatedElements.forEach(element => {
          if (isElementInViewport(element) && !element.classList.contains('not')) {
            element.classList.add('visible');
          }
        });
      }

      window.addEventListener('scroll', handleScroll);
      handleScroll(); // Initial check on page load
    });
	
