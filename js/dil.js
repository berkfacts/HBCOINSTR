// Function to set the selected language in localStorage
        function setSelectedLanguage(language) {
            localStorage.setItem('selectedLanguage', language);
        }

        // Function to get the selected language from localStorage
        function getSelectedLanguage() {
            return localStorage.getItem('selectedLanguage');
        }

        // Function to change the language
        function changeLanguage() {
            const languageSelect = document.getElementById('language-select');
            const selectedLanguage = languageSelect.value;

            // Set the selected language in localStorage
            setSelectedLanguage(selectedLanguage);

            // Define language-specific URLs
            const languageURLs = {
                'tr': 'index.php?lang=tr',
                'en': 'index.php?lang=en',
                'it': 'index.php?lang=it',
                'es': 'index.php?lang=es',
                'fr': 'index.php?lang=fr',
                'gr': 'index.php?lang=gr',
                'du': 'index.php?lang=du'
            };

            // Redirect to the selected language's URL
            window.location.href = languageURLs[selectedLanguage];
        }

        // Set the selected language on page load
        const selectedLanguage = getSelectedLanguage();
        if (selectedLanguage) {
            const languageSelect = document.getElementById('language-select');
            languageSelect.value = selectedLanguage;
        }
